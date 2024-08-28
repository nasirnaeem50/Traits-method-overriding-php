<?php
trait base{
    public function show(){
        echo "hello everyone.\n";
    
    }
}
class A{
    use base;
    public function show(){
        echo "nice to meet you.\n";
    }
}
class B extends A{
    use base;
    public function show(){
        echo "goodbye.\n";
        
    }
}
$test=new B();
$test->show();
?>