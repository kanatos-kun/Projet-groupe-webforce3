<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
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
	      <input type="text" placeholder="Enter Email" name="email" required>

	      <label for="psw"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>

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
	    <div class="imgcontainer">
	      <img src="img_avatar2.png" alt="Avatar" class="avatar">
	    </div>

	    <div class="container">
	      <label><b>Email</b></label>
	      <input type="text" placeholder="Enter Email" name="umail" required>

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
</body>
</html>