<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/PPIcon.png">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/webp.js"></script>
    <title>Passportfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Prosto One' rel='stylesheet'>
  </head>
  <body>
    <script>
      //See if browsers support web
      Modernizr.on('webp', function (result) {
        if (result) {
          // supported
        } else {
          // not-supported
        }
      });
    </script>

    <div class="TreeWater">
      <div class="Awesomeness">
        <h1>Hi I'm Alexis</h1>
        <h3>Join me on my journey</h3>
        <a href="#Contact">Let's get in touch</a>
      </div>
      </div>

      <nav id="navbar">
      <img src="images/LogoPP.png" alt="Logo" id="Logo" onclick="window.location='../Passportfolio.html'">

            <a class="Ul" id="a1" href="#Passport">My works</a>
            <a class="Ul" id="a2" href="#Aboutt">Skills</a>
            <a class="Ul" id="a3" href="#Productss">Products</a>
            <a class="Ul" id="a4" href="#Contact">Contact</a>

      <div class="popup" id="popup-1">
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Select a language</h1><br><br>
          <a class="a" href="../Passportfolio.php"> English</a><br><br><br>
          <a class="a" href="../Passportfolio_fr.php"> Français</a><br><br><br>
          <a class="a" href="../Passportfolio_ne.php"> Nederlands</a><br><br><br>
          <a class="a" href="../Passportfolio_de.php"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" class="PopPop" onclick="togglePopup()">Language</button>
      <script>
      $(document).scroll(function() {
var y = $(this).scrollTop();
if (y > 500) {
  $('.PopPop').fadeIn();
} else {
  $('.PopPop').fadeOut();
}
});
      </script>
      <div id="WTFF">
        <a id="pass"href="#Passport">My works</a>
        <a href="#Aboutt">Skills</a>
        <a href="#Productss">Products</a>
        <a href="#Contact">Contact</a>
      </div>
      </nav>

      <div class="ThisIsMe">
        <h2>How did I get into coding?</h2>
        <p>It started as a hobby, teaching myself while I got my bachelor's degree in physical therapy at the VUB.<br>
        The passion grew slowly but intensely, I started to make a living out of it and now am as invested in it as ever!</p>
      </div>


    <div class="Space1">
              <div class="My">
                <h1>My Websites</h1>
                <div class="contained">
                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Kinemap</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <img src="images/kinemap.jpeg" style="position:relative;left:0;top:35px;width:105px;height:90px;" alt=" ">
                        <br><br>
                        <p>Find YOUR physical therapist online.<br>Filter among all specialisations.</p>

                        <a href="https://kinemap.be/" id="yellow">Go to website</a>
                        <a href="#">Check code</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2 id="Consumed">Consumed.World</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <img src="images/consumption.png" style="position:relative;left:0;top:0;width:170px;height:60px;" alt=" ">
                        <br><br>
                        <p>See and compare what humans consume and what the cost is.</p>
                        <br>
                        <a href="../FlappyBird/index.html" id="yellow">Go to website</a>
                        <a href="#">Check code</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Password generator</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <img src="images/password.jpeg" style="position:relative;left:0;top:10px;width:90px;height:75px;" alt=" ">
                        <br>
                        <p>Get a fully random and secure password with the settings you want!</p>
                        <a href="#" id="yellow">Go to website</a>
                        <a href="#">Check code</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Fraudeur</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <img src="images/fraudeur.jpeg" style="position:relative;left:0;top:10px;width:90px;height:80px;" alt=" ">
                        <p>All you need for a safe and easy trip with Brussels' public transports.</p>
                        <br>
                        <a href="#" id="yellow">Go to website</a>
                        <a href="#">Check code</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Flappy Basketball</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <p>Based on the original Flappy Bird that made it to Wall Street. Mostly focussing on the JavaScript</p>
                        <br>
                        <a href="../FlappyBird/index.html" id="yellow">Go to website</a>
                        <a href="#">Check code</a>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="area" >
                            <ul class="circles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                            </ul>
                    </div >
              </div>
    </div>


    <div id="Aboutt"></div>
    <div class="Beach" data-s-speed="6">
            <div id="About">
            <div class="container">
              <p><br>Why me? Because I'm <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
            </div>
            <div class="Skills">
              <div class="Oignon"> <p>Front end</p> </div>
              <div class="Ski d-none d-xl-block">
                  <div class="Front" id="CSS"><img src="https://img.icons8.com/color/48/000000/css3.png"/><p id="SKCSS">CSS</p></div>
                  <div class="Front" id="HTML"><img src="https://img.icons8.com/color/48/000000/html-5--v1.png"/><p id="SKHTML">HTML</p></div>
                  <div class="Front" id="BOO"><img src="https://img.icons8.com/color/48/000000/bootstrap.png"/><p id="SKBOO">Bootstrap</p></div>
              </div>
            <div class="Oignonn"><p>Back end</p></div>
            <div class="Skii d-none d-xl-block">
                <div class="Backkk" id="PY"><img src="https://img.icons8.com/color/48/000000/python--v1.png"/><p id="SKPY">Python</p></div>
                <div class="Backkk" id="JAVA"><img src="https://img.icons8.com/color/48/000000/javascript--v1.png"/><p id="SKJAVA">JavaScript</p></div>
                <div class="Backkk" id="DJANGO"><img src="https://img.icons8.com/ios/70/ffffff/django.png"/></div>
                <div class="Backkk" id="FAST"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 0C5.375 0 0 5.375 0 12c0 6.627 5.375 12 12 12c6.626 0 12-5.373 12-12c0-6.625-5.373-12-12-12zm-.624 21.62v-7.528H7.19L13.203 2.38v7.528h4.029L11.376 21.62z" fill="#2bc2a7"/></svg><p id="SKFAST">FastAPI</p> </div>
            </div>
          <div class="Oignonnn"> <p>Extra</p> </div>
          <div class="Skiii d-none d-xl-block">
                <div class="Extra" id="SEOOO"><img src="https://img.icons8.com/external-justicon-lineal-justicon/48/f9f9fa/external-seo-design-amp-thinking-process-justicon-lineal-justicon.png"/><p id="SKSEO">SEO</p></div>
                <div class="Extra" id="GIT"><img src="https://img.icons8.com/color/60/000000/git.png"/><p id="SKGIT">Git</p></div>
                <div class="Extra" id="AUTH"><img src="images/Oauth.png"/><p id="SKAUTH">OAuth2</p></div>
                <div class="Extra" id="STRIPE"><img src="https://img.icons8.com/ios/70/ffffff/stripe.png"/></div>
          </div>

        <div class="Oignonnnn"> <p>Database</p> </div>
        <div class="Skiiii d-none d-xl-block">
            <div class="DB" id="PSQL"><img src="https://img.icons8.com/color/48/000000/postgreesql.png"/> <p id="SKPSQL">PostgreSQL</p> </div>
            <div class="DB" id="MYSQL"><img src="https://img.icons8.com/ios-filled/70/ffffff/mysql-logo.png"/></div>
            <div class="DB" id="DB2"><img src="images/DB2.png"/></div>
        </div>

        <div class="Ske d-block d-xl-none">
            <div class="Front" id="CSS"><img src="https://img.icons8.com/color/48/000000/css3.png"/><p id="SKCSS">CSS</p></div>
            <div class="Front" id="HTML"><img src="https://img.icons8.com/color/48/000000/html-5--v1.png"/><p id="SKHTML">HTML</p></div>
            <div class="Front" id="BOO"><img src="https://img.icons8.com/color/48/000000/bootstrap.png"/><p id="SKBOO">Bootstrap</p></div>
        </div>

      <div class="Skee d-block d-xl-none">
        <div class="Backkk" id="PY"><img src="https://img.icons8.com/color/48/000000/python--v1.png"/><p id="SKPY">Python</p></div>
        <div class="Backkk" id="JAVA"><img src="https://img.icons8.com/color/48/000000/javascript--v1.png"/><p id="SKJAVA">JavaScript</p></div>
        <div class="Backkk" id="DJANGO"><img src="https://img.icons8.com/ios/70/e6e6e6/django.png"/></div>
        <div class="Backkk" id="FAST"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 0C5.375 0 0 5.375 0 12c0 6.627 5.375 12 12 12c6.626 0 12-5.373 12-12c0-6.625-5.373-12-12-12zm-.624 21.62v-7.528H7.19L13.203 2.38v7.528h4.029L11.376 21.62z" fill="#2bc2a7"/></svg><p id="SKFAST">FastAPI</p> </div>
      </div>

      <div class="Skeee d-block d-xl-none">
          <div class="Extra" id="SEOOO"><img src="https://img.icons8.com/external-justicon-lineal-justicon/48/f9f9fa/external-seo-design-amp-thinking-process-justicon-lineal-justicon.png"/><p id="SKSEO">SEO</p></div>
          <div class="Extra" id="GIT"><img src="https://img.icons8.com/color/60/000000/git.png"/><p id="SKGIT">Git</p></div>
          <div class="Extra" id="AUTH"><img src="images/Oauth.png"/><p id="SKAUTH">OAuth2</p></div>
          <div class="Extra" id="STRIPE"><img src="https://img.icons8.com/ios/70/e6e6e6/stripe.png"/></div>
      </div>

      <div class="Skeeee d-block d-xl-none">
        <div class="DB" id="PSQL"><img src="https://img.icons8.com/color/48/000000/postgreesql.png"/> <p id="SKPSQL">PostgreSQL</p> </div>
        <div class="DB" id="MYSQL"><img src="https://img.icons8.com/ios-filled/70/e6e6e6/mysql-logo.png"/></div>
        <div class="DB" id="DB2"><img src="images/DB2.png"/></div>
      </div>

    <div class="Click"> <h4 class="d-none d-xl-block">Hover on the cake to see my skills</h4> <p>A website is like a cake,<br> it consists of layers and each one gives a unique taste to the whole.</p> </div>
      </div>

