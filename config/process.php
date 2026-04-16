<?php
    session_start();
    $contacts = [];

    include_once(__DIR__.'\connection.php');

    function search_all_contacts(PDO $con){
    $stmt = $con->prepare("SELECT * FROM contacts");
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
    }

    $contacts = search_all_contacts($con);
    if(!$contacts || count($contacts) <= 0){
        echo "Erro ao buscar contato, ou esta vazio";
        }

?>