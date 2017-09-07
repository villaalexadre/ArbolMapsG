
@extends('layouts.app')

@section('title', 'Page Title')

  @section('content')

<!--
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <section class="col-lg-11 connectedSortable">
       

     <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Añadir Autores</h3>
            </div>
            <!-- /.box-header -->
      <div class="box-body">
       <div class="container">
    












        
            <form class="" action="{{route('Author.edit')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="form-group">
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" id="first_name" name="name">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <input type="text" class="form-control" id="last_name" name="password">
                </div>
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
         

           
@endsection

   

