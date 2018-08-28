// IIFE - Immediately Invoked Function Expression
(function($, window, document) {
  // The $ is now locally scoped
 // Listen for the jQuery ready event on the document
  $(function() {

    $("#bgvid-pausebtn,#bgvid").on('click',function(){
      var video = $("#bgvid")[0];
      var pausebtn = $("#bgvid-pausebtn");
      if (video.paused) {
        video.play();
        $(pausebtn).html("<i class='fa fa-pause'></i>");
      } else {
        video.pause();
        $(pausebtn).html("<i class='fa fa-play'></i>");
      }
    });

    $("#bgvid-fullbtn").on('click',function(){
      var element = $("#bgvid")[0];       
      if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
      } else if (element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
      }  
    });
  });
 // The rest of the code goes here!
}(window.jQuery, window, document));
// The global jQuery object is passed as a parameter