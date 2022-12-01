<?php
require_once "Unit.php";
require_once "Classes/Items/Currency.php";
require_once "Classes/Items/Weapon.php";
require_once "Classes/Items/LootObject.php";

abstract class Hero extends Unit{

  public $equipment = array();
  public $pocket = array();

  function __construct(float $hp, float $dmg, string $n){
    parent::__construct($hp, $dmg);
    $this->name = $n;
    }

    function AddToEquipment(NonCurrencyItem $item){
      array_push($this->equipment, $item);
    }

    function DisplayEquipment(){
      echo "$this->name equipment:<br>";
      foreach ($this->equipment as $value) {
        echo $value->GetName()." <br>";
      }
      echo "---------------------<br>";
    }

  function AddToPocket(Currency $c){
    $exists=false;
    for($i = 0 ; $i < count($this->pocket); $i++){
      if($this->pocket[$i]->GetCurrencyType()==$c->GetCurrencyType()){
        $this->pocket[$i]->AddCurrency($c);
        $exists=true;
      }else $exists=false;
    }
    if(!$exists) array_push($this->pocket, $c);
  }

  function DisplayPocket(){
    echo "$this->name Pocket:<br>";
    foreach ($this->pocket as $value) {
      echo $value->GetName()." ".$value->GetQuantity()."<br>";
    }
    echo "---------------------<br>";
  }
}

class Warrior extends Hero{
  protected $className = "Warrior";

  function DisplayInformation(){
    echo "Class: $this->className<br>";
    parent::DisplayInformation();
  }

  function __construct(float $hp, float $dmg, string $n){
    parent::__construct($hp, $dmg, $n);
    $this->armour=3;
  }
}



?>
