@extends('adminlte.master')

@section('content')

<div class="ml-3 mt-3">
    <div>
        <div class="card">
            <h1 class="ml-3">Tabel Pertanyaan</h1>
            <div class="card-header">
                <a href="/pertanyaan/create" class="btn btn-primary mb-2">
                    Create New Pertanyaan
                </a>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Dibuat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- {{ dd($pertanyaan )}} --}}
                    @foreach ($pertanyaan as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->isi }}</td>
                            <td>{{ $item->tanggal_dibuat }}</td>
                            <td>
                                <a href="/jawaban/{{$item->id}}" class="btn btn-sm btn-info">Jawaban</a>
                                <a href="#" class="btn btn-sm btn-info">Update</a>
                                <a href="#" class="btn btn-sm btn-warning">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    
</div>

    
@endsection