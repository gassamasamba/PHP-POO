<?php
class Etudiant{
    private $prenom;
    // __construct() est une methode magique qui est appelée lors de "new"
    public function __construct($arg)
    {
        //echo "Instanciation avec l'information suivante". $arg;
        $this->setPrenom($arg);
    
    }
    public function setPrenom($arg){
        $this->prenom = $arg;
    }
    public function getPrenom(){
        return $this->prenom;
    }
}
$etudiant = new Etudiant("Roger");
echo  "Prenom " , $etudiant->getPrenom(); echo "<br>";
$etudiant->__construct("Piere"); // methode classique 
echo "Prenom " . $etudiant->getPrenom();