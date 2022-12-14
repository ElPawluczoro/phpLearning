<?php
require_once "Unit.php";
require_once "Classes/Items/Currency.php";
require_once "Classes/Items/Weapon.php";
require_once "Classes/Items/LootObject.php";

enum Level : int{
  case LEVEL1 = 100;
  case LEVEL2 = 500;
  case LEVEL3 = 2000;
  case LEVEL4 = 10000;
  case LEVEL5 = 50000;
  case LEVEL6 = 200000;
  case LEVEL7 = 0;
}

class HeroMethods {
  static function LevelToInt(Level $l) : int{
    switch ($l) {
      case  Level::LEVEL1:
        return 1;
        break;
      case  Level::LEVEL2:
        return 2;
        break;
      case  Level::LEVEL3:
        return 3;
        break;
      case  Level::LEVEL4:
        return 4;
        break;
      case  Level::LEVEL5:
        return 5;
        break;
      case  Level::LEVEL6:
        return 6;
        break;
      default: // Level::LEVEL7
        return 7;
        break;
    }
  }
}

abstract class Hero extends Unit{
  public $equipment = array();
  public $pocket = array();

  //equiped stuff
  protected $head;
  protected $body;
  protected $gloves;
  protected $legs;
  protected $boots;
  protected $mainHand;
  protected $offHand;

  //Level
  protected $level;
  protected $expieriencePoints;
  protected $maxExpieriencePoints;

  function __construct(float $hp, float $dmg, string $n){
    parent::__construct($hp, $dmg);
    $this->name = $n;
    $this->level = Level::LEVEL1;
    $this->SetMaxExpieriencePoints();
    $this->expieriencePoints = 0;
    }

    function GetExpieriencePoints(){
      return $this->expieriencePoints;
    }

    function GetLevel(){
      return $this->level;
    }

    function GetMaxExpieriencePoints(){
      return $this->maxExpieriencePoints;
    }

    function GetEquipment() : array {
      return $this->equipment;
    }

    function SetMaxExpieriencePoints(){
      $this->maxExpieriencePoints = $this->level->value;
      }

    function EquipItem(int $i){
      $item = $this->equipment[$i-1];
      $armours = array(ItemKind::HEAD_ARMOUR, ItemKind::BODY_ARMOUR, ItemKind::GLOVES,
                      ItemKind::LEGS_ARMOUR, ItemKind::BOOTS);

      if($item->GetKind()==ItemKind::WEAPON){
          $this->mainHand = $item;
          $this->damage+=$item->GetDamage();
          $this->RemoveFromEquipment($i);
        }else if($item->GetKind()==ItemKind::OFF_HAND){
            $this->offHand = $item;
            $this->armour+=$item->GetArmour();
            $this->healthPoints+=$item->GetHealthPoints();
            $this->damage+=$item->GetDamage();
            $this->RemoveFromEquipment($i);
        }
        else if(in_array($item->GetKind(), $armours)){
          switch ($item->GetKind()){
          case ItemKind::HEAD_ARMOUR:
            $this->head = $item;
            break;
          case ItemKind::BODY_ARMOUR:
            $this->body = $item;
            break;
          case ItemKind::GLOVES:
            $this->gloves = $item;
            break;
          case ItemKind::LEGS_ARMOUR:
            $this->legs = $item;
            break;
          case ItemKind::BOOTS:
            $this->boots = $item;
            break;
          }
          $this->armour+=$item->GetArmour();
          $this->healthPoints+=$item->GetHealthPoints();
          $this->damage+=$item->GetDamage();
          $this->RemoveFromEquipment($i);
        }
      }

    function UnequipItem(ItemKind $i){
      $armours = array(ItemKind::HEAD_ARMOUR, ItemKind::BODY_ARMOUR, ItemKind::GLOVES,
                      ItemKind::LEGS_ARMOUR, ItemKind::BOOTS);
      if($i==ItemKind::WEAPON){
          $this->damage-=$this->mainHand->GetDamage();
          $this->AddToEquipment($this->mainHand);
          $this->mainHand = NULL;
        }else if(in_array($i, $armours)){
          $item;
          switch ($i){
            case  ItemKind::HEAD_ARMOUR:
              $item = $this->head;
              $this->head = NULL;
              break;
            case  ItemKind::BODY_ARMOUR:
              $item = $this->body;
              $this->body = NULL;
              break;
            case  ItemKind::GLOVES:
              $item = $this->gloves;
              $this->gloves = NULL;
              break;
            case  ItemKind::LEGS_ARMOUR:
              $item = $this->legs;
              $this->legs = NULL;
              break;
            case  ItemKind::BOOTS:
              $item = $this->boots;
              $this->boots = NULL;
              break;
            }
          $this->armour-=$item->GetArmour();
          $this->healthPoints-=$item->GetHealthPoints();
          $this->AddToEquipment($item);
          }
        }

