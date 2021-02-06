<?php

    if(($_SERVER['REQUEST_METHOD'] == 'GET')){
        $exo = filter_input(INPUT_GET, 'exo', FILTER_SANITIZE_STRING);
    }else{ 
        echo 'veuillez choisir l\'exercice.';
    }

    switch($exo) {
        case 1:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo1.php');
            break;
        
        case 2:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo2.php');
            break;

        case 3:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo3.php');
            break;

        case 4:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo4.php');
            break;

        case 5:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo5.php');
            break;

        case 6:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo6.php');
            break;
    
        case 7:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo7.php');
            break;

        case 8:
            include('C:\xampp\htdocs\projetsWeb\pdoPartie1\views\exo8.php');
            break;
        
        default:
            echo 'veuillez choisir un exercice ';
    }

?>
