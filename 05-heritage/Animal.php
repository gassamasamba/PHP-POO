<?php
class Animal {
    protected function deplacement(){
        return "Je me deplace";
    }
    public function manger(){
        return "Je mange chaque jour";
    }
}
/*
cree 2 classes Elephant et Chat
chaque classe aura la methode quiSuisJe()
la classe Chat aura la methode manger (qui retourne je mnge comme un chat)
*/
class Elephant extends Animal {
    public function quiSuisJe(){
        return "je suis un elephant";

    }

}
class Chat extends Animal {
    public function quiSuisJe(){
        return "je suis un Chat " . $this->deplacement();
        
    }
    public function manger(){
        return "je mange comme un chat";
        
    }

}
$chat1 = new Chat;
echo $chat1->quiSuisJe(). "<hr>";
echo $chat1->manger();
// echo $chat1->deplacement(); // on ne peut pas acceder a la methode deplacement() car elle est protected