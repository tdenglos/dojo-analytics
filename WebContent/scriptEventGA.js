function eventTracking(eventCategory, eventAction, eventLabel, eventValue) {
	ga('send', 'event', eventCategory, eventAction, eventLabel, eventValue);
}

function eventTracking(eventCategory, eventAction, eventLabel) {
	ga('send', 'event', eventCategory, eventAction, eventLabel);
}

function eventTracking(eventCategory, eventAction) {
	ga('send', 'event', eventCategory, eventAction);
}