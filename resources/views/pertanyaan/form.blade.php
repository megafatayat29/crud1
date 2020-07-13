@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url("/pertanyaan") }}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul Pertanyaan</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Pertanyaan">
                </div>
                <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea class="form-control" id="" name="isi" cols="30" rows="10" placeholder="Masukkan Isi Pertanyaan"></textarea>
                </div>
                <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
                <input hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
              </div>
            </form>
          </div>
    </div>

    
@endsection