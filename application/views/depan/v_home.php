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
                    <img style="width: 380px; height:500px;" class="d-block" src="<?php echo base_url() . 'theme/images/berfikir.jpg' ?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1 style="color:orangered">Simple &amp; Praktis</h1>
                            <h4>Training menggunakan metode learning by doing<br> menggunakan cara-cara praktis dan simple</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width: 380px; height:500px;" class="d-block" src="<?php echo base_url() . 'theme/images/slider2.jpeg' ?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Trainer Berkomitmen Tinggi</h1>
                            <h4>Memiliki pengalaman terbaik dalam proses penulisan artikel terindeks Scopus</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width: 380px; height:500px;" class="d-block" src="<?php echo base_url() . 'theme/images/learn.jpg' ?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Learning by Objective</h1>
                            <h4>Training memliki capaian akhir yang jelas dan terukur.<br> Setiap sesi pertemuan peserta dipacu untuk mencapai target yang jelas</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width: 380px; height:500px;" class="d-block" src="<?php echo base_url() . 'theme/images/teknologi.jpg' ?>" alt="Fourth slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Kecepatan dan Digital Tools</h1>
                            <h4>Mengacu pada norma milenial yaitu speed.<br> Membiasakan penggunaan alat-alat digital </h4>
                           
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
                <h2>Selamat Datang</h2>
                <p>Rumah Scopus (RSc) adalah penyedia layanan jasa di bidang pendampingan penyusunan artikel ilmiah dan publikasi ke jurnal terindeks Scopus.
                    Pendampingan dilaksanakan secara online dan offline secara personal dan kelompok atau institusi. Rumah Scopus berdiri pada 20 Februari 2019 yang berpusat di Yogyakarta.
                    RSc hadir atas kegelisahan tentang publikasi jurnal terindeks Scopus. Strategi utama RSc menggabungkan teknologi, ilmu pengetahuan dan pengalaman dalam menyusun
                    artikel sesuai standar Internasional. </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url() . 'theme/images/bapak1.jpg' ?>" class="img-fluid about-img" alt="#">
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