@extends('dashboard.layouts.main')
@section('container')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Mobil</th>
          <th scope="col">Harga Sewa</th>
          <th scope="col">Jumlah Penumpang</th>
          <th scope="col">Image</th>
          <th scope="col">Nama Tipe</th>
          <th scope="col">Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        @if ($listcar->count() > 0)
          @foreach ($listcar as $data)
              <tr>
                  <td><p>{{ $loop->iteration  }}</p></td>
                  <td><p>{{ $data->nama_mobil }}</p></td>
                  <td><p>{{ $data->price }}</p></td>
                  <td><p>{{ $data->penumpang }}</p></td>
                  <td><img src="{{ asset('img') }}/{{ $data->image }}" alt="" style="width: 100px"></td>
                  <td><p>{{ $data->tipe->nama_tipe }}</p></td>
                  <td><p style="max-width: 200px;">{{ $data->description }}</p></td>
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