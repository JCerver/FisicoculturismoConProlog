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
    <form  action="tipoMusculo.php" method="POST">
    <h2 class="fondo display-4">Ingresa el ejercicio para saber el grupo muscular que participa</h2>
     <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ejemplo: press banca" name="txtEjercicio">
     
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
$formato="";
$ejercicio="";

 if(isset($_POST['btnBuscar'])){

  $ejercicio=$_POST["txtEjercicio"];
  $formato= str_replace(" ", "_", $ejercicio);
$query= 'ejercicio(X,'.$formato.'),write(X) ';
 

 $resultado = exec('swipl -s sistemaExpertoMuscular.pl -g "'.$query.'" -t halt.');

//$formato= str_replace("_", " ", $lastLine);
echo "<h2>Con el ejercicio $ejercicio estás trabajando el musculo de $resultado</h2>";

 }



  ?>

                </div>

          <div class="col-md-2">

             </div>  

        </div>
        







    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>