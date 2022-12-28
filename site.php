<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once "Classes/Unit/Monster.php";
    require_once "Classes/Unit/Hero.php";
    require_once "Classes/Unit/Unit.php";
    require_once "Classes/Items/Item.php";
    require_once "Classes/Items/Currency.php";
    require_once "Classes/Items/Weapon.php";
    require_once "Classes/Items/Armour.php";
    require_once "Classes/Items/LootObject.php";
    require_once "Classes/Fight/Fight.php";
    require_once "Classes/Location/Location.php";
    require_once "Classes/Location/Place.php";
    require_once "Classes/Items/GenerateItem.php";
    require_once "Classes/Items/OffHand.php";


$goblin1 = new Goblin();
$goblin1->displayDropList();
$goblin1->DisplayInformation();
$warrior1 = new Warrior(15,4,"Danik");
$warrior1->DisplayInformation();

Fight::Fight($warrior1, $goblin1);

$warrior1->DisplayInformation();
$warrior1->DisplayEquipment();






























     ?>
  </body>
</html>
