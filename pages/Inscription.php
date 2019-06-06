
    <div class=" container col-sm-6 text-center">

        <h3>Inscription</h3>
        <?php
        if (isset($_GET['submit_form'])) {
            //var_dump($_GET);
            extract($_GET, EXTR_OVERWRITE); //extrait les valeurs du get 

            if (empty($nom) || empty($prenom) || empty($adressemail)) {
                ?>
                <span class="text-danger text-center">Veuillez remplir tout les champs</span>
                <?php
            } else {
                $client = new pro_clientDB($cnx);
                $result = $client->addClient($_GET);
                print "<h3>Insertion Réussie<h3>";
            }
        }
        ?>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" id="Inscription">
            <div class="form-group">
                <label for="nom">Nom :</label>

                <input class="form-control" type="text" name="nom"id="nom"/>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input class="form-control" type="text" name="prenom"id="prenom"/>
            </div>
            <div class="form-group">
                <label for="mail1">Adresse mail :</label>
                <input class="form-control" type="email" name="adressemail" id="adressemail" placeholder="billi@gmail.com">
            </div>


            <input type="submit" name="submit_form" id="submit_form" value="S'enregistrer"/>


        </form>

    </div>
