

 	
 	// ticking des boutons radio
 	
 	var isNone = '';
 	var isGA = '';
 	var isGTM = '';
 	
 	if(trackingType === 'none'){isNone = ' checked';}
 	if(trackingType === 'ga'){isGA = ' checked';}
 	if(trackingType === 'gtm'){isGTM = ' checked';}

 	
 	
 	// Ajout du bon paramètre d'URL sur clic d'un lien ou d'un bouton radion
 	
	var anchors ;
 	
	function addTrackingTypeToDestinationURL(){
		this.href += "?trackingType="+ trackingType ;  
		}
 	
 	function addEventListeners(tagName) {
 		anchors = window.document.getElementsByTagName(tagName);
 		for(i=0 ; i < anchors.length ; i++)	{
 			anchors[i].addEventListener("click", addTrackingTypeToDestinationURL, false);
 		}	
 	}
	
 	document.addEventListener("DOMContentLoaded", function(event) {
		addEventListeners('a') ;
//		addEventListeners('button');
//		alert(anchors.length);
 		 	});
 	
 	
 	function getURL_base(url)
		{
		var S_url = url;
		stopIndex=S_url.indexOf("?");
		url_sans_param=S_url.substr(0,stopIndex);
		return url_sans_param
		}
	function reloadWithNewTrackingType() {
		window.location.href = getURL_base(window.location.href) + '?trackingType=' + trackingType ;
	}
 	
 	function changeTrackingTypeToNone() {trackingType = "none"; reloadWithNewTrackingType();}
	function changeTrackingTypeToGA() {trackingType = "ga"; reloadWithNewTrackingType();}
	function changeTrackingTypeToGTM() {trackingType = "gtm"; reloadWithNewTrackingType();}
