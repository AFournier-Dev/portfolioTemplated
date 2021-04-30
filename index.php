<!DOCTYPE HTML>

<html>

<head>
	<title>Alexandre Fournier</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" href="images/mesquare.png" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Panel (Banner) -->
			<section class="panel banner right">
				<div class="content color0 span-3-75">
					<h1 class="major"><strong>Alexandre Fournier</strong></h1>
					<p>Aujourd'hui en reconversion comme développeur
						web avec une appétence pour le backend. Je
						développe mes savoirs faires : langages,
						frameworks, architectures, méthodologies et
						algorithmies.
						Je suis riche de formations et d’expériences
						professionnelles. La vente, le prototypage, le
						lean, la fabrication additive, la photographie,
						son quelques-uns de mes savoirs faires.
					</p>
					<ul class="actions">
						<li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a>
						</li>
					</ul>
				</div>
				<div class="image filtered span-1-75" data-position="25% 25%">
					<img src="images/pic01.jpg" alt="" />
				</div>
			</section>

			<!-- Panel (Spotlight) -->
			<section class="panel spotlight medium right" id="first">
				<div class="content span-7">
					<h2 class="major">Compétences</h2>
					<h3>Hard Skills</h3>
					<p>HTML / CSS / JS / PHP / UML / MYSQL / ADOBE XD / FIGMA / ILLUSTRATOR / PHOTOSHOP / WORDPRESS/ GIT
						/ Bit BUCKET / SYNPHONY / LIQUID / SHOPIFY</p>
					<h3>Soft Skills</h3>
					<p> Créativité, Vente, Négociation, Observateur, Orgnisation de veille, Innovation, Apprendre à
						apprendre, #thinkOutOfTheBox</p>

				</div>
				<div class="image filtered tinted" data-position="top left">
					<p><img src="images/pic02.jpg" alt="" /></p>
				</div>
			</section>

			<section class="panel color1">
				<div class="intro joined">
					<h2 class="major">Projets</h2>
					<p>Ici vous trouverez des liens vers mes projets</p>
				</div>
				<div class="inner">
					<a href="https://alexandref544.promo-45.codeur.online/MaquetteItalianFood/"><span class="fab fa-buromobelexperte fa-2x"></a>
					<p>Integration de maquette</p>
					<a href="https://alexandref544.promo-45.codeur.online/IntegMaquetteMark/"><span class="fas fa-atom fa-2x"></a>
					<p>Un autre exemple d'intégration de maquette</p>
					<a href="https://alexandref544.promo-45.codeur.online/cartedevoeux/"><span class="fas fa-envelope fa-2x"></a>
					<p>Un projet pour les voeux de 2021. Au programme SVG, animation SVG, responsive ...</p>
				</div>
			</section>


			<section class="panel color1">
				<div class="intro joined">
					<h2 class="major">La suite des projets</h2>
					<p>Ici vous trouverez des liens vers mes projets</p>
				</div>
				<div class="inner">
					<a href="https://alexandref544.promo-45.codeur.online/multiplication/"><span class="fas fa-calculator fa-2x"></a>
					<p>Besoin de réviser vos tables de multiplication ? Votre enfant en a marre de réciter ? Plusieurs méthodes pour réviser</p>
					<a href="https://alexandref544.promo-45.codeur.online/Bomberman/"><span class="fas fa-gamepad fa-2x"></a>
					<p>Un jeux à la "bomberman" en mode Halloween. Une citrouille contre des chauffes-souris. Attention les bonbons sont explosif.</p>
					<!--	<a href="images/snippetShopify.jpg" target="_blank"><span class="fas fa-shopping-cart fa-2x"></a>
					<p>Pour shopify : Snippet, template, themes ... ici un exemple de snippet fonctionnant dans shopify</p> -->
					<a href="https://metehome.promo-45.codeur.online/"><span class="fas fa-cloud-sun-rain fa-2x"></a>
					<p>Application permettant de donner la météo [Symphone, Vue.js, API]</p>
					<i></i>
				</div>
			</section>



			<!-- Panel -->
			<section class="panel color4-alt">
				<div class="intro color4">
					<h2 class="major">Contact</h2>
					<h3>Une question <br> une demande ?</h3> <br>
					<p> Vous pouvez m'envoyer un mail directement<br><br> Ou sur mes réseaux sociaux <br><br>À vous de choisir</p>
				</div>
				<div class="inner columns divided">
					<form method="POST">
						<div class="span-3-25">
							<form method="post" action="#">
								<div class="fields">
									<div class="field half">
										<label for="name">Nom</label>
										<input type="text" name="name" id="name" placeholder="Merci de m'indiquer votre nom" required />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" placeholder="Merci de m'indiquer votre mail" required />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4" placeholder="Votre message" required></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Envoyer" class="button primary" /></li>
								</ul>
							</form>

							<?php
							if (!empty($_POST)) {
								$email = htmlspecialchars($_POST['mail']);
								$headers[] = $_POST['name'] . '<' . $_POST['email'] . '>';
								$message = htmlspecialchars(($_POST['message']));

								mail('alexandre.fournier@yahoo.fr', 'Contact portfolio', $message,  implode("\r\n", $headers));
							}
							?>
						</div>
					</form>

					<div class="span-1-5">
						<ul class="contact-icons color1">
							<li class="fab fa-linkedin-in"></i><a href="https://www.linkedin.com/in/afournier-dev/">Mon LinkedIn</a></li>
							<li class="fab fa-github"><a href="https://github.com/AFournier-Dev">Mon GitHub</a></li>
							<li class="fab fa-twitter-square"><a href="https://twitter.com/Alexand76214543">Mon Twitter</a></li>
							<li class="icon far fa-file"><a href="images/cv.pdf" target="_blank">Mon CV</a></li>
						</ul>
					</div>
				</div>
			</section>


		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>