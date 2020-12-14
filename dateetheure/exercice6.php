<?php
  $date = "17/17/2019";
  $testDate = DateTime::createFromFormat('d/m/Y', $date); 
  $errors = $testDate->getLastErrors();
    
if (!empty($errors['warning_count'])) 
{
   return FALSE;
}
//===================================================================================================================
$date = "17/17/2019";


/* 
    * - On découpe la chaîne $date selon '/' avec la fonction explode() qui retourne un tableau 
    * - Les éléments du tableau sont directement afffecté à des variables ($dd, $mm, $yyyy) dans un ordre respectif grâce à la fonction list()      
    */
list($dd, $mm, $yyyy) = explode('/', $date);
echo gettype($dd);// indique que $dd est une chaîne
/* Les variables $dd, $mm, $yyyy sont des chaînes, or la fonction checkdate()  
    * n'accepte que des entiers
    */

$dd = (int) $dd;
echo gettype($dd);// $dd est désormais bien un entier

$mm = (int) $mm;
$yyyy = (int) $yyyy;

if (!checkdate($mm, $dd, $yyyy))
{         
    echo"Date ".$date." est erronée.";
}




    
  ?>