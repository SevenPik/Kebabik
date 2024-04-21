<?php

    $nazwa=$_GET["nazwa"];  
     $ocena=$_GET["ocena"];
     $miasto=$_GET["miasto"];
     echo"nazwa kebaba: $nazwa ocena kebaba: $ocena miasto kebaba: $miasto";
$link=mysqli_connect("localhost", "root", "", "zadanieKebab");
mysqli_query($link, "INSERT INTO Kebaby VALUE(
    '$nazwa',
    $ocena,
    '$miasto'
)");

?>