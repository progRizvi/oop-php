<?php


class ParentClass{


  // This method will call automatically, when we create instance or object of this class
  function __construct()
  {
    echo "This is a magic Method. It will call first";
  }

  // This Method is accessible from anywhere
  // This Method can be accessed with scope rasulation (::). without create instance of this class.

  static public function sum($a, $b){
    return $a + $b;
  }

  // This Method is just accessible in this class. 
  private function div($a, $b){
    return $a / $b;
  }

  // This Method will only accessible to the child class.
  protected function multi($a, $b){
    $c = $this->div(15,5);
    return $a * $b * $c;
  }

  // After all action. this method will call automatically.
  function __destruct()
  {
    echo "This is another Magic Method. It will call at the end.";
  }
};
  

class ChildClass extends ParentClass{
  public function total(){

    // in class static method will access with self keyword and scope resulation (::).
    $a = self::sum(5,10);
    $b = $this->multi(5,5);

    return $a + $b;
  }
};

ParentClass::sum(45,65);
$childObj = new ChildClass();

$childObj->total();


?>