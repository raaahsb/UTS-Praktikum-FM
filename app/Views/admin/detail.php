<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row my-3">
        <div class="col">
            <div class="card">
                <h5 class="card-header">Detail resevasi</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col my-3">
                            <p class="card-text"><b>Nama Pemesan</b> : <?= $detail['nama_pemesan']; ?>
                                <br><b>email</b> : <?= $detail['email']; ?>
                                <br><b>Nama tamu</b> : <?= $detail['nama_tamu']; ?>
                                <br><b>Jenis kamar</b> : <?= $detail['jenis_kamar']; ?>
                                <br><b>Nomor hp</b> : <?= $detail['noHP']; ?>
                                <br><b>Tanggal cek in</b> : <?= $detail['tgl_cekin']; ?>
                                <br><b>Tanggal cek out</b> : <?= $detail['tgl_cekout']; ?>
                                <br><b>Jumlah_kamar</b> : <?= $detail['jml_kamar']; ?>
                            </p>
                            <div class="col my-2">
                                <a href="/admin" class="btn btn-outline-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <?= $this->endSection(); ?>