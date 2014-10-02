

<?php
session_start();
if($_SESSION['logged'] == 'yes'){
	echo 'Bienvenido '.$_SESSION['user'].', esta es tu pagina personal.';
	echo '<br>';
	echo 'Nuestro ID en la DB es ('.$_SESSION['id'].')';
	
	
	if(session_destroy()){
		echo '<script>window.location="index.html"</script>';
	} else {
		echo 'Aun no ha cerrado la session.';
	}	
} else {
	echo '<script>window.location="index.html"</script>';
}
?>