(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.collapsible').collapsible();
    $('.parallax').parallax();
    $('.slider').slider({indicators: false, height: 500});
    $('.modal-trigger').leanModal();
  }); // end of document ready
})(jQuery); // end of jQuery name space

function initMap() {
  var position = {lat: 19.6924839, lng: -99.19021929999997};
  var mapDiv = document.getElementById('google-map');
  var map = new google.maps.Map(mapDiv, {
    center: position,
    zoom: 15
  });
  var marker = new google.maps.Marker({
    position: position,
    map: map,
    title: 'Aerostatic'
  });
}
