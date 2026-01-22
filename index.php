<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title>Dylan Ayache - Développeur Fullstack - Portfolio</title>
		<link rel="canonical" href="https://dylanayache-portfolio.up.railway.app/" />
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="Développeur Fullstack situé à Colmar, Création de Site internet et Application web. Je vous invite à découvrir mon Portfolio. A bientôt :-) !" />
		<!-- Open Graph protocol -->
		<meta property="og:title" content="Dylan Ayache - Développeur Fullstack - Portfolio" />
		<meta property="og:description" content="Développeur Fullstack situé à Colmar, Création de Site internet et Application web. Je vous invite à découvrir mon Portfolio. A bientôt :-) !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dylanayache-portfolio.up.railway.app/" />
        <meta property="og:image" content="https://dylanayache-portfolio.up.railway.app/images/img-meta.png" />
        <!-- Twitter card tags-->
        <meta name="twitter:card" content="website" />
        <meta name="twitter:site" content="@DylanAy_Dev" />
        <meta name="twitter:title" content="Dylan Ayache - Développeur Fullstack - Portfolio" />
        <meta name="twitter:description" content="Développeur Fullstack situé à Colmar, Création de Site internet et Application web. Je vous invite à découvrir mon Portfolio. A bientôt :-) !" />
        <meta name="twitter:image" content="https://dylanayache-portfolio.up.railway.app/images/img-meta.png" />

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
	</head> 
	<body>
		<?php include('form-treatement.php');?>
		<header>
			<div id="menu" class="animation-nav-out">
				<!------------  Navbar ----------->
				<div class="container ">
					<nav class="navbar py-0 px-0 navbar-expand-lg">
						<a href="/">
							<img src="icones/logo.svg" class="animation-nav-out" alt="Logo Portfolio Dylan Ayache Développeur Fullstack">
						</a>
						<button class="navbar-toggler animation-nav-out" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse navigation justify-content-end" id="navbarTogglerDemo02">
							<ul class="navbar-nav col-12 col-xl-auto justify-content-evenly justify-content-xl-end align-items-center align-items-lg-start">
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#introduction">Accueil</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#about">A Propos</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#skills">Compétences</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link" href="#works">Réalisations</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link simple-link  pb-2" href="#contact">Contact</a>
								</li>
								<li class="nav-item mx-xl-3">
									<a class="nav-link cv px-4 px-lg-4 my-3 my-lg-0" href="/cv.pdf" target="_blank" >Mon CV</a>
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
									<h1 class="resize-name"><span class="semi-bold">Bonjour, je m'appelle</span> <strong>Dylan Ayache</strong></h1>
								</div>
								<div class="animation-introduction-2">
									<p class="mt-3 mb-4">Je suis Développeur Fullstack, bienvenue sur mon Portfolio.
									</p>
								</div>
							</div>
							<div class="animation-introduction-2">
								<img class="illustration-welcome-mobile" src="images/illustration-welco-mobile.svg" alt="Développeur Web en train de créer un site web">
							</div>
							<div class="animation-introduction-4">
								<p class="text-center text-lg-start mt-4 margin-contact">
									<a class="px-4 py-3 btn-contact" href="#contact">Contactez-moi</a>
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
							<p class="mx-auto ps-2 pe-2">En préparation d'une Licence Profesionnelle en développement informatique à l'UHA de Mulhouse, <span class="semi-bold">je suis à la recherche d'un stage non rémunéré du 07 Avril au 06 Juillet 2026.</span> 
							<br>
							Je reste ouvert à toute proposition d'emploi.
							<br>					
							Je suis également disponible pour réaliser vos projets, n'hésitez pas à me contacter 😊.
							</p>
							
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
							<div class="col-12 col-lg-7 scroll-in js-opacity">
								<h2 class="position-relative bold">A Propos de moi</h2>
								<div class="mt-4 light-bold">
									<p class="mt-4">Bonjour, je m'appelle Dylan Ayache j'ai 30 ans et je prépare actuellement une 
										<span class="semi-bold">Licence Professionnelle en développement informatique à l'UHA de Mulhouse.</span>
									</p>
										
									<p>Mon intérêt pour l'informatique et les nouvelles technologies a commencé étant jeune. 
									Après mon bac j'ai commencé à apprendre la programmation de manière autodicacte en ligne. Puis j'ai suivi des cours sur OpenClassroom tout ceci a conforté mon idée de travailler dans le domaine du numérique. Ne réussissant pas à trouver une alternance à ce moment là dans le développement informatique, je me suis mis à travailler.</p>
									
									<p>Grâce à mes compétences personnelles et mon autodidactisme j'ai décroché un premier emploi 
									en tant que Technicien Informatique itinérant.
									A la suite de cette première expérience, j'ai décroché un second emploi en tant que 
									Technicien Helpdesk / Gestionnaire de parc informatique.
									<span class="semi-bold">J'ai travaillé au total 3 ans en tant que Technicien Informatique.</span></p>
										
									<p>En 2021 je me suis replongé dans les tutoriels OpenClassroom, ce qui m'a 
									donné envie de redécouvrir le Développement Informatique.</p>  

									<p>J'ai obtenu un titre professionnel de Développeur Web et Web Mobile en 2022 (Bac+2), à la suite de cela <span class="semi-bold">j'ai travaillé comme Développeur Fullstack de Mars 2023 à Septembre 2024 chez un média.</span> Je code depuis fin 2021.</p>

									<p>Aujourd'hui je poursuis ma montée en compétences en licence professionnelle et je continue de me perfectionner et de mettre en oeuvre mes capacités à travers des 
										<a href="#works" class="semi-bold simple-link codecademy">projets personnels.</a>
									</p>
									<p><span class="bold">Localisation</span> : Colmar, France</p>
									<p><span class="bold">Anglais</span> : Niveau B2 (Avancé)</p>
									<p><span class="bold">Espagnol</span> : Niveau B2 (Avancé)</p>

									<div class="d-flex justify-content-between flex-md-row flex-column gap-3 align-items-lg-center">
										<div class="d-flex gap-2">
											<a href="https://www.linkedin.com/in/dylan-ay/" target="_blank">
												<img src="icones/linkedin.svg" class="linkedin-icon" alt="linkedin dylan ayache">
											</a>
											<a href="#contact">
												<img src="icones/mail.svg" class="mail-icon" alt="icone mail">
											</a>
											<a href="https://github.com/Dylan-Ay" target="_blank">
												<img src="icones/github.svg" class="git-link" alt="icone github">
											</a>
										</div>
										<div>
											<a href="https://www.codewars.com/users/Dylan-Ay" target="_blank">
												<img src="https://www.codewars.com/users/Dylan-Ay/badges/large" class="img-fluid">
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-10 col-md-8 col-lg-5 col-xl-4 d-flex scroll-in js-opacity mt-4 mt-lg-0">
								<img class="img-fluid photo-personelle" src="images/photo-personnelle.svg" alt="Création de site web par un développeur">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!------------  Skills ----------->
			<section id="skills">
				<div class="container py-5">
					<div class="row py-5 scroll-in js-opacity">
						<h2 class="position-relative bold">Mes Compétences</h2>
						<p class="mt-3">
						Mon but est de réaliser à chaque fois un nouveau projet pour mettre en oeuvre ce que j'ai pu apprendre.</p>
						<div class="border-bottom pb-5 d-flex flex-column flex-lg-row">
							<div class="col-12 col-lg-6">
								<h4 class="almost-bold mt-4 mb-3">Développement Front-end :</h4>
								<!------------  Developpement Front-end Skills ----------->
								<div class="d-flex flex-wrap skills-content">
									<div class="skill-card rounded-3 zoomin zoomin">
										<a href="https://react.dev/" target="_blank">
											<img src="/icones/skills/react-logo.svg" alt="logo react">
											React
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin zoomin">
										<a href="https://www.typescriptlang.org/" target="_blank">
											<img src="/icones/skills/typescript-logo.svg" alt="logo typescript">
											TypeScript
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://nextjs.org/" target="_blank">
											<img src="/icones/skills/nextjs-logo.svg" alt="logo next">
											Next
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://tailwindcss.com/" target="_blank">
											<img src="/icones/skills/tailwind-logo.svg" alt="logo tailwind">
											Tailwind
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://sass-lang.com/" target="_blank">
											<img src="/icones/skills/sass-logo.svg" alt="logo sass">
											Sass
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://getbootstrap.com/" target="_blank">
											<img src="/icones/skills/Bootstrap_logo.svg" alt="logo bootstrap">
											Bootstrap
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
											<img src="/icones/skills/javascript-logo.svg" alt="logo javascript">
											JavaScript
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://jquery.com/" target="_blank">
											<img src="/icones/skills/jquery-logo.svg" alt="logo jquery">
											jQuery
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://www.electronjs.org/" target="_blank">
											<img src="/icones/skills/electron-logo.svg" alt="logo electron.js">
											Electron.js
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://mellowdevs.medium.com/web-components-using-vanilla-js-f7af00834caa" target="_blank">
											<img src="/icones/skills/web-components-logo.svg" alt="logo web-components">
											Web-Components
										</a>
									</div>
								</div>
								<p class="light-bold-italic mt-5 mb-3">Compétences en cours d'apprentissage :</p>
								<div class="d-flex flex-wrap skills-content">
									<div class="skill-card rounded-3 zoomin">
										<a href="https://dev.java/learn/" target="_blank">
											<img src="/icones/skills/java-logo.svg" alt="logo java">
											Java
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://spring.io/" target="_blank">
											<img src="/icones/skills/spring-logo.svg" alt="logo spring">
											Spring Boot
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://reactnative.dev/" target="_blank">
											<img src="/icones/skills/react-logo.svg" alt="logo react">
											React Native
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6 scroll-in js-opacity pb-5">
								<h4 class="almost-bold mt-5 mt-lg-4 mb-3">Développement Back-end :</h4>
								<!------------  Developpement Back-end Skills ----------->
								<div class="d-flex flex-wrap skills-content">
									<div class="skill-card rounded-3 zoomin">
										<a href="https://symfony.com/" target="_blank">
											<img src="/icones/skills/symfony-logo.svg" alt="logo symfony">
											Symfony 6
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://www.php.net/" target="_blank">
											<img src="/icones/skills/php-logo.svg" alt="logo php">
											PHP 8
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://graphql.org/" target="_blank">
											<img src="/icones/skills/graphql-logo.svg" alt="logo graphql">
											GraphQL
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://fr.wordpress.org/" target="_blank">
											<img src="/icones/skills/wp-logo.svg" alt="logo worpress">
											Wordpress
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://www.mysql.com/" target="_blank">
											<img src="/icones/skills/mysql-logo.svg" alt="logo mysql">
											MySQL
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://www.datacamp.com/blog/data-modeling" target="_blank">
											<img src="/icones/skills/data-modeling-logo.svg" alt="logo data modeling">
											Data Modeling
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://nodejs.org/en" target="_blank">
											<img src="/icones/skills/node-logo.svg" alt="logo node.js">
											Node.js
										</a>
									</div>
									<div class="skill-card rounded-3 zoomin">
										<a href="https://www.python.org/" target="_blank">
											<img src="/icones/skills/python-logo.svg" alt="logo python">
											Python
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6 scroll-in js-opacity">
							<h4 class="almost-bold pt-5 mb-3">Autres :</h4>
							<!------------ Others Skills ----------->
							<div class="d-flex flex-wrap skills-content">
								<div class="skill-card rounded-3 zoomin">
									<a href="https://www.docker.com/" target="_blank">
										<img src="/icones/skills/docker-logo.svg" alt="logo docker">
										Docker
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://git-scm.com/" target="_blank">
										<img src="/icones/skills/git-logo.svg" alt="logo git">
										Git
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://vercel.com/" target="_blank">
										<img src="/icones/skills/vercel-logo.svg" alt="logo vercel">
										Vercel
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://render.com/" target="_blank">
										<img src="/icones/skills/render-logo.svg" alt="logo render">
										Render
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://railway.com/" target="_blank">
										<img src="/icones/skills/railway-logo.svg" alt="logo railway">
										Railway
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://www.cypress.io/" target="_blank">
										<img src="/icones/skills/cypress-logo.svg" alt="logo cypress.io">
										Cypress
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://tagmanager.google.com/" target="_blank">
										<img src="/icones/skills/gt-logo.svg" alt="logo google tag manager">
										Google Tag Manager
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://www.figma.com/fr-fr/" target="_blank">
										<img src="icones/skills/figma-logo.svg" alt="logo Figma">
										Figma
									</a>
								</div>
								<div class="skill-card rounded-3 zoomin">
									<a href="https://helpx.adobe.com/uk/support/xd.html" target="_blank">
										<img src="/icones/skills/adobexd-logo.svg" alt="logo Adobe XD">
										Adobe XD
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!------------  Works ----------->
			<section id="works">
				<div class="container-fluid">
					<div class="container  py-5">
						<!------------ App Météo ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center py-5">
							<h2 class="position-relative bold">Mes Réalisations</h2>
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-fiches-films px-4 py-4">
									<h4 class="almost-bold">Ma Météo</h4>
									<p>Projet de licence : une application de bureau avec Electron.js, Tailwind, Web Components et deux API.</p>
									<p>Le projet est une application de données météorologiques qui utilise principalement <a href="https://openweathermap.org/" target="_blank"><strong>OpenWeather</strong></a> pour la météo et <a href="https://www.geoapify.com/" target="_blank"><strong>Geoapify</strong></a> pour afficher une liste de villes selon la recherche effectuée. Les fonctionnalités sont :</p>

									<ul class="d-flex gap-3 flex-column">
										<li>Rechercher n'importe quelle ville dans le monde grâce à l'API Geoapify. Une fois la ville sélectionnée, vous obtiendrez les prévisions météorologiques de cette dernière.</li>
										<li>Affichage des informations météorologiques actuelles et sur 24 heures comprenant : la température, la température ressentie, l'icône de la météo, la vitesse du vent, le taux d'humidité, la pression atmosphérique, les heures de lever et de coucher de soleil ainsi qu'une description de la météo du jour.</li>
										<li>Les données sont enregistrées dans la mémoire locale de votre navigateur afin de pouvoir être affichées lors de la prochaine utilisation de l'application.</li>
										<li>Vous pouvez accéder à l'historique des villes recherchées directement sous la barre de recherche. Ces éléments sont cliquables et vous permettent d'afficher rapidement les prévisions météorologiques de la ville sélectionnée.</li>
										<li>Météo quotidienne pour les 7 prochains jours de la ville sélectionnée : la température maximale, la température minimale, l'icône de la météo, le lever et coucher du soleil.</li>
										<li>J'ai également créé un thème sombre que vous pouvez activer à l'aide du bouton situé dans le coin supérieur droit de l'application.</li>
										<li>Il y a également deux indicateurs santé: la qualité de l'air allant de 1 à 5 et l'indice UV allant de 1 à 12. Selon le niveau de chacun de ces critères, un conseil personnalisé est affiché suivant les recommandations de l'OMS.</li>
										<li>Un cache a été implémenté pour éviter l'excès d'appels API.</li>
									</ul>
									
									<p class="semi-bold text-end">Décembre 2025</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Ma-Meteo" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
									<a href="https://github.com/Dylan-Ay/Ma-Meteo/releases/download/v1.0/Ma-Meteo.zip">
										<img src="icones/download.svg" alt="download icon" title="Télécharger">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/app-meteo.PNG" alt="photo projet app-météo" class="works-preview-left mt-4 img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/skills/electron-logo.svg" alt="icone electron" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/web-components-logo.svg" alt="icone web-components" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/javascript-logo.svg" alt="icone javascript" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/tailwind-logo.svg" alt="icone tailwind" class="dev-icon" style="margin-right: -15px;">
									</li>
									<li>
										<img src="icones/skills/api-logo.svg" alt="icone api" style="width: 75px;">
									</li>
								</ul>
							</div>
						</div>
						<!------------ App E-commerce ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt row-border-top pb-5">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-1">
								<div class="description-fiches-films px-4 py-4 text-lg-start">
									<h4 class="almost-bold">App Ecommerce</h4>
									<p>Projet personnel, c'est un site Ecommerce réalisé avec Symfony 6.</p>
									<p>Le projet comporte les fonctionnalités clés d'un site de vente en ligne avec une architecture MVC. Les fonctionnalités sont : </p>
									<ul class="d-flex gap-3 flex-column">
										<li>
											Une page affiche dynamiquement une liste de produits selon leurs catégories, leurs créateurs, ainsi qu'une page dédiée aux nouveautés et aux promotions. Un système de pagination est intégré avec <a href="https://github.com/KnpLabs/KnpPaginatorBundle" target="_blank"><strong>KnpPaginator</strong></a>
										</li>
										<li>
											Une page affiche dynamiquement les détails d'un produit, où l'utilisateur peut ajouter le produit à son panier en sélectionnant une taille et une quantité valide. Il existe également une option pour ajouter le produit aux favoris, avec une requête 
											<a href="https://developer.mozilla.org/fr/docs/Glossary/AJAX" target="_blank"><strong>AJAX</strong></a> afin d'améliorer l'expérience utilisateur (UX)
										</li>
										<li>
											Authentification et inscription des utilisateurs, avec l'utilisation d'une regex pour le mot de passe suivant les recommandations de l'<a href="https://owasp.org/" target="_blank"><strong>OWASP</strong></a>, et un champ « honeypot » pour prévenir les attaques automatisées de type bot. Un e-mail est envoyé à l'utilisateur pour confirmer son compte
										</li>
										<li>
											Accès à différentes pages de compte utilisateur pour le suivi des commandes, la modification des informations personnelles et la gestion des adresses
										</li>
										<li>
											Un système de panier est implémenté, permettant aux utilisateurs d'ajouter, supprimer ou gérer les quantités de produits avant de valider leur commande. Toutes les interactions se font via des requêtes AJAX pour améliorer l'UX
										</li>
										<li>
											Un système de paiement est implémenté, permettant à l'utilisateur de choisir une adresse de livraison et de facturation existante ou d'en créer une nouvelle, de sélectionner un mode de paiement, et de visualiser un récapitulatif des produits avant de confirmer l'achat. La logique est en place, à l'avenir un module Stripe sera ajouté
										</li>
										<li>
											Une fois la commande confirmée, une page de succès s'affiche et une confirmation de commande est envoyée par e-mail
										</li>
										<li>
											Plusieurs vulnérabilités sont prises en compte, notamment l'injection SQL, le CSRF et le XSS. Des vérifications supplémentaires redirigent vers une page 404 si un utilisateur n'est pas autorisé à effectuer une action ou à accéder à un contenu donné
										</li>
										<li>
											Une barre de recherche permet de chercher par créateur, catégorie, nom de produit, ou une combinaison de deux mots-clés
										</li>
										<li>
											Un back-office complet permet au propriétaire du site de gérer librement les produits, les utilisateurs, le stock, les tailles, les variantes disponibles, le statut des commandes, celui-ci est implémenté via <a href="https://github.com/EasyCorp/EasyAdminBundle" target="_blank"><strong>EasyAdminBundle</strong></a>
										</li>
										<li>
											Utilisation de Docker et du serveur d'applications moderne FrankenPHP
										</li>
										<li>
											Utilisation de <a href="https://cloudinary.com/" target="_blank"><strong>Cloudinary</strong></a> pour l'hébergement des images
										</li>
										<li>
											Le projet est entièrement responsive
										</li>
									</ul>
									<p class="semi-bold text-end">Janvier 2023 à aujourd'hui</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/App-Ecommerce-Symfony-6-Showcase" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
									<a href="https://app-ecommerce-symfony-6-production.up.railway.app/" target="_blank">
										<img src="icones/extern-link.svg" alt="icone link" title="Démo du Projet">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/app-ecommerce.png" alt="photo projet app e-commerce" class="works-preview-right mt-4 img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/skills/symfony-logo.svg" alt="icone symfony" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class="bootstrap-icon">
									</li>
									<li>
										<img src="icones/icon-sql.svg" alt="icone mysql" class="dev-icon sql-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-jquery.svg" alt="icone jquery" class="dev-icon" style="width: 75px;">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon sass-icon">
									</li>
									<li>
										<img src="icones/docker-logo-blue.svg" alt="icone docker" class="dev-icon sql-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ App plantes ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border-top">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-sneakers px-4 py-4">
									<h4 class="almost-bold">App Plantes</h4>
									<p>Projet personnel, initiation à React, TypeScript, Next.js et Tailwind.</p>
									<p>Le projet est un site de plantes, avec un système de filtre et de tri. Il permet d'obtenir des informations détaillées au sujet de plusieurs types de plantes. Les fonctionnalités sont :</p>

									<ul class="d-flex gap-3 flex-column">
										<li>Liste des plantes sous forme de card en homepage</li>
										<li>Système de tri par : Récent, Nom et Popularité</li>
										<li>Système de filtrage par : Catégories, Arrosage et Exposition</li>
										<li>Détail d'une plante avec : image, description, caractéristiques et un footer récupérant les plantes de la même catégorie</li>
										<li>Création de plusieurs composants : ActiveFilter, DropdownFilter, Header, LikeButton, PlantCard, PlantDetail, SeeMoreButton et SelectSort</li>
									</ul>
									
									<p class="semi-bold text-end">Juillet 2023</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/plantes-next-js" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
									<a href="https://plantes-next-js.netlify.app/" target="_blank">
										<img src="icones/extern-link.svg" alt="icone link" title="Démo du Projet">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/app-plantes.png" alt="photo projet Le-commerce" class="works-preview-left mt-4 img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/skills/react-logo.svg" alt="icone react" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/typescript-logo.svg" alt="icone typescript" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/nextjs-logo.svg" alt="icone next js" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/tailwind-logo.svg" alt="icone tailwind" class="dev-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ App-Centre de formation ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border-top">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-1">
								<div class="description-fiches-films px-4 py-4 text-lg-start">
									<h4 class="almost-bold">App Centre de Formation</h4>
									<p>Projet de formation, c'est un intranet de gestion de tâches administratives d'un centre de formation réalisé avec Symfony 5.</p>
									<p>Le projet permet à un centre de formation de gérer les stagiaires inscrits et les sessions de formations. Les fonctionalités sont :</p>

									<ul class="d-flex gap-3 flex-column">
										<li>Plusieurs pages contenant les listings des stagiaires, formations, sessions, modules et catégories des cours</li>
										<li>CRUD des différentes données</li>
										<li>Authentification et inscription d'un utilisateur, utilisation d'une regex pour le mot de passe en suivant les consignes d'<a class="bold" href="https://owasp.org/">OWASP</a> et d'un captcha pour contrer l'attaque par force brute</li>
										<li>Rôle admin et user, pour répartir l'accès aux différentes pages de l'application</li>
										<li>Système de messagerie interne pour que les utilisateurs inscrits puissent communiquer entre eux</li>
										<li>Plusieurs failles sont gérées: (SQL, CSRF, XSS)</li>
									</ul>

									<p class="semi-bold text-end">Aout 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/App-Symfony-Gestion-Centre-de-Formation" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/app-centre-formation.jpg" alt="photo projet fiches-films" class="works-preview-right mt-4 img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/skills/symfony-logo.svg" alt="icone symfony" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class="bootstrap-icon">
									</li>
									<li>
										<img src="icones/icon-sql.svg" alt="icone mysql" class="dev-icon sql-icon">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon sass-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ App Forum ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border-top">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-sneakers px-4 py-4">
									<h4 class="almost-bold">App Forum</h4>
									<p>Projet de formation, c'est un Forum de discussion.</p>
									<p>Le projet a été réalisé avec un Framework maison, basé sur Symfony avec un design pattern en MVC. La base de données est en SQL et faite avec phpMyAdmin. Les fonctionalités sont :</p>

									<ul class="d-flex gap-3 flex-column">
										<li>Créer un nouveau sujet de discussion dans une catégorie avec un titre et un message</li>
										<li>N'importe quel user peut rajouter une réponse dans le sujet</li>
										<li>Il y a un login qui permet de s'incrire et de s'authentifier</li>
										<li>Il y a un rôle admin et user, en tant qu'admin on peut supprimer un sujet et on peut voir la liste des users</li>
										<li>On peut modifier son mot de passe ainsi que ses informations personnelles et on y retrouve la liste de ses derniers messages postés</li>
										<li>Injection SQL gerée grâce aux requêtes préparées, XSS géré grâce aux fonctions d'échappement des données, Password protégé par un hash</li>
									</ul>
									
									<p class="semi-bold text-end">Juillet 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/App-Forum" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/app-forum.jpg" alt="photo projet Le-commerce" class="works-preview-left mt-4 img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class="bootstrap-icon">
									</li>
									<li>
										<img src="icones/skills/php-logo.svg" alt="icone php" class="dev-icon php-icon">
									</li>
									<li>
										<img src="icones/icon-sql.svg" alt="icone mysql" class=" dev-icon sql-icon">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon sass-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Fiches-Films ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center pt-5 pb-5 row-border-top show-more">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-1">
								<div class="description-fiches-films px-4 py-4 text-lg-start">
									<h4 class="almost-bold">App Fiches Films</h4>
									<p>Projet de formation, c'est un projet regroupant divers informations sur le Cinéma.</p>
									<p>Le projet contient la création, la suppresion et la modification d'un film. On peut également consulter les listes d'acteurs, de réalisateurs, de films et de genres. Il est réalisé en PHP POO avec une base de données crée via phpMyAdmin et une architecture MVC.</p>
									<p class="semi-bold text-end">Juin 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/App-Fiches-films" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/fiches-films.jpg" alt="photo projet fiches-films" class="works-preview-right mt-4 img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class="bootstrap-icon">
									</li>
									<li>
										<img src="icones/skills/php-logo.svg" alt="icone php" class="dev-icon php-icon">
									</li>
									<li>
										<img src="icones/icon-sql.svg" alt="icone mysql" class="dev-icon sql-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Gallery JS Vanilla ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border-top show-more">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-imc px-4 py-4 text-lg-start">
									<h4 class="almost-bold">Galerie Photo</h4>
									<p>Projet Personnel, c'est une galerie photo effectuée en JS Vanilla.</p>
									<p>Cette galerie comporte plusieurs fonctionalités, dans un premier temps il y a un filtre qui affiche les photos selon une catégorie sélectionée. Ensuite il y a une modal qui permet d'afficher la photo en grand quand on clique dessus. Enfin il y a un slider qui permet de naviguer entre les différentes photos.</p>
									<p class="semi-bold text-end">Mars 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Gallery" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/gallery.JPG" alt="pictures gallery javascript" class="works-preview-left img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Calculateur Tip ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-border-top pb-5 show-more">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-1">
								<div class="description-imc px-4 py-4">
									<h4 class="almost-bold">Calculateur de tip</h4>
									<p>Projet Personnel, c'est un calculateur de tip, c'est un projet du site Frontend Mentor.</p>
									<p>L'objectif était de réaliser un calculateur de tip (pourboire) en JavaScript. Il permet de calculer le montant d'un tip par personne ainsi que le montant total (facture + tip) par personne. Il y a des pourcentages de tips prédéfinis, on a également la possibilité de calculer un pourcentage au choix.</p>
									<p class="semi-bold text-end">Mars 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Tip-calculator-app-Front-end-Mentor" target="_blank">
										<img src="icones/github.svg" alt="icone github" class="me-2" title="Répertoire GitHub">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/calculateur-tip.JPG" alt="jeu du plus ou moins" class="works-preview-right img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon sass-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Landing page ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 row-border-top show-more">
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity order-1 order-lg-0">
								<div class="description-imc px-4 py-4 text-lg-start">
									<h4 class="almost-bold">Page d'accueil</h4>
									<p>Projet Personnel, c'est une page d'accueil que j'ai réalisé comme premier projet du site Frontend Mentor.</p>
									<p>L'objectif était de réaliser une page ayant des éléments à superposer et d'utiliser mes acquis en JavaScript pour créer les animations de la barre de navigation.</p>
									<p class="semi-bold text-end">Février 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Blogr-landing-page-Front-end-Mentor" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>	
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/landing-page.jpg" alt="jeu du plus ou moins" class="works-preview-left img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon sass-icon">
									</li>
									<li>
										<img src="icones/icon-bootstrap.svg" alt="icone bootstrap" class="bootstrap-icon">
									</li>
								</ul>
							</div>
						</div>
						<!------------ Jeu du plus ou moins ----------->		
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 show-more row-border-top">
							<div class="col-12 col-md-11 col-lg-6 project-image">
								<img src="images/plus-ou-moins.jpg" alt="jeu du plus ou moins" class="works-preview-right img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon">
									</li>
									<li>
										<img src="icones/javascript.svg" alt="icone javascript" class="dev-icon">
									</li>
									<li>
										<img src="icones/icon-sass.svg" alt="icone sass" class="dev-icon sass-icon">
									</li>
									
									<li>
										<img src="icones/icon-xd.svg" alt="icone adobe xd " class="graph-icon">
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-9 col-lg-5 scroll-in js-opacity">
								<div class="description-imc px-4 py-4">
									<h4 class="almost-bold">Jeu du Plus ou Moins</h4>
									<p>Projet Personnel, c'est un jeu en JavaScript, le but est de trouver un nombre entre 1 et 100 généré par l'ordinateur en dix tentatives. Le joueur marque 1 point pour chaque nombre qu'il a trouvé, si il échoue l'ordinateur marque 1 point.</p>
									<p>Il y a plusieurs parties du jeu qui sont dynamiques, l'objectif était de réaliser un projet pour travailler sur les aspects du DOM en JavaScript.</p>
									<p class="semi-bold text-end">Février 2022</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Plus-ou-moins" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>
						</div>
						<!------------ Calculateur d'IMC ----------->
						<div class="row justify-content-lg-between project scroll-in js-opacity justify-content-md-center row-pt pb-5 show-more row-border-top">
							<div class="col-12 col-md-11 col-lg-6 order-0 order-lg-1 project-image">
								<img src="images/calculateur-imc.jpg" alt="calculateur imc" class="works-preview-left img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
									<li>
										<img src="icones/html5.svg" alt="icone html 5" class="dev-icon">
									</li>
									<li>
										<img src="icones/css3.svg" alt="icone css 3" class="dev-icon">
									</li>
									<li>
										<img src="icones/skills/php-logo.svg" alt="icone php" class="dev-icon php-icon">
									</li>
									<li>
										<img src="icones/icon-xd.svg" alt="icone adobe xd " class="graph-icon">
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
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Calculateur-IMC" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>
						</div>
						<!------------ Univers-Running ------------>
						<div class="row pb-5 justify-content-lg-between project scroll-in js-opacity justify-content-md-center show-more row-border-top">
							<div class="col-12 col-md-11 col-lg-6 project-image">
										<img src="images/univers-running.png" alt="univers running picture" class="works-preview-right img-fluid">
								<h5 class="position-relative almost-bold mt-4 pt-2 mb-4">Technologies utilisées</h5>
								<ul class="list-unstyled text-center text-md-start d-flex gap-3 flex-wrap align-items-baseline justify-content-center justify-content-lg-start">
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
								<div class="description-univers-running px-4 py-4">
									<h4 class="almost-bold">Univers-Running</h4>
									<p>Voici mon premier projet, j'ai décidé de réaliser un site vitrine statique, une charte graphique ainsi que les maquettes du site.</p>
									<p>C'est un site sur l'univers de la course à pied, on y retrouve des conseils, des informations et des actualités.</p>
									<p class="semi-bold text-end">Novembre 2021</p>
								</div>
								<div class="git-link d-flex justify-content-end mt-2 gap-2">
									<a href="https://github.com/Dylan-Ay/Univers-Running" target="_blank">
										<img src="icones/github.svg" alt="icone github" title="Répertoire GitHub">
									</a>
								</div>
							</div>
						</div>
						<!------------ Bouton 'afficher plus' ----------->
						<div class="row">
							<div class="col-12 text-center">
								<button id="show-more-btn" class="btn-contact px-4 py-3">Anciens projets</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!------------  Contact ----------->
			<section id="contact">
				<div class="container py-5">
					<div class="row py-5 justify-content-center">
						<div class="col-11 col-sm-10 col-md-9 col-lg-12 scroll-in js-opacity">
							<h2 class="bold text-center">Contactez-moi</h2>
							<form method="post" name="contact-form" action="index.php">
								<div class="row mt-5 justify-content-center">
									<div class="col-lg-4 mb-4">
										<label for="name" class="form-label light-bold">Prénom et Nom<span class="red">*</span></label>
										<input type="text" name="name" class="form-control py-3" id="name" required>
									</div>
									<div class="col-lg-4">
										<label for="email" class="form-label light-bold">Adresse mail <span class="red">*</span></label>
										<input type="email" name="email" class="form-control py-3" id="email" required>
									<?php echo $errorMail ?? '';?>
									</div>
								</div>
								<div class="row mt-4 justify-content-center">	
									<div class="col-lg-4">			
										<label for="phone" class="form-label light-bold">Téléphone</label>
										<input dir="ltr" name="phone" type="number" id="phone" class="form-control py-3 no-arrow" >
										<?php echo $errorNumber ?? ''; ?>
									</div>
									<div class="col-lg-4"></div>
								</div>
								<div class="row mt-4 justify-content-center">
									<div class="col-lg-8">
										<label for="message" class="form-label light-bold">Message <span class="red">*</span></label>
										<textarea class="form-control" name="message" id="message" rows="7" required></textarea>	
										<input type="text" id="website" name="website"/>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class=" col-lg-3">
										<?php echo $error ?? ''; ?>
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
						<ul class="list-unstyled text-center text-md-start d-flex flex-wrap align-items-baseline justify-content-center">
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
						<p class="light-bold madeby mx-auto">© 2026 - Réalisé par Dylan Ayache - Tous droits réservés.</p>
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