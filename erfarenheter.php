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
		
		<!-- Lokala resurser -->
		<link rel="stylesheet" href="jstree/dist/themes/default/style.min.css" />
		
		<!-- Mina Stilmallar -->
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="adaptation.css">
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
					
					<a class="button active" href="Erfarenheter.php">Erfarenheter</a>
					
					<div class="dropdown">
					<a href="#" class="dropbtn"><i class="fas fa-angle-down"></i> </i>Diagnoser</a>
						<div class="dropdown-content">
							<a href="#">Autism</a>
							<a href="#">ADHD</a>
							<a href="#">Snabbfakta</a>
						</div>
					</div> 
					<a class="button" href="index.php">Om</a>
				</div>
				
				<!-- Introductions titeln -->
				<div id="box-title">
					Erfarenheter
				</div>
				
				<div id="box-text">
					
					<div id="jstree">

					<!-- in this example the tree is populated from inline HTML -->
					<ul>
						<li>Root node 1
							<ul>
								<li id="child_node_1">Child node 1</li>
								<li>Child node 2</li>
							</ul>
						</li>
						<li>Root node 2</li>
					</ul>
						
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
				</div>	
			</div>
		<script src="javascript.js"></script>
		<script src="jquery-3.4.0.js"></script>
		<script src="jstree/dist/jstree.min.js"></script>
		<script>
			$(function () {
			    // create an instance when the DOM is ready
			    $('#jstree').jstree();
			    // bind to events triggered on the tree
			    $('#jstree').on("changed.jstree", function (e, data) {
			      console.log(data.selected);
			    });
			    // interact with the tree - either way is OK
			    $('button').on('click', function () {
			      $('#jstree').jstree(true).select_node('child_node_1');
			      $('#jstree').jstree('select_node', 'child_node_1');
			      $.jstree.reference('#jstree').select_node('child_node_1');
			    });
			  });
		</script>
		
	</body>
</html>