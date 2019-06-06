
<?php
//à mettre devant les pages pour vérifier si l'admin est actif
if ($_SESSION['admin']==0) {
    ?>
    <meta http-equiv="refresh": Content="1;url=../index.php?page=accueil.php"/>
    <?php
    exit();
}
/*else if($_SESSION['admin']==1){
   ?> <meta http-equiv="refresh": Content="1;url=index.php?page=Accueil.php"/>  <?php
}*/


