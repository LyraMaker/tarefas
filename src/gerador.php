<?php

$doFront = $_POST["dado"];

$path = __DIR__.DIRECTORY_SEPARATOR."data".DIRECTORY_SEPARATOR."dado.json";

$arquivoJson = fopen($path, "w");
echo $path;


fwrite($arquivoJson, $doFront);
fclose($arquivoJson);
