<?php
/**
 * @package WordPress
 * @subpackage Lmsecurite_2
 */
?>

<!-- begin footer -->

<script>
    var debugInput = document.querySelector("input");
    var offset = <?php echo (is_admin_bar_showing())?100:50; ?>;
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
        document.body.classList.toggle('titles-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();

    var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    var is_safari = navigator.userAgent.toLowerCase().indexOf('safari') > -1;

    function scrollToDest(scrollDest){

        $('.parallax').animate({
          scrollTop:scrollDest + $('.parallax').scrollTop()-offset
        }, 'slow');
       $('body,html').animate({
          scrollTop:scrollDest - offset
        }, 'slow');

    }


    function scrollToId(id) {
       //location.hash = id;
       var scrollDest = $(id).offset().top;
       scrollToDest(scrollDest);
      
    }

    /*$(".parallax").scroll(function(){
       console.log($(".parallax").scrollTop());
       if($(".parallax").scrollTop() > 100)
          $('#nav_header').addClass("small");
        else
          $('#nav_header').removeClass("small");
    });*/

    function scrollToFirstPage(){
      var scrollDest = $(window).height();

      scrollToDest(scrollDest);

    }


    $(function () {

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

      $( "#slider4" ).on( "swipe", swipeHandler );
 
        // Callback function references the event target and adds the 'swipe' class to it
        function swipeHandler( event ){
          $( event.target ).addClass( "swipe" );
          console.log(event);
        }

    });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71697241-1', 'auto');
  ga('send', 'pageview');



/*
  $( "#nav_header li").hover(function(){
    
    $(this).find(".fa").height("15px").css('color', 'inherit');
    
  },function(){
     
    $(this).find(".fa").height("0px").css('color', 'transparent');
    
  });*/


  </script>
  
  <footer id="colophon" class="site-footer" role="contentinfo">

      <div class="site-info">
      </div><!-- .site-info -->
      <div id="contact_footer">
                <i class="fa fa-at"></i>
                <span class="nou">contactez nous</span>
         </div>
    </footer><!-- #colophon -->
<?php wp_footer(); ?>


</body>
</html>