/** google_map js **/

function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(39.4708018, 3.1498427),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
