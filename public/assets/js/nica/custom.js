(function($){
  $(document).ready(function(){
     $("body").append("<div class='scrollup'></div>");
     $(window).scroll(function(){
        if ($(this).scrollTop() > 120) {
          $('.scrollup').fadeIn();
        } else {
          $('.scrollup').fadeOut();
        }
     });
     $(document).on("click",".scrollup",function(e){
        e.preventDefault();
        $("html, body").stop().animate({ scrollTop: 0 }, "slow");
      });
    });

})(window.jQuery);
