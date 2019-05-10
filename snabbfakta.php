<!DOCTYPE html>
<html>
	<head>
		
		<!-- Meta taggar -->
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">
		<title>
			
		Kunskapsbank - Snabbfakta
		</title>
		
		<!-- Favicon -->
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		
		<!-- Externa stilmallar -->
		<link href="https://fonts.googleapis.com/css?family=Exo+2|VT323" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="normalize.css">
		
		<!-- Mina Stilmallar -->
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="adaptation.css">
		<script src="javascript.js"></script>
	</head>
	<body>
		
		<div id="topbox">
			<!-- Loggan och att loggan går till index.php -->
			<a href="index.php">
				<img id="logo" src="images/logotest190509-02.png">
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
							<a href="#">Erfarenheter</a>
						</div>
					</div> 
					
					<a class="button" href="index.php">Om</a>
				</div>
				
				<!-- Introductions titeln -->
				<div id="box-title">
					Snabbfakta
				</div>
				
				<div id="box-text">
						<span id="ButtonContainer">
							<a class="TextButton noselect" onclick="FastToggle('Autismtext')">Autism</a>
							<a class="TextButton noselect BorderTop" onclick="FastToggle('ADHDtext')">ADHD</a>
							<a class="TextButton noselect BorderTop" onclick="FastToggle('MyterOchFakta')">Myter & Fakta</a>
						</span>
						
						<fieldset id="Autismtext">
							<legend>Autism</legend>
							<?php
								$myfilename = "SnabbAutism.txt";
									if(file_exists($myfilename)){
									echo file_get_contents($myfilename);
							    }
							?>
						</fieldset>
						
						<fieldset id="ADHDtext">
							<legend>ADHD</legend>
							<?php
								$myfilename = "SnabbADHD.txt";
									if(file_exists($myfilename)){
									echo file_get_contents($myfilename);
							    }
							?>
						</fieldset>
						
						<fieldset id="MyterOchFakta">
							<legend>Myter och fakta</legend>
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
						</fieldset>
				</div>
				
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
		
	</body>
</html>