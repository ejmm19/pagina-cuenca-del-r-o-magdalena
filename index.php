<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/estil.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background: #f2f2f2;">
    <?php include'php/header.php'; ?>
    
    
    <?php include'php/slider.php'; ?>
      <center><div class="contenedor" style="background: #fff;">


       
    
     <div class="row">
      <div class="col s12">
        
      <?php 
            
            if (!isset($_GET['op'])) {
                include('./php/menu.php');

            }elseif ($_GET['op']==1) {
                include('./php/introduccion.php');
            }elseif ($_GET['op']==2) {
                include('./php/Cfisicas.php');
            }elseif ($_GET['op']==3) {
                include('./php/Csociales.php');
            }elseif ($_GET['op']==4) {
                include('./php/Ceconomicas.php');
            }elseif ($_GET['op']==5) {
                include('./php/pyp.php');
            }elseif ($_GET['op']==6) {
                include('./php/glosario.php');
            }elseif ($_GET['op']==7) {
                include('./php/bibliografia.php');
            }
            
                
             ?>
      
    </div>
      
    </div>
        <!-- Page Content goes here -->
      </div>
      </center>
      <div>
        <?php include'php/footer.php'; ?>
      </div>
    </body>
    <script>
        $(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;
                }
       }

        });

        });
    </script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>