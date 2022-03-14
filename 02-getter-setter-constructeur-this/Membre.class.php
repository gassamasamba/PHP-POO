<?php
class Membre {
    private $pseudo;
    private $mdp;
    private $role;
    public function setPseudo($valeur){
        if(is_string($valeur)){
            $this->pseudo = $valeur;
        }
      
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function setMdp($valeur){
        if(is_string($valeur)){
            $this->mdp = $valeur;
        }
      
    }
    public function getMdp(){
        return $this->mdp;
    }
    public function setRole($valeur){
        if(is_string($valeur)){
            $this->role = $valeur;
        }
      
    }
    public function getRole(){
        return $this->role;
    }
}
$membre1 = new Membre;
$membre2 = new Membre;
$membre1->setPseudo("User1");
$membre1->setMdp("passer1");
$membre1->setRole("Admin1");
$membre2->setPseudo("User2");
$membre2->setMdp("passer2");
$membre2->setRole("Admin2");
echo "Membre 1 a pour pseudo " . $membre1->getPseudo(). " mot de passe ". $membre1->getMdp(). " role " . $membre1
->getRole(). "<br>";
echo " Membre 2 a pour pseudo " . $membre2->getPseudo(). " mot de passe ". $membre2->getMdp(). " role " . $membre2
->getRole(). "<br>";
