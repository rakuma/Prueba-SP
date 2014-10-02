<?php
session_start();
require_once('funciones.php');

conectar('localhost', 'root', '123456', 'paper_web');

//Recibir
$user = strip_tags($_POST['user']);
$pass = strip_tags($_POST['pass']);
//$pass = strip_tags(md5($_POST['pass']));

$query = @mysql_query('SELECT * FROM users WHERE usuario="'.mysql_real_escape_string($user).'" AND password="'.mysql_real_escape_string($pass).'"');
if($existe = @mysql_fetch_array($query)){
	//
	$_SESSION['logged'] = 'yes';
	$_SESSION['user'] = $user;
	$_SESSION['id'] = $existe['id'];
	echo '<script>window.location="home.php"</script>';
} else {
	echo 'El usuario y/o la contraseña son incorrectos.';
}

?>