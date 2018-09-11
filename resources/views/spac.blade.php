@include ('includes._head')
<link href="/royalslider/royalslider.css" rel="stylesheet">
<link href="/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
<link href="/css/lightslider.css" rel="stylesheet"/>
</head>

<body>
    <!--[if lt IE 9]><script src="../assets/js/lib/html5shiv.js"></script><![endif]-->
    
@include ('includes._header')
<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
  	<div class="rsContent">
    	<img class="rsImg" src="/storage/img/spac-banner.jpg" alt="">
    	
  	</div>
</div>
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
			                	<a href="/storage/img/pages/new/spac/05.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/spac/t05.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/spac/08.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/spac/t08.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/spac/12.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/spac/t12.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			                <li>
			                	<a href="/storage/img/pages/new/spac/16.jpg" data-gallery="#blueimp-gallery-spac-gallery">
			                    	<img src="/storage/img/pages/new/spac/t16.jpg" class="img-responsive" alt="">
		                    	</a>
			                </li>
			            </ul>
			        </div>
			    </div>	
			</div>
		</div>
	</div>
</section>
<section class="about anySection grayBg">
	<div class="container">
		<div class="row">
			<div class="col-md-12"><span class="sectionTitle">{{trans('local.spac')}}</span></div>
		</div>
		<div class="row contentRow">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <p>{{trans('local.spac1')}}
                            <br><br>
                            {{trans('local.spac2')}}

                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p> {{trans('local.spac3')}}
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>{{trans('local.spac4')}} </p>
                    </div>
                </div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="relative clearfix">
					<a href="/storage/img/spac-photo.jpg" data-gallery="#blueimp-gallery-spac"><img src="/storage/img/spac-photo.jpg" class="img-responsive fullWidth" alt=""></a>
					<span class="plusIcon"></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section class="about anySection">
	<div class="container">
		<div class="row contentRow">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix darkGrayBg">Measured Reserve</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix lightGrayBg">2,91 million ton</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix">Probable Reserve</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix">3,65 million ton</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix darkGrayBg">% Copper</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix lightGrayBg">%1,23 Cu</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix">Investment Duration</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix">12 months</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix darkGrayBg">Return of Investment</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix lightGrayBg">17 months</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix">Project Life</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix">12 months Investment + 8 year production</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix darkGrayBg">Yearly Capacity</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix lightGrayBg">360.000 ton/year</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tableTitle clearfix">Total Copper Concrete</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 colNo">
						<div class="tableDescription clearfix">167.625 ton</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="relative clearfix">
					<img src="../assets/img/spac-people.jpg" class="img-responsive fullWidth" alt="">
				</div>
			</div>
		</div>
	</div>
</section> -->


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
