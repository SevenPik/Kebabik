<?php
$link = mysqli_connect("localhost", "root", "", "zadaniekebab");
$result = mysqli_query($link, "SELECT * FROM kebaby");

$lokacje = array();
while ($row = mysqli_fetch_assoc($result)) {
    $lokacje[] = $row;
}

echo json_encode($lokacje);
?>