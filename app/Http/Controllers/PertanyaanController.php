<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $new_pertanyaan = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan->all());
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    
}
