@extends('dashboard.layouts.main')
@section('container')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Tipe</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        @if ($listtipe->count() > 0)
          @foreach ($listtipe as $data)
              <tr>
                  <td><p>{{ $loop->iteration  }}</p></td>
                  <td><p>{{ $data->nama_tipe }}</p></td>
                  <td><p>{{ $data->created_at }}</p></td>
                  <td><p>{{ $data->updated_at }}</p></td>
              </tr>    
          @endforeach
        @else
          <tr>
              <td colspan="6"><p class="text-center">Not Found</p></td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection