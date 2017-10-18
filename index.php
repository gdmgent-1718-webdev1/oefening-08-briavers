<?php
echo("<div style='width:300px;'>");
for($i=0; $i<100; $i++){
    $grey = 2.5*$i;
    $tempString = "<div style='background-color: rgb(${grey},${grey},${grey});border: 1px solid black; height: 40px; width: 40px; float:left;> </div>";
    echo($tempString);
    
  
};
echo("</div");