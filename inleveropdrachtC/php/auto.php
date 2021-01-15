<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

// $conn = new mysqli("localhost", "root", "", "bedrijf");
// $result = $conn->query("SELECT bedrijfsnaam, adres, woonplaats, telnr FROM bedrijf");

// $bedrijfsnaam = array();
// $adres = array();
// $woonplaats = array();
// $telnr = array();

// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     $bedrijfsnaam[$row['num']] = $row['bedrijfsnaam'];
//     $adres[$row['num']] = $row['adres'];
//     $woonplaats[$row['num']] = $row['woonplaats'];
//     $telnr[$row['num']] = $row['telnr'];
//   }
// }
// else {
//   echo "error: auto.php";
// }
// echo $bedrijfsnaam[0];
// $conn->close();


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// connection maken en query doen
$conn = new mysqli("localhost", "root", "", "bedrijf");
$result = $conn->query("SELECT bedrijfsnaam, adres, woonplaats, telnr FROM bedrijf");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"bedrijfsnaam":"'  . $rs["bedrijfsnaam"] . '",';
  $outp .= '"adres":"'   . $rs["adres"]        . '",';
  $outp .= '"woonplaats":"'   . $rs["woonplaats"]        . '",';
  $outp .= '"telnr":"'. $rs["telnr"]     . '"}';
}
$outp ='{"records":['.$outp.']}';

print_r($outp);

$conn->close();
?>
