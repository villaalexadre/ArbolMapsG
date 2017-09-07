@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to  marcos the master sidebar.</p>
@endsection

@section('content')
<h1>child 2</h1>

    <p>This is my body content.</p>
@endsection