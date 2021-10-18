<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Description">
	<meta name="keywords" content="">
	<link rel="shortcut icon" href="img/favicons/favicon.svg" type="image/svg+xml">
	<link rel="shortcut icon" href="img/favicons/favicon.webp" type="image/webp">
	<link rel="shortcut icon" href="img/favicons/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet"
      href="css/libs.min.css"> -->
	<link rel="stylesheet" href="css/style.min.css">
	<title>Compas Pro</title>
</head>


<body>
	<header class="header wrapper">
		<a href="/" class="header__logo">Компас ПРО</a>
		<nav class="nav">
			<ul class="nav__menu">
				<li class="nav__menu__item">
					<a href="#services">Услуги</a>
				</li>
				{{-- <li class="nav__menu__item">--}}
					{{-- <a href="#">Партнерство</a>--}}
					{{-- </li>--}}
				<li class="nav__menu__item">
					<a href="#training">Обучение</a>
				</li>
				{{-- <li class="nav__menu__item">--}}
					{{-- <a href="#">Написать письмо</a>--}}
					{{-- </li>--}}
			</ul>
		</nav>
		{{-- <a href="#" class="header__personal">Личный кабинет</a>--}}
		<a href="https://telegram.im/@compass_pro" class="header__messenger">
			<svg>
				<use xlink:href="/img/sprite.svg#messenger"></use>
			</svg>
		</a>
		<div class="menu-burger">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul class="nav__dropdown">
			<li class="nav__dropdown__item">
				<a href="#services">Услуги</a>
			</li>
			<hr>
			{{-- <li class="nav__dropdown__item">--}}
				{{-- <a href="#">Партнерство</a>--}}
				{{-- </li>--}}
			<li class="nav__dropdown__item">
				<a href="#training">Обучение</a>
			</li>
			{{-- <li class="nav__dropdown__item">--}}
				{{-- <a href="#">Написать письмо</a>--}}
				{{-- </li>--}}
		</ul>
	</header>