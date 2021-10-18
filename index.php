<!doctype html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="styles/master.css" />
        <link href="styles/normalize.css" rel="stylesheet" type="text/css" />

        <!-- Custom Fonts -->
        
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="img/aq_triangle_color.png" />
        <title>aq solutions</title>

    </head>

    <script type="text/javascript">

      if(window.location.protocol != 'https:') {
        location.href = location.href.replace("http://", "https://");
      }

        $(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 5) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
    });

    </script>
    
    <body>
        
        

        <nav class="navbar index fixed-top navbar-expand-lg navbar-light">
            
            <div class="container-fluid">
                    
            <!-- Navbar -->

                    <a class="nav-link" href="#"><img src="img/aq_logo_full_color_white.png" style="max-width: 180px;"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <div class="navbar ml-auto">


                        <!-- <a class="nav-item" href="/prices.html">Áraink</a> -->

                       <!-- <a class="nav-item" href="/blog">Blog</a> -->

                       <a class="nav-item" href="#section1">Automatizált  <br/> adminisztráció</a>

                       <a class="nav-item" href="#section2">Jóváhagyási<br/> protokoll</a>

                       <a class="nav-item" href="#section3">Könyvelés<br/> automatizálása</a>

                       <a class="nav-item" href="#section4">Digitális<br/> archiválás</a>

                       <a class="nav-item" href="#section5">Kapcsolódó <br/>funkciók</a>

                       <a class="nav-button" href="#section6"><button type="button" href="#section6" class="btn btn-outline-light btn-block">Kapcsolat</button></a>
                        
                  
                    </div>
                        
                    </div> 
      </div>
        </nav>


  <div class="container-fluid landing_img" style="background-image: url('img/landing3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; opacity: 900%; max-height: 450px;">
    
    <a href="#"><img src="img/hiclipart.com%20(1).png" style="max-width: 50px; opacity: .7; background-color: #b5b5b5; border-radius: 50%; padding: 5px; position: fixed; bottom: 20px; right: 10px; z-index: 1;"></a>


		<img class="landing" src="img/aq_logo_full__white.png" style="width: 100%; max-width: 1000px; padding: 150px 20px; display: block; margin: auto;">

	</div>

	<div id="hide_on_mobile"class="container">

		  <div class="row">

		  	<div class="col-sm" style="z-index: 1;">
                
                <a href="#section1"><div class="card">

                    
                <div class="card-body">
                    
                    <img src="img/icon2.png">
                    
                    <div style="margin-top: 5px;">
                
                    <p style="font-family: 'Roboto', sans-serif;">Automatizált <br/> adminisztráció</p>
                        
                    </div>
                    
                </div>
                    
                </div></a> 
                


		    </div>

		    <div class="col-sm" style="z-index: 1;">
                
                <a href="#section2"><div class="card">

                
                    
                <div class="card-body">
                    
                <img src="img/icon1.png">
                <div style="margin-top: 5px;">
                <p style="font-family: 'Roboto', sans-serif;">Jóváhagyási<br/> protokoll</p>
               
                </div>
                    
                </div>
                    
                </div></a>

		    </div>

		    <div class="col-sm" style="z-index: 1;">
                
                <a href="#section3"><div class="card">

                
                    
                <div class="card-body">
                
                <img src="img/icon4.png">
                    
                <div style="margin-top: 5px;">
                
                Könyvelés<br/> automatizálása
                    
                </div>
                    
                </div>
                    
                </div></a>

		    </div>

		    <div class="col-sm" style="z-index: 1;">
                
                <a href="#section4"><div class="card" >

                
                    
                <div class="card-body">
                    
                <img src="img/icon3.png">
                    
                <div style="margin-top: 5px;">
                
                Digitális<br/> archiválás
                    
                </div>
                    
                </div>
                    
                </div></a>

		    </div>

		    <div class="col-sm"  style="z-index: 1;">
                
                <a href="#section5"><div class="card" >

                
                    
                <div class="card-body">
                    
                <img src="img/icon5.png">
                
                <div style="margin-top: 5px;">
                
                Kapcsolódó<br/> funkciók
                
                </div>
                    
                </div>
                    
                </div></a>

	</div>
              
