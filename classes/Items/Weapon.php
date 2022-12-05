<?php
require_once "Item.php";
require_once "Classes/Unit/Hero.php";

enum WeaponKind{
  case SWORD;
  case MACE;
  case BOW;
}

class Weapon extends EquipableItem{
  protected $weaponKind;
  protected $damage;
  //protected $eqKind; //chyba nic nie robi

  function __construct(int $d, string $n, int $v, Level $rq){
    parent::__construct($n, $v, $rq);
    $this->kind = ItemKind::WEAPON;
    $this->damage = $d;
  }

  function GetDamage() : int {
    return $this->damage;
}

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Damage: $this->damage<br>";
    echo "---------------------<br>";
  }
}

class Sword extends Weapon{

  function __construct(int $d, string $n, int $v, Level $rq){
    parent::__construct($d, $n, $v, $rq);
    $this->weaponKind = WeaponKind::SWORD;
  }
}

class Mace extends Weapon{

  function __construct(int $d, string $n, int $v, Level $rq){
    parent::__construct($d, $n, $v, $rq);
    $this->weaponKind = WeaponKind::MACE;
  }
}

class Bow extends Weapon{

  function __construct(int $d, string $n, int $v, Level $rq){
    parent::__construct($d, $n, $v, $rq);
    $this->weaponKind = WeaponKind::BOW;
  }
}
































 ?>
