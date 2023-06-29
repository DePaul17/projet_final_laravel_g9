    <link href="css/style.css" rel="stylesheet">

    <x-app-layout style="background-color: black;">


        <body onload="getLocation()">

            <div class="map-container">
                <div class="map-overlay">
                    <br>
                    <h2 style="font-size:40px; margin-left:25px; left:205px;">Nos Trajets</h2>
                    <br>
                    <form style=" margin-left:25px;">
             
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selectione ton trajet</option>
                            <option value="">Oukam - Pikine</option>
                            <option value="">Keur massar Medeina</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <!--<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1lxk6-lH0WQKHY1kwd93Rm-gDcgjImRbA" 
              width="100%" height="100%" frameborder="0" style="border:0;"></iframe>-->
            </div>
            <div id="map"></div>

            <script>
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
                }
            }

            function showPosition(position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;

                const map = new google.maps.Map(document.getElementById("map"), {
                    center: {
                        lat: lat,
                        lng: lng
                    },
                    zoom: 15,
                });

                const marker = new google.maps.Marker({
                    position: {
                        lat: lat,
                        lng: lng
                    },
                    map: map,
                    title: "Votre position",
                });
            }
            </script>

            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyyjAmNe-mfygOKajqPEINw1gTpR-uwNQ&callback=showPosition"
                async defer></script>
            </div>
            </div>
        </body>

        </html>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script>
        // Obtenez la géolocalisation de l'utilisateur
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Utilisez l'API de géocodage de Google Maps pour obtenir l'adresse correspondant aux coordonnées géographiques
                var geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(latitude, longitude);
                geocoder.geocode({
                    'latLng': latlng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            // Créez un élément d'option pour l'adresse et ajoutez-le à l'élément de sélection
                            var address = results[0].formatted_address;
                            var option = document.createElement("option");
                            option.text = address;
                            var select = document.getElementById("mySelect");
                            //select.add(option);
                            select.insertBefore(option, select.firstChild);
                        } else {
                            alert("Aucun résultat trouvé");
                        }
                    } else {
                        alert("Erreur: " + status);
                    }
                });
            }, function() {
                alert("La géolocalisation n'est pas prise en charge par votre navigateur");
            });
        } else {
            alert("La géolocalisation n'est pas prise en charge par votre navigateur");
        }
        </script>

        </body>

    </x-app-layout>