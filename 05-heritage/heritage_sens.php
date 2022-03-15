<?php
// si B herite A et C herite B alors C herite A
class A {
    public function test1(){
        return 'test1';
    }
}
class B extends A {
    public function test2(){
        return 'test2';
    }
}
class C extends B {
    public function test3(){
        return 'test3';
    }
}
$c = new C;
echo $c->test1()."<hr>";
echo $c->test2()."<hr>";
echo $c->test3()."<hr>";