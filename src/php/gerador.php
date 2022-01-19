<?php
namespace LyraMaker\src\php;

date_default_timezone_set('America/Sao_Paulo');

$doFront = $_POST["dado"];

$path = __DIR__.DIRECTORY_SEPARATOR."data".DIRECTORY_SEPARATOR."dado.json";

$arquivoJson = fopen($path, "w");
echo $path;


fwrite($arquivoJson, $doFront);
fclose($arquivoJson);
