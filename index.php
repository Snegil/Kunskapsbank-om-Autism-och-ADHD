<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">
		<title>
		Kunskapsbank - Hem
		</title>
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<link href="https://fonts.googleapis.com/css?family=Exo+2|VT323" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="normalize.css">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="adaptation.css">
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
		<!-- Början av navigationen -->
		<span id="navigation">
			<a class="button active" href="index.php">Hem</a>
			
			<a class="button" href="snabbfakta.php">Snabbfakta</a>
			
			<div class="dropdown">
			<a class="dropbtn"><i class="fas fa-angle-down"></i> </i>Diagnoser</a>
				<div class="dropdown-content">
					<a href="#">Autism</a>
					<a href="#">ADHD</a>
				</div>
			</div> 
			
			<a class="button" href="index.php">Om</a>
		</span>
		
		<div id="Container">
			<div id="box">
				<!-- Introductions titeln -->
				<div id="box-title">
					En hemsida skapad av en individ med autism och ADHD <br />
				</div>
				<div id="box-text">
					<!-- Introductions citatet -->
					<div id="box-quote">
					“
					Jag gör det för att öka kunskapen i samhället om Autism och ADHD.
					Jag har märkt att det behövs... 
					”
					&ndash;Utvecklarn
					</div>
					<!-- Listan som innehåller alla myter och fakta -->
					<ul id="List">
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
					
				</div>
			</div>
		</div>
		<!-- Början av footern -->
		<div id="footer">
			Pågående Projekt i tidig utveckling |
			<!-- Källan till Autism bandet och autism favicon -->
			Vector Art från <a target="_blank" href="https://vecteezy.com">Vecteezy.com</a> |
			<!-- Källan till bakgrunden -->
			Bakgrund från <a target="_blank" href="https://www.svgbackgrounds.com/">SVGBackgrounds</a>
		</div>
	</body>
</html>