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
    	<img class="rsImg" src="/storage/img/contact-banner2.jpg" alt="">
  	</div>
</div>
<div id="googlemaps" style="height:650px;"></div>




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
  	var map; 
    function initMap() {
        var centerLatLng = {lat: 41.901458, lng: 20.044306};
        var map = new google.maps.Map(document.getElementById('googlemaps'), {
          zoom: 10,
          scrollwheel: false,
          center: centerLatLng
        });

        var marker = new google.maps.Marker({
          position: centerLatLng,
          map: map,
          title: 'TETE'
        });
     }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDncyEm2ApXXZ0x8D8QNdqtj8S3j2Sn-4M&callback=initMap" type="text/javascript"></script>
</body>
</html>
