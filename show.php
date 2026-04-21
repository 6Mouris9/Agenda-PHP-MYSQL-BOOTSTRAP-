<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once("templates/default_head.php");
    ?>
    <title>Agenda Contato</title>
</head>

<body>
    <?php include_once("templates/header.php");
    if (isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg; ?></p> 
        <?php
    endif;
    ?>
    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html");?>
        <h1 id="main-title"><?= $contact['name'];?></h1>
        <p class="bold">Telefone:</p>
        <p><?=$contact['number'];?></p>
        <p class="bold">Observacoes:</p>
        <p><?=$contact['observations'];?></p>
    </div>
    
</body>

</html>