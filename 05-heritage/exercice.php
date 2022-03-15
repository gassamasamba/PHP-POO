<?php

// Créer les classes en fonction des éléments suivants :

/*********************
 * 
 * 
 * -------------------
 * Voiture
 * -------------------
 * $moteur
 * $portes
 * -------------------
 * jeRoule()
 * -------------------
 * 
 * 
 * -------------------
 * Audi
 * -------------------
 * $couleur
 * $annee
 * $modele
 * 
 * __construct($moteur, $portes, $couleur, $annee, $modele)
 * getter et setter des propriétés
 * 
 * -------------------
 * BMW
 * -------------------
 * $couleur
 * $annee
 * $modele
 * 
 * __construct($moteur, $portes, $couleur, $annee, $modele)
 * getter et setter des propriétés
 * 
 * -------------------
 * Mercedes-Benz
 * -------------------
 * $couleur
 * $annee
 * $modele
 * 
 * __construct($moteur, $portes, $couleur, $annee, $modele)
 * getter et setter des propriétés
 * 
 */

// Audi, BMW et Mercedez-benz héritent de Voiture

/***
 * 
1. Créer 3 audi
2. Afficher la couleur des 3 audis
3. Afficher le modèle des 3 audis
4.  Afficher l'année des 3 audis
5. Afficher le moteur des 3 audis
6. Afficher les portes des 3 audis
7. Faire de même pour 3 bmw et 3 mercedes-benz
 */
