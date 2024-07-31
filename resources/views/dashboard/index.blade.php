@extends('dashboard.layouts.main')
@section('container')
<h1>Selamat Datang  {{ Auth::user()->name }}</h1>
@endsection