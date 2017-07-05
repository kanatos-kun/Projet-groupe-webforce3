<?php

	$w_routes = array(
		//Routes par default
		['GET|POST', '/', 'default#home', 'default_home'],
		['GET|POST', '/projet','default#projet','default_projet'],
		['GET|POST', '/profil','default#profil','default_profil'],
		['GET|POST', '/propos','default#propos','default_propos'],
		['GET|POST', '/premium','default#premium','default_premium'],
		['GET|POST', '/formation','default#formation','default_formation'],

		//Route redirection
		['GET|POST', '/redirection', 'default#redirection', 'default_redirection'],

		//Routes connecter
		['GET|POST', '/dashboard', 'users#dashboard', 'users_home']
	);
