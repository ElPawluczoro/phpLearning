<?php
require_once "Unit.php";
abstract class Hero extends Unit{

  function __construct(float $hp, float $dmg, string $n){
    parent::__construct($hp, $dmg);
    $this->name = $n;
    }
  }

class Warrior extends Hero{
  private $className = "Warrior";

  function __construct(float $hp, float $dmg, string $n){
    parent::__construct($hp, $dmg, $n);
    $this->armour=3;
  }
}
?>
