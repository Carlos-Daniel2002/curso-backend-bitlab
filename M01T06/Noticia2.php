<?php

class Noticia2
{
    public $noticia1 = 'Juegos de tronos';
    public $noticia2 ='La casa de papel';
    public $noticia3 = 'Friends';
    public $noticia4 = 'The big bang Theory';
    public $noticia5 = '2 Hombres y Medio';
    public $noticia6 = 'El ultimo baile';
    public $noticia7 = 'YOU';
    public $noticia8 = 'The Good Doctor';
    public $noticia9 = 'Stranger things';
    public $noticia10 = 'Narcos';
    public $noticia11 = 'Drake & Josh';
    public $noticia12 = 'La vida secreta de ricko';
    public $noticia13 = 'The strangers';
    public $noticia14 = 'The Boys';
    public $noticia15 = 'House';
     //-------------------------------------------------------------------------------
     public $temporada1 = '8 temporadas'; 
     public $temporada2 ='2 temporadas'; 
     public $temporada3 = '10 temporadas';
     public $temporada4 = '12 temporadas'; 
     public $temporada5 = '12 temporadas'; 
     public $temporada6 = '1 temporada';
     public $temporada7 = '2 temporadas'; 
     public $temporada8 = '3 temporadas'; 
     public $temporada9 = '3 temporadas'; 
     public $temporada10 = '3 temporadas';
     public $temporada11 = '4 temporadas';
     public $temporada12 = '4 temporadas';
     public $temporada13 = '1 temporada'; 
     public $temporada14 = '1 temporada'; 
     public $temporada15 = '8 temporadas';
       //-------------------------------------------------------------------------------
     public $episodio1 = '76 episodios';
     public $episodio2 ='31 episodios';
     public $episodio3 = '163 episodios';
     public $episodio4 = '232 episodios';
     public $episodio5 = '262 episodios';
     public $episodio6 = '5 episodios';
     public $episodio7 = '20 episodios';
     public $episodio8 = '20 episoidos'; 
     public $episodio9 = '25 episodios'; 
     public $episodio10 = '30 episodios';
     public $episodio11 = '60 episodios'; 
     public $episodio12 = '52 episodios';
     public $episodio13 = '8 episodios';
     public $episodio14 = '18 episodios'; 
     public $episodio15 = '177 episodios'; 
     //-----------------------------------------------------------------------
    public $actor1 = 'Emilia Clarke y Kit Harington';
    public $actor2 = 'Álvaro Morte';
    public $actor3 = 'Jennifer Aniston,Courteney Cox,Matthew Perry,Lisa Kudrow,David Schwimmer y Matt LeBlanc';
    public $actor4 = 'Jim Parsons';
    public $actor5 = 'Charlie Sheen y Ashton Kutcher';
    public $actor6 = 'Michael Jordan ';
    public $actor7 =  'Penn Badgley';
    public $actor8 = 'Freddie Highmore';
    public $actor9 = 'Millie Bobby Brown,Finn Wolfhard,Noah Schnapp y Gaten Matarazzo';
    public $actor10 = 'Wagner Moura';
    public $actor11 = 'Drake Bell y Josh Peck';
    public $actor12 = 'Louis C.K.';
    public $actor13 = 'Scott Speedman';
    public $actor14 = 'Antony Starr';
    public $actor15 = 'Hugh Laurie';
     //------------------------------------------------------------------------------
    public $director1 = 'David Benioff y D. B. Weiss';
    public $director2 = 'Jesús Colmenar';
    public $director3 = 'Kevin S. Bright';
    public $director4 = 'Mark Cendrowski';
    public $director5 = 'James Widdoes';
    public $director6 = 'Jason Hehir';
    public $director7 = 'Greg Berlanti y Sera Gamble';
    public $director8 = 'David Shore y Daniel Dae Kim';
    public $director9 = 'Matt Duffer';
    public $director10 = 'José Padilha';
    public $director11 = 'Joe Catania Bruce';
    public $director12 = 'Joe Murray';
    public $director13 = 'Daniel OHara y hannah quinn';
    public $director14 = 'Garth Ennis y Darick Robertson';
    public $director15 = 'David Shore';    
    //--------------------------------------------------------------------------------  
    public $guionista1 = 'David Benioff';
    public $guionista2 = 'Álex Pina,alex rodrigo y Esther Martínez';
    public $guionista3 = 'David Crane';
    public $guionista4 = 'Chuck Lorre';
    public $guionista5 = 'Chuck Lorre';
    public $guionista6 = 'Michael Tollin';
    public $guionista7 = 'Sera Gamble,Greg Berlanti,Caroline Kepnes,etc';
    public $guionista8 = ' Matty';
    public $guionista9 = 'John Requa';
    public $guionista10 = 'Chris Brancato,Eric Newman y Andrew Black';
    public $guionista11 = 'Wagner Moura';
    public $guionista12 = 'M. Night Shyamalan';
    public $guionista13 = 'Ross Duffer';
    public $guionista14 = 'Garth Ennis y Eric Kripke';
    public $guionista15 = 'Garrett Lerner';    
    //--------------------------------------------------------------------------------  
      
