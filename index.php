<?php 
require_once 'functions.php'; ?>
<!-- index.html -->
<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Кодировка страницы -->
  <meta charset="UTF-8" />
  <!-- Адаптивность для мобильных устройств -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Заголовок страницы -->
  <title>Услуги грузчиков в Москве</title>
  <!-- Подключение внешнего CSS-файла -->
  <link rel="stylesheet" href="стили/styles.css" />
</head>

<body>

<!-- Верхняя панель с контактами, логотипом и меню -->
<div class="top-bar container px-2 d-flex flex-nowrap justify-content-between align-items-center py-2">

  <!-- Левая часть верхней панели -->
  <div class="d-flex align-items-center gap-2 flex-nowrap">

    <!-- Иконка "бургер-меню" для мобильной версии -->
    <div class="menu-icon" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
      <span>Меню</span>
    </div>

    <!-- Дополнительные ссылки, отображаются только на больших экранах -->
    <div class="extra-links d-none d-lg-flex gap-2">
      <a href="#" class="text-decoration-none text-dark">О компании</a>
      <a href="#" class="text-decoration-none text-dark">Вакансии</a>
      <a href="#" class="text-decoration-none text-dark">Новости</a>
      <a href="#" class="text-decoration-none text-dark">Контакты</a>
    </div>

    <!-- Логотип для мобильной версии (по умолчанию скрыт) -->
    <div class="logo mobile-logo d-none d-lg-none align-items-center gap-2 logo-3d">
      <img src="фото/logo.png" alt="Логотип" style="height: 30px;">
      <div>Стандарт<br>Экспресс</div>
    </div>
  </div>

  <!-- Правая часть верхней панели -->
  <div class="d-flex flex-nowrap align-items-center gap-2">

    <!-- Контактный email и информация -->
    <div class="email-phone text-nowrap">
      <div class="extra d-none d-lg-block"><strong>info@standart-express.ru</strong></div>
      <div class="text-muted d-lg-block">Выполняем заказы 24/7</div>
    </div>

    <!-- Телефоны компании -->
    <div class="email-phone text-nowrap">
      <div><strong>8 (800) 700-51-53</strong></div>
      <div class="extra d-none d-lg-block"><strong>+7 (965) 226-57-90</strong></div>
    </div>

    <!-- Иконки мессенджеров (появляются только на больших экранах) -->
    <div class="icon-buttons d-none d-lg-flex align-items-center gap-2 me-2">
      <div class="circle-icon purple-hover">
        <img src="фото/вайбер.png" alt="Иконка 1" class="icon-img">
      </div>
      <div class="circle-icon blue-hover">
        <img src="фото/тг.png" alt="Иконка 2" class="icon-img">
      </div>
    </div>

    <!-- Кнопка "Перезвоните мне" — только на очень больших экранах -->
    <div class="callback d-none d-xl-block text-nowrap">Перезвоните мне</div>

    <!-- Выпадающее меню выбора города -->
    <div class="dropdown">
      <button class="btn btn-link dropdown-toggle text-dark p-0" type="button" id="cityDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <span id="currentCity">Москва</span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="cityDropdown">
        <li><a class="dropdown-item" href="#" onclick="changeCity('Москва')">Москва</a></li>
        <li><a class="dropdown-item" href="#" onclick="changeCity('Новосибирск')">Новосибирск</a></li>
        <li><a class="dropdown-item" href="#" onclick="changeCity('Казань')">Казань</a></li>
      </ul>
    </div>
  </div>
</div>

<!-- Затемнение экрана при открытом мобильном меню -->
<div class="menu-overlay" id="menuOverlay" onclick="toggleMenu()"></div>

<!-- Мобильное меню -->
<div class="mobile-menu" id="mobileMenu">
  <!-- Кнопка закрытия меню -->
  <div class="mobile-menu-close" onclick="toggleMenu()">&times;</div>

  <!-- Ссылки мобильного меню -->
  <a class="toggle-submenu" onclick="toggleSubmenu(event)">Грузчики</a>
  <div class="submenu">
    <a href="#">Подъем/спуск на этаж</a>
    <a href="#">Стоимость грузчиков</a>
    <a href="#">Вывоз мусора/материалов</a>
    <a href="#">Грузчики на производство</a>
    <a href="#">Грузчики на разовую работу</a>
    <a href="#">Грузчики на погрузочно-разгрузочные работы</a>
  </div>
  <a href="#">Переезды</a>
  <a href="#">Такелажные работы</a>
  <a href="#">Грузоперевозки</a>
  <a href="#">Разнорабочие</a>
  <a href="#">Юридическим лицам</a>
  <hr>
  <a href="#">О компании</a>
  <a href="#">Вакансии</a>
  <a href="#">Новости</a>
  <a href="#">Контакты</a>
</div>

<!-- Навигационное меню в верхней части сайта (отображается только на больших экранах) -->

<?php include 'header.php'; ?>

<!-- _________________________________________________- -->

<!-- Секция героя: главный баннер с заголовком, описанием, кнопкой и изображением -->
<section class="hero container my-5 d-flex flex-row align-items-center justify-content-between">
  <!-- Левая часть: текст -->
  <div class="hero-text mb-4 mb-lg-0">
    <h1>
      <strong>Услуги грузчиков<br><span>в Москве</span></strong>
      <span class="price-tag">от 249₽/час</span>
    </h1>
    <p>Ваш заказ будет курировать персональный менеджер</p>
    <button class="btn btn-orange-gradient">Рассчитать стоимость</button>
  </div>

  <!-- Правая часть: изображение -->
  <div class="hero-image">
    <img src="фото/Стандарт_Экспресс.png" alt="Грузчик с коробкой" class="img-fluid">
  </div>
