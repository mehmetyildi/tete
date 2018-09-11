@include ('includes._head')
<link href="/royalslider/royalslider.css" rel="stylesheet">
<link href="/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
<link href="/css/lightslider.css" rel="stylesheet"/>
</head>

<body>
    <!--[if lt IE 9]><script src="../assets/js/lib/html5shiv.js"></script><![endif]-->
    
@include('includes._header')
<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
  	<div class="rsContent">
    	<img class="rsImg" src="/storage/img/slider/3.jpg" alt="">
    	@if(app()->getLocale()=='en')
    	<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-rsDelay="1000" data-move-offset="50" data-move-effect="bottom" data-speed="800">
            <h1>{{ trans('local.slide1') }}</h1>
		</div>
		@endif
  	</div>
	<div class="rsContent">
    	<img class="rsImg" src="/storage/img/slider/2.jpg" alt="">
    	@if(app()->getLocale()=='en')
    	<div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-rsDelay="1000" data-move-offset="50" data-move-effect="bottom" data-speed="800">
            <h1>{{ trans('local.slide2') }}</h1>
		</div>
		@endif
  	</div>
</div>

<section class="homeCarousel relative">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="homeOpeningSlider">
    				<a id="lSActionLeft" style="direction:ltr !important;"></a>
    				<a id="lSActionRight" style="direction:ltr !important;"></a>
			        <div class="item">
			            <ul id="content-slider" class="content-slider">
			                <li>
			                	<a href="/storage/img/pages/new/home/44.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t44.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/home/60.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t60.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/home/63.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t63.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/home/65.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t65.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/home/66.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t66.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/home/67.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t67.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/home/76.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/home/t76.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			              
			            </ul>
			        </div>
			    </div>	
			</div>
		</div>
	</div>
</section>




@include ('includes._footer')
@include ('includes._scripts')
<script src="/royalslider/jquery.royalslider.min.js"></script>
<script src="/js/lightslider.js"></script>
<script>
	$(document).ready(function($) {
	  	$('#full-width-slider').royalSlider({
		    arrowsNav: false,
		    loop: true,
		    keyboardNavEnabled: true,
		    controlsInside: false,
		    imageScaleMode: 'fill',
		    arrowsNavAutoHide: false,
		    autoScaleSlider: true, 
		    autoScaleSliderWidth: 1900,     
		    autoScaleSliderHeight: 733,
		    controlNavigation: 'bullets',
		    thumbsFitInViewport: false,
		    navigateByClick: true,
		    autoPlay: {
	    		enabled: true,
	    		pauseOnHover: false,
		    	stopAtAction: false,
		    	delay: 3000
	    	},
		    startSlideId: 0,
		    transitionType:'fade',
		    controlNavigation:'none',
		    globalCaption: false,
		    deeplinking: {
		      enabled: true,
		      change: false
		    },
		    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
		    imgWidth: 1900,
		    imgHeight: 733
	  	});
	});
</script>
<script>
	$(document).ready(function() {
		$("#content-slider").lightSlider({
            item:4,
            loop:true,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            pager:false,
            prevHtml:'<',
            nextHtml:'>',
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:4,
                        slideMove:4,
                        slideMargin:3,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:2
                      }
                }
            ]
        });
	});
</script>
</body>
</html>
