<?php
$link = mysqli_connect("localhost", "root", "", "zadanieKebab");
$result = mysqli_query($link, "SELECT * FROM Kebaby ORDER BY ocena DESC LIMIT 3");

$top3 = array();
while ($row = mysqli_fetch_assoc($result)) {
    $top3[] = $row;
}

echo json_encode($top3);
?>