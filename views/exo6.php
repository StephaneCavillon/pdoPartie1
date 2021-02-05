<?php
    // echo '<pre>';
    // var_dump($shows);
    // echo '</pre>';
?>

<h2 class="text-center my-3">programme des spectacles et artistes</h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="col-2">Spectacle</th>
                <th class="col-2">Artiste</th>
                <th class="col-2">Date</th>
                <th class="col-2">Heure</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($shows as $show): ?>
                <tr>
                    <td><?= $show->title?></td>
                    <td><?= $show->performer?></td>
                    <td><?= $show->date?></td>
                    <td><?= $show->startTime?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>