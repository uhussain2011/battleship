<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
require("class/shipclass.php");
echo "Enter Name for Ship # 1: ";
$name1=  readline();
echo "Enter Attack value for $name1: ";
$attack1 = intval(readline());
echo "Enter Defence value (1, 2 or 3) for $name1: ";
$defence1 = intval(readline());
while($defence1 < 1 || $defence1 > 3)
{
	echo "Invalid value for devence. Enter 1, 2 or 3: ";
	$defence1 = intval(readline());
}



echo "Enter Name for Ship # 2: ";
$name2=  readline();
echo "Enter Attack value for $name2: ";
$attack2 = intval(readline());
echo "Enter Defence value (1, 2 or 3) for $name2: ";
$defence2 = intval(readline());
while($defence2 < 1 || $defence2 > 3)
{
	echo "Invalid value for devence. Enter 1, 2 or 3: ";
	$defence2 = intval(readline());
}

$myShip = new BattleShip($name1, 100, $attack1, $defence1);
$enemyShip = new BattleShip($name2, 100, $attack2, $defence2);
echo $myShip->getInfo();
echo $enemyShip->getInfo();
$round = 1;
echo "H1";
while($myShip->getHealth() > 0 && $enemyShip->getHealth() > 0)
{
	echo "******";
	echo "Round: $round";
	echo $myShip->getInfo();
	echo $enemyShip->getInfo();

	$myShip->attackShip($enemyShip);
	if($enemyShip->getHealth() > 0)
		$enemyShip->attackShip($myShip);
	echo "*******\n\n\n";
	$round ++;
 }
echo "End of Gam \n";
if($myShip->getHealth() > 0) echo $myShip->getName() . " Won!";
else $enemyShip->getName() . " Won!";