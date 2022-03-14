<?php
class Panier
 {
    // public veut  dire que la propriete est accessible de partout
    public $nbProduit;
    public function ajouterArticle(){// methode
        return " l'article a ete ajouté";

    }
    // protected veut dire accessible uniquement dans la classe où cela a ete codé et aussi dans les classes heritées.
    protected function retirerArticle(){
        return "l'article a ete supprimé ";
    }
    private function  afficheArticle(){ // private veut dire accessible uniquement dans la classe ou cela a ete declarée
        return "Voici les articles";
    }
}
$panier1 = new Panier; // instanciation
var_dump($panier1);
echo "<br>";
var_dump(get_class_methods($panier1));
$panier1->nbProduit = 5;
echo 'Panier 1 contient '. $panier1->nbProduit. 'produits';
echo "<br>";
echo 'Panier 1'. $panier1->ajouterArticle(). 'dans le panier 1'; echo "<br>";
// echo 'Panier 1'. $panier1->retirerArticle(); error car la methode est accessible uniquement dans la classe ou ete codee
 # echo $panier1->afficheArticle(); accessible uniquement dans la classe ou elle a ete declare
 $panier2 = new Panier;
 $panier2->nbProduit = 3;
 echo 'Panier 2 contient '. $panier2->nbProduit. 'produits'; echo "<br>";
 var_dump($panier2);