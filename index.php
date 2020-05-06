<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OROGOLD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./Css/orogoldStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhilvf7_cOXQW-YjsVKHUPeFK7vFDZ4gc&callback=initMap"  async defer></script> 
    <script src="https://kit.fontawesome.com/679db444d8.js" crossorigin="anonymous"></script>
    <script src="./Js/ancla.js"></script>
    </head>
    <body>
        <div id="content" class="conteiner">
            <div id="header">
               <?php 
                            include_once './View/header.php';
                      ?>
            </div>
            <div id="reservar">
                
                <?php 
                            include_once './View/reservar.php';
                      ?>
            </div>
            <div id="tratamientos">
                <?php 
                            include_once './View/tratamientos.php';
                      ?>
            </div>
            <div id="quienesSomos">
                <?php 
                            include_once './View/quienesSomos.php';
                      ?>
            </div>
            <div id="mapa">
                <?php 
                            include_once './View/mapa.php';
                      ?>
            </div>
            <div id="oportunidad">
                <?php 
                            include_once './View/oportunidad.php';
                      ?>
            </div>
            <div id="footer">
                <?php 
                            include_once './View/footer.php';
                      ?>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
