<?php
function pascalTriangle($row)
{
    $i = 0;
    $j = 0;
    $k = 0;

    for ($i = 0; $i < $row; $i++)
    {

        for ($j = $i + 1; $j < $row; $j++)
        {

            echo "\t";
        }

        for ($j = 0; $j <= $i; $j++)
        {
            if ($j == 0 || $i == 0)
            {
                $k = 1;
            }
            else
            {
                $k = (int)($k * ($i - $j + 1) / $j);
            }
            echo "\t".strval($k)."\t";
        }
        print("\n");
    }
    print("\n");
}

echo pascalTriangle(6);

?>

