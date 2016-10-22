<html>
<head></head>
<body>
<?php
function buildTrackersJson() {
	$arr = array(
		'gaHeadTracker' => include("scriptGA.php"),
		'gaBodyTracker' => "no script", 
		'gtmHeadTracker' => include("scriptGTM.php"), 
		'gtmBodyTracker' => include ("scriptGTMbody.php"), 
	);
	return json_encode($arr);
}
?>


<script type="text/javascript">
	
	document.write(
				"<xmp>"
				+ JSON.stringify(<?php buildTrackersJson();?>, null, 4);
				+ "</xmp>"
	</script>


</body>
</html>