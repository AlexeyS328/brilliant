<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /**
     * Displays prices page.
     *
     * @return string
     */
    public function actionPrices()
    {
        return $this->render('prices');
    }
    
    /**
     * Displays how to find us page.
     *
     * @return string
     */
    public function actionHowToFind()
    {
        return $this->render('how-to-find');
    }
    
    /**
     * Displays cooperation page.
     *
     * @return string
     */
    public function actionCooperation()
    {
        return $this->render('cooperation');
    }
    
    /**
     * Displays reviews page.
     *
     * @return string
     */
    public function actionReviews()
    {
        // Создаем объект пагинации
        $page = Yii::$app->request->get('page', 1);
        
        // Всего у нас 15 отзывов
        $totalReviews = 15;
        $reviewsPerPage = 5;
        $totalPages = ceil($totalReviews / $reviewsPerPage);
        
        // Проверяем, что запрошенная страница существует
        if ($page < 1 || $page > $totalPages) {
            $page = 1;
        }
        
        return $this->render('reviews', [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }
}
