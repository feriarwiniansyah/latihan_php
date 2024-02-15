<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>

		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

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


</head>
<body>  
<div class="d-flex" style="margin-left: 20%;">
<div class="card bg-primary" style="margin-top: 7px; width: 30%%; height: 95vh;">
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user" style="margin-left: 35%;">
											<img alt="" src="myfoto.jpg">
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div style="margin-left: 35%;">
												<h5 class="main-profile-name">FERI AS</h5>
												<p class="main-profile-name-text">XI RPL</p>
											</div>
										</div>
										<h6 class="text-black">Bio</h6>
										<div class="main-profile-bio text-black">
											<p>tugas php dasar dengan menggunakan gabungan template Azira</p>
										</div><!-- main-profile-bio -->
										
										<div class="main-profile-work-list">
											<div class="media">
												<div class="media-logo bg-danger-transparent text-black">
													<i class="icon ion-logo-buffer"></i>
												</div>
												<div class="media-body text-black">
													<h6>Sekolah di SMKN 2 SUBANG</h6>
													<p>dengan jurusan rekayasa perangkat lunak</p>
												</div>
											</div>
										</div><!-- main-profile-work-list -->
										
										<label class="main-content-label tx-13 mg-b-20">Sosial</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-danger-transparent text-black">
													<i class="icon ion-logo-github">></i>
												</div>
												<div class="media-body text-black">
													<span>Github</span><a href="#" class="text-black">github.com/spruko</a>
												</div>
												<div class="media-icon bg-danger-transparent text-black">
													<i class="icon ion-logo-github">></i>
												</div>
												<div class="media-body text-black">
													<span>instagram</span> <a href="#" class="text-black">arfer17</a>
												</div>
											</div>
											<div class="media">
											</div>
											
										</div><!-- main-profile-social-list -->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						<div class="">
						<div class="bg-primary card" style="width: 99%; height: 30px; margin-left: 7px; margin-top: 8px;">
							<p style="margin-left: 45%; margin-top: 3px;">MATERI</p>
						</div>
						<div class="card bg-primary" style="margin-top: 2px; margin-left: 7px;height: 70vh;">
							<div style="margin-top: 50%; margin: 3px;">
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
							</div>
						</div>
					</div>
				</div>
</body>
</html>