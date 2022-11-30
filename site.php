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
    // foreach (glob("Classes/Unit/*.php") as $filename) {
    //   include $filename;
    // }

    function Fight(Unit $unit1, Unit $unit2){
      while($unit1->IsAlive() && $unit2->IsAlive()){
        $unit1->DealDamage($unit2);
        $unit2->DealDamage($unit1);
      }
    }

      $weapon1 = new Sword(3, "Rusty Sword");
      $weapon1->DisplayInformation();

      $weapon2 = new Mace(2, "Rusty Mace");
      $weapon2->DisplayInformation();

      $weapon3 = new Bow(1, "Simply Bow");
      $weapon3->DisplayInformation();

     ?>
  </body>
</html>
