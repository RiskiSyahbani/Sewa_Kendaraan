@extends('dashboard.layouts.main')
@section('container')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Aksi</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Alamat Lengkap</th>
          <th scope="col">Nomor Wa</th>
          <th scope="col">Nama Mobil</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
        @if ($listbooking->count() > 0)
          @foreach ($listbooking as $data)
              <tr>
                  <td>
                      <div class="d-flex">
                          <a href="{{ URL::to("daftarbooking/edit/$data->id") }}" class="btn btn-primary btn-sm me-2">Edit</a>
                          <form action="{{ URL::to('daftarbooking/hapus') }}" method="post" class="ms-2">
                              @csrf
                              @method('delete')
                              <input type="hidden" name="id" value="{{ $data->id }}">
                              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                          </form>
                      </div>
                  </td>
                  <td><p>{{ $data->nama_lengkap }}</p></td>
                  <td><p>{{ $data->alamat_lengkap }}</p></td>
                  <td><p>{{ $data->nomor_wa }}</p></td>
                  <td><p>{{ $data->car->nama_mobil }}</p></td>
                  <td><p>Rp. {{ number_format($data->car->harga_sewa, 0, ',', '.') }}</p></td>
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