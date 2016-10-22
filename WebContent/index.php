<!DOCTYPE html>
<html>

<head>

<?php include ("headTransversalElements.php"); ?>

</head>



<body>

<?php include ("bodyTracker.php"); ?>

<!-- Bandeau du haut -->
<?php include("header.php"); ?>


<!--  SSO Google -->

<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="979328690861-nbc4i7rkmc419q04422naev6b2vsojs5.apps.googleusercontent.com">
<script type="text/javascript">
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
}
</script>



<!--  SSO Google -->
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>


<div id="sousLeTitre">

	<!-- Menu de navigation du site -->
<?php include("navbar.html"); ?>
	
	<!-- Contenu principal -->
	<div id="pageContent">
	
		<div id="testPresentation">
		<h2><a href="test1.php">Test 1 - Remontée d'une variable customisée</a></h2>
		<p>La page du test 1 est la seule à peupler la variable customisée n°1.</p>
		</div>
		
		<div id="testPresentation">
		<h2><a href="test2.php">Test 2 - Tags Youtube</a></h2>
		<p>Petit test pour se faire plaisir avant d'attaquer les conversions.</p>
		</div>
		
		<div id="testPresentation">
		<h2><a href="test3.php">Test 3 - Conversions</a></h2>
		<p>Un objectif se cache derrière ce test...</p>
		</div>
				
		<div id="testPresentation">
		<h2><a href="test4.php">Test 4 - à définir</a></h2>
		<p>Faisons déjà le test 3...</p>
		</div>
			
	</div>
</div>

 	
</body>
</html>