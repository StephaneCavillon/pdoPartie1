<h2 class="text-center my-3">tableau des noms qui commencent par M </h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="col-2">Nom</th>
                <th class="col-2">Prénom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientsWithM as $client): ?>
                <tr>
                    <td><?= $client->lastName?></td>
                    <td><?= $client->firstName?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>