@extends('layout.layout')
@section('title',$title)
@section('sidebar')
    @parent
    <li>TAHAP TAHAP BERMAIN BRIDGE</li>
@endsection
@section('content')
    <p>{{ $konten }}</p>
@stop