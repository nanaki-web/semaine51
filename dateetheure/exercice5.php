<?php
$date = new DateTime();
    for ($i = 0; $i < 4; $i++)
    {
        $date->modify('+1 years');
        if ($date->format('L') == 1)
        {
            ?>
               L'année <?= $date->format('Y') ?> sera la prochaine année bissextile.
               <?php
        }
    }
    ?>
    
