

<?php

$log = new pro_clientDB($cnx);
$request = $log->getPro_client();
$nbr_client = count($request);
//$request=$cnx->getPro_client();
include('lib/php/v_connection.php');
?>



<table class=" table table-bordered">

    <tr>
        <th class="ecart">idclient</th>
        <!--<th>nom test</th>-->
        <th>nom</th>
        <th>prenom</th>
        <th>adresse mail</th>
        <th>administrateur</th>

    </tr>

    <?php for ($i = 0; $i < $nbr_client; $i++) { ?>

        <tr> 
            <td class="ecart"><?php print $request[$i]['idclient'] ?></td>
            <!--<td ><?php //$request[$i]->idclient  ?></td>
            -->
            <td><span contenteditable="true" name="nom" class="ecart" id="<?php print $request[$i]['idclient']; ?>">
                    <?php print $request[$i]['nom']; ?>
                </span>
            </td>



            <td>
                <span contenteditable="true" name="prenom" class="ecart" id="<?php print $request[$i]['idclient']; ?>">
                    <?php print $request[$i]['prenom'] ?>
                </span>
            </td>
           
            
            <td>
                <span contenteditable="true" name="adressemail" class="ecart" id="<?php print $request[$i]['idclient']; ?>">
                    <?php print $request[$i]['adressemail'] ?>
                </span>
            </td>
           <td>
                <span contenteditable="false" name="administrateur" class="ecart" id="<?php print $request[$i]['idclient']; ?>">
                    <?php print $request[$i]['administrateur'] ?>
                </span>
            </td>

        </tr>

        <?php ;
    }
    ?>

</table>