</section>

<!-- _________________________________________________- -->

<!-- Блок с преимуществами компании -->
<section class="benefits container my-5 d-flex flex-wrap justify-content-around text-center">
  <!-- Преимущество 1 -->
  <div class="benefit-item col-12 col-md-3 mb-4">
    <div class="hero-image icon-3d">
      <img src="фото/Иконка_1.png" alt="Иконка" class="img-fluid">
    </div>
    <p><strong>Скидка 10%</strong><br>на первый заказ</p>
  </div>

  <!-- Преимущество 2 -->
  <div class="benefit-item col-12 col-md-3 mb-4">
    <div class="hero-image icon-3d">
      <img src="фото/Иконка_2.png" alt="Иконка" class="img-fluid">
    </div>
    <p><strong>Будем у вас</strong><br>через 60 минут</p>
  </div>

  <!-- Преимущество 3 -->
  <div class="benefit-item col-12 col-md-3 mb-4">
    <div class="hero-image icon-3d">
      <img src="фото/Иконка_3.png" alt="Иконка" class="img-fluid">
    </div>
    <p><strong>Более 300</strong><br>постоянных клиентов</p>
  </div>
</section>

<!-- _________________________________________________- -->

<!-- Секция с видео: короткий фон и всплывающее видео -->
<section class="video-section container my-5">
  <!-- Обёртка для фона и кнопки проигрывания -->
  <div class="video-wrapper position-relative" onclick="openPopup()">
    <!-- Фоновое видео (автовоспроизведение, без звука, по кругу) -->
    <video id="background-video" src="видео/gruzchiki.mp4" autoplay muted loop playsinline class="w-100 rounded"></video>

    <!-- Кнопка воспроизведения (визуально по центру видео) -->
    <div class="play-button position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-50 rounded-circle p-3 text-white fs-2"></div>
  </div>

  <!-- Текст под видео -->
  <div class="video-text mt-4">
    <h2 class="video-heading">
      По вашей заявке услуга «Грузчики»<br>
      будет выполнена точно в срок и по цене,<br>
      которую вы можете рассчитать на нашем сайте.
    </h2>
    <p>Работаем круглосуточно! Выезжаем на объекты в Москве.</p>
  </div>
</section>

<!-- Всплывающее модальное окно с подробным видео -->
<div id="video-popup" class="video-popup position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-none justify-content-center align-items-center">
  <div class="video-popup-content position-relative w-75">
    <!-- Кнопка закрытия модального окна -->
    <span class="video-close position-absolute top-0 end-0 text-white fs-3 me-2 mt-2" onclick="closePopup()">×</span>
    
    <!-- Воспроизводимое видео -->
    <video id="popup-video" src="видео/Стандарт_Экспресс.mp4" controls autoplay muted class="w-100"></video>
  </div>
</div>

<!-- _________________________________________________- -->
<!-- Секция популярных услуг (Динамическая из БД + Корзина) -->
<?php
require_once 'db_connect.php';

// --- ПАГИНАЦИЯ ---
$limit = 4; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// --- ПОИСК ---
$search = isset($_GET['search']) ? $_GET['search'] : '';

// --- СОРТИРОВКА ---
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$allowed_sort = ['price ASC', 'price DESC', 'title ASC', 'id'];
if (!in_array($sort, $allowed_sort)) $sort = 'id';

// Формируем SQL запрос
$sql = "SELECT * FROM services WHERE title LIKE :search ORDER BY $sort LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$services = $stmt->fetchAll();

// Считаем общее кол-во для пагинации
$total = $pdo->prepare("SELECT COUNT(*) FROM services WHERE title LIKE ?");
$total->execute(["%$search%"]);
$total_rows = $total->fetchColumn();
$total_pages = ceil($total_rows / $limit);
?>

<section id="catalog" class="services-list container my-5">
  <h2 class="mb-4"><strong>Популярные услуги с ценами</strong></h2>

  <!-- Форма Поиска и Сортировки -->
  <div class="bg-light p-3 rounded mb-4 shadow-sm">
      <form class="row g-2" method="GET" action="index.php#catalog">
        <div class="col-md-6">
            <input type="text" name="search" class="form-control" placeholder="Поиск услуги..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div class="col-md-4">
            <select name="sort" class="form-select">
                <option value="id" <?= $sort == 'id' ? 'selected' : '' ?>>По умолчанию</option>
                <option value="price ASC" <?= $sort == 'price ASC' ? 'selected' : '' ?>>Сначала дешевые</option>
                <option value="price DESC" <?= $sort == 'price DESC' ? 'selected' : '' ?>>Сначала дорогие</option>
                <option value="title ASC" <?= $sort == 'title ASC' ? 'selected' : '' ?>>По алфавиту</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-dark w-100">Найти</button>
        </div>
      </form>
  </div>

  <!-- Вывод данных из БД -->
  <div class="service-items">
    <?php if (count($services) > 0): ?>
        <?php foreach ($services as $item): ?>
        <div class="service-item d-flex justify-content-between align-items-center p-3 border rounded mb-2 bg-white shadow-sm">
          <span>
              <strong><?= htmlspecialchars($item['title']) ?></strong> 
              <br><small class="text-muted">Категория: <?= htmlspecialchars($item['category']) ?></small>
          </span>
          <div class="d-flex align-items-center gap-3">
            <span class="price fw-bold text-dark">от <?= $item['price'] ?>₽</span>
            
            <!-- ФОРМА ДОБАВЛЕНИЯ В КОРЗИНУ -->
            <form action="add_to_cart.php" method="POST" style="margin:0;">
                <input type="hidden" name="service_id" value="<?= $item['id'] ?>">
                <input type="hidden" name="service_name" value="<?= htmlspecialchars($item['title']) ?>">
                <input type="hidden" name="service_price" value="<?= $item['price'] ?>">
                <button type="submit" class="btn-orange-gradient shadow-sm">Заказать</button>
            </form>
            
          </div>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center text-muted">По вашему запросу ничего не найдено.</p>
    <?php endif; ?>
  </div>

  <!-- Пагинация -->
  <?php if ($total_pages > 1): ?>
  <nav class="mt-4">
    <ul class="pagination justify-content-center">
      <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <li class="page-item <?= $page == $i ? 'active' : '' ?>">
            <a class="page-link" href="?page=<?= $i ?>&search=<?= urlencode($search) ?>&sort=<?= $sort ?>#catalog"><?= $i ?></a>
        </li>
      <?php endfor; ?>
    </ul>
  </nav>
  <?php endif; ?>
