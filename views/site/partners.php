<?php
  $title_key = array_search('title_partners', array_column($content_index, 'type'));
  $csrf_param = Yii::$app->request->csrfParam; 
  $csrf_token = Yii::$app->request->csrfToken;
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="text-center my-5 py-5">

    <h3 class="heading-decorated"><?=$content_index[$title_key]['content_'.$lang]?></h3>
    <?php if($admin): ?>
  <a href="#todiv"> <i id="<?=$content_index[$title_key]['id']?>" class="fas fa-text-height text-dark popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
<?php endif;?>
</div>
<?php if($admin): ?>
              <div class="container li-service" style="text-align: justify;" id="toform">
            <div class="col-12">
              <input type="text" id="param" value="<?=$csrf_param?>" class="d-none">
              <input type="text" id="token" value="<?=$csrf_token?>" class="d-none">

              <div class="form-group">
              <label for="partners_href">Ссылка</label>
              <input type="text" class="form-control" id="partners_href" aria-describedby="emailHelp" placeholder="https://yourwebsite.com/" maxlength="250">
            </div>


            <div class="form-group" id="partners_about_ee_div">
            <label for="partners_about_ee">Описание на эстонком</label>
            <textarea class="form-control" id="partners_about_ee" rows="20" required></textarea>
          </div>


            <div class="form-group" id="partners_about_en_div">
            <label for="partners_about_en">Описание на английском</label>
            <textarea class="form-control" id="partners_about_en" rows="20" required></textarea>
          </div>

          
            

            <div class="form-group" id="partners_about_ru_div">
            <label for="partners_about_ru">Описание на русском</label>
            <textarea class="form-control" id="partners_about_ru" rows="20" required></textarea>
          </div>


            



              <input type="file" class="img_team my-5" accept="image/*"> <br>
              <button type="submit" class="btn btn-success mt-5" id="add_partners">Добавить</button>
              <button type="submit" class="btn btn-warning mt-5" id="update_partners" disabled="disabled">Обновить</button>
              <div class="ajax-reply text-danger" style="font-size: 30px;"></div>
            </div>
            </div>
            <?php endif;?>
<div class="container">
<div class="row">
               <?php foreach($partners as $post): ?>


                <?php

        if(empty($post['about_'.$lang])){
          if(!empty($post['about_en']) ){
            $about = $post['about_en'];
          }
          elseif(!empty($post['about_ru']) ){
            $about = $post['about_ru'];
          }
          elseif(!empty($post['about_ee']) ){
            $about = $post['about_ee'];
          }
        }
        else{
          $about = $post['about_'.$lang];
        }

        ?>
               
                <div class="col-md-6 col-xl-4 mb-4 mt-5">
                
                  <article class="blurb-tiny blurb-tiny_centered">
                  
                    
                 <a href="<?=$post['href']?>">   <img src="<?=$post['img']?>" style="width: 100px;"></a>
                    
                    <p><?=$about?></p>
                    <?php if($admin): ?>
                  <div class="col-12 my-2">
                   <a> <i value="<?=$post['id']?>" class="fas fa-trash-alt text-dark delete-partners mr-2" style="cursor: pointer; font-size: 20px;"> Delete</i> </a>

                   <a href="#toform"> <i value="<?=$post['id']?>" class="fas fa-edit text-dark update-partners mr-2" style="cursor: pointer; font-size: 20px;"> Edit</i> </a>

                   <a href="#toform"> <i id="<?=$post['id']?>" class="far fa-image text-dark change-img-partners popup-open-img" style="cursor: pointer; font-size: 20px;"> Change img</i> </a>
                   </div>
                <?php endif;?>
                  </article>
                </div>
               
               
               <?php endforeach;?>
               
               
               
                
                
                <!--<div class="col-md-6 col-xl-4 mb-4">
             
                  <article class="blurb-tiny blurb-tiny_centered">
                   <a href="#"> <img src="/web/img/partners/mint.png" style="width: 100px;"></a>
                
                    <p>Успешно действующая на рынке с 2010 года компания, миссией которой является обеспечение клиента наилучшей компьютерной техникой дешево и быстро.</p>
                  </article>
                </div>
                
                <div class="col-md-6 col-xl-4 mb-4">
             
                  <article class="blurb-tiny blurb-tiny_centered">
                   <a href="http://www.baltconsult.eu/"> <img src="/web/img/partners/baltconsult.png" style="width: 150px;"></a>
                   
                    <p>Компания Baltconsult предоставляет комплексные услуги по финансовому, банковскому, бухгалтерскому и юридическому сопровождению вашего бизнеса в Латвии, Эстонии и на Кипре.
                    </p>
                  </article>
                </div>
                
                <div class="col-md-6 col-xl-4 mb-4">
             
                  <article class="blurb-tiny blurb-tiny_centered">
                   <a href="https://en.midex.com/"> <img src="/web/img/partners/Midex.png" style="width: 100px;"></a>
                  
                    <p>Торгуйте криптовалютами на лицензированной бирже с высокой ликвидностью. Быстро и легко покупайте биткойн и другие криптовалюты с помощью кредитной карты.
                    </p>
                  </article>
                </div>
                
                
                <div class="col-md-6 col-xl-4 mb-4">
             
                  <article class="blurb-tiny blurb-tiny_centered">
                   <a href="https://himbalt.com/"> <img src="/web/img/partners/himbalt.png" style="width: 100px;"></a>
                    <p>Twenty five years of effective operations in the petroleum products market
                    </p>
                  </article>
                </div>-->

              </div>
              </div>


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