

<?php
$log = new pro_filmDB($cnx);
$request = $log->getPro_film();
$nbr_film = count($request);
//$request=$cnx->getPro_client();

include('lib/php/v_connection.php');
?>



<table class="table table-bordered">

    <tr>
        <th>idfilm</th>
        <th>nom</th>
        <th>datedesortie</th>
        <th>genre</th>
        <th>nationalite</th>
        <th>bandeannonce</th>
        <th>soustitre</th>
        <th>synospsis</th>
        <th>sourd</th>


    </tr>

    <?php for ($j = 0; $j < $nbr_film; $j++) { ?>

        <tr> 
            <td><span><?php print $request[$j]->idfilm ?></span></td>
            <td><span><?php print $request[$j]->nom ?></span></td>
            <td><span><?php print $request[$j]->datedesortie ?></span></td>
            <td><span><?php print $request[$j]->genre ?></span></td>
            <td><span><?php print $request[$j]->nationalite ?></span></td>
            <td><span><?php print $request[$j]->bandeannonce ?></span></td>
            <td><span><?php print $request[$j]->soustitre ?></span></td>
            <td><span><?php print $request[$j]->synopsis ?></span></td>
            <td><span><?php print $request[$j]->sourd ?></span></td>

        </tr>

    <?php ;} ?>

</table>











