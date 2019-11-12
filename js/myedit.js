wintop = 0;
    $('#h_menu_btn').on('click',function(){
        $('body').removeClass('from_bottom');
        $('body').toggleClass('menu_open');
        if($('body').hasClass('menu_open') && $(window).width() < 813){
            wintop = $(window).scrollTop();
            $("#menu").animate({scrollTop:0},0);
        }else{
            $("html,body").animate({scrollTop:wintop},0);
            wintop = 0;
        }
		return false;
	});
    
jQuery(function($){
    var current_scrollY;
    $('.menu-trigger').on('click', function() {
      $(this).toggleClass('active');
      if ($(this).hasClass('active')) {
      current_scrollY = $( window ).scrollTop();
        $('.navi-area').addClass('active');
        $( 'body' ).css( {
          position: 'fixed',
          width: '100%',
          //top位置をその時点のスクロール量分だけ上にずらす
          top: -1 * current_scrollY
          } );
        // return false;
      } else {
        $('.navi-area').removeClass('active');
        $( 'body' ).attr( { style: '' } );
        $("html,body").scrollTop(current_scrollY);
        // $( 'body' ).attr( { style: '' } );
        // $( 'html, body' ).prop( { scrollTop: current_scrollY } );
        // return false;
      }
  
    });
  });

  $(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 200){
                $(this).addClass('scrollin');
            }
        });
    });
});

  jQuery(function($) {
    if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
      if($(window).innerWidth() > 767 ){
        $(".box").css({"height":$(window).height()});
        $.scrollify({
          section:".box"
        });
      };
      }
  });

  jQuery(function($){
    $('[data-fancybox]').fancybox();
  });

  

  