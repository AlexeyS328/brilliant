<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Свяжитесь с химчисткой Бриллиант. Задайте вопрос, оставьте заявку или отзыв. Наши контактные данные и форма обратной связи.';
$this->params['meta_keywords'] = 'контакты химчистки, связаться с химчисткой, телефон химчистки, адрес химчистки, заказать химчистку';
?>
<div class="site-contact">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div class="alert alert-success">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="fa fa-check-circle fa-2x"></i>
                        </div>
                        <div>
                            <h2 class="h5 alert-heading">Спасибо за ваше сообщение!</h2>
                            <p class="mb-0">Мы получили ваше обращение и ответим вам в ближайшее время.</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <p>Хотите вернуться на главную страницу или узнать больше о наших услугах?</p>
                        <div>
                            <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>" class="btn btn-primary me-2">На главную</a>
                            <a href="<?= \yii\helpers\Url::to(['/site/prices']) ?>" class="btn btn-outline-primary">Наши цены</a>
                        </div>
                    </div>
                </div>

                <?php if (Yii::$app->mailer->useFileTransport): ?>
                    <div class="alert alert-info">
                        <p class="mb-0"><small>Сайт работает в режиме разработки, поэтому письмо не отправлено, а сохранено в файле в директории <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.</small></p>
                    </div>
                <?php endif; ?>

            <?php else: ?>
                <div class="row mb-5">
                    <!-- Контактная информация -->
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h2 class="h4 mb-0">Наши контакты</h2>
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
                    
                    <!-- Форма обратной связи -->
                    <div class="col-md-7">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h2 class="h4 mb-0">Напишите нам</h2>
                            </div>
                            <div class="card-body">
                                <p class="mb-4">Если у вас есть вопросы, предложения или вы хотите оставить заявку на услуги, заполните форму ниже:</p>
                                
                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Иван Иванов'])->label('Ваше имя') ?>

                                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'email@example.com'])->label('Email') ?>

                                    <?= $form->field($model, 'subject')->dropDownList([
                                        'Вопрос' => 'Вопрос о услугах',
                                        'Заказ' => 'Заказ услуги',
                                        'Отзыв' => 'Оставить отзыв',
                                        'Сотрудничество' => 'Предложение о сотрудничестве',
                                        'Другое' => 'Другое',
                                    ], ['prompt' => 'Выберите тему'])->label('Тема сообщения') ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 5, 'placeholder' => 'Текст вашего сообщения'])->label('Сообщение') ?>

                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8">{input}</div></div>',
                                    ])->label('Проверочный код') ?>

                                    <div class="form-group text-center">
                                        <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                    </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Социальные сети -->
                <div class="card shadow-sm mb-5">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Мы в социальных сетях</h2>
                    </div>
                    <div class="card-body text-center">
                        <p>Подписывайтесь на наши страницы в социальных сетях и будьте в курсе наших акций и новостей!</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-outline-primary me-2 mb-2">
                                <i class="fa fa-vk"></i> ВКонтакте
                            </a>
                            <a href="#" class="btn btn-outline-primary me-2 mb-2">
                                <i class="fa fa-telegram"></i> Telegram
                            </a>
                            <a href="#" class="btn btn-outline-primary me-2 mb-2">
                                <i class="fa fa-instagram"></i> Instagram
                            </a>
                            <a href="#" class="btn btn-outline-primary mb-2">
                                <i class="fa fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Карта -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Мы на карте</h2>
                    </div>
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.0!2d30.0!3d50.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDAwJzAwLjAiTiAzMMKwMDAnMDAuMCJF!5e0!3m2!1sru!2sru!4v1629400000000!5m2!1sru!2sru" 
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
