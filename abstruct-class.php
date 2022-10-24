<?php

  // This is abstract Class . we can't create instance of abstract class. It must have at least one abstract Method.
  abstract class AbsClass{

    // This is abstract Method. It must declare in this class, but we can't create body of this method in this class. child class will create body of this method.
    abstract function sum($a, $b);
    public function div($a, $b){
      return $a / $b;
    }
  }


  class ChildClass extends AbsClass{
    // This Method is from abstract AbsClass
    public function sum($a,$b){
      return $a + $b; 
    }
  }

  $childObj = new ChildClass();
  $childObj->div($a, $b);



?>