<?php
$conn = new mysqli("localhost", "root", "", "personen");

$sqlvoornaam = "UPDATE personen SET `Voornaam`='".$_POST['Voornaam']."' WHERE id = ".$_POST['id'];
$sqlachternaam = "UPDATE personen SET `Achternaam`='".$_POST['Achternaam']."' WHERE id = ".$_POST['id'];
$sqlstraat = "UPDATE personen SET `Straat`='".$_POST['Straat']."' WHERE id = ".$_POST['id'];
$sqlhuisnummer = "UPDATE personen SET `Huisnummer`='".$_POST['num']."' WHERE id = ".$_POST['id'];
$sqlpostcode = "UPDATE personen SET `Postcode`='".$_POST['Postcode']."' WHERE id = ".$_POST['id'];
$sqlwoonplaats = "UPDATE personen SET `Woonplaats`='".$_POST['Woonplaats']."' WHERE id = ".$_POST['id'];
$sqltelefoonnummer = "UPDATE personen SET `Telefoonnummer`='".$_POST['Telefoonnummer']."' WHERE id = ".$_POST['id'];

if($conn->query($sqlvoornaam)){
  header("location: index.php");
} else {
  echo "Oeps";
}

if($conn->query($sqlachternaam)){
  header("location: index.php");
} else {
  echo "Oeps";
}

if($conn->query($sqlstraat)){
  header("location: index.php");
} else {
  echo "Oeps";
}

if($conn->query($sqlhuisnummer)){
  header("location: index.php");
} else {
  echo "Oeps";
}

if($conn->query($sqlpostcode)){
  header("location: index.php");
} else {
  echo "Oeps";
}

if($conn->query($sqlwoonplaats)){
  header("location: index.php");
} else {
  echo "Oeps";
}

if($conn->query($sqltelefoonnummer)){
  header("location: index.php");
} else {
  echo "Oeps";
}
 ?>
