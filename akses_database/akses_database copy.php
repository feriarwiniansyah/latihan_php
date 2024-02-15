
<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
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

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Peter Griffin</option>
<option value="2">Lois Griffin</option>
<option value="3">Joseph Swanson</option>
<option value="4">Glenn Quagmire</option>
</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>