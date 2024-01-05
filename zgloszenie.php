<?php
$conn = mysqli_connect("localhost","root","","pogotowie");
$ratownicyid = $_POST['numerzespolu'];
$dyspozytorid = $_POST['numerdyzpozytora'];
$adres1 = $_POST['adres'];
$czas = date('H:i:s');
$query  = mysqli_query($conn,"INSERT INTO zgloszenia VALUES (NULL,$ratownicyid,$dyspozytorid,'$adres1',0,'$czas')");
mysqli_close($conn);
?>