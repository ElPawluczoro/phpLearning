<?php

require_once "Item.php";

enum CurrencyType{
  case COINS;
}

class Currency extends Item{
  protected $quantity;
  protected $currencyType;

  function GetCurrencyType() : CurrencyType{
    return $this->currencyType;
  }

  function GetQuantity() {
    return $this->quantity;
  }

  function __construct(int $q){
    $this->quantity = $q;
    $this->kind = ItemKind::CURRENCY;
  }

  function AddCurrency(Currency $cr){
    if($this->currencyType==$cr->GetCurrencyType()){
      $this->quantity += $cr->GetQuantity();
    }
  }

  function SubtractCurrency(Currency $cr){
    if($this->currencyType==$cr->GetCurrencyType()){
      $this->quantity -= $cr->GetQuantity();
    }
  }

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Quantity: $this->quantity<br>";
  }
}

class Coins extends Currency{
  function __construct(int $q){
    parent::__construct($q);
    $this->name ="Coins";
    $this->currencyType = CurrencyType::COINS;
  }

    // static function __mul(int $m, Coins $c) : Coins{
    //   return new Coins($c->GetQuantity*$m);
    // }
}

?>
