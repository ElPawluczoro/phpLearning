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
    // foreach (glob("Classes/Unit/*.php") as $filename) {
    //   include $filename;
    // }

    function Fight(Unit $unit1, Unit $unit2){
      while($unit1->IsAlive() && $unit2->IsAlive()){
        $unit1->DealDamage($unit2);
        $unit2->DealDamage($unit1);
      }
    }

    $warrior1 = new Warrior(10, 5, "Danik");
    $warrior1->DisplayInformation();
    //array_push($warrior1->pocket, new Coins(0));
    $warrior1->DisplayPocket();
    $warrior1->AddToPocket(new Coins(10));
    $warrior1->DisplayPocket();
    $warrior1->pocket[0]->DisplayInformation();














     ?>
  </body>
</html>
