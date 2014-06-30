// Tooltip bootstrap

$('li.liste_tooltip').each(chercherTooltip);

function chercherTooltip(){
	var contenu_tooltip = $(this).find(".contenu_tooltip");
	
	if(contenu_tooltip.length>0){
		//console.log("OK");
		$(this).tooltip({
				"html" : "true",
				"title" : contenu_tooltip.html(),
				"placement" : "bottom"
			}
			);
	}
}


var tailleEcran = $(window).width();

// Accordeon sur la FAQ et les prix
if(tailleEcran<=750){

	
	$("#liste1").addClass("collapse in");
	$("#liste2").addClass("collapse in");
	
	for(var i = 1 ; i < 11 ; i++ ){
		var reponse = "reponse" + i;
		$("#" + reponse).addClass("collapse in");
	}

	$('.collapse.in').collapse();

}


// Accordeon pour le pied de page
if(tailleEcran<=625){
	
	for(var i = 1 ; i < 4 ; i++ ){
		var footer = "footer" + i;
		$("#" + footer).addClass("collapse in");
	}

	$('.collapse.in').collapse();

}

