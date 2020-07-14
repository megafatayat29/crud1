@extends('adminlte.master')

@section('content')
    <div class="card ml-3 mt-3">
        <div class="mt-3 ml-3 mb-3">
            <form action="{{ url('/pertanyaan/'.$id) }}" method="POST">
                {{ method_field('put') }}
                @csrf
                <input hidden name="id" value="{{ $id }}">
                <label for="">Judul</label>
                <input class="form-control" type="text" name="judul" value="{{ $pertanyaan->judul }}"><br>
                <label for="">Isi</label>
                <input class="form-control" type="text" name="isi" value="{{ $pertanyaan->isi }}"><br>
                <label for="">Tanggal Dibuat</label>
                <input hidden class="form-control" type="text" name="tanggal_dibuat" value="{{ $pertanyaan->tanggal_dibuat }}"><br>
                <label for="">Tanggal Diperbaharui</label>
                <input hidden class="form-control" type="text" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}"><br>
                <br>
                <button type="submit" class="btn btn-warning">Update Pertanyaan</button>
            </form>
        </div>
    </div>
@endsection