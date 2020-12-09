<?php
    $date = date("m");
    switch($date){
        case "01" : 
            include "janvier.html";
            break;
        case "02" : 
            include "fevrier.html";
            break;
        case "03" : 
            include "mars.html";
            break;
        case "04" : 
            include "avril.html";
            break;
        case "05" : 
            include "mai.html";
            break;
        case "06" : 
            include "juin.html";
            break;
        case "07" : 
            include "juillet.html";
            break;
        case "08" : 
            include "aout.html";
            break;
        case "09" : 
            include "septembre.html";
            break;
        case "10" : 
            include "octobre.html";
            break;
        case "11" : 
            include "novembre.html";
            break;
        case "12" : 
            include "decembre.html";
            break;
        default : 
            echo "hum, hum Problème technique, veuillez revenir ultérieurement";
            break;
    }
?>