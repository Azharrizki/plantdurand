<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="page-hero-section1 bg-image hero-home-2" style="background-image: url(../assets/img/background.png);">


    <div class="container p-8">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form tambah data</h2>

                <form action="/tanaman/save" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input placeholder="Bunga . . ." type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input placeholder="azhar . . ." type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Tanaman/Bunga" class="form-control" id="jenis" name="jenis" value="<?= old('jenis'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="spoiler" class="col-sm-2 col-form-label">spoiler</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="spoiler" class="form-control" id="spoiler" name="spoiler" value="<?= old('spoiler'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                        <div class="col-md-12">
                            <textarea type="text" placeholder="deskripsi tanaman" class="form-control" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">link</label>
                        <div class="col-md-10">
                            <input type="text" placeholder="https://www.youtube.com/watch?v= . . ." class="form-control" id="link" name="link" value="<?= old('link'); ?>"></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('sampul'); ?>
                                </div>
                                <label class="custom-file-label" for="sampul">Pilih gambar</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>