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
    // foreach (glob("Classes/Unit/*.php") as $filename) {
    //   include $filename;
    // }

    // $warrior1 = new Warrior(10, 1, "Danik");
    // $warrior1->DisplayInformation();
    // $warrior1->AddToEquipment(GenerateItem::GenerateMeleWeapon(Level::LEVEL1));
    // $warrior1->DisplayEquipment();
    // $warrior1->EquipItem(1);
    // $warrior1->DisplayGear();
    // $warrior1->DisplayEquipment();
    // $warrior1->DisplayInformation();
    // $warrior1->UnequipItem(ItemKind::WEAPON);
    // $warrior1->DisplayGear();
    // $warrior1->DisplayEquipment();
    // $warrior1->DisplayInformation();

    $warrior1 = new Warrior(10, 1, "Danik");
    $warrior1->DisplayInformation();
    $headArmour1 = new HeadArmour(3, 2, "Helmet", 30, Level::LEVEL1, ArmourKind::LIGHT_ARMOUR);
    $bodyArmour1 = new BodyArmour(3, 2, "Boody", 30, Level::LEVEL1, ArmourKind::LIGHT_ARMOUR);
    $gloves = new Gloves(3, 2, "Gloves", 30, Level::LEVEL1, ArmourKind::LIGHT_ARMOUR);
    $legs = new LegsArmour(3, 2, "Legs", 30, Level::LEVEL1, ArmourKind::LIGHT_ARMOUR);
    $boots = new Boots(3, 2, "Boots", 30, Level::LEVEL1, ArmourKind::LIGHT_ARMOUR);
    $headArmour1->DisplayInformation();
    $warrior1->AddToEquipment($headArmour1);
    $warrior1->AddToEquipment($bodyArmour1);
    $warrior1->AddToEquipment($gloves);
    $warrior1->AddToEquipment($legs);
    $warrior1->AddToEquipment($boots);
    $warrior1->DisplayEquipment();
    $warrior1->EquipItem(1);
    $warrior1->EquipItem(1);
    $warrior1->EquipItem(1);
    $warrior1->EquipItem(1);
    $warrior1->EquipItem(1);
    $warrior1->DisplayGear();
    $warrior1->DisplayEquipment();
    $warrior1->DisplayInformation();
    $warrior1->UnequipItem(ItemKind::HEAD_ARMOUR);
    $warrior1->UnequipItem(ItemKind::BODY_ARMOUR);
    $warrior1->UnequipItem(ItemKind::GLOVES);
    $warrior1->UnequipItem(ItemKind::LEGS_ARMOUR);
    $warrior1->UnequipItem(ItemKind::BOOTS);
    $warrior1->DisplayGear();
    $warrior1->DisplayEquipment();
    $warrior1->DisplayInformation();














     ?>
  </body>
</html>
