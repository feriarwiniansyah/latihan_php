<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}




$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>

</body>
</html>