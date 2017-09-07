@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the marcos alberot master   ssssssss sidebar.</p>
@endsection

@section('content')
<h1>child 1<h1>
    <p>This is my body content.</p>
@endsection