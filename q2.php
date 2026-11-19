<?php
function CalculatePerimeter($length,$width){
    $perimeter=(2*($length + $width));
    return $perimeter;
} 
$result=CalculatePerimeter(10,5);
echo "Perimeter of Rectangle is:".$result;
?>


