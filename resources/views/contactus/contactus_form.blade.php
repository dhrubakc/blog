<?php echo View::make('includes/front/header'); ?>
<!-- Slider -->
<?php echo View::make('includes/front/slider'); ?>
<!-- / Slider -->

<!-- Main Content -->
<!-- Main Content -->
<main id="main-content">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- Welcome -->
                    <div class="row-welcome">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-animation-block" data-animate="fadeInUp" data-duration="1s" data-delay="0.2s" data-position="75%">
                                        <div class="wprt-content-box style-1 text-white bg-dark-2 has-move-content has-paddings" data-margin-top="-187" data-padding-top="36" data-padding-right="36" data-padding-bottom="52" data-padding-left="36">
                                            <div class="inner">
                                                @foreach($category_list as $category)
                                                <h2 class="heading font-size-18 text-white margin-bottom-22">{{$category->title}}</h2>
                                                @endforeach
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" class="img-thumbnail">
                                                </div>
                                                <div class="col-lg-8">
                                                    @foreach($category_list as $category)
                                                <p class="text-justify">{{$category->description}}</p>
                                                @endforeach
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="wprt-btn col-lg-12 text-right" style="margin-top:10px;">
                                                    <a class="wprt-button small outline light" href="#">READ MORE</a>
                                                </div>
                                            </div>    
                                            </div>                                     
                                        </div><!-- /.wprt-content-box -->
                                    </div><!-- /.wprt-animation-block -->

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- .row -->
                        </div><!-- /.wprt-container -->
                    </div><!-- /.row-welcome -->

                    <!-- Request 1 -->
                    <div class="row-request-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">                                    
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 --> 

                                <div class="col-md-6">   
                                   <img src="{{URL::to('/')}}/front/assets/img/lmc-image.png"/>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-content-box request-form-1 bg-white">
                                        <div class="inner">
                                            <div class="wprt-headings clearfix text-left">
                                                <h2 class="heading font-size-28">Contact US</h2>
                                            </div><!-- /.wprt-headings -->

                                            <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                            <table class="table table-striped">
                                                    <tr><th><h4>GPO Box:-</h4></th><td><h4> Tansen-11,Pravas,Palpa</h4></td></tr>
                                                   <tr><th><h4>Tel :-</h4></th><td><h4> +977-75-411201, 411202 </h4></td></tr>
                                                   <tr><th><h4>Fax:-</h4></th><td><h4>+977-75-411205</h4></td></tr>
                                                    <tr><th><h4>E-Mail:-</h4></th><td><h4> info@lmc.edu.np       lmcpalpa@gmail.com</h4></td></tr>
                                                    <tr><th><h4>Website :-</h4></th><td><h4> www.lmc.edu.np</h4></td></tr>
                                                   
                                                    
                                                
                                            </table>
                                        </div>
                                    </div><!-- /.wprt-content-box -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">                                    
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 --> 
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.row-request-1 -->
                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</main> <!-- /#main-content -->

<!-- Footer -->
<?php echo View::make('includes/front/footer'); ?>
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/plugins.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/countTo.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/validate.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/shortcodes.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/main.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/front/includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

<!-- Mirrored from themesparagon.com/demo/medical/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 06:41:02 GMT -->
</html>

