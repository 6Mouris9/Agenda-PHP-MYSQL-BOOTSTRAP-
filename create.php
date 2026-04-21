<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("templates/default_head.php");?>
    <title>Criando Contato</title>
</head>
<body>
    <?php include_once("templates/header.php");?>
    <div class="container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title">Criar contato</h1>
    <form action="config\process.php" method="post" id="create-form">
        <input type="hidden" name="type" id="create" value="create">
        <div class="form-group">
            <label for="name">Nome do contato: </label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite um nome" required>
        </div>
        <div class="form-group">
            <label for="number">Numero do contato: </label>
            <input type="text" name="number" id="number" class="form-control" placeholder="Digite um numero" required>
        </div>
        <div class="form-group">
            <label for="email">Email do contato: </label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite um email valido">
        </div>
        <div class="form-group">
            <label for="observations">Observacao para o contato: </label>
            <textarea name="observations" id="observations" class="form-control" placeholder="Descreva uma observacao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar: </button>
    </form>
</div>
</body>
</html>