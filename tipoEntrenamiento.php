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


      <div class="container-fluid">

<div class="row">



 <div class="col-md-12">

      <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <form  action="tipoEntrenamiento.php" method="POST">
    <h2 class="fondo display-4">Ingresa el n&uacute;mero de repeticiones que realizas </h2>
     <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ejemplo: 5" name="txtRepeticion">
     
  <br><br>
    <button type="submit" class="btn btn-success btn-lg btn-block" name="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
  </form>
   
</div>

 </div>

 </div>

 </div>
 </div>

 


          <div class="row">

            <div class="col-md-2">



</div>

 

             <div class="col-md-8">

              <?php 
 $query="";
$resultado;
$tipo=0;
 if(isset($_POST['btnBuscar'])){

  $numRepeticion=$_POST["txtRepeticion"];
  
//echo "$numRepeticion";

if ($numRepeticion<=5) {
  $query= 'entrenamiento_fuerza('.$numRepeticion.'),write(X) ';
  $tipo=1;
}elseif ($numRepeticion >=6 && $numRepeticion <=12) {
  $query= 'entrenamiento_hipertrofia('.$numRepeticion.'),write(X) ';
   $tipo=2;
}elseif ($numRepeticion>12) {
  $query= 'entrenamiento_resistencia('.$numRepeticion.'),write(X) ';
   $tipo=3;
}

//$query= 'entrenamiento_fuerza('.$numRepeticion.'),write(X) ';
 }

 $resultado = exec('swipl -s sistemaExpertoMuscular.pl -g "'.$query.'" -t halt.');

if ($resultado==true && $tipo==1) {
  echo "<h1>Estas en el rango de entrenamiento de fuerza</h1>  <h3>Este rango va de 1 a 5 repeticiones</h3>";
}elseif($resultado==false && $tipo==1){
  echo "No es un rango de fuerza";
}elseif ($resultado==true && $tipo==2) {
  echo "<h1>Estas en el rango de entrenamiento de hipertrofia</h1> <h3>Este rango va de 6 a 12 repeticiones</h3>";
}elseif ($resultado==false && $tipo==2) {
  echo "No es un rango de hipertrofia";
}elseif ($resultado==true && $tipo==3) {
  echo "<h1>Estas en el rango de entrenamiento de resistencia</h1> <h3>Este rango va de 12 repeticiones en adelante</h3>";
}elseif ($resultado==false && $tipo==3) {
  echo "No es un rango de resistencia";
}


echo "$resultado";


  ?>

                </div>

          <div class="col-md-2">

             </div>  

        </div>
        







    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>