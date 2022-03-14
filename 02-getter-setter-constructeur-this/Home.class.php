<?php

class Homme{

    private $prenom;
    private $nom;
    // methode getter et setter
    // getter methode pour recuperer la valeur d'une propriete
    // setter methode pour modifier la valeur d'une propriete
    public function setPrenom($valeur){
      if(is_string($valeur)){
          $this->prenom = $valeur; // this represente l'objet en cours cad l'objet qui execute la methode
      }

    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setNom($valeur){
        if(is_string($valeur)){
            $this->nom = $valeur; // this represente l'objet en cours cad l'objet qui execute la methode
        }

    }
    public function getNom(){
        return $this->nom;
    }
}
$homm1 = new Homme;
$homm1->setPrenom("Julien");
echo "Homme1 a pour prenom " . $homm1->getPrenom() . "<br>";
$homm1 -> setNom("Cottet");
echo "Homme1 a pour nom " . $homm1->getNom() . "<br>";
$homm2 = new Homme();
 echo "Prenom est " . $homm2->getPrenom();
 /*
 les proprietes de $homm2 sont null car les changements de valeurs avec getter et setter ne s'applique qu'a seul objet $homm1
 */