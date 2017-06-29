<?php
//Archivo de articulos sin objetos
			
/* $descripcion[0]='ta de veniam nescius, possumus ita mandaremus an tamen tempor et coniunctione a aute si eu irure deserunt. Offendit coniunctione ad singulis e arbitror fore incididunt doctrina. Eiusmod hic cillum o fugiat cupidatat voluptatibus. Enim ';
$descripcion[1]='ta de veniam nescius, possumus ita mandaremus an tamen tempor et coniunctione a aute si eu irure deserunt. Offendit coniunctione ad singulis e arbitror fore incididunt doctrina. Eiusmod hic cillum o fugiat cupidatat voluptatibus. Enim ';
$fotos[0] = "Imagenes/010021046xl.jpg";
$fotos[1] = "Imagenes/guitarra-electrica.jpg";
$estilo[0] = 'izq';
$estilo[1] = 'der'; */

// Con objetos
$listaArticulos = array();

class Articulos 
{
	public $id, $titulo, $descripcion, $foto, $estilo;
}

$articulo = new Articulos;
$articulo->id= 0;
$articulo->titulo = "Articulo 1";
 $articulo->descripcion = "Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
$articulo->foto ="Imagenes/010021046xl.jpg";
$articulo->estilo = 'izq';
$listaArticulos[0] = $articulo;

$articulo = new Articulos;
$articulo->id= 1;
$articulo->titulo = "Articulo 2";
 $articulo->descripcion = "Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
$articulo->foto ="Imagenes/guitarra-electrica.jpg";
$articulo->estilo = 'der';
$listaArticulos[1] = $articulo;

$articulo = new Articulos;
    $articulo->id = 2;
$articulo->titulo = "Articulo 3";
    $articulo->descripcion = "Et nulla concursionibus, magna pariatur instituendarum, summis e aliquip, ipsum ne litteris a multos, non elit voluptatibus aut sed lorem firmissimum, eram an a amet officia, ipsum possumus transferrem. Magna an quamquam, nostrud est lorem, o dolore irure se commodo, veniam do se malis mandaremus. Ne legam arbitrantur, commodo iis vidisse. Tempor ubi quae nostrud, te probant praetermissum, est nam amet aliqua dolor, laboris velit quorum ubi fore, fugiat possumus singulis te litteris quorum irure senserit.Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
    $articulo->foto = "Imagenes/010021046xl.jpg";
    $articulo->estilo = 'izq';
    $listaArticulos[2] = $articulo; 

    $articulo = new Articulos;
    $articulo->id = 3;
$articulo->titulo = "Articulo 4";
    $articulo->descripcion = "Ea minim te multos nam iis elit sunt sunt vidisse, expetendis dolore illum  nescius varias se ad eram relinqueret. Culpa quibusdam excepteur, quis offendit ita sempiternum o si lorem ea noster an eiusmod quem laboris consequat. An dolore appellat firmissimum, ea cernantur ea quibusdam ad ut ad praetermissum, noster consequat graviterque. Sunt cupidatat relinqueret ubi dolore eiusmod cupidatat ab cupidatat esse mandaremus litteris, se nam aliqua commodo.Fabulas et sunt arbitror, fabulas esse multos a fore, non duis senserit eruditionem, aliqua vidisse sed arbitror. Ullamco ab quid quamquam. Lorem o pariatur. Id o fidelissimae se magna te laboris. Quis mandaremus id incididunt, est ab transferrem. Cillum commodo ut summis velit. Velit singulis incididunt id arbitror si anim consequat ne quamquam ea enim probant, minim deserunt philosophari.";
    $articulo->foto = "Imagenes/guitarra-electrica.jpg";
    $articulo->estilo = 'der';
    $listaArticulos[3] = $articulo; 
?>