<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="paginaCSS2.CSS">
    <title></title>
</head>
<body>
    <div id="wrapper">
    	<header>
        	<div id="titulo"><a href="index.php">Guitarras electricas</a></div>
        	<div id="subtitulo">El arte de la musica virtuosa.</div> 
        	<nav>
            	<ul>
                	<li><a href="index.php"> Guitarras</a> </li>
					<li> Amplificadores </li>
                	<li> Accesorios </li>
                	<li> <a href="contacto.html">Contacto</a> </li> 
            	</ul>
     		</nav>       
    	</header>
   		<section>
            <div id="artDetalle">
                <?php
                    include_once "articulos.php";
                    $art = new Articulos;
                    $indice = $_GET['indice'];
                    $art = $listaArticulos[$indice];
					echo "<h3>$art->titulo</h3>";
                    echo '<div style="height:300px; width:auto; position:relative; background-image: url( '.$art->foto.'); background-size:cover; background-position:center;"></div>';
                    echo "$art->descripcion<br/>";
                ?>
            </div>
        </section>
    	<footer>       
        	<div id="textoFooter">
            	<p>Contacto:</p>
            	<p>Av. Mitre 456 - Mina Clavero</p>
            	<p>Cordoba - Argentina</p>
				<p>rubendiablorojo1995@gmail.com</p>
			</div>
			<div id="redesFooter">
				<a href="http://www.facebook.com" target="_blank"><img src="Imagenes/facebook.png"/></a>
				<a href="http://www.twitter.com" target="_blank"><img src="Imagenes/twitter.png"/></a>
            	<a href="https://www.instagram.com/" target="_blank"><img src="Imagenes/instagram.png"/></a>
				<a href="http://www.youtube.com" target="_blank"><img src="Imagenes/YouTube.png"/></a>
        	</div>
    	</footer>
    </div>
</body>
</html>
