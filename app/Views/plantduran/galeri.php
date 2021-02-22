<?= $this->extend('/layout/template'); ?>

<?= $this->section('konten'); ?>


<div class="page-hero-section1 bg-image hero-home-2" style="background-image: url(../assets/img/background.png);">

    <div class="hero-caption pb-3">
        <div class="container">
            <div class="row pt-4 ">
                <div class="col-lg-12 pl-4 pr-4 mt-4 d-flex pt-lg-8 align-items-center justify-content-between wow fadeInUp">
                    <h2 class="fw-bold">Galeri Tanaman</h2>
                    <button class="btn btn-gradient" data-toggle="modal" data-target="#upload">Upload file</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form action="/galeri/save" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group ">
                            <div>
                                <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= old('nama'); ?>" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div>
                                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>" placeholder="Penulis">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="sampul" name="sampul" placeholder="Sampul">
                                <label class="custom-file-label" for="sampul">Pilih gambar</label>
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary">Tambah data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- endModal -->

    <div class="container">
        <div class="image-wrap m-3">
            <?php foreach ($galeri as $g) : ?>
                <img class="wow fadeInUp img-galeri" src="/img/<?= $g['sampul']; ?>" alt="">
                <!-- <div class="img-konten">
                    <h3><?= $g['nama']; ?></h3>
                    <h5>Oleh : <b><?= $g['penulis']; ?></b></h5>
                </div> -->
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <?php foreach ($galeri as $gal) : ?>
        <div class="modal fade bd-example-modal-sm" id="img" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= $gal['nama']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-img text-center mb-3">
                            <img src="/assets/img/galeri/1.png" alt="">
                        </div>

                        <div class="detail d-flex">
                            <div class="detail1">
                                <h6>Oleh : <b><?= $gal['penulis']; ?></b></h6>
                                <h6>1 desember 2020</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>


<?= $this->endSection(); ?>