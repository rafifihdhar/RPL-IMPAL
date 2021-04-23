    <br>
    <br>
    <br>

    <!-- Main Container -->
    <main class="container">
        <div class="fik-section-title2">
            <span class="fas fa-door-open zzzz"></span>
            <h5>Buat Event</h5>
        </div>
        <div id="uploaded_file"></div>
        <?php
        if (isset($error)) {
            echo "<div class='alert alert-warning' role='alert'> $error </div>";
        }
        ?>
        <div class="row">
            <div class="col-md-4" id="imagePreview">
                <img src="" alt="" class="fas fa-image placeholder-img">
                <span class="placeholder-img1"></span>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <?php

                    if (isset($error)) {
                        echo '<p class="alert alert-warning">';
                        echo $error;
                        echo '</p>';
                    }

                    echo validation_errors('<div class="alert alert-warning">', '</div>');
                    ?>
                    <div class="row align-items-center">
                        <div class="col">
                            <div id="uploaded_file"></div>
                        </div>
                    </div>
                    <form method="post" id="form-upload" enctype="multipart/form-data" action="<?= base_url('cevent/tambahevent') ?>">
                        <div class="card-body">
                            <div class="custom-form">
                                <div class="form-group">
                                    <input type="namaEvent" name="namaEvent" value="<?= set_value('namaEvent') ?>" class="form-control" placeholder="Nama Event" required="required" autocomplete="off" />
                                    <label>Nama Event</label>
                                </div>
                                <div class="form-group">
                                    <input type="Penyelenggara" name="Penyelenggara" value="<?= set_value('Penyelenggara') ?>" class="form-control" placeholder="Penyelenggara Event" required="required" autocomplete="off" />
                                    <label>Penyelenggara</label>
                                </div>
                                <div class="lab-category" style="margin-bottom:16px;" required>
                                    <b>Fakultas</b>
                                    <select name="Fakultas" required class="form-control" id="Fakultas">
                                        <option value="">Select Fakultas</option>
                                        <option value="1">Informatika</option>
                                        <option value="2">FIK</option>
                                        <option value="3">FRI</option>
                                        <option value="4">Elektro</option>
                                        <option value="5">FEB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <b for="tanggalMulai">Tanggal Mulai:</b>
                                    <input type="date" id="tanggalMulai" name="tanggalMulai">
                                </div>
                                <div class="form-group">
                                    <b for="tanggalDeadline">Tanggal Selesai:</b>
                                    <input type="date" id="tanggalDeadline" name="tanggalDeadline">
                                </div>
                                <div class="form-group">
                                    <input type="LamaWaktu" name="LamaWaktu" value="<?= set_value('LamaWaktu') ?>" class="form-control" placeholder="Penyelenggara Event" required="required" autocomplete="off" />
                                    <label>Lama Waktu</label>
                                </div>
                                <div class="form-group">
                                    <input type="Lokasi" name="Lokasi" value="<?= set_value('Lokasi') ?>" class="form-control" placeholder="Lokasi Event" required="required" autocomplete="off" />
                                    <label>Lokasi</label>
                                </div>
                                <div class="form-group">
                                    <textarea type="deskripsiEvent" rows="5" name="deskripsiEvent" class="form-control" value="<?= set_value('deskripsiEvent') ?>" autocomplete="off"></textarea>
                                    <label>Deskripsi</label>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom:0;">
                                <label for="exampleFormControlFile1"><b>Tambahkan Browsur</b></label>
                                <input type="file" class="form-control" name="Browsur" id="exampleFormControlFile1" style="padding:13px 16px" required="required">
                            </div>
                            <div class="form-group" style="margin-bottom:0;">
                                <label for="video1"><b>Pilih Video</b></label>
                                <input type="file" class="form-control" name="video" id="video" style="padding:13px 16px">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End Main Container -->
    </main>

    <script>
        const image = document.getElementById('exampleFormControlFile1');
        const previewContainer = document.getElementById('imagePreview');
        const previewImage = previewContainer.querySelector(".placeholder-img")
        const previewDefaultText = previewContainer.querySelector(".placeholder-img1")

        image.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                previewDefaultText.style.display = 'none';
                previewImage.style.display = "block";

                reader.addEventListener('load', function() {
                    previewImage.setAttribute('src', this.result);
                });

                reader.readAsDataURL(file);
            } else {
                previewDefaultText.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute('src', "");
            }

        });
    </script>