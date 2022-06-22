<?php
function print_pattern($num)
{
    for ($i = 1; $i <= $num; $i++) 
    {
        for ($k = $num; $k > $i; $k--) 
        {
            echo "  ";        
        }
        for ($j = 1; $j <= $i; $j++) 
        {
            echo chr(64 + $j) . " ";        
        }        
        for ($j = $i - 1; $j >= 1; $j--) 
        {
            echo chr(64 + $j) . " ";        
        }
        echo "\n";    
    }
}

$num = 5;
print_pattern($num);
?>