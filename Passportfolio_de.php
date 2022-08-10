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
        <h1>Hallo! Ich bin Alexis</h1>
        <h3>Das ist mein Weg</h3>
        <a href="#Contact">Kontaktiere mich</a>
      </div>
      </div>

      <nav id="navbar">
      <img src="images/LogoPP.png" alt="Logo" id="Logo" onclick="window.location='../Passportfolio.html'">

            <a class="Ul" id="a1" href="#Passport">Meine Arbeit</a>
            <a class="Ul" id="a2" href="#About">Skills</a>
            <a class="Ul" id="a3" href="#Productss">Produkte</a>
            <a class="Ul" id="a4" href="#Contact">Kontact</a>

      <div class="popup" id="popup-1">
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Wählen Sie eine Sprache</h1><br><br>
          <a class="a" href="../Passportfolio.php"> English</a><br><br><br>
          <a class="a" href="../Passportfolio_fr.php"> Français</a><br><br><br>
          <a class="a" href="../Passportfolio_ne.php"> Nederlands</a><br><br><br>
          <a class="a" href="../Passportfolio_de.php"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" class="PopPop" onclick="togglePopup()">Sprache</button>
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
        <a id="pass"href="#Passport">meine Arbeit</a>
        <a href="#Aboutt">Skills</a>
        <a href="#Productss">Produkte</a>
        <a href="#Contact">Kontact</a>
      </div>
      </nav>

      <div class="ThisIsMe">
        <h2>Wie habe ich angefangen?</h2>
        <p>Es begann als Hobby, ich lernte selbstständig während ich meinen Bachelor in Physiotherapie an der VUB machte. <br>
           Sofort war ich süchtig! Jetzt programmiere ich Vollzeit und lebe den Traum!</p>
      </div>


    <div class="Space1" id="Passport">
              <div class="My">
                <h1>Meine Webseiten</h1>
                <div class="contained">
                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Kinemap</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <img src="images/kinemap.jpeg" style="position:relative;left:0;top:35px;width:105px;height:90px;" alt=" ">
                        <br><br>
                        <p>Finden Sie IHR Kiné.<br>Filtern Sie zwischen den verschiedenen Spezialisierungen.</p>

                        <a href="https://kinemap.be/" id="yellow">Zur Webseite</a>
                        <a href="https://github.com/DonyTrumpy/Kinemap">Code anzeigen</a>
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
                        <p id="ConsumptionDescription">Sehen und vergleichen Sie, was Menschen verbrauchen und was die Kosten sind.</p>
                        <br>
                        <a href="https://consumed.world/" id="yellow">Zur Webseite</a>
                        <a href="https://github.com/DonyTrumpy/ConsumedWorld">Code anzeigen</a>
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
                        <p>Benötigen Sie Hilfe beim Verständnis der Märkte, insbesondere bei Krypto? Wir geben Ihnen den Überblick und worauf Sie achten sollten.</p>
                        <a href="#" id="yellow">Werde sehr bald kommen</a>
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
                        <p>Alles, was Sie für eine sichere und einfache Fahrt mit den öffentlichen Verkehrsmitteln in Brüssel brauchen.</p>
                        <br>
                        <a href="#" id="yellow">Demnächst</a>
                      </div>
                    </div>
                  </div>

                  <div class="cardy">
                    <div class="imgBx">
                      <h2>Flappy Ball</h2>
                    </div>
                    <div class="contenty">
                      <div>
                        <p>Basierend auf dem originalen Flappy Bird, der es an die Wall Street geschafft hat. Hauptsächlich mit Fokus auf JavaScript.</p>
                        <br>
                        <a href="../FlappyBird/index.html" id="yellow">Zur Webseite</a>
                        <a href="https://github.com/DonyTrumpy/FlappyBall">Code anzeigen</a>
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


    <div id="About"></div>
    <div class="Beach" data-s-speed="6">
            <div id="About">
            <div class="container">
              <p><br>Warum ich? Ich bin <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
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

    <div class="Click"> <h4 class="d-none d-xl-block">Bewegen Sie den Mauszeiger über den Kuchen, um meine Fähigkeiten zu sehen</h4> <p>Eine Website ist wie ein Kuchen,<br> sie besteht aus Schichten und jede verleiht dem Ganzen eine einzigartige Note.</p> </div>
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

      const textArray = ["Kreativ.", "Flexibel.", "Unabhängig.", "Fleißig."];
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
"Je mehr Sie lernen, desto kreativer können Sie sein."
 </p>
 </div>
 <div class="col-sm-4 Quo" id="Quo2">
<p>
"Ich habe nichts Neues erfunden. Ich trug einfach die Entdeckungen anderer Männer zusammen, hinter denen Jahrhunderte der Arbeit standen. Hätte ich vorher fünfzig oder zehn oder sogar fünf Jahre gearbeitet, wäre ich gescheitert. So ist es mit jeder neuen Sache. Fortschritt findet statt, wenn alle Faktoren, die dafür sorgen, bereit sind, und dann ist er unvermeidlich. Zu lehren, dass verhältnismäßig wenige Menschen für die größten Fortschritte der Menschheit verantwortlich sind, ist der schlimmste Unsinn." ~Henry Ford
</p>
</div>
</section>
  </div>
<div class="Products" id="Products">
<h1 id="Prod">Produkte</h1>
<div id="Productss">  </div>
<div class="card_area">
    <div class="card_container">
      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal1">
      <div class="box">
        <div class="card_content">
          <h2>01</h2>
          <h3>Basis-Website</h3>
          <p>Wählen Sie aus verschiedenen Vorlagen, um eine wunderschöne Website zu erhalten!</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Zeigen Sie mir Ihre Vorlagen und unterhalten Sie sich</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal2">
      <div class="box">
        <div class="card_content">
          <h2>02</h2>
          <h3>Erweiterte Website</h3>
          <p>Wählen Sie aus verschiedenen Vorlagen UND erhalten Sie zusätzliche personalisierte Funktionen!</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Zeigen Sie mir Ihre Vorlagen und unterhalten Sie sich</a></button>
              </div>

          </div>
        </div>
      </div>



      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal3">
      <div class="box">
        <div class="card_content">
          <h2>03</h2>
          <h3><br><br>Vollständig Angepasste Website</h3>
          <p class="card_text">Sie befehlen, ich bewerbe mich. <br><br> E-Commerce? Anmeldung? Datenbanken? Datenvisualisierung? <br> Ich kann es!</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Lassen Sie uns über Ihre Ziele sprechen!</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal4">
      <div class="box">
        <div class="card_content">
          <h2>04</h2>
          <h3>API-Integration</h3>
          <p>Integrieren Sie eine API <br>(Login, Tracking-Daten usw.)</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Lassen Sie uns über Ihre Ziele sprechen!</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal5">
      <div class="box">
        <div class="card_content">
          <h2>05</h2>
          <h3>Kartenintegration</h3>
          <p>Platzieren Sie eine Karte auf Ihrer Website, damit jeder Sie sehen kann!</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Lassen Sie uns über Ihre Ziele sprechen!</a></button>
              </div>

          </div>
        </div>
      </div>


      <a class="card" data-bs-toggle="modal" data-bs-target="#card_modal6">
      <div class="box">
        <div class="card_content">
          <h2>06</h2>
          <h3>SEO</h3>
          <p>Setzen Sie die Chancen auf Ihre Seite, indem Sie bei Google höher ranken!</p>
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
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="aaa" href="#Contact">Lassen Sie uns über Ihre Ziele sprechen!</a></button>
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
