<?php
require_once "Unit.php";
abstract class Monster extends Unit{
}

class Goblin extends Monster{

  function __construct(){
    parent::__construct(10, 3);
    $this->armour = 1;
    $this->name = "Goblin";
  }
}

class Orc extends Monster{
  function __construct(){
    parent::__construct(15, 5);
    $this->armour = 5;
    $this->name = "Orc";
  }
}
?>
