
<?php
abstract class Unit{
  protected $healthPoints;
  protected $damage;
  protected $armour;
  protected $name;

  public function DisplayInformation(){

    echo "Name: $this->name <br>";
    echo "Health Points: $this->healthPoints<br>
          Damage: $this->damage<br>
          Armour: $this->armour<br>";
    if(!$this->IsAlive()) echo "Dead<br>";
    echo "---------------------<br>";

  }

  function __construct(float $hp, float $dmg){
    $this->healthPoints = $hp;
    $this->damage = $dmg;
  }

  public function DealDamage(Unit $u){
    $u->GetDamage($this->ReturnDamage());
  }

  public function GetDamage(float $d){
    if($d>$this->armour) $this->healthPoints-=($d-$this->armour);
    else $this->healthPoints--;
    $this->DisplayInformation();
  }

  public function ReturnDamage() : float {
    return $this->damage;
  }

  public function IsAlive() : bool{
    if($this->healthPoints<=0) return false;
    else return true;
  }
}
?>
