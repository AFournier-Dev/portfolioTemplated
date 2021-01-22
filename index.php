<!DOCTYPE HTML>

<html>

<head>
	<title>Alexandre Fournier</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<div id="page-wrapper">
		<div id="wrapper">
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

			<section class="panel spotlight medium right" id="first">
				<div class="content span-7">
					<h2 class="major">Compétences</h2>
					<h3>Hard Skills</h3>
					<p>HTML / CSS / JS / PHP / UML / MYSQL / ADOBE XD / FIGMA / ILLUSTRATOR / PHOTOSHOP / WORDPRESS/ GIT
						/ SYNPHONY</p>
					<h3>Soft Skills</h3>
					<p> Créativité, Vente, Négociation, Observateur, Orgnisation de veille, Innovation, Apprendre à
						apprendre, #thinkOutOfTheBox</p>

				</div>
				<div class="image filtered tinted" data-position="top left">
					<p><img src="images/pic02.jpg" alt="" /></p>
				</div>
			</section>

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
							<li class="fab fa-github"><a href="https://twitter.com/Alexand76214543">Mon GitHub</a></li>
							<li class="icon brands fa-twitter"><a href="https://github.com/AFournier-Dev">Mon Twitter</a></li>
						
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>