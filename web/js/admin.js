var url;
var val

/////////Модальное окно nicedit с текстовыми полями
$(document).ready(function($) {
    var id;
    $('.popup-open').click(function(e) { //при клике на кнпоку для открытия модального окна
         
        //анимация и открытие модального окна
         id = e.target.id;
        $(".popup").css("z-index",99999);
        $("body").css("overflow",'hidden');
        $( ".popup" ).animate({
          opacity: 1,
        });

        //запрос к бд на получение данных, для помещения их в текстовые поля
        //var editor_ee = nicEditors.findEditor(textarea_ee); //textarea_ee - это id
        //var editor_en = nicEditors.findEditor(textarea_en);
        var editor_ru = nicEditors.findEditor(textarea_ru);

        var errors = false;

        if(errors == false){

                $.ajax({
                          url: "/site/index",
                          type: "POST",
                          data: ({id: id, target: 'select'}),
                          dataType: "html",
                          success: function(data){
                              data = JSON.parse(data); //преобразуем из json в объект
                              //присвоим значения textarea
                              //editor_ee.setContent(data.content_ee);
                              //editor_en.setContent(data.content_en);
                              editor_ru.setContent(data.content_ru);
                          }

                })
                }
                else{
                    alert(errors);
                }
    }); 

    $('.popup-close').click(function() { //при клике на кнопку для закрытия модального окна

                $( ".popup" ).animate({
            opacity: 0,
          }, 400, function() {
            $(".popup").css("z-index",-5);
            $("body").css("overflow",'auto');
          });
    }); 
    $('#change_text').click(function() { //при клике на кнопку для отправки данных на сервер
            //находим нужные textarea
            var editor_ru = new nicEditors.findEditor('textarea_ru');
            //var editor_ee = new nicEditors.findEditor('textarea_ee');
            //var editor_en = new nicEditors.findEditor('textarea_en');
            //получаем значения textarea
            var content_ru = editor_ru.getContent();
            //var content_ee = editor_ee.getContent();
            //var content_en = editor_en.getContent();

            var errors = false;

            if(content_ru.length == 0){
                  errors = 'Есть пустые значения';
                }

        if(errors == false){

                $.ajax({
                          url: "/site/index",
                          type: "POST",
                          data: ({id: id, target: 'update_text', content_ru: content_ru}),
                          dataType: "html",
                          success: function(data){
                            alert(data);
                          }

                })
                }
                else{
                    alert(errors);
                }



            //console.log(content_ru);
            //console.log(id);
        });
});



/////////Модальное окно nicedit с полем для фото

$(document).ready(function($) {
    var id;
    $('.popup-open-img').click(function(e) { //при клике на кнпоку для открытия модального окна
         
        //анимация и открытие модального окна
         id = e.target.id;
        $(".popup-img").css("z-index",99999);
        $("body").css("overflow",'hidden');
        $( ".popup-img" ).animate({
          opacity: 1,
        });
        $('.id-input').val(id);

    }); 

    $('.popup-close-img').click(function() { //при клике на кнопку для закрытия модального окна

                $( ".popup-img" ).animate({
            opacity: 0,
          }, 400, function() {
            $(".popup-img").css("z-index",-5);
            $("body").css("overflow",'auto');
          });
    }); 
});







   