</section>

<!-- _________________________________________________- -->

<!-- Онлайн калькулятор -->
<section class="calculator container my-5" style="background: #2e2e2e 100%;">
  <h2><strong>ОНЛАЙН КАЛЬКУЛЯТОР</strong></h2>
  <p>
    Введите данные для предварительного расчета стоимости заказа услуги «Грузчики» и получите скидку
    <span class="discount">до 10%</span> на первый заказ.
  </p>

  <!-- Форма калькулятора -->
  <form class="calc-form">
    <!-- Блок 1: грузчики, дата, часы -->
    <div class="row g-3 mb-3">
      <div class="col-md">
        <input type="number" class="form-control" placeholder="Грузчики: 2">
      </div>
      <div class="col-md">
        <input type="datetime-local" class="form-control" value="2024-08-04T12:00">
      </div>
      <div class="col-md">
        <input type="number" class="form-control" placeholder="Кол-во часов: 10">
      </div>
    </div>

    <!-- Блок 2: доп. услуги, тип работ, автомобиль -->
    <div class="row g-3 mb-3">
      <div class="col-md">
        <select class="form-select">
          <option disabled selected>Доп. услуги</option>
          <option>Разборка/сборка мебели</option>
          <option>Вынос строительного мусора</option>
          <option>Подъём на этаж без лифта</option>
          <option>Упаковка вещей</option>
          <option>Погрузка в транспорт</option>
        </select>
      </div>
      <div class="col-md">
        <select class="form-select">
          <option disabled selected>Тип работ</option>
          <option>Квартирный переезд</option>
          <option>Офисный переезд</option>
          <option>Такелажные работы</option>
          <option>Вывоз мусора</option>
          <option>Погрузка/разгрузка фуры</option>
        </select>
      </div>
      <div class="col-md">
        <select class="form-select">
          <option disabled selected>Выберите автомобиль</option>
          <option>Газель — 1.5 т</option>
          <option>Бычок — 3 т</option>
          <option>ЗИЛ — 5 т</option>
          <option>КамАЗ — 10 т</option>
          <option>Без автомобиля</option>
        </select>
      </div>
    </div>

    <!-- Блок 3: имя, телефон, кнопка отправки -->
    <div class="row g-3">
      <div class="col-md">
        <input type="text" name="name" class="form-control" placeholder="Имя" required pattern="^[А-Яа-яЁёA-Za-z\s\-]{2,}$" title="Введите корректное имя (только буквы)">
      </div>
      <div class="col-md">
        <input type="tel" name="phone" class="form-control" placeholder="+7XXXXXXXXXX" required pattern="^\+7\d{10}$" title="Введите номер в формате +7XXXXXXXXXX">
      </div>
      <div class="col-md">
        <button type="submit" class="btn-orange-gradient w-100">Рассчитать стоимость</button>
      </div>
    </div>
  </form>
</section>

<!-- _________________________________________________- -->

<!-- Галерея фотографий -->
<section class="gallery container my-5">
  <!-- Заголовок -->
  <h2 class="mb-4 text-center"><strong>ФОТОГАЛЕРЕЯ</strong></h2>

  <!-- Bootstrap-карусель с фото -->
  <div id="photoGalleryCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 600px;">
    
    <!-- Обёртка для слайдов -->
    <div class="carousel-inner" id="carouselInner">
      
      <!-- Первый слайд активный -->
      <div class="carousel-item active">
        <img src="фото/1.png" class="d-block w-100 rounded" alt="Фото 1" style="height: 400px; object-fit: cover;">
      </div>

      <!-- Остальные фото-слайды -->
      <div class="carousel-item">
        <img src="фото/2.png" class="d-block w-100 rounded" alt="Фото 2" style="height: 400px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="фото/3.png" class="d-block w-100 rounded" alt="Фото 3" style="height: 400px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="фото/4.png" class="d-block w-100 rounded" alt="Фото 4" style="height: 400px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="фото/5.png" class="d-block w-100 rounded" alt="Фото 5" style="height: 400px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="фото/6.png" class="d-block w-100 rounded" alt="Фото 6" style="height: 400px; object-fit: cover;">
      </div>
    </div>
  </div>

  <!-- Кнопки управления (вперёд/назад) -->
  <div class="carousel-controls d-flex justify-content-center gap-4 mt-4">
    <button class="btn btn-dark rounded-circle" type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="btn btn-dark rounded-circle" type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Индикаторы слайдов -->
  <div class="carousel-indicators mt-3">
    <button type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Фото 1"></button>
    <button type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide-to="1" aria-label="Фото 2"></button>
    <button type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide-to="2" aria-label="Фото 3"></button>
    <button type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide-to="3" aria-label="Фото 4"></button>
    <button type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide-to="4" aria-label="Фото 5"></button>
    <button type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide-to="5" aria-label="Фото 6"></button>
  </div>
