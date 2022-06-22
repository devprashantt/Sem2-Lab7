<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ((($column == 1 or $column == 5) and $row < 2) or $row == $column and $column > 0 and $column < 4 or ($column == 4 and $row == 2) or (($column == 3) and $row > 3))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
?>