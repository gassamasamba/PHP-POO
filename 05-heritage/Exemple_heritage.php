<?php
class Membre {
    public $id = 15;
    public $pseudo;
    public $mdp;
    public function __construct()
    {
        echo "Internaute ! <br>";
    }
    public function inscription(){
        return "je m'inscris";
    }
    public function seConnecter(){
        return "je me connecte";
    }
}
class Admin extends Membre{
    public function accesBackOffice(){
        return "Return Backoffice: oui ! non";
    }
}
$adm1 = new Admin;
echo $adm1->seConnecter();
echo $adm1->inscription();
echo $adm1->accesBackOffice();
echo $adm1->id;