</section>

<!-- _________________________________________________- -->

<!-- Раздел с отзывами -->
<section class="reviews container-fluid py-5 text-white" style="background: #2e2e2e 100%;">
  <div class="container">
    <!-- Заголовок -->
    <h2 class="mb-4 text-center fw-bold">ОТЗЫВЫ</h2>

    <!-- Описание -->
    <p class="text-center mb-4">
      Грузчики от компании с опытом работы в Москве с 2013 года...
    </p>

    <!-- Статистика отзывов -->
    <div class="review-stats d-flex justify-content-center gap-4 mb-4 text-center">
      <span class="fs-5"><strong>339 отзывов</strong></span> 
      <span class="fs-5"><strong>Средняя: 4.97 из 5 ⭐</strong></span>
    </div>

    <!-- Вкладки переключения категорий отзывов -->
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
      <button class="btn btn-sm review-tab active text-white border-0" data-target="video">Видео отзывы</button>
      <button class="btn btn-sm review-tab text-white border-0" data-target="audio">Аудио отзывы</button>
      <button class="btn btn-sm review-tab text-white border-0" data-target="internet">Отзывы из интернета</button>
      <button class="btn btn-sm review-tab text-white border-0" data-target="tenchat">Отзывы из TenChat</button>
      <button class="btn btn-sm review-tab text-white border-0" data-target="user">Ваши отзывы</button>
    </div>

    <!-- Контент: Видео отзывы -->
    <div class="review-content" id="review-video">
      <div id="videoReviewCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 600px;">
        
        <!-- Видео-слайды -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <video class="d-block w-100 rounded" style="height: 340px; object-fit: cover;" controls>
              <source src="видео/Отзыв_1.mp4" type="video/mp4">
            </video>
          </div>
          <div class="carousel-item">
            <video class="d-block w-100 rounded" style="height: 340px; object-fit: cover;" controls>
              <source src="видео/Отзыв_2.mp4" type="video/mp4">
            </video>
          </div>
          <div class="carousel-item">
            <video class="d-block w-100 rounded" style="height: 340px; object-fit: cover;" controls>
              <source src="видео/Отзыв_3.mp4" type="video/mp4">
            </video>
          </div>
          <div class="carousel-item">
            <video class="d-block w-100 rounded" style="height: 340px; object-fit: cover;" controls>
              <source src="видео/Отзыв_4.mp4" type="video/mp4">
            </video>
          </div>
        </div>

        <!-- Кнопки управления каруселью -->
        <div class="carousel-controls d-flex justify-content-center gap-4 mt-4">
          <button class="btn btn-dark rounded-circle" type="button" data-bs-target="#videoReviewCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="btn btn-dark rounded-circle" type="button" data-bs-target="#videoReviewCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>

    <!-- Остальные типы отзывов (скрыты изначально) -->
    <div class="review-content d-none" id="review-audio">
      <p class="text-center">Здесь будут аудио отзывы.</p>
    </div>

    <div class="review-content d-none" id="review-internet">
      <p class="text-center">Здесь отзывы из интернета.</p>
    </div>

    <div class="review-content d-none" id="review-tenchat">
      <p class="text-center">Здесь отзывы из TenChat.</p>
    </div>

    <div class="review-content d-none" id="review-user">
      <p class="text-center">Оставьте ваш отзыв!</p>
    </div>
  </div>
</section>

<!-- _________________________________________________- -->

<!-- Блок с заголовком и встроенной картой Яндекс -->
<section class="map-section my-5">
  <div class="container">
    <!-- Заголовок секции -->
    <h2 class="mb-4"><strong>Мы на карте</strong></h2>

    <!-- Контейнер с картой, обернут в стилизованный div -->
    <div class="map-embed" style="position:relative; overflow:hidden; border-radius:8px;">
      <!-- Встраивание карты с маркером -->
      <iframe
        src="https://yandex.ru/map-widget/v1/?ll=37.593956%2C55.794522&z=17&pt=37.593956,55.794522,pm2rdm"
        width="100%"
        height="400"
        frameborder="0"
        allowfullscreen
        style="border: none;">
      </iframe>
    </div>
  </div>
</section>


<!-- _________________________________________________- -->

