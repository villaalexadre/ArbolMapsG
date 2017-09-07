@extends('layouts.app')

@section('title', 'Page Title')

  @section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--
    <p>This is appended <h1>el menu de post</h1>   ssssssss sidebar.</p>
-->
 <section class="col-lg-11 connectedSortable">
       

     <div class="box box-warning">
            <!-- /.box-header -->
      <div class="box-body">
       <div class="container">
    <h2>CRUD operations in Laravel 5.3</h2>
            <div class="box-header with-border">
              <h3 class="box-title">Añadir Autores</h3>
            <form action="{{ url('Author/update') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="form-group">
                  <label for="edit_first_name">Nombre:</label>
                  <input type="text" class="form-control" id="edit_first_name" name="name">
                </div>
                <div class="form-group">
                  <label for="edit_last_name">correo:</label>
                  <input type="text" class="form-control" id="edit_last_name" name="email">
                </div>
                <label for="edit_email">PAssord:</label>
                <input type="email" class="form-control" id="edit_email" name="password">
              </div>
              
              <button type="submit" class="btn btn-default">Update</button>
              <input type="hidden" id="edit_id" name="edit_id">
            </form>
            </div>
    

           
@endsection

@section('content')
  <div class="col-xs-12 col-sm-8">
    <h2>
      Editar producto
      <a href="{{ route('Author.index') }}" class="btn btn-default pull-right">   Regresar
      </a>
    </h2>
    <hr>
    
    {!! Form::model($user, ['route' => ['Author.edit', $user->id], 'method' => 'PUT']) !!}
      
      
      <input type="text" class="form-control" id="edit_first_name" name="name">
    {!! Form::close() !!}
  </div>
  <div class="col-xs-12 col-sm-4">
    
  </div>