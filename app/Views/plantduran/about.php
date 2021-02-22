<?= $this->extend('/layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="page-hero-section1 pt-4 pb-4 bg-image" style="background-image: url(../assets/img/background.png);">
    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-12 pl-4 pr-4 mt-4 d-flex pt-lg-8 align-items-center justify-content-between wow fadeInUp">
                <h2 class="fw-bold">Tentang kami</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 m-auto wow fadeInRight">
                <div class="text-right">
                    <h5><b>Endys robith pangestu</b></h5>
                    <h6>1800016141</h6>
                    <h6>Kordinator Kerja</h6>
                </div>
            </div>
            <div class="col-lg-2 p-0 wow fadeInUp">
                <a type="button" data-toggle="modal" data-target="#admin1">
                    <img class="img-admin" src="/assets/img/admin1.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 p-0 wow fadeInUp">
                <a type="button" data-toggle="modal" data-target="#admin2">
                    <img class="img-admin" src="/assets/img/admin2.png" alt="">
                </a>
            </div>
            <div class="col-lg-4 m-auto wow fadeInLeft">
                <div class="text-left">
                    <h5><b>Muhammad azhar rizki</b></h5>
                    <h6>1800016137</h6>
                    <h6>Spesialis Coding</h6>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 m-auto wow fadeInRight">
                <div class="text-right">
                    <h5><b>Ahmad Nur Hadi</b></h5>
                    <h6>1800016131</h6>
                    <h6>Spesialis Konten</h6>
                </div>
            </div>
            <div class="col-lg-2 p-0 wow fadeInUp">
                <a type="button" data-toggle="modal" data-target="#admin3">
                    <img class="img-admin" src="/assets/img/admin3.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 p-0 wow fadeInUp">
                <a type="button" data-toggle="modal" data-target="#admin4">
                    <img class="img-admin" src="/assets/img/admin4.png" alt="">
                </a>
            </div>
            <div class="col-lg-4 m-auto wow fadeInLeft">
                <div class="text-left ">
                    <h5><b>Muhammad Fairuz Bahrain</b></h5>
                    <h6>1800016138</h6>
                    <h6>Spesialis Tampilan</h6>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 p-0">
                <div class="kontak p-5 text-right">
                    <h3><b>Informasi Kontak</b></h3>
                    <h5 class="pt-3">Yogyakarta Indonesia <img class="pl-2" src="/assets/img/location.png" alt=""></h5>
                    <h5 class="pt-3">+62 89634815123 <img class="pl-2" src="/assets/img/phone.png" alt=""></h5>
                    <h5 class="pt-3">@Plantduran.id <img class="pl-2" src="/assets/img/instagram.png" alt=""></h5>
                    <h5 class="pt-3">@Plantduran.id <img class="pl-2" src="/assets/img/facebook.png" alt=""></h5>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="maps-container">
                    <div id="myMap"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLongTitle">Endys Robith Pangestu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/assets/img/admin1.png" style="border-radius: 24px;" alt="">
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Halo, saya Endys Robiht Pangestu. Seorang Mahasiswa Universitas Ahmad Dahlan yang mengambil jurusan Sistem Informasi. Dalam proyek “Plantduran” ini saya bertugas koordinator kerja
                            <br>
                            <br>
                            Info Kontak :
                            <br>
                            NIM <b>1800016141</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLongTitle">Muhammad azhar rizki</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/assets/img/admin2.png" style="border-radius: 24px;" alt="">
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Halo, saya Muhammad Azhar Rizki. Seorang Mahasiswa Universitas Ahmad Dahlan yang mengambil jurusan Sistem Informasi. Dalam proyek “Plantduran” ini saya bertugas sebagai spesialis kode.
                            <br>
                            <br>
                            Info Kontak :
                            <br>
                            NIM <b>1800016137</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLongTitle">Ahmad Nur Hadi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/assets/img/admin3.png" style="border-radius: 24px;" alt="">
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Halo, saya Ahmad Nurhadi. Seorang Mahasiswa Universitas Ahmad Dahlan yang mengambil jurusan Sistem Informasi. Dalam proyek “Plantduran” ini saya bertugas spesialis konten
                            <br>
                            <br>
                            Info Kontak :
                            <br>
                            NIM <b>1800016131</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLongTitle">Muhammad Fairuz Bahrain</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/assets/img/admin4.png" style="border-radius: 24px;" alt="">
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Halo, saya Muhammad Fairuz Bahrain. Seorang Mahasiswa Universitas Ahmad Dahlan yang mengambil jurusan Sistem Informasi. Dalam proyek “Plantduran” ini saya bertugas sebagai spesialis tampilan.
                            <br>
                            <br>
                            Info Kontak :
                            <br>
                            NIM <b>1800016138</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>