<!-- Секция с формой обратной связи и изображением -->
<section class="faq-request container my-5 d-lg-flex justify-content-between align-items-center">

  <!-- Левая часть: заголовок, описание и форма -->
  <div class="faq-left mb-4 mb-lg-0">
    <h2><strong>У ВАС ЕСТЬ ВОПРОСЫ?</strong></h2>
    <p>Оставьте телефон и мы вам перезвоним</p>

    <!-- Форма для сбора имени и телефона -->
    <form id="faqForm" class="d-flex flex-column flex-sm-row align-items-stretch gap-1 my-2 flex-wrap needs-validation" novalidate>
      <!-- Поле ввода имени -->
      <input type="text" name="name" class="form-control" placeholder="Имя" required pattern="^[А-Яа-яЁёA-Za-z\s\-]{2,}$" title="Введите корректное имя (только буквы)">
      <!-- Повторяющееся поле ввода имени, возможно, ошибка — лучше заменить на телефон -->
      <input type="text" name="name" class="form-control" placeholder="Имя" required pattern="^[А-Яа-яЁёA-Za-z\s\-]{2,}$" title="Введите корректное имя (только буквы)">
      
      <!-- Кнопка отправки формы -->
      <button type="submit" class="btn-orange-gradient text-white fw-bold w-100 w-sm-auto" style="height: 38px; white-space: nowrap;">
        📞 Перезвоните мне
      </button>
    </form>

    <!-- Информация об обработке персональных данных -->
    <small class="text-muted mt-2 d-block">Отправляя заявку, вы соглашаетесь с политикой обработки персональных данных</small>
  </div>

  <!-- Правая часть: изображение -->
  <div class="faq-image">
    <img src="фото/Номер.png" alt="Грузчик и семья" class="img-fluid rounded">
  </div>
</section>


<!-- _________________________________________________- -->

<!-- Секция с дополнительными услугами -->
<section class="extra-services container my-5">
  <!-- Заголовок секции -->
  <h2 class="text-center fw-bold mb-4">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ В МОСКВЕ</h2>

  <!-- Список услуг в виде кликабельных ссылок -->
  <div class="d-flex flex-wrap gap-2 justify-content-center">
    <!-- Каждая ссылка — отдельная услуга -->
    <a href="#" class="rounded-pill extra-link">Грузчики для офисного переезда</a>
    <a href="#" class="rounded-pill extra-link">Квартирный переезд с грузчиками</a>
    <a href="#" class="rounded-pill extra-link">Перевозка мебели с грузчиками</a>
    <a href="#" class="rounded-pill extra-link">Грузчики на производство</a>
    <a href="#" class="rounded-pill extra-link">Переезд дома с грузчиками</a>
    <a href="#" class="rounded-pill extra-link">Грузчики для вывоза мусора</a>
    <a href="#" class="rounded-pill extra-link">Грузчики в Москве на разовые работы</a>
    <a href="#" class="rounded-pill extra-link">Погрузочно-разгрузочные работы</a>
    <a href="#" class="rounded-pill extra-link">Нанять грузчиков на такелаж</a>
    <a href="#" class="rounded-pill extra-link">Грузчики с машиной</a>
    <a href="#" class="rounded-pill extra-link">Демонтаж дома</a>
    <a href="#" class="rounded-pill extra-link">Услуги грузчиков в Москве</a>
    <a href="#" class="rounded-pill extra-link">Грузчики в Москве</a>
    <a href="#" class="rounded-pill extra-link">Ночной переезд</a>
    <a href="#" class="rounded-pill extra-link">Подъем на этаж в домах без лифта</a>
    <a href="#" class="rounded-pill extra-link">Перевозка пианино</a>
  </div>
</section>

<!-- _________________________________________________- -->

<!-- Секция с рекомендательными письмами от крупных клиентов -->
<section class="recommendations container my-5">
  
  <!-- Обёртка с фоном, центровкой текста и отступами -->
  <div class="recommendation-wrapper text-white text-center py-5 px-3">
    
    <!-- Заголовок секции -->
    <h2 class="fw-bold mb-4">
      РЕКОМЕНДАТЕЛЬНЫЕ ПИСЬМА<br>ОТ КРУПНЫХ КЛИЕНТОВ
    </h2>

    <!-- Карусель с письмами -->
    <div id="recommendationsCarousel" class="carousel slide" data-bs-ride="carousel">
      
      <!-- Внутренняя часть карусели с отдельными слайдами -->
      <div class="carousel-inner">
        
        <!-- Первый слайд (активный по умолчанию) -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <img src="фото/Письмо_1.png" class="rec-img" alt="Письмо 1">
          </div>
        </div>

        <!-- Второй слайд -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <img src="фото/Письмо_2.png" class="rec-img" alt="Письмо 2">
          </div>
        </div>

        <!-- Третий слайд -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <img src="фото/Письмо_3.png" class="rec-img" alt="Письмо 3">
          </div>
        </div>

        <!-- Четвёртый слайд -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <img src="фото/Письмо_4.png" class="rec-img" alt="Письмо 4">
          </div>
        </div>
      </div>
    </div>

    <!-- Кнопки управления каруселью (внизу) -->
    <div class="carousel-controls d-flex justify-content-center gap-4 mt-4">
      <!-- Кнопка "Назад" -->
      <button class="btn btn-dark rounded-circle" type="button" data-bs-target="#recommendationsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <!-- Кнопка "Вперёд" -->
      <button class="btn btn-dark rounded-circle" type="button" data-bs-target="#recommendationsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

  </div>
</section>

<!-- _________________________________________________- -->