      function ReturnLevelString() : string {
        switch ($this->level) {
          case Level::LEVEL1:
            return "1";
            break;
          case Level::LEVEL2:
            return "2";
            break;
          case Level::LEVEL3:
            return "3";
            break;
          case Level::LEVEL4:
            return "4";
            break;
          case Level::LEVEL5:
            return "5";
            break;
          case Level::LEVEL6:
            return "6";
            break;
          default:
            return "7";
            break;
        }
      }

    function GiveExpieriencePoints(int $exp){
      if($this->level!=Level::LEVEL7){
        $this->expieriencePoints+=$exp;
        if($this->expieriencePoints>=$this->maxExpieriencePoints){
          $this->expieriencePoints-=$this->maxExpieriencePoints;
          echo "LEVEL UP!";
          //echo $this->level."->"$this->level+1."<br>";
          if($this->level==Level::LEVEL1){
            $this->level=Level::LEVEL2;
            echo "1->2<br>";
          }else if($this->level==Level::LEVEL2){
            $this->level=Level::LEVEL3;
            echo "2->3<br>";
          }else if($this->level==Level::LEVEL3){
            $this->level=Level::LEVEL4;
            echo "3->4<br>";
          }else if($this->level==Level::LEVEL4){
            $this->level=Level::LEVEL5;
            echo "4->5<br>";
          }else if($this->level==Level::LEVEL5){
            $this->level=Level::LEVEL6;
            echo "5->6<br>";
          }else if($this->level==Level::LEVEL6){
            $this->level=Level::LEVEL7;
            echo "6->7<br>";
          }else echo "Something unexpected happend<br>";
          $this->SetMaxExpieriencePoints();
        }
      }
    }


    function AddToEquipment(NonCurrencyItem $item){
      array_push($this->equipment, $item);
    }

    function RemoveFromEquipment($i){
      array_splice($this->equipment,$i-1,1);
    }

    function DisplayEquipment(){
      $armours = array(ItemKind::HEAD_ARMOUR, ItemKind::BODY_ARMOUR, ItemKind::GLOVES,
                      ItemKind::LEGS_ARMOUR, ItemKind::BOOTS);
      $i=0;
      echo "$this->name equipment:<br>";
      foreach ($this->equipment as $value) {
        $i++;
        echo "$i." . $value->GetName();
        if ($value->GetKind()==ItemKind::LOOT_OBJECT){
          echo " (" . $value->GetQuantity() . ")<br>";
        }else if ($value->GetKind()==ItemKind::WEAPON){
          echo " d" . $value->GetDamage() . "<br>";
        }else if (in_array($value->GetKind(), $armours)){
          echo " a" . $value->GetArmour() . " hp" . $value->GetHealthPoints() . "<br>";
        }else echo "<br>";
      }
      echo "---------------------<br>";
    }

    function DisplayGear() {
      echo "Gear<br>";
      echo "Head: "; if(isset($this->head)) echo $this->head->GetName(); echo "<br>";
      echo "Body Armour: "; if(isset($this->body)) echo $this->body->GetName(); echo "<br>";
      echo "Gloves: "; if(isset($this->gloves)) echo $this->gloves->GetName(); echo "<br>";
      echo "Legs: "; if(isset($this->legs)) echo $this->legs->GetName(); echo "<br>";
      echo "Boots: "; if(isset($this->boots)) echo $this->boots->GetName(); echo "<br>";
      echo "Main Hand: "; if(isset($this->mainHand)) echo $this->mainHand->GetName() . " d" . $this->mainHand->GetDamage(); echo "<br>";
      echo "Off Hand: "; if(isset($this->offHand)) echo $this->offHand->GetName(); echo "<br>";
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

  function IsCurrencyEnough(Currency $c) : bool {
    $exists=false;
  for($i = 0 ; $i < count($this->pocket); $i++){
    if($this->pocket[$i]->GetCurrencyType()==$c->GetCurrencyType()
        && $this->pocket[$i]->GetQuantity()>=$c->GetQuantity()){
      $exists=true;
      break;
    }
  }
  return $exists;
}

  function SpendCurrency(Currency $c){
    $exists=false;
    for($i = 0 ; $i < count($this->pocket); $i++){
      if($this->pocket[$i]->GetCurrencyType()==$c->GetCurrencyType()
          && $this->pocket[$i]->GetQuantity()>=$c->GetQuantity()){
        $this->pocket[$i]->SubtractCurrency($c);
        $exists=true;
        break;
      }else {
        $exists=false;
        echo"Not enough currency<br>";
      }
    }
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
    echo "Class: $this->className<br>
          Level: " . $this->ReturnLevelString() . "<br>
          XP: $this->expieriencePoints<br>
          Max XP: $this->maxExpieriencePoints<br>";
    parent::DisplayInformation();
  }

  function __construct(float $hp, float $dmg, string $n){
    parent::__construct($hp, $dmg, $n);
    $this->armour=3;
  }
}



?>
