<?php
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = null;
    }
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="./index.php" class="navbar-brand">
        <figure>
            <img src="img\corewlogo.png"  alt="" class="box-shadow-d">
        </figure>    
        </a>
        <div>
            <div class="navbar-nav">
                <a href="<?= BASE_URL;?>/index.php" class="nav-link" id="home-link">Agenda</a>
                <a href="<?= BASE_URL;?>/create.php" class="nav-link" id="home-link">Adicionar</a>
            </div>
        </div>
    </nav>
</header>
