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


$head1 = GenerateItem::GenerateArmour(Level::LEVEL1, ItemKind::HEAD_ARMOUR);
$head1->DisplayInformation();

$body1 = GenerateItem::GenerateArmour(Level::LEVEL1, ItemKind::BODY_ARMOUR);
$body1->DisplayInformation();

$gloves1 = GenerateItem::GenerateArmour(Level::LEVEL1, ItemKind::GLOVES);
$gloves1->DisplayInformation();

$legs1 = GenerateItem::GenerateArmour(Level::LEVEL1, ItemKind::LEGS_ARMOUR);
$legs1->DisplayInformation();

$shoes1 = GenerateItem::GenerateArmour(Level::LEVEL1, ItemKind::BOOTS);
$shoes1->DisplayInformation();















     ?>
  </body>
</html>
