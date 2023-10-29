<?php
    /*$this->registerJsFile(
        '@web/js/core.min.js',
        ['depends' => 'yii\web\YiiAsset']
        );*/
        use yii\widgets\ActiveForm;
        use yii\helpers\Html;
        $first_bloc_key = array_search('aml_first_bloc', array_column($content_index, 'type'));
        $title_service_key = array_search('aml_title', array_column($content_index, 'type'));
        
?>



<section id="todiv" class="section parallax-container bg-accent-2 text-center" data-parallax-img="/<?=$content_index[$first_bloc_key]['img_full']?>">
        <div class="parallax-content height-paralax">
          <div class="section-md text-center">
            <div class="container" style="margin-top: 250px;">
              <div class="row justify-content-md-center">
                <div class="col-md-7 col-xl-6">
                  <?php if($admin): ?>
                    <a href="#todiv"> <i id="<?=$content_index[$first_bloc_key]['id']?>" class="far fa-image text-white popup-open-img"  style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
                   <a href="#todiv"> <i id="<?=$content_index[$first_bloc_key]['id']?>" class="fas fa-text-height text-white popup-open" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                <?php endif;?>
                  <h1 class="heading-decorated"><?=$content_index[$first_bloc_key]['content_'.$lang]?></h1>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      

      
      <section class="section-md bg-default">
       <div class="text-center">
            <?php if($admin): ?>
              <div class="container li-service" style="text-align: justify;">
  
            <div class="form-group" id="toform">
          <label for="service_title_ee">Название на эстоноском</label>
          <input type="text" class="form-control" id="service_title_ee" aria-describedby="emailHelp" placeholder="Название на русском" maxlength="250" required>
          <small id="service_title_ee" class="form-text text-muted">В название ограничение до 250 симвлолов (включая пробелы).</small>
        </div>
        <div class="form-group">
            <label for="service_text_ee">Основной текст на эстонком</label>
            <textarea class="form-control" id="service_text_ee" rows="30" required></textarea>
          </div>

           <div class="form-group">
          <label for="service_title_en">Название на английском</label>
          <input type="text" class="form-control" id="service_title_en" aria-describedby="emailHelp" placeholder="Название на русском" maxlength="250">
          <small id="service_title_en" class="form-text text-muted">В название ограничение до 250 симвлолов (включая пробелы).</small>
        </div>
        <div class="form-group">
            <label for="service_text_en">Основной текст на английском</label>
            <textarea class="form-control" id="service_text_en" rows="30"></textarea>
          </div>

        <div class="form-group">
          <label for="service_title_ru">Название на русском</label>
          <input type="text" class="form-control" id="service_title_ru" aria-describedby="emailHelp" placeholder="Название на русском" maxlength="250">
          <small id="service_title_ru" class="form-text text-muted">В название ограничение до 250 симвлолов (включая пробелы).</small>
        </div>
        <div class="form-group">
            <label for="service_text_ru">Основной текст на русском</label>
            <textarea class="form-control" id="service_text_ru" rows="30"></textarea>
          </div>


          <div class="form-group d-none">
          <input type="text" class="form-control" id="type" aria-describedby="emailHelp" placeholder="Название на русском" maxlength="250" value="aml">
        </div>
        <button type="submit" class="btn btn-primary" id="addservice">Добавить</button>
        <button type="submit" class="btn btn-warning" id="update_service" disabled="disabled">Обновить</button>


              </div>


                   <a href="#todiv"> <i id="<?=$content_index[$title_service_key]['id']?>" class="fas fa-text-height popup-open text-dark" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                <?php endif;?>
                    <h3 class="heading-decorated my-5"><?=$content_index[$title_service_key]['content_'.$lang]?></h3>
                </div>
        <div class="container">
          <!-- Accordion -->
          <div id="accordion" role="tablist">
            <!-- Bootstrap card-->
            <?php foreach($service as $post): ?>
              <?php

              if(empty($post['title_'.$lang]) || empty($post['about_'.$lang])){
                if(!empty($post['title_en']) && !empty($post['about_en'])){
                  $title = $post['title_en'];
                  $content_min = $post['about_en'];
                }
                elseif(!empty($post['title_ru']) && !empty($post['about_ru'])){
                  $title = $post['title_ru'];
                  $content_min = $post['about_ru'];
                }
                elseif(!empty($post['title_ee']) && !empty($post['about_ee'])){
                  $title = $post['title_ee'];
                  $content_min = $post['about_ee'];
                }
              }
              else{
                $title = $post['title_'.$lang];
                $content_min = $post['about_'.$lang];
              }

        ?>
            <div class="card card-custom card-classic li-service">
              <?php if($admin): ?>
                  <div class="col-12 my-2">
                   <a> <i id="<?=$post['id']?>" class="fas fa-trash-alt text-dark delete-service" style="cursor: pointer; font-size: 20px;"> Delete</i> </a>

                   <a href="#toform"> <i value="<?=$post['id']?>" class="fas fa-edit text-dark update-service" style="cursor: pointer; font-size: 20px;"> Edit</i> </a>
                   </div>
                <?php endif;?>
              <div class="card-custom-heading" id="accordionHeading<?=$post['id']?>" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse<?=$post['id']?>" aria-controls="accordionCollapse<?=$post['id']?>" aria-expanded="false" style="content: f106">
                    <?=$title?>
                </a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse show" id="accordionCollapse<?=$post['id']?>" role="tabpanel" aria-labelledby="accordionHeading<?=$post['id']?>" style=""><!-- AddClass 'show'-->
                <div class="card-custom-body">
                    <?=$content_min?>
                </div>
              </div>
            </div>
            
            <?php endforeach; ?>
           <!-- <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading3" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3" aria-expanded="false" style="content: f106">
                Семейное право
                </a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse show" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading1" style="">
                <div class="card-custom-body">
                  <p>Юристы SPB Estonia имеют многолетний опыт и колоссальное количество удачно разрешенных семейных споров, связанных со взысканием алиментов, расторжением брака, разделом совместного имущества и комплексными вопросами связанными с попечением за детьми.
                  Наше бюро предлагает помощь в решении следующих задач:
                  </p>
                  <ul class="text-justify ml-5 ul-service">
                      <li><p>Консультирование по вопросам семейного права</p></li>
                      <li><p>Составление проектов и анализ действующих брачных договоров</p></li>
                      <li><p>Представительство интересов клиентов по делам, связанным с взысканием содержания (алименты)</p></li>
                      <li><p>Представительство интересов клиентов по делам, связанным с расторжением брака и разделом совместного брачного имущества</p></li>
                      <li><p>Представительство интересов клиентов по делам, связанным с установлением порядка общения с ребенком и/или прекращением совместного попечения над несовершеннолетними</p></li>
                      <li><p>Представительство интересов клиентов по делам, связанным с наследственным имуществом</p></li>
                      <li><p>Представительство интересов клиентов по делам, связанным с установлением опеки</p></li>
                      <li><p>Представительство интересов клиентов по делам, связанным с установлением происхождения и оспариванием записи в актах гражданского состояния (ЗАГС)</p></li>
                      <li><p>Оформление судебных документов необходимых для заключения брака с иностранцем (разрешение суда на заключение брака).</p></li>
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
    


