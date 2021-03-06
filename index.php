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


                        <!-- <a class="nav-item" href="/prices.html">??raink</a> -->

                       <!-- <a class="nav-item" href="/blog">Blog</a> -->

                       <a class="nav-item" href="#section1">Automatiz??lt  <br/> adminisztr??ci??</a>

                       <a class="nav-item" href="#section2">J??v??hagy??si<br/> protokoll</a>

                       <a class="nav-item" href="#section3">K??nyvel??s<br/> automatiz??l??sa</a>

                       <a class="nav-item" href="#section4">Digit??lis<br/> archiv??l??s</a>

                       <a class="nav-item" href="#section5">Kapcsol??d?? <br/>funkci??k</a>

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
                
                    <p style="font-family: 'Roboto', sans-serif;">Automatiz??lt <br/> adminisztr??ci??</p>
                        
                    </div>
                    
                </div>
                    
                </div></a> 
                


		    </div>

		    <div class="col-sm" style="z-index: 1;">
                
                <a href="#section2"><div class="card">

                
                    
                <div class="card-body">
                    
                <img src="img/icon1.png">
                <div style="margin-top: 5px;">
                <p style="font-family: 'Roboto', sans-serif;">J??v??hagy??si<br/> protokoll</p>
               
                </div>
                    
                </div>
                    
                </div></a>

		    </div>

		    <div class="col-sm" style="z-index: 1;">
                
                <a href="#section3"><div class="card">

                
                    
                <div class="card-body">
                
                <img src="img/icon4.png">
                    
                <div style="margin-top: 5px;">
                
                K??nyvel??s<br/> automatiz??l??sa
                    
                </div>
                    
                </div>
                    
                </div></a>

		    </div>

		    <div class="col-sm" style="z-index: 1;">
                
                <a href="#section4"><div class="card" >

                
                    
                <div class="card-body">
                    
                <img src="img/icon3.png">
                    
                <div style="margin-top: 5px;">
                
                Digit??lis<br/> archiv??l??s
                    
                </div>
                    
                </div>
                    
                </div></a>

		    </div>

		    <div class="col-sm"  style="z-index: 1;">
                
                <a href="#section5"><div class="card" >

                
                    
                <div class="card-body">
                    
                <img src="img/icon5.png">
                
                <div style="margin-top: 5px;">
                
                Kapcsol??d??<br/> funkci??k
                
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

            <h2 class="display-4" style="font-family: 'Roboto', sans-serif;">Automatiz??lt adminisztr??ci??</h2>

            <p style="font-family: 'Montserrat', sans-serif;">A beszkennelt pap??r alap?? dokumentumok (pl. be??rkez?? sz??ml??k, teljes??t??sigazol??sok, szerz??d??sek) digitaliz??ci??j??t a legmodernebb sz??vegolvas?? (OCR) szofver v??gzi el. A digitaliz??ci?? eredm??nye a fejszint?? adatfelismer??s ??s r??gz??t??s (metaadatok).</p>

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

            <h2 class="display-4" style="font-family: 'Roboto', sans-serif;">J??v??hagy??si protokoll</h2>

            <p style="font-family: 'Montserrat', sans-serif;">A j??v??hagy??sra sz??nt dokumentumok (szerz??d??sek, bej??v?? sz??ml??k), el??re meghat??rozott, vagy ad hoc m??don defini??lt ??ton a megfelel?? j??v??hagy??hoz tov??bb??tja a rendszer, mindenf??le beavatkoz??s n??lk??l. A j??v??hagy?? manager ??rtes??t??st kap, a linkre kattintva elv??gezheti a j??v??hagy??st ak??r a telefonj??n is. Ak??r t??bb szint?? j??v??hagy??st is kezel a rendszer, legyen az p??rhuzamos vagy szekvenci??lis. A j??v??hagy??st k??vet??en a dokumentum st??tusza megv??ltozik a rendszerben (szerz??d??s akt??vv??, sz??mla k??nyvelhet??v?? v??lik. Az audit??lt folyamat lehet??v?? teszi a pap??r alap?? dokumentunok (pl. sz??ml??k) elhagy??s??t - ??sszhangban a pap??rmentes iroda v??zi??j??val.</p>

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

            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">K??nyvel??s automatiz??l??sa</h2>

            <p style="font-family: 'Roboto', sans-serif;">A rendszer k??pes kijel??lt sz??mlaelemeket (p??ld??ul: ??r, fizet??si hat??rid??, besz??ll??t?? ad??sz??ma ) egyeztetni m??s dokumentumokkal (t??rzsadatok, rendel??sek, teljes??t??sigazol??sok, stb.)  - ak??r sor-, t??tel- ??s csomag szinten is.</p>

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

            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">Digit??lis arch??v??l??s </h2>

            <p style="font-family: 'Roboto', sans-serif;">A beszkennelt pap??r alap?? dokumentumok (pl. be??rkez?? sz??ml??k, teljes??t??sigazol??sok, szerz??d??sek) digitaliz??ci??j??t a legmodernebb sz??vegolvas?? (OCR) szoftver v??gzi el.</p>

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

            <h2 class="display-4" style="font-family: 'Questrial', sans-serif;">Kapcsol??d?? funkci??k</h2>

            <p style="font-family: 'Roboto', sans-serif;">A rendszer a feldolgozott dokumentumokb??l el??re be??ll??tott, rendszeresen el????ll??, vagy ad hoc riportokat k??sz??t manu??lis munka n??lk??l.</p>

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

            <p style="font-family: 'Roboto', sans-serif;">Telefonsz??m:     +36/20/466 6021<br>Email c??m:     info@aq-solutions.hu<br>Levelez??si c??m:    1125 Budapest D??niel ??t 16.</p>

            <h3 class="display-5" style="font-family: 'Questrial', sans-serif;">??rj nek??nk!</h2>

            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="cname" type="text" placeholder="N??v" required="required" data-validation-required-message="K??rem ??rja be a nev??t.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="cemail" type="email" placeholder="Email c??m" required="required" data-validation-required-message="K??rem ??rja be az email c??m??t.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="cphone" type="tel" placeholder="Telefonsz??m" required="required" data-validation-required-message="K??rem ??rja be a telefonsz??m??t.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="cmessage" placeholder="??zenet" required="required" data-validation-required-message="K??rem ??rja be az ??zenet??t." style="height:145px;"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendContactMessageButton" class="btn btn-primary text-uppercase float-left" type="submit">K??ld??s</button>
                </div>

              </div>
            </form>

                <div id="msg_success" class="alert alert-success" role="alert" style="margin-top:10px; display:none">
                  A levelet sikeresen elk??ldted!
                </div>
                <div id="msg_danger" class="alert alert-danger" role="alert" style="margin-top:10px; display:none">
                  A lev??l k??ld??se sikertelen, k??rlek minden mez??t t??lts ki!
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