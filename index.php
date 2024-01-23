<?php
	// Load the JSON data file and decode the json into an object.
	$data = json_decode(file_get_contents('assets/js/data.json'));
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content='width=device-width, initial-scale=1' name='viewport'/>
		<title>Ray Beliveau / Portfolio</title>

		<link rel="stylesheet" href="assets/css/style.css"/>
	</head>
	<body>
		<!-- Page Header -->
		<header>
			<h1>Ray Beliveau</h1>
			<nav class="head__nav">
				<a class="link" href="#about_me">About Me</a>
				<a class="link" href="#work">Work</a>
				<a class="link" href="#contact_me">Contact Me</a>
			</nav>
		</header>

		<!-- Page Content -->
		<main class="content">
			<!-- About Me -->
			<section id="about_me" class="section dark">
				<h2>About Me</h2>
				<article>
					<?php foreach ($data->about as $paragraph): ?>
						<p><?= $paragraph ?></p>
					<?php endforeach; ?>
				</article>
			</section>

			<!-- Work -->
			<section id="work">
				<h2>Work</h2>
				<ul>
					<?php foreach ($data->work as $item): ?>
						<li style="background-image: url('<?= $item->image ?>');">
							<a href="<?= $item->link ?>">
								<div>
									<h3><?= $item->title ?></h3>
									<p><?= $item->skills ?></p>
								</div>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</section>

			<!-- Contact -->
			<section id="contact_me" class="section dark">
				<h2>Contact Me</h2>

				<menu>
					<?php foreach ($data->contact as $item): ?>
						<li class="<?= $item->class ?>">
							<img src="<?= $item->icon ?>" alt="<?= $item->alt ?>"/>
							<a class="link" href="<?= $item->link ?>"><?= $item->content ?></a></li>
					<?php endforeach; ?>
				</menu>
			</section>
		</main>

		<!-- Page Footer -->
		<footer>Created and designed by Ray Beliveau &#0169; 2024.<br/>Headshot by: <a href="https://discovery.photos">Discovery
				Photos (https://discovery.photos)</a><br/> Icons from Icons8. All other pictures from Pexels.
		</footer>
	</body>
</html>