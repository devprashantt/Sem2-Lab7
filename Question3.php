<?php
$unit = (int)readline("What Is The Unit ?\n");

$cost = 0;

if ($unit<50 && $unit>=0) {
  
    $cost = 50*(3.50);

} elseif ($unit>=50 && $unit < 150) {

    $cost = 50*(3.50) + ($unit-50)*4.00;
  
} elseif ($unit>=150 && $unit < 250) {

    $cost = 50*(3.50) + (100)*4.00 + ($cost-150)*5.20;
  
} elseif ($unit>=250) {
    $cost = 50*(3.50) + (100)*4.00 + (100)*5.20 + 250*(6.50);
}

echo $cost;

?>