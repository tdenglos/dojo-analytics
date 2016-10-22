
<meta charset="UTF-8">



<?php
/*
	if ($_SERVER['HTTP_HOST']=='doudours.com') {
		header('Location: http://doudours.com/work-in-progress.php');
		exit();
	}
*/
?>

<title>DOJO Analytics</title>

<link rel="stylesheet" href="Test_analytics.css">


<script type="text/javascript">

 
        var trackingType ;
        
        function initiateTrackingType() {
        			trackingType = "<?php Print($_GET['trackingType'])?>" ;
        			if (trackingType === '') {
        				trackingType = "none" ;
        			}
        }
     	initiateTrackingType();
     	
		var environment ;
		
		function setEnvironment() {
			if (window.location.host=="doudours.com") {
       			environment = 'PROD' ;
    		} else {
    			environment = 'DEV' ;
   			}
		}
		
		setEnvironment();
     	

     	
     	
</script>


<?php
if ($_GET['trackingType'] == "none") {
	} elseif ($_GET['trackingType'] == "ga") {
    	include("gaCustomVariables.php");
		include("scriptGA.php");
		Print('<script src="scriptEventGA.js"></script>');
	} elseif ($_GET['trackingType'] == "gtm") {
    	include("scriptGTM.php");
		Print('<script src="scriptEventGTM.js"></script>');
	} else {
    	/*echo "Requested tracking type not supported."; */
}
?>


<script src="trackingTypeManagement.js"></script>



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
