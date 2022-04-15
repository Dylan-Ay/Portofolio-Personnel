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
		<!-- Personnal CSS -->
		<link rel="stylesheet" type="text/css" href="portfolio.css">
		<link rel="icon" href="icones/logo-title.ico" type="image/icon">
		<title>Dylan Ayache Développeur Web, Création de Site vitrine - Portfolio</title>
	</head> 
	<body>
		<!------------ Including PHP for contact section ------------>
		<?php include('form-treatement.php');?>
		<header>
			<div id="Accueil"></div>
			<div id="menu">
				<!------------  Navbar ----------->
				<div class="container ">
					<nav class="navbar py-0 px-0 navbar-expand-lg">
						<a href="https://dylanayache.com/">
							<img src="icones/logo.svg" class="animation-nav" alt="Logo Portfolio Dylan Ayache Développeur Web">
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
									<p class="mt-3 mb-4">Je suis actuellement en formation de Développeur Web et je suis disponible pour réaliser vos projets web.</p>
								</div>
							</div>
							<div class="animation-introduction-2">
								<img class="illustration-welcome-mobile" src="images/illustration-welco-mobile.svg" alt="Développeur Web en train de créer un site web">
							</div>
							<div class="animation-introduction-4">
								<p class="text-center text-lg-start mt-4 margin-contact">
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
							<p class="mx-auto ps-2 pe-2">Dans le cadre de ma formation de Développeur Web, <span class="bold">je suis à la recherche d'un stage<br> du 05 Septembre 2022 au 21 Octobre 2022 inclus.</span> En parallèle je réalise des projets personnels et je suis disponible pour réaliser vos <strong class="regular">sites vitrines</strong>.</p>
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
							<div class="col-12 col-lg-7 mb-4 scroll-in js-opacity">
								<h2 class="position-relative bold">A Propos de moi</h2>
								<div class="mt-4 light-bold">
									<p class="mt-4">Bonjour, je m'appelle Dylan Ayache j'ai 27 ans et je suis actuellement en formation de Développeur Web et Web Mobile en vue d'obtenir un Bac +2.</p>
										
									<p>Mon intérêt pour l'informatique et les nouvelles technologies a commencé depuis jeune. 
									Après mon bac j'ai commencé à faire des tutoriels sur OpenClassroom puis j'ai monté
									mon premier PC, ce qui a conforté mon idée de travailler dans le domaine du numérique.</p>
									
									<p>Grâce à mes compétences personnelles et mon autodidactisme j'ai décroché un premier emploi 
									en tant que Technicien Informatique itinérant.
									A la suite de cette première expérience, j'ai décroché un second emploi en tant que 
									Technicien Helpdesk / Gestionnaire de parc informatique.
									J'ai travaillé au total 3 ans en tant que Technicien Informatique.</p>
										
									<p>Durant le confinement je me suis replongé dans les tutoriels OpenClassroom, ce qui m'a 
									donné envie de redécouvrir le Développement Web. C'est pour cela qu'aujourd'hui j'aimerais obtenir un diplôme dans ce domaine. Je m'autoforme au métier de Développeur Web depuis Octobre 2021, j'ai déjà quelques <a href="#Réalisations" class="semi-bold simple-link codecademy">projets à mon actif.</a> Je suis plus attiré par le front-end, mais je me forme également au back-end.</p>
									<p><span class="bold">Localisation</span> : Colmar, France</p>
									<p><span class="bold">Anglais</span> : Niveau B2 (Avancé)</p>
									<p><span class="bold">Espagnol</span> : Niveau B2 (Avancé)</p>
									<a href="https://www.linkedin.com/in/dylan-ay/" target="_blank">
										<img src="icones/linkedin.svg" class="linkedin-icon me-2" alt="linkedin dylan ayache">
									</a>
									<a href="#Contact">
										<img src="icones/mail.svg" class="mail-icon" alt="icon mail">
									</a>
								</div>
							</div>
							<div class="col-10 col-md-8 col-lg-5 col-xl-4 d-flex scroll-in js-opacity">
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
						<div class="col-12 col-lg-6 scroll-in js-opacity">
							<h2 class="position-relative bold">Mes Compétences</h2>
							<p class="mt-4">Certaines de mes compétences de développeur sont en cours d'apprentissage.
								J'ai déjà réalisé plusieurs projets, mon but est de réaliser à chaque fois un nouveau projet pour valider ce que j'ai pu apprendre.</p>

							<p>Voici un aperçu de mon niveau, pour chaque compétence que j'ai pu apprendre :</p>
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
									<span class="light-bold">Sass</span>
									<span class="light-bold">70%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">JavaScript</span>
									<span class="light-bold">60%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">PHP</span>
									<span class="light-bold">45%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
								</div>
								<div class="language-percentage d-flex justify-content-between mt-2">
									<span class="light-bold">MySQL, phpMyAdmin</span>
									<span class="light-bold">40%</span>
								</div>
								<div class="progress mt-1">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
								</div>
							</div>
							<!------------  Graphism Progress Bars ----------->
							<div class="scroll-in js-opacity">
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
						<div class="col-11 col-lg-5 mt-4 mt-lg-3 scroll-in js-opacity">
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
									<a href="https://www.frontendmentor.io/profile/Dylan-Ay" target="_blank">
										<img src="icones/mentor.svg" class="mentor" alt="icone application frond-end mentor">
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
						<div class="row pt-5 justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-border">
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<h2 class="position-relative bold">Mes Réalisations</h2>
									<video controls controlsList="nofullscreen" playsinline preload  muted loop width="100%" class="univers-running works-preview-right mt-4">
										<source src="images/univers-running.mp4" type="video/mp4">
									</video>
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
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
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity">
								<div class="description-univers-running px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Univers-Running</h4>
									<p>Voici mon premier projet, j'ai décidé de réaliser un site vitrine statique, une charte graphique ainsi que les maquettes du site.</p>
									<p>C'est un site sur l'univers de la course à pied, on y retrouve des conseils, des informations et des actualités.</p>
									<p class="semi-bold text-end">Novembre 2021</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Univers-Running" target="_blank">
										<img src="icones/github.svg" alt="github dylan ayache" class="me-2">
									</a>
									<a href="https://univers-running.go.yj.fr/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>
						</div>
						<!------------  Second row Calculateur d'IMC ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border">
							<div class="col-12 col-md-11 col-lg-6 order-0 order-lg-1 project-image">
								<img src="images/calculateur-imc.jpg" alt="calculateur imc" class="works-preview-left img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
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
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity">
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
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border">
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/plus-ou-moins.jpg" alt="jeu du plus ou moins" class="works-preview-right img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
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
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity">
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
						<!------------ Fourth row Landing page ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-imc px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Page d'accueil</h4>
									<p>Projet Personnel, c'est une page d'accueil que j'ai réalisé comme premier projet du site Frontend Mentor.</p>
									<p>L'objectif était de réaliser une page ayant des éléments à superposer et d'utiliser mes acquis en JavaScript pour créer les animations de la barre de navigation.</p>
									<p class="semi-bold text-end">Février 2022</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Blogr-landing-page-Front-end-Mentor" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
									<a href="https://landing-page-frontend-mentor-challenge.netlify.app/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/landing-page.jpg" alt="jeu du plus ou moins" class="works-preview-left img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
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
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class=" bootstrap-icon mt-2 me-3">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Fifth row Calculateur Tip ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-1">
								<div class="description-imc px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Calculateur de tip</h4>
									<p>Projet Personnel, c'est un calculateur de tip, c'est un projet du site Frontend Mentor.</p>
									<p>L'objectif était de réaliser un calculateur de tip (pourboire) en JavaScript. Il permet de calculer le montant d'un tip par personne ainsi que le montant total (facture + tip) par personne. Il y a des pourcentages de tips prédéfinis, on a également la possibilité de calculer un pourcentage au choix.</p>
									<p class="semi-bold text-end">Mars 2022</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Tip-calculator-app-Front-end-Mentor" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
									<a href="https://tip-calculator-frontend-mentor-challenge.netlify.app/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/calculateur-tip.jpg" alt="jeu du plus ou moins" class="works-preview-right img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
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
								</ul>
							</div>
						</div>
						<!------------ Gallery JS Vanilla ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 show-more row-border-top">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-imc px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Galerie Photo</h4>
									<p>Projet Personnel, c'est une galerie photo effectuée en JS Vanilla.</p>
									<p>Cette galerie comporte plusieurs fonctionalités, dans un premier temps il y a un filtre qui affiche les photos selon une catégorie sélectionée. Ensuite il y a une modal qui permet d'afficher la photo en grand quand on clique dessus. Enfin il y a un slider qui permet de naviguer entre les différentes photos.</p>
									<p class="semi-bold text-end">Mars 2022</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/Gallery" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
									<a href="https://pictures-gallery-js.netlify.app/" target="_blank">
										<img src="icones/extern-link.svg" alt="icon link">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/gallery.jpg" alt="pictures gallery javascript" class="works-preview-left img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon mx-4">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon me-4">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Projet PHP ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 show-more row-border-top">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-1">
								<div class="description-imc px-4 py-4 text-lg-end">
									<h4 class="almost-bold">Projet PHP</h4>
									<p>Projet Personnel, c'est un projet qui est en cours de réalisation.</p>
									<p>Ce projet intègre déjà un système de "Panier" ainsi qu'une page qui récapitule le contenu du panier.</p>
									<p class="semi-bold text-end">Avril 2022</p>
								</div>
								<div class="git-link me-3 mt-2 text-end">
									<a href="https://github.com/Dylan-Ay/App--Ajout-de-produit--PHP" target="_blank">
										<img src="icones/github.svg" alt="icon github" class="me-2">
									</a>
										<img src="icones/extern-link.svg" alt="icon link">
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/panier.jpg" alt="projet d'un panier en php" class="works-preview-right img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon mx-4">
									</li>
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class="bootstrap-icon mt-2 me-3">
									</li>
									<li>
										<img src="icones/icon-php.svg" alt="icone php" class="dev-icon me-4 php-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Bouton 'afficher plus' ----------->
						<div class="row">
							<div class="col-12 text-center">
								<button id="show-more-btn" class="btn-contact px-4 py-3">Afficher Plus</button>
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
						<div class="col-11 col-sm-10 col-md-9 col-lg-12 scroll-in js-opacity">
							<h2 class="bold text-center">Contactez-moi</h2>
							<form method="post" name="contact-form" action="index.php">
								<div class="row mt-5 justify-content-center">
									<div class="col-lg-4 mb-4">
										<label for="name" class="form-label light-bold">Nom et Prénom <span class="red">*</span></label>
										<input type="text" name="name" class="form-control py-3" id="name" required="required">
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
										<input dir="ltr" name="phone" type="number" id="phone" class="form-control py-3 no-arrow" >
										<?php echo $errorNumber; ?>
									</div>
									<div class="col-lg-4"></div>
								</div>
								<div class="row mt-4 justify-content-center">
									<div class="col-lg-8">
										<label for="message" class="form-label light-bold">Message <span class="red">*</span></label>
										<textarea class="form-control" name="message" id="message" rows="7" required="required"></textarea>	
										<input type="text" id="website" name="website"/>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class=" col-lg-3">
										<?php echo $error; ?>
										<p class="mt-3 ms-1 almost-bold">Champs requis <span class="red">*</span></p>
									</div>
									<div class="col-lg-5"></div>
								</div>
								<div class="row mt-4 justify-content-center">
									<div class="col-lg-2 d-flex justify-content-center">
										<button type="submit" class="button-submit btn px-5 py-3" role="button">Envoyer</button>
									</div>
								</div>
							</form>
						</div>
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
								<a href="https://www.linkedin.com/in/dylan-ay/" target="_blank">
									<img src="icones/linkedin-white.svg" alt="linkedin dylan ayache">
								</a>
							</li>
							<li>
								<a href="https://github.com/Dylan-Ay" target="_blank">
									<img src="icones/github-white.svg" alt="github dylan ayache" class="mx-3">
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
	    <button type="button" id="btn-back-to-top" class="btn btn-floating btn-sm fade-in-bottom">
	  		<img src="icones/back-to-top.svg" alt="icone retour haut de page">
		</button>
		<script src="bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
		<script src="website.js"></script>
	</body>
</html>