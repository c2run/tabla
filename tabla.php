<html>
      <head>
      <title>
        Mostrar en pantalla una tabla de 10x10 con los números del 1 al 100
      </title>
</head>
<body>
<table border="1">
<?php
//variable númerica n1 para mostrar en la tabla
$n=1;
//variable x para mostrar las filas de la tabla
$x=1;
//variable y para mostrar las columnas de la tabla
$y=1;
//dos bucles de 10x10 para generar los 100 números usando las variables x,y
for( $x; $x<=10; $x++ )
{
  //imprima la fila
echo "<tr>";
 for($y=1; $y<=10; $y++)
 {
   //imprima la columna con el número correspondiente
   echo "<td>", $n, "</td>";
   //asignar un contador que almacene el número y lo incremente en 1
   $n=$n+1;
 }
      //imprimir el cierre de fila
      echo "</tr>";
}

//imprimir el cierre de la tabla
echo "</table>"
?>
</body>
</html>
