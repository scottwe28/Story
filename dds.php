<?php
class Character {
public function attributes() {
$attributes = array(
    'Water',
    'Dark',
    'Wind',
    'Fire',
    'Earth',
    'Light',
);
return $attribute = $attributes[array_rand($attributes)];
$this->attributes();
}
public function classification() {
    $classification = array(
    'Samurai',
    'Monk',
    'Dragoon',
    'Ninja',
    'Barbarian',
    'Knight',
    'Necomancer',
);
return $classification = $classification[array_rand($classification)];
   $this->classification();
}
public function weapons() {
$weapons = array(
    'twin-swords',
    'sword', 
    'Staff',
    'Hammer',
    'double blade',
    'katana',
);
return $weapon = $weapons[array_rand($weapons)];
$this->weapons();
}
public function legions() {
    $legions = array(
    'Zombies',
    'Spiders',
    'Dragons',
    'Undead',
    'Werewovles',
    'Demons',
);
$legion = $legions[array_rand($legions)];
$this->legions();
  }
}

class Story extends Character {
    public function Advent() {
     echo $story = "The legendary " . $this->classification() . " now wields the ancient " . $this->weapons() . " of destruction, which channels the power of ". $this->attributes() .", so he can conquer all. But his greatest challenge will be to combat the legion of " . $this->legions() . "before all is lost";
    }
}




$player = new Story();
echo $player->Advent().PHP_EOL;
//$player2 = new Character();
//echo $player2->classification().PHP_EOL;
//echo $player2->attributes().PHP_EOL;
//echo $player2->weapons().PHP_EOL;
//echo $player->Advent().PHP_EOL;

?>