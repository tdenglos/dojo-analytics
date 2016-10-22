<!DOCTYPE html>
<html>

<head>

<?php include("headTransversalElements.php"); ?>

</head>

<body>

<?php include("bodyTracker.php"); ?>

<!-- Bandeau du haut -->
<?php include("header.php"); ?>

<div id="sousLeTitre">

	<!-- Menu de navigation du site -->
<?php include("navbar.html"); ?>
	
	<!-- Contenu principal -->
	<div id="pageContent">
	
		<h2>Vous êtes arrivé à l'objectif</h2>
		
		<a href="index.php" 
			<?php if ($_GET['trackingType'] == "ga") { 
				print("onclick=\"eventTracking('Information', 'Read');\"") ;
			} ?>
			id="goal">
			<p>Cliquer ici pour faire remonter un conversion</p>
		</a>
		<a href="index.php" onclick="eventTracking('Information', 'Read');">
			<button id="goal" onClick="eventTracking('Information', 'Read');"> 
				Conversion(event Information, Read) 
			</button>
		</a>
		<script type="text/javascript">console.log(window.document.getElementById("goal"));</script>
		
		<p>Le clic sur le lien ci-dessus envoie un hit d'event :
		<li> de categorie "Information"
		<li> d'action "Read"
		<li> de Libellé et de Valeur non définis	
		<p> L'objectif "Objectif du test 3" paramétré dans GA est configuré pour prendre cet event en compte.
			
	</div>
</div>

</body>
</html>