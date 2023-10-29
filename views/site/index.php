
    <!--<div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>-->

    <?php
          use yii\widgets\ActiveForm;
          use yii\helpers\Html;
          $csrf_param = Yii::$app->request->csrfParam; 
          $csrf_token = Yii::$app->request->csrfToken;
        
        $main_img_key = array_search('main_img', array_column($content_index, 'type'));
        $main_title_key = array_search('main_title', array_column($content_index, 'type')); 
        $callback_1_key = array_search('callback_1', array_column($content_index, 'type'));
        $col_1_main_key = array_search('col_1_main', array_column($content_index, 'type'));
        $col_2_main_key = array_search('col_2_main', array_column($content_index, 'type'));
        $col_3_main_key = array_search('col_3_main', array_column($content_index, 'type'));
        $service_text_key = array_search('service_text', array_column($content_index, 'type'));
        $advantages_main_key = array_search('advantages_main', array_column($content_index, 'type'));
        $advantages_1_key = array_search('advantages_1', array_column($content_index, 'type'));
        $advantages_2_key = array_search('advantages_2', array_column($content_index, 'type'));
        $advantages_3_key = array_search('advantages_3', array_column($content_index, 'type'));
        $advantages_4_key = array_search('advantages_4', array_column($content_index, 'type'));
        $advantages_5_key = array_search('advantages_5', array_column($content_index, 'type'));
        $advantages_6_key = array_search('advantages_6', array_column($content_index, 'type'));
        $main_img_2_key = array_search('main_img_2', array_column($content_index, 'type'));
        $review_main_key = array_search('review_main', array_column($content_index, 'type'));
        $review_1_key = array_search('review-1', array_column($content_index, 'type'));
        $review_2_key = array_search('review-2', array_column($content_index, 'type'));
        $review_3_key = array_search('review-3', array_column($content_index, 'type'));
        $review_4_key = array_search('review-4', array_column($content_index, 'type'));
        $review_5_key = array_search('review-5', array_column($content_index, 'type'));
        $price_main_key = array_search('price_main', array_column($content_index, 'type'));
        $price_after_key = array_search('price_after', array_column($content_index, 'type'));
        $main_img_3_key = array_search('main_img_3', array_column($content_index, 'type'));
        $answer_main_key = array_search('answer_main', array_column($content_index, 'type'));
        $answer_after_key = array_search('answer_after', array_column($content_index, 'type'));
        $main_img_4_key = array_search('main_img_4', array_column($content_index, 'type'));
        $contact_main_key = array_search('contact_main', array_column($content_index, 'type'));
        $contact_after_key = array_search('contact_after', array_column($content_index, 'type'));
        /*
        $index_aml_key = array_search('index_aml', array_column($content_index, 'type'));*/


        /*$this->registerJsFile(
        '@web/js/core.min.js',
        ['depends' => 'yii\web\YiiAsset']
        );*/
    ?>

     
      

    <!-- START HOME -->
    <section class="bg-home" id="home" style="background-image: url(<?=$content_index[$main_img_key]['img_full']?>);">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="home-contact">
                                <div class="slider_text">
