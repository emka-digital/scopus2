<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url() . 'theme/images/slider.jpg' ?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Bepikir Kreaftif &amp; Inovatif</h1>
                            <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/images/slider-2.jpg' ?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Guru Bekualitas Tinggi</h1>
                            <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Itulah kenapa kami mendatangkan guru-guru <br>terbaik dari berbagai penjuru.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('guru'); ?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/images/slider-3.jpg' ?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Proses Belajar Interatif</h1>
                            <h4>Kami membuat proses belajar mengajar menjadi lebih interatif.<br> dengan demikian siswa lebih menyukai <br>proses belajar.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('galeri'); ?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--END HEADER -->

<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome</h2>
                <p>Rsc adalah penyedia layanan jasa dibidang pendampingan penyusunan artikel ilmiah dan publikasi artikel ke journal terindeks scopus.
                    Pendampingan dilaksanakan secara online dan offline secara personal, kelompok dan institusi. Rumah Scopus berdiri pada 20 Februari 2019 yang berpusat di Yogyakarta.
                    Rsc hadir atas kegelisahan tentang publikasi journal terindeks scopus. Strategi utama Rsc menggabungkan teknologi, ilmu pengetahuan dan pengalaman dalam menyusun
                    artikel sesuai standar Internasional. </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url() . 'theme/images/welcome.png' ?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->

<!--=============================  FITUR =============================-->
<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/fiturHome.css' ?>">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
                        <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Workshop
                            <div class="pull-right badge"></div>
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                        <center><i class="fa fa-cubes" style="color:#16A085"></i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Webinar
                            <div class="pull-right badge" id="WrControls"></div>
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
                        <center><i class="fa fa-pencil-square-o" style="color:#d50f25"> </i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Private Online
                            <div class="pull-right badge" id="WrForms"></div>
                        </h4>
                    </div>

                </a>
            </div>
        </div>
        <br>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
                        <center><i class="fa fa-table" style="color:#3369e8"> </i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Private Offline
                            <div class="pull-right badge" id="WrGridSystem"></div>
                        </h4>
                    </div>

                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
                        <center><i class="fa fa-info-circle" style="color:#fabc09"> </i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Manuscript Preparation
                            <div class="pull-right badge" id="WrInformation"></div>
                        </h4>
                    </div>

                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color: rgba(121, 90, 71, 0.1)">
                        <center><i class="fa fa-bars" style="color:#795a47"> </i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Submission Preparation
                            <div class="pull-right badge" id="WrNavigation"></div>
                        </h4>
                    </div>

                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color: rgba(130, 93, 9, 0.1)">
                        <center><i class="fa fa-magic" style="color:#825d09"></i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Enhancement H-Index
                            <div class="pull-right badge" id="WrThemesIcons"></div>
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="wrimagecard wrimagecard-topimage">
                <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color: rgba(200, 60, 10, 0.1)">
                        <center><i class="fa fa-magic" style="color:#825d09"></i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4>Bengkel Scopus
                            <div class="pull-right badge" id="WrThemesIcons"></div>
                        </h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end fitur -->

<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="courses-img">
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="course-box-content">
                            <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->

<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="row">
                            <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/images/announcement-icon.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9">
                                <h3><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                <span><?php echo $row->tanggal; ?></span>
                                <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>

                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($agenda->result() as $row) : ?>
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                                    <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                <hr class="event_line">
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->

<!-- VIDEO YOUTUBE -->
<style>
    html,
    body1 {
        height: 100%
    }

    .container1 {
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 40px;

        justify-content: center;
        align-items: center;
    }

    .box {
        height: 100px;
        width: 100px;

    }
</style>
<div class="container1 row ">

    <iframe width="950" height="450" src="https://www.youtube.com/embed/5UN5E1MnpPE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_1.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_3.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files; ?></span> Download
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_4.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->

<!--============================= TESTIMONIAL =============================-->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Testimonial</h2>
            </div>
            <div class="col-md-12">
                <div class="single-item">
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">MSCHOOL benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan MSCHOOL dan menjadi siswa terbaik tahun 2018.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url() . 'theme/images/student-1.png' ?>" class="img-fluid" alt="#">
                            <p><span>Hernandez Alvaro</span>Siswa Terbaik 2018</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">MSCHOOL benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan MSCHOOL dan menjadi siswa terbaik tahun 2017. </p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url() . 'theme/images/student-2.png' ?>" class="img-fluid" alt="#">
                            <p><span>Elanoar Rigby</span>Siswa Terbaik 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END TESTIMONIAL -->
<!-- jQuery, Bootstrap JS. -->
<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
<!-- Plugins -->
<script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
<!-- Subscribe -->
<script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
<!-- Script JS -->
<script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>