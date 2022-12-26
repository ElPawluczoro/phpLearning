<?php
enum ItemKind{
  case CURRENCY;
  case LOOT_OBJECT;
  case HEAD_ARMOUR;
  case BODY_ARMOUR;
  case GLOVES;
  case LEGS_ARMOUR;
  case BOOTS;
  case WEAPON;
  case OFF_HAND;
}

abstract class Item {
  protected $name;
  protected $kind;

  function DisplayInformation(){
    echo "$this->name:<br>
          ";
  }

  function GetKind() : ItemKind{
    return $this->kind;
  }

  function GetName() : string {
    return $this->name;
  }
}

abstract class NonCurrencyItem extends Item{
  protected $value;

  function GetValue() : int {
    return $this->value;
  }

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Value: $this->value<br>";
  }
}

abstract class EquipableItem extends NonCurrencyItem {
  protected $requaierdLevel;

  protected $damage;
  protected $healthPoints;
  protected $armour;

  function __construct(string $n, int $v, Level $rq){
    $this->name = $n;
    $this->value = $v;
    $this->requaierdLevel = $rq;
  }

  function DisplayInformation() {
    parent::DisplayInformation();
    echo "Requaierd Level: " . HeroMethods::LevelToInt($this->requaierdLevel) . "<br>";
  }

  function GetDamage() : int {
    return $this->damage;
}

}














































 ?>
