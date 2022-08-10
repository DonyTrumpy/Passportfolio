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
        <h1>Hallo! Ik ben Alexis</h1>
        <h3>Dit is mijn weg</h3>
        <a href="#Contact">Neem contact</a>
      </div>
      </div>

      <nav id="navbar">
      <img src="images/LogoPP.png" alt="Logo" id="Logo" onclick="window.location='../Passportfolio.html'">

            <a class="Ul" id="a1" href="#Passport">Mein Job</a>
            <a class="Ul" id="a2" href="#About">Skills</a>
            <a class="Ul" id="a3" href="#Productss">Producten</a>
            <a class="Ul" id="a4" href="#Contact">Contact</a>

      <div class="popup" id="popup-1">
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Kies een taal</h1><br><br>
          <a class="a" href="../Passportfolio.php"> English</a><br><br><br>
          <a class="a" href="../Passportfolio_fr.php"> Français</a><br><br><br>
          <a class="a" href="../Passportfolio_ne.php"> Nederlands</a><br><br><br>
          <a class="a" href="../Passportfolio_de.php"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" class="PopPop" onclick="togglePopup()">Taal</button>
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
        <a id="pass"href="#Passport">Mijn werk</a>
        <a href="#About">Skills</a>
        <a href="#Productss">Producten</a>
        <a href="#Contact">Contact</a>
      </div>
      </nav>

      <div class="ThisIsMe">
        <h2>Hoe ben ik gestart?</h2>
        <p>
          Het begon als een hobby, op mijn eigen leren terwijl ik mijn bachelor kinesitherapie behaalde aan de VUB. <br>
          Meteen was ik verslaafd! Nu ben ik fulltime aan het coderen en leef ik de droom!</p>
      </div>


    <div class="Space1" id="Passport">
              <div class="My">
                <h1>Mijn Websites</h1>
                <div class="contained">
                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Kinemap</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <img src="images/kinemap.jpeg" style="position:relative;left:0;top:35px;width:105px;height:90px;" alt=" ">
                        <br><br>
                        <p>Vind UW kiné.<br>Filter tussen de verschillende specialisaties.</p>

                        <a href="https://kinemap.be/" id="yellow">Naar de website</a>
                        <a href="https://github.com/DonyTrumpy/Kinemap">Code bekijken</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2 id="Consumed">Consumed.World</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <br><br>
                        <p id="ConsumptionDescription">Zie en vergelijk wat mensen consumeren en wat de kosten zijn.</p>
                        <br>
                        <a href="https://consumed.world/" id="yellow">Naar de website</a>
                        <a href="https://github.com/DonyTrumpy/ConsumedWorld">Code bekijken</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Crypto Macro Space</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <br>
                        <p>Hulp nodig bij het begrijpen van de markten, meer specifiek met crypto? Wij geven u het groot beeld en waar u op moet letten.</p>
                        <a href="#" id="yellow">Binnenkort beschikbaar</a>
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
                        <p>Alles wat u nodig heeft voor een veilige en gemakkelijke reis met het openbaar vervoer van Brussel.</p>
                        <br>
                        <a href="#" id="yellow">Binnenkort beschikbaar</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Flappy Ball</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <p>Gebaseerd op de originele Flappy Bird die Wall Street bereikte. Meestal gericht op JavaScript.</p>
                        <br>
                        <a href="../FlappyBird/index.html" id="yellow">Naar de website</a>
                        <a href="https://github.com/DonyTrumpy/FlappyBall">Code bekijken</a>
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
              <p><br>Waarom ik? Ik ben <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
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

    <div class="Click"> <h4 class="d-none d-xl-block">Zweef op de taart om mijn vaardigheden te zien</h4> <p>Een website is als een cake,<br> het bestaat uit lagen en elk geeft een unieke smaak aan het geheel.</p> </div>
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

      const textArray = ["Creatief.", "Flexible.", "Zelfstandig.","Rigoureus."];
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
"Hoe meer je leert, hoe creatiever je kunt zijn."
 </p>
 </div>
 <div class="col-sm-4 Quo" id="Quo2">
<p>
"Ik heb niets nieuws uitgevonden. Ik verzamelde gewoon de ontdekkingen van andere mannen waar eeuwen werk achter zat. Als ik vijftig of tien of zelfs vijf jaar eerder had gewerkt, zou ik gefaald hebben. Zo is het met elk nieuw ding. Vooruitgang vindt plaats wanneer alle factoren die ervoor zorgen klaar zijn, en dan is het onvermijdelijk. Leren dat relatief weinig mannen verantwoordelijk zijn voor de grootste stappen voorwaarts van de mensheid is de ergste soort onzin." ~Henry Ford
</p>
</div>
</section>
  </div>
<div class="Products" id="Products">
<h1 id="Prod">Producten</h1>
<div id="Productss">  </div>
<div class="card_area">
    <div class="card_container">
      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal1">
      <div class="box">
        <div class="card_content">
          <h2>01</h2>
          <h3>Basis Website</h3>
          <p>Kies uit verschillende sjablonen om een prachtige website te krijgen!</p>
          <p class="Price">899 $</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact"> Laat me je sjablonen zien en praat erover</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal2">
      <div class="box">
        <div class="card_content">
          <h2>02</h2>
          <h3>Geavanceerde Website</h3>
          <p>Kies uit verschillende sjablonen EN krijg extra gepersonaliseerde functies!</p>
          <p class="Price">1099 $</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Laat me je sjablonen zien en praat erover</a></button>
              </div>

          </div>
        </div>
      </div>



      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal3">
      <div class="box">
        <div class="card_content">
          <h2>03</h2>
          <h3><br><br>Volledig op maat gemaakte website</h3>
          <p class="card_text">Jij beveelt, ik doe het werk. <br><br> E-commerce? Login? Databases? Data visualisatie? <br> I maak het!</p>
          <p class="Price">1399 $</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Laten we uw doelen bespreken!</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal4">
      <div class="box">
        <div class="card_content">
          <h2>04</h2>
          <h3>Api Integratie</h3>
          <p>Integreer een API <br>(login, tracking data, etc.)</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Laten we uw doelen bespreken!</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal5">
      <div class="box">
        <div class="card_content">
          <h2>05</h2>
          <h3>Kaart Integratie</h3>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Laten we uw doelen bespreken!</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal6">
      <div class="box">
        <div class="card_content">
          <h2>06</h2>
          <h3>SEO</h3>
          <p>Zet de kansen aan uw kant door hoger te ranken in Google!</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Laten we uw doelen bespreken!</a></button>
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
          <h2 id="h2">Contacteer me</h2>
          <div class="InputBox">
              <input type="text" name="name" required="required">
              <span class="spann">Naam</span>
          </div>
          <div class="InputBox">
              <input type="email" name="email" required="required">
              <span class="spann">E-mail</span>
          </div>
          <div class="InputBox">
              <textarea name="message" required="required"></textarea>
              <span class="spann">Uw bericht</span>
          </div>
          <div class="InputBox" id="Submit">
              <input type="submit" id="submittt" value="Versturen">
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
                    echo "<alert id='success'> Bedankt voor uw bericht, <br><br> ik zal zo snel mogelijk contact met u opnemen! </alert>";
                }
          else {
                    echo "<alert id='failed'> Bericht kon niet worden verzonden, <br><br> probeer het opnieuw en maak je anders geen zorgen<br><br> we werken eraan! </alert>";
                }
            }
          ?>

      </form>
  </div>
  </div>
</div>

  </body>
</html>
