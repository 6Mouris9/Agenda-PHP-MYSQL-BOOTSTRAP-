<?php
    define("CONNECTION", ['host'=> 'localhost', 'dbname'=> 'agenda', 'user'=> 'Murilo', 'pass' => 'root']);

try{
    $con = new PDO("mysql:host=".CONNECTION['host'].";dbname=".CONNECTION['dbname'].";", CONNECTION['user'], CONNECTION['pass']);

    // Ativar o modo de erros
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    $error = $e->getMessage();
    echo "Erro: ".$error;
}
?>