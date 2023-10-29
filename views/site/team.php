<?php
      use yii\widgets\ActiveForm;
        use yii\helpers\Html;
        $csrf_param = Yii::$app->request->csrfParam; 
$csrf_token = Yii::$app->request->csrfToken;

      ?>
      
       <section class="section-lg bg-default text-center mt-5">
        <div class="container" id="toform">
          <h3 class="heading-decorated">Наша команда</h3>
          <div class="row row-50">
            <?php if($admin): ?>
              <div class="container li-service" style="text-align: justify;">
            <div class="col-12">
              <input type="text" id="param" value="<?=$csrf_param?>" class="d-none">
              <input type="text" id="token" value="<?=$csrf_token?>" class="d-none">


              <div class="form-group">
              <label for="facebook_href">facebook</label>
              <input type="text" class="form-control" id="facebook_href" aria-describedby="emailHelp" placeholder="https://www.facebook.com/ilya.pevnev.9" maxlength="250">
              <small id="facebook_href" class="form-text text-muted">Данное поле является необзятельным для заполнения, если не вставить ссылку на facebook аккаунт, то он не будет отображатся на сайте.</small>
            </div>

            <div class="form-group">
              <label for="whatsapp_href">Whatsapp</label>
              <input type="text" class="form-control" id="whatsapp_href" aria-describedby="emailHelp" placeholder="79881658796" maxlength="250">
              <small id="whatsapp_href" class="form-text text-muted">Данное поле является необзятельным для заполнения, если не записать номер телефона, то он не будет отображатся на сайте.</small>
            </div>


              <div class="form-group">
              <label for="Name_ee">Имя на эстоноском</label>
              <input type="text" class="form-control" id="Name_ee" aria-describedby="emailHelp" placeholder="Имя на эстоноском" maxlength="250" required>
            </div>

            <div class="form-group">
              <label for="type_ee">Направление на эстонском</label>
              <input type="text" class="form-control" id="type_ee" aria-describedby="emailHelp" placeholder="Lawyer" maxlength="250" required>
            </div>

            <div class="form-group">
            <label for="team_about_ee">Описание на эстонком</label>
            <textarea class="form-control" id="team_about_ee" rows="20" required></textarea>
          </div>

            <div class="form-group">
              <label for="Name_en">Имя на анлийском</label>
              <input type="text" class="form-control" id="Name_en" aria-describedby="emailHelp" placeholder="Имя на анлийском" maxlength="250" required>
            </div>

            <div class="form-group">
              <label for="type_en">Направление на английском</label>
              <input type="text" class="form-control" id="type_en" aria-describedby="emailHelp" placeholder="Lawyer" maxlength="250" required>
            </div>

            <div class="form-group">
            <label for="team_about_en">Описание на английском</label>
            <textarea class="form-control" id="team_about_en" rows="20" required></textarea>
          </div>

          

            <div class="form-group">
              <label for="Name_ru">Имя на русском</label>
              <input type="text" class="form-control" id="Name_ru" aria-describedby="emailHelp" placeholder="Имя на анлийском" maxlength="250" required>
            </div>

            <div class="form-group">
              <label for="type_ru">Направление на русском</label>
              <input type="text" class="form-control" id="type_ru" aria-describedby="emailHelp" placeholder="Lawyer" maxlength="250" required>
            </div>

            <div class="form-group">
            <label for="team_about_ru">Описание на русском</label>
            <textarea class="form-control" id="team_about_ru" rows="20" required></textarea>
          </div>


            



              <input type="file" class="img_team" accept="image/*"> <br>
              <a href="#" class="upload_files button">Добавить</a>
              <button type="submit" class="btn btn-warning" id="update_team" disabled="disabled">Обновить</button>
              <div class="ajax-reply"></div>
            </div>
            </div>
            <?php endif;?>
           
           <?php foreach($team as $post): ?>
           <div class="col-md-6 col-xl-4">
              <!-- Thumb corporate-->
              <?php if($admin): ?>
                  <div class="col-12 my-2">
                   <a> <i value="<?=$post['id']?>" class="fas fa-trash-alt text-dark delete-team mr-2" style="cursor: pointer; font-size: 20px;"> Delete</i> </a>

                   <a href="#toform"> <i value="<?=$post['id']?>" class="fas fa-edit text-dark update-team mr-2" style="cursor: pointer; font-size: 20px;"> Edit</i> </a>

                   <a href="#toform"> <i id="<?=$post['id']?>" class="far fa-image text-dark change-img-team popup-open-img" style="cursor: pointer; font-size: 20px;"> Change img</i> </a>
                   </div>
                <?php endif;?>
              <div class="thumb thumb-corporate">
                
                <img class="rounded-circle img-main" src="<?=$post['img']?>" alt="Generic placeholder image" style="object-position: 50% 50%;">
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="#"><?=$post['Name_'.$lang]?></a></p>
                  <p class="thumb__subtitle"><?=$post['type_'.$lang]?></p>
                  <p><?=$post['about_'.$lang]?></p>
                  <ul class="list-inline-sm thumb-corporate__list">
                    <?php if(!empty($post['facebook'])): ?>
                    <li><a class="icon icon-sm" href="<?=$post['facebook']?>" style="color:#cca776;"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($post['whatsapp'])): ?>
                    <li><a class="icon icon-sm" href="https://wa.me/<?=$post['whatsapp']?>" style="color:#cca776;"><i class="fab fa-whatsapp"></i></a></li>
                    <?php endif;?>
                  </ul>
                </div>
              </div>
            </div>
           <?php endforeach; ?>
           
           
           <!-- <div class="col-md-6 col-xl-4">

              <div class="thumb thumb-corporate">
                <img class="rounded-circle img-main" src="/web/img/team/Sofia-Pevzer.jpg" alt="Generic placeholder image" style="object-position: 50% 30%;">
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="team-member-profile.html">Софья Певзнер </a></p>
                  <p class="thumb__subtitle">Юрист</p>
                  <p>Закончила в 2016 году Таллиннский Педагогический Университет, магистр права. Профессиональную деятельность начала с 2011 года. Специализация - коммерческое и корпоративное право, договорное право, защита персональных данных, гражданское право, AML, ИТ право. Рабочие языки: русский, эстонский, английский</p>
                  <ul class="list-inline-sm thumb-corporate__list">
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fas fa-phone"></i></a></li>
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
           
           
            <div class="col-md-6 col-xl-4">
      
              <div class="thumb thumb-corporate">
                <img class="rounded-circle img-main" src="/web/img/team/Julie-Anderson.jpg" alt="Generic placeholder image" style="object-position: 50% 10%;">
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="team-member-profile.html">Юлия Андерсон</a></p>
                  <p class="thumb__subtitle">Юрист</p>
                  <p>Закончила в 2006 году Таллиннский Коммерческий Колледж, факультет права. Прошла стажировку в University of Notre Dame, США, диплом с отличием. В 2018 году закончила Таллиннский Технический Университет по специальности юриспруденция.  Профессиональная деятельность начиная с 2006 года. Специализация: семейное право, коммерческое право, трудовое право, гражданское право, дела по проступкам. Рабочие языки: русский, эстонский, английский</p>
                  <ul class="list-inline-sm thumb-corporate__list">
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fas fa-phone"></i></a></li>
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
         
              <div class="thumb thumb-corporate">
               <img class="rounded-circle img-main" src="/web/img/team/Jelena-Karzetskaja.jpg" alt="Generic placeholder image" style="object-position: 50% 5%;">
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="team-member-profile.html">Елена Каржецкая</a></p>
                  <p class="thumb__subtitle">Юрист</p>
                  <p>Закончила в 1997 году Международный университет социальных наук “LEX”, факультете права. В 2003 году закончила Московский Государственный Социальный Университет по специальности юриспруденция. Магистр права. В 2009 закончила магистратуру Академия Норд. Профессиональная деятельность начиная с 1997 года. Специализация: международное право, административное право, гражданское право, трудовое право. Прочие навыки: бухгалтерский учет, таможенное декларирование. Рабочие языки: русский, эстонский, английский</p>
                  <ul class="list-inline-sm thumb-corporate__list">
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fas fa-phone"></i></a></li>
                    <li><a class="icon icon-sm" href="#" style="color:#cca776;"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>-->
           
          </div>
        </div>
      </section>



      <?php if($admin): ?>

   <div class="container-fluid popup-img">
          <div class="row justify-content-lg-center">
            <div class="col-lg-12 col-xl-10">
              <button type="button" style="font-size: 35px;" class="close popup-close-img">
          <span aria-hidden="true">&times;</span>
        </button>

         <?php if( Yii::$app->session->hasFlash('success') ):?>
    
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
   <?php echo Yii::$app->session->getFlash('success'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php endif;?>
    
    
    
    <?php if( Yii::$app->session->hasFlash('error') ):?>
    
       <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
   <?php echo Yii::$app->session->getFlash('error'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php endif;?>
    <h4>Обновление изображения</h4>
 
          <?php $form = ActiveForm::begin([
                            'id' => 'addForm',
                        ]) ?>
                            <?= $form->field($model, 'id')->textInput(['readonly' => true, 'class' => 'id-input']) ?>
                            <?= $form->field($model, 'image')->fileInput(['multiple' => false, 'accept' => 'image/*'])?>
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
                        <?php ActiveForm::end() ?>

</div>
          </div>
        </div>
        <?php endif;?>   

