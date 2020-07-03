@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Pertanyaan</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="/pertanyaans/create" class="btn btn-primary">Input Pertanyaan</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Pertanyaan</th>
                    <th>Isi Pertayaan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaans as $key => $item)
                        <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->judul}}</td>
                        <td>{{ $item->isi}}</td>
                        <td>
                        <a href="/pertanyaans/{{$item->pertanyaan_id}}" class="btn btn-sm btn-info">Detail</a>
                        <a href="/pertanyaans/{{$item->pertanyaan_id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/pertanyaans/{{$item->pertanyaan_id}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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
@endsection
