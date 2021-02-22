function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: -7.8291942, lng: 110.3736555};

    var map = new google.maps.Map(document.getElementById('myMap'), {
        zoom: 15,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Yogyakarta, INA' // Title Location
    });
}