<!-- Секция с часто задаваемыми вопросами -->
<section class="faq-section container my-5">

  <!-- Заголовок секции -->
  <h2 class="text-center fw-bold mb-4">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>

  <!-- Аккордеон с вопросами -->
  <div class="accordion" id="faqAccordion">

    <!-- ВОПРОС 1 (открыт по умолчанию) -->
    <div class="accordion-item text-start">
      <h2 class="accordion-header">
        <!-- Кнопка для раскрытия вопроса -->
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
          Как узнать стоимость погрузочно-разгрузочных работ?
        </button>
      </h2>
      <!-- Ответ на вопрос -->
      <div id="faq1" class="accordion-collapse collapse show">
        <div class="accordion-body">
          Вы можете рассчитать предварительную стоимость с помощью нашего онлайн-калькулятора на сайте или связаться с менеджером для точного расчёта.
        </div>
      </div>
    </div>

    <!-- ВОПРОС 2 -->
    <div class="accordion-item text-start">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
          Какие люди у Вас работают?
        </button>
      </h2>
      <div id="faq2" class="accordion-collapse collapse">
        <div class="accordion-body">
          У нас работают проверенные и физически подготовленные сотрудники с опытом выполнения погрузочно-разгрузочных работ и прохождением медосмотра.
        </div>
      </div>
    </div>

    <!-- ВОПРОС 3 -->
    <div class="accordion-item text-start">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
          Вы работаете по безналичному расчету?
        </button>
      </h2>
      <div id="faq3" class="accordion-collapse collapse">
        <div class="accordion-body">
          Да, мы принимаем оплату как наличным, так и безналичным способом. Работаем с юридическими лицами и индивидуальными предпринимателями.
        </div>
      </div>
    </div>

    <!-- ВОПРОСЫ 4–7 (изначально скрыты через d-none) -->

    <!-- ВОПРОС 4 -->
    <div class="accordion-item d-none text-start">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
          Вы работаете с НДС?
        </button>
      </h2>
      <div id="faq4" class="accordion-collapse collapse">
        <div class="accordion-body">
          Да, мы предоставляем все необходимые бухгалтерские документы, включая счета-фактуры с НДС.
        </div>
      </div>
    </div>

    <!-- ВОПРОС 5 -->
    <div class="accordion-item d-none text-start">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
          Как оплачивается заказ?
        </button>
      </h2>
      <div id="faq5" class="accordion-collapse collapse">
        <div class="accordion-body">
          Оплата производится после выполнения работ наличными или переводом. Для организаций предусмотрена оплата по договору и счёту.
        </div>
      </div>
    </div>

    <!-- ВОПРОС 6 -->
    <div class="accordion-item d-none text-start">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
          У вас есть свой типовой договор?
        </button>
      </h2>
      <div id="faq6" class="accordion-collapse collapse">
        <div class="accordion-body">
          Да, у нас есть стандартный договор оказания услуг, который мы можем предоставить для подписания при необходимости.
        </div>
      </div>
    </div>

    <!-- ВОПРОС 7 -->
    <div class="accordion-item d-none text-start">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
          Вы несёте материальную ответственность?
        </button>
      </h2>
      <div id="faq7" class="accordion-collapse collapse">
        <div class="accordion-body">
          Да, наши сотрудники несут материальную ответственность за порчу или утерю имущества в процессе выполнения заказа.
        </div>
      </div>
    </div>

  </div>

  <!-- Кнопка "Показать все" -->
  <div class="text-center mt-4">
    <button class="btn-orange-gradient btn btn-outline-warning extra-links" id="showAllFaqs">
      Показать все
    </button>
  </div>
</section>


<!-- _________________________________________________- -->

<!-- Секция обратной связи с руководителем -->
<section class="callback-section container my-5 d-lg-flex align-items-center justify-content-between">

  <!-- Левая часть с текстом и формой -->
  <div class="callback-text d-flex flex-column justify-content-between pe-lg-5">
    
    <!-- Контент с отступом слева -->
    <div class="ps-5">
      <!-- Вводная фраза -->
      <p class="lead text-warning mb-1">“</p>

      <!-- Заголовок с именем -->
      <h3><strong>Я - Рустам, руководитель отдела по работе с клиентами.</strong></h3>

      <!-- Текст-приглашение -->
      <p class="text-start">
        Спасибо, что просмотрели сайт до конца!<br>
        Оставьте заявку в этой форме и получите скидку
      </p>

      <!-- Уточнение о звонке -->
      <p class="text-start">
        Укажите номер телефона, мы перезвоним вам в течение 1-ой минуты
      </p>

      <!-- Форма отправки телефона -->
      <form action="send_mail.php" method="POST" class="d-flex flex-column flex-sm-row gap-2 my-3">
          <!-- Поля ввода с именами 'name' и 'phone' -->
          <input type="text" name="user_name" class="form-control" placeholder="Имя" required>
          <input type="tel" name="user_phone" class="form-control" placeholder="+7 (___) ___-__-__" required>
          
          <!-- Скрытое поле-идентификатор для безопасности -->
          <input type="hidden" name="action" value="send_lead">
          
          <button type="submit" class="btn-orange-gradient text-white fw-bold shadow-sm">
              📞 Перезвоните мне
          </button>
      </form>

      <!-- Вывод статуса отправки -->
      <?php if (isset($_SESSION['mail_status'])): ?>
          <div class="alert alert-<?php echo ($_SESSION['mail_status'] == 'success' ? 'success' : 'danger'); ?> alert-dismissible fade show mt-3" role="alert">
              <?php 
                  if ($_SESSION['mail_status'] == "success") echo "✅ <strong>Успех!</strong> Заявка отправлена администратору.";
                  else echo "❌ <strong>Ошибка!</strong> Не удалось отправить письмо.";
                  unset($_SESSION['mail_status']); // Удаляем, чтобы не висело вечно
              ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif; ?>

      <!-- Уведомление о политике конфиденциальности -->
      <small class="text-muted d-block mt-2 text-start">
        Отправляя заявку, вы соглашаетесь с политикой обработки персональных данных
      </small>
    </div>
  </div>

  <!-- Правая часть с фото -->
  <div class="callback-image text-center mt-4 mt-lg-0">
    <img src="фото/Рустам.png" alt="Рустам" class="img-fluid rounded" style="max-width: 280px;">
  </div>
