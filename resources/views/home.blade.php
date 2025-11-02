<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>L$S Visual</title>

	<link rel="stylesheet" href="/styles/main.css">

	<script src="/vendor/gsap/gsap.min.js" defer></script>
	<script src="/vendor/gsap/ScrollTrigger.min.js" defer></script>
	<script src="/vendor/lenis/lenis.min.js" defer></script>

	<script src="/scripts/app.js" defer></script>
</head>

<body>

	<div class="pattern"></div>

	<div class="gradient-bg">
		<div class="gradients-contaner">
			<div class="g1"></div>
			<div class="g2"></div>
			<div class="g3"></div>
			<div class="interactive"></div>
		</div>
	</div>

	<header class="header-top">
		<div class="top-line">

			<div class="top-line__left">
				<a href="#" class="logo">
					<img src="/assets/images/logo.png" alt="Alt">
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
							<!-- О студии -->
							<section class="menu-pro__card">
								<h3 class="menu-pro__title">О студии</h3>
								<p class="menu-pro__text">
									L&amp;R Visuals — студия стоковой и рекламной съемки. Делаем фото и видео под ключ: от идеи до
									результата.
								</p>
							</section>

							<!-- Навигация сайта -->
							<section class="menu-pro__card">
								<h3 class="menu-pro__title">Навигация</h3>
								<div class="menu-pro__grid">
									<a href="{{ route('home') }}">Главная</a>
									<a href="/services">Услуги</a>
									<a href="/partners">Партнеры</a>
									<a href="/contacts">Контакты</a>
									<a href="/portfolio">Портфолио</a>
									<a href="/blog">Блоги</a>
								</div>
							</section>

							<!-- Наши направления (аккордеон) -->
							<section class="menu-pro__card">
								<button class="menu-pro__accordion" type="button" aria-expanded="false" aria-controls="menu-pro-dirs">
									Наши направления
									<svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
										<path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" />
									</svg>
								</button>
								<div id="menu-pro-dirs" class="menu-pro__panel" hidden>
									<a href="/services/ads-photo">Рекламная съемка</a>
									<a href="/services/brand-video">Видео для брендов</a>
									<a href="/services/social-content">Контент для соцсетей</a>
									<a href="/services/stock">Стоковые фото</a>
								</div>
							</section>

							<!-- CTA -->
							<section class="menu-pro__cta">
								<a class="menu-pro__btn" href="/brief">Оставить заявку</a>
							</section>

							<!-- Контакты -->
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

	<div class="container">

		<section class="accordion">

			<div class="accordion__col activ" data-parallax-wrapper>
				<div class="accordion__bg">
					<img src="/public/images/ready/Наши услуги.jpg" alt="Alt" data-parallax-target>
				</div>
				<div class="accordion__start">Наши услуги</div>
				<div class="accordion__content">
					<div class="accordion__header">
						<h2>Наши услуги</h2>
					</div>
					<div class="accordion__description">
						<ul>
							<li>Съёмка под ключ</li>
							<li>Рекламные ролики для соцсетей</li>
							<li>Стоковые фото для брендов</li>
							<li>Индивидуальные проекты</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="accordion__col" data-parallax-wrapper>
				<div class="accordion__bg">
					<img src="/public/images/ready/Портфолио.jpg" alt="Alt" data-parallax-target>
				</div>
				<div class="accordion__start">Портфолио</div>
				<div class="accordion__content">
					<div class="accordion__header">
						<h2>Портфолио</h2>
					</div>
					<div class="accordion__description">
						Наши лучшие работы: рекламные съёмки, стоковые проекты и индивидуальные заказы. Здесь можно увидеть стиль,
						атмосферу и качество, с которыми мы подходим к каждому кадру.
					</div>
				</div>
			</div>

			<div class="accordion__col" data-parallax-wrapper>
				<div class="accordion__bg">
					<img src="/public/images/ready/Почему мы.jpg" alt="Alt" data-parallax-target>
				</div>
				<div class="accordion__start">Почему мы</div>
				<div class="accordion__content">
					<div class="accordion__header">
						<h2>Почему мы?</h2>
					</div>
					<div class="accordion__description">
						Мы — студия стоковой и рекламной съёмки. Делаем фото и видео под ключ: от идеи до готового контента для
						бизнеса. Опыт на международных стоках помогает нам создавать кадры, которые работают и продают.
					</div>
				</div>
			</div>

			<div class="accordion__col" data-parallax-wrapper>
				<div class="accordion__bg">
					<img src="/public/images/ready/Блоги.jpg" alt="Alt" data-parallax-target>
				</div>
				<div class="accordion__start">Блоги</div>
				<div class="accordion__content">
					<div class="accordion__header">
						<h2>Блоги</h2>
					</div>
					<div class="accordion__description">
						Делимся опытом и закулисьем: как устроена стоковая индустрия, как строится визуальный контент для брендов и
						как на этом можно зарабатывать. Прямо, понятно и по делу.
					</div>
				</div>
			</div>

		</section>

		<section class="gallery">

			<div class="section-head">
				<h2>Блоги</h2>
				<div class="section-head__right">
					<a href="#" class="btn-secondary">
						<span data-text="all galery">Категории</span>
					</a>
				</div>
			</div>

			<div class="gallery__wrapper">

				<div class="gallery__item">
					<a href="#">
						<div class="gallery__preview">
							<img src="/public/images/ready/Про заработок.jpg" alt="alt">
							<div class="gallery__caption"><span>Про заработок</span>
							</div>
						</div>
					</a>
				</div>

				<div class="gallery__item">
					<a href="#">
						<div class="gallery__preview">
							<img src="/public/images/ready/Как зар на стоках.jpg" alt="alt">
							<div class="gallery__caption"><span>Как зарабатывать на стоках</span>
							</div>
						</div>
					</a>
				</div>

				<div class="gallery__item">
					<a href="#">
						<div class="gallery__preview">
							<img src="/public/images/ready/Ошібки нов.jpg" alt="alt">
							<div class="gallery__caption"><span>Ошибки новичков</span>
							</div>
						</div>
					</a>
				</div>

			</div>

			<!-- Кнопка доната / поддержки -->
<div class="support-block">
	<a class="support-button" href="#">
		Поддержать проект
	</a>
</div>

<!-- ФУТЕР -->
<footer class="site-footer">

	<div class="site-footer__inner">
		<!-- Левая колонка -->
		<div class="footer-col footer-col--brand">
			<div class="footer-logo">
				<img src="/assets/images/logo.png" alt="L&R Visuals">
			</div>
		</div>

		<!-- Средняя колонка: навигация -->
		<nav class="footer-col footer-col--nav" aria-label="Навигация по сайту">
			<ul class="footer-nav">
				<li><a href="{{ route('home') }}">Главная</a></li>
				<li><a href="services.html">Услуги</a></li>
				<li><a href="partners.html">Партнеры</a></li>
				<li><a href="contacts.html">Контакты</a></li>
				<li><a href="{{ route('landing') }}">Заставка</a></li>
			</ul>
		</nav>

		<!-- Правая колонка: соцсети -->
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

		</section>

	</div>

</body>

</html>