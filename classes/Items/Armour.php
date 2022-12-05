<?php
require_once "Item.php";
require_once "Classes/Unit/Hero.php";

enum ArmourKind {
  case LIGHT_ARMOUR;
  case MEDIUM_ARMOUR;
  case HEAVY_ARMOUR;
}

class ArmourFunctions {
  static function ArmourKindToString(ArmourKind $ak) : string{
    if($ak == ArmourKind::LIGHT_ARMOUR) return "Light Armour";
    else if($ak == ArmourKind::MEDIUM_ARMOUR) return "Medium Armour";
    else return "Heavy Armour";
  }
}

class Armour extends EquipableItem {
  protected $armourKind;
  protected $armour;
  protected $healthPoints;

  function __construct(int $a, int $h, string $n, int $v, Level $rq, ArmourKind $ak){
      parent::__construct($n, $v, $rq);
      $this->armour = $a;
      $this->healthPoints = $h;
      $this->armourKind = $ak;
  }

  function GetArmour() : int {
    return $this->armour;
  }

  function GetHealthPoints() : int {
    return $this->healthPoints;
  }

  function GetArmourKind() : ArmourKind {
    return $this->armourKind;
  }

  function DisplayInformation() {
    parent::DisplayInformation();
    echo ArmourFunctions::ArmourKindToString($this->armourKind) . "<br>";
    if($this->armour!=0) {echo "Armour: " . $this->armour . "<br>";}
    if($this->healthPoints!=0) {echo "HP: " . $this->healthPoints . "<br>";}
    echo "---------------------<br>";
    }
}

class HeadArmour extends Armour{
  protected $armourKind;
  protected $armour;
  protected $healthPoints;

  function __construct(int $a, int $h, string $n, int $v, Level $rq, ArmourKind $ak){
      parent::__construct($a, $h, $n, $v, $rq, $ak );
      $this->kind = ItemKind::HEAD_ARMOUR;
  }
}

class BodyArmour extends Armour {
  function __construct(int $a, int $h, string $n, int $v, Level $rq, ArmourKind $ak){
      parent::__construct($a, $h, $n, $v, $rq, $ak );
      $this->kind = ItemKind::BODY_ARMOUR;
  }
}

class Gloves extends Armour {
  function __construct(int $a, int $h, string $n, int $v, Level $rq, ArmourKind $ak){
      parent::__construct($a, $h, $n, $v, $rq, $ak );
      $this->kind = ItemKind::GLOVES;
  }
}

class LegsArmour extends Armour {
  function __construct(int $a, int $h, string $n, int $v, Level $rq, ArmourKind $ak){
      parent::__construct($a, $h, $n, $v, $rq, $ak );
      $this->kind = ItemKind::LEGS_ARMOUR;
  }
}

class Boots extends Armour {
  function __construct(int $a, int $h, string $n, int $v, Level $rq, ArmourKind $ak){
      parent::__construct($a, $h, $n, $v, $rq, $ak );
      $this->kind = ItemKind::BOOTS;
  }
}




































 ?>
