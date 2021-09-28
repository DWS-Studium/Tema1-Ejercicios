<?php
/*
Crea un array con los nombres de las provincias de andalucia de tres maneras diferentes y recorrelas para mostrarlas por pantalla
*/
$provincias=array('Almería','Cádiz','Córdoba','Granada','Huelva','Jaén','Málaga','Sevilla');
$n=count($provincias);
echo '<h3>Provincias</h3>';
for($i=0; $i<$n;$i++){
    echo $provincias[$i].'</br>';
}

$provincias=['Almería','Cádiz','Córdoba','Granada','Huelva','Jaén','Málaga','Sevilla'];

echo '<h3>Provincias</h3>';
$i=0;
$n=count($provincias);
while($i<$n){
    echo $provincias[$i].'</br>';
    $i++;
}
$provincias=[];
$provincias[]='Almería';
$provincias[]='Cádiz';
$provincias[]='Córdoba';
$provincias[]='Granada';
$provincias[]='Huelva';
$provincias[]='Jaén';
$provincias[]='Málaga';
$provincias[]='Sevilla';

//Recomendable siembre el foreach
echo '<h3>Provincias</h3>';
foreach ($provincias as $provincia){
    echo $provincia.'</br>';
}
