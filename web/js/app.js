 /* Theme Name: Readxon
   Author: Themesdesign
   Version: 1.0.0
   File Description: Main JS file of the template
*/
 
 // STICKY
$(window).scroll(function() {
    $('.navbar-collapse').removeClass('show');
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".sticky").addClass("nav-sticky");
    } else {
        $(".sticky").removeClass("nav-sticky");
    }
});

// SmoothLink
$('.navbar-nav a').on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 0
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});

// mouse-down
$('.mouse_down a').on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 0
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});

// scrollspy
$(".navbar-nav").scrollspy({
    offset:20
});

// video
/*$('.video-play-icon, .video-play-icon-trigger').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});*/

// Carousel
$("#owl-demo").owlCarousel({
    autoPlay: 3000,
    stopOnHover: true,
    navigation: false,
    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    singleItem: true,
    autoHeight: true,
});

// typed
$(".element").each(function() {
    var $this = $(this);
    $this.typed({
        strings: $this.attr('data-elements').split(','),
        typeSpeed: 100, // typing speed
        backDelay: 3000 // pause before backspacing
    });
});

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validatePhone(phone){
 let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
 return regex.test(phone);
}

/*function sayHi() {
  $('.img-after').show();
  $('.img-before').hide();

    var bg_video = $('#bg_video').val();
    var bg_cta = $('#bg_cta').val();
    var bg_client_logo = $('#bg_client_logo').val();

    $(".bg-video").css("background-image", "url(" + bg_video + ")");
    $(".bg-cta").css("background-image", "url(" + bg_cta + ")");
    $(".bg-client-logo").css("background-image", "url(" + bg_client_logo + ")");
}



$(document).ready(function() {
  setTimeout(sayHi, 1000);
});*/


// video
//$(".player").mb_YTPlayer();

