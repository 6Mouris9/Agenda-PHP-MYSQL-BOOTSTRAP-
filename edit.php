<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("templates/default_head.php");?>
    <title>Editando Contato</title>
</head>
<body>
    <?php include_once("templates/header.php");?>
    <div class="container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title">Edite o contato</h1>
    <form action="config\process.php" method="post" id="create-form">
        <input type="hidden" name="type"  value="edit">
        <input type="hidden" name="id"  value="<?= (int)$_GET['id'];?>">
        <div class="form-group">
            <label for="name">Nome do contato: </label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite um nome" required value="<?=$contact['name'];?>">
        </div>
        <div class="form-group">
            <label for="number">Numero do contato: </label>
            <input type="text" name="number" id="number" class="form-control" placeholder="Digite um numero" required value="<?=$contact['number'];?>">
        </div>
        <div class="form-group">
            <label for="email">Email do contato: </label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite um email valido" value="<?=$contact['email'];?>">
        </div>
        <div class="form-group">
            <label for="observations">Observacao para o contato: </label>
            <textarea name="observations" id="observations" class="form-control" placeholder="Descreva uma observacao" rows="3" ><?=$contact['observations'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar </button>
    </form>
</div>
</body>
</html>