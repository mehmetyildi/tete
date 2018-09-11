<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> 
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
				<a href="index.php" ><img src="/storage/img/footer-tete-logo.png" class="img-responsive teteLogo" alt=""></a>
				<a href="http://ilbak.com.tr" target="_blank" class="ilbakLogo" style="margin-top: 32px;"><img src="/storage/img/ilbak.png" class="img-responsive" alt="İlbak Holding" title="İlbak Holding"></a>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 ">
				<div class="footerBox withPaddingBottom clearfix borderLeft">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="about.php">{{ trans('local.corporate') }}</a>
                            <a href="spac.php">{{ trans('local.spac') }}</a>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="production.php">{{ trans('local.production') }}</a>
                            <a href="contact.php">{{ trans('local.contact') }}</a>
                        </div>
                    </div>
					
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 ">
				<div class="footerBox clearfix borderLeft">
					<h3>
						TETE ALBANIA TUNNEL &amp; MINING Sh.A. <br>
					</h3>
					<address>
						Rruga "Sami Frasheri", Kompleksi Nobis, <br>
						Kati 1 Tirane / Albania <br>
						<a style="display:block; float: left; margin-right: 10px; margin-bottom:0;" href="mailto:info@tetealb.com">info@tetealb.com</a> 
                        <a style="display:block; float: left; margin-top: -2px; margin-bottom:0;" href="tel: +355(4) 24 72 000"> +355(4) 24 72 000</a>
					</address>
					<!-- <h1></h1> -->
				</div>
			</div>
		</div>
	</div>
</footer>