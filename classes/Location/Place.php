<?php

class Place {
  protected $name;

}

class Shop extends Place{
  protected $goods = array();

function __construct(Item $i){
  array_push($this->goods, $i);
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
