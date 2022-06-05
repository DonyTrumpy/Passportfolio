<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/PPIcon.png">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Passportfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Prosto One' rel='stylesheet'>

    <style media="screen">
      #JoinMe{left:7%;}
      #Email{left:50%;}#Phone{left:50%;}
      #PB{left:20%;}#PT{left:15%;}#PP{left:30%;}
      #a3{position: absolute;top:24px;left:53.5%;}
      #a4{position: absolute;top:24px;left:63%;}
      @media only screen and (max-width: 991.2px){  .Contact{top:115px;}}
      @media only screen and (max-width: 772.1px) {#Email{left:20%;}#Phone{left:20%;}.Contact{top:650px;}}
    </style>
  </head>
  <body>

    <div class="TreeWater" data-s-speed="200">
      <div class="Awesomeness" data-s-speed="1">
        <h1>Bonjour! Je m'appelle Alexis</h1>
        <h3>Joignez-vous à mon voyage</h3>
        <a href="#Contact">Contactez-moi</a>
      </div>
      </div>


      <nav id="navbar">
      <img src="images/LogoPP.png" alt="Logo" id="Logo" onclick="window.location='../Passportfolio_fr.html'">

            <a class="Ul" id="a1" href="#Passport">Mon travail</a>
            <a class="Ul" id="a2" href="#Aboutt">Compétences</a>
            <a class="Ul" id="a3" href="#Productss">Produits</a>
            <a class="Ul" id="a4" href="#Contact">Contact</a>

      <div class="popup" id="popup-1">
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Selectionnez une langue</h1><br><br>
          <a class="a" href="../Passportfolio.php"> English</a><br><br><br>
          <a class="a" href="../Passportfolio_fr.php"> Français</a><br><br><br>
          <a class="a" href="../Passportfolio_ne.php"> Nederlands</a><br><br><br>
          <a class="a" href="../Passportfolio_de.php"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" onclick="togglePopup()">Langue</button>

      <script type="text/javascript">
      function togglePopup(){
      document.getElementById("popup-1").classList.toggle("active");
      }
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

    <div class="Space1" data-s-speed="200">
    <div class="Passport" id="Passport" data-s-speed="6"></div>
              <div class="My" data-s-speed="32">
                <h1>Mes Sites</h1>
                <a class="col-11 col-lg-5 Web" id="W1" href="https://kinemap.be/">
                  <div class="Weby" id="Weby1"><p><br><br><br>Trouvez VOTRE kiné</p></div>
                </a>
                <a class="col-11 col-lg-5 Web" id="W2" href="">
                <div class="Weby" id="Weby2">  <p><br><br>Découvrez ce que les humains consomment et les resources que cela demande.</p></div>
              </a>
                <a class="col-5 col-lg-3 Web" id="W4" href="file:///C:/Users/alexi/Desktop/Passportfolio/Template1.html">
                  <div class="Weby"><p><br><br>Exemple d'un <br>template basic</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W5">
                  <div class="Weby"><p><br><br>Exemple d'un <br>template basic</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W6">
                  <div class="Weby"><p><br><br>Exemple d'un <br>template traditionel</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W7">
                  <div class="Weby" id="Weby7"><p><br><br>Exemple d'un site personalisé.</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W8">
                <div class="Weby">  <p><br>Obtenez un mot de passe <br>complètement safe et <br>avec les parametres <br>que vous désirez!</p></div>
              </a>
                <a class="col-5 col-lg-3 Web" id="W9">
                  <div class="Weby" id="Weby9"><p><br><br>Vérifiez s'il y a des contrôles sur votre ligne.</p></div>
                </a>
              </div>
          <div class="Sea"></div>
    </div>
<div id="Aboutt"></div>
<div class="Beach" data-s-speed="6">
        <div id="About">
        <div class="container">
          <p><br>Pourquoi moi? Car je suis <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
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
<div class="Backkk" id="STO"><img src="https://img.icons8.com/color/48/000000/stackoverflow.png"/><p id="SKSTO">Stack Overflow</p></div>
<div class="Backkk" id="PSQL"><img src="https://img.icons8.com/color/48/000000/postgreesql.png"/> <p id="SKPSQL">PostgreSQL</p> </div>
      </div>
      <div class="Oignonnn"> <p>Extra</p> </div>
      <div class="Skiii d-none d-xl-block">
<div class="Extra" id="BS"><img src="https://img.icons8.com/color/48/000000/soup-plate.png"/> <p id="SKBS">Beautiful Soup</p> </div>
<div class="Extra" id="SEOOO"><img src="https://img.icons8.com/external-justicon-lineal-justicon/48/f9f9fa/external-seo-design-amp-thinking-process-justicon-lineal-justicon.png"/><p id="SKSEO">SEO</p></div>
<div class="Extra" id="APIII"><img src="https://img.icons8.com/external-becris-flat-becris/48/000000/external-api-fintech-becris-flat-becris.png"/><p id="SKAPI">API Integration</p></div>
    </div>

    <div class="Ske d-block d-xl-none">
  <div class="Front" id="CSS"><img src="https://img.icons8.com/color/48/000000/css3.png"/><p id="SKCSS">CSS</p></div>
  <div class="Front" id="HTML"><img src="https://img.icons8.com/color/48/000000/html-5--v1.png"/><p id="SKHTML">HTML</p></div>
  <div class="Front" id="BOO"><img src="https://img.icons8.com/color/48/000000/bootstrap.png"/><p id="SKBOO">Bootstrap</p></div>
  </div>

  <div class="Skee d-block d-xl-none">
  <div class="Backkk" id="PY"><img src="https://img.icons8.com/color/48/000000/python--v1.png"/><p id="SKPY">Python</p></div>
  <div class="Backkk" id="JAVA"><img src="https://img.icons8.com/color/48/000000/javascript--v1.png"/><p id="SKJAVA">JavaScript</p></div>
  <div class="Backkk" id="STO"><img src="https://img.icons8.com/color/48/000000/stackoverflow.png"/><p id="SKSTO">Stack Overflow</p></div>
  <div class="Backkk" id="PSQL"><img src="https://img.icons8.com/color/48/000000/postgreesql.png"/> <p id="SKPSQL">PostgreSQL</p> </div>
  </div>

  <div class="Skeee d-block d-xl-none">
  <div class="Extra" id="BS"><img src="https://img.icons8.com/color/48/000000/soup-plate.png"/> <p id="SKBS">Beautiful Soup</p> </div>
  <div class="Extra" id="SEOOO"><img src="https://img.icons8.com/external-justicon-lineal-justicon/64/ffffff/external-seo-design-amp-thinking-process-justicon-lineal-justicon.png"/><p id="SKSEO">SEO</p></div>
  <div class="Extra" id="APIII"><img src="https://img.icons8.com/external-becris-flat-becris/48/000000/external-api-fintech-becris-flat-becris.png"/><p id="SKAPI">API Integration</p></div>
  </div>

    <div class="Click"> <h4 class="d-none d-xl-block">Prenez une part de gâteau</h4> <p>Un site, tout comme un gâteau, a plusieurs couches.</p> </div>

        </div>

    </div>

        <script>
        $(window).scroll(function(){
          $(".Awesomeness").css("opacity",1-$(window).scrollTop()/300);
        });


          const typedTextSpan = document.querySelector(".typed-text");
      const cursorSpan = document.querySelector(".cursor");

      const textArray = ["Créatif.", "Flexible.", "Indépendent.", "Travailleur."];
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
"Accro aux codes. Incapable d'arrêter. Éspérant ne jamais être guéri."
 </p>
 </div>
 <div class="col-sm-4 Quo" id="Quo2">
<p>
"Je n'ai rien inventé de nouveau. J'ai simplement rassemblé les découvertes d'autres hommes derrière lesquels se trouvaient des siècles de travail. Si j'avais travaillé cinquante, dix ou même cinq ans auparavant, j'aurais échoué. Le progrès arrive quand les facteurs qui y contribuent sont prêts, et alors c'est inévitable. Enseigner que relativement peu d'hommes sont responsables des plus grands pas en avant de l'humanité est la pire des absurdités. ~Henri Ford
</p>
</div>
</section>
  </div>

<div class="Products" id="Products">
<h1 id="Prod">Produits</h1>
    <div class="Propro col-5 col-lg-3" id="BasicT"><h2 id="PB">Site Basique</h2> <div class="Hodor" id="HBT"><p><br>Choisissez un des templates afin d'avoir un site tout en une page!<br><br>&emsp;&emsp;&emsp;~499€ </p></div> </div>
    <div class="Propro col-5 col-lg-3" id="ProT"><h2 id="PT">Site Traditionel</h2> <div class="Hodor" id="HPT"><p><br>Choisissez un des templates afin d'avoir un site de plusieurs pages!<br><br>&emsp;&emsp;&emsp;~799€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="PersoT"><h2 id="PP">Site Pro</h2> <div class="Hodor" id="HPerT"><p><br>Obtenez un site complètement personalisé avec un suivi complet!<br><br>&emsp;&emsp;&emsp;~1299€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="API"><h2 id="PA">API</h2> <div class="Hodor" id="HAPI"><p><br><br>Intégrez un API<br><br>&emsp;&emsp;&emsp;~499€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="MapI"><h2 id="PM">Map</h2> <div class="Hodor" id="HMI"><p><br><br>Intégrez une carte<br><br>&emsp;&emsp;&emsp;~499€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="SEO"><h2 id="PS">SEO</h2> <div class="Hodor" id="HSEO"><p><br><br>Classez votre site Web plus haut sur Google <br><br>&emsp;&emsp;&emsp;~699€ </p></div></div>
</div>
<div id="Productss"></div>


<div class="Contact" id="Contact">
  <div class="containerr">
  <div class="FormBox">
      <form method="post">
          <h2 id="h2">Contactez-moi</h2>
          <div class="InputBox">
              <input type="text" name="name" required="required">
              <span class="spann">Nom</span>
          </div>
          <div class="InputBox">
              <input type="email" name="email" required="required">
              <span class="spann">E-mail</span>
          </div>
          <div class="InputBox">
              <textarea name="message" required="required"></textarea>
              <span class="spann">Votre message</span>
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
