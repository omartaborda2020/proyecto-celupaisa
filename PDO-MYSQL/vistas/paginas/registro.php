
<div class="d-flex justify-content-center text-center">
  
    <form class="p-2 bg-light" method="post"> 
            <div class="p-2 jsutify-content-center">
            <h5>REGISTRO</h5>
            </div>
      <div class="form-group">
        <label for="nombre">Nombre:</label>

      <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" id="nombre" name="registroNombre">
      </div>

      </div>

    <div class="form-group">
        <label for="email">Correo Electrónico:</label>
      
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-envelope"></i></i></span>
            </div>
          
        <input type="email" class="form-control" id="email" name="registroEmail">
      </div>
    
    </div>

      <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
        <input type="password" class="form-control" id="pwd" name="registroPassword">
      </div>
      </div>
          
    <?php
   
   // $registro = new ControladorFormularios();
    //$registro -> ctrRegistros();
    
    $registro = ControladorFormularios :: ctrRegistros();
    
        if($registro == "ok"){
            
            echo '<script>
            
                    if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                    }
            </script>';
           
                
                echo '<div class="alert alert-success">El Usuario ha sido registrado</div>';
            
        }
    
    ?>
    
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form> 
</div>
    
 