<?php
function conectar($servidor, $user, $pass, $db){
	$con = @mysql_connect($servidor, $user, $pass);
	@mysql_select_db($db,$con);

}

function seleccionar($depto){
	$sistemas = 1;
	$escolar = 2;
	if($depto == $sistemas){
		echo '<a href="sistemas.php"> Sistemas </a>';
	} else if($depto == $escolar){
		echo '<a href="escuelas.php"> Escuelas </a>';
	}
}

function menu($id){
	if($id == 1){
		echo 'Mostramos el menu 1';
	} else if($id == 2){
		echo 'Mostramos el menu 2';
	} else if($id == 3){
		echo 'Mostramos el menu 3';
	} else {
		echo 'Error de Sistema.';	
	}
}
?>