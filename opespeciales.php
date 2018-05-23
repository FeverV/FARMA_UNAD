<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">FARMAUNAD</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Inicio</a></li>
        <li ><a href="admin.html">Administrador</a></li>
        <li ><a href="ingreso_de_productos.html">Ingreso de Productos</a></li>
        <li ><a href="reportes.html">Reportes Especiales</a></li>
        <li ><a href="operaciones_matematicas.html">Operaciones Matematicas</a></li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Estructuras de programación <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pages/if.html">Ciclo IF</a></li>
            <li><a href="pages/for.html">Ciclo For</a></li>
            <li><a href="pages/while.html">Ciclo While</a></li>
            <li><a href="pages/switch.html">Estructura switch case</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h1>Resultado de la Operación Matematica </h1>

  </div>
  <div class="container">

  <?php

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operacion = $_POST['opciones'];

  switch ($operacion) {
  	case 'Sumar':
  		$res=$num1+$num2;
  		break;
  	case 'Restar':
  		$res=$num1-$num2;
  		break;
  	case 'Multiplicar':
  		$res=$num1*$num2;
  		break;
  	case 'Dividir':
  		$res=$num1/$num2;
  		break;
  }
  
    
  echo "<hr><br><h3><b>El resultado de ".$operacion." ".$num1." y ". $num2. " es: " .$res."</h3>";
  echo "<hr><p><h5><b>Comparando los datos con la estructura If-Else, tenemos que : "."</b></h5><br> ";

  if ($num1==$num2) {
  	echo "El primer numero ".$num1." es igual que el segundo numero ".$num2." <br> <br>";
  }
  else
  if ($num1>$num2) {
  	echo "El primer numero ".$num1." es mayor que el segundo numero ".$num2." <br> <br>";
  }
  else
  {
  	echo "El primer numero ".$num1." es menor que el Segundo numero ".$num2." <br> <br>";
  }
  echo "</p>";

  echo "<b>"."La secuencia que se ha generado por el ciclo “for” es: "."</b>"."<br>";
  echo " ";
  $grupo=1;
  for ($a=1; $a <=$grupo; $a++) {
  	echo " ".$a." ";
  }
  ?>
    </div>
</body>
</html>
