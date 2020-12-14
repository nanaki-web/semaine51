

<?php
        $date = date("d-m-Y");
          Print("Nous sommes le $date");
        $date2 = date('d-m-Y', strtotime(' + 1 month'));
          Print("Dans un mois nous serons le $date2");
      