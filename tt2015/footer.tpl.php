<section id="local" class="inclinado3">
    
      <div id="googlemaps"></div>
      <div class="infos">
          <div class="row">
            <div class="col-sm-5">
              <h3>localização</h3>
              <div class="endereco">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/endereco.png" />
                <a href="https://www.google.com.br/maps/place/R.+At%C3%ADlio+Ped%C3%A3o,+15+-+%C3%81guas+Claras,+Piraquara+-+PR/@-25.499183,-49.097557,17z/data=!3m1!4b1!4m2!3m1!1s0x94dcf39214a83e0b:0x2939d995edeedbbd">como chegar</a>
              </div>
            </div>
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-5">
             
            </div>
          </div>
      </div>
              
              <!-- Include the Google Maps API library - required for embedding maps -->
              <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
               
              <script type="text/javascript">
              // The latitude and longitude of your business / place
              var position = [-25.499183,-49.097557];
              function showGoogleMaps() {
              var styles = [
              {
              stylers: [                
              { saturation: -100 }
              ]
              }
              ];
              var latLng = new google.maps.LatLng(position[0], position[1]);
              var mapOptions = {
              zoom: 14, // initialize zoom level - the max value is 21
              streetViewControl: true, // hide the yellow Street View pegman
              scaleControl: false, // allow users to zoom the Google Map
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              center: latLng,        
              scrollwheel: false,
              disableDefaultUI:true,
              disableDefaultUI: true,
              navigationControl: false,
              mapTypeControl: false,
              scaleControl: false,
              center:new google.maps.LatLng(-25.499183,-49.097557)
              };
              var image = 'http://tribaltech.com.br/sites/all/themes/tt2015/img/ico_ttmapa.png';
              map = new google.maps.Map(document.getElementById('googlemaps'),
              mapOptions);
              // Show the default red marker at the location
              marker = new google.maps.Marker({
              position: latLng,
              map: map,
              draggable: false,
              clickable: true,
              icon: image,
              animation: google.maps.Animation.DROP
              });
              map.setOptions({styles: styles});
              var infowindow = new google.maps.InfoWindow({
              content:"<h4>Fazenda Heimari</h4><p>Rua Atílio Pedão, 15<br /> >> <a style=\"color: #333 !important; font-weight: bold; \" href=\"https://www.google.com.br/maps/place/R.+At%C3%ADlio+Ped%C3%A3o,+15+-+%C3%81guas+Claras,+Piraquara+-+PR/@-25.499183,-49.097557,17z/data=!3m1!4b1!4m2!3m1!1s0x94dcf39214a83e0b:0x2939d995edeedbbd\" target=\"_blank\">Saiba como chegar</a></p>"
              });
              google.maps.event.addListener(marker, 'click', function() { infowindow.open(map,marker); });
              }
              google.maps.event.addDomListener(window, 'load', showGoogleMaps);
              </script>
  </section><!-- local  -->
<footer>
  <div class="container">
    <div class="row">
        <div class="col-sm-1">
          <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_ttblack3.png" />
        </div>
        <div class="col-sm-5">
          <ul class="menu2">
           <li><a href="<?php print $GLOBALS['base_path']; ?>">Página Inicial</a></li>
            <li><a href="<?php print $GLOBALS['base_path']; ?>#topo-atracoes">Atrações</a></li>
            <li><a href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
            <!--li><a href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Evolution Town</a></li-->
            <li><a data-toggle="pill" href="<?php print $GLOBALS['base_path']; ?>#participe">Participe</a></li>
            <li><a data-toggle="modal" data-target="#lista-excursoes" href="#">Excursões</a></li>              
            <!--li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li-->
            <li><a href="#form-contato" data-toggle="modal">Contato</a></li>       
          </ul>
        </div>
        <div class="col-sm-5">
           <ul>
              <li><a href="https://www.facebook.com/TribaltechOfficial" target="_blank">facebook</a></li>
              <li><a href="https://instagram.com/tribaltechofficial/" target="_blank">instagram</a></li>              
            </ul>
        </div>
    </div>  
      
    </div>
    
</footer>  
