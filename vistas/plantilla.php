<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo CampasCorp; ?></title>
	<?php include "./vistas/inc/Link.php"; ?>
</head>
<body>
	<?php
		$peticionAjax=false;
		require_once "./controladores/vistasControlador.php";
		$IV = new vistasControlador();

		$vistas=$IV->obtener_vistas_controlador();

		if($vistas=="login" || $vistas=="404"){
			require_once "./vistas/contenidos/".$vistas."-view.php";
		}else{


	?>


	<!-- Main container -->
	<main class="full-box page-container">
		<!-- Nav lateral -->
		<?php include "./vistas/inc/NavLateral.php"; ?>

		<!-- Page Content -->
		<section class="full-box page-content">
			<?
				include "./vistas/inc/NavBar.php";
				include $vistas;
			?>
		</section>
	</main>
	<?php 
		}
		include "./vistas/inc/Script.php"; 
	?>
</body>
</html>