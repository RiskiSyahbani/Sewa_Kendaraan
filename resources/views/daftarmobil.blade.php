{{-- @dd($listmobil) --}}
@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            @foreach ( $listmobil as $data )
                <div class="col card me-3" style="width: 18rem;">
                    <img src="{{ asset("img/$data->image") }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->nama_mobil }}</h5>
                        <p class="card-title">Harga : Rp. {{ $data->price }}</p>
                        <div class="d-flex">
                            <p class="me-2">Pintu : {{ $data->pintu }}</p> <p>Penumpang : {{ $data->penumpang }}</p>
                        </div>
                        <small class="card-text mb-3">{{ $data->description }}</small>
                        <a href="{{ URL::to("daftarmobil/booking/$data->id") }}" class="btn bg-gradient-primary-to-secondary text-white mt-2">Booking</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
