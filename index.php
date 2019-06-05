<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/EstiloHome.css" rel="stylesheet">

            
</head>
<body>

 <div class=""> 
      <header>
        <nav class="navbar navbar-default navbar-inverse">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-1">
              <ul class="nav navbar-nav">
                
                <li><a href="index.php">Home</a></li>
                           
              </ul>
             

            </div> 
          </div>
        </nav>
      </header>

    </div>





    <div class="container marketing">

  
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/logo1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Selecci&oacute;n de ejercicios</h2>
          <p>Descubre cuales son los mejores ejercicios para cada grupo muscular.</p> <br><a href="ejercicios.php">M&aacute;s informaci&oacute;n</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/musculo.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Categoria muscular</h2>
          <p>No hay mejor manera de obtener mayores ganancias musculares que conocer la parte del grupo muscular se esta trabajando al ejecutar tus ejercicios</p><br><a href="tipoMusculo.php">M&aacute;s informaci&oacute;n</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/logo3.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2>Tipo de entrenamiento</h2>
          <p>En los entrenamientos el n&uacute;mero de repeticiones determina el tipo y volumen de entrenamiento, descubre cual es el tipo de entrenamiento que llevas en funci&oacute; al numero de repeticiones que empleas.</p><a href="tipoEntrenamiento.php">M&aacute;s informaci&oacute;n</a>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
