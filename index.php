<?php
include 'Fan.php';
$fan1 = new Fan("Thống Nhất");
$fan2 = new Fan("Điện Máy");
$fan1->speed = $fan1->FAST;
$fan1->radius = 10;
$fan1->color = "yellow";
$fan1->on();
$fan1->toString();
$fan2->speed = $fan2->MEDIUM;
$fan2->radius = 5;
$fan2->color = "blue";
$fan2->off();
$fan2->toString();


?>