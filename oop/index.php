<?php
require_once "something.php";

$first = new Something();

echo $first->plus(10, 20);
echo "<br/>";
echo $first->minus(20, 30);
echo "<br/>";
echo $first->multiple(20, 30);
echo "<br/>";
echo $first->divider(20, 30);
