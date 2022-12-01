<?php
require_once "Item.php";

enum WeaponKind{
  case SWORD;
  case MACE;
  case BOW;
}

class Weapon extends NonCurrencyItem{
  protected $weaponKind;
  protected $damage;

  function __construct(int $d, string $n, int $v){
    $this->kind = ItemKind::WEAPON;
    $this->damage = $d;
    $this->name = $n;
    $this->value = $v;
  }

  function DisplayInformation(){
    parent::DisplayInformation();
    echo "Damage: $this->damage<br>";
  }
}

class Sword extends Weapon{

  function __construct(int $d, string $n, int $v){
    parent::__construct($d, $n, $v);
    $this->weaponKind = WeaponKind::SWORD;
  }
}

class Mace extends Weapon{

  function __construct(int $d, string $n, int $v){
    parent::__construct($d, $n, $v);
    $this->weaponKind = WeaponKind::MACE;
  }
}

class Bow extends Weapon{

  function __construct(int $d, string $n, int $v){
    parent::__construct($d, $n, $v);
    $this->weaponKind = WeaponKind::BOW;
  }
}
































 ?>
