<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                    </div>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                    <div><?php echo $this->session->flashdata('msg'); ?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Unisco university
                                        <br> Albany, NY
                                        <br> USA. 11001</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h6>Email</h6>
                                    <p>info@unisco.edu
                                        <br> admin@unisco.edu
                                    </p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h6>Phone</h6>
                                    <p>+91 555 668 986</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="contact-center">OR</p>
            </div>
        </div>
    </div>
</section>
<!--//END  ABOUT IMAGE -->

<!-- MAPS -->
<style>
    html,
    body1 {
        height: 100%
    }

    .container1 {
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 40px;
        margin-top: 40px;
        justify-content: center;
        align-items: center;
    }

    .box {
        height: 100px;
        width: 100px;

    }
</style>
<div class="container1 row ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.340076630157!2d110.35291753646469!3d-7.646531319886422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f6ce402cb15%3A0x6139423d4b76fbf8!2sRumah%20Scopus!5e0!3m2!1sid!2sid!4v1607779122453!5m2!1sid!2sid" width="950" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>