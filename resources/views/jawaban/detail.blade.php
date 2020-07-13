@extends('adminlte.master')

@section('content')
<div class="card ml-3 mt-3">
    <div class="ml-3 mt-3">
    <h1>Pertanyaan</h1><br>
    <p>Judul: {{ $pertanyaan->judul }}</p><br>
    <p>Isi: {{ $pertanyaan->isi }}</p><br>
    <p>Tanggal Dibuat: {{ $pertanyaan->tanggal_dibuat }}</p><br>
    <p>Tanggal Diperbaharui: {{ $pertanyaan->tanggal_diperbaharui }}</p><br>

    <h2>Jawaban</h2><br>
    @foreach ($items as $jawaban)
    <p> {{ $jawaban->isi }}</p>
        
    @endforeach
    </div>
</div>
    
@endsection