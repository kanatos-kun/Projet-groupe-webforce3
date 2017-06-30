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
        $('#messages').append("<p "+ id +">" + pseudo + " dit : " + message + "</p>");
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




