window.addEventListener('load', function() {
    var uluru = {
        lat: -25.345,
        lng: 131.037
    };

    function initMap(point) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            mapTypeId: "satellite",
            center: point
        });
    }

    initMap(uluru);
});