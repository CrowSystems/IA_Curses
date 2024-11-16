<?php
//Escribe una función que se conecte a una API online y devuelve el resultado de la consula enun array 
function getAPI($url){
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    return $array;
}

$result = getAPI("https://jsonpplaceholder.typicode.com/posts");
print_r($result);

//Crea una funcion para mostrar el array asociativo de getApi() en una tabla HTML
//la tabla tendrá una fila con los nombres de las columnas y una fila por cada elemento del array
function showTable($array){
    echo"<table border='1'";
    echo"<tr>";
    foreach ($array[0] as $key => $value){
        echo"<th>$key</th";
    }
    echo "</tr>";
}
?>