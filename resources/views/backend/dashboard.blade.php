@extends('layouts.app')

@section('content')
    <app :auth="{{ auth()->user() }}"></app>
@stop
