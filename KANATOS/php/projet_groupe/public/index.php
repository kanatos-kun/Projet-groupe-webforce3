<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<!-- 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
	<!-- <script type="text/javascript" src="assets/js/facebook_SDK.js"></script> -->
	<title>Accueil - projet groupe webforce3</title>
</head>
<body>
	<div class="top-nav">
		<ul>
			<li><a href="#">Qui somme-nous</a></li>
			<li><a href="#">Carte(GPS)</a></li>
		</ul>
	</div>
	<section>
		<p class="actualite">Actualité</p>
		<p class="jumbotron">
<!-- modal inscription  -->
 <!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

<!--***********************************************************
		bouton modal d'inscription
************************************************************-->

	<!-- The Modal (contains the Sign Up form) -->
	<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content animate" action="action_inscription.php" method="POST">
	    <div class="container">
	      <label for="email"><b>Email</b></label>
	      <input type="mail" id="email" placeholder="Enter Email" name="email" required>

	      <label for="email-repeat"><b>Repeat Email</b></label>
	      <input type="mail" placeholder="Enter Email" name="email-repeat" required>

	      <label for="psw"><b>Password</b></label>
	      <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

	      <label><b>Repeat Password</b></label>
	      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	      <input type="checkbox" checked="checked"> Remember me
	      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	      <div class="clearfix">
	        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn">Sign Up</button>
	      </div>
	    </div>
	  </form>
	</div> 

	 <!-- Button to open the modal login form -->
	<button onclick="document.getElementById('id02').style.display='block'">Login</button>

<!--***********************************************************
		bouton modal de connexion
************************************************************-->

	<!-- The Modal -->
	<div id="id02" class="modal">
	  <span onclick="document.getElementById('id02').style.display='none'"
	class="close" title="Close Modal">&times;</span>

	  <!-- Modal Content -->
	  <form class="modal-content animate" action="action_connexion.php" method="POST">

	    <div class="container">
	      <label><b>Username</b></label>
	      <input type="text" placeholder="Enter Username" name="uname" required>

	      <label><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>

	      <button type="submit">Login</button>
	      <input type="checkbox" checked="checked"> Remember me
	    </div>

	    <div class="container" style="background-color:#f1f1f1">
	      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn-2">Cancel</button>
	      <span class="psw">Forgot <a href="#">password?</a></span>
	    </div>
	  </form>
	</div> 

		</p>
	</section>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
</body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1918502485085050',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

FB.login();
</script>
</html>