<?php

/*
== Singleton pattern

Definition:
- Singleton is a simple pattern to prevent instanciating the same class many times, while we need it only to be executed once.

Implementation:
- We create a private construct and a static property, then instance the class only if that property is not defined before.

*/

class Singleton {
  private static $instance = null;

  private function __construct($hi) {
    echo $hi;
  }

  public function getInstance($hi) {
    if(self::$instance == null) {
      self::$instance = new Singleton($hi);
    }
    return self::$instance;
  }
}

Singleton::getInstance("hi 1");
Singleton::getInstance("hi 2");
