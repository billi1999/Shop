<?php
session_start();
?>
<!doctype html>
<?php
//require './lib/php/admin_liste_include.php';
require '.\admin\lib\php\admin_liste_include.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> <!-- Ne pas enlever l'intégrité sinon le tableau éditable ne fonctionne plus-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"/>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">

        
        
        <link rel="stylesheet" type="text/css" href="Admin/lib/css/style.css"/>
        <!--<link rel="stylesheet" type="text/css" href="admin/lib/css/custom.css"/>-->
        <title></title>
    </head>
    
        <header>
            <div class="container-fluid">
                <?php
                if(file_exists('./lib/php/p_menu.php')){
                    require './lib/php/p_menu.php';
                   
                }
                ?>
            </div>
        </header>
   
    <body>
            <div class="container-fluid" >
                
                <?php
                if(!isset($_SESSION['page'])){ 
                  
                $_SESSION['page']="accueil.php";
                    
                }                
                if(isset($_GET['page'])){
                    
                    $_SESSION['page']=$_GET['page'];
                }
                $path = "./pages/".$_SESSION['page'];
               /* print_r($path);*/
                if(file_exists($path)){
                    include ($path);
                }else {
                    print "<br>oups!"; 
                }
               
                
                ?>
            </div>
    </body>
    
        <footer class="container-fluid ">
            <div>
            <?php if(file_exists('./lib/php/footer_client.php'))
            {
                require'./lib/php/footer_client.php'; 
            }
            
            ?>
                </div>
        </footer>


    
</html>
