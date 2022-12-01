<?php
class Fight {

  static function Fight(Hero $h, Monster $m){
    while($h->IsAlive() && $m->IsAlive()){
      $h->DealDamage($m);
      $m->DealDamage($h);
      if(!$m->IsAlive()) Fight::GiveLoot($h, $m);

    }
}
    static function GiveLoot(Hero $h, Monster $m){
      $randomitem = rand(0,count($m->GetDropList())-1);
      $lootItem = $m->GetDropList()[$randomitem];
      if($lootItem->GetKind()==ItemKind::CURRENCY) $h->AddToPocket($lootItem);
      else $h->AddToEquipment($lootItem);
      echo "You have got:<br>";
      echo $lootItem->DisplayInformation();
      echo "---------------------<br>";
    }
}



 ?>
