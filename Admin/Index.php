<?php
session_start();

include ('.\lib\php\v_connection.php');

if (isset($_POST['btn_deco'])) {
    session_destroy();
    header('Location: ./../index.php');
}


require './lib/php/admin_liste_include.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);
?>
<!DOCTYPE html>
<html>
    <header> 
        <!--<meta charset="UTF-8">   -->    
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="./lib/js/jquery1_editable.js"></script> 

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="../Admin/lib/css/style.css">
        <script src='./lib/js/FonctionsJqueryDA.js'></script>


        <form action="#" method="post">
            <div class="container text-right">
                <button type="submit" name="btn_deco" class="btn btn-outline-secondary" >Déconnexion</button>
            </div>
        </form>





        <div class ="container">



            <?php
            if (file_exists('./lib/php/a_menu.php')) {
                require './lib/php/a_menu.php';
            }
            ?>


        </div>
    </header>  
    <body>

        <div class ="container-fluid">

            <?php
            if (!isset($_SESSION['page'])) {
                $_SESSION['page'] = "Accueil.php"; // page par défaut 
            }
            if (isset($_GET['page'])) {
                $_SESSION['page'] = $_GET['page'];
            }
            $path = "./pages/" . $_SESSION['page'];

            if (file_exists($path)) {
                include ($path);
            } else {
                var_dump($path);
                include ('./pages/Error_page.php');
                ;
            }
            ?>
        </div>

    </body>
    <footer class="container-fluid">
        <div>
            <?php
            if ('./pages/Footer.php') {

                include ('../lib/php/footer_client.php');
            }
            ?></div>
    </footer>


</html> 


