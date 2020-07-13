@extends('adminlte.master')

@section('content')

<div class="ml-3 mt-3">
    <div class="ml-3 mt-3">
      <h1>List Jawaban</h1><br>
      @foreach ($items as $item)
          <h3> {{ $item->isi }} </h3><br>
      @endforeach



      {{-- <div class="card">
        <!-- /.card-header -->
        @if (isset($items))
          <div class="card-body table-responsive p-0 ml-3 mt-3" style="height: 300px;">
            {{-- {{dd($item)}} --}}
            {{-- <h1>Jawaban dari pertanyaan dengan ID : {{$pertanyaan_id}}</h1>
            <p>Isi Jawaban: {{$items->isi}}</p>
            <a href="/pertanyaan" class="btn btn-sm btn-info">Kembali ke Pertanyaan</a>
          </div>
          <div>
            <form role="form" action="/jawaban/{{$pertanyaan_id}}" method="POST">
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
        @else
            <div class="ml-3 mt-3">
              <h1>Belum Ada Jawaban untuk Pertanyaan ini!</h1>
              <p>Silahkan Tambahkan Jawaban Anda untuk Pertanyaan Ini:</p>
            </div>
            
            <div>
              <form role="form" action="/jawaban/{{$pertanyaan_id}}" method="POST">
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
        @endif --}}
        <!-- /.card-body -->
      </div>
    </div>
</div>
    
@endsection