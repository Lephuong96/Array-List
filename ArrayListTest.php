<?php
include "ArrayList.php";


$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(5);
$listInteger->add(6);
$listInteger->add(7);
$listInteger->remove(3);
var_dump($listInteger);
echo "</br>";
echo $listInteger->get(5);
