    <?php
  

$attribute = array("Water", "Dark","Wind","Fire","Earth","Light");
$weapon = array("twin-swords ", "sword", "Staff ","Hammer ","double blade ", "katana ");
$character = array("Samurai ", "Monk ", "Dragoon ", "Ninja ", "Barbarian ", "Knight ", "Necomancer ");
$legion = array("Zombies", "Spiders", "Dragons", "Undead", "Werewovles", "Demons");

$a2 = $attribute[array_rand($attribute)];
 $w2 =$weapon[array_rand($weapon)];
 $c2 = $character[array_rand($character)];
 $l2 = $legion[array_rand($legion)];

echo $story ="The legendary $c2 now wields the ancient $w2 of destruction, which channels the power of $a2, so he can conquer all. But his greatest challenge will be to combat the legion of $l2 before all is lost";