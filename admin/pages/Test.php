<?php

   // require "C:\wamp64\www\Projet_Techno_web_Jules\admin\lib\php\classes\pro_clientDB.class.php;";
$log=new pro_clientDB($cnx);
$request=$log->getPro_client();
$nbr_client=count($request);
//$request=$cnx->getPro_client();
?>
<div>

<?php
?>
<table>
    <thead>
        <tr>
            
            <th>
                <td>idclient</td>
                <td>nom</td>
                <td>prenom</td>
                <td>adresse mail</td>
                <td>administrateur</td>
            </th> 
        </tr>
    </thead>
    <tbody>
        <?php
            for($i=0;$i<$nbr_client;$i++){?>
                
    <td><?php print $request[$i]->idclient ?><td>
    <td><?php print $request[$i]->nom ?><td>
    <td><?php print $request[$i]->prenom ?><td>
    <td><?php print $request[$i]->adressemail ?><td>
    <td><?php print $request[$i]->administration ?><td>
            <?php }?>

    
        
    </tbody>
</table>




