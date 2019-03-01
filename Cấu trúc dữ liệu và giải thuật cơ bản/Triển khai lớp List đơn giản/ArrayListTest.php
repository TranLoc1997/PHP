<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 27/10/2018
 * Time: 21:55
 */
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
echo $listInteger->get(-1);