<?php
// si B herite A et C herite B alors C herite A
class A {
    public function test1(){
        return 'test1';
    }
    protected function testProtected(){
        return "Protected";
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
    public function test4(){
        echo $this->testProtected();
    }
}
$c = new C;
echo $c->test1()."<hr>";
echo $c->test2()."<hr>";
echo $c->test3()."<hr>";
echo $c->test4(). "<hr>";
print("<pre>");
print_r(get_class_methods("C"));
print("</pre>");