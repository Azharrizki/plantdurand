<?= $this->extend('/layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="page-hero-section1 bg-image hero-home-2" style="background-image: url(../assets/img/background.png);">
    <div class="hero-caption">
        <div class="container">
            <div class="pl-4 mt-4 pt-lg-8 wow fadeInUp">
                <h2 class="fw-bold"><?= $tanaman['nama']; ?></h2>
                <h6 class="fs-vsmall">Oleh <b><?= $tanaman['penulis']; ?></b> on Januari 8, 2021</h6>
            </div>
            <div class="row justify-content-center">


                <div class="col-md-12 mt-lg-4 text-center d-lg-inline-block wow zoomIn">
                    <div>
                        <img class="img-detail" src="/img/<?= $tanaman['sampul']; ?>" alt="...">
                    </div>
                    <div class="mt-2" style="opacity: 50%;">
                        <a href="">plantduran.id</a>
                    </div>
                </div>

            </div>

            <div class="container pt-4">
                <div style="text-align: justify;" class="row justify-content-center">
                    <div class="col-9 wow fadeInUp">
                        <?= $tanaman['deskripsi']; ?>
                    </div>
                    <div class="col-9 wow fadeInUp">
                        <div style="display: flex; justify-content: center;" class="col-lg-12 wow m-auto fadeInUp pt-5 pb-5">
                            <br>
                            <iframe class="video1" src="https://www.youtube.com/embed/<?= $tanaman['link']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container ">
                <div class="row justify-content-center text-center">
                    <div class="form-group mt-4">
                        <h5 class="wow fadeInDown mb-4 fw-medium"><b></b>Komentar</h5>
                        <form action="/komentar/save" method="POST">
                            <?= csrf_field(); ?>
                            <div class="form-group ">
                                <div>
                                    <textarea type="text" class="textarea1 form-control" rows="5" cols="75" id="komentar" name="komentar" autofocus value="<?= old('komentar'); ?>" placeholder="Pesan/Masukan/Komentar"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col form-group ">
                                    <div>
                                        <input type="text" class="form-control" id="username" name="username" value="<?= old('username'); ?>" placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <div>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= old('email'); ?>" placeholder="email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>