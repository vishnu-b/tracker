
var map;
var markers = [];
var params = '';

/**
 * Initializes the map and sets the time interval for track function
 * @return {none} Nothing
 */
function initialize()
{
  var mapProp = {
    center:new google.maps.LatLng(17,78),
    zoom:8,
    panControlOptions: {
      position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };
  map=new google.maps.Map(document.getElementById("mapcanvas"),mapProp);

  setInterval(track, 5000);
}

google.maps.event.addDomListener(window, 'load', initialize);

/**
 * Gets called right after initialize() function.
 * @return {none} Nothing
 */
function track(){

  clearMap();

  var url = setUrl();

  downloadUrl(url, function(data){
    var latlng = new google.maps.LatLng(data.lat, data.lng);
    console.log(data);
    placeMarker(latlng);

  });

}

/**
 * gets the returned json data from url
 * @param  {string}   url      The url to get json data from
 * @param  {Function} callback gets the json data returned by getJSON
 */
function downloadUrl(url, callback){
  $.getJSON(url, function(data) {
    callback(data);
  });
}

/**
 * Clears all the markers, infowindows and polylines on map
 * @return {none} Nothing
 */
function clearMap() {
  for(var i = 0; i < markers.length; i++)
  {
    markers[i].setMap(null);
  }
}

/**
 * Places a marker on the map
 * @param  {LatLng object} latlng Latitude and logintude values from json data
 * @return {none}        Nothing
 */
function placeMarker(latlng) {
  var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });

  map.panTo(latlng);
  markers.push(marker);

}

/**
 * Generates the url based on the filter parameters
 */
function setUrl () {
  return '/tracker/track' + params;
}


/**
 * Gets values from filter form and sets the filter variables
 */
function setFilterParams () {
  var userid = document.getElementById('user-id').value;
  var fromDate = document.getElementById('from-date').value;
  var toDate = document.getElementById('to-date').value;

  params = '';

  if (userid) params += '/user/' + userid;
}
