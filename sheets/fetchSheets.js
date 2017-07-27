var $ = jQuery;

$.ajax({
  url:'https://spreadsheets.google.com/feeds/list/1-VOK8amX3dQfBXEESElcHPeLrpkCigWhs5CiKTVnP3Q/1/public/basic?alt=json',
  success: function(data){
    console.log(data);
  }
});
