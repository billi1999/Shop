<div class=" container col-sm-6 text-center">
    <h2>Login </h2>
    <?php
    if (isset($_POST['submit_login'])) {
        extract($_POST, EXTR_OVERWRITE);
        $log = new AdminDB($cnx);
        $admin = $log->getAdmin($nom, $adressemail);
        if (is_null($admin)) {
            print" <br/>Données incorrectes";
        } 
        
        
        else {
            echo"<h3>Bien connecté au nom de :" . $nom . "</h3>";
            $_SESSION['admin'] = $admin[0]->administrateur;
            $_SESSION['nom'] = $admin[0]->nom;
            $_SESSION['prenom'] = $admin[0]->prenom;
            $_SESSION['adressemail'] = $admin[0]->adressemail;
            unset($_SESSION['page']);
            
            if($_SESSION['admin']==1){
                 header("refresh: 0.5; url = http://localhost/Projet_Techno_web_Jules/Admin/Index.php?pages=Accueil.php");
                
            }
            else{
               header("refresh: 0.5; url = http://localhost/Projet_Techno_web_Jules/index.php?page=accueil.php");
            }
         

        }
    }
    ?>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="nom">Nom :</label>

            <input class="form-control" type="text" name="nom" id="nom" /> 
        </div>
        <div class="form-group">
            <label for="mail1">Adresse mail :</label>
            <input class="form-control" type="email" name="adressemail" id="adressemail"/>
        </div class="form-group">

        <input  type="submit" name="submit_login" id="submit_login" value="Se Connecter">

    </form>
    <br>Compte pas encore créé ?<a href="index.php?page=Inscription.php">S'inscrire</a>
</div>
</div>
