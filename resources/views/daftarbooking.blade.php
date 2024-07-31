{{-- @dd($listbooking) --}}
@extends('layouts.main')
@section('container')

<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table mt-5">
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
            @if ( $listbooking->count() > 0)
                @foreach ( $listbooking as $data )
                    <tr>
                        <td>
                            <div class="d-flex">
                                <a href="{{ URL::to("daftarbooking/edit/$data->id") }}" class="btn btn-primary btn-sm me-2">Edit</a>
                                <form action="{{ URL::to('daftarbooking/hapus') }}" method="post">
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
                        <td><p>{{ $data->car->price }}</p></td>
                    </tr>    
                @endforeach
            @else
                <tr>
                    <td colspan="6"> <p class="text-center">Not Found</p></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
