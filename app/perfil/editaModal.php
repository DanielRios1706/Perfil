
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body p-5">
        <form action="actualiza.php" method="post">

              <input type="hidden" name="id" id="id" class="form-control" >

          <div class="row mt-4">
            <div class="col">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col">
              <label class="form-label">Usuario</label>
              <input type="text" name="usuario" id="usuario" class="form-control" required>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col">
            <label class="form-label">Contrasena</label>
              <input type="password" name="contrasena" id="contrasena" class="form-control" required>
            </div>
            <div class="col">
              <label  class="form-label">Confirmar Contrasena</label>
              <input type="password" name="confirmcontrasena" id="confirmcontrasena" class="form-control" required>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col">
              <label  class="form-label">Correo Electronico</label>
              <input type="text" name="correo" id="correo" class="form-control" required>
            </div>
          </div>

          <p class="h3 mt-5">Social Profile</p>

          <div class="row mt-4">
            <div class="col-6">
              <label  class="form-label"><i class="fa-brands fa-square-facebook"></i> Facebook</label>
              <input type="text" name="fb" id="fb" class="form-control">
            </div>

            <div class="col-6">              
              <label  class="form-label"> <i class="fa-brands fa-square-twitter"></i> Twitter </label>
              <input type="text" name="twitter" id="twt" class="form-control">
            </div>
          </div>


            

          <div class=" mt-4">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"> </i> Guardar</button>
          </div>
          
        </form>          
                        
      </div>
    </div>
  </div>
</div>