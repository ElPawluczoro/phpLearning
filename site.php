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
    require_once "Classes/Items/LootObject.php";
    require_once "Classes/Fight/Fight.php";
    require_once "Classes/Location/Location.php";
    require_once "Classes/Location/Place.php";
    require_once "Classes/Items/GenerateItem.php";
    // foreach (glob("Classes/Unit/*.php") as $filename) {
    //   include $filename;
    // }

    $weapon1 = GenerateItem::GenerateMeleWeapon(Level::LEVEL1);
    $weapon1->DisplayInformation();
    $weapon2 = GenerateItem::GenerateMeleWeapon(Level::LEVEL2);
    $weapon2->DisplayInformation();
    $weapon3 = GenerateItem::GenerateMeleWeapon(Level::LEVEL3);
    $weapon3->DisplayInformation();

















     ?>
  </body>
</html>
