<?php
    // echo '<pre>';
    // var_dump($clientsCards);
    // echo '</pre>';
?>

<h2 class="text-center my-3">Listes précises des clients</h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="col-2">Nom</th>
                <th class="col-2">Prénom</th>
                <th class="col-2">Date de Naissance</th>
                <th class="col-2">Carte de fidélité</th>
                <th class="col-2">Numéro de carte de fidélité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientsCards as $client): ?>
                <tr>
                    <td><?= $client->lastName?></td>
                    <td><?= $client->firstName?></td>
                    <td><?= $client->birthDate?></td>
                    <td><?= ($client->cardNumber != 0) ? 'Oui' : 'Non' ?></td>
                    <td><?= $client->cardNumber?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>