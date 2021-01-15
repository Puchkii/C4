<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// connection maken
$conn = new mysqli("localhost", "root", "", "personen");

// json decoden
$jd = json_decode(file_get_contents("php://input"));

// $result = $conn->query("SELECT * FROM personen");
//
// $data = "";
// while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
//   if ($data != "") {$data .= ",";}
//   $data .= '{"Voornaam":"'  . $rs["Voornaam"] . '",';
//   $data .= '"Achternaam":"' . $rs["Achternaam"]   . '",';
//   $data .= '"Straat":"'. $rs["Straat"]     . '",';
//   $data .= '"Huisnummer":"'. $rs["Huisnummer"]     . '",';
//   $data .= '"Postcode":"'. $rs["Postcode"]     . '",';
//   $data .= '"Woonplaats":"'. $rs["Woonplaats"]     . '",';
//   $data .= '"Telefoonnummer":"'. $rs["Telefoonnummer"]     . '"}';
// }
// $data ='{"records":['.$data.']}';
// echo $data;
//
// $request_type = $data->request_type;
//
// haal alle data
if($request_type == 2) {
  $Voornaam = $data->Voornaam;
  $Achternaam = $data->Achternaam;
  $Straat = $data->Straat;
  $Huisnummer = $data->Huisnummer;
  $Postcode = $data->Postcode;
  $Woonplaats = $data->Woonplaats;
  $Telefoonnummer = $data->Telefoonnummer;

  // controle of gebruiker bestaat
  $stmt = $conn->prepare("SELECT * FROM personen where Voornaam=?, Achternaam=?, Straat=?, Huisnummer=?, Postcode=?, Woonplaats=?, Telefoonnummer=?");
  $stmt->bind_param('s',$Voornaam);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();
  $return_arr = array();
  if($result->num_rows == 0) {
    // toevoegen
    $insertSQL = "INSERT INTO personen(Voornaam, Achternaam, Straat, Huisnummer, Postcode, Woonplaats, Telefoonnummer) values(?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($insertSQL);
    $stmt->bind_param("sssssss", $Voornaam, $Achternaam, $Straat, $Huisnummer, $Postcode, $Woonplaats, $Telefoonnummer);
    $stmt->execute();

    $lastInsertId = $stmt->insertId;
    if($lastInsertId > 0) {
      $return_arr[] = array("id"=>$lastInsertId, "Voornaam"=>$Voornaam, "Achternaam"=>$Achternaam, "Straat"=>$Straat, "Huisnummer"=>$Huisnummer, "Postcode"=>$Postcode, "Woonplaats"=>$Woonplaats, "Telefoonnummer"=>$Telefoonnummer);
    }
    $stmt->close();
  }
  echo json_encode($return_arr);
  exit;
}
// verwijderen
if($request_type == 3) {
  $userid = $data->userid;

  // checken op bestaande userid
  $stmt = $conn->prepare("SELECT * FROM personen WHERE id=?");
  $stmt->bind_param('i', $userid);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();

  if($result->num_rows > 0) {
    // verwijderd
    $deleteSQL = "DELETE FROM personen WHERE id=?";
    $stmt = $conn->prepare($deleteSQL);
    $stmt->bind_param('i',$userid);
    $stmt->execute();
    $stmt->close();

    echo 1;
  }else{
    echo 0;
  }
  exit;
}
$conn->close();
?>
