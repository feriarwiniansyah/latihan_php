<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
         <!--BIODATA DIRI-->
         <div class="biodata">
        <h1>MY PROFIL</h1>
        <br>
        <hr color="black">
        <hr color="black"> 
    </div>
    <div class="text-isi">
        <p><img src="myfoto.jpg"></p>
        <p>Perkenalkan saya Feri Arwiniansyah</p>
        <p>Saya dari kelas XI RPL</p>
        <p>Dengan nomor NIT 2223595</p>
        <p>tanggal praktikum 30 JANUARI 2024</p>
    </div>
    <!--AKHIR BIODATA-->


<?php
$favcolor = "red";

switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>