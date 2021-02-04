<?php 
    // connexion a la base de donnée

    //methode easy
    // $pdo = new PDO('mysql:dbname=colyseum;host=localhost', 'root');


    $dsn = 'mysql:dbname=colyseum;host=127.0.0.1;port:3306';
    $user = 'root';
    $password = '';

    try{
        $pdo = new PDO($dsn, $user, $password);
        //exo1
        //selection des clients
        $clients = $pdo->query('SELECT * FROM `clients`');
        echo 'Connexion réussie.';

    } catch(PDOException $e){
        echo 'Connexion echouée: ' . $e->getMessage();
    }


    include('views/header.php');

    

    
    include('views/exo1.php');


    include('views/footer.php');
?>
