@extends('master')
@section('konten')
    <h4>Selamat Datang <b>{{Auth::user()->name}}</b>Anda login Sebagai &nbsp <b>{{Auth::user()->role}}</b>.</h4>
@endsection