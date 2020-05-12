<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<meta name="keywords" content="WOLVES GROUP" />
<meta name="description" content="Movimiento de Personal - Template maked bye Wolves Group" />
<meta name="author" content="Wolves Group" />
<meta name="msapplication-TileColor" content="#da532c"/>
<meta name="theme-color" content="#ffffff"/>
<title></title>
<?php
	/*=======================================================
	=            Mantener Ruta fija del proyecto            =
	=======================================================*/
	$url = Ruta::ctrRuta();
	/*=====  End of Mantener Ruta fija del proyecto  ======*/
    /*header('Content-type: image/jpeg;');*/
?>

<!--  Otros  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<!-- Favicon -->

<!-- dropzone -->

<!-- bootstrap -->

<!-- mega menu -->

<!-- font-awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<!-- Flaticon -->

<!-- Google Fonts -->


<!-- main style -->

<link href="<?php echo $url; ?>vista/css/cabezote.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/inicio.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/error404.css" rel="stylesheet" type="text/css" />

<!-- datatables -->

<!-- jquery  -->

</head>
    
<body>
	
<?php
	/*================================
	=            Cabezote            =
	================================*/

	include "modulos/cabezote.php";
	include "modulos/footer.php";
    /*=====  End of Cabezote  ======*/

    $rutas = array();
	$ruta = null;
	
    if (isset($_GET["ruta"])) {
        $rutas = explode("/", $_GET["ruta"]);
         if($rutas[0] == "" || $rutas[0] == "inicio"){
			include "modulos/inicio.php";
		} else {
			include "modulos/error404.php";
		}
	} else {
		include "modulos/inicio.php";
	}
?>
<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

<script src="<?php echo $url; ?>vista/js/plantilla.js"></script>
<!--=================================
 jquery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>



<script src="<?php echo $url; ?>vista/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vista/js/inicio.js"></script>
<script src="<?php echo $url; ?>vista/js/inicio2.js"></script>
<script src="<?php echo $url; ?>vista/js/footers.js"></script>
<script src="<?php echo $url; ?>vista/js/login.js"></script>
<script src="<?php echo $url; ?>vista/js/userselect.js"></script>
<script src="<?php echo $url; ?>vista/js/linewhiteboard.js"></script>
<script src="<?php echo $url; ?>vista/js/linetime.js"></script>
<script src="<?php echo $url; ?>vista/js/lineproblemsolving.js"></script>

<script>
	(function() {
		[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
			new CBPFWTabs( el );
		});
	})();
</script>
</body>
</html>