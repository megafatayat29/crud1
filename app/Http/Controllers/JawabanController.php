<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function store(Request $request, $pertanyaan_id){
        $request->pertanyaan_id = $pertanyaan_id;
        $new_jawaban = JawabanModel::save($request->all());
        return redirect('/jawaban/' . $new_jawaban->pertanyaan_id);
    }

    public function index($pertanyaan_id){
        $item = JawabanModel::find_by_id($pertanyaan_id);
        // dd($item);
        return view('jawaban.index', compact('item'));
    }
}
