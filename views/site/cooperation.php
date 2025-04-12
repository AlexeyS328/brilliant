<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Сотрудничество';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Предложения для бизнеса по сотрудничеству с химчисткой Бриллиант. Корпоративное обслуживание, персональные условия для компаний, скидки для партнеров.';
$this->params['meta_keywords'] = 'сотрудничество с химчисткой, корпоративные клиенты, бизнес-партнерство, химчистка для организаций, корпоративное обслуживание';
?>
<div class="site-cooperation">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-center mb-5"><?= Html::encode($this->title) ?></h1>
                
                <!-- Вступительный текст -->
                <div class="card shadow-sm mb-5">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h4 mb-3">Партнерство для вашего бизнеса</h2>
                        <p>Химчистка "Бриллиант" предлагает специальные условия сотрудничества для компаний и организаций. Мы обслуживаем гостиницы, рестораны, салоны красоты, медицинские центры, офисы и другие предприятия, которым важно поддерживать чистоту и презентабельный вид текстиля, мебели и других поверхностей.</p>
                        <p>Наш индивидуальный подход к каждому партнеру позволяет создать оптимальную программу обслуживания с учетом специфики вашего бизнеса.</p>
                        
                        <div class="text-center mt-4">
                            <a href="#request-form" class="btn btn-primary">Оставить заявку на сотрудничество</a>
                        </div>
                    </div>
                </div>
                
                <!-- Преимущества для партнеров -->
                <h2 class="h3 text-center mb-4">Преимущества сотрудничества</h2>
                
                <div class="row mb-5">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm hover-animate">
                            <div class="card-body text-center p-4">
                                <div class="icon-box mb-3">
                                    <i class="fa fa-percent fa-2x text-primary"></i>
                                </div>
                                <h3 class="h5">Специальные цены</h3>
                                <p class="mb-0">Гибкая система скидок для корпоративных клиентов в зависимости от объема и регулярности заказов</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm hover-animate">
                            <div class="card-body text-center p-4">
                                <div class="icon-box mb-3">
                                    <i class="fa fa-calendar-check-o fa-2x text-primary"></i>
                                </div>
                                <h3 class="h5">Приоритетное обслуживание</h3>
                                <p class="mb-0">Выполнение заказов в кратчайшие сроки с возможностью срочного обслуживания</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm hover-animate">
                            <div class="card-body text-center p-4">
                                <div class="icon-box mb-3">
                                    <i class="fa fa-truck fa-2x text-primary"></i>
                                </div>
                                <h3 class="h5">Бесплатная доставка</h3>
                                <p class="mb-0">Забираем и привозим заказы в удобное для вас время без дополнительной платы</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm hover-animate">
                            <div class="card-body text-center p-4">
                                <div class="icon-box mb-3">
                                    <i class="fa fa-file-text-o fa-2x text-primary"></i>
                                </div>
                                <h3 class="h5">Удобная отчетность</h3>
                                <p class="mb-0">Полный пакет документов для бухгалтерии, детализированные отчеты по оказанным услугам</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm hover-animate">
                            <div class="card-body text-center p-4">
                                <div class="icon-box mb-3">
                                    <i class="fa fa-user-plus fa-2x text-primary"></i>
                                </div>
                                <h3 class="h5">Персональный менеджер</h3>
                                <p class="mb-0">Выделенный специалист для решения всех вопросов по вашему обслуживанию</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm hover-animate">
                            <div class="card-body text-center p-4">
                                <div class="icon-box mb-3">
                                    <i class="fa fa-handshake-o fa-2x text-primary"></i>
                                </div>
                                <h3 class="h5">Гибкие условия оплаты</h3>
                                <p class="mb-0">Возможность отсрочки платежа и безналичного расчета для постоянных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Направления сотрудничества -->
                <div class="card shadow-sm bg-light mb-5">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 text-center mb-4">Кому подойдет наше сотрудничество</h2>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fa fa-hotel fa-2x text-primary me-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Гостиницы и отели</h3>
                                        <p>Профессиональная чистка постельного белья, полотенец, штор, ковровых покрытий и мягкой мебели</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fa fa-cutlery fa-2x text-primary me-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Рестораны и кафе</h3>
                                        <p>Чистка скатертей, салфеток, чехлов для стульев, униформы персонала, гардин и занавесей</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fa fa-building fa-2x text-primary me-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Офисные центры</h3>
                                        <p>Регулярная чистка офисных стульев, диванов, ковролина, штор и текстильных перегородок</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fa fa-scissors fa-2x text-primary me-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Салоны красоты и SPA</h3>
                                        <p>Чистка полотенец, халатов, накидок, чехлов для кушеток и униформы сотрудников</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fa fa-medkit fa-2x text-primary me-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Медицинские учреждения</h3>
                                        <p>Специализированная обработка медицинского текстиля с соблюдением санитарных норм</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fa fa-shopping-bag fa-2x text-primary me-3"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Магазины одежды</h3>
                                        <p>Предпродажная подготовка, чистка и отпаривание одежды, химчистка демонстрационных образцов</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Как мы работаем -->
                <h2 class="h3 text-center mb-4">Как мы работаем</h2>
                
                <div class="row mb-5">
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="card bg-gradient-primary text-white text-center h-100">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="display-4 fw-bold mb-2">01</div>
                                <h3 class="h5">Обсуждение потребностей</h3>
                                <p class="mb-0 small">Определяем объем работ и специфику вашего бизнеса</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="card bg-gradient-primary text-white text-center h-100">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="display-4 fw-bold mb-2">02</div>
                                <h3 class="h5">Составление предложения</h3>
                                <p class="mb-0 small">Формируем индивидуальные условия и расценки</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="card bg-gradient-primary text-white text-center h-100">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="display-4 fw-bold mb-2">03</div>
                                <h3 class="h5">Заключение договора</h3>
                                <p class="mb-0 small">Подписываем договор с учетом всех деталей сотрудничества</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="card bg-gradient-primary text-white text-center h-100">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="display-4 fw-bold mb-2">04</div>
                                <h3 class="h5">Начало обслуживания</h3>
                                <p class="mb-0 small">Выполняем работы согласно установленному графику</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Отзывы партнеров -->
                <h2 class="h3 text-center mb-4">Отзывы наших партнеров</h2>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-building text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="h5 mb-1">ООО "Гранд Отель"</h3>
                                        <p class="text-muted small mb-0">Партнер с 2019 года</p>
                                    </div>
                                </div>
                                <p>"Сотрудничаем с химчисткой "Бриллиант" уже 4 года. Очень довольны качеством чистки постельного белья, полотенец и штор. Безупречный сервис и всегда своевременная доставка. Особенно ценим оперативность при срочных заказах и индивидуальный подход к нашим потребностям."</p>
                                <p class="small text-end mb-0">— Мария Степанова, управляющая отелем</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <div class="review-avatar bg-light rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-cutlery text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="h5 mb-1">Ресторан "Престиж"</h3>
                                        <p class="text-muted small mb-0">Партнер с 2020 года</p>
                                    </div>
                                </div>
                                <p>"После начала сотрудничества с химчисткой "Бриллиант" наши скатерти и салфетки всегда выглядят безупречно. Даже самые сложные загрязнения удаляются без следа. Удобный график вывоза и доставки позволяет нам всегда иметь необходимый запас чистого текстиля. Рекомендуем всем ресторанам!"</p>
                                <p class="small text-end mb-0">— Алексей Воронов, директор ресторана</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Форма заявки -->
                <div id="request-form" class="card shadow mb-5">
                    <div class="card-header bg-gradient-primary text-white">
                        <h2 class="h4 mb-0">Оставить заявку на сотрудничество</h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <p class="text-center mb-4">Заполните форму ниже, и наш менеджер свяжется с вами в течение одного рабочего дня для обсуждения деталей сотрудничества.</p>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="company" class="form-label">Название компании</label>
                                <input type="text" class="form-control" id="company" placeholder="ООО 'Компания'" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="industry" class="form-label">Сфера деятельности</label>
                                <select class="form-select" id="industry" required>
                                    <option value="" selected disabled>Выберите сферу деятельности</option>
                                    <option value="hotel">Гостиница / Отель</option>
                                    <option value="restaurant">Ресторан / Кафе</option>
                                    <option value="office">Офисный центр</option>
                                    <option value="beauty">Салон красоты / SPA</option>
                                    <option value="medical">Медицинское учреждение</option>
                                    <option value="shop">Магазин одежды</option>
                                    <option value="other">Другое</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact-name" class="form-label">Контактное лицо</label>
                                <input type="text" class="form-control" id="contact-name" placeholder="Иван Иванов" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="position" class="form-label">Должность</label>
                                <input type="text" class="form-control" id="position" placeholder="Руководитель отдела">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@company.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Телефон</label>
                                <input type="tel" class="form-control" id="phone" placeholder="+7 (999) 123-45-67" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message" class="form-label">Опишите ваши потребности</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Что именно вам необходимо чистить, примерный объем и периодичность"></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="policy-agree" required>
                                    <label class="form-check-label small" for="policy-agree">
                                        Я согласен на обработку персональных данных
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Отправить заявку</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ -->
                <h2 class="h3 text-center mb-4">Часто задаваемые вопросы</h2>
                
                <div class="accordion mb-5" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                Какой минимальный объем заказа для корпоративных клиентов?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Минимальный объем заказа для корпоративных клиентов составляет от 5000 рублей в месяц. Однако мы всегда готовы обсудить индивидуальные условия сотрудничества в зависимости от специфики вашего бизнеса и регулярности заказов.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Как происходит доставка и самовывоз заказов?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Для корпоративных клиентов мы предлагаем бесплатную доставку и самовывоз заказов. График доставки согласовывается индивидуально в зависимости от ваших потребностей. Вы можете выбрать удобное для вас время и периодичность: ежедневно, несколько раз в неделю или по определенным дням.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Какие способы оплаты доступны для корпоративных клиентов?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Для корпоративных клиентов мы предлагаем безналичный расчет с возможностью отсрочки платежа. По итогам месяца мы предоставляем полный пакет закрывающих документов. Также доступны варианты с предоплатой и пост-оплатой, в зависимости от условий договора.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Можно ли заказать срочную чистку и в какие сроки она выполняется?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Да, для корпоративных клиентов доступна услуга срочной чистки. В зависимости от типа изделий и сложности загрязнений, срочная чистка может быть выполнена в течение 3-6 часов или 24 часов. Условия срочной чистки и наценка за срочность оговариваются в договоре.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Предоставляете ли вы скидки для постоянных корпоративных клиентов?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Да, для постоянных корпоративных клиентов мы предлагаем гибкую систему скидок. Размер скидки зависит от объема заказов, регулярности сотрудничества и длительности договора. Скидки могут достигать 20-30% от розничных цен. Для крупных корпоративных клиентов мы разрабатываем индивидуальные тарифные планы.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Призыв к действию -->
                <div class="card bg-gradient-success text-white shadow-lg mb-5">
                    <div class="card-body p-4 p-md-5 text-center">
                        <h2 class="h3 mb-3">Начните сотрудничество с нами уже сегодня!</h2>
                        <p class="mb-4">Оставьте заявку или позвоните нам, и мы подготовим для вас индивидуальное предложение</p>
                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                            <a href="#request-form" class="btn btn-outline-light">Оставить заявку</a>
                            <a href="tel:+79991234567" class="btn btn-light text-success">+7 (999) 123-45-67</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 