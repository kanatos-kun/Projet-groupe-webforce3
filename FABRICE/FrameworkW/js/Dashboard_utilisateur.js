$(function()
{
  $('form').on("submit", function(e)
  {
      e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
      var pseudo = encodeURIComponent( $('#pseudo').val() ); // on sécurise les données
      var message = encodeURIComponent( $('#liveChat').val() );
      if(pseudo != "" && message != "")
    { // on vérifie que les variables ne sont pas vides
      $.ajax(
      {
        url : "chat_traitement.php", // on donne l'URL du fichier de traitement
        type : "POST", // la requête est de type POST
        data : "pseudo=" + pseudo + "&message=" + message + "&envoyer=submit" // et on envoie nos données
      });
    }
  });
});

function chargerMessages()
{
  setTimeout( function(){
    var premierID = $('#messages p:first').attr('id');
    $.ajax(
    {
      url : "chat_chargement.php",
      type : "POST",
      data : "id=" + premierID
    // }).done(function(html)
    // {
    //     $('#chatbox').prepend(html);
    // });
    }).done(function(json)
    {
      var message="";
      var donnees = JSON.parse(json);
      if(donnees != ""){
        for(var row in donnees){
            message += "<p id=\"" + donnees[row]['id'] + "\"><strong>" + donnees[row]['pseudo'] + " dit :</strong> " + donnees[row]['message'] + "</p>";
        }
        $('#messages').prepend(message);
      }
    });
    chargerMessages();
  }, 1000);
}

    chargerMessages();
/*--- ChatBox ---*/

/*--- Google map ---*/
function initialisation(){
    var optionsCarte = {
        zoom: 8,
        center: { lat: 47.389982, lng: 0.688877 },
        scrollwheel: false
    }
    var maCarte = new google.maps.Map(document.getElementById("map"), optionsCarte);
}
/*--- Google map ---*/


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




