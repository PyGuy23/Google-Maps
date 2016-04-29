$("button").click( function (){
$.getJSON("products.json", function(obj){

$.each(obj, function(key, value){
	
	$("ul").append("<li>"+value.year+"</li>");
	
});
	
});

});