function MainPrice(price_people, doc, nalog, viewform, company){
    nalog = $('#nalog').val();
    viewform = $('#viewform').val();
    company = $('#company').val();
    doc = $('#input_text1').val();
    switch(true) { 
    case doc >= 0 && doc < 11:
        switch (viewform) {
          case 'Услуги':
                switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 1500;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 2000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 3000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 5000;
                }
                else{
                    price_itog = Number(price_people) + 7000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Строительство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 1500;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 2000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 3000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 6500;
                }
                else{
                    price_itog = Number(price_people) + 8500;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Торговля':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 1500;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 2000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 3000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 5000;
                }
                else{
                    price_itog = Number(price_people) + 7000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
            case 'Производство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 1500;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 2000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 3000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 5000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 7000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Импорт/экспорт':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 1500;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 2000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 3000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 5000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 7000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Сельское хозяйство':
            price_itog = Number(price_people) + 7000;
            break;
            case 'Некоммерческие организации':
            if(company == 'ИП'){
                    price_itog = Number(price_people) + 5000;
                }
                else{
                    price_itog = Number(price_people) + 7000;
                }
            break;
          default:
            viewform = 'error';
        }
        
        break;
    case doc >= 11 && doc < 31:
        switch (viewform) {
          case 'Услуги':
                switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 3000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 5000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 7500;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 10000;
                }
                else{
                    price_itog = Number(price_people) + 15000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Строительство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 3000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 5000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 8000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 15000;
                }
                else{
                    price_itog = Number(price_people) + 17000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Торговля':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 3000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 5000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 8000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 15000;
                }
                else{
                    price_itog = Number(price_people) + 17000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
            case 'Производство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 3000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 5000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 8000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 15000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 17000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Импорт/экспорт':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 3000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 5000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 8000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 15000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 17000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Сельское хозяйство':
            price_itog = Number(price_people) + 15000;
            break;
            case 'Некоммерческие организации':
            if(company == 'ИП'){
                    price_itog = Number(price_people) + 10000;
                }
                else{
                    price_itog = Number(price_people) + 15000;
                }
            break;
          default:
            viewform = 'error';
        }
        break;
    case doc >= 31 && doc < 51:
        switch (viewform) {
          case 'Услуги':
                switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 5000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 7500;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 17000;
                }
                else{
                    price_itog = Number(price_people) + 20000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Строительство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 5000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 7500;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 17000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 20000;
                }
                else{
                    price_itog = Number(price_people) + 25000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Торговля':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 5000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 7500;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 17000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 20000;
                }
                else{
                    price_itog = Number(price_people) + 22000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
            case 'Производство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 5000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 7500;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 17000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 20000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 22000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Импорт/экспорт':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 5000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 7500;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 17000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 20000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 22000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Сельское хозяйство':
            price_itog = Number(price_people) + 30000;
            break;
            case 'Некоммерческие организации':
            if(company == 'ИП'){
                    price_itog = Number(price_people) + 25000;
                }
                else{
                    price_itog = Number(price_people) + 30000;
                }
            break;
          default:
            viewform = 'error';
        }
        break;
    case doc >= 51 && doc < 81:
        switch (viewform) {
          case 'Услуги':
                switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 7500;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 15000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 20000;
                }
                else{
                    price_itog = Number(price_people) + 25000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Строительство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 7500;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 25000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 22000;
                }
                else{
                    price_itog = Number(price_people) + 30000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Торговля':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 7500;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 22000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 25000;
                }
                else{
                    price_itog = Number(price_people) + 27000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
            case 'Производство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 7500;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 22000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 25000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 27000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Импорт/экспорт':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 7500;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 22000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 25000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 27000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Сельское хозяйство':
            price_itog = Number(price_people) + 45000;
            break;
            case 'Некоммерческие организации':
            if(company == 'ИП'){
                    price_itog = Number(price_people) + 35000;
                }
                else{
                    price_itog = Number(price_people) + 55000;
                }
            break;
          default:
            viewform = 'error';
        }
        break;
    case doc >= 81 && doc < 101:
        switch (viewform) {
          case 'Услуги':
                switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 20000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 27000;
                }
                else{
                    price_itog = Number(price_people) + 27000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Строительство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 27000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 35000;
                }
                else{
                    price_itog = Number(price_people) + 45000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Торговля':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 25000;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 30000;
                }
                else{
                    price_itog = Number(price_people) + 35000;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
            case 'Производство':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 10000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 25000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 30000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 35000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Импорт/экспорт':
            switch (nalog) {
              case 'ПАТЕНТ':
                price_itog = Number(price_people) + 10000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход':
                price_itog = Number(price_people) + 10000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'УСН - доход/расход':
                price_itog = Number(price_people) + 25000;
                price_itog = Number(price_itog) + Number(price_itog)*0.35;
                break;
              case 'ОСНО':
                if(company == 'ИП'){
                    price_itog = Number(price_people) + 30000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                else{
                    price_itog = Number(price_people) + 35000;
                    price_itog = Number(price_itog) + Number(price_itog)*0.35;
                }
                break;
              default:
                nalog = 'error';
             }
            break;
          case 'Сельское хозяйство':
            price_itog = Number(price_people) + 65000;
            break;
            case 'Некоммерческие организации':
            if(company == 'ИП'){
                    price_itog = Number(price_people) + 55000;
                }
                else{
                    price_itog = Number(price_people) + 70000;
                }
            break;
          default:
            viewform = 'error';
        }
        break;
    default:
        alert('Больше 100 документов по договренности');
}
  $('.price').html('Предварительная стоимость: ' + Math.round(price_itog) + ' руб.');
  return Math.round(price_itog);
}
var price_r;
$('#price_r').click(function() {
        price_r = true;
    });

var viewform = $('#viewform').val();
var nalog = $('#nalog').val();
var people = $('#input_text2').val();
var doc = $('#input_text1').val();
var price_viewform = 0;
var price_nalog = 0;
var price_people = 750;
var price_doc = 0;
var price_defolt = 0;
var price_itog = 0;
var company = 'ИП';

console.log(viewform);
console.log(nalog);
console.log(people);
console.log(doc);

$("#company").change(function() {
   company = $(this).val();
   MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
    console.log(company);
});

$("#viewform").change(function() {
   viewform = $(this).val();
   MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
    console.log(viewform);
});

$("#nalog").change(function() {
   nalog = $(this).val();
   MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
   console.log(nalog);
});

$("#rangeinput2").change(function() {
  people = $('#input_text2').val();
  price_people = 750 * Number(people);
  MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
  console.log('люди: ' + people);
});

$("#input_text2").change(function() {
  people = $('#input_text2').val();
  price_people = 750 * Number(people);
  MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
  console.log('люди: ' + people);
});

$("#rangeinput1").change(function() {
  var doc = $('#input_text1').val();
  MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
  console.log('документы: ' + doc);
});

$("#input_text1").change(function() {
  var doc = $('#input_text1').val();
  MainPrice(Number(price_people), Number(doc), nalog, viewform, company);
  console.log('документы: ' + doc);
});




$('#addcallback').click(function() {

  var errors = false;
         
       var name = $('#name_callback').val();

       var phone = $('#phone_number').val();

       if(name.trim().length == 0){
                  errors = 'Пожалуйства, укажите ваше имя';
                }
 
                if (!validatePhone(phone)){
                  errors = 'Пожалуйства, правильно укажите ваш номер телефона';
                }


    var data = new FormData();

    if(!price_r){
         data.append( 'callback', 1 );
    }
    else{
        data.append( 'price_r', 1 );

        data.append('viewform', viewform);
        data.append('nalog', nalog);
        data.append('people', people);
        data.append('doc', doc);
        data.append('company', company);
        
        data.append('price', MainPrice(Number(price_people), Number(doc), nalog, viewform, company));
    }

   

    var value1 = $('#param').val();
    var value2 = $('#token').val();


    data.append(value1, value2);

    data.append('name', name);

    data.append('phone', phone);

    //data.append('target', 'callback');


        

        if(errors == false){

                $.ajax({
        url         : '/site/index',
        type        : 'POST', 
        data        : data,
        cache       : false,
        dataType    : 'json',
        // отключаем обработку передаваемых данных, пусть передаются как есть
        processData : false,
        // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
        contentType : false, 
        // функция успешного ответа сервера
        success     : function( respond, status, jqXHR ){

            // ОК - файлы загружены
            if( typeof respond.error === 'undefined' ){
                // выведем пути загруженных файлов в блок '.ajax-reply'
                var files_path = respond.files;
                var html = '';
                $.each( files_path, function( key, val ){
                     html += val;
                } )

                //$('.ajax-reply').html( html );
                alert(html);
            }
            // ошибка
            else {
                console.log('ОШИБКА: ' + respond.data );
            }
        },
        // функция ошибки ответа сервера
        error: function( jqXHR, status, errorThrown ){
            console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
        }

    });
                }
                else{
                    alert(errors);
                }
    });




$('#submit').click(function() {

  var errors = false;
         
       var comments = $('#comments').val();

       var subject = $('#subject').val();

       var email = $('#email').val();

       var name = $('#name').val();

       if(comments.trim().length == 0 || subject.trim().length == 0 || email.trim().length == 0 || name.trim().length == 0){
                  errors = 'Пожалуйства, заполните все поля';
                }

                if (!validateEmail(email)){
                    errors = 'Пожалуйства, правильно укажите ваш email';
                }

    var data = new FormData();


    data.append( 'sendemail', 1 );

    var value1 = $('#param').val();
    var value2 = $('#token').val();


    data.append(value1, value2);

    data.append('name', name);

    data.append('email', email);

    data.append('subject', subject);

    data.append('comments', comments);

    //data.append('target', 'callback');


        

        if(errors == false){

                $.ajax({
        url         : '/site/index',
        type        : 'POST', 
        data        : data,
        cache       : false,
        dataType    : 'json',
        // отключаем обработку передаваемых данных, пусть передаются как есть
        processData : false,
        // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
        contentType : false, 
        // функция успешного ответа сервера
        success     : function( respond, status, jqXHR ){

            // ОК - файлы загружены
            if( typeof respond.error === 'undefined' ){
                // выведем пути загруженных файлов в блок '.ajax-reply'
                var files_path = respond.files;
                var html = '';
                $.each( files_path, function( key, val ){
                     html += val;
                } )

                //$('.ajax-reply').html( html );
                alert(html);
            }
            // ошибка
            else {
                console.log('ОШИБКА: ' + respond.data );
            }
        },
        // функция ошибки ответа сервера
        error: function( jqXHR, status, errorThrown ){
            console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
        }

    });
                }
                else{
                    alert(errors);
                }
    });