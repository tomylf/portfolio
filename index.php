<?php

// Replace this with your own email address
$to = 'tom.lefevre06@gmail.com';

function url()
{
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if ($_POST) {

  $name = trim(stripslashes($_POST['name']));
  $email = trim(stripslashes($_POST['email']));
  // $subject = trim(stripslashes($_POST['subject']));
  $contact_message = trim(stripslashes($_POST['message']));


  // if ($subject == '') { $subject = "Contact Form Submission"; }

  // Set Message
  $message .= "Email from: " . $name . "<br />";
  $message .= "Email address: " . $email . "<br />";
  $message .= "Message: <br />";
  $message .= nl2br($contact_message);
  $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

  // Set From: header
  $from =  $name . " <" . $email . ">";

  // Email Headers
  $headers = "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  ini_set("sendmail_from", $to); // for windows server
  $mail = mail($to, $message, $headers);

  if ($mail) {
    echo "OK";
  } else {
    echo "Something went wrong. Please try again.";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/vendor/icomoon/style.css">
  <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" href="css/vendor/animate.min.css">
  <link rel="stylesheet" href="css/vendor/aos.css">
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">


  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

  <nav class="unslate_co--site-mobile-menu">
    <div class="close-wrap d-flex">
      <a href="#" class="d-flex ml-auto js-menu-toggle">
        <span class="close-label">Close</span>
        <div class="close-times">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </div>
      </a>
    </div>
    <div class="site-mobile-inner"></div>
  </nav>


  <div class="unslate_co--site-wrap">

    <div class="unslate_co--site-inner">


      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">

          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a href="#home-section" class="nav-link">Home</a>
                </li>
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#about-section" class="nav-link">À Propos</a></li>

              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Tomfolio<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#stats-section" class="nav-link">Stats</a></li>
                <li><a href="#testimonial-section" class="nav-link">Testimonial</a></li>

                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>

      <!-- END nav -->
      <video crossorigin="anonymous" playsinline="" preload="auto" muted="" loop="" tabindex="-1" autoplay="" src="https://video.wixstatic.com/video/c0bbc5_ea3fdc8d953b4dbcab20a021d2ef1389/720p/mp4/file.mp4" style="height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1;"></video>
      <div class="cover-v1 jarallax bg-light" id="home-section">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-8 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero">Développeur web</h1>
              <h2 class="subheading gsap-reveal-hero">“Le copier-coller a été programmé par des programmeurs pour des programmeurs.”</h2>
            </div>

          </div>
        </div>
      </div>


      <!-- END .cover-v1 -->


      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5" data-aos="fade-up">
            <h2 class="heading-h2 text-center divider">Portfolio</h2>

          </div>

          <div class="relative">
            <div class="loader-portfolio-wrap">
              <div class="loader-portfolio"></div>
            </div>
          </div>
          <div id="portfolio-single-holder"></div>

          <div class="portfolio-wrapper">

            <div id="posts" class="row gutter-isotope-item">
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/voiture-php.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="PHP">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>PHP</h3>
                      <p>Location, Vente de véhicules</p>
                    </div>
                  </div>
                  <img src="img2/voiture-php.png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>
              <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2 ">
                <a href="img2/Figma2.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Figma">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>E-Shop</h3>
                      <p>page de site e-commerce</p>
                    </div>
                  </div>
                  <img src="img2/canape-figma.png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/septime_maquette.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Septime">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>Html, CSS</h3>
                      <p>Page web Restaurant</p>
                    </div>
                  </div>
                  <img src="img2/septime_maquette2.jpg" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="img2/E-SHOP3.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="E-Shop">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>Html, CSS</h3>
                      <p>Vente de materiaux </p>
                    </div>
                  </div>
                  <img src="img2/E-SHOP.png" class="lazyload  img-fluid" alt="Images" />
                </a>

              </div>

              <!-- <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/E-SHOP3.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="InstaBugs">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>E-Shop</h3>
                        <p>page de site e-commerce</p>
                      </div>
                    </div>
                    <img src="img2/E-SHOP2.png" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div> -->

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/Frodon.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Frodon">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>Pixel Art</h3>
                      <p>Html, CSS</p>
                    </div>
                  </div>
                  <img src="img2/Frodon.png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/Voyages.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Voyage">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>Html,CSS</h3>
                      <p>page web, reservation</p>
                    </div>
                  </div>
                  <img src="img2/Voyages.png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/template with Bootstrap.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="Bootstrap" data-caption="InstaBugs">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>Bootstrap</h3>
                      <p>page web</p>
                    </div>
                  </div>
                  <img src="img2/template with Bootstrap.png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/Jurassic.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Jurassic">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>Bootstrap</h3>
                      <p>Page Web</p>
                    </div>
                  </div>
                  <img src="img2/jurassic2 (1).png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="img2/boutique-php.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="BackOffice">
                  <div class="overlay">
                    <span class="wrap-icon icon-photo2"></span>
                    <div class="portfolio-item-content">
                      <h3>PHP</h3>
                      <p>Page Backoffice</p>
                    </div>
                  </div>
                  <img src="img2/boutique-php.png" class="lazyload  img-fluid" alt="Images" />
                </a>
              </div>

              <!-- <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/portfolio/img_v_3.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Code Climate">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Code Climate</h3>
                        <p>web, illustration</p>
                      </div>
                    </div>
                    <img src="images/portfolio/img_v_3.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div> -->

            </div>

          </div>


        </div>
      </div>




      <div class="unslate_co--section" id="about-section">
        <div class="container">



          <div class="row mt-5 justify-content-between align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-up">
              <figure class="dotted-bg">
                <img src="images/profile.jpg" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="mb-4 heading-h3">À Propos de Tom</h3>
              <p>Jeune développeur, avec une grande soif d'apprentissage</p>
              <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

              <ul class="list-unstyled list-check d-block">
                <li class="d-block">Far far away, behind the word mountains</li>
                <li class="d-block">The countries Vokalia</li>
                <li class="d-block">Duden flows by their place</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="unslate_co--section section-counter bg-light" id="stats-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5" data-aos="fade-up">
            <h2 class="heading-h2 text-center divider">Stats</h2>

          </div>


          <div class="row pt-5">
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="1100">0</span>
                </span>
                <span class="counter-label">Heures de Formation</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="15">0</span>
                </span>
                <span class="counter-label">Projets réalisés</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="336">0</span>
                </span>
                <span class="counter-label">Heures de stages requis</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="8">0</span>
                </span>
                <span class="counter-label">Excellents formateurs</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END .counter -->


      <div class="site-section unslate_co--section" id="services-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5" data-aos="fade-up">
            <h2 class="heading-h2 text-center divider">Langages</h2>

          </div>

          <div class="row ">

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service d-flex h-100">
                <div class="service-number mr-4"><span><i class="fa-brands fa-html5"></i></span></div>
                <div class="service-about">
                  <h3>HTML / CSS</h3>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service d-flex h-100">
                <div class="service-number mr-4"><span><i class="fa-brands fa-bootstrap"></i></span></div>
                <div class="service-about">
                  <h3>BOOTSTRAP</h3>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service d-flex h-100">
                <div class="service-number mr-4"><span><i class="fa-brands fa-square-js"></i></span></div>
                <div class="service-about">
                  <h3>JAVASCRIPT</h3>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service d-flex h-100">
                <div class="service-number mr-4"><span><i id="btsp" class="fa-brands fa-php"></i></span></div>
                <div class="service-about">
                  <h3>PHP</h3>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service d-flex h-100">
                <div class="service-number mr-4"><span><i class="fa-brands fa-wordpress"></i></span></div>
                <div class="service-about">
                  <h3>WORDPRESS</h3>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service d-flex h-100">
                <div class="service-number mr-4"><span><i class="fa-brands fa-symfony"></i></span></div>
                <div class="service-about">
                  <h3>SYMFONY</h3>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>




      <!-- <div class="unslate_co--section bg-light" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5"  data-aos="fade-up">
            <h2 class="heading-h2 text-center divider">Testimonials</h2>
            
          </div>
        </div>

        <div class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <div class="testimonial-author-info">
                  <img src="images/person_1.jpg" alt="Image">
                  <h3>James Smith</h3>
                  <span class="d-block position">Product Designer @facebook</span>
                </div>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>
              
              

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <div class="testimonial-author-info">
                  <img src="images/person_2.jpg" alt="Image">
                  <h3>Bob Allen</h3>
                  <span class="d-block position">Product Designer @Shopify</span>
                </div>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>
              
              

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <div class="testimonial-author-info">
                  <img src="images/person_6.jpg" alt="Image">
                  <h3>Bruce Miller</h3>
                  <span class="d-block position">Product Designer @Twitter</span>
                </div>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>
              
              

            </div>
          </div>
        </div>

      </div>
      <!-- END testimonial --> -->



      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5" data-aos="fade-up">
            <h2 class="heading-h2 text-center divider">Me Contacter</h2>
          </div>


          <div class="row justify-content-between">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <form method="post" class="form-outline-style-v1" id="contactForm">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group">
                    <label for="name">Nom</label>
                    <input name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="col-lg-12 form-group">
                    <label for="message">Ecrivez votre message...</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12 d-flex align-items-center">
                    <input type="submit" class="btn btn-primary mr-3" value="Envoyé">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div>
              <div id="form-message-success">
                Votre message à bien été envoyé, Merci!
              </div>

            </div>

            <div class="col-md-4" data-aos-delay="200">
              <div class="contact-info-v1">
                <div class="d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="#" class="contact-info-val">tom.lefevre06@gmail.com</a>
                </div>
                <div class="d-block">
                  <span class="d-block contact-info-label">Téléphone</span>
                  <a href="#" class="contact-info-val">06 68 54 87 02</a>
                </div>
                <div class="d-block">
                  <span class="d-block contact-info-label">Addresse</span>
                  <address class="contact-info-val">Poissy <br> FRANCE</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> <!-- END .unslate_co-site-inner -->

    <footer class="unslate_co--footer unslate_co--section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">

            <div class="footer-site-logo"><a href="#">Tom LE FEVRE<span>.</span></a></div>

            <ul class="list-unstyled social-icons light">
              <li><a href="#"><span><iconify-icon icon="file-icons:microsoft-outlook"></iconify-icon></span></a></li>
              <li><a href="https://github.com/tomylf"><span class="icon-github"></span></a></li>
              <li><a href="https://www.linkedin.com/in/tom-le-fevre-5a336a227/"><span class="icon-linkedin"></span></a></li>
              <li><a href="img2/[Taille originale] Copie de Bleu Lignes Simple CV.png"><span><iconify-icon icon="academicons:cv"></iconify-icon></span></a></li>
            </ul>

            <p class="site-copyright"><small>Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script>. All Rights Reserved. &mdash; Designed by Tom</a> </small></p>

          </div>
        </div>
      </div>
    </footer>


  </div>


  <!-- Loader -->
  <div id="unslate_co--overlayer"></div>
  <div class="site-loader-wrap">
    <div class="site-loader"></div>
  </div>
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
  <script src="js/scripts-dist.js"></script>
  <script src="js/main.js"></script>



</body>

</html>