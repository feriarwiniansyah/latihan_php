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
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Salah itu wajar!!!!!!!!!!!", 8);
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
?>

</body>
</html>