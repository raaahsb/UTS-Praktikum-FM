<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <?php if (session()->getFlashdata('Message')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('Message') ?>
        </div>

    <?php endif ?>
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Hotel hebat </h1>
            <p>Kami menawarkan berbagai macam fasilitas untuk berbagai macam kegiatan anda. Mulai dari weeding hingga Konversi </p>
            <a class="btn btn-primary" href="\fasilitas">Cek disini</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-warning my-5 py-4 text-center">
        <div class="card-body">

            <form>
                <div class="row align-items-center g-4">
                    <div class="col-auto">
                        <label for="inputdate1">Tanggal cek in</label>
                        <input type="date" class="form-control" id="inputEmail" placeholder="" name="cekout">
                    </div>
                    <div class="col-auto">
                        <label for="inputdate2">Tanggal cek out</label>
                        <input type="date" class="form-control" id="inputPassword" name="cekout">
                    </div>

                    <div class="col-auto">
                        <label for="inputkamar">Jumlah kamar</label>
                        <input type="number" class="form-control" id="inputkamar" placeholder="Kamar" name="jumlah_kamar">
                    </div>
                    <div class="col-auto" style="position:absolute; top:28%; left:50%">
                        <a href="/pages/pesan" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row">
        <div class="col text-left">
            <h1 style="text-align: center;"> Tentang kami</h1>
            <p class="font-weight-light" style="text-align: center;">Lepaskan diri anda ke Hotel Hebat, dikelilingi keindahan peggunungan yang indah, danau, dan sawah yang menghijau. Nikmati<br>
                sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau; Kid's Club yang<br>
                luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center<br>
                kami, dilengkapi pelayanan lengkap dengan ruangan konvensi terbesar di Bandung, mampu mengakomodasikan hingga 3.000<br>
                delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun wujudkan acara pernikahan mewah
            </p>
        </div>
    </div>
    <?= $this->endSection(); ?>