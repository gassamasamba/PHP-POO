<?php
class A {
    public function disBonjour(){
        return "Bonjour";
    }
}

class B { // herite pas la classe A
    public $mavariable;
    public function __construct(){
        $this->mavariable = new A ; // creer un objet A que je place dans la propriete $mavariable de mon objet B
    }
    public function uneMethode(){
        return $this->mavariable->disBonjour(); // habituellemnt nous mettons d'une seule fleche mais ici mavariable contient un objet donc une autre fleche est possible
    }

}
$b= new B;
echo $b->mavariable->disBonjour(). "<br>";
echo $b->uneMethode();