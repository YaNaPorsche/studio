<?php
session_start();
require 'connecting_db.php';
$isLoggedIn = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кулинарная студия Надежды Поморской</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2jOqE56ODykKlT+TvWJontguKDu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Tenor+Sans&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2jOqE56ODykKlT+TvWJontguKDu" crossorigin="anonymous">
</head>

<body class="mr-3 ml-3">

    <header class="d-flex justify-content-between align-items-center flex-column flex-lg-row">

        <?php if ($isLoggedIn): ?>
            <div class="container d-flex flex-column align-items-center justify-content-center text-center">
                <h1>Добро пожаловать, администратор!</h1>
                <a href="logout.php">
                    <button type="button" class=" mt-3">Выйти</button>
                </a>
            </div>
        <?php else: ?>
            <div class="d-flex justify-content-between align-items-center w-100">
                <img src="img/logo.png" alt="">
                <div class="d-flex align-items-center">
                    <img src="img/tel.svg" alt="">
                    <p class="mb-0 mr-4 md-h4 h4 fas">8-906-283-64-41</p>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100 w-lg-auto mx-5 link-button">
                <a href="https://vk.com/samsebeculinar29?from=groups"><button>Группа ВКонтакте</button></a>
                <a href=""><button>Сообщество Telegram</button></a>
            </div>
            </div>
        <?php endif; ?>
        </div>

    </header>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link t" href="#about-us">О НАС</a></li>
            <li class="nav-item"><a class="nav-link t" href="events/birthday.php">ДНИ РОЖДЕНИЯ</a></li>
            <li class="nav-item"><a class="nav-link t" href="events/company_party.php">КОРПОРАТИВЫ</a></li>
            <li class="nav-item"><a class="nav-link t" href="events/catering.php">КЕЙТЕРИНГ</a></li>
            <li class="nav-item"><a class="nav-link t" href="#master-classes">МАСТЕР-КЛАССЫ</a></li>
            <li class="nav-item"><a class="nav-link t" href="#gallery">ГАЛЕРЕЯ</a></li>
            <li class="nav-item"><a class="nav-link t" href="#reviews">ОТЗЫВЫ</a></li>
        </ul>
    </nav>
    <section class="p-0">
        <div class="row">
            <div class="col-md-6 pr-0 pl-0">
                <img src="img/nadezdajpg.jpg" alt="Кулинарная студия" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h1>Кулинарная студия Надежды Поморской</h1>
                <h4>Приглашаем вас открыть для себя <span class="highlight">мир кулинарного волшебства</span></h4>
            </div>
        </div>
    </section>
    <section class="mx-auto my-5 text-center ml-lg-5 mr-lg-5" id="about-us">
        <h2 class="section-title">О НАС</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10 d-flex flex-column justify-content-center">
                <p class="text-justify">
                    Кулинарная студия Надежды Поморской в Архангельске — это уникальное пространство, где каждый может открыть для себя мир кулинарного искусства. Мы предлагаем увлекательные мастер-классы для детей и взрослых, на которых участники могут освоить секреты приготовления различных блюд, включая традиционные рецепты северной кухни. Наша студия известна индивидуальным подходом к каждому участнику и вниманием к качеству обучения. Опытные шеф-повара делятся своими знаниями и кулинарными хитростями, создавая атмосферу творчества и вдохновения. Мы предлагаем как индивидуальные, так и групповые занятия, что позволяет каждому выбрать формат, который подходит именно ему. Кроме того, мы проводим тематические вечера и кулинарные конкурсы, добавляя элемент развлечения в процесс обучения. Присоединяйтесь к нам, и откройте для себя радость приготовления вкусной еды в дружелюбной и поддерживающей обстановке!
                </p>
            </div>
            <div class="col-lg-6 col-md-10 d-flex justify-content-center justify-content-md-end">
                <img src="img/qwerty2.jpg" alt="Кулинарная студия Надежды Поморской" class="img-fluid rounded shadow" style="max-height:500px;">
            </div>
        </div>
    </section>
    <section class="no-margin-section" style="background-color:#FD9FA2; border-radius: 30px;" id="corporate-events">
        <h2 class="section-title text-center pt-2" id="birthdays" id="catering">МЕРОПРИЯТИЯ</h2>
        <div class="events-container d-flex justify-content-center align-items-start flex-wrap" id="catering">

            <div class="card mx-3 mb-3" style="height: auto;">
                <div class="card-body d-flex flex-column event-card" style="min-height: 445px;">
                    <img src="img/denrozd.jpg" alt="" class="card-image" />
                    <h5 class="card-title mb-1 fw-bold">День Рождения</h5>
                    <p class="card-text mb-1">Сделаем особенный День Рождения для вас!</p>
                    <a href="events/birthday.php">
                        <button class="card-button w-100 mt-3" type="submit">
                            Подробнее...
                        </button>
                    </a>
                </div>
            </div>
            <div class="card mx-3 mb-3" style="height: auto;">
                <div class="card-body d-flex flex-column event-card" style="min-height: 445px;">
                    <img src="img/catering.jpg" alt="" class="card-image" />
                    <h5 class="card-title mb-1 fw-bold">Кейтеринг</h5>
                    <p class="card-text mb-1">Вкусные решения для ваших мероприятий!</p>
                    <a href="events/catering.php">
                        <button class="card-button w-100 mt-3" type="submit">
                            Подробнее...
                        </button>
                    </a>
                </div>
            </div>
            <div class="card mx-3 mb-3" style="height: auto;">
                <div class="card-body d-flex flex-column event-card" style="min-height: 445px;">
                    <img src="img/company_partyyy.jpg" alt="" class="card-image" />
                    <h5 class="card-title mb-1 fw-bold">Корпоратив</h5>
                    <p class="card-text mb-1">Кулинарные приключения для всей команды!</p>
                    <a href="events/company_party.php">
                        <button class="card-button w-100 mt-3" type="submit">
                            Подробнее...
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color:#FD9FA2; border-radius: 30px;" class="mb-3 mt-5 p-4">
        <h2 class="section-title text-center mt-0" id="master-classes">МАСТЕР-КЛАССЫ</h2>
        <div class="master-class d-flex flex-column justify-content-center align-items-center mb-3">
            <div class="d-flex w-100 row align-items-center justify-content-md-center">
                <div class="col-lg-4 col-md-5 col-sm-6 d-flex m-sm-auto justify-content-center mb-3 mb-lg-0">
                    <div class="d-flex justify-content-center ">
                        <img src="img/nedeti.png" alt="" class="card-image" style="height: auto; width: 100%; object-fit: cover;" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 d-flex flex-column justify-content-between">
                    <h3 style="color: #7B0419;" class="text-center">Кулинарные мастер-классы</h3>
                    <p class="mb-3 text-justify">Откройте для себя мир кулинарного искусства на наших мастер-классах для взрослых! Мы предлагаем разнообразные темы — от основ кулинарии до изысканных блюд. Под руководством профессионалов вы освоите новые техники, научитесь готовить блюда разных кухонь мира и удивите своих близких кулинарными шедеврами!</p>
                    <span class="mb-2">Длительность: 1,5 - 2 часа</span>
                    <a href="master_classes/adults.php" class="">
                        <button class="w-100 col-md-6 col-12 mb-2 mb-md-5">Подробнее...</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="master-class d-flex flex-column justify-content-center align-items-center mb-3">
            <div class="d-flex w-100 row align-items-center justify-content-md-center">
                <div class="col-lg-4 col-md-5 col-sm-6 d-flex m-sm-auto justify-content-center mb-3 mb-lg-0">
                    <div class="d-flex justify-content-center ">
                        <img src="img/deti.png" alt="" class="card-image" style="height: auto; width: 100%; object-fit: cover;" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 d-flex flex-column justify-content-between">
                    <h3 style="color: #7B0419;" class="text-center">Детские Кулинарные мастер-классы</h3>
                    <p class="mb-3 text-justify">Наши мастер-классы для детей — это увлекательное путешествие в мир кулинарии! Под руководством опытных шеф-поваров ваши дети научатся готовить простые и вкусные блюда, развивая творческие способности и уверенность на кухне. Каждый урок — это не только кулинария, но и весёлое времяпрепровождение с новыми друзьями!</p>
                    <span class="mb-2 ">Длительность: 45-60 минут</span>
                    <a href="master_classes/children.php" class="">
                        <button class="w-100 col-md-6 col-12 mb-2 mb-md-5">Подробнее...</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="master-class d-flex flex-column justify-content-center align-items-center mb-3">
            <div class="d-flex w-100 row align-items-center justify-content-md-center">
                <div class="col-lg-4 col-md-5 col-sm-6 d-flex m-sm-auto justify-content-center mb-3 mb-lg-0">
                    <div class="d-flex justify-content-center ">
                        <img src="img/ind.png" alt="" class="card-image" style="height: auto; width: 100%; object-fit: cover;" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 d-flex flex-column justify-content-between">
                    <h3 style="color: #7B0419;" class="text-center">Индивидуальлные мастер-классы</h3>
                    <p class="mb-3 text-justify">Индивидуальные мастер-классы в кулинарной студии Надежды Поморской предлагают уникальную возможность для детей и взрослых научиться кулинарному искусству в комфортной и дружелюбной атмосфере. Эти занятия ориентированы на создание особых моментов, которые запомнятся на всю жизнь!</p>
                    <span class="mb-2 ">Длительность: 1,5 - 2 часа</span>
                    <a href="master_classes/ind.php" class="">
                        <button class="w-100 col-md-6 col-12 mb-2 mb-md-5">Подробнее...</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="poster row mt-3">
            <h3 class="poster-desc col-xl-9 col-12">А также каждые 2 недели мы придумываем эксклюзивные мастер классы! Подробности в нашей группе ВКонтакте!
            </h3>
            <button class="special-button">Посмотреть афишу...</button>
        </div>
    </section>
    <section>
        <h2 class="section-title text-center">ГАЛЕРЕЯ</h2>
        <section class="gallery-container" id="gallery">

            <div class="gallery d-flex align-items-center">
                <div class="arrow left hidden" id="prev">&lt;</div>
                <div class="photos" id="photos">
                    <div class="photo"><img src="img/photo1.png" alt=""></div>
                    <div class="photo"><img src="img/photo2.png" alt=""></div>
                    <div class="photo"><img src="img/photo3.png" alt=""></div>
                    <div class="photo"><img src="img/photo4.png" alt=""></div>
                    <div class="photo"><img src="img/photo5.png" alt=""></div>
                    <div class="photo"><img src="img/photo6.png" alt=""></div>
                    <div class="photo"><img src="img/photo7.png" alt=""></div>
                    <div class="photo"><img src="img/photo8.png" alt=""></div>
                    <div class="photo"><img src="img/photo9.png" alt=""></div>
                    <div class="photo"><img src="img/photo10.png" alt=""></div>
                    <div class="photo"><img src="img/photo11.png" alt=""></div>
                    <div class="photo"><img src="img/photo12.png" alt=""></div>
                    <div class="photo"><img src="img/photo13.png" alt=""></div>
                    <div class="photo"><img src="img/photo14.png" alt=""></div>
                    <div class="photo"><img src="img/photo15.png" alt=""></div>
                </div>
                <div class="arrow right" id="next">&gt;</div>
            </div>

        </section>
        <div class="text-right mr-5"><a href="gallery.php">Смотреть больше фото...</a></div>
    </section>

    <style>

    </style>

    <h2 class="text-center section-title">ЧТО ГОВОРЯТ НАШИ КЛИЕНТЫ</h2>
    <div class="reviews-container">
        <div class="review-box">
            <div class="review card1" id="reviews">
                <h5 class="card-title mb-1">Лариса</h5>
                <span class="text-warning">★★★★★</span>
                <p class="card-text text-justify">Как участница этого мероприятия, я очень рекомендую всем попробовать себя в кулинарном деле! Мне казалось, что я уже прекрасно пеку, но Надежда научила меня замешивать настоящее дрожжевое тесто и печь кулебяки за рекордно короткое время — 1,5 часа. Надежда с удовольствием делилась своими секретами, разными формами кулебяк. Страх перед выпечкой совсем прошёл! Очень хочется поскорее побаловать своих близких. Спасибо всем за тёплую компанию!</p>
            </div>
            <div class="review card2">
                <h5 class="card-title mb-1">Милана</h5>
                <span class="text-warning">★★★★★</span>
                <p class="card-text text-justify">Надя, спасибо тебе за мастер-класс по выпечке пирогов и кулебяк! Потрясающе вкусное тесто, процесс приготовления и замешивания теста оказался несложным, все было очень интересно! А еще твой зажигательный характер, твоя влюбленность в свое дело, твоя невероятная энергия зарядили весь мастер-класс! Огромное тебе спасибо! Надя, спасибо, что делишься своими целями, это мотивирует и зажигает! Ты вдохновляешь нас стремиться к лучшему и пробовать новое. Я уверена, что все участники мастер-класса получили массу удовольствия и полезных знаний. Надеюсь, что в будущем будет еще больше таких замечательных встреч!</p>
            </div>
            <div class="review card3">
                <h5 class="card-title mb-1">Ирина</h5>
                <span class="text-warning">★★★★★</span>
                <p class="card-text text-justify">Ой, Надежда, Вы точно моя фея! Я с большой радостью и благодарностью езжу к Вам на мастер-классы! Вы дарите праздник, легкость и позитив! А это так важно в наше время! А еще делитесь чудесными рецептами! Моя подруга тоже в восторге!) огромное Вам спасибо!  Всем рассказываю про Вас и Ваши мастер-классы.</p>
            </div>
        </div>
    </div>

    <footer class="footer mt-5" id="footer">
        <div class="container ">
            <div class="row d-flex justify-content-md-between">
                <div class="col-12 col-md-6 p-0 mb-3">
                    <a href="#about-us" class="text-dark link-hover">
                        <h5 class="mb-md-2">О НАС</h5>
                    </a>
                    <a href="events/birthday.php" class="text-dark link-hover">
                        <h5 class="mb-md-2">ДНИ РОЖДЕНИЯ</h5>
                    </a>
                    <a href="events/company_party.php" class="text-dark link-hover">
                        <h5 class="mb-md-2">КОРПОРАТИВЫ</h5>
                    </a>
                    <a href="events/catering.php" class="text-dark link-hover">
                        <h5 class="mb-md-2">КЕЙТЕРИНГ</h5>
                    </a>
                    <a href="#footer" class=" text-dark link-hover">
                        <h5 class="mb-md-2">МАСТЕР-КЛАССЫ</h5>
                    </a>
                    <a href="#gallery" class=" text-dark link-hover">
                        <h5 class="mb-md-2">ГАЛЕРЕЯ</h5>
                    </a>
                    <a href="#reviews" class=" text-dark link-hover">
                        <h5 class="mb-md-2">ОТЗЫВЫ</h5>
                    </a>
                </div>
                <div class=" col-12 col-md-6">
                    <div class="footer-contact  text-center">
                        <div class="d-flex justify-content-center align-items-center w-100 mb-2 mb-sm-0">
                            <img src="img/tel.svg" alt="Телефон" class="mr-2">
                            <p class="fas fa-phone mb-0 mr-3" style="font-size: 24px;">8-906-283-64-41</p>
                        </div>
                        <div class="social-media mb-2 mt-2 d-flex justify-content-around ">
                            <a href=""><img src="img/tg.svg" alt="Telegram Icon" class="social-icon mr-sm-0"></a>
                            <a href=""><img src="img/vk.svg" alt="VK Icon" class="social-icon ml-sm-0"></a>
                        </div>
                        <div class="address">
                            <span class="mb-0">samsebeculinar29</span><br>
                            <span>Новогородский, 32 (корпус B), 514 офис</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-md-4" style="color: #FD9FA2;">
                <p class="mt-0 p-0">Город Архангельск</p>
                <p class="mt-0 p-0">ИП Тузова Надежда Александровна</p>
                <p class="mt-0 p-0">ИНН: 290134620190</p>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOyrYK5s/ZCJKeOU"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOyrYK5s/ZCJKeOU" crossorigin="anonymous"></script>
</body>


</html>