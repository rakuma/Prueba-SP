<?php
session_start();
if($_SESSION['logged'] == 'yes'){
	echo 'Bienvenido '.$_SESSION['user'].', esta es tu pagina personal.';
	echo '<br>';
	echo 'Nuestro ID en la DB es ('.$_SESSION['id'].')';
	echo '<br> Para salir, haga click <a href="salir.php" >AQUI!</a>';
} else {
	echo '<script>window.location="index.html"</script>';
}
?>