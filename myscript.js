$("#submit").click(function (){
	

$.post($("#myForm").attr("action"), $("#myForm : input").serializeArray(), function (info){ $("#results").html(info); } );
	cleanupInput();
});

$("#myForm").submit( function (){
	return false;

});

function cleanupInput(){
	
		$("#myForm: input").each( function (){
				$(this).val('');
		});


)