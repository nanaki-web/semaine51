<?php
// $annee = date('Y');
$dateFinFormation = mktime (0,0,0,07,14,2021);

if ($dateFinFormation < time())
 $dateFinFormation = mktime(0, 0, 0, 12, 25,2021);
 
 $tps_restant = $dateFinFormation - time(); // Différence entre fin de formation et maintenant.(Vu dans le futur)

 //============ CONVERSIONS
 // j'ai divisé le temps restant par 60 pour obtenir les minutes, puis les minutes par 60 pour obtenir les heures, et pour finir, les heures par 24 pour obtenir les jours. Ce qui me donne ça :
 $i_restantes = $tps_restant / 60; // Minutes restantes
$H_restantes = $i_restantes / 60; // Heures restantes
$d_restants = $H_restantes / 24; // Jours restants

//diviser le reste en heure 
$H_restantes = $H_restantes % 24;
//arrondir les restes
$s_restantes = floor($tps_restant % 60); // Secondes restantes
$i_restantes = floor($i_restantes % 60); // Minutes restantes
$H_restantes = floor($H_restantes % 24); // Heures restantes
$d_restants = floor($d_restants); // Jours restants
//===================================
echo 'Il reste exactement <strong>'. $d_restants .' jours</strong>, <strong>'. $H_restantes .' heures</strong>,'
    . ' <strong>'. $i_restantes .' minutes</strong> et <strong>'. $s_restantes .'s</strong> avant la fin de la formation <:o).';

    setlocale(LC_ALL, 'fr_FR');

echo 'Nous sommes le '. strftime('<strong>%d %B %Y</strong>, et il est <strong>%Hh%M</strong>') .'.<br />'


?>
