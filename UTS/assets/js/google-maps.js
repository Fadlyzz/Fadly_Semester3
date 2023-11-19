function initMap() {
  // Ganti koordinat dengan koordinat yang baru
  var myLatLng = { lat: -6.728095808518539, lng: 110.78005959753276 };

  var map = new google.maps.Map(document.getElementById("google-maps"), {
    zoom: 17,
    center: myLatLng,
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: "Politeknik Balekambang Jepara, Indonesia", // Title Location
  });
}
