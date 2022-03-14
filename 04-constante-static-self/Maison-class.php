<?php 
class Maison
{
    public static $espaceTerrain = "500m2";
    public  $couleur = "blanc";
    private static $nbrPiece = 7;
    private $nbrPorte = 10;
    const Hauteur = "10m";
    public static function getNbrPiece(){
        return self::$nbrPiece; // self represente la classe a l'interieur de la classe
    }
    public function getNbrPorte(){
        return $this->nbrPorte;

    }
}
$maison = new Maison;
echo $maison->couleur; echo "<br>"; // appel une propriete public de l'objt par l'objet
echo $maison->couleur = "bleu";
echo "<br>";
echo Maison :: $espaceTerrain . "<br>"; // appel une propriete public de la classe par la classe
echo $maison->getNbrPiece();
echo "<br>";
// echo Maison::$couleur; echo "<br>";
echo $maison->getNbrPorte(); echo "<br>";
echo Maison:: Hauteur; // constante appartient a la classe et non a l'objet 
echo "<br>";


