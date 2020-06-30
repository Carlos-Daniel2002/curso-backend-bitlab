<?php

require_once 'Movies.php';
require_once 'Series.php';
require_once 'Reseña1.php';
require_once 'Reseña2.php';
require_once 'Noticia1.php';
require_once 'Noticia2.php';
require_once 'Autor.php';
require_once 'Informacion_Basica.php';

$Movies = new Movies();
$Series = new Series();
$Reseña1 = new Reseña1();
$Reseña2 = new Reseña2();
$Noticia1 = new Noticia1();
$Noticia2 = new Noticia2();
$Autor = new Autor();
$Usuario= new Person();
$Usuario1= new Person();

//---------------------------------------------------------
$Autor->sayName1();
echo "<b><big>Su pelicula favorita seleccionada es:</big></b>";
echo "<br>-----------------------------------------------------------------------------<br>";
$Movies->saymoviename8();// si quiere marcar otra pelicula como favorita escriba $SMovies->saymoviename" "(); y el numero de la pelicula en este caso es del 1-15
$Reseña1->sayreseña8();//si quiere ver otra reseña escriba $Reseña1->sayreseña " "(); y el numero de la pelicula que esta viendo.
$Noticia1->saynoticia8();//si quiere ver otra noticia escriba $Noticia1->saynoticia " "(); y el numero de la pelicula que esta viendo.

//---------------------------------------------------------
echo "<br>-----------------------------------------------------------------------------<br>";

$Usuario->password = "10"; //contraseña dada por el autor de la reseña
$Usuario->name = "Juan";
$Usuario->age = 15;
$Usuario->comment = "Me gusta este sitio 10 de 10 de calificacion amigo";
$Usuario->favorites = "Me gusta esta reseña y esta noticia";
$Usuario->calificacion=5;
//$Usuario->nofavorites = "NO Me gusta esta reseña y esta noticia";
$Usuario->password();
$Usuario->sayName();
$Usuario->sayAge();
$Usuario->comment();
$Usuario->favorites();
//$Usuario->nofavorites();
$Usuario->calificacion();

$Autor->sayName2();
echo "<b><big>Su Serie favorita selecciona es:</big></b>";
echo "<br>-----------------------------------------------------------------------------<br>";
$Series->sayseriename10(); // si quiere marcar otra serie como favorita escriba $Series->sayserie" "(); y el numero de la pelicula en este caso es del 1-15
$Reseña2->sayreseña10();//si quiere ver otra reseña escriba $Reseña2->sayreseña " "(); y el numero de la serie que esta viendo.
$Noticia2->saynoticia10();//si quiere ver otra noticia escriba $Noticia2->saynoticia " "(); y el numero de la noticia que esta viendo.
//---------------------------------------------------------
echo "<br>-----------------------------------------------------------------------------<br>";

$Usuario1->password = "10"; //contraseña dada por el autor de la reseña
$Usuario1->name = "Alexis";
$Usuario1->age = 25;
$Usuario1->comment = "Excelente trabajo";
$Usuario1->favorites = "Me gusta esta reseña y esta noticia estan increibles";
$Usuario1->calificacion=5; 
//$Usuario1->nofavorites = "NO Me gusta esta reseña y esta noticia";
$Usuario1->password();
$Usuario1->sayName();
$Usuario1->sayAge();
$Usuario1->comment();
$Usuario1->favorites();
//$Usuario1->nofavorites();
$Usuario1->calificacion();





