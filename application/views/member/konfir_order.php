<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-D5bhbIKoHpoTznUD"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url() . 'theme/member/dist/img/user1-128x128.jpg' ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url() . 'theme/member/dist/img/user8-128x128.jpg' ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url() . 'theme/member/dist/img/user3-128x128.jpg' ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Konfrimasi Order</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('member/dasboard') ?>">Member</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('member/order') ?>">Order</a></li>
                <li class="breadcrumb-item active">Konfirmasi Order</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Timelime example  -->
          <div class="row">
            <div class="col-md-12">
              <!-- The time line -->
              <div class="row">
                <table class="table">
                  <form action="<?= base_url('member/order/order_now') ?>" method="POST">

                    <?php
                    $id_webinar = $this->uri->segment(4);
                    $webinar = $this->db->get_where('tbl_webinar', ['id' => $id_webinar])->row_array();
                    ?>
                    <tbody>
                      <tr>
                        <td>Order Code</td>
                        <td colspan="3">: <?= $kode_order = random_string('alnum', 5) ?></td>
                        <input type="hidden" name="kode" value="<?php echo $kode_order ?>">
                      </tr>
                      <tr>
                        <td>Order Date</td>
                        <td colspan="3">: <?= date('d F Y'); ?></td>
                        <input type="hidden" name="tgl" value="<?php echo date('d F Y'); ?>">
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td colspan="3">: <?= $user['nama'] ?></td>
                        <input type="hidden" name="nama" value="<?php echo $user['nama'] ?>">
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td colspan="2">: <?= $user['email'] ?></td>
                        <input type="hidden" name="email" value="<?php echo  $user['email'] ?>">
                      </tr>

                      <tr>
                        <td>Webinar</td>
                        <td colspan="2">: <?= $webinar['nama_webinar'] ?> </td>
                        <input type="hidden" name="nama_webinar" value="<?php echo $webinar['nama_webinar'] ?>">
                      </tr>
                      <tr>
                        <td>Event Date</td>
                        <td colspan="2">: <?= $webinar['tgl_pelaksanaan'] ?> </td>
                        <input type="hidden" name="tanggal_pelaksanaan" value="<?php echo $webinar['tgl_pelaksanaan'] ?>">
                      </tr>
                      <tr>
                        <td>Price</td>
                        <td colspan="2">: Rp.<?= $webinar['harga'] ?></td>
                        <input type="hidden" name="harga" value="<?php echo $webinar['harga'] ?>">
                    </tbody>


                </table>
                <input class="btn btn-primary" type="submit" value="Order Now!">
                <!--<button class="btn btn-primary" id="pay-button" ">Pay!</button>-->
                </form>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Penawaran Menarik</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12">
                          <h1 class="mb-4">Waktunya upgrade skill !</h1>
                          <img src="ebook.jpg" alt="ebook ci">
                          <h3 class="text-center mt-4">Hanya 45 ribu</h3>
                          <h3 class="text-center mt-4">Hub 021-85765041</h3>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Jangan Tampilkan Lagi</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Ya Saya Mau</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      </section> <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</body>
<button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
  <img style="width: 50px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bri.png' ?>" title="BANK BRI">
</button>
<button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
  <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/mandiri.png' ?>" title="BANK MANDIRI">
</button>
<button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
  <img style="width: 90px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bca.png' ?>" title="BANK BCA">
</button>
<button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
  <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bni.png' ?>" title="BANK BNI">
</button>
<button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
  <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/btpn.png' ?>" title="BANK BTPN">
</button>