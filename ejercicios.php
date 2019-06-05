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


      <div class="container-fluid">

<div class="row">



 <div class="col-md-12">

      <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <form  action="ejercicios.php" method="POST">
    <h2 class="fondo display-4">Selecciona un grupo muscular</h2>
    
     <select  class="form-control" name="selectMusculo">
    <option selected value="pecho">pecho</option>
    <option value="espalda">espalda</option>
    <option value="hombro">hombro</option>
    <option value="trapecio">trapecio</option>
    <option value="bicep">bicep</option>
    <option value="tricep">tricep</option>
    <option value="antebrazo">antebrazo</option>
    <option value="abdomen">abdomen</option>
    <option value="cuadricep">cuadricep</option>
    <option value="femoral">femoral</option>
    <option value="gluteo">gluteo</option>
    <option value="pantorrilla">pantorrilla</option>
  </select>
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
$musculo="";
 if(isset($_POST['btnBuscar'])){

  $musculo=$_POST["selectMusculo"];
//echo "$musculo";
//$query= 'ejercicio('.$musculo.',X),write(X) ';
 $query= 'setof(X,ejercicio('.$musculo.',X),Y),write(Y) ';

 $resultado = exec('swipl -s sistemaExpertoMuscular.pl -g "'.$query.'" -t halt.');

$formato= str_replace("_", " ", $lastLine);
echo "<h2>Para trabajar el grupo muscular $musculo puedes realizar los siguientes ejercicios <br><br> $formato</h2>";


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