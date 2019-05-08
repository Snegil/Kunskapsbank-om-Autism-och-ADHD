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
							<a class="TextButton" href="#" onclick="#">Autism</a>
							<a class="TextButton BorderTop" href="#" onclick="#">ADHD</a>
							<a class="TextButton BorderTop" href="#" onclick="#">Myter & Fakta</a>
						</span>
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