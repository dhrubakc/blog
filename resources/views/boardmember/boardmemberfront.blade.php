@extends('master')
<!-- Slider -->

<!-- / Slider -->
@section('content')
<?php echo View::make('includes/front/slider'); ?>
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
                                    <div class="wprt-spacer clearfix" data-desktop="65" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">
                                             @foreach($boardmember_list as $boardmember)
             
                                             {!!$boardmember->title!!}
                                             @endforeach
                                        </h2>
                                        <p class="sub-heading">  
                                         @foreach($boardmember_list as $boardmember)
                                        <p class="text-justify">{{!!$boardmember->description!!}}</p>
                                                @endforeach</p>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="45" data-mobi="45" data-smobi="45"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="82" data-mobi="60" data-smobi="60"></div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- /.wprt-container -->
                    </div><!-- /.row-welcome -->

                    <!-- Facts -->
                    <div class="row-facts-1 parallax-1">
                        <div class="wprt-container" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center">
                                        <div class="numb-count" data-to="856" data-speed="3000" data-inviewport="yes">0</div>
                                        <div class="sep white"></div>
                                        <div class="name-count">Hospital Rooms</div>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center">
                                        <div class="numb-count" data-to="5234" data-speed="3000" data-inviewport="yes">0</div>
                                        <div class="sep white"></div>
                                        <div class="name-count">Satisfied Patients</div>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center">
                                        <div class="numb-count" data-to="789" data-speed="3000" data-inviewport="yes">0</div>
                                        <div class="sep white"></div>
                                        <div class="name-count">Different Services</div>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center">
                                        <div class="numb-count" data-to="3657" data-speed="3000" data-inviewport="yes">0</div>
                                        <div class="sep white"></div>
                                        <div class="name-count">People Working</div>
                                    </div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.row-facts-1 -->


                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</main> <!-- /#main-content -->

<!-- Footer -->
@stop
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

