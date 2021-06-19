<?php

header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", NULL, "laravel");


$sqlQuery = "select COUNT(goalid) as projectsum from projects where verified = 1 group by goalid";
//$sqlQuery = "SELECT t1.id, IFNULL(COUNT(t2.name),  0) AS projectsum
//FROM projects AS t1
//LEFT JOIN test AS t2 ON t1.id = t2.id_user_ref
//GROUP BY t1.id;"
$result = mysqli_query($conn, $sqlQuery);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);

