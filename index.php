<?php
require "function.php";
require "jquery-3.4.0.min.js";

$resultat = getAllAnnonces();

?>


 <ul>
    <li><?php echo $resultat["annonce1"][0] ?></li>
 	<li><?php echo $resultat["annonce1"][1] ?></li>
 </ul>

 <hr>

 <ul>
    <li><?php echo $resultat["annonce2"][0] ?></li>
 	<li><?php echo $resultat["annonce2"][1] ?></li>
 </ul>

 <?php

 $newProduit = insertAnnonce("annonce3", array("fruit",2));


 echo "<pre>";
 print_r($newProduit);
 echo "</pre>";