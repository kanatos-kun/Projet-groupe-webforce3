// $(function){

// 	$('#').hover(
//     function () {$(this).find('p').stop().rotate3Di('flip', 500);},
//     function () {$(this).find('p').stop().rotate3Di('unflip', 500);}
// );
// }


// /*--- MODALE FENETRES ---*/
// $(document).ready(function() {

// //Lorsque vous cliquez sur un lien de la classe poplight
// $('a.poplight').on('click', function() {
// 		var popID = $(this).data('rel'); //Trouver la pop-up correspondante
// 		var popWidth = $(this).data('width'); //Trouver la largeur

// 		//Faire apparaitre la pop-up et ajouter le bouton de fermeture
// 		$('#' + popID).fadeIn().css({ 'width': popWidth}).prepend('<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
// 		//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
// 		var popMargTop = ($('#' + popID).height() + 80) / 2;
// 		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
// 		//Apply Margin to Popup
// 		$('#' + popID).css({ 
// 			'margin-top' : -popMargTop,
// 			'margin-left' : -popMargLeft
// 		});
		
// 		//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues d'anciennes versions de IE
// 		$('body').append('<div id="fade"></div>');
// 		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
		
// 		return false;
// 	});


// 	//Close Popups and Fade Layer
// 	$('body').on('click', 'a.close, #fade', function() { //Au clic sur le body...
// 		$('#fade , .popup_block').fadeOut(function() {
// 			$('#fade, a.close').remove();  
// 	}); //...ils disparaissent ensemble
		
// 		return false;
// 	});

	
// });
// });


$(function(){

console.log("hello");
$("form").on("submit",function(e){

    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

    var pseudo = encodeURIComponent( $('#pseudo').val() ); // on sécurise les données

    var message = encodeURIComponent( $('#message').val() );

    var send = encodeURIComponent( $('#envoi').val());

    if(pseudo != "" && message != ""){ // on vérifie que les variables ne sont pas vides
        $.ajax({
            url : "connection_bdd.php", // on donne l'URL du fichier de traitement
            type : "POST", // la requête est de type POST
            data : "pseudo=" + pseudo + "&message=" + message  +"&submit=" + send// et on envoie nos données
        }).done(function(id){
        $('#messages').append("<img style='display:inline;width:40px;height:40px' src='img/Logo3.jpg'/><p "+ id +">" + pseudo + " dit : " + message + "</p>");
        });
        //$('#messages').append("<p>" + pseudo + " dit : " + message + "</p>");
        //on ajoute le message dans la zone prévue
    }
});

charger();

})


function charger(){

    setTimeout( function(){

        var premierID = $('#messages p:last').attr('id'); // on récupère l'id le plus récent
        $.ajax({
            url : "charger.php?id=" + premierID, // on passe l'id le plus récent au fichier de chargement
            type : "GET",
            success : function(html){
                $('#messages').append(html);
            }
        });

        charger();

    }, 5000);

}


// function rajoutId(){
// 	$.ajax({
// 		url : "find_id.php",
//         dataType : "json",
//         data : "id" : 0
// 	}).done(function(id){
//         $("#messages p:last").attr('id',id);
//     })
// }
//charger();
