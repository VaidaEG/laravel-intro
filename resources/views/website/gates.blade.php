@extends('layout.main')
@section('content')
    <h1>Gates to website!</h1>
    @foreach(range(1,5) as $key => $value)
        @if($id > 55)
            {{$first}} --- {{$id}}
        @endif
    @endforeach
@endsection
@section('title') My website gates @endsection