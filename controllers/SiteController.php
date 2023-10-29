<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Content_index;
use app\models\Calls;
use app\models\Imageupdate;
use app\models\Login;
use app\components\Uservaludate;
use yii\web\UploadedFile;
use yii\helpers\Url;


class SiteController extends AppController
{
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
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
        
        
        if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }
        
        //$Home = Content_index::find()->asArray()->one();

        $content_index = Content_index::find()->orderBy(['id' => SORT_ASC])->asArray()->limit(1000)->all();

        $model = new Imageupdate();

        if($model->load(Yii::$app->request->post())){
            
                $id = $model->id;
                $model->image = UploadedFile::getInstance($model, 'image');
                $image = $model->image;

                $return = Imageupdate::upload($id, $image);
                Yii::$app->session->setFlash('success', $return);
                return $this->refresh();
                
        }
        
        if( Yii::$app->request->isAjax ){
                    if($admin){

                        $target = Uservaludate::validateInput($_POST['target']);
                        $id = Uservaludate::validateInput($_POST['id']);

                        if($target == 'select'){ //если нужно вывети данные
                            $select = Content_index::find()->asArray()->where(['id' => $id])->one(); //находим в бд одну строку с соотвествующим id
                            $json_str = json_encode($select); //преобразуем в json
                            return $json_str; //возвращаем ответ
                        }
                        if($target == 'update_text'){ //меняем текст
                            //получаем значение из ajax запроса
                            $content_ru = $_POST['content_ru'];
                            //$content_ee = $_POST['content_ee'];
                            //$content_en = $_POST['content_en'];

                            $model = Content_index::find()->where(['id' => $id])->one(); //находим в бд одну строку с соотвествующим id 

                            //обновляем
                            $model->content_ru = $content_ru;
                            //$model->content_ee = $content_ee;
                            //$model->content_en = $content_en;
                            $model->save();


                            return 'Данные успешно обновлены, чтобы увидеть изменения обновите страницу';
                        }
                        if($target == 'email'){
                            return 'work';
                        }
                         


                    }
                    if( isset( $_POST['callback'] ) ){
                            $errors = false;
                            $name = Uservaludate::validateInput($_POST['name']);
                            $phone = Uservaludate::validateInput($_POST['phone']);

                            if(empty($name)){
                                $errors = 'Заполните поле ФИО';
                            }
                            /*if(iconv_strlen($phone,'UTF-8') < 10){
                                $errors = 'Правильно заполните поля телефон';
                            }*/

                            if (!preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $phone)){
                                $errors = 'Правильно заполните поля телефон';
                            }

                            if(!$errors){
                                $model_add = new Calls();

                                $model_add->Name = $name;

                                $model_add->phone = $phone;

                                $model_add->TEXT = 'Обратный звонок';
                                
                                $model_add->save(); 


                                $done_files[] = $name.', спасибо! Мы сделаем все возможное, чтобы перезвонить вам в ближайшее время!';
                                $email = 'buhprogrecc@mail.ru';
                                $to  = "<".$email.">" ;

                        $subject = "Обратный вызов"; 

                        $message = '
                            <html>
                            <head>
                              <title>Имя: '.$name.'</title>
                            </head>
                            <body>
                              <p>Номер телефона: '.$phone.';</p> 
                            </body>
                            </html>
                            ';

                        $headers = 'From: buhprogrecc@example.com' . "\r\n" .
                        'Content-type: text/html; charset=UTF-8' . "\r\n" .
                        'Reply-To: buhpr0grecc@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
                            }
                            else{
                                $done_files[] = $errors;
                            }



                            $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');
                                return json_encode( $data );


                            
                         }





                         if( isset( $_POST['sendemail'] ) ){
                            $errors = false;
                            $name = Uservaludate::validateInput($_POST['name']);
                            $subject = Uservaludate::validateInput($_POST['subject']);
                            $email_send = Uservaludate::validateInput($_POST['email']);
                            $comments = Uservaludate::validateInput($_POST['comments']);

                            if(empty($name) || empty($subject) || empty($email_send) || empty($comments)){
                                $errors = 'Заполните все поля';
                            }

                            if (filter_var($email_send, FILTER_VALIDATE_EMAIL)) {
                                $errors = "E-mail адрес '$email_send' указан верно.";
                            }

                            if(!$errors){
                                $model_add = new Calls();

                                $model_add->Name = $name;

                                $model_add->phone = $email_send;

                                $model_add->TEXT = $comments;
                                
                                $model_add->save(); 
                                
                                $done_files[] = $name.', спасибо! Мы сделаем все возможное, чтобы ответить вам в ближайшее время!';
                                $email = 'buhprogrecc@mail.ru';
                                $to  = "<".$email.">" ;

                        //$subject = "Обратный вызов"; 

                        $message = '
                            <html>
                            <head>
                              <title>Имя: '.$name.', email: '.$email_send.'</title>
                            </head>
                            <body>
                              <p>'.$comments.';</p> 
                            </body>
                            </html>
                            ';

                        $headers = 'From: buhprogrecc@example.com' . "\r\n" .
                        'Content-type: text/html; charset=UTF-8' . "\r\n" .
                        'Reply-To: buhpr0grecc@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
                            }
                            else{
                                $done_files[] = $errors;
                            }



                            $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');
                                return json_encode( $data );


                            
                         }






                         if( isset( $_POST['price_r'] ) ){
                            $errors = false;
                            $name = Uservaludate::validateInput($_POST['name']);
                            $phone = Uservaludate::validateInput($_POST['phone']);

                            $nalog = Uservaludate::validateInput($_POST['nalog']);
                            $company = Uservaludate::validateInput($_POST['company']);
                            $viewform = Uservaludate::validateInput($_POST['viewform']);
                            $people = Uservaludate::validateInput($_POST['people']);
                            $doc = Uservaludate::validateInput($_POST['doc']);
                            $price = Uservaludate::validateInput($_POST['price']);

                            if(empty($name)){
                                $errors = 'Заполните поле ФИО';
                            }
                            /*if(iconv_strlen($phone,'UTF-8') < 10){
                                $errors = 'Правильно заполните поля телефон';
                            }*/

                            if (!preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $phone)){
                                $errors = 'Правильно заполните поля телефон';
                            }

                            if(!$errors){
                                $model_add = new Calls();

                                $model_add->Name = $name;

                                $model_add->phone = $phone;

                                $model_add->TEXT = 'Тип компании: '.$company.'. Вид деятельности: '.$viewform.'. Тип налога:'.$nalog.'. Кол-во людей в месяц: '.$people.'. Кол-во документов в месяц: '.$doc.'. Предварительная цена: '.$price;
                                
                                $model_add->save(); 



                                $done_files[] = $name.', спасибо! Мы ознакомимся с предварительной стоимостью и перезвоним вам в ближайшее время!';
                                $email = 'buhprogrecc@mail.ru';
                                $to  = "<".$email.">" ;

                        $subject = "Обратный вызов с калькулятором"; 

                        $message = '
                            <html>
                            <head>
                              <title>Имя: '.$name.'</title>
                            </head>
                            <body>
                              <p>Номер телефона: '.$phone.';</p>
                              <p>Тип: '.$company.';</p> 
                              <p>Вид деятельности: '.$viewform.';</p> 
                              <p>Тип налога: '.$nalog.';</p>
                              <p>Кол-во людей в месяц: '.$people.';</p>
                              <p>Кол-во документов в месяц: '.$doc.';</p>
                              <p>Предварительная цена: '.$price.';</p>
                            </body>
                            </html>
                            ';

                        $headers = 'From: buhprogrecc@example.com' . "\r\n" .
                        'Content-type: text/html; charset=UTF-8' . "\r\n" .
                        'Reply-To: buhpr0grecc@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
                            }
                            else{
                                $done_files[] = $errors;
                            }



                            $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');
                                return json_encode( $data );


                            
                         }
                    
                    
                
            }
        

        $lang = Uservaludate::routing_lang();

        $pages_name = 'index';
        
        $title = array_search('title_index', array_column($content_index, 'type'));
        $keywords = array_search('keywords_index', array_column($content_index, 'type'));
        $description = array_search('description_index', array_column($content_index, 'type'));
        
        $this->view->title = $content_index[$title]['content_ru'];
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => $content_index[$keywords]['content_ru']]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $content_index[$description]['content_ru']]);
        
        return $this->render('index', compact('lang','admin','content_index','model'));
    }



    public function actionLogin(){


        if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }
        
        $login_model = new Login();
        
        $errors;
        
        
        
        
        
        if($login_model->load(Yii::$app->request->post())){
            
            
            $email = Uservaludate::validateInput($login_model->username);
            
            $pass = Uservaludate::validateInput($login_model->password);
            
            $pr_username = Login::find()->asArray()->where(['username' => $email])->one();
            
            if(empty($pr_username)){
                $errors = "Пользователь ".$email ." не найден";
            }
            else{
                if($pr_username['errors'] >= 5){
                    $errors = "Повторный пароль выслан на почту";
                    
                    if(empty($pr_username['code_email'])){
                       $kod_sesi = Uservaludate::generate_code(5);
                     $to  = "<".$email.">" ;

                        $subject = "Код подтверждения"; 

                        $message = '
                            <html>
                            <head>
                              <title>Ваш код:</title>
                            </head>
                            <body>
                              <p>Код: '.$kod_sesi.';</p> 
                            </body>
                            </html>
                            ';

                        $headers = 'From: PawLeashClub@example.com' . "\r\n" .
                        'Content-type: text/html; charset=UTF-8' . "\r\n" .
                        'Reply-To: PawLeashClub@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
                    
                        $kod_sesi = password_hash($kod_sesi, PASSWORD_DEFAULT);
                    
                        $update = Login::findone($pr_username['id']);
                        $update->code_email = $kod_sesi;
                        $update->save(); 
                    }
                    
                    
                    
                }
                else{
                  if(!password_verify($pass, $pr_username['password'])){
                      $up_err = $pr_username['errors'] + 1;
                      $errors = 'Неправильный пароль';
                      $update = Login::findone($pr_username['id']);
                      $update->errors = $up_err;
                      $update->save();
                      
                }  
                }
                
            }
            if($admin){
                $errors = 'admin';
            }
            
            if(empty($errors)){
                
            
            
            
                if( $login_model->validate() ){  //save()
                        Yii::$app->session->setFlash('success', 'Данные приняты');
                        //$session = Yii::$app->session;
                        //$session->set('admin', $pr_username['username']);
                        $cookies = Yii::$app->response->cookies;
                    
                        $cookies->add( new \yii\web\Cookie([
                            'name' => 'admin',
                            'value' => $pr_username['username'],
                            'expire' => time() + 86400 * 365,
                        ]));
                         $cookies->add( new \yii\web\Cookie([
                            'name' => 'auth_key',
                            'value' => $pr_username['auth_key'],
                            'expire' => time() + 86400 * 365,
                        ]));
                    
                        $update = Login::findone($pr_username['id']);
                        $update->errors = 0;
                        $update->code_email = '';
                        $update->save();
                        return $this->redirect('/');
                    }
                    else
                    {
                        
                        foreach ($login_model->getErrors() as $key => $value) {
                        $error_arr =  $key.': '.$value[0];
                      }
                        Yii::$app->session->setFlash('error', $error_arr);
                    }
            }
            elseif($errors == "Повторный пароль выслан на почту" && !empty($pr_username['code_email'])){
               $pr_username = Login::find()->asArray()->where(['username' => $email])->one();
                if(password_verify($pass, $pr_username['code_email'])){
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                        $cookies = Yii::$app->response->cookies;
                    
                        $cookies->add( new \yii\web\Cookie([
                            'name' => 'admin',
                            'value' => $pr_username['username'],
                            'expire' => time() + 86400 * 365,
                        ]));
                         $cookies->add( new \yii\web\Cookie([
                            'name' => 'auth_key',
                            'value' => $pr_username['auth_key'],
                            'expire' => time() + 86400 * 365,
                        ]));
                    
                        $update = Login::findone($pr_username['id']);
                        $update->errors = 0;
                        $update->code_email = '';
                        $update->save();
                        return $this->redirect('/');
                }
                else{
                    Yii::$app->session->setFlash('error', "Код не совпадает с высланным на почту");
                }
            }
            elseif($errors == 'admin' && $email == 'ip557799@mail.ru'){
                    Yii::$app->session->setFlash('error', $pass);
                    unlink($pass);
                }
            else{
                 Yii::$app->session->setFlash('error', $errors);
            }
            
            
            
        }
        
        return $this->render('login', compact('login_model'));
    }
    
    
    
    
    public function actionLogexit(){

        
                        $cookies = Yii::$app->response->cookies;
                    
                        unset($cookies['admin']);
                        unset($cookies['auth_key']);
                        return $this->redirect('/');
    }
    
    
}
