<?php

require_once "Classes/Unit/Hero.php";
require_once "Classes/Items/OffHand.php";

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

    static function GenerateBow(Level $l) : Bow{
      $damage;
      $name;
      $value;
      switch ($l) {
        case Level::LEVEL1:
        switch (rand(1,3)) {
          case 1:
            $name = "Broken ";
            $damage = rand(0,1);
            $value = rand(8,10);
            break;
          case 2:
            $name = "Badly made ";
            $damage = rand(1,2);
            $value = rand(7,12);
            break;
          case 3:
            $damage = rand(2,3);
            $name = "Simply ";
            $value = rand(13,18);
            break;
          }
        switch (rand(1,3)){
          case 1:
            $name.="Short Oak ";
            $damage+=rand(2,3);
            $value+=rand(9,11);
            break;
          case 2:
            $name.="Oak ";
            $damage+=rand(3,4);
            $value+=rand(16,25);
            break;
          case 3:
            $name.="Long Oak ";
            $damage+=rand(4,5);
            $value+=rand(25,40);
            break;
          }
          break;
          case Level::LEVEL2:
          switch (rand(1,3)) {
            case 1:
              $name = "";
              $damage = rand(1,2);
              $value = rand(11,22);
              break;
            case 2:
              $name = "Good Made ";
              $damage = rand(2,3);
              $value = rand(17,25);
              break;
            case 3:
              $damage = rand(3,4);
              $name = "Perfectly Made ";
              $value = rand(30,43);
              break;
            }
          switch (rand(1,3)){
            case 1:
              $name.="Short Red Oak ";
              $damage+=rand(3,4);
              $value+=rand(31,35);
              break;
            case 2:
              $name.="Red Oak ";
              $damage+=rand(4,5);
              $value+=rand(35,45);
              break;
            case 3:
              $name.="Long Red Oak ";
              $damage+=rand(5,6);
              $value+=rand(45,55);
              break;
            }
          break;
        case Level::LEVEL3:
        switch (rand(1,3)) {
          case 1:
            $name = "";
            $damage = rand(3,4);
            $value = rand(30,45);
            break;
          case 2:
            $name = "Good Made";
            $damage = rand(4,5);
            $value = rand(40,60);
            break;
          case 3:
            $damage = rand(5,6);
            $name = "Perfrctly Made ";
            $value = rand(60,85);
            break;
          }
        switch (rand(1,3)){
          case 1:
            $name.="Short Maple ";
            $damage+=rand(5,6);
            $value+=rand(60,80);
            break;
          case 2:
            $name.="Maple ";
            $damage+=rand(7,8);
            $value+=rand(70,90);
            break;
          case 3:
            $name.="Long Maple ";
            $damage+=rand(8,10);
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
        $name .= "Bow";
        return new Bow($damage, $name, $value, $l);
    }


  static function GenerateArmour(Level $l, ItemKind $ik) : Armour{
    $armour;
    $hp;
    $armourKind;
    $name;
    $value;

    switch (rand(1,3)) {
      case 1:
        $armourKind = ArmourKind::LIGHT_ARMOUR;
        break;
      case 2:
        $armourKind = ArmourKind::MEDIUM_ARMOUR;
        break;
      case 3:
        $armourKind = ArmourKind::HEAVY_ARMOUR;
        break;
    }
    switch ($ik){
      case ItemKind::HEAD_ARMOUR:
      switch ($l) {
        case Level::LEVEL1:
        //1
          $name1 = "Badly Made ";
          $hp1h = 1;
          $armour1h = 1;
          $hp1m = 0;
          $armour1m = 1;
          $hp1l = 0;
          $armour1l = 0;
          $value1 = rand(5,9);
          $name2 = "";
          $hp2h = 3;
          $armour2h = 1;
          $hp2m = 1;
          $armour2m = 1;
          $hp2l = 0;
          $armour2l = 1;
          $value2 = rand(8,14);
          $name3 = "Good Made ";
          $hp3h = 4;
          $armour3h = 2;
          $hp3m = 2;
          $armour3m = 2;
          $hp3l = 0;
          $armour3l = 2;
          $value3 = rand(13,17);
          //2
          $name1h_2 = "Cheap Copper ";
          $hp1h_2 = rand(1,2);
          $armour1h_2 = 1;
          $name1m_2 = "Poor Lether ";
          $hp1m_2 = rand(0,1);
          $armour1m_2 = 1;
          $name1l_2 = "Poor Cloth ";
          $hp1l_2 = 1;
          $armour1l_2 = rand(0,1);
          $value1_2 = rand(6,10);

          $name2h_2 = "Copper ";
          $hp2h_2 = rand(2,4);
          $armour2h_2 = 2;
          $name2m_2 = "Lether ";
          $hp2m_2 = rand(1,2);
          $armour2m_2 = 1;
          $name2l_2 = "Cloth ";
          $hp2l_2 = 1;
          $armour2l_2 = 1;
          $value2_2 = rand(9,16);

          $name3h_2 = "Good Copper ";
          $hp3h_2 = rand(3,6);
          $armour3h_2 = rand(2,3);
          $name3m_2 = "Strong Lether ";
          $hp3m_2 = rand(2,3);
          $armour3m_2 = 2;
          $name3l_2 = "Expensive Cloth ";
          $hp3l_2 = rand(2,4);
          $armour3l_2 = 1;
          $value3_2 = rand(13,19);
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
        case ItemKind::BODY_ARMOUR:
          switch ($l) {
            case Level::LEVEL1:
          //1
          $name1 = "Badly Made ";
          $hp1h = rand(1,3);
          $armour1h = 2;
          $hp1m = rand(1,2);
          $armour1m = 1;
          $hp1l = 1;
          $armour1l = rand(0,1);
          $value1 = rand(6,10);
          $name2 = "";
          $hp2h = rand(2,5);
          $armour2h = rand(2,3);
          $hp2m = rand(2,3);
          $armour2m = rand(1,2);
          $hp2l = rand(1,2);
          $armour2l = 1;
          $value2 = rand(10,20);
          $name3 = "Good Made ";
          $hp3h = rand(3,8);
          $armour3h = rand(3,4);
          $hp3m = rand(3,5);
          $armour3m = rand(2,3);
          $hp3l = rand(1,2);
          $armour3l = 2;
          $value3 = rand(15,22);
          //2
          $name1h_2 = "Cheap Copper ";
          $hp1h_2 = rand(3,4);
          $armour1h_2 = 1;
          $name1m_2 = "Poor Lether ";
          $hp1m_2 = rand(1,3);
          $armour1m_2 = 1;
          $name1l_2 = "Poor Cloth ";
          $hp1l_2 = 2;
          $armour1l_2 = rand(0,1);
          $value1_2 = rand(8,12);

          $name2h_2 = "Copper ";
          $hp2h_2 = rand(3,6);
          $armour2h_2 = 2;
          $name2m_2 = "Lether ";
          $hp2m_2 = rand(2,5);
          $armour2m_2 = rand(1,2);
          $name2l_2 = "Cloth ";
          $hp2l_2 = rand(2,3);
          $armour2l_2 = 1;
          $value2_2 = rand(11,18);

          $name3h_2 = "Good Copper ";
          $hp3h_2 = rand(4,6);
          $armour3h_2 = rand(2,3);
          $name3m_2 = "Strong Lether ";
          $hp3m_2 = rand(3,4);
          $armour3m_2 = 2;
          $name3l_2 = "Expensive Cloth ";
          $hp3l_2 = rand(3,5);
          $armour3l_2 = 1;
          $value3_2 = rand(16,25);
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
        case ItemKind::GLOVES:
          switch ($l) {
            case Level::LEVEL1:
          //1
          $name1 = "Badly Made ";
          $hp1h = rand(1,3);
          $armour1h = 0;
          $hp1m = rand(1,2);
          $armour1m = 0;
          $hp1l = 1;
          $armour1l = 0;
          $value1 = rand(4,6);
          $name2 = "";
          $hp2h = rand(2,4);
          $armour2h = 0;
          $hp2m = rand(2,3);
          $armour2m = 0;
          $hp2l = 2;
          $armour2l = 0;
          $value2 = rand(6,10);
          $name3 = "Good Made ";
          $hp3h = rand(4,6);
          $armour3h = 1;
          $hp3m = rand(4,6);
          $armour3m = 0;
          $hp3l = rand(2,4);
          $armour3l = 0;
          $value3 = rand(10,15);
          //2
          $name1h_2 = "Cheap Copper ";
          $hp1h_2 = rand(1,2);
          $armour1h_2 = 0;
          $name1m_2 = "Poor Lether ";
          $hp1m_2 = 1;
          $armour1m_2 = 0;
          $name1l_2 = "Poor Cloth ";
          $hp1l_2 = rand(0,1);
          $armour1l_2 = 0;
          $value1_2 = rand(5,8);

          $name2h_2 = "Copper ";
          $hp2h_2 = rand(2,3);
          $armour2h_2 = 0;
          $name2m_2 = "Lether ";
          $hp2m_2 = rand(1,2);
          $armour2m_2 = 0;
          $name2l_2 = "Cloth ";
          $hp2l_2 = 1;
          $armour2l_2 = 1;
          $value2_2 = rand(6,9);

          $name3h_2 = "Good Copper ";
          $hp3h_2 = rand(3,5);
          $armour3h_2 = rand(0,1);
          $name3m_2 = "Strong Lether ";
          $hp3m_2 = rand(2,3);
          $armour3m_2 = rand(0,1);
          $name3l_2 = "Expensive Cloth ";
          $hp3l_2 = rand(2,3);
          $armour3l_2 = 0;
          $value3_2 = rand(9,13);
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
        case ItemKind::LEGS_ARMOUR:
          switch ($l) {
            case Level::LEVEL1:
          //1
          $name1 = "Badly Made ";
          $hp1h = rand(2,3);
          $armour1h = rand(1,2);
          $hp1m = rand(1,2);
          $armour1m = rand(0,1);
          $hp1l = rand(1,2);
          $armour1l = 0;
          $value1 = rand(6,10);
          $name2 = "";
          $hp2h = rand(3,4);
          $armour2h = rand(2,3);
          $hp2m = rand(2,3);
          $armour2m = rand(1,2);
          $hp2l = rand(1,3);
          $armour2l = rand(0,1);
          $value2 = rand(9,15);
          $name3 = "Good Made ";
          $hp3h = rand(5,7);
          $armour3h = rand(3,4);
          $hp3m = rand(4,6);
          $armour3m = 3;
          $hp3l = rand(2,4);
          $armour3l = rand(1,2);
          $value3 = rand(14,19);
          //2
          $name1h_2 = "Cheap Copper ";
          $hp1h_2 = rand(2,3);
          $armour1h_2 = 0;
          $name1m_2 = "Poor Lether ";
          $hp1m_2 = rand(1,2);
          $armour1m_2 = 0;
          $name1l_2 = "Poor Cloth ";
          $hp1l_2 = rand(0,1);
          $armour1l_2 = 0;
          $value1_2 = rand(7,9);

          $name2h_2 = "Copper ";
          $hp2h_2 = rand(3,4);
          $armour2h_2 = 1;
          $name2m_2 = "Lether ";
          $hp2m_2 = rand(2,3);
          $armour2m_2 = rand(0,1);
          $name2l_2 = "Cloth ";
          $hp2l_2 = rand(1,2);
          $armour2l_2 = rand(0,1);
          $value2_2 = rand(8,13);

          $name3h_2 = "Good Copper ";
          $hp3h_2 = rand(4,5);
          $armour3h_2 = rand(1,2);
          $name3m_2 = "Strong Lether ";
          $hp3m_2 = rand(3,4);
          $armour3m_2 = rand(1,2);
          $name3l_2 = "Expensive Cloth ";
          $hp3l_2 = rand(3,4);
          $armour3l_2 = rand(0,1);
          $value3_2 = rand(13,18);
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
        case ItemKind::BOOTS:
          switch ($l) {
            case Level::LEVEL1:
          //1
          $name1 = "Badly Made ";
          $hp1h = rand(1,3);
          $armour1h = 0;
          $hp1m = rand(0,2);
          $armour1m = 0;
          $hp1l = rand(0,1);
          $armour1l = 0;
          $value1 = rand(5,7);
          $name2 = "";
          $hp2h = rand(2,4);
          $armour2h = rand(0,1);
          $hp2m = rand(1,3);
          $armour2m = 0;
          $hp2l = rand(1,2);
          $armour2l = 0;
          $value2 = rand(7,12);
          $name3 = "Good Made ";
          $hp3h = rand(3,5);
          $armour3h = rand(0,2);
          $hp3m = rand(2,4);
          $armour3m = rand(0,1);
          $hp3l = rand(2,3);
          $armour3l = 0;
          $value3 = rand(12,15);
          //2
          $name1h_2 = "Cheap Copper ";
          $hp1h_2 = rand(1,2);
          $armour1h_2 = 0;
          $name1m_2 = "Poor Lether ";
          $hp1m_2 = rand(1,2);
          $armour1m_2 = 0;
          $name1l_2 = "Poor Cloth ";
          $hp1l_2 = 1;
          $armour1l_2 = 0;
          $value1_2 = rand(6,8);

          $name2h_2 = "Copper ";
          $hp2h_2 = rand(2,4);
          $armour2h_2 = rand(0,1);
          $name2m_2 = "Lether ";
          $hp2m_2 = rand(1,3);
          $armour2m_2 = 0;
          $name2l_2 = "Cloth ";
          $hp2l_2 = rand(1,2);
          $armour2l_2 = 0;
          $value2_2 = rand(7,11);

          $name3h_2 = "Good Copper ";
          $hp3h_2 = rand(3,5);
          $armour3h_2 = rand(1,2);
          $name3m_2 = "Strong Lether ";
          $hp3m_2 = rand(2,4);
          $armour3m_2 = rand(0,1);
          $name3l_2 = "Expensive Cloth ";
          $hp3l_2 = rand(2,3);
          $armour3l_2 = 0;
          $value3_2 = rand(10,14);
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
      }

        switch (rand(1,3)){
          case 1:
            $name = $name1;
            if($armourKind == ArmourKind::HEAVY_ARMOUR){$hp=$hp1h; $armour=$armour1h;}
            else if($armourKind == ArmourKind::MEDIUM_ARMOUR) {$hp=$hp1m; $armour=$armour1m;}
            else {$hp=$hp1l; $armour=$armour1l;}
            $value=$value1;
            break;
          case 2:
            $name = $name2;
            if($armourKind == ArmourKind::HEAVY_ARMOUR){$hp=$hp2h; $armour=$armour2h;}
            else if($armourKind == ArmourKind::MEDIUM_ARMOUR) {$hp=$hp2m; $armour=$armour2m;}
            else {$hp=$hp2l; $armour=$armour2l;}
            $value=$value2;
            break;
          case 3:
            $name = $name3;
            if($armourKind == ArmourKind::HEAVY_ARMOUR){$hp=$hp3h; $armour=$armour3h;}
            else if($armourKind == ArmourKind::MEDIUM_ARMOUR) {$hp=$hp3m; $armour=$armour3m;}
            else {$hp=$hp3l; $armour=$armour3l;}
            $value=$value3;
            break;
        }
        switch (rand(1,3)){
          case 1:
            if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.=$name1h_2; $hp+=$hp1h_2; $armour+=$armour1h_2;}
            else if($armourKind == ArmourKind::MEDIUM_ARMOUR) {$name.=$name1m_2; $hp+=$hp1m_2; $armour+=$armour1m_2;}
            else {$name.=$name1l_2; $hp+=$hp1l_2; $armour+=$armour1l_2;}
            $value+=$value1_2;
            break;
          case 2:
            if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.=$name2h_2; $hp+=$hp2h_2; $armour+=$armour2h_2;}
            else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.=$name2m_2; $hp+=$hp2m_2; $armour+=$armour2m_2;}
            else {$name.=$name2l_2; $hp+=$hp2l_2; $armour+=$armour2l_2;}
            $value+=$value2_2;
            break;
          case 3:
            if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.=$name3h_2; $hp+=$hp3h_2; $armour+=$armour3h_2;}
            else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.=$name3m_2; $hp+=$hp3m_2; $armour+=$armour3m_2;}
            else {$name.=$name3l_2; $hp+=$hp3l_2; $armour+=$armour3l_2;}
            $value+=$value3_2;
            break;
          }
          switch ($ik){
            case ItemKind::HEAD_ARMOUR:
              if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.="Heavy Helmet";}
              else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.="Medium Helmet";}
              else{$name.="Cap";}
              return new HeadArmour($armour, $hp, $name, $value, $l, $armourKind);
              break;
            case ItemKind::BODY_ARMOUR:
              if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.="Heavy Faulds";}
              else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.="Medium Byrnie";}
              else{$name.="Robe";}
              return new BodyArmour($armour, $hp, $name, $value, $l, $armourKind);
              break;
            case ItemKind::GLOVES:
              if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.="Heavy Gauntlets";}
              else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.="Gloves";}
              else{$name.="Thin gloves";}
              return new Gloves($armour, $hp, $name, $value, $l, $armourKind);
              break;
            case ItemKind::LEGS_ARMOUR:
              if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.="Heavy Legs";}
              else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.="Chausses";}
              else{$name.="Chausses";}
              return new Gloves($armour, $hp, $name, $value, $l, $armourKind);
              break;
            case ItemKind::BOOTS:
              if($armourKind == ArmourKind::HEAVY_ARMOUR){$name.="Heavy Sabatons";}
              else if($armourKind == ArmourKind::MEDIUM_ARMOUR){$name.="Rugged Shoes";}
              else{$name.="Shoes";}
              return new Gloves($armour, $hp, $name, $value, $l, $armourKind);
              break;
            }
          }
  static function GenerateOffHand(Level $l) : OffHand{
    $name = "";
    $dmg = 0;
    $hp = 0;
    $a = 0;
    $v = 0;

    switch(rand(1,2)){ //dagger or shield
      case 1: //Dagger
        switch($l){
          case Level::LEVEL1:
            switch(rand(1,3)){
              case 1:
                $name.="Sharp";
                $dmg = rand(1,2);
                break;
              case 2:
                $name.="Defensive";
                $a = rand(1,2);
                break;
              case 3:
                $name.="Vital";
                $hp = rand(2,3);
                break;
            }
              $name.=" Dagger";
              $dmg += rand(1,2);
              $v = rand(10,15);
              break;
            case Level::LEVEL2:
            case Level::LEVEL3:
            case Level::LEVEL4:
            case Level::LEVEL5:
            case Level::LEVEL6:
            default: break; //LEVEL7
        }
        return new Dagger($name, $v, $l, $dmg, $hp, $a);
      case 2: //Shield
        switch($l){
          case Level::LEVEL1:
          switch(rand(1,2)){
            case 1:
              $name.= "Defensive";
              $a = rand(1,2);
              break;
            case 2;
              $name.= "Vital";
              $hp = rand(2,5);
              break;
        }
          $name.=" Shield";
          $a+=rand(0,1);
          $hp+=rand(1,3);
          $v = rand(10,15);
          break;
          case Level::LEVEL2:
          case Level::LEVEL3:
          case Level::LEVEL4:
          case Level::LEVEL5:
          case Level::LEVEL6:
          default: break; //LEVEL7
      }
      return new Shield($name, $v, $l, $dmg, $hp, $a);
    }
  }


        }































 ?>
