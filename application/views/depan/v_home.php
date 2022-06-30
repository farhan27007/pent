<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img
                                class="img img-responsive" width="300px;"
                                src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Dosen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- section head-thumb -->
    <section>
        <div class="container-fluid head-thumb">
            <div class="col-12">
                <h1 class="text-center text-white font-weight-bold">Manajemen Informatika</h1>
                <p class="text-center text-white mt-5 mb-5 ppl">
                    program studi yang menghasilkan sumber daya manusia bermutu, inovatif dan berdaya bersaing<br> dalam
                    ilmu pengetahuan dan teknologi terapan bidang sistem informasi.
                </p>
            </div>
        </div>
        <div class="container img-marg pt-5">
            <iframe class="w-100" height="500" src="https://www.youtube.com/embed/XHvp1wymggk"> </iframe>
        </div>
    </section>
    <!-- section head-thumb -->
    <!--============================= HEADER =============================-->
  
    <!-- MOU  -->
    <section>
        <div class="container mt-5">
            <center>
                <div class="col-12">
                    <div class="row pt-3">

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou1.png'?>"></p>
                        </div>

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou2.png'?>"></p>
                        </div>

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou3.png'?>"></p>
                        </div>

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou4.png'?>"></p>
                        </div>

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou5.png'?>"></p>
                        </div>

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou6.png'?>"></p>
                        </div>

                        <div class="col mt-4">
                            <p><img src="<?php echo base_url().'theme/images/logo-mou7.png'?>"></p>
                        </div>

                    </div>
                </div>
            </center>
        </div>
    </section>
    <!-- MOU  -->

    <!--//END HEADER -->

    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2 mb-5">
        <div class="container">
            <div class="col-12">
                <p class="text-center grey-text">
                    Program Studi (PS) Manajemen Informatika merupakan salah satu program studi jenjang Diploma Tiga
                    (DIII) yang berdiri dibawah naungan Jurusan Ekonomi dan Bisnis Politeknik Negeri Lampung (Polinela).
                    Program Studi D3 Manajemen Informatika didirikan dan mulai beroperasi menyelenggarakan kegiatan
                    akademik dan tridarma perguruan tinggi sejak tahun 2006, berdasarkan Surat Keputusan Dirjen Dikti
                    nomor 2691/D/T/2006.
                </p>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->

    <!--============================= Berita =============================-->

    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h2 class="font-weight-bold">Berita Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row) :?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap p-3">
                            <img style="border-radius:15px;"
                                src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid"
                                alt="courses-img">
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                            <h4 class="text-center font-weight-bold" style="line-height:1.6;">
                                <?php echo $row->tulisan_judul;?></h4>
                        </a>

                    </div>
                </div>
                <?php endforeach;?>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">Baca
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <!--============================= Berita =============================-->

    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($agenda->result() as $row):?>
                            <div class="pt-4">
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                        <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a>
                                    </h3>
                                    <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                                    <!-- <hr class="event_line"> -->
                                </div>
                            </div>

                            <?php endforeach;?>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row) :?>
                        <div class="row">
                            <div class="col-sm-3"> <img
                                    src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid"
                                    alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9">
                                <h3><a
                                        href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a>
                                </h3>
                                <span><?php echo $row->tanggal;?></span>
                                <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sitemap">
                        <h3 class="font-weight-bold">Menu Utama</h3>
                        <ul class="text-white">
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">Tentang</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sitemap">
                        <h3 class="font-weight-bold">Akademik</h3>
                        <ul>
                            <li><a href="<?php echo site_url('guru');?>">Dosen</a></li>
                            <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                            <li><a href="<?php echo site_url('download');?>">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <h3 class="font-weight-bold">Hubungi Kami</h3>
                        <p class="text-white text-justify"><b>A. </b>Kantor. Gedung PPA, Lantai 1, Kampus Politeknik Negeri Lampung, Bandar Lampung, Lampung, Indonesia.</p>
                        <p class="text-white"><b>E.</b> mi@polinela.ac.id
                            <br> <b>P.</b> +62 (721) 703-995</p>
                            <br>
                        <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>