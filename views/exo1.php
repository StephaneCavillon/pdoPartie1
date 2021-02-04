<?php
    //exo1
    //selection des clients
    // $clients = $pdo->query('SELECT * FROM `clients`');

    // if($clients === false){
    //     var_dump($pdo->errorInfo());
    //     die('Erreur SQL');
    // }

    $clients = $clients -> fetchAll(PDO::FETCH_ASSOC); // FETCH_ASSOC permet de renvoyer une tableau associatif on peut sortir des objets avec FETCH_OBJ
?>



    <h2 class="text-center my-3">tableau clients</h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="col-2">id</th>
                <th class="col-2">Nom</th>
                <th class="col-2">Prénom</th>
                <th class="col-2">numéro de carte</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clients as $client): ?>
                <tr>
                    <th class="row"><?= $client['id'] ?></th>
                    <td><?= $client['lastName']?></td>
                    <td><?= $client['firstName']?></td>
                    <td><?= $client['cardNumber']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>