<?php
include_once '../base/baza.php';

$baza = new Baza();

$sql = "SELECT * FROM Korisnik K JOIN Uloga U ON U.D_uloga=K.ID_uloga";
$stmt = $conn->prepare($sql); 
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['Korisnicko ime'] ." ". $row["Lozinka"]." ".$row["NazivUloge"];
}

?>