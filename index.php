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
        <p id="msg"><?= $printMsg;?></p> //imprimir mensagem da sessao
    <?php 
    endif; 
    ?>
    <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0):?>
            <p>TEM CONTATOS</p>
        <?php else: ?>
            <p id="empty-list-text">Ainda nao ha contatos na sua agenda, <a href=<?=BASE_URL;?>"/create.php">Clique aqui para adicionar</a></p>
        <?php endif;?>

    <?= BASE_PATH; ?>
</body>

</html>