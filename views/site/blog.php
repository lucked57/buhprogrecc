<?php 
        use yii\widgets\ActiveForm;
        use yii\helpers\Html;
        use yii\helpers\Url;
        $csrf_param = Yii::$app->request->csrfParam; 
        $csrf_token = Yii::$app->request->csrfToken;
        if($lang == 'ee'){
          $url_get = 'site/fullpost';
        }
        else{
          $url_get = 'site/fullpost/'.$lang;
        }
        $i = 0;
?>
<div class="container mt-5" id="toform">
        <div class="row justify-content-around blog mt-5 pt-5">
          <?php if($admin): ?>
              <div class="container li-service mb-5" style="text-align: justify;">
            <div class="col-12">
              <input type="text" id="param" value="<?=$csrf_param?>" class="d-none">
              


              <div class="form-group">
              <label for="facebook_href"><?=$lang?></label>
              <input type="text" class="form-control" id="facebook_href" aria-describedby="emailHelp" placeholder="https://www.facebook.com/groups/325660761533628/permalink/860441454722220/" maxlength="250">
            </div>


              <div class="form-group">
              <label for="title_ee">Название на эстоноском</label>
              <input type="text" class="form-control" id="title_ee" aria-describedby="emailHelp" placeholder="Название на эстоноском" maxlength="250" required>
            </div>

            <div class="form-group" id="content_ee_div">
            <label for="content_ee">Описание на эстонком</label>
            <textarea class="form-control" id="content_ee" rows="20" required></textarea>
          </div>

          <div class="form-group" id="content_min_ee_div">
            <label for="content_min_ee">Краткое описание на эстонком</label>
            <textarea class="form-control" id="content_min_ee" rows="10" required></textarea>
          </div>





          <div class="form-group">
              <label for="title_en">Название на английском</label>
              <input type="text" class="form-control" id="title_en" aria-describedby="emailHelp" placeholder="Название на английском" maxlength="250" required>
            </div>

            <div class="form-group" id="content_en_div">
            <label for="content_en">Описание на английском</label>
            <textarea class="form-control" id="content_en" rows="20" required></textarea>
          </div>

          <div class="form-group" id="content_min_en_div">
            <label for="content_min_en">Краткое описание на английском</label>
            <textarea class="form-control" id="content_min_en" rows="10" required></textarea>
          </div>



          <div class="form-group">
              <label for="title_ru">Название на русском</label>
              <input type="text" class="form-control" id="title_ru" aria-describedby="emailHelp" placeholder="Название на русском" maxlength="250" required>
            </div>

            <div class="form-group" id="content_ru_div">
            <label for="content_ru">Описание на русском</label>
            <textarea class="form-control" id="content_ru" rows="20" required></textarea>
          </div>

          <div class="form-group" id="content_min_ru_div">
            <label for="content_min_ru">Краткое описание на русском</label>
            <textarea class="form-control" id="content_min_ru" rows="10" required></textarea>
          </div>

            



              <input type="file" class="img_team my-5" accept="image/*"> <br>
              <!--<a href="#" class="upload_files button">Добавить</a>-->
              <button type="submit" class="btn btn-success mt-5" id="add_blog">Добавить</button>
              <button type="submit" class="btn btn-warning mt-5" id="update_blog" disabled="disabled">Обновить</button>
              <div class="ajax-reply text-danger" style="font-size: 30px;"></div>
            </div>
            </div>
            <?php endif;?>
<?php if(!empty($blog)):?>
      <?php foreach($blog as $post): ?>

        <?php
        $i++;
        if(empty($post['title_'.$lang]) || empty($post['content_min_'.$lang])){
          if(!empty($post['title_en']) && !empty($post['content_min_en'])){
            $title = $post['title_en'];
            $content_min = $post['content_min_en'];
          }
          elseif(!empty($post['title_ru']) && !empty($post['content_min_ru'])){
            $title = $post['title_ru'];
            $content_min = $post['content_min_ru'];
          }
          elseif(!empty($post['title_ee']) && !empty($post['content_min_ee'])){
            $title = $post['title_ee'];
            $content_min = $post['content_min_ee'];
          }
        }
        else{
          $title = $post['title_'.$lang];
          $content_min = $post['content_min_'.$lang];
        }

        ?>



            <div class="col-lg-5 mb-5">
                <div class="card shadow h-100">
              <img class="card-img-top" src="<?=$post['img_min']?>">
              <div class="card-body">
                <h5 class="card-title"><?=$title?></h5>
                <p class="card-text"><?=$content_min?></p> 
              <!--  <a href="<?=Url::to([$url_get, 'post_id' => $post['id']]);?>" class="btn btn-primary">More</a>-->



                <?php if($lang == 'ee'):?>
                <a href="http://spbestonia.loc/site/fullpost?post_id=<?=$post['id']?>" class="btn btn-primary">More</a>
                <?php else: ?>
                  <a href="http://spbestonia.loc/site/fullpost/<?=$lang?>?post_id=<?=$post['id']?>" class="btn btn-primary">More</a>


                  <?php endif; ?>
                <?php if(!empty($post['facebook'])):?>
                  <a href="<?=$post['facebook']?>" class="btn btn-primary mt-3 fb-color">Read on <i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                
                
                <?php if($admin): ?>
                  <div class="col-12 my-2">
                   <a> <i value="<?=$post['id']?>" class="fas fa-trash-alt text-dark delete-blog mr-2" style="cursor: pointer; font-size: 20px;"> Delete</i> </a>

                   <a href="#toform"> <i value="<?=$post['id']?>" class="fas fa-edit text-dark update-blog mr-2" style="cursor: pointer; font-size: 20px;"> Edit</i> </a>

                   <a href="#toform"> <i id="<?=$post['id']?>" class="far fa-image text-dark change-img-blog popup-open-img" style="cursor: pointer; font-size: 20px;"> Change img</i> </a>
                   </div>
                <?php endif;?>

              </div>
            </div>
              </div>

              <? endforeach; ?>
<?php endif; ?>
        <input type="text" id="token" value="<?=$csrf_token?>" class="d-none">
        </div>

    
</div>
<?php if($i > 19 && !$admin): ?>
<div class="container">
    <div class="row justify-content-around blog mt-5 pt-5 add-post-content">
    </div>
</div>
        <div class="col-12 text-center my-2 load-post">
        <button class="button button-primary" id="load_new_post">more <i class="fas fa-angle-double-down"></i></button>
      </div>
<?php endif; ?>


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
        <!--
          #французскийбульдог #frenchbulldog #бульдог #моясобака #французскийбульдогмосква #k9life #k9handler #выгул #королев #сидеть #лучшийдругчеловека #сидеть #угс #послушнаясобака #воспитаниещенка #обучениесобак #собакамосква #воспитаниесобак #дрессировкасобакмосква #дрессировкасобак #worlddog #worlddogs #dogtrainers #trainingdogs #worlddogday #дрессировкасобаки #кинологмосква #дрессировкащенка #кинолог #кинологи

