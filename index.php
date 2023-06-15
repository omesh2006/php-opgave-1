<?php

    for ($i = 1; $i <= 50; $i++) {
        echo $i . " ";
        }


        $klasgenoten = array(
            "omesh",
            "dylan",
            "gino",
            "jaden",
            "dejah",
            "valerio",
            "tjay",
            "rayan",
            "marc",
            "lenny"
        );
        
        foreach ($klasgenoten as $naam) {
            echo $naam . "<br>";
        }
        
            $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 
            
            echo 'Maand 1 is '.$maanden[0].'.<br />';
            echo 'Maand 2 is '.$maanden[1].'.<br />';
            echo 'Maand 3 is '.$maanden[2].'.<br />';
            echo 'Maand 4 is '.$maanden[3].'.<br />';
            echo 'Maand 5 is '.$maanden[4].'.<br />';
            echo 'Maand 6 is '.$maanden[5].'.<br />';
            echo 'Maand 7 is '.$maanden[6].'.<br />';
            echo 'Maand 8 is '.$maanden[7].'.<br />';
            echo 'Maand 9 is '.$maanden[8].'.<br />';
            echo 'Maand 10 is '.$maanden[9].'.<br />';
            echo 'Maand 11 is '.$maanden[10].'.<br />';
            echo 'Maand 12 is '.$maanden[11].'.<br />';
        
        
            foreach ($maanden as $index => $maand) {
                echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';
            }
        
?>
