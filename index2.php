<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Dennis De Leon StarWars Website</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style1.css">

  <style>
    .navbar .navbar-nav .nav-link:not(.btn) i.fa{
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px;
    }
  </style>

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" rel="tooltip" title="Designed by Dennis De Leon" data-placement="bottom" target="_blank">
                    DE LEON IT & Co. Website
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            
           <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                <li class="nav-item">     
                 <a class="nav-link" href="javascript:void(0)" onclick="scrollToHome()">
                 <i class="now-ui-icons users_single-02"></i>
                  <p>Home</p>
                    </a>
                  </li>
                <li class="nav-item">     
                 <a class="nav-link" href="javascript:void(0)" onclick="scrollToCharacters()">
                <i class="now-ui-icons business_briefcase-24"></i>
                  <p>Characters</p>
                    </a>
                  </li>
                <li class="nav-item">     
                   <a class="nav-link" href="javascript:void(0)" onclick="scrollToScenes()">
                  <p>Scenes</p>
                    </a>
                  </li>
                 <li class="nav-item">     
                   <a class="nav-link" href="javascript:void(0)" onclick="scrollToMilleniumFalcon()">
                  <p>Millenium Falcon</p>
                    </a>
                  </li>
                  <li class="nav-item">     
                   <a class="nav-link" href="javascript:void(0)" onclick="scrollToContact()">
                  <p>Contact</p>
                    </a>
                  </li>
                  <!--  <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./img/starwarsIX.jpg')
            /*('https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/img/header.jpg');">
            </div>
        </div>
     </div>
     <div class="main">
     <div class="section" id="carousel">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                </ol>
                <h1><strong>The Characters</strong></h1>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block" src="img/rey.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Rey</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="img/fin.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Finn</strong></h2>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="img/kyloren.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Kyloren</strong></h2>
                    </div>
                  </div>
                    <div class="carousel-item">
                    <img class="d-block" src="img/hansolo.jpg" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Han Solo</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="img/princesleia.jpg" alt="Fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Princes Leia</strong></h2>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img class="d-block" src="img/luke.jpg" alt="Sixth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Luke</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="img/poe.jpg" alt="Seventh slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Poe</strong></h2>
                    </div>
                  </div>

                <div class="carousel-item">
                    <img class="d-block" src="img/rose.jpg" alt="Eight slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Rose</strong></h2>
                    </div>
                  </div>
                
                  
                   <div class="carousel-item">
                    <img class="d-block" src="img/masteryoda.jpg" alt="Ninth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Master Yoda</strong></h2>
                    </div>
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block" src="img/chewy.jpg" alt="Tenth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Chewbacca</strong></h2>
                    </div>
                  </div>
                
                <div class="carousel-item">
                    <img class="d-block" src="img/c3po.jpg" alt="Eleventh slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>C3PO</strong></h2>
                    </div>
                  </div>
                
                <div class="carousel-item">
                    <img class="d-block" src="img/bb8.jpg" alt="Twelveth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>BB8</strong></h2>
                    </div>
                  </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/snoke.jpg" alt="Thirteenth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>Snoke</strong></h2>
                    </div>
                  </div>
                 <div class="carousel-item">
                    <img class="d-block" src="img/general.jpg" alt="Fourteenth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><strong>General Hux</strong></h2>
                    </div>
                  </div>

                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
              </div>
            </div>
     
                  
                
               
              </div>
          </div>
      </div>
  </div>
   <div class="container">
      <div class="h1-star" >
    <h1><strong>The Scenes</strong></h1>
      </div>	
    <div class="row">
    <div class="col-sm-12 portfolio-item">
  <div class="flex-container">
  <div class="flex-item"><img class="img-fluid" src="img/forceawakensreyfin.jpg" alt="">
    <p style="text-align: center;color: yellow;background-color: black;">Episode VII</p>
    </div>
  <div class="flex-item"><img class="img-fluid" src="img/lastjedilukekyle.jpg" alt="">
    <p style="text-align: center;color: yellow;background-color: black;">Episode VIII</p>
   </div>
  </div>
  <div class="flex-container">
  <div class="flex-item1"><img class="img-fluid" src="img/forceawakens.jpg" alt="">
    <p style="text-align: center;color: yellow;background-color: black;">Episode VII</p>
  </div>
</div>
<div class="flex-container">
  
  <div class="flex-item"><img class="img-fluid" src="img/thelastjedi.jpg" alt="">
    <p style="text-align: center;color: yellow;background-color: black;">Episode VIII</p>
  </div>
  <div class="flex-item"><img class="img-fluid" src="img/lastjedifinrose.jpg" alt="">
   <p style="text-align: center;color: yellow;background-color: black;">Episode VIII</p>
  </div>
  </div>
  <div class="h2-star">
  	<h1><strong>Millenium Falcon</strong></h1>
  </div>
  <div class="flex-container">
  <div class="flex-item2"><img class="img-fluid" src="img/milleniumfalcon.jpg" alt=""></div>
</div>
</div>
</div>
</div>
  <div class="container">
  <div class="h4-star">
    <h1><strong>Contact</strong></h1>
  </div>
  <div class="row">
  <div class="col-sm-12 portfolio-item"> 
<div class="flex-container">
  <div class="flex-item">
<ul style="list-style-type: none">
  <li><a href="https://facebook.com"><i class="fa fa-facebook-square"></i> facebook</a></li>
  <li><a href="https://twitter.com"><i class="fa fa-twitter"> twitter</i></a></li>
  <li><a href="https://instagram.com"><i class="fa fa-instagram"></i> instagram</a></li>

   <!-- <a href="index.php" class="btn btn-common">Comment</i></a>-->
   <a href="index.php"  class="btn btn-info  btn-sm">Comment</button></a>
  </ul>
 </div>




 <!-- <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s" style="color: blue;"><strong>Meet Our Team</strong></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
             Team Item Starts 
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="img/team-01.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Louie Roncesvalles</a></h3>
                  <p><b>Front-End Developer</b></p>
                </div>
                <p><b>Proven skills in the front-end and design.</b></p> 
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
           </div>
         </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            Team Item Starts 
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="img/team-02.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Dennis De Leon</a></h3>
                  <p><b>Full Stack Web Developer.</b></p>
                </div>
                <p><b>A very efficient Front-End and Back-End Developer.</b></p>
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
             Team Item Ends 
          </div>
         
             Team Item Ends
          </div>
        </div>
      </div>
    </section>-->



<!--<div class="flex-item">-->
  <div class="map-responsive">
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3857.7170693514736!2d121.06378459910049!3d14.784959939634641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBlk.%209%2C%20Lot%208%2C%20Ph.%203%2C%20Dela%20Costa%20Homes%203%2C%20San%20Jose%20Del%20Monte%2C%20Bulacan!5e0!3m2!1sen!2sph!4v1658842674354!5m2!1sen!2sph" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

  <!--  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Tungko%2C%20San%20Jose%20Del%20Monte%2C%20Bulacan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{display:block;margin-left:auto;margin-right:auto;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div>-->
            


      
          
<footer class="footer" data-background-color="black">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                Services
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Contact
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, DE LEON IT.
           <a href="https://www.creative-tim.com" target="_blank"> Made possible by Engr. Dennis D. De Leon.
   </a>.
        </div>
      </div>
    </footer>
  




   
  


        


<!--   Core JS Files   -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/popper.min.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/bootstrap.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/nouislider.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-datepicker.js"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/now-ui-kit.js"></script>
<script>
  $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToHome() {

      if ($('.wrapper').length != 0) {
        $("html, body").animate({
          scrollTop: $('.wrapper').offset().top
        }, 1000);
      }
    }

</script>

<script>
  $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });
    function scrollToCharacters() {

      if ($('.carousel').length != 0) {
        $("html, body").animate({
          scrollTop: $('.carousel').offset().top
        }, 1000);
      }
    }
</script>

<script>
  $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });
    function scrollToScenes() {

      if ($('.h1-star').length != 0) {
        $("html, body").animate({
          scrollTop: $('.h1-star').offset().top
        }, 1000);
      }
    }
</script>
<script>
  $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });
    function scrollToMilleniumFalcon() {

      if ($('.h2-star').length != 0) {
        $("html, body").animate({
          scrollTop: $('.h2-star').offset().top
        }, 1000);
      }
    }
</script>
<script>
  $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });
    function scrollToContact() {

      if ($('.h4-star').length != 0) {
        $("html, body").animate({
          scrollTop: $('.h4-star').offset().top
        }, 1000);
      }
    }
</script>
</body>
</html>
