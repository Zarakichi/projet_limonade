<?php

	require_once('lib/limonade.php');

	dispatch('/accueil','accueil');
	dispatch('/promo','promo_choix');
	// dispatch('/promo/ajout','promo_ajout');
	// dispatch('/promo/modif','promo_modif');
	dispatch('/fichier','fichier_choix');
	// dispatch('/fichier/ajout','fichier_ajout');
	// dispatch('/fichier/modif','fichier_modif');

	run();