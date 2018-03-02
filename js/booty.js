function menuActiveLinks(chapter) {
	var path = window.location.pathname.split("/");
	var page = path[path.length-1];
	
	var anchor = window.location.hash.substr(1);
	
	var selectors = ["navbar", page, anchor];
	selectors.forEach(function(entry) {
		var selector = "#" + chapter + "-" + entry;
		var sel = selector.replace(/\./g, "\\.");
		if($(sel).length) {
			document.querySelector(sel).classList.add("active");
		}
	});
}
