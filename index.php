<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("asset/meta.php"); ?>
	<head><title>Toshokan - Accueil</title></head>
</head>
<body class="demo-1">
<?php include("header.php") ?>
	<main>
		<nav class="menu">
			<div class="menu__item">
				<a class="menu__item-link" href="manga_s.php">Manga</a>
				<img class="menu__item-img" src="asset/img/manga.jpg" alt="lien vers manga"/>
				<div class="marquee">
					<div class="marquee__inner" aria-hidden="true">
						<span>Manga</span>
						<span>Manga</span>
						<span>Manga</span>
						<span>Manga</span>
					</div>
				</div>
			</div>
			<div class="menu__item">
				<a class="menu__item-link" href="anime_s.php">Anime</a>
				<img class="menu__item-img" src="asset/img/anime.jpg" alt="lien vers anime"/>
				<div class="marquee">
					<div class="marquee__inner" aria-hidden="true">
						<span>Anime</span>
						<span>Anime</span>
						<span>Anime</span>
						<span>Anime</span>
					</div>
				</div>
			</div>
			<div class="menu__item">
				<a class="menu__item-link" href="film_s.php">Film</a>
				<img class="menu__item-img" src="asset/img/film.jpg" alt="lien vers film"/>
				<div class="marquee">
					<div class="marquee__inner" aria-hidden="true">
						<span>Film</span>
						<span>Film</span>
						<span>Film</span>
						<span>Film</span>
					</div>
				</div>
			</div>
		</nav>
	</main>
<?php include("asset/script.php"); ?>
</body>
</html>