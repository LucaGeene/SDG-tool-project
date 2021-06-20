<?php

header('Content-Type: application/json');


//if ($this->app->environment('production')) {
//    $db_connection = pg_connect(
//        "host=ec2-34-250-16-127.eu-west-1.compute.amazonaws.com
//        dbname=dedfke5jc7lkug
//        user=lmwebnfnbkddnm
//        password=cf231efb04619fbced5ec559a67ba43d5a3f0a53bbc7c81a9bb5a2f08a4f7c1f") or die('Could not connect: ' . pg_last_error());
//    $result = pg_query($db_connection, "select COUNT(goalid) as projectsum from projects where verified::int = 1 group by goalid") or die('Query failed: ' . pg_last_error());
//    $data = array();
//    foreach ($result as $row) {
//        $data[] = $row;
//    }
//
//
//    pg_close($db_connection);
//
//    echo json_encode($data);
//
//} else if ($this->app->environment('local')) {
    $conn = mysqli_connect("localhost", "root", NULL, "sample_project");


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
//}


