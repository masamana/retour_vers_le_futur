<?php
$presentTime = new DateTime();
$parisTimeZone = new DateTimeZone('Europe/Paris');
$presentTime->setTimeZone($parisTimeZone);
$destinationTime = new DateTime('2033-04-17 16:30');
$destinationTime->setTimeZone($parisTimeZone);




echo $presentTime->format('M d Y A h i') . "\n";
echo $destinationTime->format('M d Y A h i') . "\n";

$intervall = $presentTime->diff($destinationTime);
echo $intervall->format('%y années %m mois %d jours %h heures %i minutes') . "\n";
// var_dump($intervall);

$intervallMinutes = $intervall->days * 24 * 60;
$intervallMinutes += $intervall->h * 60;
$intervallMinutes += $intervall->i;

echo $intervallMinutes . "\n";

$carburant = ceil($intervallMinutes / 10000);


echo $carburant . "\n";
