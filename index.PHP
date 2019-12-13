<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>

<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2> Problema: ¿Cúal es la presion ejercida por una fuerza de 120N que actua sobre una superficie de 0.040 metros </h2>
  <p>Descripción:</p>
  <p> La presion ejercida por una fuerza de 120N que actua sobre una superficie de 0.040 metros <br>

</p>
</section>
<section class="formulas"><h2>Fórmulas</h2>
Presion=Fuerza/Area
</section>
<section class="datos">
<h2>Datos:</h2>
               Fuerza: 120N <br>
               Area: 0.40m al cuadrado
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La potencia es:<br>
                     P=120/0.40</p>
</section>


<?php
     function calcula_resultado(){
        $Fuerza=1200;
        $Area= 0.500;

        
        $Potencia= $Fuerza/$Area;
        return $Potencia;
     }
?>


<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> La potencia es = ".calcula_resultado(). " N/(metro cubico)</h1>";?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
