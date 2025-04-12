<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
$this->params['meta_description'] = 'Химчистка Бриллиант - профессиональная чистка одежды, ковров и мебели. Современное оборудование, безопасные технологии, опытные специалисты.';
$this->params['meta_keywords'] = 'химчистка, химчистка Бриллиант, чистка одежды, чистка ковров, чистка мебели';
?>

<div class="site-index">
    <!-- Баннер -->
    <div class="banner p-5 mb-5 mt-5 text-white rounded shadow fade-in">
        <div class="container">
            <h1 class="display-4 fw-bold">Химчистка "Бриллиант"</h1>
            <p class="lead">Мы вернем вашим вещам первозданный вид!</p>
            <hr class="my-4">
            <p>Профессиональные услуги химчистки одежды, ковров, мягкой мебели и многого другого. Используем только современное оборудование и безопасные технологии.</p>
            <div class="mt-4">
                <a class="btn btn-light btn-lg" href="<?= \yii\helpers\Url::to(['/site/prices']) ?>">Узнать цены</a>
                <a class="btn btn-outline-light btn-lg" href="<?= \yii\helpers\Url::to(['/site/contact']) ?>">Связаться с нами</a>
            </div>
        </div>
    </div>

    <!-- Преимущества -->
    <section id="advantages" class="mb-5 fade-in">
        <div class="section-heading">
            <h2>Наши преимущества</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm hover-animate fade-in">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fa fa-clock-o fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Быстрое выполнение</h3>
                        <p class="card-text">Выполняем срочные заказы менее чем за 24 часа. Стандартный срок - 2-3 дня.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm hover-animate fade-in">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fa fa-diamond fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Безупречное качество</h3>
                        <p class="card-text">Используем профессиональное оборудование и безопасные для здоровья средства.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm hover-animate fade-in">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fa fa-money fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Доступные цены</h3>
                        <p class="card-text">Предлагаем оптимальное соотношение цены и качества. Регулярные скидки и акции.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section id="services" class="mb-5 fade-in">
        <div class="section-heading">
            <h2>Наши услуги</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm service-card hover-animate fade-in">
                    <div class="service-image-container">
                        <img src="<?= Yii::getAlias('@web') ?>/images/services/clothes-cleaning.jpg" class="card-img-top service-image" alt="Чистка одежды" onerror="this.src='<?= Yii::getAlias('@web') ?>/images/services/placeholder.svg'">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h5">Чистка одежды</h3>
                        <p class="card-text">Профессиональная чистка всех видов одежды, включая деликатные ткани.</p>
                        <a href="<?= \yii\helpers\Url::to(['/site/prices']) ?>" class="btn btn-sm btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm service-card hover-animate fade-in">
                    <div class="service-image-container">
                        <img src="<?= Yii::getAlias('@web') ?>/images/services/carpet-cleaning.jpg" class="card-img-top service-image" alt="Чистка ковров" onerror="this.src='<?= Yii::getAlias('@web') ?>/images/services/placeholder.svg'">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h5">Чистка ковров</h3>
                        <p class="card-text">Глубокая чистка ковров и ковровых покрытий с удалением пятен и запахов.</p>
                        <a href="<?= \yii\helpers\Url::to(['/site/prices']) ?>" class="btn btn-sm btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm service-card hover-animate fade-in">
                    <div class="service-image-container">
                        <img src="<?= Yii::getAlias('@web') ?>/images/services/furniture-cleaning.jpg" class="card-img-top service-image" alt="Чистка мебели" onerror="this.src='<?= Yii::getAlias('@web') ?>/images/services/placeholder.svg'">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h5">Чистка мебели</h3>
                        <p class="card-text">Чистка диванов, кресел, матрасов и другой мягкой мебели.</p>
                        <a href="<?= \yii\helpers\Url::to(['/site/prices']) ?>" class="btn btn-sm btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm service-card hover-animate fade-in">
                    <div class="service-image-container">
                        <img src="<?= Yii::getAlias('@web') ?>/images/services/additional-services.jpg" class="card-img-top service-image" alt="Дополнительные услуги" onerror="this.src='<?= Yii::getAlias('@web') ?>/images/services/placeholder.svg'">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h5">Дополнительные услуги</h3>
                        <p class="card-text">Глажка, мелкий ремонт одежды, пропитка, чистка сумок и обуви.</p>
                        <a href="<?= \yii\helpers\Url::to(['/site/prices']) ?>" class="btn btn-sm btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Отзывы клиентов -->
    <section id="testimonials" class="mb-5 fade-in">
        <div class="section-heading">
            <h2>Отзывы наших клиентов</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm testimonial-card hover-animate fade-in">
                    <div class="card-body">
                        <div class="mb-2 text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="card-text">«Отличная химчистка! Испачкала любимое платье на свадьбе подруги, думала уже выбрасывать, но мастера "Бриллианта" спасли его. Теперь я только здесь!»</p>
                        <footer class="blockquote-footer">Анна, клиент с 2021 года</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm testimonial-card hover-animate fade-in">
                    <div class="card-body">
                        <div class="mb-2 text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="card-text">«Заказывал чистку офисных стульев и диванов. Всё сделали очень качественно, быстро и по разумной цене. Рекомендую для корпоративных заказов.»</p>
                        <footer class="blockquote-footer">Сергей, директор ООО "Альфа"</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm testimonial-card hover-animate fade-in">
                    <div class="card-body">
                        <div class="mb-2 text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p class="card-text">«Регулярно пользуюсь услугами химчистки для своих ковров. Результат всегда радует. Приятные сотрудники, удобный сервис, хорошее качество.»</p>
                        <footer class="blockquote-footer">Елена, клиент с 2019 года</footer>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-3">
                <a href="<?= \yii\helpers\Url::to(['/site/reviews']) ?>" class="btn btn-outline-primary">Смотреть все отзывы</a>
            </div>
        </div>
    </section>

    <!-- Призыв к действию -->
    <div class="p-5 mb-4 bg-gradient-success text-white rounded shadow fade-in">
        <div class="container text-center">
            <h2>Готовы вернуть своим вещам первозданный вид?</h2>
            <p class="lead">Свяжитесь с нами сегодня и получите скидку 10% на первый заказ!</p>
            <a class="btn btn-light btn-lg mt-3" href="<?= \yii\helpers\Url::to(['/site/contact']) ?>">Заказать услугу</a>
        </div>
    </div>
</div>
