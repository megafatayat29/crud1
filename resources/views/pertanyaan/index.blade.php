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
                    <th>No</th>
                    <th>List Pertanyaan</th>
                    <th>Edit Pertanyaan</th>
                    <th>Detail Jawaban</th>
                    <th>Form Jawaban</th>
                    <th>Detail QnA</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- {{ dd($pertanyaan )}} --}}
                    @foreach ($pertanyaan as $key => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->isi }}</td>
                            <td>
                              <a href="{{ url('/pertanyaan/'.$item->id.'/edit') }}">
                                <button class="btn btn-warning">Edit Pertanyaan</button>
                              </a>
                            </td>
                            <td>
                              <a href="{{ url('/jawaban/'.$item->id) }}">
                                <button class="btn btn-success">Lihat Jawaban</button>
                              </a>
                            </td>
                            <td>
                                <form action="{{ url('/jawaban/'.$item->id) }}" method="POST">
                                  @csrf
                                  <input type="text" name="isi">
                                  <input hidden name="pertanyaan_id" value="{{ $item->id }}">
                                  <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
                                  <input hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
                                  <button type="submit" class="btn btn-success">Submit Jawaban</button>
                                </form>
                            </td>
                            <td>
                              <a href=" {{ url('/pertanyaan/' . $item->id) }}" >
                                <button class="btn btn-primary"> Lihat QnA </button>
                              </a>
                            </td>
                            <td>
                              <form method="POST" action="{{ url('/pertanyaan/'.$item->id) }}">
                                @csrf
                                {{ method_field('delete') }}
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
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