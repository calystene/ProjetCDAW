

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		 <meta author="Pierrard et Hequet" />
		 <meta name="keywords" content="" />
		 <meta name="description" content="" />
		 <title>CasLepino</title>
		 <link rel="stylesheet" href="style.css" />
	</head>
	<body>
 		<?php require('include/connexion_BBD.php'); ?>
		<div id="bg">
			<div id="outer">
				<div id="header">
<!-- Tête de la page-->
					<div id="loggin">
					</div>
					<div id="nav">
						<h1>
							<a href="#"> CapLepino </a>
						</h1>
						<br class="clear" />
					</div>
				</div>
				<div id="main">
<!-- Corps de la page -->   
					<div id="sidebar1">
           					<form action="" methode="post">
							<label for="login">Login: </label>
								<input type="text" id="login">
							<label for="pwd">Password: </label>
								<input type="password" id="pwd">
						</form>
					</div>
					<div id="sidebar2">
                                
					</div>
					<div id="content">

						<div id="box1">
							<div id="corps">
							</div><br />
							<p id="heure_serveur"> 
								Il est <span id="heure"> <?php echo Date('H:i:s'); ?> </span>
							</p>
						</div>
						<div id="box1">
						</div>
					</div>
					<br id="clear" />
				</div> 
				<br id="clear" />
			</div>
			<div id="copyright">
<!-- Bas de page -->
				&copy; CasLepino | Made by Thomas Pierard and Pierre-Louis Hequet.
			</div>
		</div>
	</body>
</hmtl>
