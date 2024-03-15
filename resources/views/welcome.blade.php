<!DOCTYPE html>
<html lang="en">
<head>

     <title>Mudi Tour</title>
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Mudi</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
                         <li><a href="#blog" class="smoothScroll">Wisata</a></li>
                         <li><a href="#work" class="smoothScroll">Penawaran</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li class="section-btn"><a href="{{route('home')}}">Sign in / Join</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>Penat, Stress, Jenuh? MudiTour Solusinya</h1>
                              <a href="{{route('reservasi.create')}}" class="btn section-btn smoothScroll">Buat Reservasi</a>
                              <span>
                                  Kunjungi Website kami
                                   <small>Servis 24 jam</small>
                              </span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/0NMIZ-PTt8k" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Tentang kami</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p>
                                   Mudi Travel adalah agen perjalanan yang menyediakan pelayanan wisata dengan paket liburan menarik, termasuk transportasi, akomodasi, panduan wisata, tiket pesawat, dan pengalaman unik dalam menjelajahi destinasi wisata populer, seperti wisata budaya, petualangan alam, sejarah, kuliner, dan pantai, serta melayani kebutuhan liburan keluarga,</p>

                              <p>dan aktivitas khusus seperti pendakian gunung, tur kelompok, atau liburan solo, dengan memberikan jasa pemandu wisata yang berpengalaman untuk menjelajahi keindahan alam, objek wisata unik, dan pesona budaya serta tradisi lokal</p>
                              </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="about-info skill-thumb">

                              <strong>Pelayanan Admin</strong>
                                   <span class="pull-right">85%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                              <strong>Jenis Paket</strong>
                                   <span class="pull-right">90%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                        </div>

                              <strong>Harga</strong>
                                   <span class="pull-right">60%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>

                              <strong>Penginapan</strong>
                                   <span class="pull-right">Bintang 5</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                        </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Penawaran Wisata</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <img src="images/blog-image1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-map"></i> Labuan Bajo</small>
                                   <h3>Keindahan Tiada Duanya Di Labuan Bajo</h3>
                                   <p>
                                        Labuan Bajo, kota kecil di Pulau Flores, menawarkan panorama surga dengan pantai berpasir putih dan keindahan alam bawah laut yang menakjubkan.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <img src="images/blog-image2.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-map"> Gunung Bromo</i></small>
                                   <h3>Pemandangan Memukau Diatas bromo</a></h3>
                                   <p>Pemandangan di atas Gunung Bromo menghadirkan keindahan alam yang memukau, dengan lanskap yang spektakuler, gunung berapi, dan langit yang mempesona.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <img src="images/blog-image3.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-map"></i>Raja Ampat</small>
                                   <h3>Melepaskan Penat di Raja Ampat</a></h3>
                                   <p>Lepaskan penatmu di Raja Ampat, tempat di mana keindahan alam tersembunyi dan kehangatan pulau tropis menyegarkan jiwa.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <img src="images/blog-image4.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-map"></i>Puncak Bogor</small>
                                   <h3>Merasakan Indahnya Menghirup Udara Segar di Puncak Bogor</a></h3>
                                   <p>Nikmati segarnya udara di Puncak Bogor, tempat yang menawarkan udara sejuk, pemandangan alam yang memesona, dan ketenangan yang menyegarkan.</p>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- WORK -->
     <section id="work" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Penawaran Kami</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image1.jpg" class="image-popup">
                                   <img src="images/work-image1.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Admin 24/7</h3>
                                        <small>Kualitas Layanan</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image2.jpg" class="image-popup">
                                   <img src="images/work-image2.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Berbagai Jenis Wisata</h3>
                                        <small>Banyak Pilihan</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image3.jpg" class="image-popup">
                                   <img src="images/work-image3.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Berbagai Macam Penginapan</h3>
                                        <small>Paket Lengkap Mantap<small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image4.jpg" class="image-popup">
                                   <img src="images/work-image4.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Bintang 5</h3>
                                        <small>Mantap</small>
                                   </div>
                              </a>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Mudi Tour</h2>
                              <p>Suatu perusahaan yang bergerak dibidang pariwisata</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Company</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Tentang Kami</a></li>
                                   <li><a href="#">Bergabung Dengan Kami</a></li>
                                   <li><a href="#">Jadi Partner Kami</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Services</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Travel</a></li>
                                   <li><a href="#">Accomodation</a></li>
                                   <li><a href="#">Support</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Find Us</h2>
                              <p>123 Grand Rama IX, <br> Krung Thep Maha Nakhon 10400</p>
                         </div>
                    </div>                    

                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-5">
                                   <div class="copyright-text"> 
                                        <p>Copyright &copy; 2023 Mudi Tour</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact"> 
                                        <p>Call us <span>(+66) 010-020-0340</span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Hydro Co</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                  <form action="#" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                       <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>