</section>

<!-- _________________________________________________- -->

<!-- Подключи Bootstrap в <head> -->

<!-- Первый текстовый блок -->
<section class="services-section container my-5">

  <!-- Первый видимый абзац -->
  <p class="text-start">
    Независимо от того, грузоперевозка каких грузов и на какое расстояние вам требуется, вы всегда можете рассчитывать на нашу помощь. Перевозим мебель, сейфы, торговое оборудование, банкоматы и т.д. Выезжаем в любую точку области, просто сообщите свой адрес. Время подачи машины лучше согласовать заранее с нашим оператором. Выберите дату, час и оставьте заявку по телефону или напишите обращение. Наши грузчики выполняют широкий спектр услуг – разбирают и упаковывают мебель и технику, выполняют снос и вынос на этаж, могут помочь разобрать склад. Перенесут тяжелую мебель или оборудование. Звоните, предоставим профессионалов под любые задачи. Сотрудники нашей фирмы проходят инструктаж и владеют проф. инструментом. Рабочие пунктуальные, к выполнению заказов подходят ответственно. Если сомневаетесь с выбором машины и количестве грузчиков - обратитесь к нам за консультацией. Если вы представляете юридическое лицо - расскажите нам о вашей задаче и мы вышлем вам свое коммерческое предложение. Кроме того, грузчики в Москве проводят погрузочно-разгрузочные работы с соблюдением техники безопасности и несут ответственность за сохранность и целостность вещей. После переезда по вашему желанию сделаем уборку на старом месте, соберем мебель на новом. Бригады наших грузчиков оснащены необходимыми аксессуарами и инвентарем для качественного выполнения своей работы. Поэтому, если вам нужны опытные, профессиональные грузчики, услуги которых стоят недорого, приглашаем к сотрудничеству с нашей компанией. Сделать заказ на помощь такелажника или грузчиков для перевозки личных вещей вы можете как предварительно, так и срочно. Мы найдем взаимовыгодное и удобное для всех решение. Оказываем услуги частным лицам и компаниям, помогаем избавиться от любых хлопот, связанных с организацией переезда и перевозкой грузов. Наши минимальные цены вас приятно удивят. Предлагаем различные способы оплаты - карта, наличные, по безналу.
  </p>

  <!-- Скрытый текст 1 -->
  <div id="moreText1" class="collapse">
    <p class="text-start">
    Независимо от того, грузоперевозка каких грузов и на какое расстояние вам требуется, вы всегда можете рассчитывать на нашу помощь. Перевозим мебель, сейфы, торговое оборудование, банкоматы и т.д. Выезжаем в любую точку области, просто сообщите свой адрес. Время подачи машины лучше согласовать заранее с нашим оператором. Выберите дату, час и оставьте заявку по телефону или напишите обращение. Наши грузчики выполняют широкий спектр услуг – разбирают и упаковывают мебель и технику, выполняют снос и вынос на этаж, могут помочь разобрать склад. Перенесут тяжелую мебель или оборудование. Звоните, предоставим профессионалов под любые задачи. Сотрудники нашей фирмы проходят инструктаж и владеют проф. инструментом. Рабочие пунктуальные, к выполнению заказов подходят ответственно. Если сомневаетесь с выбором машины и количестве грузчиков - обратитесь к нам за консультацией. Если вы представляете юридическое лицо - расскажите нам о вашей задаче и мы вышлем вам свое коммерческое предложение. Кроме того, грузчики в Москве проводят погрузочно-разгрузочные работы с соблюдением техники безопасности и несут ответственность за сохранность и целостность вещей. После переезда по вашему желанию сделаем уборку на старом месте, соберем мебель на новом. Бригады наших грузчиков оснащены необходимыми аксессуарами и инвентарем для качественного выполнения своей работы. Поэтому, если вам нужны опытные, профессиональные грузчики, услуги которых стоят недорого, приглашаем к сотрудничеству с нашей компанией. Сделать заказ на помощь такелажника или грузчиков для перевозки личных вещей вы можете как предварительно, так и срочно. Мы найдем взаимовыгодное и удобное для всех решение. Оказываем услуги частным лицам и компаниям, помогаем избавиться от любых хлопот, связанных с организацией переезда и перевозкой грузов. Наши минимальные цены вас приятно удивят. Предлагаем различные способы оплаты - карта, наличные, по безналу.
    </p>
  </div>

  <!-- Кнопка раскрытия 1 -->
  <div class="text-center mt-2">
    <button class="btn btn-outline-secondary rounded-circle" type="button" data-bs-toggle="collapse" data-bs-target="#moreText1" aria-expanded="false" aria-controls="moreText1" style="width: 40px; height: 40px; line-height: 1;">
      &#x25BC;
    </button>
  </div>
</section>

