<!DOCTYPE html>
<html>

<head>

<?php include("headTransversalElements.php"); ?>

</head>



<body>

<?php include("bodyTransversalElements.php"); ?>

<!-- Bandeau du haut -->
<?php include("header.php"); ?>



<div id="sousLeTitre">

	<!-- Menu de navigation du site -->
<?php include("navbar.html"); ?>
	
	<!-- Contenu principal -->
	<div id="pageContent">
	
	<form action="demo_form.asp">
		<h2>GA tracker</h2>
			<p> Head tag:<br>
				<textarea rows="10" cols="80" name="gaBodyTracker"></textarea><br>
			<p> Body tag:<br>
				<textarea rows="10" cols="80" name="gaHeadTracker"></textarea><br>
		<h2>GTM tracker</h2>
			<p> Head tag:<br>
				<textarea rows="10" cols="80" name="gtmHeadTracker"></textarea><br>
			<p> Body tag:<br>
				<textarea rows="10" cols="80" name="gtmBodyTracker"></textarea><br>
  <br>
  <INPUT type="submit" value="Use these trackers">
</form>
			
	</div>
</div>

 	
</body>
</html>