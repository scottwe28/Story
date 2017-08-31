<?php

//an array containing a list of attributes
$attributes = array(
    'Water',
    'Dark',
    'Wind',
    'Fire',
    'Earth',
    'Light',
);

//an array containing a list of weapons
$weapons = array(
    'twin-swords',
    'sword', 'Staff',
    'Hammer',
    'double blade',
    'katana',
);

//an array containing a list of characters
$characters = array(
    'Samurai',
    'Monk',
    'Dragoon',
    'Ninja',
    'Barbarian',
    'Knight',
    'Necomancer',
);

//an array containing a list of legions
$legions = array(
    'Zombies',
    'Spiders',
    'Dragons',
    'Undead',
    'Werewovles',
    'Demons',
);

//grab a random attribute
$attribute = $attributes[array_rand($attributes)];

//grab a random weapon
$weapon = $weapons[array_rand($weapons)];

//grab a random character
$character = $characters[array_rand($characters)];

//grab a random legion
$legion = $legions[array_rand($legions)];

echo $story = "The legendary $character now wields the ancient $weapon of destruction, which channels the power of $attribute, so he can conquer all. But his greatest challenge will be to combat the legion of $legion before all is lost";