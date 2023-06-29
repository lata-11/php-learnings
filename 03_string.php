<?php
$str= "this is string <br>";
echo $str;
$lenn = strlen($str);
echo "the length of the string is:". $lenn . "Thank you";
echo "<br>";
echo "the reverse of the string is: ". strrev($str);
echo "<br>";
echo " the position of /is/ in the string is: ". strpos($str, "is");