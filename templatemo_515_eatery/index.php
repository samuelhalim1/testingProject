<!DOCTYPE html>
<html lang="en">
<head>

     <title>Tampil Berita</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

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
                    <a href="#home" class="navbar-brand"></a>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#team" class="smoothScroll">How it Works</a></li>
                         <li><a href="#menu" class="smoothScroll">Our Clients</a></li>
                         <li><a href="#networks" class="smoothScroll">Our Networks</a></li>
                         <li><a href="#footer" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section class="tm-banner" data-stellar-background-ratio="0.5" id="home" >
          <div class="tm-container-outer tm-banner-bg">
              <div class="container" style="padding-bottom: 100px">
                  <div class="row tm-banner-row tm-banner-row-header">
                      <div class="col-xs-12">
                          <div class="tm-banner-header">
                              <h1 class="text-uppercase tm-banner-title">We help you
                                   dominate the world
                                   with news</h1>
                              <img src="images/dots-3.png" alt="Dots">
                              <p class="tm-banner-subtitle" style="color: white">The first performance based media relation platform in Indonesia</p>
                              <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>   
                          </div>    
                      </div>
                  </div>
                  <div class="row tm-banner-row" id="tm-section-search">
                      <form id="form-form" class="center-block tm-search-form tm-section-pad-2">
                        <legend class="text-center header">
                          <h4 class="wv-heading--title" style="color: #ffffff">
                              Share Your Press Release
                          </h4>
                        </legend>
                          <div class="form-row tm-search-form-row">
                               <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="name">Name</label>
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Your name" required="true">
                              </div>
                              <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="institution">Institution</label>
                                  <input name="institution" type="text" class="form-control" id="institution" placeholder="Your institution" required="true">
                              </div>
                              <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="phone">Phone Number</label>
                                  <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone Number" required="true">
                              </div>
                              <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="email">Email</label>
                                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="true">
                              </div>
                              <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="inputCheckOut">Upload Press Release</label>
                                  <br>
                                  <button class="addFile btn btn-primary mb-2">Add File</button>
                                  <input type="file" id="docpicker" style="display: none" 
                                  accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                                  <p class="nameFile"></p>
                              </div>
                              <div id="photoFiles" class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="inputCheckOut">Upload Photos for Release</label>
                                  <input type="file" id="file-photos" name="avatar" accept="image/png, image/jpeg" style="display: none;" multiple="true" required>
                                  <br>
                                  <button class="addPhotos btn btn-primary mb-2">Add Photos</button>
                                  <div class="row" id="photos-row">
                                    <div id="img-wrap" class="img-wrapper col-md-3 col-sm-3" style="display: none;">
                                        <span class="close">&times;</span>
                                        <img src="#" data-id="123" class="photo" width=100 height=100>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                  <label for="inputCheckOut">Choose Media</label>
                                  <br>
                                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#largeModal">Choose Media</button>
                                  <p class="countMedia"></p>
                              </div>
                              <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1 submit-section">
                                  <center>
                                  <button type="submit" class="btn tm-btn tm-btn-search submit-section-button text-uppercase" id="btnSubmit">Submit &amp; Pay</button>
                                  </center>
                              </div>
                          </div>                              
                      </form>                             

                  </div>
                  <div class="tm-banner-overlay"></div>
              </div>
          </div>              
      </section>

     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>How it Works?</h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/our-work/ilustrasi1.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Duis vel lacus id magna mattis vehicula</h4> 
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/our-work/ilustrasi2.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Cras suscipit neque quis odio feugiat</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-instagram"></a></li>
                                                  <li><a href="#" class="fa fa-flickr"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/our-work/ilustrasi3.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Etiam auctor enim tristique faucibus</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-github"></a></li>
                                                  <li><a href="#" class="fa fa-google"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <img src="images/our-work/ilustrasi4.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Etiam auctor enim tristique faucibus</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-github"></a></li>
                                                  <li><a href="#" class="fa fa-google"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Clients</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <img src="images/our-client/client 1.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <img src="images/our-client/client 2.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <img src="images/our-client/client 3.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.3s">
                                   <img src="images/our-client/client 4.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.3s">
                                   <img src="images/our-client/client 5.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.3s">
                                   <img src="images/our-client/client 6.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.4s">
                                   <img src="images/our-client/client 7.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.4s">
                                   <img src="images/our-client/client 8.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.4s">
                                   <img src="images/our-client/client 9.png" class="img-responsive" alt="">
                         </div>
                    </div>


                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.5s">
                                   <img src="images/our-client/client 10.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.5s">
                                   <img src="images/our-client/client 11.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.5s">
                                   <img src="images/our-client/client 12.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.6s">
                                   <img src="images/our-client/client 13.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.6s">
                                   <img src="images/our-client/client 14.png" class="img-responsive" alt="">
                         </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb wow fadeInUp" data-wow-delay="0.6s">
                                   <img src="images/our-client/client 15.png" class="img-responsive" alt="">
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section id="networks" class="slider wow fadeInUp" data-stellar-background-ratio="0.5">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Networks</h2>
                         </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                <div class="row" style="margin-left: 10px; margin-right: 10px">
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 1.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 2.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 3.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 4.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 5.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 6.png" style="width:100%; height:100%"></div>
                                </div>
                              </div>
     
                              <div class="item item-second">
                                <div class="row" style="margin-left: 10px; margin-right: 10px">
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 7.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 8.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 9.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 10.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 11.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 12.png" style="width:100%; height:100%"></div>
                                </div>
                              </div>
     
                              <div class="item item-third">
                                <div class="row" style="margin-left: 10px; margin-right: 10px">
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 13.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 14.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 15.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 16.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 17.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 18.png" style="width:100%; height:100%"></div>
                                </div>
                              </div>

                              <div class="item item-fourth">
                                <div class="row" style="margin-left: 10px; margin-right: 10px">
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 19.png" style="width:100%; height:100%"></div>
                                  <div class="col-xs-6 col-md-2" style="margin-top: 5%"><img src="images/our-network/network 20.png" style="width:100%; height:100%"></div>
                                </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Contact us</h2>
                              </div>
                               <div style="width: 60%">
                                   <img src="images/logo/white-logo.png" class="img-responsive wow fadeInUp" data-wow-delay="0.4s" alt="">
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <div>
                                        <strong>Monday to Friday</strong>
                                        <p>7:00 AM - 9:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday - Sunday</strong>
                                        <p>11:00 AM - 10:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="far fa-envelope"></a></li>
                              <li><a href="http://instagram.com/_u/tampilberita/" class="fab fa-instagram"></a></li>
                              <li><a href="#" class="fab fa-whatsapp"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                          <br>
                          <br>
                          <br>
                              <p><br>Copyright &copy; 2020 <br>Tampil Berita 
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <div id="largeModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form class="media-list">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
              <h4 id="slideInfoTitle" class="modal-title">Our Media</h4>
            </div>
            <div id="slideInfoBody" class="modal-body">

                    <div class="row row-no-padding" style="margin-left: 10px; margin-right: 10px">
                      
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 1.png" name="Viva" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 2.png" name="Republika" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 3.png" name="Kumparan" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 4.png" name="InvestorDaily" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 5.png" name="Sindonews" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 6.png" name="Tempo.co" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 7.png" name="Warta Ekonomi" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 8.png" name="Okezone" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 9.png" name="Tribunnews" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 10.png" name="Berita Satu" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 11.png" name="Media Indonesia" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 12.png" name="Indopos" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 13.png" name="Akurat" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 14.png" name="Liputan 6" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 15.png" name="SWA" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 16.png" name="Marketing" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 17.png" name="Jawa Pos" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 18.png" name="Jitunews" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 19.png" name="Suara Karya" style="width:100%; height:100%" class="selectable"></div>
                  <div class="col-xs-2 col-md-2"><img src="images/our-network/network 20.png" name="Bisnis.com" style="width:100%; height:100%" class="selectable"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="save-media" type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/imgCheckbox.js"></script>
     <script src="https://kit.fontawesome.com/738f3f2345.js" crossorigin="anonymous"></script>
     <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.js"></script>
     
</body>
</html>