@include ('includes._head')
<link href="/royalslider/royalslider.css" rel="stylesheet">
<link href="/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
<link href="/css/lightslider.css" rel="stylesheet"/>
<style>
.mb-5{
	margin-bottom: 30px;
}
</style>
</head>

<body>
	<!--[if lt IE 9]><script src="../assets/js/lib/html5shiv.js"></script><![endif]-->

	@include ('includes._header')
	<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
		<div class="rsContent">
			<img class="rsImg" src="/storage/img/production-banner.jpg" alt="">

		</div>
	</div>


	<section class="about anySection grayBg">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><span class="sectionTitle">{{trans('local.gallery')}}</span></div>
			</div>
			<div class="row contentRow">

				@foreach($galleries as $gallery)
				<div class="col-md-4 col-xs-12">
					<a href="{{$gallery->main_image_downloadable}}" data-gallery="#blueimp-gallery-spac-gallery">
						<img src="{{$gallery->main_image}}" class="img-responsive mb-5" alt="">
					</a>
				</div>
				@endforeach
		</div>
	</div>
</section>


@include ('includes._footer')
@include ('includes._scripts')
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
