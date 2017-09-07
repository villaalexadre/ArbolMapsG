@extends('layouts.app')

@section('title', 'Page Title')

  @section('content')

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
              <h3 class="box-title">Añadir Autores</h3>
            </div>
            <!-- /.box-header -->
      <div class="box-body">
              <form class="" action="{{route('Author.store')}}" method="post">
              {{csrf_field()}}
            <!--
                -->
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                    <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
                  <input type="text" name="name" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Email </label>
                  <input type="email" name="email" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Password </label>
                  <input type="text" name="password" class="form-control" placeholder="Enter ...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
               </div>
                </form>
               

    </div>
    </div>
<!--
     <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
    -->
            
             

              <div class="box box-warning ">
            
  
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-lg-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open </button>
    <a href="{{ route('Author.create') }}" class="btn btn-block btn-success" > Nuevo usuario</a> 
            <br>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  
                  <th>CSS grade</th>
                  <th>CSS grade</th>
                  <th>CSS grade</th>

                </tr>
                </thead>
                <tbody>
            @foreach ($author as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->password }}</td>
                  
                  
          <td> <a href="{{ route('Author.update',$user->id) }}" class="btn btn-block btn-success" > Editar</a> </td>
          <td> <a href="{{ route('Author.destroy',$user->id) }}" class="btn btn-block btn-danger" > Eliminar</a> </td>
          <td>
            <button type="button" data-product_id="{{ $user->id }}" data-product_name="{{ $user->id }}" class="btn btn-xs btn-default btn-flat" data-toggle="modal" data-target="#confirmDelete"><i class="fa fa-trash"></i></button>
          </td>
          <td>
             <button type="button" class="btn btn-primary" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editar</button>
          </td>
          <td>
            
<button type="button" class="btn btn-primary" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Eliminar</button>
          </td>
          <td>
  

          </td>
           
                  

                </tr>
            @endforeach
               

               
            </a>
                
               
    <script type="text/javascript">
      $(document).on('click','Editar-modal',function(){
       $('#footer_action_button').text("update");
       $('#footer_action_button').addClass('glyphicon-check');
       $('#footer_action_button').addClass('glyphicon-check');

       $('#id').val($(this).data('id'));
       $('#t').val($(this).data('name'));
       $('#d').val($(this).data('email'));

      });
      $('.modal-footer').on('click','.Editar',function(){
      $.ajax({

        type:'post',
        url:'/edit',
        data:{
          '_toke':$('input[name=_toke]').val(),
          'id':$('#id').val(),
          'name':$('#t').val(),
          'email':$('#d').val(),
        },
        success: function(data){
          $('.item'+data.id).replaceWith("<tr class='item'"+data.id+"'><td>" +data.id+"</td><td>"+data.name+"</td><td>"+data.email+"</td>")
        } 

      });

      });

    </script>        

               









               
               
                
                </tbody>
                </table>
                </div>
                </div>

            </div>
                        <!-- /.box-header -->
           

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Editar Usuario</h4>
      </div>

      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="id">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="t">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="d">
          </div>
          
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

 




   
    <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


        </section>
@endsection

   

