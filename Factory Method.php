<?php

/*
== Factory Method pattern

Definition:
- Factory pattern is a pattern to be used when you have many types of an object in your project

Implementation:
- Make the main abstract factory class, add abstrct create method to it then make sub-classes with this method

*/

Abstract Class El_Khatba
{

  abstract public function getWife();

  public function askForMarriage() {
    $wife = $this->getWife();

    if($wife->type() == "cute") {
      echo "Would you marry me?<br/>";
    } else {
      echo "sorry, I want a cute wife<br/>";
    }
  }

}

class CuteWifeAsking extends El_Khatba {
  public function getWife() {
      return new CuteWife();
  }
}

class NonCuteWifeAsking extends El_Khatba {
  public function getWife() {
      return new NoNCuteWife();
  }
}

Abstract Class Wife {
  abstract public function type();
}

class cuteWife extends Wife {
  public function type() {
    return "cute";
  }
}

class NonCuteWife extends Wife {
  public function type() {
    return "NonCute";
  }
}



$cuteWife = new CuteWifeAsking();
$cuteWife->askForMarriage();

$nonCuteWife = new NonCuteWifeAsking();
$nonCuteWife->askForMarriage();
