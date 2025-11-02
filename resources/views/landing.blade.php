<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>L&R Visuals</title>

  <!-- стили ровно как в твоей версии -->
  <link rel="stylesheet" href="/landing/css/main.css">

  <!-- наш скрипт параллакса -->
  <script src="/landing/js/app.js" defer></script>

  <!-- дождь, если он у тебя уже подключен как libs/rain.js -->
  <script src="/libs/rain.js" defer></script>
</head>
<body>


  <section class="layers">
    <div class="layers__container">

      <div class="layers__item layer-1" style="background-image: url(/landing/img/layer-1.jpg);"></div>
      <div class="layers__item layer-2" style="background-image: url(/landing/img/layer-2.png);"></div>

      <div class="layers__item layer-3">
        <div class="hero-content">
          <h1>L&amp;R Visuals</h1>

          <div class="hero-content__p">
            Студия стоковой и рекламной съёмки. Мы делаем визуал, который продаёт.
          </div>

          <button class="button-start" id="enterSiteBtn">
            Войти на сайт
          </button>
        </div>
      </div>

      <div class="layers__item layer-4">
        <canvas class="rain"></canvas>
      </div>

			<div class="layers__item layer-logo">
      <div class="logo" style="background-image: url(/landing/img/logo.png);"></div>
    </div>

      <div class="layers__item layer-5" style="background-image: url(/landing/img/layer-5.png);"></div>
      <div class="layers__item layer-6" style="background-image: url(/landing/img/layer-6.png);"></div>

    </div>
  </section>

  <script>
    // переход на основную страницу
    document.getElementById('enterSiteBtn').addEventListener('click', () => {
      window.location.href = '/home'; // здесь путь на твою текущую главную
    });
  </script>

</body>
</html>