class Voiture
{
    protected $moteur;
    protected $portes;
    public function jeRoule()
    {
        return "je roule";
    }
    public function getMoteur()
    {
        return $this->moteur;
    }
    public function setMoteur($arg)
    {
        $this->moteur = $arg;
    }
    public function getPortes()
    {
        return $this->portes;
    }
    public function setPortes($arg)
    {
        $this->portes = $arg;
    }
}
class Audi extends Voiture
{
    private $couleur;
    private $annee;
    private $modele;
    public function __construct($moteur, $portes, $couleur, $annee, $modele)
    {
        $this->setMoteur($moteur);
        $this->setPortes($portes);
        $this->setCouleur($couleur);
        $this->setAnnee($annee);
        $this->setModele($modele);
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($arg)
    {
        $this->couleur = $arg;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($arg)
    {
        $this->annee = $arg;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($arg)
    {
        $this->modele = $arg;
    }
}
class BMW extends Voiture
{
    private $couleur;
    private $annee;
    private $modele;
    public function __construct($moteur, $portes, $couleur, $annee, $modele)
    {
        $this->setMoteur($moteur);
        $this->setPortes($portes);
        $this->setCouleur($couleur);
        $this->setAnnee($annee);
        $this->setModele($modele);
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($arg)
    {
        $this->couleur = $arg;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($arg)
    {
        $this->annee = $arg;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($arg)
    {
        $this->modele = $arg;
    }
}
class MercedesBenz extends Voiture
{
    private $couleur;
    private $annee;
    private $modele;
    public function __construct($moteur, $portes, $couleur, $annee, $modele)
    {
        $this->setMoteur($moteur);
        $this->setPortes($portes);
        $this->setCouleur($couleur);
        $this->setAnnee($annee);
        $this->setModele($modele);
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($arg)
    {
        $this->couleur = $arg;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($arg)
    {
        $this->annee = $arg;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($arg)
    {
        $this->modele = $arg;
    }
}
$audi1 = new Audi("moteur1", 5, "noir", 2020, "audimodele1");
$audi2 = new Audi("moteur2", 5, "rouge", 2022, "audimodele2");
$audi3 = new Audi("moteur3", 5, "blanc", 1999, "audimodele3");
echo "<h3>Audi 1</h3>";
echo "Moteur : " . $audi1->getMoteur() . "<br>" . " Porte : " . $audi1->getPortes() .
    "<br>" . "Couleur:  " . $audi1->getCouleur() . "<br>" . "Annee:  " .
    $audi1->getAnnee() . "<br>" . "Modele: " . $audi1->getModele() . "<hr>";
echo "<h3>Audi 2 </h3>";
echo "Moteur : " .  $audi2->getMoteur() .   "<br>" . " Porte: " . $audi2->getPortes() .
    "<br>" . "Couleur: " . $audi2->getCouleur() .  "<br>" . "Annee:  " .
    $audi2->getAnnee() .  "<br>" . "Modele: " . $audi2->getModele() . "<hr>";
echo "<h3>Audi 3</h3>";
echo "Moteur : " . $audi3->getMoteur() .  "<br>" . " Porte : " . $audi3->getPortes() .
    "<br>" . "Couleur : " . $audi3->getCouleur() .  "<br>" . "Annee: " .
    $audi3->getAnnee() .  "<br>" . "Modele: " . $audi3->getModele() . "<hr>";
$bmw1 = new BMW("moteur1", 3, "gris", 2000, "bmwmodele1");
$bmw2 = new BMW("moteur2", 5, "noir", 219, "bmwmodele2");
$bmw3 = new BMW("moteur3", 3, "rouge", 2012, "bmwmodele3");
echo "<h3>BMW 1</h3>";
echo "Moteur : " . $bmw1->getMoteur() .  "<br>" . " Porte:  " . $bmw1->getPortes() .
    "<br>" . "Couleur: " . $bmw1->getCouleur() .  "<br>" . "Annee:" .
    $bmw1->getAnnee() .  "<br>" . "Modele: " . $bmw1->getModele() . "<hr>";
echo "<h3>BMW 2 </h3>";
echo "Moteur : " . $bmw2->getMoteur() . "<br>" . " Porte : " . $bmw2->getPortes() .
    "<br>" . "Couleur: " . $bmw2->getCouleur() .  "<br>" . "Annee: " .
    $bmw2->getAnnee() .   "<br>" . "Modele: " . $bmw2->getModele() . "<hr>";
echo "<h3>BMW 3</h3>";
echo "Moteur : " . $bmw3->getMoteur() .  "<br>" . " Porte: " . $bmw3->getPortes() .
    "<br>" . "Couleur:  " . $bmw3->getCouleur() .  "<br>" . "Annee: " .
    $bmw3->getAnnee() .  "<br>" . "Modele :" . $bmw3->getModele() . "<hr>";
$merc1 = new MercedesBenz("moteur1", 3, "gris", 2000, "mercedes1");
$merc2 = new MercedesBenz("moteur2", 3, "blanc", 2000, "mercedes2");
$merc3 = new MercedesBenz("moteur3", 3, "noir", 2012, "mercedes3");
echo "<h3>Mercedes 1</h3>";
echo "Moteur : " . $merc1->getMoteur() .  "<br>" . " Porte: " . $merc1->getPortes() .
    "<br>" . "Couleur: " . $merc1->getCouleur() .  "<br>" . "Annee: " .
    $merc1->getAnnee() .   "<br>" . "Modele: " . $merc1->getModele() . "<hr>";
echo "<h3>Mercedes 2 </h3>";
echo "Moteur : " . $merc2->getMoteur() .  "<br>" . " Porte: " . $merc2->getPortes() .
    "<br>" . "Couleur : " . $merc2->getCouleur() .  "<br>" . "Annee: " .
    $merc2->getAnnee() .   "<br>" . "Modele: " . $merc2->getModele() . "<hr>";
echo "<h3>Mercedes 3</h3>";
echo "Moteur : " . $merc3->getMoteur() .  "<br>" . " Porte: " . $merc3->getPortes() .
    "<br>" . "Couleur: " . $merc3->getCouleur() .  "<br>" . "Annee: " .
    $merc3->getAnnee() .  "<br>" . "Modele: " . $merc3->getModele() . "<hr>";
