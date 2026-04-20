<?php
    session_start();
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $contacts = [];

    include_once(__DIR__.'\connection.php');

    function search_all_contacts(PDO $con){
    $stmt = $con->prepare("SELECT * FROM contacts");
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
    }
    function search_id(PDO $con, $id){
    $query = "SELECT * FROM contacts WHERE id = :id";    
    $stmt = $con->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $stmt->fetch();    
    }

if(!empty($id)){
    $contact = search_id($con ,$id);

}else{
    $contacts = search_all_contacts($con);
    if(!$contacts || count($contacts) <= 0){
        echo "Erro ao buscar contato, ou esta vazio";
        }
}
    

?>