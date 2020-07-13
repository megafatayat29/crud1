<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function store(Request $request, $pertanyaan_id){
        $data = $request->all();
        unset($data["_token"]);
        JawabanModel::save($data);
        return redirect('/pertanyaan');
    }

    public function index($pertanyaan_id){
        $items = JawabanModel::find_by_id($pertanyaan_id);
        // dd($item);
        return view('jawaban.index', compact('items','pertanyaan_id'));
    }
}
