<?php

include "MyList.php";

$listInteger = new mylist();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
echo $listInteger->get(-1);