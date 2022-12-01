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
    // foreach (glob("Classes/Unit/*.php") as $filename) {
    //   include $filename;
    // }

    $warrior1 = new Warrior(10, 5, "Danik");
    Fight::Fight($warrior1, new Goblin());
    $warrior1->DisplayEquipment();
    $warrior1->DisplayPocket();














     ?>
  </body>
</html>
