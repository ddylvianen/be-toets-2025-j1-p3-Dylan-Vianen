<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>


    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Jaar</th>
                        <th scope="col">Aantalslachtoffers (mln)</th>
                        <th scope="col">Typeaanval</th>
                        <th scope="col">Schade (mln)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['result'] as $i) : ?>
                        <tr>
                            <td><?= $i->Naam; ?></td>
                            <td><?= $i->Jaar; ?></td>
                            <td><?= $i->AantalSlachtoffers; ?></td>
                            <td><?= $i->TypeAanval; ?></td>
                            <td><?= $i->Schade; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">terug</a>
        </div>
        <div class="col-1"></div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>