</div>
    </div>

        <script>
        //Different scrolling speeds
      $.fn.moveIt = function() {
        var $els = $(this);
        var $window = $(window);
        var scrollPos = $window.scrollTop();

        $window.on('scroll', function() {
          scrollPos = $window.scrollTop();
          $els.each(moveEl);
        });

        function moveEl() {
          var $this = $(this);
          var scrollSpeed = parseInt($this.data('s-speed'));
          var elPos = scrollPos / scrollSpeed;

          $this.css('transform', 'translateY(-' + elPos + 'px)');
        }
      }

      $(function() {
        $('[data-s-speed]').moveIt();
      });

          //Text disappear onscroll
        $(window).scroll(function(){
          $(".Awesomeness").css("opacity",1-$(window).scrollTop()/250);
        });


        //Automated text writing
          const typedTextSpan = document.querySelector(".typed-text");
      const cursorSpan = document.querySelector(".cursor");

      const textArray = ["Creative.", "Flexible.", "Independent.", "Hardworking."];
      const typingDelay = 200;
      const erasingDelay = 100;
      const newTextDelay = 2000; // Delay between current and next text
      let textArrayIndex = 0;
      let charIndex = 0;

      function type() {
        if (charIndex < textArray[textArrayIndex].length) {
          if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
          typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
          charIndex++;
          setTimeout(type, typingDelay);
        }
        else {
          cursorSpan.classList.remove("typing");
          setTimeout(erase, newTextDelay);
        }
      }

      function erase() {
        if (charIndex > 0) {
          if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
          typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
          charIndex--;
          setTimeout(erase, erasingDelay);
        }
        else {
          cursorSpan.classList.remove("typing");
          textArrayIndex++;
          if(textArrayIndex>=textArray.length) textArrayIndex=0;
          setTimeout(type, typingDelay + 1100);
        }
      }

      document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
        if(textArray.length) setTimeout(type, newTextDelay + 250);
      });

      //Modal/Popups

            var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
      })

        // Language popup
        function togglePopup(){
        document.getElementById("popup-1").classList.toggle("active");
        }

    </script>
  </div>


  <div class="Quotes col-sm-12">

      <section class="move-area">
          <div class='eye' id="eye1"></div>
          <div class='eye' id="eye2"></div>

    <script type="text/javascript">
    $(".move-area").mousemove(function(event) {
    var eye = $(".eye");
    var x = (eye.offset().left) + (eye.width() / 2);
    var y = (eye.offset().top) + (eye.height() / 2);
    var rad = Math.atan2(event.pageX - x, event.pageY - y);
    var rot = (rad * (180 / Math.PI) * -1) + 180;
    eye.css({
    '-webkit-transform': 'rotate(' + rot + 'deg)',
    '-moz-transform': 'rotate(' + rot + 'deg)',
    '-ms-transform': 'rotate(' + rot + 'deg)',
    'transform': 'rotate(' + rot + 'deg)'
    });
    });
    </script>
  <div class="col-sm-4 Quo" id="Quo1">
