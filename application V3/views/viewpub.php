<main class="container">
    <div class="fik-section-title2">
        <br>
        <br>
        <span class="fas fa-door-open zzzz"></span>
        <h5>Karya Saya</h5>
    </div>
    <div class="row grid-bartemp">
        <?php foreach ($event as $event) : ?>
            <div class="col-md-2">

                <div class="img-wrapper">
                    <img src="<?= base_url('_assets/img/' . $event->Browsur) ?>" alt="">
                </div>
                <div class="info">
                    <b><?= $event->namaEvent ?></b> <br> <?= $event->status ?> <br> <b><?= $event->Penyelenggara ?></b> <br> <b><?= $event->deskripsiEvent ?></b>
                    <br>
                    <br>
                    <?php if ($event->status == 'Menunggu Acc') : ?>
                        <a href="<?= base_url('event/terima/') . $event->idevent ?>" class="badge badge-success">Terima</a>
                        <a href="<?= base_url('event/tolak/') . $event->idevent ?>" class="badge badge-danger">Tolak</a>
                    <?php elseif ($event->status == 'dibatalkan' or $event->status == 'disetujui') : ?>
                        <a href="<?= base_url('event/hapus/') . $event->idevent ?>" class="badge badge-warning">Hapus</a>
                    <?php endif; ?>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</main>