<h2>Login administration</h2>
<?php
if(isset($_GET['submit_login'])){
    extract($_GET,EXTR_OVERWRITE);
    $log =new AdminDB($cnx);
    $admin=$log->getAdmin($admin,$password);
    if(is_null($admin)){
        print"<br/> Données incorrectes";
    }
   //TODO mettre le else
}
?>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get"></form>
Login :
<input type="text" name="admin" id="admin" /> <br>
Password : <input type="password" name="password" id="password"/>
<br/>
<input type="submit" name="submit_login" 