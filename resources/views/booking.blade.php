{{-- @dd($datamobil) --}}
@extends('layouts.main')
@section('container')

<div class="container">
    <form action="{{ URL::to('daftarmobil/tambahbooking') }}" method="post">
    @csrf
    <input type="hidden" name="car_id" value="{{ $datamobil->id }}">
    <div class="row">
        <div class="col input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama Mobil</span>
            <input type="text" class="form-control" value="{{ $datamobil->nama_mobil }}" disabled>
        </div>
        <div class="col input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Harga/Hari</span>
            <input type="number" class="form-control" value="{{ $datamobil->price }}" disabled>
        </div>
        <div class="col input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tipe</span>
            <input type="text" class="form-control" value="{{ $datamobil->tipe->nama_tipe }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label @error('nama_lengkap') is-invalid @enderror">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Cth: Budi Tribowo">
            @error('nama_lengkap')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="alamat_lengkap" class="form-label @error('alamat_lengkap') is-invalid @enderror">Alamat Lengkap</label>
            <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" placeholder="Cth: Jl. Prof M. Yamin Gg. Amanah No.1A">
            @error('alamat_lengkap')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nomor_wa" class="form-label @error('nomor_wa') is-invalid @enderror">Nomor Wa</label>
            <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" placeholder="Cth: 0896xxxxxxx">
            @error('nomor_wa')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <button class="btn bg-gradient-primary-to-secondary text-white" type="submit">Submit</button>
    </div>
    </form>
</div>
@endsection