</div>
</div>

	<div class="container-fluid">

	<section id="section1" style="padding-top: 50px;">


      <div class="row align-items-center" >

        <div class="col-lg-6 order-lg-2 section1_img">

          

            <img class="img-fluid" src="img/administration.jpg">

          </div>

       

        <div class="col-lg-6 order-lg-1 section1" >

          <div class="p-3">

            <h2 class="display-4" style="font-family: 'Roboto', sans-serif;">Automatizált adminisztráció</h2>

            <p style="font-family: 'Montserrat', sans-serif;">A beszkennelt papír alapú dokumentumok (pl. beérkező számlák, teljesítésigazolások, szerződések) digitalizációját a legmodernebb szövegolvasó (OCR) szofver végzi el. A digitalizáció eredménye a fejszintű adatfelismerés és rögzítés (metaadatok).</p>

          </div>

        </div>

      </div>

    

  </section>

  <section id="section2" style="padding-top: 50px;">

    <div class="container-fluid">

      <div class="row align-items-center">

        <div class="col-lg-6 section2_img">

          

            <img class="img-fluid" src="img/girls_working.jpg">

          </div>

        

        <div class="col-lg-6 section2">

          <div class="p-3">

            <h2 class="display-4" style="font-family: 'Roboto', sans-serif;">Jóváhagyási protokoll</h2>

            <p style="font-family: 'Montserrat', sans-serif;">A jóváhagyásra szánt dokumentumok (szerződések, bejövő számlák), előre meghatározott, vagy ad hoc módon definiált úton a megfelelő jóváhagyóhoz továbbítja a rendszer, mindenféle beavatkozás nélkül. A jóváhagyó manager értesítést kap, a linkre kattintva elvégezheti a jóváhagyást akár a telefonján is. Akár több szintű jóváhagyást is kezel a rendszer, legyen az párhuzamos vagy szekvenciális. A jóváhagyást követően a dokumentum státusza megváltozik a rendszerben (szerződés aktívvá, számla könyvelhetővé válik. Az auditált folyamat lehetővé teszi a papír alapú dokumentunok (pl. számlák) elhagyását - összhangban a papírmentes iroda víziójával.</p>

          </div>
            
        </div>

      </div>

    </div>

  </section>

  <section id="section3" style="padding-top: 50px;">

    <div class="container-fluid">

      <div class="row align-items-center">

        <div class="col-lg-6 order-lg-2 section3_img">

          

            <img class="img-fluid" src="img/laptop_charts.jpg">

          

        </div>

        <div class="col-lg-6 order-lg-1 section3">

          <div class="p-3">

            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">Könyvelés automatizálása</h2>

            <p style="font-family: 'Roboto', sans-serif;">A rendszer képes kijelölt számlaelemeket (például: ár, fizetési határidő, beszállító adószáma ) egyeztetni más dokumentumokkal (törzsadatok, rendelések, teljesítésigazolások, stb.)  - akár sor-, tétel- és csomag szinten is.</p>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section id="section4" style="padding-top: 50px;">

    <div class="container-fluid">

      <div class="row align-items-center">

        <div class="col-lg-6 section4_img">

            <img class="img-fluid" src="img/girl_data.jpg">

        </div>

        <div class="col-lg-6 section4">

          <div class="p-3">

            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">Digitális archíválás </h2>

            <p style="font-family: 'Roboto', sans-serif;">A beszkennelt papír alapú dokumentumok (pl. beérkező számlák, teljesítésigazolások, szerződések) digitalizációját a legmodernebb szövegolvasó (OCR) szoftver végzi el.</p>

          </div>
            
        </div>

      </div>

    </div>
    
  </section>

<section id="section5" style="padding-top: 50px;">

    <div class="container-fluid">

      <div class="row align-items-center">

        <div class="col-lg-6 order-lg-2 section5_img">

            <img class="img-fluid" src="img/girl_tablet.jpg">

        </div>

        <div class="col-lg-6 order-lg-1 section5">

          <div class="p-3">

            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">Kapcsolódó funkciók</h2>

            <p style="font-family: 'Roboto', sans-serif;">A rendszer a feldolgozott dokumentumokból előre beállított, rendszeresen előálló, vagy ad hoc riportokat készít manuális munka nélkül.</p>

          </div>

        </div>

      </div>

    </div>

  </section>
        
        <section id="section6" style="padding-top: 50px;">

    

      <div class="row align-items-center">

        <div class="col-lg-6 section6_img">

          

            <img class="img-fluid" src="img/contact-us-4193401_1280.jpg">

          </div>

        

        <div class="col-lg-6 order-lg-1 section6">

          <div class="p-3">
            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">Kapcsolat</h2>

            <p style="font-family: 'Roboto', sans-serif;">Telefonszám:     +36/20/466 6021<br>Email cím:     info@aq-solutions.hu<br>Levelezési cím:    1125 Budapest Dániel út 16.</p>

            <h3 class="display-5" style="font-family: 'Questrial', sans-serif;">Írj nekünk!</h2>

            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="cname" type="text" placeholder="Név" required="required" data-validation-required-message="Kérem írja be a nevét.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="cemail" type="email" placeholder="Email cím" required="required" data-validation-required-message="Kérem írja be az email címét.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="cphone" type="tel" placeholder="Telefonszám" required="required" data-validation-required-message="Kérem írja be a telefonszámát.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="cmessage" placeholder="Üzenet" required="required" data-validation-required-message="Kérem írja be az üzenetét." style="height:145px;"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendContactMessageButton" class="btn btn-primary text-uppercase float-left" type="submit">Küldés</button>
                </div>

              </div>
            </form>

                <div id="msg_success" class="alert alert-success" role="alert" style="margin-top:10px; display:none">
                  A levelet sikeresen elküldted!
                </div>
                <div id="msg_danger" class="alert alert-danger" role="alert" style="margin-top:10px; display:none">
                  A levél küldése sikertelen, kérlek minden mezőt tölts ki!
              </div>

          </div>
            
        </div>

      </div>

  <script>



        $('#sendContactMessageButton').click(function() {

          var name = document.getElementById("cname").value;
          var email = document.getElementById("cemail").value;
          var phone = document.getElementById("cphone").value;
          var message = document.getElementById("cmessage").value;
          $.ajax({
            type: "POST",
            url: "mail/contact_me.php",
            data: { name,
            email,
            phone,
            message,
            

          }
          }).done(function( e ) {
            if (e == true){
             document.getElementById('msg_success').style.display="";
            }
            else {
              document.getElementById('msg_danger').style.display="";
            }
          });
        });

  </script>

  

  </section>
        
</div>
        

        
        <footer style="background-color: black; margin-top: 50px;">
        
            <a class="nav-link" href="/"><img src="img/aq_logo_full__white.png" style="max-width: 270px; padding: 30px;"></a>
    
        
        </footer>
      
        
    
</body>
    
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
<script src="animate.js"></script>