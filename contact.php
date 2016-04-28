<?php  include("header.php"); ?>

    <div class="row">
        <div class="col s12 m10 offset-m1 little-padding">    
            <div class="col m10 offset-m1 white border-blue contact">
                <h2>Nous contacter</h2>
                <div class="bold center-align little-padding">
                    <div>12 rue marie curie</div>
                    <div>10000 TROYES</div>
                    <div>France</div>
                </div>
                <div class="col s10 offset-s1" id="contact-googleMap"></div>
            </div>
        </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(48.297345, 4.074401),
                zoom:12,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
                    
            var map = new google.maps.Map(document.getElementById("contact-googleMap"),mapProp);
            
            var marker = new google.maps.Marker({
                position: {lat: 48.297345, lng: 4.074401},
                map: map,
            });
            
            var infowindow = new google.maps.InfoWindow({
                content: "<b>Université de Technologie de Troyes</b>"
            });
            
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php  include("footer.php"); ?>