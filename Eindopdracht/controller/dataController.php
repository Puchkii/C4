<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// connection maken en query doen
$conn = new mysqli("localhost", "root", "", "personen");
$result = $conn->query("SELECT Voornaam, Achternaam, Straat, Huisnummer, Postcode, Woonplaats, Telefoonnummer, TijdToegevoegd, id FROM personen");


$Voornaam = array(5);
$Achternaam = array(5);
$Straat = array(5);
$Huisnummer = array(5);
$Postcode = array(5);
$Woonplaats = array(5);
$Telefoonnummer = array(5);
$TijdToegevoegd = array(5);
$id = array(5);

echo "[\n";
// undefined array key "num" lijn 17 t/m 20
if ($result->num_rows > 0) {
  $separator = "";
  while($row = $result->fetch_assoc()) {
    echo $separator;
    echo "{\"Voornaam\":\"" . $row['Voornaam'] . "\",\n";
    echo "\"Achternaam\":\"" . $row['Achternaam'] . "\",\n";
    echo "\"Telefoonnummer\":\"" . $row['Telefoonnummer'] . "\",\n";
    echo "\"Straat\":\"" . $row['Straat'] . "\",\n";
    echo "\"Huisnummer\":\"" . $row['Huisnummer'] . "\",\n";
    echo "\"Postcode\":\"" . $row['Postcode'] . "\",\n";
    echo "\"Woonplaats\":\"" . $row['Woonplaats'] . "\",\n";
    echo "\"TijdToegevoegd\":\"" . $row['TijdToegevoegd'] . "\",\n";
    echo "\"id\":\"" . $row['id'] . "\"}\n";
    $separator = ",";
  }
}
else {
  echo "Error: data kon niet worden opgehaald :(";
}
echo "]";
$conn->close();
?>
