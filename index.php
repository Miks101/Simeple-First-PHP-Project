<?php 
    date_default_timezone_set('Europe/London');
    $current_time = date('H:i'); ?>

        echo "At this time $current_time I'm probably: "; 

         if($current_time > '21:00' && $current_time < '22:30'){
                        echo"Unwinding Before Bed";
         } else if($current_time > '22:30' && $current_time < '07:00'){
                        echo"Most Likely Sleeping";
         } else if($current_time > '07:00' && $current_time < '09:00'){
                        echo"Getting Ready For Work";
         } else if($current_time > '09:00' && $current_time < '12:00'){
                        echo"Working Hard";
         } else if($current_time > '12:00' && $current_time < '13:00'){
                        echo"Out For Lunch";
         } else if($current_time > '13:00' && $current_time < '17:00'){
                        echo"Working Hard";
         } else if($current_time > '17:00' && $current_time < '18:00'){
                        echo"Family Time";
         } else if($current_time > '18:00' && $current_time < '18:30'){
                        echo"Out for Dinner";
         } else if($current_time > '18:30' && $current_time < '20:30'){
                        echo"Working Some More";
         } else if($current_time > '20:30' && $current_time < '22:30'){
                        echo"Its A Secret";
         } ?>
