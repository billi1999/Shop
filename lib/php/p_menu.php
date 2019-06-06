<?php
if (isset($_SESSION['admin'])) {
    ?> <form action="#" method="post">
        <div class="container text-right">
            <button type="submit" name="btn_deco_menu" class="btn btn-outline-secondary" >Déconnexion</button>
        </div>


    </form><?php
}
if (isset($_POST['btn_deco_menu'])) {
    session_destroy();
    header('Location: index.php');
}
?>


<nav class="navbar navbar-expand-md navbar-light col-sm-4-right">


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <a href="./index.php?page=accueil.php" class="navbar-brand collapse navbar-collapse">
            <img src="./Admin/images/logo_mini2.png" alt="logo">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php?page=accueil.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
        
            
<?php  
    if(!isset($_SESSION['admin'])){
       ?> <li>
                <a class="nav-link" href="./index.php?page=login.php">Se Connecter</a>
            </li>
            <?php
    }
    if (isset($_SESSION['admin'])) {
    ?>
                <a class="nav-link" href="./index.php?page=Films.php">Films</a>
                <?php
            }
            ?>

        </ul>

    </div>
</nav>
<br/>
