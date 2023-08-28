<!doctype html>
<html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>BPSDMP SURABAYA</title>

        <style>
            #text-justify{
                text-align : justify;
            }
        </style>

    </head>
    <body>
        <!-- Awalan Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="home.php">BPSDMP SURABAYA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#beritaAcara">Berita Acara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#about">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#kontak">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="tes.php">Tes</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhiran Navbar -->

        <!-- Showcase Awal -->
        <section class="bg-info text-white p-5 pt-lg-5 text-center text-sm-start" id="home">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="fs-5">Halo Sobat Kominfo !</h6>
                        <p class="lead my-2">
                            Selamat datang di website Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika Surabaya
                        </p>
                        <a href="#about">
                        <button class="btn btn-light"> Seputar BPSDMP </button></a>
                    </div>
                    <img src="img/logo BPSDMP.png" class="img-fluid w-25 d-none d-sm-block" alt="Logo BPSDMP">
                </div>
            </div>
        </section>
        <!-- Showcase Akhir -->

        <!-- Card Kegiatan -->
        <section id="beritaAcara" class="p-5">
            <?php include 'koneksi.php';
            $berita = mysqli_query ($koneksi, "SELECT * FROM berita_acara");
            foreach($berita as $row){ ?>
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md d-flex align-items-stretch">
                        <div class="card bg-light text-dark">
                            <div class="card-body text-center">
                                <img src="img/<?php echo $row['img']; ?>" width="260px" heigth="260px">
                                <p class="card-text mb-3">
                                    <?php echo $row['judul_berita'];?>
                                </p>
                                <div class="card-footer bg-light border-0">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary bg-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $row['id_berita']; ?>">
                                    Baca Selengkapnya
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop<?= $row['id_berita']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Rincian Kegiatan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="text-justify">
                                                    <?php echo $row['deskripsi_berita'];?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section> 

        <!-- Tentang Kami Awal -->
        <section id="about">
                <div class="row align-items-center justify-content-between bg-info text-light">
                    <div class="col-md-5">
                        <img src="img/logo BPSDMP.png" alt="Logo BPSDMP SURABAYA" class="img-fluid w-50 d-none d-sm-block mx-auto">
                    </div>
                        <div class="col-md p-5">
                            <h2> Apa itu BPSDMP SURABAYA ? </h2>
                            <p class="fs-6 fw-light text-justify" id="text-justify">
                                <b>Berdasarkan Permenkominfo Nomor 3 Tahun 2022 tentang Organisasi Dan Tata Kerja Unit Pelaksana Teknis Bidang Pengembangan Sumber Daya Manusia Dan Penelitian Komunikasi dan Informatika</b>
                            </p>
                            <p class="fs-6 fw-light text-justify" id="text-justify">
                            Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika yang disebut BPSDMP Kominfo merupakan unit pelaksana teknis di lingkungan Badan Penelitian dan Pengembangan Sumber Daya Manusia yang berada di bawah dan bertanggung jawab kepada Kepala Badan Penelitian dan Pengembangan Sumber Daya Manusia. BPSDMP Kominfo secara administratif dibina oleh Sekretaris Badan Penelitian dan Pengembangan Sumber Daya Manusia. BPSDMP Kominfo dipimpin oleh Kepala.
                            </p>
                            <p class="fs-6 fw-light text-justify" id="text-justify">
                            BPSDMP Kominfo mempunyai tugas melaksanakan pengembangan sumber daya manusia, penelitian dan pengembangan bidang komunikasi dan informatika di wilayah kerja. BPSDMP Kominfo menyelenggarakan fungsi :
                            </p>
                            <p class="fs-6 fw-light text-justify" id="text-justify">
                            1. pelaksanaan penyusunan rencana dan evaluasi program dan anggaran;<br>
                            2. penyiapan pelaksanaan dan fasilitasi pengembangan sumber daya manusia bidang komunikasi dan informatika;<br>
                            3. penyiapan pelaksanaan penelitian dan pengembangan bidang komunikasi dan informatika;<br>
                            4. penyiapan pelaksanaan publikasi hasil penelitian dan pengembangan bidang komunikasi dan informatika;<br>
                            5. penyiapan pelaksanaan penjaminan mutu dan pendayagunaan hasil penelitian dan pengembangan bidang komunikasi dan informatika; dan<br>
                            6. pelaksanaan urusan penyusunan rencana, program, evaluasi, laporan, dan kerja sama, serta urusan tata usaha, keuangan, kepegawaian, perlengkapan, dan rumah tangga, serta hubungan masyarakat.
                            </p>        
                        </div>
                </div>
        </section>
        <!-- Tentang Kami Akhir -->

        <!-- Hubungi Kami -->
        <section id="kontak" class="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md text-center">
                        <img src="img/logo BPSDMP.png" alt="Logo BPSDMP SURABAYA" width="100">
                        <h2 class="text-center mb-4"> Hubungi Kami </h2>
                        <ul class="list-group list-group-flush lead">
                            <li class="list-group item">
                                <span class="fw-bold"> Alamat : </span> Jl. Raya Ketajen No.36 Gedangan, Kabupaten Sidoarjo Jawa Timur 61254
                            </li>
                            <li class="list-group item">
                                <span class="fw-bold"> Telepon : </span> (031) 8011944
                            </li>
                            <li class="list-group item">
                                <span class="fw-bold"> Instagram : </span> @bpsdmp.kominfo.sby                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hubungi Kami Akhir -->

        <!-- Footer -->
        <footer class="p-1 bg-primary text-white text-center position-relative">
            <div class="container">
                <p class="lead">
                    <b>&copy;2023</b> BPSDMP SURABAYA
                </p>
            </div>
        </footer>
        <!-- Akhir Footer -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>