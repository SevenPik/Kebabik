<?php
$link = mysqli_connect("localhost", "root", "", "zadaniekebab");
$result = mysqli_query($link, "SELECT * FROM kebaby ORDER BY ocena DESC");

$ranking = array();
while ($row = mysqli_fetch_assoc($result)) {
    $ranking[] = $row;
}

echo json_encode($ranking);
?>