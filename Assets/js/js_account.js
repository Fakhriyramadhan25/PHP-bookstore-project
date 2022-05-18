var xmlhttp;
function show_orders() {
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = show_orders_response;
	xmlhttp.open("GET","ajax/showall_orders.php",true);
	xmlhttp.send();
}
	
function show_orders_response() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("maincontent").innerHTML = xmlhttp.responseText;
	}
}

var xmlhttp2;
function show_customers() {
	xmlhttp2 = new XMLHttpRequest();
	xmlhttp2.onreadystatechange = show_customers_json;
	xmlhttp2.open("GET","ajax/show_allusers_json.php",true);
	xmlhttp2.send();
}
function show_customers_json(){
	if (xmlhttp2.readyState==4 && xmlhttp2.status==200) {
		document.getElementById("maincontent").innerHTML = xmlhttp2.responseText;
	}
}





