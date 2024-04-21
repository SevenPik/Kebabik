<?php
// Łączenie z bazą danych
$link = mysqli_connect("localhost", "root", "", "zadaniekebab");

// Sprawdzanie połączenia
if($link === false){
    die("Błąd połączenia: " . mysqli_connect_error());
}

// Sprawdzanie, czy dane zostały przesłane
if(isset($_POST["nazwa_lokalu"]) && isset($_POST["typ_kebaba"]) && isset($_POST["ocena"]) && isset($_POST["miasto"]) && isset($_POST["pin_name"]) && isset($_POST["latitude"]) && isset($_POST["longitude"])) {
    
    $nazwa_lokalu = mysqli_real_escape_string($link, $_POST["nazwa_lokalu"]);
    $typ_kebaba = mysqli_real_escape_string($link, $_POST["typ_kebaba"]);
    $ocena = mysqli_real_escape_string($link, $_POST["ocena"]);
    $miasto = mysqli_real_escape_string($link, $_POST["miasto"]);
    $pin_name = mysqli_real_escape_string($link, $_POST["pin_name"]);
    $latitude = mysqli_real_escape_string($link, $_POST["latitude"]);
    $longitude = mysqli_real_escape_string($link, $_POST["longitude"]);
    
    // Wstawianie danych do bazy - lokalizacja kebabu
    $sql_lokalizacja = "INSERT INTO kebaby (nazwa_lokalu, typ_kebaba, ocena, miasto, pin_name, latitude, longitude) 
                        VALUES ('$nazwa_lokalu', '$typ_kebaba', '$ocena', '$miasto', '$pin_name', '$latitude', '$longitude')";

    if(mysqli_query($link, $sql_lokalizacja)){
        echo "Lokalizacja kebabu dodana pomyślnie! ";
    } else {
        echo "Błąd podczas dodawania lokalizacji kebabu: " . mysqli_error($link);
    }
} else {
    echo "Nieprawidłowe dane formularza";
}

// Zamknięcie połączenia z bazą danych
mysqli_close($link);
?>
