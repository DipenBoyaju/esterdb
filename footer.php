<footer class="footer">
  		<div class="container">
  			<div class="footer-block">
	  			<div class="row">
					  <div class="col-lg-3 col-md-3">
						  <p>sdfg</p>
					  </div>
		  			<div class="col-lg-4 col-md-4">
						<h6>Explore</h6>
		  				<ul>
		  					<li>about</li>
		  					<li>home</li>
		  					<li>service</li>
		  					<li>blogs</li>
		  				</ul>
		  			</div>
		  		</div>
		  		<div class="copyright">
		  			<p>©2022 ESTER. All Rights Reserved.</p>
		  		</div>
		  	</div>
  		</div>
  		<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
		  	<path fill="#121212" fill-opacity="1" d="M0,224L24,192C48,160,96,96,144,85.3C192,75,240,117,288,133.3C336,149,384,139,432,160C480,181,528,235,576,234.7C624,235,672,181,720,160C768,139,816,149,864,170.7C912,192,960,224,1008,229.3C1056,235,1104,213,1152,202.7C1200,192,1248,192,1296,208C1344,224,1392,256,1416,272L1440,288L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
		</svg>
  	</footer>

<!-- js-links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- bootstrap-js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
(function($) { "use strict";
    $(function() {
      	var header = $(".start-style");
  		$(window).scroll(function() {    
    		scroll = $(window).scrollTop();
    		if (scroll >= 10) {
      			header.removeClass('start-style').addClass("scroll-on");
    		} else {
      			header.removeClass("scroll-on").addClass('start-style');
    		}
  		});
	});  

	//Menu On Hover
  	$('body').on('mouseenter mouseleave','.nav-item',function(e){
      	if ($(window).width() > 750) {
        	var _d=$(e.target).closest('.nav-item');_d.addClass('show');
        	setTimeout(function(){
        	_d[_d.is(':hover')?'addClass':'removeClass']('show');
        	},1);
      	}
  	});  
})(jQuery); 
</script>