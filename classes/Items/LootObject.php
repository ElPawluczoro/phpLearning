<?php
require_once "Item.php";

class LootObject extends NonCurrencyItem{
  protected $quantity;

  function __construct(string $n, int $v, int $q){
    $this->name = $n;
    $this->value = $v;
    $this->kind = ItemKind::LOOT_OBJECT;
    $this->quantity = $q;
  }

  function GetName() : string {
    return $this->name;
  }

  function GetQuantity() : int {
    return $this->quantity;
  }

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Quantity: $this->quantity<br>";
  }

function addLoot(LootObject $lo){
  if ($this->name==$lo->GetName()){
    $this->quantity+=$lo->GetQuantity();
  }
}
}





 ?>