<h3>We Care <br> <span>Your Pets</span></h3>
<p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.</p>
<a href="contact.html" class="boxed-btn4">Contact Us</a>
</div>
                                <h1 class="home-title line-height_1_4"><?=$content_index[$main_title_key]['content_ru']?> <?php echo password_hash("buhprogrecc2021", PASSWORD_DEFAULT);?></h1>
                                <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$main_title_key]['id']?>" class="fas fa-text-height text-white popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text </i> </a>
                                  <?php endif;?>
                                <div class="mt-4 pt-3">
                                  <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$callback_1_key]['id']?>" class="fas fa-text-height text-white popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                                    <a href="" class="btn btn-custom btn-rounded" data-toggle="modal" data-target="#callback"><?=$content_index[$callback_1_key]['content_ru']?></a>
                                    <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$main_img_key]['id']?>" class="far fa-image text-white popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
        <br>
        <!--<a href="tel:+79269647624" class="video-play-icon-trigger text-white">
                                        <i class="play-icon-circle bg-white text-custom fas fa-phone"></i>+7 (926) 964-76-24
                                    </a>-->


                                    <a href="https://wa.me/79269647624" target="_blank" class="btn btn-custom btn-rounded mt-2"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                </div>

                                <div class="row mt-5 pt-4">

                                    <div class="col-lg-4">
                                        <div class="home-box text-center mt-4">
                                            <?=$content_index[$col_1_main_key]['content_ru']?>
                                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$col_1_main_key]['id']?>" class="fas fa-text-height text-white popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="home-box text-center mt-4">
                                            <?=$content_index[$col_2_main_key]['content_ru']?>
                                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$col_2_main_key]['id']?>" class="fas fa-text-height text-white popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="home-box text-center mt-4">
                                            <?=$content_index[$col_3_main_key]['content_ru']?>
                                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$col_3_main_key]['id']?>" class="fas fa-text-height text-white popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mouse_down text-center">
                        <a href="#services" class="text-white scroll">
                            <i class="fas fa-angle-down" style="font-size: 30px;"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START SERVICES -->
    <section class="section" id="services">
        <div class="container">
          <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$service_text_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
          <?=$content_index[$service_text_key]['content_ru']?>
                                            
        </div>
    </section>
    <!-- END SERVICES -->



    <!-- START Calculator -->
    <section class="section" id="calculator">
        <div class="container">
          <div class="title-heading text-center">
                <h3>Калькулятор</h3>
                <div class="title-border"></div>
                <p class="text-muted">Рассчитайте предварительную стоимость.</p>
              </div>
        <form>
          <div class="form-group">
            <label for="company">Вид организации</label>
            <select class="form-control" id="company">
              <option>ИП</option>
              <option>ООО</option>
            </select>
          </div>
          <div class="form-group">
            <label for="viewform">Вид деятельности</label>
            <select class="form-control" id="viewform">
              <option>Услуги</option>
              <option>Строительство</option>
              <option>Торговля</option>
              <option>Производство</option>
              <option>Импорт/экспорт</option>
              <option>Сельское хозяйство</option>
              <option>Некоммерческие организации</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nalog">Система налогооблажения</label>
            <select class="form-control" id="nalog">
              <option>ПАТЕНТ</option>
              <option>УСН - доход</option>
              <option>УСН - доход/расход</option>
              <option>ОСНО</option>
            </select>
          </div>


          <div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" >Количество сотрудников</span>
</div>
<input type="text" class="form-control" name="input_text2" id="input_text2" max="50" value="1" onchange="rangeinput2.value = input_text2.value" />
<input type="range" oninput="input_text2.value = rangeinput2.value" class="form-control-range slider" type="range" min="1" max="50" value="1" id="rangeinput2" step="1" onchange="input_text2.value = rangeinput2.value" ></div>


  <div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" >Количество докуметов в месяц</span>
