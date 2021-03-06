<div class="container contact">
  <h2>{{ pll__('Vrei să ne transmiți un mesaj?') }}</h2>
  <div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="address">
          <div class="address-row">
            <span><i class="fas fa-map-marker-alt"></i></span>
            <span>
              {{ pll__('Adresă') }}:
              <a
                target="_blank"
                href="http://maps.google.com/?q=Calea Moţilor, 5A,  510134 Alba Iulia, România">
                Calea Moţilor, 5A,  510134 Alba Iulia, România
              </a>
            </span>
          </div>
          <div class="address-row">
            <span><i class="fas fa-phone"></i></span>
            <span>
              {{ pll__('Telefon') }}:
              <a href="tel:0372 586 428" class="no-break">0372 586 428</a> /
              <a href="tel:0258 819 462" class="no-break">0258 819 462</a>
            </span>
          </div>
          <div class="address-row">
            <span><i class="fas fa-envelope"></i></span>
            <span>
              {{ pll__('E-mail') }}:
              <a href="mailto:{{ pll__('salut@albaiuliasmartcity.ro') }}" class="no-break">
                {{ pll__('salut@albaiuliasmartcity.ro') }}
              </a>
            </span>
          </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="contact-form">
        {!! do_shortcode('[pirate_forms]') !!}
      </div>
    </div>
  </div>
</div>

<h2>{{ pll__('Unde ne găsești') }}</h2>
<div class="container-fluid">
  <div class="row">
    <div class="map-container" id="map"></div>
  </div>
</div>

<script>
  function initMap() {
    var marker_location = { lat: 46.0732391, lng: 23.5775401 };
    var map = new google.maps.Map(document.getElementById('map'), {
      center: marker_location,
      zoom: 17,
      styles: [
        {
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#1d2c4d"
            }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#8ec3b9"
            }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#1a3646"
            }
          ]
        },
        {
          "featureType": "administrative.country",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#4b6878"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#64779e"
            }
          ]
        },
        {
          "featureType": "administrative.province",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#4b6878"
            }
          ]
        },
        {
          "featureType": "landscape.man_made",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#334e87"
            }
          ]
        },
        {
          "featureType": "landscape.natural",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#023e58"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#283d6a"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#6f9ba5"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#1d2c4d"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#023e58"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#3C7680"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#304a7d"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#98a5be"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#1d2c4d"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#2c6675"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#255763"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#b0d5ce"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#023e58"
            }
          ]
        },
        {
          "featureType": "transit",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#98a5be"
            }
          ]
        },
        {
          "featureType": "transit",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#1d2c4d"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#283d6a"
            }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#3a4762"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#0e1626"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#4e6d70"
            }
          ]
        }
      ]
    });
    var marker = new google.maps.Marker({
      position: marker_location,
      map: map
    });
  }
</script>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdTpQaYd3fLOTWutXMqmtvE_MlxMWHu3A&callback=initMap"
  async
  defer>
</script>
