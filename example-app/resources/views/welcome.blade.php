@extends('layouts.master')

@section('content')
    <h1>Welcome</h1>

    {{$type}}
    <br> 
    <x-button-component>{{$type}}</x-button-component>
@endsection