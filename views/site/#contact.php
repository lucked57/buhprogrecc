<div class="container contact">
    <h1 class="my-5 pt-5 text-center">Контакты</h1>
    <div class="row align-items-center">
    <div class="col-md-4">
        <p class="lead text-center">

       <i class="fas fa-phone"></i> +372 581 888 92 <br><br>
       <i class="fas fa-envelope"></i>  info@spbestonia.ee <br><br>
      <i class="fas fa-map-marker-alt"></i>  Erika 14, Tallinn 10416
        </p>
    </div>
    <div class="col-md-8 mb-5 table-responsive">
  
      <!-- <script type="text/javascript" src="//maps-js.apissputnik.ru/v0.3/loader.js?1bG3MVGXFo66"></script>-->
        <div id="map">
        
        </div>
    </div>
    </div>
</div>
 <script>
        function initMap(){
            var pos = {lat: 59.451287, lng:24.717425 };
            
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
    async defer></script>

