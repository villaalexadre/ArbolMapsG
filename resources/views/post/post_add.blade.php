@extends('layouts.app')

@section('title', 'Page Title')
<!--
@section('sidebar')
    @parent
-->
<!--
    <p>This is appended <h1>el menu de post</h1>   ssssssss sidebar.</p>
-->
 <section class="col-lg-12 connectedSortable">
       

     <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="" action="" method="post">
              {{csrf_field()}}
            <!--
                -->
                <!-- text input -->
                <div class="form-group">
                  <label>Tible</label>
                    <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
                  <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Text </label>
                <!--
                  <input type="text" name="text" class="form-control" placeholder="Enter ..." disabled>
                  -->
                  <input type="text" name="text" class="form-control" placeholder="Enter ...">
                

                </div>

                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <!-- textarea
                 -->
                <button type="submit" class="btn btn-primary">Submit</button>
               </div>
                </form>
               

    </div>
    </div>

     <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
               </div>
    </div>


        </section>
@endsection

<!--
<h1>child 1  eee<h1>
    <p>This is my body content.</p>
@section('content')


@endsection

-->