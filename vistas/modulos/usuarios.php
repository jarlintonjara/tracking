
<?php
  if(isset($_POST['nuevoNombre']))
  {
    $crearUsuario = new ControladorUsuarios();
    $crearUsuario -> ctrCrearUsuario();
  }
  if(isset($_POST['editarNombre']))
  {
    $crearUsuario = new ControladorUsuarios();
    $crearUsuario -> ctrEditarUsuario();
  }
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Administrar Usuarios 
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt mr-2"></i>Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">

<?php if ($_SESSION["perfil"] == 'Administrador') { ?>
   <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle = "modal" data-target ="#modalAgregarUsuario">
                <i class="fas fa-plus-circle"></i> Agregar usuario
              </button>

            </div>



          


            <div class="card-body">
            <table class="table table-bordered table-striped example1">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th style="width: 100px">Estado</th>
                  <th>Último ingreso</th>
                  <th style="width: 100px">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $item  = null ;
                $valor = null ;
                  $usuarios = ControladorUsuarios::ctrMostrarUsuario( $item, $valor );
                  //var_dump($usuarios);
                  foreach ($usuarios as $key => $value) {
                  echo '<tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';


                    echo '<td>'.$value["perfil"].'</td>';

                    if($value["estado"] == 1 )
                      echo '<td><button class="btn btn-success btn-xs  btnActivar" idUsuario ='.$value["id"].' estadoUsuario= '.$value["estado"].'>Activado</button></td>';
                    else
                      echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario ='.$value["id"].' estadoUsuario= '.$value["estado"].'>Desactivado </button></td>';

                     echo '<td>'.$value["ultimo_login"].'</td>
                      <td>
                        <div class="btn-group">
                          <button class= "btn btn-warning btnEditarUsuario " idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class = "fas fa-edit"> </i></button>
                          <button class= "btn btn-danger btnEliminarUsuario" idUsuarioEliminar="'.$value["id"].'"  usuarioEliminar="'.$value["usuario"].'"><i class = "far fa-trash-alt"> </i></button>
                        </div>
                      </td>
                    </tr>';
                  }
                ?>
              </tbody>
            <tfoot>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th style="width: 100px">Estado</th>
                  <th>Último ingreso</th>
                  <th style="width: 100px">Acciones</th>
                </tr>
            </tfoot>
          </table>

        </div>


<?php  }else{ ?> <!-- si no es admin-->





          


            <div class="card-body">
            <table class="table table-bordered table-striped example1">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th style="width: 100px">Estado</th>
                  <th>Último ingreso</th>
                  <th style="width: 100px">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $item  = null ;
                $valor = null ;
                  $usuarios = ControladorUsuarios::ctrMostrarUsuario( $item, $valor );
                  //var_dump($usuarios);
                  foreach ($usuarios as $key => $value) {
                  echo '<tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';


                    echo '<td>'.$value["perfil"].'</td>';

                    if($value["estado"] == 1 )
                      echo '<td><button class="btn btn-success btn-xs  btnActivar" idUsuario ='.$value["id"].' estadoUsuario= '.$value["estado"].'>Activado</button></td>';
                    else
                      echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario ='.$value["id"].' estadoUsuario= '.$value["estado"].'>Desactivado </button></td>';

                     echo '<td>'.$value["ultimo_login"].'</td>
                      <td>
                        <div class="btn-group">
                          <button class= "btn btn-warning btnEditarUsuario " idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class = "fas fa-edit"> </i></button>
                       
                        </div>
                      </td>
                    </tr>';
                  }
                ?>
              </tbody>
            <tfoot>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th style="width: 100px">Estado</th>
                  <th>Último ingreso</th>
                  <th style="width: 100px">Acciones</th>
                </tr>
            </tfoot>
          </table>

        </div>



<?php  } ?>

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
</div>

<!--=====================================
=          Agregar Usuario Modal        =
======================================-->
<!-- Modal -->
<div id="modalAgregarUsuario" class="modal fade">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <form method="post" enctype="multipart/form-data">
      <div class="modal-header bg-info">
        <h4 class="modal-title">Agregar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">

        <div class = "form-group">
          <div class = "input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class = "fas fa-user"> </i></span>
            </div>
              <input type="text" class="form-control"  name= "nuevoNombre" placeholder="Ingrese Nombre" required>
          </div>
        </div>


        <div class = "form-group">
          <div class = "input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class = "fas fa-key"> </i></span>
            </div>
              <input type="text" class="form-control input-lg"  name= "nuevoUsuario" placeholder="Ingrese Usuario" id= "nuevoUsuario" required>
          </div>
        </div>

        <div class = "form-group">
          <div class = "input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class = "fas fa-lock"> </i></span>
            </div>
              <input type="password" class="form-control input-lg"  name= "nuevoPassword" placeholder="Ingrese Contraseña" required>
          </div>
        </div>

        <div class = "form-group">
          <div class = "input-group">
            <select name="nuevoPerfil"  class ="form-control select2" style="width: 100%;">
              <option value="">Seleccionar perfil</option>
              <option value="Administrador">Administrador</option>
               <option value="Consultor">Consultor</option>
              
            </select>
          </div>
        </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary" >Guardar</button>
      </div>
      </form>
    </div>

  </div>
</div>

<!--=====================================
=          Editar Usuario Modal        =
======================================-->
<!-- Modal -->
<div id="modalEditarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <form method="post" enctype="multipart/form-data">
      <div class="modal-header bg-info">
        <h4 class="modal-title">Editar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
        <div class = "box-body">
          <div class = "form-group">
            <div class = "input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class = "fas fa-user"> </i></span>
              </div>
                <input type="text" class="form-control input-lg" id="editarNombre" name= "editarNombre" value="" required>
            </div>
          </div>
          <div class = "form-group">
            <div class = "input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class = "fas fa-key"> </i></span>
              </div>
                <input type="text" class="form-control input-lg" id="editarUsuario" name= "editarUsuario" value="" readonly>
            </div>
          </div>

          <div class = "form-group">
            <div class = "input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class = "fas fa-lock"> </i></span>
              </div>
                <input type="password" class="form-control input-lg"  name= "editarPassword" placeholder="Escriba la nueva contraseña">
                <input type="hidden" id= "passwordActual" name= "passwordActual">
            </div>
          </div>

          <div class = "form-group">
            <div class = "input-group">
              <select  id="editarPerfil" name="editarPerfil" class ="form-control select2" style="width: 100%;">
                  <?php   if ($_SESSION["perfil"] == 'Administrador') { ?>
        <option value="">Seleccionar perfil</option>
              <option value="Administrador">Administrador</option>
              <?php } ?>
                <option value="Consultor">Consultor</option>
             </select>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary" >Actualizar</button>
      </div>

      </form>
    </div>

  </div>
</div>

<?php
  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();
?>

