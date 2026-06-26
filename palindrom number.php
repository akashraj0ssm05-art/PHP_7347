<?php
$num = 121;
$original = $num;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

if ($original == $reverse)
    echo "$original is a Palindrome Number";
else
    echo "$original is Not a Palindrome Number";
?>