<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kontak</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/logo-dark.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
  <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2">
				<img class="img img-responsive" width="100px;" height="100px"  src="<?php echo base_url().'theme/images/logo-upr.png'?>">				
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
				<h2 align="center">SARANA KREATIFITAS TEKNOLOGI INFORMASI</h2>
                </div>
				<div class="col-xs-2 col-sm-2 col-md-2">
				<img class="img img-responsive" width="100px;" height="100px"  src="<?php echo base_url().'theme/images/ukm-sakti.jpg'?>">				
				</div>
            </div>
        </div>
    </div>

    <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <div class="col-md-2">
                        <h3>UKM SAKTI</h3></a>
            </div>
                        <!--<a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="100px;" height="100px"  src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>-->
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Visimisi</a>
                                </li>
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a>
                                </li>
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Galeri</a>
                                </li>
                                <li class="dropdown">
								<a class="nav-link" href="#">Klub</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url('advokat');?>">Multimedia</a></li>
                                    <li><a href="<?php echo site_url('robo');?>">Robotik</a></li>
                                    <li><a href="<?php echo site_url('program');?>">Programming</a></li>
								</ul>
							    </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Kontak Kami</a>
                                </li>
                             </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->
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
                                <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
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
                                    <div><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result2 -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p>Jalan Hendrik Timang
                                        <br> Palangka Raya
                                        <br> Kalimantan Tengah</p>
                                    </div>
                                    <br>
                                  
                                    
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
    <!--============================= FOOTER =============================-->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-upr.png'?>" width="120px" height="120px" class="img-fluid" alt="footer_logo">
                    </a>
                     <p><?php echo date('Y');?> © copyright by UKM SAKTI Palangka Raya</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Beranda</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Berita </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Galeri</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                            <li><a href="<?php echo site_url('advokat');?>">Klub</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Palangka Raya Kalimantan Tengah, Jalan Hendrik Timang </p>
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
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>
