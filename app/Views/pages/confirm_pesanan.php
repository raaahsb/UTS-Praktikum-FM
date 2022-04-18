<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Business NTaglineame or </h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
            <a class="btn btn-primary" href="#!">Call to Action!</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-warning my-5 py-4 text-center">
        <div class="card-body">

            <form>
                <div class="row align-items-center g-4">
                    <div class="col-auto">
                        <label for="inputdate1">Tanggal cek in</label>
                        <input type="date" class="form-control" id="inputEmail" placeholder="Email" name="cek_in">
                    </div>
                    <div class="col-auto">
                        <label for="inputdate2">Tanggal cek out</label>
                        <input type="date" class="form-control" id="inputPassword" placeholder="Password" name="cek_out">
                    </div>

                    <div class="col-auto">
                        <label for="inputkamar">Jumlah kamar</label>
                        <input type="number" class="form-control" id="inputkamar" placeholder=1 name="jumlah_kamar">
                    </div>
                    <div class="col-auto" style="position:absolute; top:28%; left:50%">
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row">
        <div class="col text-left">
            <h1 style="text-align: center;"> Konfirmasi pemesanan</h1>
            <form action="/pages/save" method="POST">
                <?= csrf_field(); ?>
                <div class="col-md-5">
                    <label for="nama" class="form-label">Nama pemesan</label>
                    <input type="text" class="form-control" id="nama" name="nama_pemesan" />
                </div>
                <div class="col-md-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <div id="emailHelp" class="form-text">Kami tidak akan membagikan email anda kepada siapapun.</div>
                </div>
                <div class="col-md-5">
                    <label for="nohp" class="form-label">No handphone</label>
                    <input type="text" class="form-control" id="nohp" name="noHP" />

                </div>
                <div class="col-md-5">
                    <label for="nama_tamu" class="form-label">Nama tamu</label>
                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu">
                </div>
                <div class="col-md-4">
                    <label for="tipe_kamar" class="form-label">Tipe kamar</label>
                    <select id="inputState" class="form-control" name="jenis_kamar">
                        <option selected>Choose...</option>
                        <option>deluxe</option>
                        <option>deluxe</option>
                        <option>deluxe</option>
                        <option>deluxe</option>
                    </select>
                </div>
                <div class="col-mb-4">
                    <a href="http://"></a>
                </div>
                <div class="col-lg-5">
                    <button style="position:relative; top: 10px;" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>