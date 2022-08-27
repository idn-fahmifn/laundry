@extends('layouts.template')

@section('title')
  Halaman Dashboard
@endsection

@section('content')
@if(Auth::user()->level == 'admin')
  @include('dashboard.admin')
@elseif(Auth::user()->level == 'petugas')
  @include('dashboard.petugas')
@else
  @include('dashboard.pelanggan')
@endif
@endsection