</div>
<input type="text" class="form-control" name="input_text1" id="input_text1" max="100" value="1" onchange="rangeinput1.value = input_text1.value" />
<input type="range" oninput="input_text1.value = rangeinput1.value" class="form-control-range slider" type="range" min="1" max="100" value="1" id="rangeinput1" step="1" onchange="input_text1.value = rangeinput1.value" ></div>
        </form>
           <h5 class="price">Предварительная стоимость: </h5> 
           <a id="price_r" style="cursor: pointer;" class="btn btn-custom btn-rounded text-white" data-toggle="modal" data-target="#callback">Заказать</a>                                
        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START FEATURES -->
    <section class="section bg-light" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                      

                    

                      <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_main_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_main_key]['content_ru']?>
                                            
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3 vertical-content">
                <div class="col-lg-6">
                    <div class="features-content mt-4">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_1_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_1_key]['content_ru']?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-img mt-4 text-center">
                      <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$advantages_1_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                        <img src="<?=$content_index[$advantages_1_key]['img_full']?>" class="img-fluid img-service" alt=""><!--img-after-->
                        <!--<img src="web/images/blog/img-1.jpg" class="img-fluid img-service img-before" alt="">-->
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5 vertical-content">

                <div class="col-lg-6 order-lg-2">
                    <div class="features-content mt-4">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_2_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_2_key]['content_ru']?>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="features-img mt-4">
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$advantages_2_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                        <img src="<?=$content_index[$advantages_2_key]['img_full']?>" class="img-fluid img-service" alt=""> <!--img-after-->
                        <!--<img src="web/images/blog/img-1.jpg" class="img-fluid img-service img-before" alt="">-->
                    </div>
                </div>

            </div>





            <div class="row mt-5 pt-3 vertical-content">
                <div class="col-lg-6">
                    <div class="features-content mt-4">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_3_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_3_key]['content_ru']?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-img mt-4 text-center">
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$advantages_3_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                        <img src="<?=$content_index[$advantages_3_key]['img_full']?>" class="img-fluid img-service" alt=""><!--img-after-->
                        <!--<img src="web/images/blog/img-1.jpg" class="img-fluid img-service img-before" alt="">-->
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5 vertical-content">

                <div class="col-lg-6 order-lg-2">
                    <div class="features-content mt-4">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_4_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_4_key]['content_ru']?>
                    </div>
                </div>


                <div class="col-lg-6 order-lg-1">
                    <div class="features-img mt-4">
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$advantages_4_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                        <img src="<?=$content_index[$advantages_4_key]['img_full']?>" class="img-fluid img-service" alt=""><!--img-after-->
                        <!--<img src="web/images/blog/img-1.jpg" class="img-fluid img-service img-before" alt="">-->
                    </div>
                </div>

            </div>





            <div class="row mt-5 pt-3 vertical-content">
                <div class="col-lg-6">
                    <div class="features-content mt-4">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_5_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_5_key]['content_ru']?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-img mt-4 text-center">
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$advantages_5_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                        <img src="<?=$content_index[$advantages_5_key]['img_full']?>" class="img-fluid img-service" alt=""><!--img-after-->
                        <!--<img src="web/images/blog/img-1.jpg" class="img-fluid img-service img-before" alt="">-->
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5 vertical-content">

                <div class="col-lg-6 order-lg-2">
                    <div class="features-content mt-4">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$advantages_6_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$advantages_6_key]['content_ru']?>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="features-img mt-4">
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$advantages_6_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                        <img src="<?=$content_index[$advantages_6_key]['img_full']?>" class="img-fluid img-service" alt=""><!--img-after-->
                        <!--<img src="web/images/blog/img-1.jpg" class="img-fluid img-service img-before" alt="">-->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END FEATURES -->

    <!-- START VIDEO -->
    <section class="bg-video" style="background-image: url(<?=$content_index[$main_img_2_key]['img_full']?>);">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-box text-center text-white">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$main_img_2_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$main_img_2_key]['content_ru']?>
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$main_img_2_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
              

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END VIDEO -->

    <!-- START CLIENT -->
    <section class="section" id="client">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$review_main_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$review_main_key]['content_ru']?>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5 pt-3">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme" id="owl-demo">

                        <div class="item mt-4 text-center review">

                          <div class="row">
                            <div class="col-lg-6">
                            <div class="client-img">
                                <img src="<?=$content_index[$review_1_key]['img_full']?>" class="img-fluid rounded-circle" alt="">
                                <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$review_1_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                            </div>
                            <div class="client-img-icon">
                                <i class="pe-7s-comment"></i>
                            </div>
                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$review_1_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$review_1_key]['content_ru']?>

                            <div class="client-icon pt-5">
                                <i class="mdi mdi-format-quote-open"></i>
                            </div>
                            </div>




                            <div class="col-lg-6">
                            <div class="client-img">
                                <img src="<?=$content_index[$review_2_key]['img_full']?>" class="img-fluid rounded-circle" alt="">
                                <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$review_2_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                            </div>
                            <div class="client-img-icon">
                                <i class="pe-7s-comment"></i>
                            </div>
                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$review_2_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$review_2_key]['content_ru']?>

                            <div class="client-icon pt-5">
                                <i class="mdi mdi-format-quote-open"></i>
                            </div>
                            </div>
                            </div>
                        </div>




                        <div class="item mt-4 text-center review">

                          <div class="row">
                            <div class="col-lg-6">
                            <div class="client-img">
                                <img src="<?=$content_index[$review_3_key]['img_full']?>" class="img-fluid rounded-circle" alt="">
                                <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$review_3_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                            </div>
                            <div class="client-img-icon">
                                <i class="pe-7s-comment"></i>
                            </div>
                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$review_3_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$review_3_key]['content_ru']?>

                            <div class="client-icon pt-5">
                                <i class="mdi mdi-format-quote-open"></i>
                            </div>
                            </div>

                            <div class="col-lg-6">
                            <div class="client-img">
                                <img src="<?=$content_index[$review_4_key]['img_full']?>" class="img-fluid rounded-circle" alt="">
                                <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$review_4_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                            </div>
                            <div class="client-img-icon">
                                <i class="pe-7s-comment"></i>
                            </div>
                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$review_4_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$review_4_key]['content_ru']?>

                            <div class="client-icon pt-5">
                                <i class="mdi mdi-format-quote-open"></i>
                            </div>
                            </div>
                            </div>
                        </div>





                        <div class="item mt-4 text-center review">

                          <div class="row">
                            <div class="col-lg-6">
                            <div class="client-img">
                                <img src="<?=$content_index[$review_5_key]['img_full']?>" class="img-fluid rounded-circle" alt="">
                                <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$review_5_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                            </div>
                            <div class="client-img-icon">
                                <i class="pe-7s-comment"></i>
                            </div>
                            <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$review_5_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$review_5_key]['content_ru']?>

                            <div class="client-icon pt-5">
                                <i class="mdi mdi-format-quote-open"></i>
                            </div>
                            </div>

                            
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END CLIENT -->

    <!-- START PRICING -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$price_main_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$price_main_key]['content_ru']?>
                    </div>
                </div>
            </div>
