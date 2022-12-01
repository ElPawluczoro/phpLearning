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
}

abstract class NonCurrencyItem extends Item{
  protected $value;

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Value: $this->value<br>";
  }
}














































 ?>
