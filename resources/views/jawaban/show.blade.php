@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p>Judul : {{ $pertanyaan->judul}}</p>
                <p>Isi : {{ $pertanyaan->isi}}</p>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection
