<?php
    //model 1
//$cars = array ("volvo",:BMW","Toyota");

//model 2
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

header('content-Type: application/json; charset =utf-8)');
echo json_encode($cars);

