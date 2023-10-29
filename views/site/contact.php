<?php 
$contact_key = array_search('contact', array_column($content_index, 'type'));
$contact_title_key = array_search('contact_title', array_column($content_index, 'type'));
?>
<div class="container contact">
    
    <h1 class="my-5 pt-5 text-center"> 
      <?php if($admin): ?>
                   <a href="#"> <i id="<?=$content_index[$contact_title_key]['id']?>" class="fas fa-text-height text-dark popup-open" style="cursor: pointer; font-size: 30px;"> Edit Text</i></a> 
                <?php endif;?>
      <?=$content_index[$contact_title_key]['content_'.$lang]?>
        
      </h1>
    <div class="row align-items-center">
    <div class="col-md-4">
        <p class="lead text-center">
             <?php if($admin): ?>
                   <a href="#"> <i id="<?=$content_index[$contact_key]['id']?>" class="fas fa-text-height text-dark popup-open" style="cursor: pointer; font-size: 30px;"> Edit Text</i></a> <br>
                <?php endif;?>
       <?=$content_index[$contact_key]['content_'.$lang]?>
        </p>
    </div>
    <div class="col-md-8 mb-5 table-responsive">
  
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3ddd2fb61a9fcf475531a0474f7fe6d2f3d779669776e9250bf4221141e9f38f&amp;width=650&amp;height=543&amp;lang=ru_RU&amp;scroll=true"></script>
        <!--<div id="map">
        
        </div>-->
    </div>
    </div>
</div>
 <!--<script>
        function initMap(){
            var pos = {lat: 59.433316, lng:24.7595196 };
            var opt = {
                center: pos,
                zoom: 17
            }
            var Mymap = new google.maps.Map(document.getElementById('map'), opt);
            
            var marker = new google.maps.Marker({
                position: pos,
                map: Mymap,
                title: 'SPB ESTONIA ÕIGUSBÜROO'
            });
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhS9c6CVZwStKiQekrI5kSjMAtMennc4A&callback=initMap"
    async defer></script>-->


