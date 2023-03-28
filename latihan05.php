<?php
    $age = array("peter"=>"35","Ben"=>"37","Joe"=>"43");
    header('content-Type: application/json; charset =utf-8)');
    echo json_encode($age);

    