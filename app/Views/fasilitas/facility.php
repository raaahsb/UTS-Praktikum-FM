<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Business Name or Tagline</h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
            <a class="btn btn-primary" href="#!">Call to Action!</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <h2 class="text-white m-0" style="text-align: left;">Fasilitas</h2>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1613152184920-bc1c4ab7fd1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Kolam renang</h2>
                    <p class="card-text">Nikmati kolam renang dengan pemandangan matahari terbenam yang memukau.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1551818255-e6e10975bc17?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Ruang Konvensi</h2>
                    <p class="card-text">Ruang konvensi yang mampu mengakomodasi lebih dari 3.000 orang </p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="https://media.istockphoto.com/photos/children-are-making-something-out-of-colored-paper-picture-id582284028?b=1&k=20&m=582284028&s=170667a&w=0&h=VcY7RiZVfS_6aEO5zkXXVYX-IGC06vLg_YMpU3Ue0ik=" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Kids club</h2>
                    <p class="card-text">Kids club tempat dengan fasilitas lengkap untuk kegiatan anak-anak.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>

<?= $this->endSection(); ?>