<?php

  // We can't create instance of interface. The method of interface doesn't contain body.

  interface A{
    function sum($a, $b);
    function sub($a, $b);
  }
  interface B{

    function multi($a, $b);
    function div($a, $b);
  }

  // We can create trait class, trait method. 
  // php doesn't allow multiple inheritance. if we need multiple inheritance in that case we can use trait to solve the problem.

  trait className{
    function hello(){
      echo "This is Trail Class";
    }
  }
  trait method{
    function sum($a, $b){
      return $a + $b;
    }
  }

  // We can inherit Multiple Interface in a single Class.
  class ChildClass implements A,B{

    // this is method of trait. we can use trait with 'use' keyword. we can use multiple traits in a single class with comma (,) separated.
    use method,className;
    
    function sum($a,$b){
      return $a + $b;
    }
    function sub($a, $b){
      return $a - $b;
    }
    function multi($a, $b){
      return $a * $b;
    }
    function div($a, $b){
      return $a / $b;
    }
  }

  $childObj = new ChildClass();

  // In this case, there are two method which name are same. in this case the method of trait will call.
  $childObj->sum(4,5);
?>