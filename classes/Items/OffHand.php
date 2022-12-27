<?php
require_once "Item.php";
require_once "Classes/Unit/Hero.php";

enum OffHandKind {
  case SHIELD;
  case DAGGER;
}

abstract class OffHand extends EquipableItem{

  protected $offHandKind;

  function __construct(string $n, int $v, Level $rq, int $dmg, int $hp, int $a){
    parent::__construct($n, $v, $rq);
      $this->kind = ItemKind::OFF_HAND;
      $this->damage = $dmg;
      $this->healthPoints = $hp;
      $this->armour = $a;
    }

    function DisplayInformation(){
      parent::DisplayInformation();
      if($this->damage!=0){
        echo "Damage: $this->damage <br>";
      }
      if($this->healthPoints!=0){
        echo "HP: $this->healthPoints <br>";
      }
      if($this->armour!=0){
        echo "Armour: $this->armour <br>";
      }
        echo "---------------------<br>";
    }
  }

  class Shield extends OffHand {
    function __construct(string $n, int $v, Level $rq, int $dmg, int $hp, int $a){
      parent::__construct($n, $v, $rq, $dmg, $hp, $a);
      $this->offHandKind = OffHandKind::SHIELD;
    }
  }

  class Dagger extends OffHand {
    function __construct(string $n, int $v, Level $rq, int $dmg, int $hp, int $a){
      parent::__construct($n, $v, $rq, $dmg, $hp, $a);
      $this->offHandKind = OffHandKind::DAGGER;
    }
  }






































 ?>
