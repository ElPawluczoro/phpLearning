<?php
enum ItemKind{
  case CURRENCY;
  case WEAPON;
  case LOOT_OBJECT;
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
}














































 ?>
