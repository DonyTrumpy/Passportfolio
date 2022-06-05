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
      #JoinMe{left:12%;}
      #Email{left:47%;}#Phone{left:47%;}
      #a3{position: absolute;top:24px;left:53%;}
      #a4{position: absolute;top:24px;left:64%;}
      @media only screen and (max-width: 991.2px){  .Contact{top:115px;}}
      @media only screen and (max-width: 772.1px) {#Email{left:20%;}#Phone{left:20%;}.Contact{top:650px;}}
    </style>
  </head>
  <body>

    <div class="TreeWater" data-s-speed="200">
      <div class="Awesomeness" data-s-speed="1">
        <h1>Hallo, ik ben Alexis</h1>
        <h3>Ga mee op mijn reis</h3>
        <a href="#Contact">Contacteer me</a>
      </div>
      </div>


      <nav id="navbar">
      <img src="images/LogoPP.png" alt="Logo" id="Logo" onclick="window.location='../Passportfolio_ne.html'">

            <a class="Ul" id="a1" href="#Passport">Mijn werken</a>
            <a class="Ul" id="a2" href="#Aboutt">Vaardigheden</a>
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

      <button id="PopPop" onclick="togglePopup()">Taal</button>

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
                <h1>Mijn websites</h1>
                <a class="col-11 col-lg-5 Web" id="W1" href="https://kinemap.be/home/home_ne.php">
                  <div class="Weby" id="Weby1"><p><br><br><br>Vind JOUW kiné</p></div>
                </a>
                <a class="col-11 col-lg-5 Web" id="W2">
                <div class="Weby" id="Weby2">  <p><br><br>Bekijk wat mensen <br>consumeren en hoeveel <br>het kost.</p></div>
              </a>
                <a class="col-5 col-lg-3 Web" id="W4">
                  <div class="Weby"><p><br><br>Voorbeeld van een <br>basissjabloon</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W5">
                  <div class="Weby"><p><br><br>Voorbeeld van een <br>basissjabloon</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W6">
                  <div class="Weby"><p><br><br>Voorbeeld van een <br>Traditionele sjabloon</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W7">
                  <div class="Weby" id="Weby7"><p><br><br>Voorbeeld van een volledig <br>gepersonaliseerde website.</p></div>
                </a>
                <a class="col-5 col-lg-3 Web" id="W8">
                <div class="Weby">  <p><br>Krijg een volledig <br>willekeurig en veilig <br>wachtwoord met de <br>gewenste instellingen!</p></div>
              </a>
                <a class="col-5 col-lg-3 Web" id="W9">
                  <div class="Weby" id="Weby9"><p><br><br>Controleer of er bedieningselementen <br>op uw lijn zijn.</p></div>
                </a>
              </div>
          <div class="Sea"></div>
    </div>
<div id="Aboutt"></div>
<div class="Beach" data-s-speed="6">
        <div id="About">
        <div class="container">
          <p><br>Waarom me? Ik ben <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
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

    <div class="Click"> <h4 class="d-none d-xl-block">Neem een ​​stuk taart</h4> <p>Een site heeft, net als een taart, meerdere lagen.</p> </div>
        </div>

    </div>

        <script>
        $(window).scroll(function(){
          $(".Awesomeness").css("opacity",1-$(window).scrollTop()/300);
        });


          const typedTextSpan = document.querySelector(".typed-text");
      const cursorSpan = document.querySelector(".cursor");

      const textArray = ["Creatief.", "Flexible.", "Onafhankelijk.", "Hardwerkend."];
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
"Code-verslaafde. Niet in staat om nuchter te worden. In de hoop nooit genezen te worden."
 </p>
 </div>
 <div class="col-sm-4 Quo" id="Quo2">
<p>
"Ik heb niets nieuws uitgevonden. Ik heb gewoon de ontdekkingen verzameld van andere mannen achter wie eeuwenlang werk zat. Als ik vijftig of tien of zelfs vijf jaar eerder had gewerkt, zou ik hebben gefaald. Zo is het met elk nieuw ding. Vooruitgang gebeurt wanneer alle de factoren die ervoor zorgen zijn klaar, en dan is het onvermijdelijk. Om te leren dat een relatief weinig mensen verantwoordelijk zijn voor de grootste voorwaartse stappen van de mensheid is de ergste soort onzin.' ~Henry Ford
</p>
</div>
</section>
  </div>

<div class="Products" id="Products">
<h1 id="Prod">Producten</h1>
    <div class="Propro col-5 col-lg-3" id="BasicT"><h2 id="PB">Basic Website</h2> <div class="Hodor" id="HBT"><p><br><br>Kies uit verschillende sjablonen om een website van één pagina te krijgen!<br><br>&emsp;&emsp;&emsp;~499€ </p></div> </div>
    <div class="Propro col-5 col-lg-3" id="ProT"><h2 id="PT">Traditional Website</h2> <div class="Hodor" id="HPT"><p><br><br>Kies uit verschillende sjablonen om een website van MEERDERE paginas te krijgen!<br><br>&emsp;&emsp;&emsp;~799€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="PersoT"><h2 id="PP">Pro Website</h2> <div class="Hodor" id="HPerT"><p><br><br>Krijg een volledig gepersonaliseerde website met een volledige walkthrough!<br><br>&emsp;&emsp;&emsp;~1299€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="API"><h2 id="PA">API</h2> <div class="Hodor" id="HAPI"><p><br><br>Integreer een API<br><br>&emsp;&emsp;&emsp;~499€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="MapI"><h2 id="PM">Map</h2> <div class="Hodor" id="HMI"><p><br><br>Integreer een kaart <br><br>&emsp;&emsp;&emsp;~499€</p></div></div>
    <div class="Propro col-5 col-lg-3" id="SEO"><h2 id="PS">SEO</h2> <div class="Hodor" id="HSEO"><p><br><br>Rankeer uw website hoger op Google <br><br>&emsp;&emsp;&emsp;~699€ </p></div></div>
</div>
<div id="Productss"></div>


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
