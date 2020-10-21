<div class="d-flex justify-content-center text-center">
  
    <form class="p-2 bg-light" method="post"> 
            <div class="p-2 jsutify-content-center">
            <h5>Ingreso</h5>
            </div>
     

    <div class="form-group">
        <label for="email">Correo Electrónico:</label>
      
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-envelope"></i></i></span>
            </div>
          
        <input type="email" class="form-control" id="email" name="ingresoEmail">
      </div>
    
    </div>

      <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
        <input type="password" class="form-control" id="pwd" name="ingresoPassword">
      </div>
      </div>
          
    <?php
   
   
    $ingreso = new ControladorFormularios();
    $ingreso->ctrIngreso();
    
    
    ?>
    
  <button type="submit" class="btn btn-primary">Ingresar</button>
  
    </form> 

</div>