<?php

class Place {
  protected $name;

}

class Shop extends Place{
  protected $goods = array();

function __construct(array $ar){
  foreach ($ar as  $value) {
    array_push($this->goods, $value);
  }
}

function DisplayGoods(){
  $armours = array(ItemKind::HEAD_ARMOUR, ItemKind::BODY_ARMOUR, ItemKind::GLOVES,
                  ItemKind::LEGS_ARMOUR, ItemKind::BOOTS);
  $i=0;
  echo "$this->name Goods:<br>";
  foreach ($this->goods as  $value) {
    $i++;
    echo "$i." . $value->GetName();
    if ($value->GetKind()==ItemKind::LOOT_OBJECT){
      echo " (" . $value->GetQuantity() . ")<br>";
    }else if ($value->GetKind()==ItemKind::WEAPON){
      echo " d" . $value->GetDamage() . "<br>";
    }else if (in_array($value->GetKind(), $armours)){
      echo " a" . $value->GetArmour() . " hp" . $value->GetHealthPoints() . "<br>";
    }
  }
  echo "---------------------<br>";
}

function Buy(int $i, Hero $h){
  if($i<=count($this->goods)){
    $item = $this->goods[$i-1];
    $value = new Coins($item->GetValue());
    if($h->IsCurrencyEnough($value)){
      $h->SpendCurrency($value);
      $h->AddToEquipment($item);
      echo "You bought " . $item->GetName() . "<br>";
    }
  }else echo "Item not found<br><br>";
}

function Sell(int $i, Hero $h){
  $eq=$h->GetEquipment();
  $item=$eq[$i-1];
if($i<=count($eq)){
  if($eq[$i-1]->GetKind()==ItemKind::LOOT_OBJECT){
    $h->AddToPocket(new Coins($item->GetQuantity()*$item->GetValue()));
  }else if($eq[$i-1]->GetKind()==ItemKind::WEAPON){
    $h->AddToPocket(new Coins($item->GetValue()));
  }
  $h->RemoveFromEquipment($i);
}

}


}
























 ?>
