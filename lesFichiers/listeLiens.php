<?php

// Ouverture en lecture seule  
$fp = fopen("listeLiens.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 
fclose($fp);
?>

<?php
while (!feof($fp))
{
    ?>
    $ligne = fgets($fp, 4096); 
    <a href="<?php  $ligne ?>"><?php echo $ligne ?></a>
    <?php
}
fclose($fp);
?>

