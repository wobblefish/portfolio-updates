<script type="text/javascript">
	$(document).ready(function () {
	  /* global $ */
	  $(".nav-link").removeClass("active");
	  $('#media').addClass('active');
	  
	  $('.video').fancybox({
        'width': '90%',
        'height': 'auto',
        'type': 'iframe'
    });
    
	});
</script>

<style>
/*FancyBox Gallery Nav Fixes*/
.fancybox-nav span {
 visibility: visible;
}
.fancybox-prev span {
  left: -2.5em;
}
.fancybox-next span {
  right: -2.5em;
}
</style>

<div id="container">					
	<div id="row">
    <h1 class="text-center">Logos</h1>
    
      <div id="media">
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox thumbnail" rel="gallery" href="/resources/media/Logo1-bretonsmartek.jpg" alt="Breton SmarTek Logo" title="Breton SmarTek Logo">
          <img src="/resources/media/Logo1-bretonsmartek.jpg" class="wide center-block"border="0" />
        </a>
      	<p class="text-center font-weight-bold">Breton SmarTek Logo</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox thumbnail" rel="gallery" href="/resources/media/Logo2-fireq.jpg" alt="FireQ-RVS Logo" title="FireQ-RVS Logo">
          <img src="/resources/media/Logo2-fireq.jpg" class="wide center-block"/>
        </a>
      	<p class="text-center font-weight-bold">FireQ-RVS Logo</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox thumbnail" rel="gallery" href="/resources/media/Logo3-cit.png" alt="Customer In Touch Logo" title="Customer In Touch Logo">
          <img src="/resources/media/Logo3-cit.png" class="wide center-block"/>
        </a>
      	<p class="text-center font-weight-bold">Customer In Touch Logo</p>
      </div>
      
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox thumbnail" rel="gallery" href="/resources/media/Logo4-ggm.jpg" alt="Go Green Messaging Logo" title="Go Green Messaging Logo">
          <img src="/resources/media/Logo4-ggm.jpg" class="wide center-block" />
        </a>
      	<p class="text-center font-weight-bold">Go Green Messaging Logo</p>
      </div>
      
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox thumbnail" rel="gallery" href="/resources/media/businessCard.png" alt="FireQ-RVS Business Card" title="FireQ-RVS Business Card">
          <img src="/resources/media/businessCard.png" class="wide center-block" />
        </a>
      	<p class="text-center font-weight-bold">FireQ-RVS Business Cards</p>
      </div>
      
      <div class="newline" style="height:20px; clear:both;"></div>
      
      
      
      <h1 class="text-center">Training Videos</h1>
      
      <!--Make this into a fancybox window - play walkthrough video -->
      <div class="col-xs-12 col-md-4 text-center text-center">
      	<a class="video fancybox fancybox.iframe thumbnail" rel="gallery2" href="/resources/media/videoPlayer.php?video=FireQTraining" data-toggle="tooltip" data-placement="top" title="Watch Video">
      	  <img class="img-responsive wide center-block" src="/resources/media/Logo2-fireq.jpg" />
        </a>
    	  <p class="text-center font-weight-bold">FireQ-RVS Sample</p>
    	  <br>
      </div>
      
      <!--Make this into a fancybox window - play walkthrough video -->
      <div class="col-xs-12 col-md-4 text-center text-center">
      	<a class="video fancybox fancybox.iframe thumbnail" rel="gallery2" href="/resources/media/videoPlayer.php?video=GGMTraining" data-toggle="tooltip" data-placement="top" title="Watch Video">
      	  <img class="img-responsive wide center-block" src="/resources/media/Logo4-ggm.jpg" />
        </a>
    	  <p class="text-center font-weight-bold">Go Green Messaging Sample</p>
    	  <br>
      </div>
      
      <!--Make this into a fancybox window - play walkthrough video -->
      <div class="col-xs-12 col-md-4 text-center text-center">
      	<a class="video fancybox fancybox.iframe thumbnail" rel="gallery2" href="/resources/media/videoPlayer.php?video=PremierTraining" data-toggle="tooltip" data-placement="top" title="Watch Video">
      	  <img class="img-responsive wide center-block" src="/resources/media/premier.jpg" />
        </a>
    	  <p class="text-center font-weight-bold">Premier Literacy Suite Sample</p>
    	  <br>
      </div>
      
      
      
      
      
      
      <div class="newline" style="height:20px; clear:both;"></div>
      
      <h1 class="text-center">Music Promotion Flyers</h1>
      
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox fancybox thumbnail" rel="gallery3" href="/resources/media/musicFlyer1.jpg" alt="Go Green Messaging Logo">
          <img src="/resources/media/musicFlyer1.jpg" class="tall center-block" />
        </a>
      	<p class="text-center font-weight-bold">Electronic Funk 1</p>
      </div>
      
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox fancybox thumbnail" rel="gallery3"  href="/resources/media/musicFlyer2.jpg" alt="Go Green Messaging Logo">
          <img src="/resources/media/musicFlyer2.jpg" class="tall center-block" />
        </a>
      	<p class="text-center font-weight-bold">Electronic Funk 2</p>
      </div>
      
      <div class="col-xs-12 col-md-4 text-center">
      	<a class="fancybox fancybox thumbnail" rel="gallery3"  href="/resources/media/musicFlyer3.jpg" alt="Go Green Messaging Logo">
          <img src="/resources/media/musicFlyer3.jpg" class="tall center-block" />
        </a>
      	<p class="text-center font-weight-bold">Lucky 13</p>
      </div>
    </div>  
    <div class="spacer" style="height:60px; clear:both;"></div>
	</div>
</div>