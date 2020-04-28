<?php

$mystring = "*188*1*2*";

$result = explode("*",$mystring);

echo $result;

echo count($result);//see that count(array)returns
?>