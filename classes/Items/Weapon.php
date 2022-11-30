<?php
require_once "Item.php";

enum WeaponKind{
  case SWORD;
  case MACE;
  case BOW;
}

class Weapon extends Item{
  protected $weaponKind;
  protected $damage;

  function __construct(int $d, string $n){
    $this->kind = ItemKind::WEAPON;
    $this->damage = $d;
    $this->name = $n;
  }

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Damage: $this->damage<br>";
  }
}

class Sword extends Weapon{

  function __construct(int $d, string $n){
    parent::__construct($d, $n);
    $this->weaponKind = WeaponKind::SWORD;
  }
}

class Mace extends Weapon{

  function __construct(int $d, string $n){
    parent::__construct($d, $n);
    $this->weaponKind = WeaponKind::MACE;
  }
}

class Bow extends Weapon{

  function __construct(int $d, string $n){
    parent::__construct($d, $n);
    $this->weaponKind = WeaponKind::BOW;
  }
}
































 ?>
