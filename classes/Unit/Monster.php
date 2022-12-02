<?php
require_once "Unit.php";
require_once "Classes/Items/Currency.php";
require_once "Classes/Items/Weapon.php";
require_once "Classes/Items/LootObject.php";

abstract class Monster extends Unit{
  protected $dropList;
  protected $expieriencePointsGiven;

  function GetDropList() : array{
    return $this->dropList;
  }

  function GetExpieriencePointsGiven() : int{
    return $this->expieriencePointsGiven;
  }

  function displayDropList(){
    echo "$this->name Drop List:<br>";
    foreach ($this->dropList as $value) {
      echo $value->GetName() . "<br>";
    }
    echo "---------------------<br>";
  }
}

class Goblin extends Monster{

  function __construct(){
    parent::__construct(10, 3);
    $this->name = "Goblin";
    $this->armour = 1;
    $this->dropList = array(new Coins(rand(5,15)), new Sword(2, "Rusty Sword", 6), new LootObject("Goblin Totem", 3, rand(1,2)));
    $this->expieriencePointsGiven = 5;
  }
}

class Orc extends Monster{
  function __construct(){
    parent::__construct(15, 5);
    $this->name = "Orc";
    $this->armour = 5;
    $this->dropList = array(new Coins(rand(10,20)), new Mace(4, "Simply Mace", 15), new LootObject("Orc Tooth", 6, rand(1,2)));
    $this->expieriencePointsGiven = 10;
  }
}

class Zombie extends Monster{
  function __construct(){
    parent::__construct(20,4);
    $this->name = "Zombie";
    $this->armour = 2;
    $this->dropList = array(new Coins(rand(15,20)), new LootObject("Putrid flesh", 3, rand(1,2)));
    $this->expieriencePointsGiven = 10;
  }
}

class Bandit extends Monster{
  function __construct(){
    parent::__construct(15,5);
    $this->name = "Bandit";
    $this->armour = 3;
    $this->dropList = array(new Coins(rand(20,25)), new Bow(3, "Simply Bow", 15));
    $this->expieriencePointsGiven = 10;
  }
}
?>
