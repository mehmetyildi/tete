@include('includes._head')
<link href="/royalslider/royalslider.css" rel="stylesheet">
<link href="/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
<link href="/css/lightslider.css" rel="stylesheet"/>
</head>

<body>
    <!--[if lt IE 9]><script src="../assets/js/lib/html5shiv.js"></script><![endif]-->
    
@include('includes._header')
<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
  	<div class="rsContent">
    	<img class="rsImg" src="/storage/img/about-banner.jpg" alt="">
    	
  	</div>
</div>
<section class="about anySection">
	<div class="container">
        <div class="row">
            <div class="col-md-12"><span class="sectionTitle">{{trans('local.corporate')}}</span></div>
        </div>
        <div class="row contentRow">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>{{trans('local.about1')}}
                            <br><br>

                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p> {{trans('local.about2')}}
                            <br><br>


                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <p>{{trans('local.about3')}}</p>
                    </div>
                </div>
            </div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls preload="none" poster="/storage/video.jpg" class="fullWidth">
					  	<source src="/storage/tete-albania-2.mp4" type="video/mp4">
					  	Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="anyCarousel relative">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="anySlider">
    				<a id="lSActionLeft2" style="direction:ltr !important;"></a>
    				<a id="lSActionRight2" style="direction:ltr !important;"></a>
			        <div class="item">
			            <ul id="about-slider" class="content-slider">
			                <li>
			                	<a href="/storage/img/pages/new/corporate/11.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/corporate/t11.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/corporate/7899.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/corporate/t7899.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/corporate/7772.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/corporate/t7772.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/corporate/7924.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/corporate/t7924.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/corporate/7999.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/corporate/t7999.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/corporate/8062.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/corporate/t8062.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			            </ul>
			        </div>
			    </div>	
			</div>
		</div>
	</div>
</section>




@include('includes._footer')
@include('includes._scripts')
<script src="/royalslider/jquery.royalslider.min.js" /></script>
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
		    autoScaleSliderHeight: 444,
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
		    imgHeight: 444
	  	});
	});
</script>
<script>
	$(document).ready(function() {
		$("#about-slider").lightSlider({
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
