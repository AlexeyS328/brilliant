<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Как найти?';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Химчистка Бриллиант на карте города. Адрес, как проехать, контактные данные, часы работы химчистки.';
$this->params['meta_keywords'] = 'адрес химчистки, найти химчистку, как проехать, карта химчистки, контакты химчистки';
?>
<div class="site-how-to-find">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>
            
            <div class="row mb-5">
                <!-- Контактная информация -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h2 class="h4 mb-0">Контактная информация</h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="fa fa-map-marker fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h3 class="h6">Адрес:</h3>
                                            <p>г. Ваш город, ул. Примерная, д. 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="fa fa-phone fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h3 class="h6">Телефоны:</h3>
                                            <p>+7 (XXX) XXX-XX-XX<br>+7 (XXX) XXX-XX-XX</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="fa fa-envelope fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h3 class="h6">Email:</h3>
                                            <p>info@brilliant-clean.ru</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="fa fa-clock-o fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h3 class="h6">Режим работы:</h3>
                                            <p>Пн-Пт: 8:00 - 20:00<br>
                                            Сб-Вс: 9:00 - 18:00</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Карта -->
                <div class="col-lg-8">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h2 class="h4 mb-0">Мы на карте</h2>
                        </div>
                        <div class="card-body p-0">
                            <!-- Здесь будет карта. Для примера используем изображение -->
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.0!2d30.0!3d50.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDAwJzAwLjAiTiAzMMKwMDAnMDAuMCJF!5e0!3m2!1sru!2sru!4v1629400000000!5m2!1sru!2sru" 
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Как добраться -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h2 class="h4 mb-0">Как добраться</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="bg-primary text-white rounded-circle p-2">
                                                <i class="fa fa-subway"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5">На общественном транспорте</h3>
                                            <ul>
                                                <li><strong>Метро:</strong> станция "Название", выход к улице Такой-то.</li>
                                                <li><strong>Автобус:</strong> маршруты №123, №456 до остановки "Название".</li>
                                                <li><strong>Троллейбус:</strong> маршрут №78 до остановки "Название".</li>
                                            </ul>
                                            <p>От остановки пройти 200 метров по улице Примерной в сторону торгового центра.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="bg-primary text-white rounded-circle p-2">
                                                <i class="fa fa-car"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5">На автомобиле</h3>
                                            <p>С проспекта Главного поверните на улицу Примерную. Проедьте 300 метров до перекрестка с улицей Такой-то. Химчистка находится в здании желтого цвета с правой стороны.</p>
                                            <p><strong>Парковка:</strong> Бесплатная парковка для клиентов доступна на территории торгового центра (2 часа).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="bg-primary text-white rounded-circle p-2">
                                                <i class="fa fa-bicycle"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5">На велосипеде</h3>
                                            <p>Рядом с химчисткой есть велосипедная дорожка, проходящая по улице Примерной. Велопарковка находится у входа в здание.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="bg-primary text-white rounded-circle p-2">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5">Ориентиры</h3>
                                            <p>Химчистка расположена в здании желтого цвета рядом с торговым центром "Название". На первом этаже находится кофейня "Название".</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Филиалы -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h2 class="h4 mb-0">Наши филиалы</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="h5 mb-3">Химчистка "Бриллиант" в ТЦ "Название"</h3>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fa fa-map-marker text-primary me-2"></i> г. Ваш город, ул. Вторая, д. 45, ТЦ "Название", 2 этаж</li>
                                                <li class="mb-2"><i class="fa fa-phone text-primary me-2"></i> +7 (XXX) XXX-XX-XX</li>
                                                <li class="mb-2"><i class="fa fa-clock-o text-primary me-2"></i> 10:00 - 22:00 (без выходных)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="h5 mb-3">Химчистка "Бриллиант" в районе "Название"</h3>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fa fa-map-marker text-primary me-2"></i> г. Ваш город, ул. Третья, д. 78</li>
                                                <li class="mb-2"><i class="fa fa-phone text-primary me-2"></i> +7 (XXX) XXX-XX-XX</li>
                                                <li class="mb-2"><i class="fa fa-clock-o text-primary me-2"></i> 8:00 - 20:00 (Пн-Сб), выходной - Вс</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Форма обратной связи -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h2 class="h4 mb-0">Нужна помощь с навигацией?</h2>
                        </div>
                        <div class="card-body">
                            <p class="text-center mb-4">Если у вас возникли трудности с поиском нашей химчистки, свяжитесь с нами, и мы поможем вам!</p>
                            <div class="text-center">
                                <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="btn btn-primary">Связаться с нами</a>
                                <a href="tel:+7XXXXXXXXXX" class="btn btn-outline-primary">Позвонить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 