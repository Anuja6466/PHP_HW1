
<?php
$cars=array(
     "Fortuner" => "Toyota",
    "Mustang" => "Ford",
    "Model S" => "Tesla",
    "Civic" => "Honda",
    "Swift" => "Maruti"
);
foreach($cars as $car => $brand){
    echo "$car with brand $brand.<br>";
}
?>