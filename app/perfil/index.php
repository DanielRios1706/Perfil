<?php    

    require '../config/database.php';

    $sqlusuario = "SELECT * FROM usuario WHERE id LIMIT 1";

    $usuario = $conn->query($sqlusuario);
    $usuario1 = $conn->query($sqlusuario);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">


</head>
<body style="background-color: #c6c6c6">
    <div class="container ">
        <div class="row g-2" style="padding: 30px 150px;">
            <div class="col-5">
                <div class="p-5 bg-white text-center" style="border-radius: 10px; padding-top: 67px !important;">
                    <?php while ($row_usuario = $usuario1->fetch_assoc()) { ?>
                        <h1><?= $row_usuario['nombre']; ?></h1>
                        <p><?= $row_usuario['usuario']; ?></p>
                    <img src="foto/foto.webp" class="img-thumbnail rounded-circle mb-3"  alt="...">
                    <?php } ?>
                    <div class="alert alert-info" role="alert">
                    Upload a new avatar. Larger image will be resized automatically.
                    <br> Maximum upload size is <b>1MB</b>
                    </div>
                    <p class="mt-5">Member Since: <b>29 September 2019 </b></p>
                </div>
            </div>
            <div class="col-7">
                <div class="p-3 bg-white" style="border-radius: 10px;">
                    <p class="h1 p-5">Perfil</p>
                    <p class="h5 ps-5">Informacion del Usuario</p>
                    <hr>  
                    <form style="padding: 50px;">
                        
                        <fieldset disabled>
                            <?php while ($row_usuario = $usuario->fetch_assoc()) { ?>
                            
                            <input type="hidden" name="id" id="id">
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" class="form-control" placeholder="<?= $row_usuario['nombre']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Usuario</label>
                                <input type="text" id="usuario" class="form-control" placeholder="<?= $row_usuario['usuario']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="text" id="correo" class="form-control" placeholder="<?= $row_usuario['correo']; ?>">
                            </div>

                            <hr>
                            <p class="h3 mt-5">Social Profile</p>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa-brands fa-square-facebook"></i></span>
                                        <input type="text" id="facebook" class="form-control" placeholder="<?= $row_usuario['facebook']; ?>" aria-label="Facebook" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa-brands fa-square-twitter"></i></span>
                                        <input type="text" id="twitter" class="form-control" placeholder="<?= $row_usuario['twitter']; ?>" aria-label="Twitter" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>
                            
                         </fieldset>
                         <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-id="<?= $row_usuario['id']; ?> "> <i class="fa-solid fa-pen-to-square"></i> Actualizar Informacion </a>                    
                        
                    </form>
                    
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>


<?php include 'editaModal.php'; ?>

<script>
        let editarModal = document.getElementById('exampleModal')
        
        editarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editarModal.querySelector('.modal-body #id')
            let inputNombre = editarModal.querySelector('.modal-body #nombre')
            let inputUsuario = editarModal.querySelector('.modal-body #usuario')
            let inputContrasena = editarModal.querySelector('.modal-body #contrasena')
            let inputCorreo = editarModal.querySelector('.modal-body #correo')
            let inputFacebook = editarModal.querySelector('.modal-body #fb')
            let inputTw = editarModal.querySelector('.modal-body #twt')

            let url = "getUsuario.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                method: "POST",
                body: formData
            }).then(response => response.json())
            .then(data => {
                
                inputId.value = data.id
                inputNombre.value = data.nombre
                inputUsuario.value = data.usuario
                inputContrasena.value = data.contrasena
                inputCorreo.value = data.correo
                inputFacebook.value = data.facebook
                inputTw.value = data.twitter


            }).catch(err => console.log(err))

        })
    </script>

    

<script src="../../assets/js/bootstrap.bundle.min.js"></script>                            

</body>
</html>