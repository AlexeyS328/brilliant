<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? 'Химчистка Бриллиант - профессиональная чистка одежды, ковров и мебели. Быстро, качественно, доступно.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? 'химчистка, чистка одежды, химчистка Бриллиант, чистка ковров, чистка мебели, профессиональная химчистка']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?> | Химчистка "Бриллиант"</title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Прелоадер для сайта -->
    <div class="spinner-wrapper">
        <div class="spinner"></div>
    </div>
    
    <?php $this->beginBody() ?>

    <header id="header">
        <?php
        NavBar::begin([
            'brandLabel' => 'Химчистка "Бриллиант"',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-dark bg-primary fixed-top']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'Цены', 'url' => ['/site/prices']],
                ['label' => 'О нас', 'url' => ['/site/about']],
                ['label' => 'Как найти?', 'url' => ['/site/how-to-find']],
                ['label' => 'Сотрудничество', 'url' => ['/site/cooperation']],
                ['label' => 'Отзывы', 'url' => ['/site/reviews']],
                ['label' => 'Контакты', 'url' => ['/site/contact']],
            ]
        ]);
        NavBar::end();
        ?>
    </header>

    <main id="main" class="flex-shrink-0 page-transition" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget([
                    'links' => $this->params['breadcrumbs'],
                    'homeLink' => [
                        'label' => 'Главная',
                        'url' => Yii::$app->homeUrl,
                    ],
                ]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Химчистка "Бриллиант"</h5>
                    <p>Профессиональная чистка одежды, ковров и мебели. Работаем без выходных!</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-2"><i class="fa fa-vk"></i></a>
                        <a href="#" class="text-white me-2"><i class="fa fa-telegram"></i></a>
                        <a href="#" class="text-white me-2"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Контакты</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-phone me-2"></i> +7 (XXX) XXX-XX-XX</li>
                        <li class="mb-2"><i class="fa fa-envelope me-2"></i> info@brilliant-clean.ru</li>
                        <li><i class="fa fa-map-marker me-2"></i> г. Ваш город, ул. Примерная, д. 123</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Режим работы</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-clock-o me-2"></i> Пн-Пт: 8:00 - 20:00</li>
                        <li><i class="fa fa-clock-o me-2"></i> Сб-Вс: 9:00 - 18:00</li>
                    </ul>
                    <div class="mt-3">
                        <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="btn btn-sm btn-outline-light">Связаться с нами</a>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start small">
                    &copy; Химчистка "Бриллиант" <?= date('Y') ?>. Все права защищены.
                </div>
                <div class="col-md-6 text-center text-md-end small">
                    <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>" class="text-light">Главная</a> |
                    <a href="<?= \yii\helpers\Url::to(['/site/prices']) ?>" class="text-light">Цены</a> |
                    <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="text-light">Контакты</a>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    <script>
        // Скрыть прелоадер при загрузке страницы или после максимального времени ожидания
        let loaderTimeout;
        
        function hideLoader() {
            const spinner = document.querySelector('.spinner-wrapper');
            if (spinner) {
                spinner.style.opacity = '0';
                setTimeout(function() {
                    spinner.style.display = 'none';
                }, 500);
            }
            
            // Добавляем класс для анимации страницы
            document.body.classList.add('page-transition');
            
            // Отмена таймера, если загрузка произошла естественным образом
            if (loaderTimeout) {
                clearTimeout(loaderTimeout);
            }
        }
        
        // Установить максимальное время ожидания загрузки (3 секунды)
        loaderTimeout = setTimeout(hideLoader, 3000);
        
        window.addEventListener('load', function() {
            hideLoader();
            
            // Добавление анимации элементам при скролле
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = function() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('active');
                    }
                });
            };
            
            // Запускаем один раз для элементов, видимых при загрузке
            fadeInOnScroll();
            
            // И при скролле
            window.addEventListener('scroll', fadeInOnScroll);
        });
    </script>
</body>
</html>
<?php $this->endPage() ?>
