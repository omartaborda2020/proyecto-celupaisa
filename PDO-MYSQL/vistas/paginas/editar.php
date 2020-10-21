<?php
if(isset($_GET["id"])){

  $item = "id";
  $valor = $_GET["id"];
  $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

}
?>


<div class="d-flex justify-content-center text-center">

  <form class="p-2 bg-light" method="post"> 
    <div class="p-2 jsutify-content-center">
      <h5>Actualizar</h5>
    </div>
    <div class="form-group">

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su Nombre" id="nombre" name="actualizarNombre">
      </div>

    </div>

    <div class="form-group">

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="far fa-envelope"></i></i></span>
        </div>

        <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>"  placeholder="Escriba su Email"id="email" name="actualizarEmail">
      </div>

    </div>

    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Escriba su Contraseña" id="pwd" name="actualizarPassword">

        <input type="hidden" name="passwordActual" value= "<?php echo $usuario["password"];  ?>">
        <input type="hidden" name="idUsuario" value= "<?php echo $usuario["id"];  ?>">

      </div>
    </div>

    <?php

    $actualizar =  ControladorFormularios::ctrActualizarRegistro();

    if( $actualizar == "ok"){

      echo '<script>

      if (window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
      </script>';


      echo '<div class="alert alert-success">El Usuario ha sido Actualizado</div>

      <script>

      setTimeout(function(){

        window. location = "index.php?pagina=inicio";

        },3000);

        </script>

        ';
      }



      ?>

      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form> 
  </div>

