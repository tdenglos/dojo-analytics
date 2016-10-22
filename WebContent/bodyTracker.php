<?php
if ($_GET['trackingType'] == "none") {
	} elseif ($_GET['trackingType'] == "ga") {
		/*echo('no tracking code in body tag');*/
	} elseif ($_GET['trackingType'] == "gtm") {
    	include("gtmBodyTracker.php");
	} else {
    	/*echo "Requested tracking type not supported.";*/
}
?>