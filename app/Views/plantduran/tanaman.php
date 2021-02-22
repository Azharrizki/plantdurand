<?= $this->extend('/layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="page-hero-section1 bg-image hero-home-2" style="background-image: url(../assets/img/background.png);">

    <div class="hero-caption">
        <div class="container">

            <div class="row pt-4 ">



                <div class="col-lg-12 pl-4 pr-4 mt-4 d-flex pt-lg-6 align-items-center wow fadeInUp">
                    <h2 class="fw-bold">Daftar tanaman</h2>

                    <div class="ml-auto">
                        <a href="/tanaman/create-tanaman" class="btn btn-success align-content-end">Tambah tanaman</a>
                    </div>
                    <div class="d-flex">
                        <form action="" method="POST" class="search-bar">
                            <input type="text" class="form-control" name="keyword" pattern=".*\S.*" required>
                            <button class="search-btn" type="submit" name="submit">
                                <span>Search</span>
                            </button>
                        </form>
                        <a href="" class="p-4" data-toggle="modal" data-target="#exampleModalCenter">
                            <img style="width: 20px;" class="icon" src="/assets/icon/filter.png" alt="">
                        </a>

                    </div>
                </div>

                <!-- Modal filter -->

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width: 18rem; height: 36rem;" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Jenis tanaman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body align-items-center">
                                <h6>Jenis tanaman :</h6>
                                <form action="" method="POST">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bunga">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tanaman Hias Bunga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="daun" type="radio">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Tanaman Hias Daun
                                        </label>
                                    </div>
                                    <div class="d-flex p-4 justify-content-center">
                                        <button type="submit" name="submit" class="btn btn-success">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php foreach ($tanaman as $t) : ?>

                    <div class="row m-3 justify-content-center">
                        <div class="col ">
                            <div class="card card-body m-1 wow fadeInUp border-0 shadow " style="width: 13rem; height: 19.5rem;">
                                <h3 class="caption1 text-center pt-2"><?= $t['nama']; ?></h3>
                                <div class="text-center mb-3 mt-1">
                                    <img class="img-tanaman" src="/img/<?= $t['sampul']; ?>" alt="">
                                </div>
                                <p class="info1 fs-vsmall pr-2 pl-2"><?= $t['spoiler']; ?>...
                                    <br>
                                    <a href="/tanaman/<?= $t['slug']; ?>" class="fs-vsmall fw-semibold">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>

    </div>
</div>
</div>

<?= $this->endSection(); ?>