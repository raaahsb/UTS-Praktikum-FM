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
                <h5 class="card-header">Tabel resevasi</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col my-3">
                            <table class="table">
                                <thead class="thread-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama pemesan</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nohp</th>
                                        <th scope="col">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($pemesanan as $pesan) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $pesan["nama_pemesan"]; ?></td>
                                            <td><?= $pesan["email"]; ?></td>
                                            <td><?= $pesan["noHP"]; ?></td>
                                            <td>
                                                <?php $i++ ?>
                                                <a href="  /admin/detail/<?= $pesan['id_pemesan']; ?>" class="btn btn-success">Detail</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

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