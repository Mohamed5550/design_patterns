<?php

/*
== Facade pattern

Definition:
- Facade is a pattern that hides the complexity of the process from the client, and give him some simple methods instead.

Implementation:
- We create a Facade interface, then implement it for each methd, then create a client Class which call these methods.

*/

Class Restaurant {
  public function getDinner() {
    echo "Take the order from client</br>";
    echo "Give the order to the Chef<br/>";
    echo "Cook the order<br/><br/>";
    echo "Get the order to the client<br/>";
  }
  public function getJuice() {
    echo "Take the juice name from client</br>";
    echo "Give the name to the Chef<br/>";
    echo "prepare the juice<br/>";
    echo "Give the juice to client<br/><br/>";
  }
  public function pay() {
    echo "Give the recipe to the client<br/>";
    echo "Take the money from the client<br/>";
    echo "Do the accounts <br/>";
    echo "Clean the table<br/><br/>";
  }
}


class Client {
  public function eat() {
    $restaurant = new Restaurant();
    $restaurant->getDinner();

    $restaurant->getJuice();

    $restaurant->pay();
  }
}

$client = new Client();
$client->eat();
