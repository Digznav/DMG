$(document).ready(function() {
	var puebla = new google.maps.LatLng(19.027119, -98.21993),
		pointToMoveTo,
		first = true,
		curMarker = new google.maps.Marker({}),
		$el;
	var myOptions = {
		zoom: 15,
		center: puebla,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map($("#map_canvas")[0], myOptions);
	$("#locations").find("li").click(function() {
		$el = $(this);
		if (!$el.hasClass("hover")) {
			$("#locations").find("li").removeClass("hover");
			$el.addClass("hover");
			if (!first) { 
				// Clear current marker
				curMarker.setMap();
				// Set zoom back to puebla level
				map.setZoom(15);
			}
			// Move (pan) map to new location
			pointToMoveTo = new google.maps.LatLng($el.data("geo-lat"), $el.data("geo-long"));
			map.panTo(pointToMoveTo);
			// Add new marker
			curMarker = new google.maps.Marker({
				position: pointToMoveTo,
				map: map,
				icon: "imgs/feeper_maps.png"
			});
			// On click, zoom map
			google.maps.event.addListener(curMarker, 'click', function() {
				map.setZoom(18);
			});
			// Fill more info area
			$("#more-info").find("p").html($el.find(".longdesc").html());
			// No longer the first time through (re: marker clearing)
			first = false;
		}
	});
	$("#locations").find("li").first().trigger("click");
});