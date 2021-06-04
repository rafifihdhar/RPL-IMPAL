<div class="fik-content" style="padding-top:20px;">
    <div class="container">

        <div class="pembuat-karya">
            <h6><?= $tampilan->namaEvent ?></h6>
            by <b><?= $tampilan->Penyelenggara ?></b>
        </div>
        <div class="karya">
            <img src="<?= base_url('_assets/img/' . $tampilan->Browsur) ?>" alt="">
            <div class="caption">
                <?= $tampilan->deskripsiEvent ?>
            </div>
        </div>
        <h6>You Might Also Like Theese</h6>
        <br>
        <div class="fik-feed galeri-karya">
            <div class="feed-container">
                <?php foreach ($like as $like) { ?>
                    <div class="feed-item">
                        <div class="card">
                            <div class="gambar">
                                <a href="<?= base_url('main/viewevent/' . $like->idevent) ?>">
                                    <img src="<?= base_url('_assets/img/' . $like->Browsur) ?>" alt="<?= $like->namaEvent ?>" />
                                </a>
                            </div>
                            <div class="item-text">
                                <h6><a href="<? base_url('main/viewevent/' . $like->idevent) ?>"><?= $like->namaEvent ?></a></h6>
                                <span>by <b><?= $like->Penyelenggara ?></b></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    $('.fik-carousel-karya').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1
    });
</script>