<!-- Второй текстовый блок -->
<section class="services-section container my-5">

  <!-- Первый видимый абзац -->
  <p class="text-start text-muted">
    Заказать услугу «Грузчики» Вы можете круглосуточно по всей территории Москвы и Московской области: Балашиха, Бронницы, Видное, Волоколамск, Воскресенск, Дзержинский, Дмитров, Долгопрудный, Домодедово, Дубна, Егорьевск, Жуковский, Зарайск, Истра, Кашира, Клин, Коломна, Королёв, Котельники, Красногорск, Лобня, Лосино-Петровский, Лотошино, Луховицы, Лыткарино, Люберцы, Можайск, Мытищи, Наро-Фоминск, Ногинск, Одинцово, Орехово-Зуево, Павловский Посад, Подольск, Пушкино, Раменское, Реутов, Руза, Сергиев Посад, Серебряные Пруды, Серпухов, Солнечногорск, Ступино, Талдом, Фрязино, Химки, Черноголовка, Чехов, Шатура, Шаховская, Щёлково, Электросталь, Боброво, Бутово, Горки Ленинские, Дрожжино, Лопатино, Измайлово, Новодрожжино, Сычёво, Осташёво, Белоозёрский, Яхрома.

  </p>

  <!-- Скрытый текст 2 -->
  <div id="moreText2" class="collapse">
    <p class="text-start text-muted">
    Заказать услугу «Грузчики» Вы можете круглосуточно по всей территории Москвы и Московской области: Балашиха, Бронницы, Видное, Волоколамск, Воскресенск, Дзержинский, Дмитров, Долгопрудный, Домодедово, Дубна, Егорьевск, Жуковский, Зарайск, Истра, Кашира, Клин, Коломна, Королёв, Котельники, Красногорск, Лобня, Лосино-Петровский, Лотошино, Луховицы, Лыткарино, Люберцы, Можайск, Мытищи, Наро-Фоминск, Ногинск, Одинцово, Орехово-Зуево, Павловский Посад, Подольск, Пушкино, Раменское, Реутов, Руза, Сергиев Посад, Серебряные Пруды, Серпухов, Солнечногорск, Ступино, Талдом, Фрязино, Химки, Черноголовка, Чехов, Шатура, Шаховская, Щёлково, Электросталь, Боброво, Бутово, Горки Ленинские, Дрожжино, Лопатино, Измайлово, Новодрожжино, Сычёво, Осташёво, Белоозёрский, Яхрома.
    </p>
  </div>

  <!-- Кнопка раскрытия 2 -->
  <div class="text-center mt-2">
    <button class="btn btn-outline-secondary rounded-circle" type="button" data-bs-toggle="collapse" data-bs-target="#moreText2" aria-expanded="false" aria-controls="moreText2" style="width: 40px; height: 40px; line-height: 1;">
      &#x25BC;
    </button>
  </div>
</section>

<!-- _________________________________________________- -->

<section class="bookmark-reminder">
  <!-- Основной блок с напоминанием добавить сайт в закладки -->
  <div class="container text-center">
    <!-- Заголовок с призывом добавить сайт в избранное -->
    <h2 class="bookmark-title mb-4">
      Чтобы не потерять наш сайт добавьте его<br />
      в избранное (закладки) или сохраните
    </h2>
    <!-- Нижняя часть блока с инструкцией и кнопкой с сочетанием клавиш -->
    <div class="bookmark-bottom d-flex flex-column flex-md-row align-items-center justify-content-center text-md-start text-center">
      <!-- Текст с подсказкой нажать клавиши -->
      <p class="bookmark-subtitle mb-2 mb-md-0 me-md-3">
        Нажмите сочетание<br />
        клавиш в браузере
      </p>
      <!-- Визуальный блок с подсказкой сочетания клавиш Ctrl + D -->
      <div class="btn-orange-gradient bookmark-key mt-2 mt-md-0">Ctrl + D</div>
    </div>
  </div>
</section>



<!-- _________________________________________________- -->

<!-- Футер -->

<?php include 'footer.php'; ?>

<!-- Блок демонстрации ЛР: Сессии и Куки -->
<div class="container my-3 p-3 bg-dark text-white rounded shadow-sm small">
    <div class="row text-center">
        <div class="col-md-4">
            <strong>Задание №1 (Сессия):</strong> <br>
            Вы просмотрели страниц: <?php echo $_SESSION['views']; ?>
        </div>
        <div class="col-md-4">
            <strong>Задание №2 (Cookies):</strong> <br>
            Ваш прошлый визит: <?php echo $last_visit ?: "Первый раз на сайте"; ?>
        </div>
        <div class="col-md-4">
            <strong>Задание №3 (Админ):</strong> <br>
            <?php if (isAdmin()): ?>
                <span class="text-success">Вы в системе</span> | <a href="admin.php" class="text-white">В панель</a>
            <?php else: ?>
                <a href="admin.php" class="text-warning">Войти как админ</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- КНОПКИ НАВИГАЦИИ -->
<div class="scroll-buttons">
  <button class="scroll-btn btn-orange-gradient up" onclick="scrollToTop()" title="Наверх">↑</button>
  <button class="scroll-btn btn-orange-gradient down" onclick="scrollToBottom()" title="Вниз">↓</button>
</div>

<!-- _________________________________________________- -->
 
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="скрипты/video-popup.js"></script>

</link>

<div id="promoPopup" class="promo-popup">
  <div class="promo-content">
    <span class="promo-close" onclick="closePromo()">&times;</span>
    <h4>🎁 Получите скидку 10%</h4>
    <p>Оставьте заявку сейчас и получите персональную скидку!</p>
    <button class="btn btn-orange-gradient">Оставить заявку</button>
  </div>
</div>

<!-- Весь ваш основной контент (Hero, Каталог, Отзывы и т.д.) -->

    <!-- ПОДКЛЮЧАЕМ НИЖНЮЮ ПАНЕЛЬ -->
    <?php include 'user_toolbar.php'; ?>

    <!-- Подключаем скрипты (Bootstrap JS обязателен для работы меню) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="скрипты/video-popup.js"></script>
</body>
</html>
</body>
</html>