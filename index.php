<?php 
    // connexion a la base de donnée

    //methode easy
    // $pdo = new PDO('mysql:dbname=colyseum;host=localhost', 'root');


    $dsn = 'mysql:dbname=colyseum;host=127.0.0.1;port:3306';
    $user = 'root';
    $password = '';

    // connexion a la base de donnée

    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo 'Connexion echouée: ' . $e->getMessage();
    }

    //exo1
    try{        
        //selection des clients
        $pdo_statement = $pdo->query('SELECT * FROM `clients`');
        // echo 'Connexion réussie.';
        $clients = $pdo_statement -> fetchAll(PDO::FETCH_ASSOC); // FETCH_ASSOC permet de renvoyer une tableau associatif on peut sortir des objets avec FETCH_OBJ
    } catch(PDOException $e){
        echo 'erreur de requête 1: ' . $e->getMessage();
    }
    
    //exo2
    try{
        // selection des spectacles
        $pdo_statement = $pdo->query('SELECT * FROM `showtypes`');

        $showTypes = $pdo_statement -> fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo 'erreur de requête 2: ' . $e->getMessage();
    }

    //exo3
    try{
        // selection des 20 premiers clients
        $pdo_statement = $pdo->query('SELECT * FROM `clients` LIMIT 20');

        $clients20= $pdo_statement -> fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo 'erreur de requête 3: ' . $e->getMessage();
    }

    //exo4
    try{
        // selection des clients avec carte de fidelité
        $pdo_statement = $pdo->query('SELECT * FROM `clients` WHERE `cardNumber` != 0');

        $clientsWithCard= $pdo_statement -> fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo 'erreur de requête 4: ' . $e->getMessage();
    }

    //exo5
    try{
        // selection des clients avec nom commencant par M 
        $pdo_statement = $pdo->query("SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE 'M%' ORDER BY `lastName`");

        $clientsWithM= $pdo_statement -> fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo 'erreur de requête 5: ' . $e->getMessage();
    }

    //exo6
    try{
        // selection des titres de spectacles 
        $pdo_statement = $pdo->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`');

        $shows= $pdo_statement -> fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo 'erreur de requête 6: ' . $e->getMessage();
    }
    
    //exo7
    try{
        // selection des clients avec carte de fidélité ou non  
        $pdo_statement = $pdo -> query('SELECT `lastName`, `firstName`, `birthDate`, `cardNumber` FROM `clients`');

        $clientsCards= $pdo_statement -> fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo 'erreur de requête 7: ' . $e->getMessage();
    }


    
    

    include('views/template/header.php');
?>

<form action="" method="get">
    <select name="exo" id="exo">
        <option value="">veuillez choisir l'exercice à afficher</option>
        <option value="exo1">Exercice 1 </option>
        <option value="exo2">Exercice 2 </option>
        <option value="exo3">Exercice 3</option>
        <option value="exo4">Exercice 4</option>
        <option value="exo5">Exercice 5</option>
        <option value="exo6">Exercice 6</option>
        <option value="exo7">Exercice 7</option>
    </select>

    <button type="submit">Afficher</button>
</form>

<?php 
    include('controllers/selectCtrl.php');



    include('views/template/footer.php');
?>

