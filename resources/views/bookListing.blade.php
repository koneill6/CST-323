@extends('layouts.appMaster')
@section('title', 'Dashboard')
@section('content')
    <div class = "table-dashboard">
        @include("partials.bookTable")
    </div>
@stop
