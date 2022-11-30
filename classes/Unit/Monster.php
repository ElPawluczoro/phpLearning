<?php
require_once "Unit.php";
abstract class Monster extends Unit{
  protected $dropList;

  function displayDropList(){
    echo "$this->name Drop List:<br>";
    foreach ($this->dropList as $value) {
      echo $value . "<br>";
    }
    echo "---------------------<br>";
  }
}

class Goblin extends Monster{

  function __construct(){
    parent::__construct(10, 3);
    $this->armour = 1;
    $this->name = "Goblin";
    $this->dropList = array("Gold", "Rusty Sword", "Goblin totem");

  }
}

class Orc extends Monster{
  function __construct(){
    parent::__construct(15, 5);
    $this->armour = 5;
    $this->name = "Orc";
  }
}

class Zombie extends Monster{
  function __construct(){
    parent::__construct(20,4);
    $this->armour = 2;
    $this->name = "Zombie";
  }
}

class Bandit extends Monster{
  function __construct(){
    parent::__construct(15,5);
    $this->armour = 3;
    $this->name = "Bandit";
  }
}
?>
