@extends('layout.layout')
@section('title','Data pelanggan')
@section('sidebar')
    @parent
    <li>TAHAP TAHAP BERMAIN BRIDGE</li>
@endsection
@section('content')
    @foreach($pelanggan as $index => $val)
        <p>{{$index+1}} | {{$val}} <a href='#'>show</a></p>
    @endforeach
    
@stop