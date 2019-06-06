<?php
$log = new pro_cinemaDB($cnx);
$request = $log->getPro_cinema();
$nbr_film =count($request);
//$request=$cnx->getPro_cinemaDB();

include('lib/php/v_connection.php');
?>


<table class="table table-bordered">

    <tr>
        <th>idcinéma</th>
        <th>adresse</th>
        <th>nom</th>
    </tr>

    <?php for ($k = 0; $k < $nbr_film; $k++) { ?>
        <tr> 
            <td><span><?php print $request[$k]->idcinema ?></span></td>
            <td><span><?php print $request[$k]->adresse ?></span></td>
            <td><span><?php print $request[$k]->nom ?></span></td>
        </tr>
            
    <?php  ;} ?>

</table>


