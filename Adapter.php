<?php

/*
== Adapter pattern

Definition:
- Adapter pattern works in the same way of the adaptar in real life, to connect two classes with different interfaces.

Implementation:
- We create a Target interface, then implement it as the adapter, then we call the Adaptee from it, and we call it from the Client class.

*/

interface CoffeeMachineInterface
{
  public function chooseFirstSelection();
  public function chooseSecondSelection();
}

class OldCoffeeMachine
{
  public function selectA()
  {
    echo "The first flavour<br/>";
  }
  public function selectB()
  {
    echo "The second flavour<br/>";
  }
}

class CoffeeTouchscreenAdapter implements CoffeeMachineInterface
{
  private $oldMachine;

  public function __construct()
  {
    $this->oldMachine = new OldCoffeeMachine;
  }

  public function chooseFirstSelection() {
    return $this->oldMachine->selectA();
  }
  public function chooseSecondSelection()
  {
    return $this->oldMachine->selectB();
  }
}
$coffee = new CoffeeTouchscreenAdapter();
$coffee->chooseFirstSelection();
$coffee->chooseSecondSelection();
