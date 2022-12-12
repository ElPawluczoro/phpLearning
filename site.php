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


$weapon = GenerateItem::GenerateMeleWeapon(Level::LEVEL1);
$warrior1= new Warrior(1,10,"Danik");
$warrior1->AddToEquipment($weapon);
$warrior1->DisplayEquipment();
$warrior1->DisplayGear();
$warrior1->DisplayInformation();
$warrior1->EquipItem(1);
$warrior1->DisplayEquipment();
$warrior1->DisplayGear();
$warrior1->DisplayInformation();
































     ?>
  </body>
</html>
