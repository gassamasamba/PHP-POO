<?php
/*
Consigne
1. Creation dun vehicule 1
2. aTTRibuer un nombre de litre d'essence au vehicule 1: 5
3. afficher le nombre de litre d'essence du vehicule 1
4. Creation d'une pompe
5. attribuer un nbre de littre d'essence a la pompe: 800
6. afficher le nombre de litre d'essence de la pompe
7. la pompe donne de l'essence en faisant le plein (50l) au vehicule 1
8. afficher le nbre de litre restant d'essence de la pompe
9.  afficher le nombre de litre d'essence du vehicule 1
10. Faire en sorte que le vehicule ne puisse pas contenir plus de 50l d'essence(limite du reservoir)
*/
class Vehicule
{
    private $litresEssence;

    public function getlitresEssence()
    {
        return $this->litresEssence;
    }

    public function setlitresEssence($litres)
    {
        if (is_int($litres) && $litres <= 50) {
            $this->litresEssence = $litres;
        }
    }
}

class Pompe
{
    private $litresEssence;

    public function getlitresEssence()
    {
        return $this->litresEssence;
    }

    public function setlitresEssence($litres)
    {
        if (is_int($litres)) {
            $this->litresEssence = $litres;
        }
    }

    public function donnerEssence(Vehicule $v)
    {
        //                             800                - (50 - 5) = 755
        $this->setlitresEssence($this->getlitresEssence() - (50 - $v->getlitresEssence()));

        $v->setlitresEssence(50);
    }
}

$vehicule1 = new Vehicule;
$vehicule1->setlitresEssence(5);
echo "Le vehicule 1 a " . $vehicule1->getlitresEssence() . ' litres d\'essence';
echo '<br>';
$pompe = new Pompe;
$pompe->setlitresEssence(800);
echo "La pompe a " . $pompe->getlitresEssence() . " litres d'essence";

$pompe->donnerEssence($vehicule1);
echo '<br>';
echo "Après ravitallement, la pompe a " . $pompe->getlitresEssence() . " litres d'essence";

echo "<br>Le vehicule 1 a, après ravitaillement, " . $vehicule1->getlitresEssence() . ' litres d\'essence';