    public $cumpleañero1 = '23 de octubre';
    public $cumpleañero2 = '23 de febrero';
    public $cumpleañero3 = '11 de febrero,15 de junio,19 de agosto,30 de julio,2 de noviembre y 25 de julio, ';
    public $cumpleañero4 = '24 de marzo ';
    public $cumpleañero5 = '3 de septiembre y 7 de febrero';
    public $cumpleañero6 = '17 de febrero';
    public $cumpleañero7 = '1 de noviembre';
    public $cumpleañero8 = '14 de febrero';
    public $cumpleañero9 = '23 de diciembre';
    public $cumpleañero10 = '27 de junio';
    public $cumpleañero11 = '27 de junio y 10 de noviembre';
    public $cumpleañero12 = '12 de septiembre';
    public $cumpleañero13 = '1 de septiembre';
    public $cumpleañero14 = '25 de octubre';
    public $cumpleañero15 = '11 de junio';
    //-------------------------------------------------------------------------------- 
   
   

    public function saynoticia1()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia1} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia1} consta de {$this->temporada1} y {$this->episodio1} </small>";
        echo "<br><small>-Los nombres de los actores principales de la serie {$this->noticia1} son {$this->actor1}</small>";
        echo "<br><small>-El actor {$this->actor1} protagonista de  la serie {$this->noticia1} cumpleaños el día {$this->cumpleañero1}</small>";
        echo "<br><small>-Los nombres de los directores de la serie {$this->noticia1} de las {$this->temporada1} son {$this->director1}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia1} de las {$this->temporada1} es {$this->guionista1}</small>";
    }
    public function saynoticia2()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia2} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia2} consta de {$this->temporada2} y {$this->episodio2} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia2} es {$this->actor2}</small>";
        echo "<br><small>-El actor {$this->actor2} protagonista de  la serie {$this->noticia2} cumpleaños el día {$this->cumpleañero2}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia2} de las {$this->temporada2} es {$this->director2}</small>";
        echo "<br><small>-Los nombres de los guionistas de la serie {$this->noticia2} de las {$this->temporada2} son {$this->guionista2}</small>";
    }
    public function saynoticia3()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia3} es</i>:</b>";
        echo "<br><small>-La serie{$this->noticia3} consta de {$this->temporada3} y {$this->episodio3} </small>";
        echo "<br><small>-Los nombres de los actores principales de la serie {$this->noticia3} son {$this->actor3}</small>";
        echo "<br><small>-los actores {$this->actor3} protagonistas de la serie {$this->noticia3} cumplen años los dias {$this->cumpleañero3}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia3} de las {$this->temporada3} es {$this->director3}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia3} de las {$this->temporada3} es {$this->guionista3}</small>";
    }
    public function saynoticia4()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia4} es</i>:</b>";
        echo "<br><small>-La serie {$this->noticia4} consta de {$this->temporada4} y {$this->episodio4} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia4} es {$this->actor4}</small>";
        echo "<br><small>-El actor {$this->actor4} protagonista de  la serie {$this->noticia4} cumpleaños el día {$this->cumpleañero4}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia4} de las {$this->temporada4} es {$this->director4}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia4} de las {$this->temporada4} es {$this->guionista4}</small>";
    }
    public function saynoticia5()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia5} es</i>:</b>";
        echo "<br><small>-La serie {$this->noticia5} consta de {$this->temporada5} y {$this->episodio5} </small>";
        echo "<br><small>-Los nombres de los actores principales de la serie {$this->noticia5} son {$this->actor5}</small>";
        echo "<br><small>-los actores {$this->actor5} protagonistas de la serie {$this->noticia5} cumplen años los dias {$this->cumpleañero5}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia5} de las {$this->temporada5} es {$this->director5}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia5} de las {$this->temporada5} es {$this->guionista5}</small>";
    }
    public function saynoticia6()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia6} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia6} consta de {$this->temporada6} y {$this->episodio6} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia6} es {$this->actor6}</small>";
        echo "<br><small>-El actor {$this->actor6} protagonista de  la serie {$this->noticia6} cumpleaños el día {$this->cumpleañero6}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia6} de la {$this->temporada6} es {$this->director6}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia6} de las {$this->temporada6} es {$this->guionista6}</small>";
    }
    public function saynoticia7()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia7} es</i>:</b>";
        echo "<br><small>-La serie {$this->noticia7} consta de {$this->temporada7} y {$this->episodio7} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia7} es {$this->actor7}</small>";
        echo "<br><small>-El actor {$this->actor7} protagonista de  la serie {$this->noticia7} cumpleaños el día {$this->cumpleañero7}</small>";
        echo "<br><small>-Los nombres de los directores de la serie {$this->noticia7} de las {$this->temporada7} son {$this->director7}</small>";
        echo "<br><small>-Los nombres de los guionistas de la serie {$this->noticia7} de las {$this->temporada7} son {$this->guionista7}</small>";
    }
    public function saynoticia8()
    {

        echo "<br><i><b>La noticia de la serie {$this->noticia8} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia8} consta de {$this->temporada8} y {$this->episodio8} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia8} es {$this->actor8}</small>";
        echo "<br><small>-El actor {$this->actor8} protagonista de  la serie {$this->noticia8} cumpleaños el día {$this->cumpleañero8}</small>";
        echo "<br><small>-Los nombres de los directores de la serie {$this->noticia8} de las {$this->temporada8} son {$this->director8}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia8} de las {$this->temporada8} es {$this->guionista8}</small>";
    }
    public function saynoticia9()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia9} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia9} consta de {$this->temporada9} y {$this->episodio9} </small>";
        echo "<br><small>-Los nombres de los actores principales de la serie {$this->noticia9} son {$this->actor9}</small>";
        echo "<br><small>-El actor {$this->actor9} protagonista de  la serie {$this->noticia9} cumpleaños el día {$this->cumpleañero9}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia9} de las {$this->temporada9} es {$this->director9}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia9} de las {$this->temporada9} es {$this->guionista9}</small>";
    }
    public function saynoticia10()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia10} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia10} consta de {$this->temporada10} y {$this->episodio10} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia10} es {$this->actor10}</small>";
        echo "<br><small>-El actor {$this->actor10} protagonistas de la serie {$this->noticia10} cumpleaños los dias {$this->cumpleañero10}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia10} de las {$this->temporada10} es {$this->director10}</small>";
        echo "<br><small>-Los nombres de los guionistas de la serie {$this->noticia10} de las {$this->temporada10} son {$this->guionista10}</small>";
    }
    public function saynoticia11()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia11} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia11} consta de {$this->temporada11} y {$this->episodio11} </small>";
        echo "<br><small>-Los nombres de los actores principales de la serie {$this->noticia11} es {$this->actor11}</small>";
        echo "<br><small>-Los actores {$this->actor11} protagonista de  la serie {$this->noticia11} cumplen años el día {$this->cumpleañero11}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia11} de las {$this->temporada11} son {$this->director11}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia11} de las {$this->temporada11} es {$this->guionista11}</small>";
    }
    public function saynoticia12()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia12} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia12} consta de {$this->temporada12} y {$this->episodio12} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia12} es {$this->actor12}</small>";
        echo "<br><small>-El actor {$this->actor12} protagonista de  la serie {$this->noticia12} cumpleaños el día {$this->cumpleañero12}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia12} de las {$this->temporada12} es {$this->director12}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia12} de las {$this->temporada12} es {$this->guionista12}</small>";
    }
    public function saynoticia13()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia13} es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia13} consta de {$this->temporada13} y {$this->episodio13} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia13} es {$this->actor13}</small>";
        echo "<br><small>-El actor {$this->actor13} protagonista de  la serie {$this->noticia13} cumpleaños el día {$this->cumpleañero13}</small>";
        echo "<br><small>-Los nombres de los directores de la serie {$this->noticia13} de la {$this->temporada13} son {$this->director13}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia13} de las {$this->temporada13} es {$this->guionista13}</small>";

    }
    public function saynoticia14()
    {
        echo "<br><i><b>La noticia de la serie {$this->noticia14} es</i>:</b>  ";
        echo "<br><small>-La serie {$this->noticia14} consta de {$this->noticia14} y {$this->episodio14} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia14} es {$this->actor14}</small>";
        echo "<br><small>-El actor {$this->actor14} protagonista de  la serie {$this->noticia14} cumpleaños el día {$this->cumpleañero14}</small>";
        echo "<br><small>-Los nombres de los directores de la serie {$this->noticia14} de la {$this->temporada14} son {$this->director14}</small>";
        echo "<br><small>-Los nombres de los guionistas de la serie {$this->noticia14} de las {$this->temporada14} son {$this->guionista14}</small>";
    }
    public function saynoticia15()
    {
        echo "<br><i><b>La noticia de la serie  {$this->noticia15}es</i>:</b> ";
        echo "<br><small>-La serie {$this->noticia15} consta de {$this->temporada15} y {$this->episodio15} </small>";
        echo "<br><small>-El nombre del actor principal de la serie {$this->noticia15} es {$this->actor15}</small>";
        echo "<br><small>-El actor {$this->actor15} protagonista de  la serie {$this->noticia15} cumpleaños el día {$this->cumpleañero15}</small>";
        echo "<br><small>-El nombre del director de la serie {$this->noticia15} de las {$this->temporada15} es {$this->director15}</small>";
        echo "<br><small>-El nombre del guionista de la serie {$this->noticia15} de las {$this->temporada15} es {$this->guionista15}</small>";
    }
    
}