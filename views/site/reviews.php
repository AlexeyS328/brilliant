<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Отзывы наших клиентов о химчистке Бриллиант. Что говорят о нас клиенты и партнеры. Независимые мнения о качестве наших услуг.';
$this->params['meta_keywords'] = 'отзывы о химчистке, мнения клиентов, рекомендации химчистки, отзывы Бриллиант, оценки химчистки';
?>
<div class="site-reviews">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>
            
            <div class="card shadow-sm mb-5">
                <div class="card-body">
                    <h2 class="h4 mb-3">Отзывы наших клиентов</h2>
                    <p>В этом разделе мы собрали отзывы реальных клиентов о работе химчистки "Бриллиант". Мы ценим мнение каждого клиента и стремимся сделать наш сервис еще лучше с учетом ваших пожеланий и рекомендаций.</p>
                    <p>Если вы уже воспользовались услугами нашей химчистки, будем рады, если вы также оставите свой отзыв.</p>
                </div>
            </div>
            
            <!-- Статистика отзывов -->
            <div class="card shadow-sm mb-5">
                <div class="card-header bg-gradient-primary text-white">
                    <h2 class="h4 mb-0">Нас оценивают</h2>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-4 mb-md-0 text-center">
                            <div class="display-4 text-primary fw-bold">4.8</div>
                            <div class="mb-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star-half-o text-warning"></i>
                            </div>
                            <p class="mb-0 text-muted">средняя оценка</p>
                            <p class="mb-0">более 500 отзывов</p>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-2">5 <i class="fa fa-star text-warning"></i></div>
                                <div class="flex-grow-1">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ms-2">85%</div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-2">4 <i class="fa fa-star text-warning"></i></div>
                                <div class="flex-grow-1">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ms-2">10%</div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-2">3 <i class="fa fa-star text-warning"></i></div>
                                <div class="flex-grow-1">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ms-2">3%</div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-2">2 <i class="fa fa-star text-warning"></i></div>
                                <div class="flex-grow-1">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ms-2">1%</div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-2">1 <i class="fa fa-star text-warning"></i></div>
                                <div class="flex-grow-1">
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ms-2">1%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Отзывы клиентов -->
            <div class="mb-5">
                <h2 class="h4 mb-4 text-center">Отзывы клиентов</h2>
                
                <!-- Отзыв 1 -->
                <div class="card shadow-sm mb-4 hover-animate">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user text-primary"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h3 class="h5 mb-1">Анна Иванова</h3>
                                <div class="mb-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <p class="text-muted small mb-0">Клиент с 2021 года</p>
                            </div>
                            <div class="ms-auto text-muted small">
                                20.05.2023
                            </div>
                        </div>
                        <p>Великолепный сервис! Сдавала в чистку свадебное платье, очень переживала, но результат превзошел ожидания. Все пятна исчезли, платье выглядит как новое. Отдельное спасибо персоналу за внимательность и рекомендации по дальнейшему хранению платья.</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark me-2">Чистка свадебного платья</span>
                            <span class="badge bg-light text-dark">Удаление пятен</span>
                        </div>
                    </div>
                </div>
                
                <!-- Отзыв 2 -->
                <div class="card shadow-sm mb-4 hover-animate">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user text-primary"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h3 class="h5 mb-1">Сергей Петров</h3>
                                <div class="mb-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <p class="text-muted small mb-0">Директор ООО "Альфа"</p>
                            </div>
                            <div class="ms-auto text-muted small">
                                12.04.2023
                            </div>
                        </div>
                        <p>Наша компания заключила корпоративный договор с химчисткой "Бриллиант" на регулярную чистку офисных стульев и диванов. Качество работы всегда на высоте, сроки соблюдаются. Особенно ценим гибкий подход к нашим запросам и возможность срочного обслуживания при необходимости.</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark me-2">Корпоративное обслуживание</span>
                            <span class="badge bg-light text-dark">Чистка офисной мебели</span>
                        </div>
                    </div>
                </div>
                
                <!-- Отзыв 3 -->
                <div class="card shadow-sm mb-4 hover-animate">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user text-primary"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h3 class="h5 mb-1">Елена Соколова</h3>
                                <div class="mb-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-half-o text-warning"></i>
                                </div>
                                <p class="text-muted small mb-0">Клиент с 2019 года</p>
                            </div>
                            <div class="ms-auto text-muted small">
                                05.03.2023
                            </div>
                        </div>
                        <p>Регулярно пользуюсь услугами химчистки для своих ковров. Результат всегда радует — ковры выглядят как новые, запахи исчезают, цвета становятся ярче. Единственное замечание: однажды сроки выполнения заказа были немного сдвинуты, но меня предупредили заранее. В целом сервис отличный, рекомендую!</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark me-2">Чистка ковров</span>
                            <span class="badge bg-light text-dark">Удаление запахов</span>
                        </div>
                    </div>
                </div>
                
                <!-- Отзыв 4 -->
                <div class="card shadow-sm mb-4 hover-animate">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user text-primary"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h3 class="h5 mb-1">Дмитрий Козлов</h3>
                                <div class="mb-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-o text-warning"></i>
                                </div>
                                <p class="text-muted small mb-0">Новый клиент</p>
                            </div>
                            <div class="ms-auto text-muted small">
                                18.02.2023
                            </div>
                        </div>
                        <p>Впервые воспользовался услугами химчистки для зимней куртки. Очень доволен результатом — все пятна удалены, куртка выглядит отлично. Немного дольше выполняли заказ, чем было обещано, но качество работы компенсировало это. Буду рекомендовать друзьям.</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark me-2">Чистка верхней одежды</span>
                            <span class="badge bg-light text-dark">Удаление пятен</span>
                        </div>
                    </div>
                </div>
                
                <!-- Отзыв 5 -->
                <div class="card shadow-sm mb-4 hover-animate">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user text-primary"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h3 class="h5 mb-1">Мария Николаева</h3>
                                <div class="mb-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <p class="text-muted small mb-0">Владелица салона красоты</p>
                            </div>
                            <div class="ms-auto text-muted small">
                                10.01.2023
                            </div>
                        </div>
                        <p>Наш салон красоты сотрудничает с химчисткой "Бриллиант" уже второй год. Отдаем на чистку полотенца, униформу и текстиль. Очень довольны сервисом — все всегда чисто, свежо и доставляется точно в срок. Особая благодарность за умение выводить пятна от красок и других косметических средств!</p>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark me-2">Корпоративное обслуживание</span>
                            <span class="badge bg-light text-dark">Чистка текстиля</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Оставить отзыв -->
            <div class="card shadow-sm mb-5">
                <div class="card-header bg-gradient-success text-white">
                    <h2 class="h4 mb-0">Оставить отзыв</h2>
                </div>
                <div class="card-body">
                    <p class="text-center mb-4">Поделитесь своим мнением о работе химчистки "Бриллиант". Ваши отзывы помогают нам становиться лучше!</p>
                    <div class="text-center">
                        <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="btn btn-primary">Оставить отзыв</a>
                    </div>
                </div>
            </div>
            
            <!-- Навигация по страницам с отзывами -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="<?= \yii\helpers\Url::to(['/site/reviews', 'page' => $currentPage - 1]) ?>" tabindex="-1" <?= ($currentPage <= 1) ? 'aria-disabled="true"' : '' ?>>Предыдущая</a>
                    </li>
                    
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                            <a class="page-link" href="<?= \yii\helpers\Url::to(['/site/reviews', 'page' => $i]) ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    
                    <li class="page-item <?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
                        <a class="page-link" href="<?= \yii\helpers\Url::to(['/site/reviews', 'page' => $currentPage + 1]) ?>" <?= ($currentPage >= $totalPages) ? 'aria-disabled="true"' : '' ?>>Следующая</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div> 