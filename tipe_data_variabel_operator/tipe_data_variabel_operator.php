<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR PHP</title>
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

    <!-- tipe_data -->

    <!-- variabel -->

    <!-- operator -->
    <p>Operator</p>
    <p>Di Operator ini ada beberapa macam seperti:</p>
        <!-- <p>Arithmetic operators ada addition,subtraction,multipplication,division,modulus,exponentiation</p>
        <p>Assignment operators</p>
        <p>Comparison operators,</p>
        <p>Increment/Decrement operators,</p>
        <p>Logical operators,</p>
        <p>String operators,</p>
        <p>Array operators,</p>
        <p>Conditional assignment operator</p> -->

    <table border="3">
        <!-- TIPE DATA -->
        <tr>
            <th>Contoh Type Data</th>
        </tr>
        <tr>
            <td>
                <p>Tipe data</p>
                <?php
                $x = 5;
                var_dump($x);

                echo "<br>";
                ?>
            </td>
        </tr>
        <!-- VARIABEL -->
        <tr>
            <th>Contoh Variabel</th>
        </tr>
        <tr>
            <td>
            <p>Variabel</p>
            <?php
            $x = 5;
            $y = "john";

            echo $x;
            echo "<br>";
            echo $y;
            ?>
            </td>
        </tr>

        <tr>
            <td>    
                <!-- contoh Arithmetic -->
                <p>contoh Arithmetic</p>
                <?php
                $x = 134903;
                $y = 102983;

                echo $x + $y;
                ?>
            </td>
            <td>    
                <!-- contoh Arithmetic -->
                <p>contoh Assignment</p>
                <?php
                $x = 10;  
                echo $x;
                ?>
            </td>

            <td>    
                <!-- contoh Arithmetic -->
                <p>contoh Comparison</p>
                <?php
                $x = 100;  
                $y = "100";
                
                var_dump($x <> $y); // returns false because values are equal
                ?>              
            </td>
            <td>    
                <!-- contoh Arithmetic -->
                <p>contoh Increment/Decrement</p>
                <?php
                $x = 10;  
                echo $x++;
                ?>  
            </td>
        </tr>
        <tr>
            <td>
                <p>contoh logical</p>
                <?php
                $x = 100;  
                $y = 50;

                if ($x == 100 and $y == 50) {
                    echo "Hello world!";
                }
                ?>
            </td>
            <td>
                <p>contoh array</p>
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                print_r($y + $x); // union of $x and $y
                ?>
            </td>
            <td>
                <p>contoh Conditional Assignment</p>
                <?php
                // if empty($user) = TRUE, set $status = "anonymous"
                echo $status = (empty($user)) ? "anonymous" : "logged in";
                echo("<br>");

                $user = "John Doe";
                // if empty($user) = FALSE, set $status = "logged in"
                echo $status = (empty($user)) ? "anonymous" : "logged in";
                ?>  
            </td>
        </tr>
    </table>
</body>
</html>