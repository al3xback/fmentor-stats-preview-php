<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>
		Frontend Mentor | Stats Preview Card Component | PHP
	</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - Stats preview card component solution." />
	<meta name="keywords" content="Frontend Mentor, Stats preview card component" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend+Deca&display=swap" rel="stylesheet" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', 'Stats preview card component');
	define('CARD', array(
		'title' => 'Get insights that help your business grow.',
		'description' => 'Discover the benefits of data analytics and make better decisions regarding revenue, customer experience, and overall efficiency.',
		'image' => array('src' => 'images/meeting.jpg', 'alt' => 'People at a meeting'),
		'statuses' => array(
			'Companies' => '10K+',
			'Templates' => '314',
			'Queries' => '12M+'
		)
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<article class="card">
				<div class="card__image">
					<div class="card__image-inner">
						<img src="<?php echo CARD['image']['src']; ?>" alt="<?php echo CARD['image']['alt']; ?>" />
					</div>
				</div>
				<div class="card__content">
					<h2 class="card__title"><?php echo CARD['title']; ?></h2>
					<p class="card__desc"><?php echo CARD['description']; ?></p>
					<ul class="card__stats-list">
						<?php foreach (CARD['statuses'] as $label => $amount) : ?>
							<li class="card__stats-list-item">
								<span class="num"><?php echo $amount; ?></span>
								<span class="label"><?php echo $label; ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</article>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
