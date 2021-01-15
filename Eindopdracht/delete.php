<?php
$conn = new mysqli("localhost", "root", "", "personen");
// $result = $conn->query("SELECT Voornaam, Achternaam, Straat, Huisnummer, Postcode, Woonplaats, Telefoonnummer, TijdToegevoegd, id FROM personen");

if(isset($_GET['did'])) {
    $delete_id = mysqli_real_escape_string($conn,$_GET['did']);
    $sql = mysqli_query($conn,"DELETE FROM personen WHERE id = '".$delete_id."'");
    if($sql) {
      header("location:index.php");
    } else {
        echo "ERROR";
    }
}
?>
