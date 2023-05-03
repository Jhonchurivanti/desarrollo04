<?php
   $nombreApellido = $_POST['nombreApellido'];
   $direccion = $_POST['direccion'];
   $email = $_POST['email'];
   $edad = $_POST['edad'];
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
     <?php if ($edad > 18) {
    echo "
    <div class='container'>
        <div class='row'>
              <div class='col-md-6 mt-5' >
                  <div class='card'>
                      <div class='card-header --bs-body-color'>
                         <div class='card-tittle text-black text-center'><strong>Bienvenido</strong></div> 
                      </div>                               
                      <div class='card-body'>
                          <form>
                             <div class='form-group'>
                                <p>¡Hola ". $nombreApellido ."!</p>
                                <p>Tu dirección es ". $direccion."</p>
                                <p>Tienes " .$edad." años y tu correo es " .$email."</p>
                             </div> 
                          </form>
                      </div>
                  </div>
              </div>
        </div>  
    </div>";
     } else {
        echo '<script language="javascript">alert("Solo se admiten usuarios mayores de edad");</script>';
       
     }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
