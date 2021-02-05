<?php
    //exo2
    //selection des spectacles  
    $query = $pdo->query('SELECT * FROM `shows`');

    if($query === false){
        // var_dump($pdo->errorInfo());
        die('Erreur SQL');
    }

    $shows = $query -> fetchAll(PDO::FETCH_ASSOC); // FETCH_ASSOC permet de renvoyer une tableau associatif on peut sortir des objets avec FETCH_OBJ


?>

    <h2 class="text-center my-3">tableau des types de spectacles</h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="col-2">id</th>
                <th class="col-2">type de spectacle</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($showTypes as $show): ?>
                <tr>
                    <th class="row"><?= $show->id ?></th>
                    <td><?= $show->type ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>