<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="index,follow">
		<meta name="description" content="Développeur Web situé en Alsace, disponible pour la création de vos sites vitrines. Je vous invite à découvrir mon Portfolio. A bientôt :-) !" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-WEPWV5WQT0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-WEPWV5WQT0');
        </script>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="portfolio.css">
		<link rel="icon" href="icones/logo-title.ico" type="image/icon type">
		<title>Dylan Ayache Développeur Web, Création de Site vitrine - Portfolio</title>
	</head> 
	<body>
		<!------------ Includng PHP for contact section ------------>
		<?php
			// Déclaration des variables
			$name = !empty($_POST["name"]) ? $_POST["name"] : NULL;
			$email = !empty($_POST["email"]) ? $_POST["email"] : NULL;
			$numero = !empty($_POST["phone"]) ? $_POST["phone"] : NULL;
			$message = !empty($_POST["message"]) ? $_POST["message"] : NULL;
			$error = "";
			$errorNumber = "";
			$errorMail = "";

			// Récupération des informations du message pour mise en forme par mail.
			if(isset($_POST['message'])){
				$header  = 'MIME-Version: 1.0' . "\r\n";
				$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				$header .= 'From: ' . $_POST['email'] . "\r\n";

				$message = '<h1>Message envoyé depuis la page contact de dylanayache.com</h1>
				<p>
					<b>Nom : </b>' . $_POST['name'] . '<br>
					<b>Téléphone : </b>' . $_POST['phone'] . '<br>
					<b>Destinataire : </b>' . $_POST['email'] . '<br>
					<b>Message : </b>' . $_POST['message'] . 
				'</p>';
			}
			// Si conditions remplies le mail est envoyé, sinon afficher une erreur
			if ($_SERVER["REQUEST_METHOD"] === "POST"){
				// Si le champ téléphone n'est pas vide et que les caractères insérés ne sont pas des chiffres.
				if ( !empty($_POST['phone']) && !is_numeric($_POST['phone']) ) {
					$errorNumber = '<p class="red almost-bold mt-2">Veuillez insérer uniquement des chiffres.</p>';
				// Sinon Si le champ mail n'est pas vide et que le mail inséré n'est pas valide.
				} else if ( !empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
					$errorMail = '<p class="red almost-bold mt-2">Veuillez insérer un email valide.</p>';
				// Sinon Si les champs name, email et messages ne sont pas vides afficher une alerte message envoyé.
				} else if ( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) ){
					echo '<script>alert("Votre message a bien été envoyé, je vous répondrai sous peu.")</script>';
					$retour = mail('dylan.ayache.68@gmail.com', 'Mail du PortFolio', $message, $header);
				//Sinon afficher un message d'erreur.
				} else {
					$error = '<p class="red almost-bold mt-2">Veuillez remplir tous les champs requis.</p>';
				}
			}
		?>
		<header>
			<div id="Accueil"></div>
			<div id="menu">
				<!------------  Navbar ----------->
				<div class="container ">
					<nav class="navbar py-0 px-0 navbar-expand-lg">
						<a href="https://dylanayache.com/">
							<img src="icones/logo.svg" class="animation-nav" alt="Logo Portfolio Développeur Web">
						</a>
						<button class="navbar-toggler animation-nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse navigation justify-content-end" id="navbarTogglerDemo02">
							<ul class="navbar-nav animation-nav col-12 col-xl-auto justify-content-evenly justify-content-xl-end align-items-center align-items-lg-start">
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#Accueil">Accueil</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#A-Propos">A Propos</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#Compétences">Compétences</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#Réalisations">Réalisations</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link  pb-2" href="#Contact">Contact</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link cv px-4 px-lg-4 my-3 my-lg-0" href="cv.pdf" target="_blank" download>Mon CV</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!------------  Introduction ----------->
			<section id="introduction">
				<div class="container py-4">
					<div class="row row-intro-mt justify-content-md-center">
						<div class="col-12 col-md-10 col-lg-7 mt-xl-5 pt-lg-5 ps-xl-5 ps-xxl-0">
							<div class="ms-md-4 ms-lg-0">	
								<div class="animation-introduction-1">
									<h1 class="resize-name"><span class="semi-bold">Bonjour, je m'appelle</span> <span class="bold">Dylan Ayache</span></h1>
								</div>
								<div class="animation-introduction-2">
									<p class="mt-3 mb-4">Je suis actuellement en autoformation de Développeur Web et je suis disponible pour réaliser vos projets web.</p>
								</div>
							</div>
							<div class="animation-introduction-2">
								<img class="illustration-welcome-mobile" src="images/illustration-welco-mobile.svg" alt="Développeur Web en train de créer un site web">
							</div>
							<div class="animation-introduction-4">
								<p class="text-center text-lg-start mt-4">
									<a class="px-4 py-3 btn-contact" href="#Contact">Contactez-moi</a>
								</p>
							</div>
						</div>
						<div class="col-12 col-md-10 col-lg-5">
							<div class="animation-introduction-2">
								<img class="illustration-welcome-desktop" src="images/illustration-welco.svg" alt="Développeur Web en train de créer un site web">
							</div>
						</div>
					</div>
					<div class="row py-5 text-center justify-content-center animation-introduction-4">
						<div class="col-11 px-0 statut-border">
							<h2 class="bold mt-3">Statut actuel :</h2>
							<p class="mx-auto ps-2 pe-2">Je suis à la recherche d'une formation dans le Développement Web, pour consolider mes acquis et me permettre d'étoffer mes compétences. En attendant je consacre mon temps au parcours de formation "Front-End Engineer" de chez <a href ="https://www.codecademy.com/learn/paths/front-end-engineer-career-path"target="_blank"><span class="semi-bold simple-link codecademy">Codecademy</span></a></p>
								<div id="A-Propos"></div>
							<div class="card-footer pt-4 pb-3"></div>
						</div>
					</div>	
				</div>
			</section>
		</header>
		<main>
			<!------------  About ----------->
			<section id="about">
				<div class="container-fluid mt-2">
					<div class="container py-5">
						<div class="row py-5 justify-content-center justify-content-lg-between">
							<div class="col-12 col-lg-7 mb-4 js-scroll fade-in-bottom">
								<h2 class="position-relative bold">A Propos de moi</h2>
								<div class="mt-4 light-bold">
									<p class="mt-4">Bonjour, je m'appelle Dylan Ayache j'ai 26 ans et je suis actuellement à la recherche d'une formation pour devenir Développeur Web.</p>
										
									<p>Mon intérêt pour l'informatique et les nouvelles technologies a commencé depuis jeune. 
									Après mon bac j'ai commencé à faire des tutoriels sur OpenClassroom puis j'ai monté
									mon premier PC, ce qui a conforté mon idée de travailler dans le domaine du numérique.</p>
									
									<p>Grâce à mes compétences personnelles et mon autodidactisme j'ai décroché un premier emploi 
									en tant que Technicien Informatique itinérant.
									A la suite de cette première expérience, j'ai décroché un second emploi en tant que 
									Technicien Helpdesk / Gestionnaire de parc informatique.
									J'ai travaillé au total 3 ans en tant que Technicien Informatique.</p>
										
									<p>Durant le confinement je me suis replongé dans les tutoriels OpenClassroom, ce qui m'a 
									donné envie de découvrir le Développement Web. C'est pour cela qu'aujourd'hui j'aimerais obtenir un diplôme dans ce domaine. Je m'autoforme au métier de Développeur Web depuis Octobre 2021, je suis plus attiré par le front-end, mais je me forme au back-end également.</p>
									<p><span class="bold">Localisation</span> : Colmar, France</p>
									<p><span class="bold">Anglais</span> : Niveau B2 (Avancé)</p>
									<p><span class="bold">Espagnol</span> : Niveau B1 (Intermédiaire)</p>
									<!-- <a href="https://www.linkedin.com/" target="_blank"> -->
										<img src="icones/linkedin.svg" class="linkedin-icon me-2" alt="icon linkedin">
									<!-- </a> -->
									<a href="#Contact">
										<img src="icones/mail.svg" class="mail-icon" alt="icon mail">
									</a>
								</div>
							</div>
							<div class="col-10 col-md-8 col-lg-5 col-xl-4 d-flex js-scroll fade-in-bottom">
								<img class="img-fluid photo-personelle" src="images/photo-personnelle.svg" alt="Création de site web par un développeur">
							</div>
							<div id="Compétences"></div>
						</div>
					</div>
				</div>
			</section>
			<!------------  Skills ----------->
			<section id="skills">
				<div class="container py-5">
					<div class="row py-5 justify-content-center justify-content-lg-around justify-content-xxl-between px-1">
						<div class="col-12 col-lg-6 js-scroll fade-in-bottom">
							<h2 class="position-relative bold">Mes Compétences</h2>
							<p class="mt-4">Certaines de mes compétences de développeur sont en cours d'apprentissage.
								J'ai réalisé un premier projet, qui est un site vitrine statique en HTML, CSS. 
								Il a été réalisé avec une base Bootstrap et il y a également quelques lignes de JavaScript.</p>

							<p>Voici un aperçu des connaissances déjà acquises et de celles en cours d'apprentissage :</p>
							<h4 class="almost-bold mt-4 mb-3">Développement :</h4>
							<!------------  Developpement Progress Bars ----------->
							<div class="border-bottom pb-5">
								<div class="language-percentage d-flex justify-content-between">
									<span class="light-bold">HTML5, CSS3, Bootstrap <span class="light-italic"></span></span>
									<span class="light-bold">85%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">Sass <span class="light-italic">(en cours de formation)</span></span>
									<span class="light-bold">70%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">JavaScript <span class="light-italic">(en cours de formation)</span></span>
									<span class="light-bold">60%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">PHP <span class="light-italic">(en cours de formation)</span></span>
									<span class="light-bold">45%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">MySQL, phpMyAdmin<span class="light-italic">(en cours de formation)</span></span>
									<span class="light-bold">40%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
								</div>
							</div>
							<!------------  Graphism Progress Bars ----------->
							<div class="js-scroll fade-in-bottom">
								<h4 class="almost-bold pt-5 mb-3">Graphisme et SEO :</h4>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">Adobe XD</span>
									<span class="light-bold">90%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">Photoshop</span>
									<span class="light-bold">60%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
										<span class="light-bold">SEO <span class="light-italic"></span></span>
										<span class="light-bold">50%</span>
									</div>
									<div class="progress mt-1">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
									</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">InDesign</span>
									<span class="light-bold">40%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">Illustrator</span>
									<span class="light-bold">40%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
								</div>
								<p class="light-bold-italic mt-2">(Des nouvelles compétences vont s'ajouter et  les barres de progression vont augmenter au fur et à mesure de ma formation).</p>
							</div>
						</div>
						<!------------  Learning supports ----------->
						<div class="col-11 col-lg-5 mt-4 mt-lg-3 js-scroll fade-in-bottom">
							<h4 class="almost-bold pt-5 mb-3">Supports d'apprentissage :</h4>
							<p class="mb-5">Je m'autoforme en utilisant les applications ci-dessous:</p>
							<div class="list-icones">
								<div class="mb-5">
									<a href="https://www.codecademy.com/profiles/Dylan68" target="_blank">
										<img src="icones/codeacademy.svg" class="code-cademy" alt="icone site code academy">
									</a>
								</div>
								<div class="mb-5 ms-md-5">
									<a href="https://openclassrooms.com/fr/" class="ms-md-5 ps-5" target="_blank">
										<img src="icones/openclassrooms.svg" class="openclassrooms" alt="icone site openclassrooms">
									</a>
								</div>
								<div class="mb-5">
									<a href="https://getmimo.com/" target="_blank">
										<img src="icones/mimo.svg" class="mimo" alt="icone application mimo">
									</a>
								</div>
								<div class="ms-md-5">
									<a href="https://www.codewars.com/users/Dylan-Ay/stats" class="ms-5 ps-5" target="_blank">
										<img src="icones/icon-codewars.svg" class="codewars" alt="icone site codewars">
									</a>
								</div>
							</div>
						</div>
						<div id="Réalisations"></div>
					</div>
				</div>
			</section>
			<!------------  Works ----------->
			<!------------  First row Univers-Running ----------->
			<section id="works">
				<div class="container-fluid">
					<div class="container  py-5">
						<div class="row pt-5 justify-content-lg-between justify-content-md-center row-border">
							<div class="col-12 col-md-11 col-lg-6 js-scroll slide-left">
								<h2 class="position-relative bold">Mes Réalisations</h2>
									<video  controls controlsList="nofullscreen" playsinline preload autoplay muted loop width="100%" class="univers-running works-preview mt-4">
										<source src="images/univers-running.mp4" type="video/mp4">
									</video>
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon mx-4">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon me-3">
									</li>
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class=" bootstrap-icon mt-2 me-3">
									</li>
									<li>
										<img src="icones/icon-xd.svg" alt="icone adobe xd " class="graph-icon me-3 mt-2">
									</li>
									<li>
										<img src="icones/indesign.svg" alt="icone indesign" class="graph-icon mt-2 me-3">
									</li>
									<li>
										<img src="icones/illustrator.svg" alt="icone illustrator" class="graph-icon mt-2">
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-9 col-lg-5 js-scroll fade-in-bottom">
								<div class="description-univers-running px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Univers-Running</h4>
									<p>Voici mon premier projet, j'ai décidé de réaliser un site vitrine statique, une charte graphique ainsi que les maquettes du site.</p>
									<p>C'est un site sur l'univers de la course à pied, on y retrouve des conseils, des informations et des actualités.</p>
									<p class="semi-bold text-end">Novembre 2021</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Univers-Running" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
									<a href="https://univers-running.go.yj.fr/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>
						</div>
						<!------------  Second row Calculateur d'IMC ----------->
						<div class="row justify-content-lg-between justify-content-md-center row-pt pb-5 row-border">
							<div class="col-12 col-md-11 col-lg-6 order-0 order-lg-1 js-scroll slide-right">
								<img src="images/calculateur-imc.jpg" alt="calculateur imc" class="works-preview img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon mx-4">
									</li>
									<li>
										<img src="icones/icon-php.svg" alt="icone php" class="dev-icon me-4 php-icon">
									</li>
									<li>
										<img src="icones/icon-xd.svg" alt="icone adobe xd " class="graph-icon me-3 mt-2">
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-9 col-lg-5 js-scroll fade-in-bottom">
								<div class="description-imc px-4 py-4">
									<h4 class="almost-bold">Calculateur IMC</h4>
									<p>Projet Personnel, c'est un calculateur d'IMC en PHP, il y intègre un calculateur et grâce à une formule, celui-ci vous permet de calculer votre indice de masse graisseuse ainsi que votre poids idéal.</p>
									<p>Pour l'instant ce projet est fini mais une suite lui sera donnée plus tard, en y intégrant d'autres calculateurs santé.</p>
									<p class="semi-bold text-end">Janvier 2022</p>							
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Calculateur-IMC" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
									<a href="https://calculateur-imc.go.yo.fr/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>
						</div>
						<!------------  Third row Jeu du plus ou moins ----------->		
						<div class="row justify-content-lg-between justify-content-md-center row-pt pb-5 row-border">
							<div class="col-12 col-md-11 col-lg-6 js-scroll slide-left">
								<img src="images/plus-ou-moins.jpg" alt="jeu du plus ou moins" class="works-preview img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon mx-4">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon me-4">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon me-3 mt-2 sass-icon">
									</li>
									
									<li>
										<img src="icones/icon-xd.svg" alt="icone adobe xd " class="graph-icon me-3 mt-2">
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-9 col-lg-5 js-scroll fade-in-bottom">
								<div class="description-imc px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Jeu du Plus ou Moins</h4>
									<p>Projet Personnel, c'est un jeu en JavaScript, le but est de trouver un nombre entre 1 et 100 généré par l'ordinateur en dix tentatives. Le joueur marque 1 point pour chaque nombre qu'il a trouvé, si il échoue l'ordinateur marque 1 point.</p>
									<p>Il y a plusieurs parties du jeu qui sont dynamiques, l'objectif était de réaliser un projet pour travailler sur les aspects du DOM en JavaScript.</p>
									<p class="semi-bold text-end">Février 2022</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Plus-ou-moins" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
									<a href="https://jeu-plus-ou-moins.netlify.app/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>
						</div>
						<!------------  Fourth row Bloc-notes en ligne ----------->
						<div class="row justify-content-lg-between justify-content-md-center row-pt pb-5">
							<div class="col-12 col-md-11 col-lg-6 order-0 order-lg-1 js-scroll slide-right">
									<img src="images/in-progress.svg" class="works-preview img-fluid" alt="in progress">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon mx-4">
									</li>
									<li>
										<img src="icones/icon-xd.svg" alt="icone xd" class="graph-icon mt-2 me-4">
									</li>
									<li>
										<img src="icones/icon-php.svg" alt="icone php" class="php-icon me-3 mt-2">
									</li>
									<li>
										<img src="icones/icon-sql.svg" alt="icone adobe sql " class="sql-icon me-3 mt-2 mb-3">
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-9 col-lg-5 js-scroll fade-in-bottom">
								<div class="description-hotel px-4 py-4">
									<h4 class="almost-bold">Bloc-notes en ligne</h4>
									<p>Projet personnel en cours de réalisation, le but de ce site est de pouvoir écrire des notes et de les conserver via un compte personnel.
									<p>Il y a donc la possibilité de créer un compte, de sauvegarder et de modifier ses notes.</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
										<img src="icones/github.svg" alt="icon github" class="me-2">
										<img src="icones/extern-link.svg" alt="icon link">
								</div>
							</div>
						</div>
						<span id="Contact"></span>
					</div>
				</div>
			</section>
			<!------------  Contact ----------->
			<section id=contact>
			<div class="container py-5">
				<div class="row py-5 justify-content-center">
					<div class="col-11 col-sm-10 col-md-9 col-lg-12 js-scroll fade-in-bottom">
						<h2 class="bold text-center">Contactez-moi</h2>
						<form method="post" name="contact-form" action="index.php">
							<div class="row mt-5 justify-content-center">
								<div class="col-lg-4 mb-4">
									<label for="name" class="form-label light-bold">Nom et Prénom <span class="red">*</span></label>
									<input type="text" name="name" class="form-control py-3" id="my-field" required="required">
								</div>
								<div class="col-lg-4">
									<label for="email" class="form-label light-bold">Adresse mail <span class="red">*</span></label>
									<input type="email" name="email" class="form-control py-3" id="email" required="required">
								<?php echo $errorMail; ?>
								</div>
							</div>
							<div class="row mt-4 justify-content-center">	
								<div class="col-lg-4">			
									<label for="phone" class="form-label light-bold">Téléphone</label>
									<input dir="ltr" name="phone" type="text" class="form-control py-3 no-arrow" >
									<?php echo $errorNumber; ?>
								</div>
								<div class="col-lg-4">
								</div>
							</div>
							<div class="row mt-4 justify-content-center">
								<div class="col-lg-8">
									<label for="message" class="form-label light-bold">Message <span class="red">*</span></label>
									<textarea class="form-control" name="message" id="message" rows="7" required="required"></textarea>	
								</div>
							</div>
							<div class="row justify-content-center">
								<div class=" col-lg-3">
									<?php echo $error; ?>
									<p class="mt-3 ms-1 almost-bold">Champs requis <span class="red">*</span></p>
								</div>
								<div class="col-lg-5">
								</div>
							</div>
							<div class="row mt-4 justify-content-center">
								<div class="col-lg-2 d-flex justify-content-center">
									<button type="submit" class="button-submit btn px-5 py-3" role="button">Envoyer</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
			<!------------  Footer ----------->
		<footer id="footer">
			<div class="container-fluid py-3">
				<div class="row justify-content-center">
					<div class="col-lg-2">
						<ul class="list-unstyled d-flex pt-5 justify-content-center ps-4">
							<li>
								<!-- <a href="https://www.linkedin.com/" target="_blank"> -->
									<img src="icones/linkedin-white.svg" alt="icone linkedin">
								<!-- </a> -->
							</li>
							<li>
								<a href="https://github.com/Dylan-Ay" target="_blank">
									<img src="icones/github-white.svg" alt="icone github" class="mx-3">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 d-flex">
						<p class="light-bold madeby mx-auto">© Réalisé par Dylan Ayache</p>
					</div>
				</div>
			</div>
		</footer>
		<!---------------------- BOUTON RETOUR HAUT DE PAGE ---------------------->
	    <button type="button" class="btn btn-floating btn-sm fade-in-bottom" id="btn-back-to-top">
	  		<img src="icones/back-to-top.svg" alt="icone retour haut de page">
		</button>
		<script src="bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
		 <script src="website.js"></script>
	</body>
</html>