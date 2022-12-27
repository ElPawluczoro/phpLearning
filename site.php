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


$offHand1 = GenerateItem::GenerateOffHand(Level::LEVEL1);
$offHand1->DisplayInformation();
$hero1 = new Warrior(10, 10, "Danik");
$hero1->AddToEquipment($offHand1);
$hero1->AddToEquipment(GenerateItem::GenerateMeleWeapon(Level::LEVEL1));
$hero1->DisplayInformation();
$hero1->DisplayEquipment();
$hero1->DisplayGear();
$hero1->EquipItem(1);
$hero1->EquipItem(1);
$hero1->DisplayInformation();
$hero1->DisplayEquipment();
$hero1->DisplayGear();
































     ?>
  </body>
</html>
