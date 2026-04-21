<?php
session_start();
include_once(__DIR__ . '\connection.php');

// Funcoes //

function search_all_contacts(PDO $con)
{
    $stmt = $con->prepare("SELECT * FROM contacts");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
function search_id(PDO $con, $id)
{
    $query = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $con->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function create_contact(PDO $con, $name, $observation = '', $email = '', $number)
{
    $query = "INSERT INTO contacts(name, number, observations, email) VALUES (:name, :number, :observation, :email)";
    $stmt = $con->prepare($query);

    $stmt->bindParam("name", $name);
    $stmt->bindParam("observation", $observation);
    $stmt->bindParam("number", $number);
    $stmt->bindParam("email", $email);

    try {
        $stmt->execute();
        $_SESSION['msg'] = "Contato criado com sucesso!";
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: " . $error;
    }
    return;
}

function update_contact(PDO $con, $name, $observation, $email, $number, $id){
    $stmt = $con->prepare("UPDATE contacts SET 
    name = :name, observations = :observation, number = :number, email = :email 
    WHERE id = :id");

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":observation", $observation);
    $stmt->bindParam(":number", $number);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":id", $id);

    try{
        $stmt->execute();
        $_SESSION["msg"] = "Contato editado em sucesso!";
        
    }catch(PDOException $e){
        $erro = $e->getMessage();
        echo "Erro: $erro";
    }

}

function delete_contact(PDO $con, $id){
    $q = "DELETE FROM contacts WHERE id = :id";
    $stmt = $con->prepare($q);
    $stmt->bindParam(":id", $id);
    try{
        $stmt->execute();
        $_SESSION["msg"] = "Contato removido com sucesso!";
    }
    catch(PDOException $e){
        echo "Erro ao deletar: ". $e->getMessage();
    }

}
// ---------------------------------------------------------------------------------------------------- //
$data = $_POST;
if (!empty($data)) {
    print_r($data);
    $name = $data['name'];
    $number = $data['number'];
    $email = $data['email'];
    $observation = $data['observations'];
    $id = $data['id'];

    // Cria contato
    if ($data['type'] === "create") {
        create_contact($con, $name, $observation, $email, $number);
        header("Location: http://localhost/phpmysql/index.php");
        exit();

    }
    // Edita o contato
    if($data['type'] === "edit"){
        update_contact($con, $name, $observation, $email, $number, $id);
        header("Location: http://localhost/phpmysql/index.php");
        exit();
    }
    if($data['type'] === "delete"){
        delete_contact($con, $id);
        header("Location: http://localhost/phpmysql/index.php");
        exit();
    }


} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $contacts = [];

    if (!empty($id)) {
        $contact = search_id($con, $id);

    } else {
        $contacts = search_all_contacts($con);
        if (!$contacts || count($contacts) <= 0) {
            echo "Erro ao buscar contato, ou esta vazio";
        }
    }
}

$con = null;


?>