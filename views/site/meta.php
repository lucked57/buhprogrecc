<?php
//главная
  $pages_name = 'index';
  $title_index = array_search('title_'.$pages_name, array_column($content_index, 'type'));
  $keywords_index = array_search('keywords_'.$pages_name, array_column($content_index, 'type'));
  $description_index = array_search('description_'.$pages_name, array_column($content_index, 'type'));
//Правовые услуги
  $pages_name = 'service';
  $title_service = array_search('title_'.$pages_name, array_column($content_index, 'type'));
  $keywords_service = array_search('keywords_'.$pages_name, array_column($content_index, 'type'));
  $description_service = array_search('description_'.$pages_name, array_column($content_index, 'type'));
//Партнеры
  $pages_name = 'partners';
  $title_partners = array_search('title_'.$pages_name, array_column($content_index, 'type'));
  $keywords_partners = array_search('keywords_'.$pages_name, array_column($content_index, 'type'));
  $description_partners = array_search('description_'.$pages_name, array_column($content_index, 'type'));
//Команда
  $pages_name = 'team';
  $title_team = array_search('title_'.$pages_name, array_column($content_index, 'type'));
  $keywords_team = array_search('keywords_'.$pages_name, array_column($content_index, 'type'));
  $description_team = array_search('description_'.$pages_name, array_column($content_index, 'type'));
//Контакты
  $pages_name = 'contact';
  $title_contact = array_search('title_'.$pages_name, array_column($content_index, 'type'));
  $keywords_contact = array_search('keywords_'.$pages_name, array_column($content_index, 'type'));
  $description_contact = array_search('description_'.$pages_name, array_column($content_index, 'type'));

//menu

$main_key = array_search('main_menu', array_column($content_index, 'type'));

$service_key = array_search('service_menu', array_column($content_index, 'type'));

$accfin_key = array_search('accfin_menu', array_column($content_index, 'type'));

$contact_key = array_search('contact_menu', array_column($content_index, 'type'));

$patern_key = array_search('patern_menu', array_column($content_index, 'type'));

$team_key = array_search('team_menu', array_column($content_index, 'type'));

$aml_key = array_search('aml_menu', array_column($content_index, 'type'));

$blog_key = array_search('blog_menu', array_column($content_index, 'type'));
?>

<div class="container contact mb-5" id="todiv">
    <h1 class="my-5 pt-5 text-center">Meta</h1>
    <div class="row align-items-center">
    <div class="col-md-3 mb-3">
        <h4>Главная</h4>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$title_index]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Название</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$keywords_index]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Ключевые слова</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$description_index]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Описание</i> </a>
        </p>
    </div>
    <div class="col-md-3 mb-3">
        <h4>Правовые услуги</h4>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$title_service]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Название</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$keywords_service]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Ключевые слова</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$description_service]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Описание</i> </a>
        </p>
    </div>
    <div class="col-md-3 mb-3">
        <h4>Партнеры</h4>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$title_partners]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Название</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$keywords_partners]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Ключевые слова</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$description_partners]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Описание</i> </a>
        </p>
    </div>
    <div class="col-md-3 mb-3">
        <h4>Команда</h4>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$title_team]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Название</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$keywords_team]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Ключевые слова</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$description_team]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Описание</i> </a>
        </p>
    </div>
    <div class="col-md-3 mb-3">
        <h4>Контакты</h4>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$title_contact]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Название</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$keywords_contact]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Ключевые слова</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$description_contact]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Описание</i> </a>
        </p>
    </div>


    <div class="col-md-3 mb-3">
        <h4>Menu</h4>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$main_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Main</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$service_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Service</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$accfin_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> ACC & FIN</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$contact_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Contact</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$patern_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Patern</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$team_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Team</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$aml_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> AML</i> </a>
        </p>
        <p style="font-size: 20px;">
          <a href="#todiv"> <i id="<?=$content_index[$blog_key]['id']?>" class="fas fa-pen popup-open" style="cursor: pointer;"> Blog</i> </a>
        </p>
    </div>





    </div>
</div>


