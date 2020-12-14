<?php
    $finForm = new DateTime('2021-06-11');
    $today = new DateTime();
    $temps = $finForm->diff($today);
    echo "Il reste ".$temps->days." jours.";
?>