<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>@yield('title', 'L&R Visuals')</title>

	{{-- Глобальные стили, которые нужны везде на сайте (главная, футер, бургер и т.п.) --}}
	<link rel="stylesheet" href="/styles/main.css">
	<link rel="stylesheet" href="/styles/menu-pro.css">
	<link rel="stylesheet" href="/styles/variables.css">
	<link rel="stylesheet" href="/styles/fonts.css">
	<link rel="stylesheet" href="/styles/animations.css">

	{{-- Вендорные либы для плавного скролла и т.п. --}}
	<script src="/vendor/gsap/gsap.min.js" defer></script>
	<script src="/vendor/gsap/ScrollTrigger.min.js" defer></script>
	<script src="/vendor/lenis/lenis.min.js" defer></script>

	{{-- Твой основной js --}}
	<script src="/scripts/app.js" defer></script>

	{{-- Если какая-то страница хочет подключить свои доп. css/js — она может вставить их через эту секцию --}}
	@stack('head-extra')
</head>

<body>

	{{-- Градиентный фон и паттерн как у тебя на главной --}}
	<div class="pattern"></div>
	<div class="gradient-bg">
		<div class="gradients-contaner">
			<div class="g1"></div>
			<div class="g2"></div>
			<div class="g3"></div>
			<div class="interactive"></div>
		</div>
	</div>

	{{-- ШАПКА (header-top) --}}
	<header class="header-top">
		<div class="top-line">

			<div class="top-line__left">
				<a href="{{ route('home') }}" class="logo">
					<img src="/assets/images/logo.png" alt="L&R Visuals">
				</a>
			</div>

			<div class="top-line__center">
				<nav class="top-mnu">
					<ul>
						<li><a href="{{ route('home') }}" data-text="Главная">Главная</a></li>
						<li><a href="#" data-text="Услуги">Услуги</a></li>
						<li><a href="#" data-text="Партнёры">Партнёры</a></li>
						<li><a href="#" data-text="Контакты">Контакты</a></li>
					</ul>
				</nav>
			</div>

			<div class="top-line__right">
				<div class="mnu-button">
					<button class="mnu-button__menu">
						<span></span>
						<span></span>
					</button>
				</div>

				<div class="main-menu-background"></div>

				<div class="main-menu">
					<nav class="main-menu__inner">

						<nav class="menu-pro">
							<section class="menu-pro__card">
								<h3 class="menu-pro__title">О студии</h3>
								<p class="menu-pro__text">
									L&amp;R Visuals — студия стоковой и рекламной съемки. Делаем фото и видео под ключ: от идеи до результата.
								</p>
							</section>

							<section class="menu-pro__card">
								<h3 class="menu-pro__title">Навигация</h3>
								<div class="menu-pro__grid">
									<a href="{{ route('landing') }}">Заставка</a>
									<a href="{{ route('home') }}">Главная</a>
									<a href="#">Услуги</a>
									<a href="#">Партнеры</a>
									<a href="#">Контакты</a>
									<a href="#">Портфолио</a>
									<a href="#">Блоги</a>
								</div>
							</section>

							<section class="menu-pro__card">
								<button class="menu-pro__accordion" type="button" aria-expanded="false" aria-controls="menu-pro-dirs">
									Наши направления
									<svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
										<path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" />
									</svg>
								</button>
								<div id="menu-pro-dirs" class="menu-pro__panel" hidden>
									<a href="#">Рекламная съемка</a>
									<a href="#">Видео для брендов</a>
									<a href="#">Контент для соцсетей</a>
									<a href="#">Стоковые фото</a>
								</div>
							</section>

							<section class="menu-pro__cta">
								<a class="menu-pro__btn" href="{{ route('brief') }}">Оставить заявку</a>
							</section>

							<section class="menu-pro__card">
								<h3 class="menu-pro__title">Быстрая связь</h3>
								<ul class="menu-pro__contacts">
									<li><a href="https://t.me/smska" target="_blank" rel="noopener">Telegram</a></li>
									<li><a href="mailto:hello@lrvisuals.com">hello@lrvisuals.com</a></li>
									<li><a href="https://instagram.com/" target="_blank" rel="noopener">Instagram</a></li>
								</ul>
							</section>
						</nav>

					</nav>
				</div>
			</div>

		</div>
	</header>

	{{-- Основной контент страницы --}}
	<div class="container">
		@yield('content')
	</div>

	{{-- ФУТЕР --}}
	<footer class="site-footer">

		<div class="site-footer__inner">

			<div class="footer-col footer-col--brand">
				<div class="footer-logo">
					<img src="/assets/images/logo.png" alt="L&R Visuals">
				</div>
			</div>

			<nav class="footer-col footer-col--nav" aria-label="Навигация по сайту">
				<ul class="footer-nav">
					<li><a href="{{ route('home') }}">Главная</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Партнеры</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="{{ route('landing') }}">Заставка</a></li>
				</ul>
			</nav>

			<div class="footer-col footer-col--social">
				<div class="footer-social-title">Мы на связи</div>
				<ul class="footer-social">
					<li>
						<a href="https://t.me/smska" target="_blank" rel="noopener">
							<span class="footer-social__icon footer-social__icon--tg"></span>
							Telegram
						</a>
					</li>
					<li>
						<a href="https://instagram.com/" target="_blank" rel="noopener">
							<span class="footer-social__icon footer-social__icon--ig"></span>
							Instagram
						</a>
					</li>
					<li>
						<a href="mailto:hello@lrvisuals.com">
							<span class="footer-social__icon footer-social__icon--mail"></span>
							Email
						</a>
					</li>
				</ul>
			</div>

		</div>

		<div class="site-footer__legal">
			© L&R Visuals Studio, 2025. Все права защищены.
		</div>

	</footer>

	@stack('body-extra')
</body>
</html>
