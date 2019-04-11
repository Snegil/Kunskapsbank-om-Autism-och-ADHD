<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">
		<title>
		Kunskapsbank - Snabbfakta
		</title>
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<link href="https://fonts.googleapis.com/css?family=Exo+2|VT323" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="normalize.css">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="adaptation.css">
		<script src="https://code.jquery.com/jquery-3.4.0.js">
			function toggle_visibility(id) {
			   var e = document.getElementById(id);
			   e.slideToggle('fast');
			}
		</script>
		<script src="javascript.js"></script>
	</head>
	<body>
		<div id="topbox">
			<!-- Loggan och att loggan går till index.php -->
			<a href="index.php">
				<img id="logo" src="images/logotest0401-2.png">
			</a>
			<!-- Autism bandet -->
			<span id="autismContainer">
				<a target="_blank" href="https://www.autism.se/">
					<img id="autism" src="images/AutismBild/Autismband.png">
				</a>
			</span>

		</div>
		
		<div id="Container">
			<div id="box">
				<!-- Början av navigationen -->
				<div id="navigation">
					<a class="button" href="index.php">Hem</a>
					
					<a class="button active" href="snabbfakta.php">Snabbfakta</a>
					
					<div class="dropdown">
					<a href="#" class="dropbtn"><i class="fas fa-angle-down"></i> </i>Diagnoser</a>
						<div class="dropdown-content">
							<a href="#">Autism</a>
							<a href="#">ADHD</a>
						</div>
					</div> 
					
					<a class="button" href="index.php">Om</a>
				</div>
				<!-- Introductions titeln -->
				<div id="box-title">
					Snabbfakta
				</div>
				<div id="box-text">
					
						
						<!-- Knapparna som styr om Autism, ADHD, List taggarna syns eller inte -->
						<!-- <div>
							<button class="Snabbfakta-button" onclick="FastToggle('AutismText')">Autism</button>
							<button class="Snabbfakta-button" onclick="FastToggle('ADHDText')">ADHD</button>
							<button class="Snabbfakta-button" onclick="FastToggle('List')">Myter och Fakta</button>
						</div> -->
						<fieldset id="AutismText">
							<legend class="noselect" onclick="FastToggle('AutismText-file')">Autism</legend>
							<span id="AutismText-file">
							<?php
								$myfilename = "SnabbAutism.txt";
									if(file_exists($myfilename)){
									echo file_get_contents($myfilename);
							    }
							?>
							</span>
						</fieldset>
						<fieldset id="ADHDText">
							<legend class="noselect" onclick="FastToggle('ADHDText-file')">ADHD</legend>
							<span id="ADHDText-file">
							 <?php
								$myfilename = "SnabbADHD.txt";
									if(file_exists($myfilename)){
									echo file_get_contents($myfilename);
							    }
							?>
							</span>
						</fieldset>
						<!-- Listan som innehåller alla myter och fakta -->
						<fieldset id="List">
							<legend class="noselect" onclick="FastToggle('MoFText-file')">Myter och Fakta</legend>
							<span id="MoFText-file">
								<ul>
									<li> <span class="Question">Kan autism behandlas?</span> </li>
									<li> <span class="Answer">Ja! Med förståelse och respekt.</span> </li>
									<br />
									<li> <span class="Question">Människor med autism vill inte ha social kontakt.</span> </li>
									<li> <span class="Answer">Många med autism vill ha vänner och relationer, men kan ha svårt att veta hur.</span> </li>
									<br />
									<li> <span class="Question">Personer med autism har inga känslor.</span> </li>
									<li> <span class="Answer">Personer med autism har känslor som alla andra, men kanske inte visar dem på ett sätt som stämmer med omgivningens förväntningar.</span> </li>
									<br />
									<li> <span class="Question">Barn som har autism växer ifrån det.</span> </li>
									<li> <span class="Answer">Barn med autism växer upp till vuxna med autism.</span> </li>
									<br />
									<li> <span class="Question">Aspergers syndrom är ett påhitt för att ge ursäkter åt föräldrar till ouppfostrade barn.</span> </li>
									<li> <span class="Answer">Aspergers syndrom är en utvecklingsrelaterad funktionsnedsättning med tydliga diagnostiska kriterier. Att inte ta hänsyn till funktionsnedsättningen kan vara ödeläggande för individen.</span> </li>
									<br />
									<span class="Source">
									Källa: <a target="_blank" href="https://www.autism.se/myter_och_fakta">Autism och Asperger förbundet</a>
									</span>
								</ul>
							</span>
						</fieldset>
						<!-- Början av footern -->
						<div id="footer">
							Pågående Projekt i tidig utveckling |
							<!-- Källan till Autism bandet och autism favicon -->
							Vector Art från <a target="_blank" href="https://vecteezy.com">Vecteezy.com</a> |
							<!-- Källan till bakgrunden -->
							Bakgrund från <a target="_blank" href="https://www.svgbackgrounds.com/">SVGBackgrounds</a>
						</div>
					</div>
					
			</div>
		</div>
		
	</body>
</html>