!function(e){e("header .mobile-menu").click(function(){e("header nav").toggleClass("open")}),e("header nav .close").click(function(){e("header nav").toggleClass("open")}),e(document).keyup(function(n){"Escape"===n.key&&e("header nav").hasClass("open")&&e("header nav").toggleClass("open")})}(jQuery);