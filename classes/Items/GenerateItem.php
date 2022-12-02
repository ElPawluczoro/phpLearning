<?php

require_once "Classes/Unit/Hero.php";

class GenerateItem {
  static function GenerateMeleWeapon(Level $l) : Weapon{
    $damage;
    $name;
    $value;
    switch ($l) {
      case Level::LEVEL1:
      switch (rand(1,3)) {
        case 1:
          $name = "Rusty ";
          $damage = rand(1,3);
          $value = rand(9,11);
          break;
        case 2:
          $name = "Broken ";
          $damage = rand(1,2);
          $value = rand(6,10);
          break;
        case 3:
          $damage = rand(2,4);
          $name = "Simply ";
          $value = rand(16,25);
          break;
        }
      switch (rand(1,3)){
        case 1:
          $name.="Wooden ";
          $damage+=rand(1,2);
          $value+=rand(9,11);
          break;
        case 2:
          $name.="Cheap Copper ";
          $damage+=rand(2,4);
          $value+=rand(16,25);
          break;
        case 3:
          $name.="Copper ";
          $damage+=rand(3,5);
          $value+=rand(25,40);
          break;
      }
        break;
      case Level::LEVEL2:
        // code...
        break;
      case Level::LEVEL3:
        // code...
        break;
      case Level::LEVEL4:
        // code...
        break;
      case Level::LEVEL5:
        // code...
        break;
      case Level::LEVEL6:
        // code...
        break;
      default: //LEVEL7 i guess
        // code...
        break;
    }

    switch (rand(1,2)){
      case 1:
        $name.= "Sword";
        return new Sword($damage, $name, $value);
        break;
      case 2:
        $name.= "Mace";
        return new Mace($damage, $name, $value);
        break;
      default:
      echo "something unexpected happend <br>";
      return new Sword($damage, $name, $value);
      break;
    }
  }
}































 ?>
