var $ = jQuery;
window.googleDocCallback = function () { return true; };
$.ajax({
  var url = 'https://spreadsheets.google.com/feeds/list/1-VOK8amX3dQfBXEESElcHPeLrpkCigWhs5CiKTVnP3Q/od6/public/values?alt=json-in-script&?callback=googleDocCallback';
  jQuery.getJSON(url).success(function(data) {
    console.log(data);
  }).error(function(message) {
    console.error('error' + message);
  }).complete(function() {
    console.log('completed!');
  });
});
