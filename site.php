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

    // foreach (glob("Classes/Unit/*.php") as $filename) {
    //   include $filename;
    // }

    function Fight(Unit $unit1, Unit $unit2){
      while($unit1->IsAlive() && $unit2->IsAlive()){
        $unit1->DealDamage($unit2);
        $unit2->DealDamage($unit1);
      }
    }

    $goblin1 = new Goblin();
    $goblin1->DisplayInformation();

    $warrior1 = new Warrior(10,3,"Danik");
    $warrior1->DisplayInformation();

    Fight($warrior1, $goblin1);
     ?>
  </body>
</html>
