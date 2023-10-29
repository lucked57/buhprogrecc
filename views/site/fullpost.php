<?php

        if(empty($post['title_'.$lang]) || empty($post['content_'.$lang])){
          if(!empty($post['title_en']) && !empty($post['content_en'])){
            $title = $post['title_en'];
            $content_min = $post['content_en'];
          }
          elseif(!empty($post['title_ru']) && !empty($post['content_ru'])){
            $title = $post['title_ru'];
            $content_min = $post['content_ru'];
          }
          elseif(!empty($post['title_ee']) && !empty($post['content_ee'])){
            $title = $post['title_ee'];
            $content_min = $post['content_ee'];
          }
        }
        else{
          $title = $post['title_'.$lang];
          $content_min = $post['content_'.$lang];
        }

        ?>



<div class="cd-fixed-bg" id="topw" style="background-image: url(<?=$post['img_full']?>);">
       
       
      <div class="cd-fixed-bg__content"> <!--style="top:10%;"-->
        <h1 class="text-white"><?=$title?></h1>
        
      </div>
    </div>
      


       
       
       
       
        <div class="container text-blog py-5 my-5">
          <div class="row">
            <div class="col-12">

              <p class="text-justify"><?=$content_min?></p>

                
              
            </div>
          </div>
        </div>
      
