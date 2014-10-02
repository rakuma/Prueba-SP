<?php
session_start();
require_once('funciones.php');

conectar('localhost', 'root', '123456', 'paper_web');

if(isset($_SESSION['logged'])){
	$usuario = $_SESSION['user'];
	$id_usuario = $_SESSION['id'];
	$name = $_SESSION['nombre'];
	
} else {
	echo '<script>window.location="index.html"</script>';
}

/*$query = @mysql_query('SELECT * FROM users WHERE id="'.$id_usuario.'"');
if($existe = @mysql_fetch_array($query)){
	if($usuario == $existe['usuario']){
		$nombre_usuario = $existe['nombre'];
		$correo_usuario = $existe['correo'];
		$esSistemas = $existe['esSistemas'];
		$esEscolar = $existe['esEscolar'];
		
	} else {
		echo 'El usuario no Coincide, al parecer el ID si.';
	}
} else {
	echo 'no se encontro nada en la DB con las variables de SESSION.';
}*/

?>

<!DOCTYPE HTML>
<head>
<title>Sistemas Paper</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">
<?php
  include 'header.php';
?>
  <div class="clr"></div>
  <div class="hbg">
    <div class="hbg_resize">
      <h2>Sistemas Paper</h2>
      <p><strong>Bienvenidos a Sistemas Paper, pequeñas herramientas de ayuda para los colaboradores de Paper Depot.</strong></p>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie. Curabitur varius est et sem rhoncus et pretium massa molestie.</p>
      <p><a href="#"><img src="images/readmore.gif" width="112" height="33" alt="" border="0" /></a></p>-->
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <!--<div class="article">
          <h2>Template License</h2>
          <p>Posted by <a href="#">Owner</a> | Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <p>This is a free CSS website template by BlueWebTemplates. This work is distributed under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to BlueWebTemplates.com.</p>
          <p><a href="#">Read more</a> | <a href="#">Comments (5)</a> | March 16, 2015</p>
        </div>-->
        <div class="article">
          <h2>Bienvenido</h2>
          <p><?php 
			echo $name;
			?></p>
			
			
          <div style="float:right;">
				<a href="salir.php">
					<input type="button" value="Cerrar Session" name="salir" />
				</a>
		  </div>
		  
		  <div class="cont_menu">
				<div class="menu1">
					<?php
						
					?>
					<a href="sistemas.php?menu=1"> MENU 1</a>
                    <a href="sistemas.php?menu=2"> MENU 2</a>
				</div>
		  </div>
		  <p> Estamos en el area de Sistemas.</p>
        </div>
       
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Menu</h2>
          <ul class="sb_menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Website Templates</a></li>
          </ul>
        </div>
        <!--<div class="gadget">
          <h2 class="star">Sponsors</h2>
          <ul class="ex_menu">
            <li><a href="#">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="#">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="#">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="#">DreamStock</a><br />
              Download Amazing Stock Photos</li>
            <li><a href="#">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="#">MyVectorStore</a><br />
              Royalty Free Stock Icons</li>
          </ul>
        </div>-->
      </div>
      <div class="clr"></div>
    </div>
  </div>
 <?php
  include 'footer.php';
  ?>
</body>
</html>
