

<?php
$log = new pro_acteurDB($cnx);
$request = $log->getPro_acteurs();
$nbr_acteur = count($request);

include('lib/php/v_connection.php');
?>


<table class="table table-bordered ">

    <tr>
        <th>idacteur</th>
        <th>nomacteur</th>
        <th>prenomacteur</th>


    </tr>

    <?php for ($j = 0; $j < $nbr_acteur; $j++) { ?>
        <tr> 
            <td>
                <span>
                    <?php print $request[$j]->idacteur ?>
                </span>
            </td>
            <td>
                <span>
                    <?php print $request[$j]->nomacteur ?>
                </span>
            </td>
            <td><span><?php print $request[$j]->prenomacteur ?></span></td>

        </tr>

        <?php
        ;
    }
    ?>

</table>











