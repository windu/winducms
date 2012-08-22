function InsertWidgetCss(widget) {
	var zmienna = document.createElement("link");
	zmienna.setAttribute("rel", "stylesheet");
	zmienna.setAttribute("type", "text/css");
	zmienna.setAttribute("href", "data/widgets/"+widget+"/"+widget+"Style.css");
	document.getElementsByTagName('head')[0].appendChild(zmienna);
}
function InsertCss(css) {
	var zmienna = document.createElement("link");
	zmienna.setAttribute("rel", "stylesheet");
	zmienna.setAttribute("type", "text/css");
	zmienna.setAttribute("href", css);
	document.getElementsByTagName('head')[0].appendChild(zmienna);
}
