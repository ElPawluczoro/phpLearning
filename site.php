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

    $warrior1 = new Warrior(10, 1, "Danik");
    $warrior1->DisplayInformation();
    $warrior1->AddToEquipment(GenerateItem::GenerateMeleWeapon(Level::LEVEL1));
    $warrior1->DisplayEquipment();
    $warrior1->EquipItem(1);
    $warrior1->DisplayGear();
    $warrior1->DisplayEquipment();
    $warrior1->DisplayInformation();
    $warrior1->UnequipItem(ItemKind::WEAPON);
    $warrior1->DisplayGear();
    $warrior1->DisplayEquipment();
    $warrior1->DisplayInformation();















     ?>
  </body>
</html>
