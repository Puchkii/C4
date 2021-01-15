<?php
$conn = new mysqli("localhost", "root", "", "personen");

$sql = "INSERT INTO personen (`Voornaam`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `woonplaats`, `Telefoonnummer` ) VALUES ('".$_POST['Voornaam']."', '".$_POST['Achternaam']."', '".$_POST['Straat']."', '".$_POST['num']."', '".$_POST['Postcode']."', '".$_POST['Woonplaats']."', '".$_POST['Telefoonnummer']."');";

if($conn->query($sql)){
  header("location: index.php");
} else {
  echo "Oeps";
}
 ?>
