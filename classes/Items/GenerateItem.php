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
        switch (rand(1,3)) {
          case 1:
            $name = "Rusty ";
            $damage = rand(2,4);
            $value = rand(10,20);
            break;
          case 2:
            $name = "Simply ";
            $damage = rand(2,3);
            $value = rand(15,25);
            break;
          case 3:
            $damage = rand(3,5);
            $name = "Basic ";
            $value = rand(30,45);
            break;
          }
        switch (rand(1,3)){
          case 1:
            $name.="Cheap Iron ";
            $damage+=rand(4,6);
            $value+=rand(30,40);
            break;
          case 2:
            $name.="Iron ";
            $damage+=rand(6,8);
            $value+=rand(35,50);
            break;
          case 3:
            $name.="Steel ";
            $damage+=rand(7,10);
            $value+=rand(45,65);
            break;
          }
        break;
      case Level::LEVEL3:
      switch (rand(1,3)) {
        case 1:
          $name = "Badly Made ";
          $damage = rand(3,5);
          $value = rand(30,45);
          break;
        case 2:
          $name = "";
          $damage = rand(4,6);
          $value = rand(40,60);
          break;
        case 3:
          $damage = rand(5,7);
          $name = "Good Made ";
          $value = rand(60,85);
          break;
        }
      switch (rand(1,3)){
        case 1:
          $name.="Perfect Steel ";
          $damage+=rand(8,11);
          $value+=rand(60,80);
          break;
        case 2:
          $name.="Palladium ";
          $damage+=rand(9,12);
          $value+=rand(70,90);
          break;
        case 3:
          $name.="Perfrct Palladium ";
          $damage+=rand(10,13);
          $value+=rand(85,110);
          break;
        }
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
        return new Sword($damage, $name, $value, $l);
        break;
      case 2:
        $name.= "Mace";
        return new Mace($damage, $name, $value, $l);
        break;
      default:
      echo "something unexpected happend <br>";
      return new Sword($damage, $name, $value, $l);
      break;
    }
  }
}































 ?>
