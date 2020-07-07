@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/jawaban" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                      <label for="isi">Isi Jawaban</label>
                      <input type="textbox" class="form-control" id="isi" name="isi" placeholder="Masukkan Isi Jawaban">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>

    
@endsection