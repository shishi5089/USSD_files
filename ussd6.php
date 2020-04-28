<?php

$mystring = "*188*1*2*";

$result = explode("*",$mystring);

//echo $result;

for ($i = 0; $i< count($result); ++$i){
echo $result[$i]. "";
}

echo array_shift($result);?>