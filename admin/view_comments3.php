<?php
include 'conn_comments3.php';
$data = array();
$sql = "SELECT *  FROM `comments3` ORDER BY id desc";
$result = $conn->query($sql);
while($row = $result->fetch()){
        array_push($data, $row);
        array_push($data);
}

echo json_encode($data);
$conn = null;
exit();



