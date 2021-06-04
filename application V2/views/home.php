<div class="fik-carousel">
    <div class="owl-carousel owl-theme fik-carousel-info">
        <div class="item">
            <img src="_assets/img/15.jpg" alt="" />
            <div class="item-text text-center">
                <h1>I-TAK Sekarang Sudah Aktif!</h1>
            </div>
        </div>
        <div class="item">
            <img src="_assets/img/13.jpg" alt="" />
            <div class="item-text text-center">
                <h1>I-TAK Sekarang Sudah Aktif!</h1>
            </div>
        </div>
        <div class="item">
            <img src="_assets/img/12.jpg" alt="" />
            <div class="item-text text-center">
                <h1>I-TAK Sekarang Sudah Aktif!</h1>
            </div>
        </div>
    </div>
</div>

<div class="fik-about-overview">
    <div class="container">
        <div class="card">
            <div class="content-left">
                <h6>HI THERE, WELCOME TO</h6>
                <h4 class="color-primary">TAK Information Website</h4>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid cum error quo eligendi
                    doloremque
                    molestias placeat animi a harum, optio fugit blanditiis! Incidunt sequi velit harum sapiente sed
                    nemo ipsa.
                </p>
                <a href="#" class="btn btn-primary btn-pill btn-icon-right">READ MORE <span class="fa fa-chevron-right"></span></a>
            </div>
            <video controls="">
                <source src="_assets/img/livetune.mp4" type="video/mp4">
                Ooops, your browser is not supported this feature
            </video>
        </div>
    </div>
</div>

<div class="fik-lab-div margin-t50">
    <div class="container">
        <div class="lab-content">
            <div class="owl-carousel owl-theme fik-lab-div-list">
                <div class="item">
                    <div class="gambar">
                        <img src="_assets/img/7.jpg" alt="" />
                    </div>
                    <div class="item-text">
                        <h6>Event 1</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eveniet...</p>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-right btn-sm btn-pill"><b>LIHAT
                                SEKARANG</b>
                            <span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="gambar">
                        <img src="_assets/img/3.jpg" alt="" />
                    </div>
                    <div class="item-text">
                        <h6>Event 2</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eveniet...</p>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-right btn-sm btn-pill"><b>LIHAT
                                SEKARANG</b>
                            <span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="gambar">
                        <img src="_assets/img/2.jpg" alt="" />
                    </div>
                    <div class="item-text">
                        <h6>Event 3</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eveniet...</p>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-right btn-sm btn-pill"><b>LIHAT
                                SEKARANG</b>
                            <span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="gambar">
                        <img src="_assets/img/1.jpg" alt="" />
                    </div>
                    <div class="item-text">
                        <h6>Event 4</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eveniet...</p>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-right btn-sm btn-pill"><b>LIHAT
                                SEKARANG</b>
                            <span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="gambar">
                        <img src="_assets/img/12.jpg" alt="" />
                    </div>
                    <div class="item-text">
                        <h6>Event 5</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eveniet...</p>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-right btn-sm btn-pill"><b>LIHAT
                                SEKARANG</b>
                            <span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?= base_url('_assets/tambahan.js') ?>"></script>
<script src="<?= base_url('_assets/loadmore.js') ?>"></script>
<script>
    $('.fik-carousel-info').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
    });
    $('.fik-lab-div-list').owlCarousel({
        margin: 0,
        loop: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<span class='fas fa-arrow-left'>", "<span class='fas fa-arrow-right'>"],
        dots: false,
        responsive: {
            0: {
                items: 1,
                autoplay: false
            },
            480: {
                items: 2
            },
            720: {
                items: 4
            }
        }
    });
</script>