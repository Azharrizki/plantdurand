<?= $this->extend('/layout/template'); ?>

<?= $this->section('konten'); ?>


<div class="page-hero-section1 pt-4 pb-4 bg-image" style="background-image: url(../assets/img/background.png);">
    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-12 pl-4 pr-4 mt-4 d-flex pt-lg-8 align-items-center justify-content-between wow fadeInUp">
                <h2 class="fw-bold">Akun saya</h2>
            </div>

        </div>
        <div class="row ml-4 mr-4">
            <div class="col-lg-4">
                <img style="position: relative; height: 563px;" src="/assets/img/admin.jpg" alt="">
            </div>
            <div class="col-lg-8 p-6" style="background-color: gainsboro;">
                <form method="POST" action="/login/keluar">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" value="Muhammada azhar rizki" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" value="azharrizki7834@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" value="*******" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="pt-3 text-lg-right">
                        <button type="submit" class="btn btn-danger">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>