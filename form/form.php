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
						<div class="card bg-primary" style="margin-top: 2px; margin-left: 7px;">
							<?php
							// define variables and set to empty values
							$nameErr = $emailErr = $genderErr = $websiteErr = "";
							$name = $email = $gender = $comment = $website = "";

							if ($_SERVER["REQUEST_METHOD"] == "POST") {
							if (empty($_POST["name"])) {
								$nameErr = "Name is required";
							} else {
								$name = test_input($_POST["name"]);
								// check if name only contains letters and whitespace
								if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
								$nameErr = "Only letters and white space allowed";
								}
							}
							
							if (empty($_POST["email"])) {
								$emailErr = "Email is required";
							} else {
								$email = test_input($_POST["email"]);
								// check if e-mail address is well-formed
								if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
								$emailErr = "Invalid email format";
								}
							}
								
							if (empty($_POST["website"])) {
								$website = "";
							} else {
								$website = test_input($_POST["website"]);
								// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
								if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
								$websiteErr = "Invalid URL";
								}
							}

							if (empty($_POST["comment"])) {
								$comment = "";
							} else {
								$comment = test_input($_POST["comment"]);
							}

							if (empty($_POST["gender"])) {
								$genderErr = "Gender is required";
							} else {
								$gender = test_input($_POST["gender"]);
							}
							

							function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
							}
							?>
							<div class="m-4">
							<h2>PHP Form Validation Example</h2>
							<p><span class="error">* required field</span></p>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
							Name: <input type="text" name="name" value="<?php echo $name;?>">
							<span class="error">* <?php echo $nameErr;?></span>
							<br><br>
							E-mail: <input type="text" name="email" value="<?php echo $email;?>">
							<span class="error">* <?php echo $emailErr;?></span>
							<br><br>
							Website: <input type="text" name="website" value="<?php echo $website;?>">
							<span class="error"><?php echo $websiteErr;?></span>
							<br><br>
							Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
							<br><br>
							Gender:
							<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
							<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
							<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
							<span class="error">* <?php echo $genderErr;?></span>
							<br><br>
							<input type="submit" name="submit" value="Submit">  
							</form>

							</div>

							<?php
							
							echo "<h2>Your Input:</h2>";
							echo $name;
							echo "<br>";
							echo $email;
							echo "<br>";
							echo $website;
							echo "<br>";
							echo $comment;
							echo "<br>";
							echo $gender;
							?>
						</div>
					</div>

						</div>
</body>
</html>