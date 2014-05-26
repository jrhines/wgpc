// Used to make the "hovers" work in IE. This JavaScript rewrites the hovers as mouseover events, and works for all versions of IE/Win 5x and 6x.
function startList() {
//startList = function() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
  }
  node.onmouseout=function() {
  this.className=this.className.replace
        (" over", "");
   }
   }
  }
 }
}
// End rewrite hovers as mouseover events for IE.

// Google maps script
function load() {
     if (GBrowserIsCompatible()) {
       var map = new GMap2(document.getElementById("map"));
	map.addControl(new GSmallMapControl());
	map.addControl(new GMapTypeControl());
	map.setCenter(new GLatLng(43.1442, -88.045287), 13);
	map.openInfoWindow(map.getCenter(),
                  document.createTextNode("6935 North 107th Street, Milwaukee, WI 53224-4316"));
	
	var baseIcon = new GIcon();
	baseIcon.shadow = "http://labs.google.com/ridefinder/images/mm_20_shadow.png";
	baseIcon.iconSize = new GSize(20, 34);
	baseIcon.shadowSize = new GSize(22, 20);
	baseIcon.iconAnchor = new GPoint(6, 20);
	baseIcon.infoWindowAnchor = new GPoint(5, 1);

	// Creates a numbered marker
	function createMarker(point, index) {
		var number = String.fromCharCode("1".charCodeAt(0) + index);
		var icon = new GIcon(baseIcon);
 			icon.image = "http://www.westgranville.org/images/markers/blank.png";
			var marker = new GMarker(point, icon);

 			return marker;
	}
	for (var i = 0; i < 1; i++) {
 			map.addOverlay(createMarker(new GLatLng(43.1442, -88.045287), i));
	}
	
	// Download the data in data.xml and load it on the map. The format we
	// expect is:
	// <markers>
	//   <marker lat="37.441" lng="-122.141"/>
	//   <marker lat="37.322" lng="-121.213"/>
	// </markers>
	GDownloadUrl("data.xml", function(data, responseCode) {
	  var xml = GXml.parse(data);
	  var markers = xml.documentElement.getElementsByTagName("marker");
	  for (var i = 0; i < markers.length; i++) {
	    var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
	                            parseFloat(markers[i].getAttribute("lng")));
	    map.addOverlay(new GMarker(point));
	  }
	});
     }
   }


function initAll(){
	startList();
	load();
}

function initStartList(){
	startList();
}