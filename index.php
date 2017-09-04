<!--<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
disable iPhone inital scale 
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>I. T. Tlaxiaco</title>
<meta description="Instituto tecnol&oacute;gico de Tlaxiaco, concurso de programaci&oacute;n"/>
<!-- main css 
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- media queries css
<link href="css/media-queries.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>

<script type="text/javascript">

		  $(document).ready(function(){
		 
		  	//Ejemplo 3
		  	$("#bady2").click(function(event){

		  		$("#content").load('ejemplo2.php',{
		  			'nombre':'librado Sarmiento ','edad':23
		  		});
		  	});
		  	//reinicioar contenido
		  	$(".reiniciar").click(function(){
		  		$(this).next('.recargar').html('Aqui se cargara el contenido');
		  	});
		  });
		</script>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">
<div id="pagewrap">
	<header id="header">
		<hgroup>
			<h1 id="site-logo"><a href="#">Concurso de Programación 2016</a></h1>
			<h2 id="site-description">Sistemas y Computación</h2>
		</hgroup>
		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a href="slaider.php" target="Zona1" >Home</a></li>
				<li><a href="home.html" target="Zona1" >Convocatoria</a></li>
				<li><a href="formulario.php" target="Zona1">Registro</a></li>
				<li><a href="busqueda.php" target="Zona1">Busqueda</a></li>
				<li><a href="marquezina.php" target="Zona1">Marquezina</a></li>
			</ul>
			<!-- /#main-nav  
		</nav>
		<form id="searchform">
			<input type="search" id="s" placeholder="Search">
		</form>
	</header>
	<!-- /#header 
	<hr>
	
	
	<div id="content" > 
		<!--iframe width="100%" height="1090px" src="home.html" name="cont" frameborder="0" padding="0px" allowfullscreen></iframe	
	<iframe  src="slaider.php" name="Zona1" width="100%" height="100%"></iframe>	

	</div>
	<!-- /#content 	
	<aside id="sidebar">
		<section class="widget">
			<h4 class="widgettitle">Informaci&oacute;n</h4>
			<ul>
				<li><a href="#">Directorio</a> (3)</li>
				<li><a href="#">Ubicaci&oacute;n</a> (23)</li>
				<li><a href="#">Ejemplos</a>(18)</li>
			</ul>
		</section>
		<!-- /.widget 
		<section class="widget clearfix">
			<h4 class="widgettitle">Galer&iacute;a</h4>
			<script type="text/javascript" src="css/galeria.js"></script> 
		</section>
		<!-- /.widget 						
	</aside>
	<!-- /#sidebar 
	<footer id="footer">	
		<p><a href="http://www.ittlaxiaco.edu.mx">www.ittlaxiaco.edu.mx</a></p>
	</footer>
	<!-- /#footer 	
</div>
<!-- /#pagewrap 
</body>
</html>-->

<?php

/*
 * Copyright 2015 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// [START index_php]
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function () {
    return 'Hello World ';
});

$app->get('/goodbye', function () {
    return 'Goodbye World';
});

// @codeCoverageIgnoreStart
if (PHP_SAPI != 'cli') {
    $app->run();
}
// @codeCoverageIgnoreEnd

return $app;
// [END index_php]
?>