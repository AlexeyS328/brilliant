<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Узнайте больше о химчистке Бриллиант. Наша история, ценности, команда профессионалов и технологии.';
$this->params['meta_keywords'] = 'о химчистке, химчистка Бриллиант, история химчистки, специалисты химчистки, экологичная химчистка';
?>
<div class="site-about">
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>
            <div class="card shadow-sm mb-5">
                <div class="card-body">
                    <h2 class="h4 mb-3">О компании "Бриллиант"</h2>
                    <p>Химчистка "Бриллиант" основана в 2010 году и за это время зарекомендовала себя как надежный партнер в уходе за вашими вещами. Мы специализируемся на профессиональной чистке одежды, ковров, мягкой мебели и других текстильных изделий.</p>
                    <p>Наша миссия — сделать профессиональный уход за вещами доступным для каждого. Мы помогаем нашим клиентам продлить срок службы любимых вещей, возвращая им первозданный вид и свежесть.</p>
                </div>
            </div>
            
            <div class="row mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Наши ценности</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-primary text-white rounded-circle p-2 me-3"><i class="fa fa-check"></i></span>
                                        <div>
                                            <h3 class="h6 mb-1">Качество</h3>
                                            <p class="mb-0">Мы не экономим на качестве и используем только профессиональное оборудование и средства.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-primary text-white rounded-circle p-2 me-3"><i class="fa fa-clock-o"></i></span>
                                        <div>
                                            <h3 class="h6 mb-1">Оперативность</h3>
                                            <p class="mb-0">Ценим ваше время и выполняем заказы в кратчайшие сроки.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <span class="bg-primary text-white rounded-circle p-2 me-3"><i class="fa fa-leaf"></i></span>
                                        <div>
                                            <h3 class="h6 mb-1">Экологичность</h3>
                                            <p class="mb-0">Заботимся о природе, используя безопасные и биоразлагаемые средства.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Наши технологии</h2>
                            <p>В химчистке "Бриллиант" мы используем современные методы и профессиональное оборудование:</p>
                            <ul>
                                <li>Аквачистка (система Wet Cleaning) - безопасная альтернатива сухой чистке</li>
                                <li>Органическая чистка с использованием биоразлагаемых растворителей</li>
                                <li>Традиционная сухая чистка для деликатных тканей</li>
                                <li>Пятновыводка с использованием профессиональных средств</li>
                                <li>Паровая чистка и дезинфекция</li>
                                <li>Профессиональная глажка</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm mb-5">
                <div class="card-body">
                    <h2 class="h4 mb-3">Наша команда</h2>
                    <p>В химчистке "Бриллиант" работают опытные специалисты, прошедшие профессиональное обучение и регулярно повышающие свою квалификацию. Мы знаем особенности работы с различными типами тканей и материалов, умеем удалять даже самые сложные загрязнения.</p>
                    <p>Сотрудники нашей компании всегда готовы проконсультировать вас по вопросам ухода за вещами и помочь выбрать оптимальный способ чистки.</p>
                </div>
            </div>
            
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-3">Сертификаты и достижения</h2>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-certificate fa-3x mb-3 text-primary"></i>
                                <h3 class="h6 text-center">Сертификат качества ISO 9001</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-trophy fa-3x mb-3 text-primary"></i>
                                <h3 class="h6 text-center">Лучшая химчистка города 2022</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-leaf fa-3x mb-3 text-primary"></i>
                                <h3 class="h6 text-center">Сертификат экологической безопасности</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-users fa-3x mb-3 text-primary"></i>
                                <h3 class="h6 text-center">Более 10 000 довольных клиентов</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
