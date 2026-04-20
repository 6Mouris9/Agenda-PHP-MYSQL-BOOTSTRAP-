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
        <p id="msg"><?= $printMsg; ?></p> //imprimir mensagem da sessao
    <?php
    endif;
    ?>
    <p id="msg">Testando mensagem</p>
    <h1 id="main-title">Minha Agenda</h1>
    <?php if (count($contacts) > 0): ?>
        <p>TEM CONTATOS</p>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th escope="col">#</th>
                    <th escope="col">Nome</th>
                    <th escope="col">Numero</th>
            
                    <th escope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact['id'] ?></td>
                        <td scope="row"><?= $contact['name'] ?></td>
                        <td scope="row"><?= $contact['number'] ?></td>
                        
                        <td class="actions">
                            <a href="show.php?id=<?= $contact['id'] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="edit.php?id=<?= $contact['id'] ?>"><i class="far fa-edit edit-icon"></i></a>
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Ainda nao ha contatos na sua agenda, <a href=<?= BASE_URL; ?>"/create.php">Clique aqui para
                adicionar</a></p>
    <?php endif; ?>

    <?= BASE_PATH; ?>
</body>

</html>