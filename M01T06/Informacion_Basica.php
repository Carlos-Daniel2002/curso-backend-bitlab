<?php

class Person
{
    public $name;
    public $age;
    public $comment;
    public $favorites;
    public $nofavorites;
    public $password;
    public $calificacion;
    public function sayName()
    {
        echo "Mi nombre es {$this->name}<br>";
    }
    
    public function sayAge()
    {
        echo "Mi edad actual es {$this->age}<br>";
    }
    public function comment()
    {
        echo "Tengo 1 comentario <br>" ;
    } 

    public function favorites()
    {
        echo "Las Reseñas y la Noticias estan Marcadas como favoritos <br>";
    }
    public function nofavorites()
    {
        echo "Las Reseñas y la Noticias estan Marcadas como no favoritos <br>";
    }
    public function password()
    {
    if ($this->password==10) {
        echo "Usuario Registrado con exito Gracias {$this->name} <br>";
    }else  {
        echo "Esta información no es visible para el autor solo para el redactor<br>";
    }   
    }
    public function calificacion()
    {
    if ($this->calificacion <=5) {
        echo "Mi calificacion es {$this->calificacion} estrellas <br>";
    }else {
        echo "La calificacion que ha ingresado no es valida :(";
    }
}
}
