<?php

class Reseña1
{
    public $reseña1 = 'The maze runner1';
    public $reseña2 = 'UP la casa flotante';
    public $reseña3 = 'Buscando a Doris';
    public $reseña4 = 'En busca de la felicidad';
    public $reseña5 = 'Los 3 chiflados';
    public $reseña6 = 'Soy leyenda';
    public $reseña7 = 'El santo, el diablo y el tonto "Vicente Fernandez"';
    public $reseña8 = 'Jumanji';
    public $reseña9 = 'Focus';
    public $reseña10 = 'Guardianes de la Galaxia Vol.1';
    public $reseña11 = 'Guardianes de la Galaxia Vol.2';
    public $reseña12 = 'COCO';
    public $reseña13 = 'La delgada linea roja';
    public $reseña14 = 'Hasta el ultimo hombre';
    public $reseña15 = 'JOKER';
   //-----------------------------------------------------------------------
   public $actor1 = 'Dylan OBrien';
   public $actor2 = 'Carl Fredricksen';
   public $actor3 = 'Ellen DeGeneres';
   public $actor4 = 'Will smith';
   public $actor5 = 'Chris Diamantopoulos';
   public $actor6 = 'Will smith';
   public $actor7 = 'Vicente Fernandez';
   public $actor8 = 'Dwayne Johnson';
   public $actor9 = 'Will smith';
   public $actor10 = 'Chris Pratt';
   public $actor11 = 'Chris Pratt';
   public $actor12 = 'Anthony Gonzalez';
   public $actor13 = 'Jim Caviezel';
   public $actor14 = 'Andrew Garfield';
   public $actor15 = 'Joaquin Phoenix';
   //------------------------------------------------------------------------------
  public $director1 = 'Wes Ball';
  public $director2 = 'Pete Docter';
  public $director3 = 'Andrew Stanton';
  public $director4 = 'Gabriele Muccino';
  public $director5 = 'Bobby Farrelly';
  public $director6 = 'Francis Lawrence';
  public $director7 = 'Rafael Villaseñor Kuri';
  public $director8 = 'Jake Kasdan';
  public $director9 = 'Glenn Ficarra';
  public $director10 = 'James Gunn';
  public $director11 = 'James Gunn';
  public $director12 = 'Adrian Molina y Lee Unkrich';
  public $director13 = 'Terrence Malick';
  public $director14 = 'Mel Gibson';
  public $director15 = 'Todd Phillips';    
   //--------------------------------------------------------------------------------    
   public $guionista1 = 'T.S. Nowlin';
   public $guionista2 = 'Bob Peterson y Thomas McCarthy';
   public $guionista3 = '‎Andrew Stanton';
   public $guionista4 = 'Steven Conrad';
   public $guionista5 = 'Mike Cerrone';
   public $guionista6 = 'Akiva Goldsman y Mark Protosevich';
   public $guionista7 = 'Adolfo Torres Portillo';
   public $guionista8 = ' Jeff Pinkner';
   public $guionista9 = 'John Requa';
   public $guionista10 = 'Dan Abnett';
   public $guionista11 = 'Dan Abnett';
   public $guionista12 = 'Matthew Aldrich';
   public $guionista13 = 'Terrence Malick';
   public $guionista14 = 'Randall Wallace,Andrew Knight y Robert Schenkkan';
   public $guionista15 = 'Scott Silver';    
   //--------------------------------------------------------------------------------  
    public $cumpleañero1 = '26 de agosto';
    public $cumpleañero2 = '29 de octubre';
    public $cumpleañero3 = '26 de enero';
    public $cumpleañero4 = '25 de septiembre';
    public $cumpleañero5 = '9 de mayo';
    public $cumpleañero6 = '25 de septiembre';
    public $cumpleañero7 = '17 de febrero';
    public $cumpleañero8 = '2 de mayo';
    public $cumpleañero9 = '25 de septiembre';
    public $cumpleañero10 = '21 de junio';
    public $cumpleañero11 = '21 de junio';
    public $cumpleañero12 = '23 de septiembre';
    public $cumpleañero13 = '26 de septiembre';
    public $cumpleañero14 = '20 de agosto';
    public $cumpleañero15 = '28 de octubre';
    //-------------------------------------------------------------------------------- 