<?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$price_after_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
            <div class="row mt-5 pt-3">
                
                        <?=$content_index[$price_after_key]['content_ru']?>

            </div>
        </div>
    </section>
    <!-- END PRICING -->

    <!-- START CTA -->
    <section class="bg-cta" style="background-image: url(<?=$content_index[$main_img_3_key]['img_full']?>);">

                                
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box text-center">
                      <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$main_img_3_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$main_img_3_key]['content_ru']?>
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$main_img_3_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- START FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$answer_main_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$answer_main_key]['content_ru']?>
                    </div>
                </div>
            </div>
<?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$answer_after_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
            <div class="row mt-5 pt-3">
                
                        <?=$content_index[$answer_after_key]['content_ru']?>

            </div>
        </div>
    </section>
    <!-- END FAQ -->

    <!-- START BLOG -->
    <section class="section bg-light d-none" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h2>Наша команда</h2>
                        <div class="title-border"></div>
                        <p class="text-muted">У нас работают опытные специалисты в области бухгалтерии.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-lg-4">
                    <div class="blog-content mt-4">
                        <div class="blog-image">
                            <img src="images/blog/img-1.jpg" class="img-fluid" alt="">
                        </div>

                        <!--<div class="blog-lable">
                            <p class="date mb-0">14</p>
                            <p class="month mb-0">April</p>
                        </div>-->

                        <div class="blog-content">
                            <h3 class="mt-2"><a href="" class="blog-link f-18">Фамилия Имя.</a></h3>
                            <p class="text-muted mt-3">Корректно рассчитаю и вовремя уплачу за вас налоги. Без рисков, просрочек и штрафов. <br>Стаж: 15 лет.</p>
                            <div class="mt-4">
                                <a href="" class="read-more">Ведущий бухгалтер</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="blog-content mt-4">
                        <div class="blog-image">
                            <img src="images/blog/img-2.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="blog-content">
                            <h3 class="mt-2"><a href="" class="blog-link f-18">Фамилия Имя.</a></h3>
                            <p class="text-muted mt-3">Корректно рассчитаю и вовремя уплачу за вас налоги. Без рисков, просрочек и штрафов. <br>Стаж: 15 лет.</p>
                            <div class="mt-4">
                                <a href="" class="read-more">бухгалтер</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-content mt-4">
                        <div class="blog-image">
                            <img src="images/blog/img-3.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="blog-content">
                            <h3 class="mt-2"><a href="" class="blog-link f-18">Фамилия Имя.</a></h3>
                            <p class="text-muted mt-3">Корректно рассчитаю и вовремя уплачу за вас налоги. Без рисков, просрочек и штрафов. <br>Стаж: 15 лет.</p>
                            <div class="mt-4">
                                <a href="" class="read-more">бухгалтер</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CLIENT-IMG -->
    <section class="bg-client-logo bg-light" style="background-image: url(<?=$content_index[$main_img_4_key]['img_full']?>);">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-box text-center text-white">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$main_img_4_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
                        <?=$content_index[$main_img_4_key]['content_ru']?>
                        <?php if($admin): ?>
        <a href="#todiv"> <i id="<?=$content_index[$main_img_4_key]['id']?>" class="far fa-image text-grey popup-open-img" value="5" style="cursor: pointer; font-size: 30px;"> Edit image</i> </a> <br> <br>
        <?php endif;?>
              

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT-IMG -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$contact_main_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
          <?=$content_index[$contact_main_key]['content_ru']?>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-lg-4">

                    <?php if($admin): ?>
                                <a href="#todiv"> <i id="<?=$content_index[$contact_after_key]['id']?>" class="fas fa-text-height text-grey popup-open" value="5" style="cursor: pointer; font-size: 30px;"> Edit text</i> </a>
                                  <?php endif;?>
          <?=$content_index[$contact_after_key]['content_ru']?>
                </div>

                <div class="col-lg-8">
                    <div class="custom-form mt-4">
                        <div id="message"></div>
                        <form>
                            <input type="text" id="bg_video" value="<?=$content_index[$main_img_2_key]['img_full']?>" class="d-none">
                            <input type="text" id="bg_cta" value="<?=$content_index[$main_img_3_key]['img_full']?>" class="d-none">
                            <input type="text" id="bg_client_logo" value="<?=$content_index[$main_img_4_key]['img_full']?>" class="d-none">
                            <input type="text" id="param" value="<?=$csrf_param?>" class="d-none">
                            <input type="text" id="token" value="<?=$csrf_token?>" class="d-none">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Ваше Имя">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="Тема">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <textarea name="comments" id="comments" rows="5" class="form-control" placeholder="Текст сообщения"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-3">
                                        <input type="button" id="submit" name="send" class="submitBnt btn btn-custom btn-round" value="Отправить сообщение">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="col-12 mt-5">
                  <div class="table-responsive">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab08eb88e634cc13ff8b78cc030bd97d13b6eef6ab7af62fe890b733266484266&amp;width=1008&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
          </div>
            </div>
        </div>
    </section>
    <!-- END CONTECT -->

    
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заполните форму и мы сами позвоним вам, вы также можете позвонить нам по тел:<br> +7 (495) 543-35-69 <br> +7 (926) 964-76-24</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name_callback" class="col-form-label">Как вас зовут?</label>
            <input type="text" class="form-control btn-rounded" id="name_callback" placeholder="Ваше Имя" required="required">
          </div>
          <div class="form-group">
            <label for="phone_number" class="col-form-label">Ваш номер телефона</label>
            <input type="number" class="form-control btn-rounded" id="phone_number" placeholder="+79269647624" required="required">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-rounded" data-dismiss="modal">Отмена</button>
        <button id="addcallback" type="button" class="btn btn-custom btn-rounded">Перезвоните мне</button>
      </div>
    </div>
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
        <!--

#веймаранер #веймаранеры #веймаранерщенки #веймаранернавсегда #пес #пёсель #зоопсихолог #зоопсихология #послушнаясобака #воспитаниещенка #обучениесобак #dog #собака #щенки #щенок #dogtraining #собакамосква #воспитаниесобак #дрессировкасобакмосква #дрессировкасобак #worlddog #worlddogs #dogtrainers #trainingdogs #worlddogday #worlddog #дрессировкасобаки #кинологмосква #дрессировкащенка #кинолог #кинологи