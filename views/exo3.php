
    <h2 class="text-center my-3">tableau des 20 premiers clients</h2>
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
            <?php foreach($clients20 as $client): ?>
                <tr>
                    <th class="row"><?= $client->id ?></th>
                    <td><?= $client->lastName?></td>
                    <td><?= $client->firstName?></td>
                    <td><?= $client->cardNumber?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>