Exercice 1 :

Affichez la date du jour au format mardi 2 juillet 2019. 

<?php 



setlocale(LC_TIME, 'fr_FR'); //Ref française
echo strftime('%A %d %B %Y'."<br>"); // strftime respecte localisation locale

?>



Exercice 2 :

Trouvez le numéro de semaine de la date suivante : 14/07/2019. 

<?php


$date_test = "2019-07-14";
$good_format=strtotime ($date_test);
echo date('W',$good_format)."<br>";

?>


Exercice 5

Quelle sera la prochaine année bissextile ?

<?php
function IsLeapYear($Year) {
 return ((($Year & 3) == 0) && (($Year % 100 != 0) || ($Year % 400 == 0)));
}
 
for($I=2020;$I<=2030;$I++) {
 if(IsLeapYear($I)) echo strval($I)." est une année bissextile<BR>";
}
?>

Exercice 6

Montrez que la date du 17/17/2019 est erronée.

<?php
var_dump(checkdate(12, 31, 2000));
var_dump(checkdate(17, 17, 2019))."<br>";

?>


Exercice 7

Affichez l'heure courante sous cette forme : 11h25.

<?php 


$heure = date("H:i");
Print("Il est $heure")."<br>"; // Demander pourquoi il y a une différence d'une heure ?

?>


Exercice 8 : ?
