

function validerEmail(){
	var email = $("#reg-email");
	var email-repeat = $("#reg-email-repeat");

	if (var email == var email-repeat) {
		// Les deux cadres deviennent verts si les deux adresses mail sont identiques
			$("#email").style.borderColor = "green";
				$("#email-repeat").style.borderColor = "green";
	}else{
	        
		$("#signupbtn").innerHTML = "<p>Vos adresses mails ne correspondent pas </p>";
		
	         // Les deux cadres deviennent rouge si les deux adresses mail sont identiques   
			$("#email").style.borderColor = "red";
			$("#email-repeat").style.borderColor = "red";
		}
	}

     
     // Verification si  email bien composé  d'un point et d'un @
      function verifierEmail() {
      	var email = $("#reg-email");
	    var email-repeat = $("#reg-email-repeat");

      if ((var email.indexOf("@")>=0)&&(var email.indexOf(".")>=0)) && (var email-repeat.indexOf("@")>=0)&&(var email-repeat.indexOf(".")>=0)  {
         return true
      } else {
         alert("Mail invalide !");
         return false
      }
   }



	function validerPsw(){
	var psw = $("#reg-psw");
	var psw-repeat = $("#reg-psw-repeat");
	
	if (choixPsw != "" && message.length > 8 && var psw == var psw-repeat) {
		// Les deux cadres deviennent verts si les deux mots de passes sont identiques
			$("#reg-psw").style.borderColor = "green";
				$("#reg-psw-repeat").style.borderColor = "green";
		
		
		}
		else(message.length <= 8 && var psw != var psw-repeat  ){
			$("#signupbtn").innerHTML = "<p>Vos mots de passe ne correspondent pas </p>";
			//bordure rouge sur message
			document.getElementById("message").style.borderColor = "red";
		}
	}


