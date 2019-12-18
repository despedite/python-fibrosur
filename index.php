<?php
    $myPDO = new PDO('sqlite:productos.db');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fibrosur Argentina</title>
    <meta name="description" content="El catálogo de todos nuestros productos hechos con fibrofácil: con precios, fotos y descripciones. ¡Ordená ahora!">
    <link rel="icon" type="image/jpeg" sizes="370x370" href="assets/logo.jpg">
    <link rel="icon" type="image/jpeg" sizes="370x370" href="assets/logo.jpg">
    <link rel="icon" type="image/jpeg" sizes="370x370" href="assets/logo.jpg">
    <link rel="icon" type="image/jpeg" sizes="370x370" href="assets/logo.jpg">
    <link rel="icon" type="image/jpeg" sizes="370x370" href="assets/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body style="padding-top: -112px;">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: #211a1d; position:fixed;">
    <script>
    (function($){
      $(document).on('contextmenu', function() {
          return false;
      })
    })(jQuery);
    $(document).keydown(function(e){
        if(e.which === 123){

               return false;

            }

        });
        
        document.getElementByClassName("imagen").addEventListener("click", function() {
  window.open(this.getAttribute("src"));
});
    </script>
    <noscript>
    <style>
        .imagen {display:none;}
    </style>
    </noscript>
    <div class="container-fluid"><img src="assets/logo.jpg" style="width: 48px;" /><strong class="text-left text-white" style="padding-left: 13px;">Catálogo</strong><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><i class="fa fa-plus"></i><span class="sr-only">Toggle navigation</span></button>
        <div
            class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navcol-1">
            <ul class="nav navbar-nav">
                <form class="form-inline">
                    <input class="form-control" id="searchbar" type="text" placeholder="Buscar" style="align:right;">
                </form>
                <li role="presentation" class="nav-item"><a class="nav-link active text-right" href="https://perfil.mercadolibre.com.ar/FIBROSUR+ARG" style="padding-left:25px;">Mercadolibre</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link text-right" href="https://www.facebook.com/fibrosurargentina/">Facebook</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link text-right" href="https://www.google.com/maps/dir//fibrosur+arg/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x95a327e2c4c23d2f:0x35912869c8999cac?sa=X&amp;ved=2ahUKEwiQvJPb9MvjAhXqEbkGHctrBucQ9RcwDHoECA4QEA">Google Maps</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link text-right" href="https://fibrosurarg.bss.design/">Pág. original</a></li>
            </ul>
    </div>
    </div>
</nav><div>Custom Code</div>
    <div class="highlight-clean">
        <div class="container" style="padding-top: 60px;">
            <div class="intro">
                <h2 class="text-center">FibroSur Argentina</h2>
                <p class="text-center">Desde hace 15 años fabricando artículos en Fibrofacil con dedicación y poniendo nuestro arte en cada pieza de excelente terminación y calidad.<br></p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="https://perfil.mercadolibre.com.ar/FIBROSUR+ARG">MERCADOLIBRE</a><a class="btn btn-light" role="button" href="https://www.facebook.com/fibrosurargentina/">FACEBOOK</a></div>
        </div><noscript>
<div role="alert" class="alert alert-warning" style="padding: 19px;margin: 54px;margin-right: 55px;margin-bottom: 0px;margin-top: 40px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>¡No tenés Javascript activado en tu navegador! </strong>Para prevenir el robo de imágenes, desactivamos las imágenes en este sitio web. <i>Si estás usando Google Chrome desde el celular, desactivá Modo Lite presionando los tres puntos </i><b>⋮</b><i> arriba a la derecha, "Datos Ahorrados" y presioná el interruptor azul para salir de Modo Lite.</i></span></div>
</noscript></div><div id="search">
    <div id="searchme">
        
        <!--ITEMS-->
        <?php
            $result = $myPDO->query("SELECT * FROM productos ORDER BY id DESC");
            foreach($result as $row)
                {
        ?>
        <div class="container col-md-10" style="padding-top: 16px;">
            <div class="card shadow-sm"><div class="row no-gutters bg-light position-relative">
    <div class="col-md-4 mb-md-0 p-md-4" style="overflow: hidden; height: 200px;">
        <img src=<?php print $row['imagen'] . "\n"; ?> class="w-100 clickable imagen">
    </div>
    <div class="col-md-8 position-static p-4 pl-md-0">
        <div class="card-block px-2">
            <h4 class="card-title" style="padding-top:20px;"><?php print $row['nombre'] . "\n"; ?></h4>
            <h6 class="card-subtitle mb-2 text-muted">$<?php print $row['precio'] . "\n"; ?></h6>
            <p class="card-text"><?php print $row['desc'] . "\n"; ?></p>
            <button type="button" class="btn btn-primary" onclick="window.location.href = 'https://wa.me/5491123886219';" disabled>Contactate en Whatsapp</button> <a href=<?php print $row['link'] . "\n"; ?> class="card-link text-secondary">Publicación en MercadoLibre</a>
            </div>
        </div>
    </div></div>
        </div>
    <?php } ?>
        
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social" style="padding-bottom: 0;"><a href="http://instagram.com/fibrosurarg"><i class="icon ion-social-instagram"></i></a><a href="https://perfil.mercadolibre.com.ar/FIBROSUR+ARG"><i class="icon ion-bag"></i></a><a href="https://www.facebook.com/fibrosurargentina/"><i class="icon ion-social-facebook"></i></a>
                <a
                    href="https://www.google.com/maps/dir//fibrosur+arg/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x95a327e2c4c23d2f:0x35912869c8999cac?sa=X&amp;ved=2ahUKEwiQvJPb9MvjAhXqEbkGHctrBucQ9RcwDHoECA4QEA"><i class="icon ion-map"></i></a>
            </div>
            <p class="copyright">FibroSur Argentina, <a href="http://erik.games">erik.games </a>© 2019</p>
        </footer>
    </div>
    <div class="media">
        <div class="media-body"></div>
    </div>
    <div></div><script>
$(document).ready(function(){
  $("#searchbar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#searchme .container").filter(function() {
      $(this).toggle($(this).find('h4').text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>