<p>
"The more you learn, the more creative you can be."
 </p>
 </div>
 <div class="col-sm-4 Quo" id="Quo2">
<p>
"I invented nothing new. I simply assembled the discoveries of other men behind whom were centuries of work. Had I worked fifty or ten or even five years before, I would have failed. So it is with every new thing. Progress happens when all the factors that make for it are ready, and then it is inevitable. To teach that a comparatively few men are responsible for the greatest forward steps of mankind is the worst sort of nonsense." ~Henry Ford
</p>
</div>
</section>
  </div>
<div class="Products" id="Products">
<h1 id="Prod">Products</h1>
<div id="Productss">  </div>
<div class="card_area">
    <div class="card_container">
      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal1">
      <div class="box">
        <div class="card_content">
          <h2>01</h2>
          <h3>Basic Website</h3>
          <p>Get to choose from different templates to get a gorgeous website!</p>
          <p class="Price">699 $</p>
        </div>
        </div>
      </a>
      <div class="modal fade" id="card_modal1" tabindex="-1" aria-labelledby="card_modal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="card_modal1Label">Let's talk business:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact"> Show me your templates </a></button>
              <button type="button" class="btn btn-warning"><a class="aaa" href="https://github.com/"> I'm in ! </a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal2">
      <div class="box">
        <div class="card_content">
          <h2>02</h2>
          <h3>Advanced Website</h3>
          <p>Get to choose from different templates AND get additional personalized features!</p>
          <p class="Price">899 $</p>
        </div>
        </div>
      </a>
      <div class="modal fade" id="card_modal2" tabindex="-1" aria-labelledby="card_modal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="card_modal2Label">Let's talk business:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact"> Show me your templates </a></button>
              <button type="button" class="btn btn-warning"><a class="aaa" href="https://github.com/"> I'm in ! </a></button>
              </div>

          </div>
        </div>
      </div>



      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal3">
      <div class="box">
        <div class="card_content">
          <h2>03</h2>
          <h3><br><br>Fully Customized Website</h3>
          <p class="card_text">You command, I apply. <br><br> E-commerce? Login? Databases? Data visualization? <br> I got you!</p>
          <p class="Price">1199 $</p>
        </div>
        </div>
      </a>
      <div class="modal fade" id="card_modal3" tabindex="-1" aria-labelledby="card_modal3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="card_modal3Label">Let's talk business:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Let's discuss...</a></button>
              <button type="button" class="btn btn-warning"><a class="aaa" href="https://github.com/"> I'm in ! </a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal4">
      <div class="box">
        <div class="card_content">
          <h2>04</h2>
          <h3>Api Integration</h3>
          <p>Integrate an API <br>(login, tracking data, etc.)</p>
          <p class="Price">649 $</p>
        </div>
        </div>
      </a>
      <div class="modal fade" id="card_modal4" tabindex="-1" aria-labelledby="card_modal4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="card_modal4Label">Let's talk business:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Let's discuss...</a></button>
              <button type="button" class="btn btn-warning"><a class="aaa" href="https://github.com/"> I'm in ! </a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal5">
      <div class="box">
        <div class="card_content">
          <h2>05</h2>
          <h3>Map Integration</h3>
          <p>Put a map on your website so everyone can see you!</p>
          <p class="Price">199 $</p>
        </div>
        </div>
      </a>
      <div class="modal fade" id="card_modal5" tabindex="-1" aria-labelledby="card_modal5Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="card_modal5Label">Let's talk business:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Let's discuss...</a></button>
              <button type="button" class="btn btn-warning"><a class="aaa" href="https://github.com/"> I'm in ! </a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal6">
      <div class="box">
        <div class="card_content">
          <h2>06</h2>
          <h3>SEO</h3>
          <p>Put the odds on your side by ranking higher on Google!</p>
          <p class="Price">799 $</p>
        </div>
        </div>
      </a>
      <div class="modal fade" id="card_modal6" tabindex="-1" aria-labelledby="card_modal6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="card_modal6Label">Let's talk business:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Let's discuss...</a></button>
              <button type="button" class="btn btn-warning"><a class="aaa" href="https://github.com/"> I'm in ! </a></button>
              </div>

          </div>
        </div>
      </div>



    </div>

  </div>

    </div>



<div class="Contact" id="Contact">
  <div class="containerr">
  <div class="FormBox">
      <form method="post">
          <h2 id="h2">Contact me</h2>
          <div class="InputBox">
              <input type="text" name="name" required="required">
              <span class="spann">Name</span>
          </div>
          <div class="InputBox">
              <input type="email" name="email" required="required">
              <span class="spann">Email</span>
          </div>
          <div class="InputBox">
              <textarea name="message" required="required"></textarea>
              <span class="spann">Your message</span>
          </div>
          <div class="InputBox" id="Submit">
              <input type="submit" id="submittt" value="Send">
          </div>
          <?php
            if(!empty($_POST))
            {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];
                $subject = "Contact";
                $toEmail = "alexis.ruessmann@gmail.com";

                $mailHeaders = "From: " . $name . "<". $email .">\r\n";

                if (mail($toEmail, $subject, $message, $mailHeaders)) {
                    echo "<alert id='success'> Thank you for your message, <br><br> we will reach back as soon as possible! </alert>";
                }
          else {
                    echo "<alert id='failed'> Message could not be sent, <br><br> try again and otherwise do not worry<br><br> we are working on it! </alert>";
                }
            }
          ?>

      </form>
  </div>
  </div>
</div>

  </body>
</html>
