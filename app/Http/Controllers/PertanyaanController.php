<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

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

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $items = JawabanModel::find_by_id($id);
        return view('jawaban.detail', compact('pertanyaan', 'items'));
    }   
    
    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan','id'));
    }

    public function update(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        PertanyaanModel::update($data);
        return redirect('/pertanyaan');
    }

    public function delete($data){
        PertanyaanModel::delete($data);
        return redirect('/pertanyaan');
    }
}
