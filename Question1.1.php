<?php
$n = 10;
for ($i = 10; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo " ";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("*");
    echo "\n";
}
?>