//Recup la taille de l'écran
var tailleEcran = $(window).width();

// Accordeon la liste des references presse
if(tailleEcran<=783){
	
	$("#presse").addClass("collapse in");	
	$(".open_presse").on("click", classeClose);	

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


function classeClose(e){
	$(".open_presse").toggleClass("close_presse");
}

// Appel plugin pour ajouter tactile sur les carrousels.
$(document).ready(function() {  
  		 $(".carousel").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $(".carousel").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  


/* ---- fonction init ---- */
function init(e){
	$('.carousel').carousel({interval: 0}); // on supprime tout interval dans les carousels pour arreter le defilement auto
}

init();