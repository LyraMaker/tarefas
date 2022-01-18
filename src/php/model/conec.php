<?php

namespace LyraMaker\src\php\model;

use PDO;
use PDOException;

try {
    $pathBD = ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "banco.sqlite";
    $conec = new PDO('sqlite::' . $pathBD);
    if (isset($conec)) echo "Conexão do banco efetuada com sucesso!";
} catch (PDOException $e) {
    echo "Ocorreu um erro {$e->getMessage()} na linha {$e->getLine()}!";
}