    public function sayreseña1()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña1} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña1} es {$this->actor1}</small>";
        echo "<br><small>-El actor {$this->actor1} protagonista de  la pelicula {$this->reseña1} cumpleaños el día {$this->cumpleañero1}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña1} es {$this->director1}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña1} es {$this->guionista1}</small>";
    }
    public function sayreseña2()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña2} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña2} es {$this->actor2}</small>";
        echo "<br><small>-El actor {$this->actor2} protagonista de  la pelicula {$this->reseña2} cumpleaños el día {$this->cumpleañero2}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña2} es {$this->director2}</small>";
        echo "<br><small>-Los nombres de los guionista de la pelicula {$this->reseña2} son {$this->guionista2}</small>";
        
    }
    public function sayreseña3()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña3} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña3} es {$this->actor3}</small>";
        echo "<br><small>-El actor {$this->actor3} protagonista de  la pelicula {$this->reseña3} cumpleaños el día {$this->cumpleañero3}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña3} es {$this->director3}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña3} es {$this->guionista3}</small>";
    }
    public function sayreseña4()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña4} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña4} es {$this->actor4}</small>";
        echo "<br><small>-El actor {$this->actor4} protagonista de  la pelicula {$this->reseña4} cumpleaños el día {$this->cumpleañero4}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña4} es {$this->director4}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña4} es {$this->guionista4}</small>";
    }
    public function sayreseña5()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña5} es</u>:</b> ";
        echo "<br><small>-Los nombres de los actores principales de la pelicula {$this->reseña5} es {$this->actor5}</small>";
        echo "<br><small>-El actor {$this->actor5} protagonista de  la pelicula {$this->reseña5} cumpleaños el día {$this->cumpleañero5}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña5} es {$this->director5}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña5} es {$this->guionista5}</small>";
    }
    public function sayreseña6()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña6} es</u>:</b>";
        echo "<br><small>El nombre del actor principal de la pelicula {$this->reseña6} es {$this->actor6}</small>";
        echo "<br><small>-El actor {$this->actor6} protagonista de  la pelicula {$this->reseña6} cumpleaños el día {$this->cumpleañero6}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña6} es {$this->director6}</small>";
        echo "<br><small>-Los nombres de los guionista de la pelicula {$this->reseña6} son {$this->guionista6}</small>";
    }
    public function sayreseña7()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña7} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña7} es {$this->actor7}</small>";
        echo "<br><small>-El actor {$this->actor7} protagonista de  la pelicula {$this->reseña7} cumpleaños el día {$this->cumpleañero7}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña7} es {$this->director7}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña7} es {$this->guionista7}</small>";
    }
    public function sayreseña8()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña8} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña8} es {$this->actor8}</small>";
        echo "<br><small>-El actor {$this->actor8} protagonista de  la pelicula {$this->reseña8} cumpleaños el día {$this->cumpleañero8}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña8} es {$this->director8}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña8} es {$this->guionista8}</small>";
    }
    public function sayreseña9()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña9} es</u>:</b>";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña9} es {$this->actor9}</small>";
        echo "<br><small>-El actor {$this->actor9} protagonista de  la pelicula {$this->reseña9} cumpleaños el día {$this->cumpleañero9}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña9} es {$this->director9}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña9} es {$this->guionista9}</small>";
    }
    public function sayreseña10()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña10} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña10} es {$this->actor10}</small>";
        echo "<br><small>-El actor {$this->actor10} protagonista de  la pelicula {$this->reseña10} cumpleaños el día {$this->cumpleañero10}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña10} es {$this->director10}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña10} es {$this->guionista10}</small>";
    }
    public function sayreseña11()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña11} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña11} es {$this->actor11}</small>";
        echo "<br><small>-El actor {$this->actor11} protagonista de  la pelicula {$this->reseña11} cumpleaños el día {$this->cumpleañero11}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña11} es {$this->director11}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña11} es {$this->guionista11}</small>";
    }
    public function sayreseña12()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña12} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña12} es {$this->actor12}</small>";
        echo "<br><small>-El actor {$this->actor12} protagonista de  la pelicula {$this->reseña12} cumpleaños el día {$this->cumpleañero12}</small>";
        echo "<br><small>-Los nombres de los directores de la pelicula {$this->reseña12} son {$this->director12}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña12} es {$this->guionista12}</small>";
    }
    public function sayreseña13()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña13} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña13} es {$this->actor13}</small>";
        echo "<br><small>-El actor {$this->actor13} protagonista de  la pelicula {$this->reseña13} cumpleaños el día {$this->cumpleañero13}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña13} es {$this->director13}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña13} es {$this->guionista13}</small>";
    }
    public function sayreseña14()
    {
        echo "<br><br><u><b>La reseña de la Pelicula {$this->reseña14} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña14} es {$this->actor14}</small>";
        echo "<br><small>-El actor {$this->actor14} protagonista de  la pelicula {$this->reseña14} cumpleaños el día {$this->cumpleañero14}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña14} es {$this->director14}</small>";
        echo "<br><small>-Los nombres de los guionista de la pelicula {$this->reseña14} son {$this->guionista14}</small>";
    }
    public function sayreseña15()
    {
        echo "<br><br><u><b>La reseña de la Pelicula  {$this->reseña15} es</u>:</b> ";
        echo "<br><small>-El nombre del actor principal de la pelicula {$this->reseña15} es {$this->actor15}</small>";
        echo "<br><small>-El actor {$this->actor15} protagonista de  la pelicula {$this->reseña15} cumpleaños el día {$this->cumpleañero15}</small>";
        echo "<br><small>-El nombre del director de la pelicula {$this->reseña15} es {$this->director15}</small>";
        echo "<br><small>-El nombre del guionista de la pelicula {$this->reseña15} es {$this->guionista15}</small>";
    }
    //-------------------------------------------------------------------------------
}
