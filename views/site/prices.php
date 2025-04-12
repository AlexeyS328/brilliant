<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Цены';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Прайс-лист на услуги химчистки Бриллиант. Доступные цены на чистку одежды, ковров, мебели и других изделий.';
$this->params['meta_keywords'] = 'цены химчистки, стоимость химчистки, прайс-лист химчистки, цены на чистку одежды, стоимость чистки ковров';
?>
<div class="site-prices">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>
            
            <div class="alert alert-info mb-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa fa-info-circle fa-2x"></i>
                    </div>
                    <div>
                        <h2 class="h5 alert-heading">Обратите внимание!</h2>
                        <p class="mb-0">Указанные цены являются базовыми. Окончательная стоимость зависит от сложности работы, степени загрязнения и других факторов. Для получения точной информации обратитесь к нашим специалистам.</p>
                    </div>
                </div>
            </div>
            
            <!-- Чистка одежды -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">Чистка одежды</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Наименование</th>
                                    <th class="text-end">Цена (₽)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Пальто / Плащ</td>
                                    <td class="text-end">от 1200</td>
                                </tr>
                                <tr>
                                    <td>Куртка / Пуховик</td>
                                    <td class="text-end">от 1500</td>
                                </tr>
                                <tr>
                                    <td>Костюм мужской (пиджак + брюки)</td>
                                    <td class="text-end">от 1000</td>
                                </tr>
                                <tr>
                                    <td>Пиджак / Жакет</td>
                                    <td class="text-end">от 600</td>
                                </tr>
                                <tr>
                                    <td>Брюки</td>
                                    <td class="text-end">от 400</td>
                                </tr>
                                <tr>
                                    <td>Платье вечернее</td>
                                    <td class="text-end">от 1200</td>
                                </tr>
                                <tr>
                                    <td>Платье повседневное</td>
                                    <td class="text-end">от 700</td>
                                </tr>
                                <tr>
                                    <td>Рубашка / Блузка</td>
                                    <td class="text-end">от 350</td>
                                </tr>
                                <tr>
                                    <td>Юбка</td>
                                    <td class="text-end">от 400</td>
                                </tr>
                                <tr>
                                    <td>Шарф / Палантин</td>
                                    <td class="text-end">от 300</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Чистка ковров -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">Чистка ковров и ковровых покрытий</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Наименование</th>
                                    <th class="text-end">Цена (₽/м²)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ковры синтетические</td>
                                    <td class="text-end">от 250</td>
                                </tr>
                                <tr>
                                    <td>Ковры шерстяные</td>
                                    <td class="text-end">от 350</td>
                                </tr>
                                <tr>
                                    <td>Ковры шелковые</td>
                                    <td class="text-end">от 450</td>
                                </tr>
                                <tr>
                                    <td>Ковролин</td>
                                    <td class="text-end">от 200</td>
                                </tr>
                                <tr>
                                    <td>Ковры с длинным ворсом</td>
                                    <td class="text-end">от 400</td>
                                </tr>
                                <tr>
                                    <td>Ковры антикварные / ручной работы</td>
                                    <td class="text-end">от 650</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-light border mt-3 mb-0">
                        <small>* Минимальная стоимость заказа на чистку ковров – 1500 ₽</small>
                    </div>
                </div>
            </div>
            
            <!-- Чистка мебели -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">Чистка мягкой мебели</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Наименование</th>
                                    <th class="text-end">Цена (₽)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Диван 2-местный</td>
                                    <td class="text-end">от 2000</td>
                                </tr>
                                <tr>
                                    <td>Диван 3-местный</td>
                                    <td class="text-end">от 2500</td>
                                </tr>
                                <tr>
                                    <td>Диван угловой</td>
                                    <td class="text-end">от 3500</td>
                                </tr>
                                <tr>
                                    <td>Кресло</td>
                                    <td class="text-end">от 1000</td>
                                </tr>
                                <tr>
                                    <td>Стул обеденный</td>
                                    <td class="text-end">от 350</td>
                                </tr>
                                <tr>
                                    <td>Стул офисный</td>
                                    <td class="text-end">от 500</td>
                                </tr>
                                <tr>
                                    <td>Матрас односпальный</td>
                                    <td class="text-end">от 1500</td>
                                </tr>
                                <tr>
                                    <td>Матрас двуспальный</td>
                                    <td class="text-end">от 2500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Дополнительные услуги -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">Дополнительные услуги</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Наименование</th>
                                    <th class="text-end">Цена (₽)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Удаление сложных пятен</td>
                                    <td class="text-end">от 200</td>
                                </tr>
                                <tr>
                                    <td>Глажка рубашки</td>
                                    <td class="text-end">от 150</td>
                                </tr>
                                <tr>
                                    <td>Защитная пропитка одежды</td>
                                    <td class="text-end">от 300</td>
                                </tr>
                                <tr>
                                    <td>Защитная пропитка мебели</td>
                                    <td class="text-end">от 500/м²</td>
                                </tr>
                                <tr>
                                    <td>Мелкий ремонт одежды</td>
                                    <td class="text-end">от 200</td>
                                </tr>
                                <tr>
                                    <td>Чистка сумок</td>
                                    <td class="text-end">от 800</td>
                                </tr>
                                <tr>
                                    <td>Чистка обуви</td>
                                    <td class="text-end">от 700</td>
                                </tr>
                                <tr>
                                    <td>Дезинфекция и дезодорация</td>
                                    <td class="text-end">от 300</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Скидки -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h2 class="h4 mb-0">Действующие скидки и акции</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge bg-primary rounded-pill me-3">10%</span>
                            <div>
                                <strong>Скидка новым клиентам</strong> — на первый заказ
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge bg-primary rounded-pill me-3">15%</span>
                            <div>
                                <strong>Скидка постоянным клиентам</strong> — при заказе от 3000 ₽
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge bg-primary rounded-pill me-3">20%</span>
                            <div>
                                <strong>Корпоративная скидка</strong> — для организаций при заключении договора
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge bg-primary rounded-pill me-3">5%</span>
                            <div>
                                <strong>Скидка в день рождения</strong> — в течение недели до и после дня рождения
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-5 mb-4">
                <p class="lead">Остались вопросы? Свяжитесь с нами!</p>
                <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="btn btn-primary">Задать вопрос</a>
            </div>
        </div>
    </div>
</div> 