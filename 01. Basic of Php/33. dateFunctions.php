<?php

   date_default_timezone_set("ASIA/DHAKA");
   
   echo "<pre>";
    print_r(getdate());
   echo "</pre>";

   $date=getdate();

   echo $date['hours'];
?>