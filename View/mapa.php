<div class="row mapaAl">
    <div class="col-sm-6 mapaIzq p-0">
        <div id="map" style="height: 70vh; width: 70vw; z-index: 2; position: relative; top:-15%; left: 20%">
        </div>


        <script>
            var marker;
            var marker2;
            var map;
            function initMap() {
                var myLatlng = {lat: 19.42548, lng: -99.164578};

                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: myLatlng,
                    streetViewControl: false
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Click to zoom'
                });

                map.addListener('click', function (event) {
                    marker.setPosition(event.latLng);

                    document.getElementById("posx").value = marker.getPosition().lat();
                    document.getElementById("posy").value = marker.getPosition().lng();

                });

                document.getElementById("posx").value = marker.getPosition().lat();
                document.getElementById("posy").value = marker.getPosition().lng();

                var geocoder = new google.maps.Geocoder();

                document.getElementById('buscar').addEventListener('click', function () {
                    alert('hoa');

                    geocodeAddress(geocoder, map);


                });

            }
            $(document).keypress(function (e) {
                var geocoder = new google.maps.Geocoder();
                if (e.which === 13) {
                    geocodeAddress(geocoder, map);
                }
            });
            function geocodeAddress(geocoder, resultsMap) {
                var address = document.getElementById('address').value;

                geocoder.geocode({'address': address}, function (results, status) {
                    if (status === 'OK') {
                        resultsMap.setCenter(results[0].geometry.location);
                        marker.setPosition(results[0].geometry.location);
                        resultsMap.setZoom(15);

                    } else {
                        alert('No se encontro' + status);
                    }
                });
            }
        </script>
        <div class="buscadorMapa">
            <input class="form-control" id="address"   type="text" placeholder="Ingresa la direccion y presiona enter">


        </div>

    </div>
    <div class="col-sm-6 mapaIzq">
        <div class="mapaDer">
        <p class="subTratamientos">HORARIOS</p>
        <p class="textoTratamientos">Lunes a viernes de 10:00 a 19:30</p>
        <p class="textoTratamientos">Sabado, domingo y festivos 10:00 a 18:30</p>
        <br>
        <br>
        <p class="textoTratamientos">Pueden concertarce tratamientos fuera del</p>
        <p class="textoTratamientos">horario de apartura indicado con cita previa.</p>
        <br>
        <br>
        <p class="subTratamientos">DIRECCIÓN</p>
        <p class="textoTratamientos">Av. Insurgentes Sur 105, Roma Sur, Cuauhtémoc,</p>
        <p class="textoTratamientos">06600 Ciudad de México, CDMX, México</p>
        <button id="abrirMapa" class="verMapa">Ver en mapa</button>
        <script>
        $("#abrirMapa").on('click', function(){
            var latitud=marker.getPosition().lat();
            var longitud = marker.getPosition().lng();
            window.open('https://maps.google.com/?q='+latitud+','+longitud);
        });
        </script>
        </div>
    </div>
</div>
<div class="row mapaAl2">
    <div class="col-sm-12 mapaIzq">
        <img src="./assets/img/photo-1560944527-a4a429848866.jpg" style="width: 60vw; height: 50vh;">
    </div>
    
</div>


