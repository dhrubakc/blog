
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
                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-animation-block" data-animate="fadeInUp" data-duration="1s" data-delay="0.2s" data-position="75%">
                                        <div class="wprt-content-box style-1 text-white bg-dark-2 has-move-content has-paddings" data-margin-top="-187" data-padding-top="36" data-padding-right="36" data-padding-bottom="52" data-padding-left="36">
                                            <div class="inner">
                                                @foreach($chairmanmessage_list as $chairmanmessage)
                                                <h2 class="heading font-size-18 text-white margin-bottom-22">{{$chairmanmessage->title}}</h2>
                                                @endforeach
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" class="img-thumbnail">
                                                </div>
                                                <div class="col-lg-8">
                                                    @foreach($chairmanmessage_list as $chairmanmessage)
                                                <p class="text-justify">{!!$chairmanmessage->description!!}</p>
                                                @endforeach
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="wprt-btn col-lg-12 text-right" style="margin-top:10px;">
                                                    <!-- <a class="wprt-button small outline light" href="#">READ MORE</a> -->
                                                </div>
                                            </div>    
                                            </div>                                     
                                        </div><!-- /.wprt-content-box -->
                                    </div><!-- /.wprt-animation-block -->

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                               

                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="65" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">Wellcome to Medical</h2>
                                        <p class="sub-heading">Our medical specialists care about you &amp; your family’s health</p>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="45" data-mobi="45" data-smobi="45"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <div class="wprt-content-box has-shadow text-center">
                                        <div class="inner">                                        
                                            <div class="wprt-icon-box has-width w100 icon-top align-center rounded-100 grey-outline clearfix">
                                                <div class="image-wrap">
                                                    <img alt="image" src="assets/img/icon-1.png">
                                                </div>
                                                <h3 class="heading"><a target="_blank" href="#"><span>Medical Excellence</span></a></h3>
                                                <p class="desc">
                                                    <span>Lorem ipsum dolor amet, consectetur adipiscing elit. Nullam placerat lorem quis tortor dignissim, eget ultrices sapien bibendum. Aenean scelerisque </span>
                                                </p>
                                            </div><!-- /.wprt-icon-box -->
                                        </div>
                                    </div><!-- /.wprt-content-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-content-box has-shadow text-center">
                                        <div class="inner">                                        
                                            <div class="wprt-icon-box has-width w100 icon-top align-center rounded-100 grey-outline clearfix">
                                                <div class="image-wrap">
                                                    <img alt="image" src="assets/img/icon-2.png">
                                                </div>
                                                <h3 class="heading"><a target="_blank" href="#"><span>Healthcare Professionals</span></a></h3>
                                                <p class="desc">
                                                    <span>Lorem ipsum dolor amet, consectetur adipiscing elit. Nullam placerat lorem quis tortor dignissim, eget ultrices sapien bibendum. Aenean scelerisque </span>
                                                </p>
                                            </div><!-- /.wprt-icon-box -->
                                        </div>
                                    </div><!-- /.wprt-content-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-content-box has-shadow text-center">
                                        <div class="inner">                                        
                                            <div class="wprt-icon-box has-width w100 icon-top align-center rounded-100 grey-outline clearfix">
                                                <div class="image-wrap">
                                                    <img alt="image" src="assets/img/icon-3.png">
                                                </div>
                                                <h3 class="heading"><a target="_blank" href="#"><span>Latest Technologies</span></a></h3>
                                                <p class="desc">
                                                    <span>Lorem ipsum dolor amet, consectetur adipiscing elit. Nullam placerat lorem quis tortor dignissim, eget ultrices sapien bibendum. Aenean scelerisque </span>
                                                </p>
                                            </div><!-- /.wprt-icon-box -->
                                        </div>
                                    </div><!-- /.wprt-content-box -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="82" data-mobi="60" data-smobi="60"></div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- /.wprt-container -->
                    </div><!-- /.row-welcome -->

                    <!-- Team 1 -->
                    <div class="row-team-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="67" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">We are Here for You</h2>
                                        <p class="sub-heading mw-570">All our consultants are highly experienced in their fields and produce excellent outcomes for patients</p>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-team has-bullets bullet40 bullet-circle text-center" data-auto="false" data-column="4" data-column2="3" data-column3="1" data-gap="30">
                                        <div class="owl-carousel owl-theme">
                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL SKINNER</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/4-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL REYNOLDS</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/5-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. TOM SMITH</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/6-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL SKINNER</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL SKINNER</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/4-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL REYNOLDS</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/5-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. TOM SMITH</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/6-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL SKINNER</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL SKINNER</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/4-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL REYNOLDS</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/5-360x300.jpg" alt="image">
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. TOM SMITH</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->

                                            <div class="wprt-image-box style-1 has-shadow doctors clearfix">
                                                <div class="item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/doctors/6-360x300.jpg" alt="image">
                                                            <a href="#"></a>
                                                        </div>

                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">DR. PAUL SKINNER</a></h3>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet consectetur adipisci elit
                                                            </div>
                                                            <div class="wprt-btn">
                                                                <a class="wprt-button small outline" href="#">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box -->     
                                        </div><!-- /.owl-carousel -->
                                    </div><!-- /.wprt-team -->

                                    <div class="wprt-spacer clearfix" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.row-team-1 --> 

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

                    <!-- Services -->
                    <div class="row-servises-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-3">
                                    <div class="wprt-content-box style-1 bg-accent has-paddings" data-padding-top="36" data-padding-right="36" data-padding-bottom="36" data-padding-left="36">
                                        <div class="inner">
                                            <h2 class="heading font-size-18 text-white">DEPARTMENTS</h2>

                                            <div class="wprt-list style-1 clearfix">
                                                <div>
                                                    <span>
                                                        <span class="text">Primary Health Care</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wprt-list style-1 clearfix">
                                                <div>
                                                    <span>
                                                        <span class="text">Pediatric Clinic</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wprt-list style-1 clearfix">
                                                <div>
                                                    <span>
                                                        <span class="text">Gynaecological Clinic</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wprt-list style-1 clearfix">
                                                <div>
                                                    <span>
                                                        <span class="text">Outpatient Surgery</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wprt-list style-1 clearfix">
                                                <div>
                                                    <span>
                                                        <span class="text">Cardiac Clinic</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wprt-list style-1 clearfix no-border-bottom">
                                                <div>
                                                    <span>
                                                        <span class="text">Ophthalmology Clinic</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wprt-btn margin-top-20">
                                                <a class="wprt-button small outline light" href="#">View All</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->


                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="wprt-headings clearfix text-left">
                                                <h2 class="heading font-size-36">Our Servises</h2>
                                            </div>

                                            <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                            <div class="wprt-carousel-box arrow-style-1 arrow-square arrow-top has-arrows"  data-auto="true" data-loop="true" data-gap="30" data-column="3" data-column2="2" data-column3="1">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="wprt-image-box style-1 has-shadow clearfix">
                                                        <div class="item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="{{URL::to('/')}}/front/assets/img/services/1-270x200.jpg" alt="image">
                                                                </div>

                                                                <div class="text-wrap">
                                                                    <h3 class="title"><a href="#">Primary Health Care</a></h3>
                                                                    <div class="desc">
                                                                        Lorem ipsum dolor sit amet consectetur it adipiscing elit Nulla id enim nec 
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.wprt-image-box -->

                                                    <div class="wprt-image-box style-1 has-shadow clearfix">
                                                        <div class="item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="{{URL::to('/')}}/front/assets/img/services/2-270x200.jpg" alt="image">
                                                                </div>

                                                                <div class="text-wrap">
                                                                    <h3 class="title"><a href="#">Pediatric Clinic</a></h3>
                                                                    <div class="desc">
                                                                        Lorem ipsum dolor sit amet consectetur it adipiscing elit Nulla id enim nec 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.wprt-image-box -->

                                                    <div class="wprt-image-box style-1 has-shadow clearfix">
                                                        <div class="item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="{{URL::to('/')}}/front/assets/img/services/3-270x200.jpg" alt="image">
                                                                </div>

                                                                <div class="text-wrap">
                                                                    <h3 class="title"><a href="#">Gynaecological Clinic</a></h3>
                                                                    <div class="desc">
                                                                        Lorem ipsum dolor sit amet consectetur it adipiscing elit Nulla id enim nec 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.wprt-image-box -->

                                                    <div class="wprt-image-box style-1 has-shadow clearfix">
                                                        <div class="item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="{{URL::to('/')}}/front/assets/img/services/4-270x200.jpg" alt="image">
                                                                </div>

                                                                <div class="text-wrap">
                                                                    <h3 class="title"><a href="#">Outpatient Surgery</a></h3>
                                                                    <div class="desc">
                                                                        Lorem ipsum dolor sit amet consectetur it adipiscing elit Nulla id enim nec 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.wprt-image-box -->

                                                    <div class="wprt-image-box style-1 has-shadow clearfix">
                                                        <div class="item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="{{URL::to('/')}}/front/assets/img/services/5-270x200.jpg" height="200" width="270" alt="image">
                                                                </div>

                                                                <div class="text-wrap">
                                                                    <h3 class="title"><a href="#">Cardiac Clinic</a></h3>
                                                                    <div class="desc">
                                                                        Lorem ipsum dolor sit amet consectetur it adipiscing elit Nulla id enim nec 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.wprt-image-box -->

                                                    <div class="wprt-image-box style-1 has-shadow clearfix">
                                                        <div class="item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="{{URL::to('/')}}/front/assets/img/services/6-270x200.jpg" alt="image">
                                                                </div>

                                                                <div class="text-wrap">
                                                                    <h3 class="title"><a href="#">Ophthalmology Clinic</a></h3>
                                                                    <div class="desc">
                                                                        Lorem ipsum dolor sit amet consectetur it adipiscing elit Nulla id enim nec 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.wprt-image-box -->
                                                </div><!-- /.owl-carousel -->
                                            </div><!-- /.wprt-carousel-box -->
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-9 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div>
                        </div>
                    </div><!-- /.row-servises-1 -->

                    <!-- Testimonial -->
                    <div class="row-testimonials-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="87" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">Customer Reviews</h2>
                                        <p class="sub-heading mw-630">All our consultants are highly experienced in their fields and produce excellent outcomes for patients</p>
                                    </div><!-- /.wprt-headings -->

                                    <div class="wprt-spacer clearfix" data-desktop="16" data-mobi="16" data-smobi="16"></div>

                                    <div class="wprt-carousel-box has-bullets bullet40 bullet-circle text-center" data-auto="true" data-loop="true" data-gap="30" data-column="2" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula 
                                                            <div class="arrow"></div>                                                            
                                                        </blockquote> 
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/clients/client-1.png" alt="Image">
                                                        </div> 

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula 
                                                            <div class="arrow"></div>                                                            
                                                        </blockquote> 
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/clients/client-1.png" alt="Image">
                                                        </div> 

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula 
                                                            <div class="arrow"></div>                                                            
                                                        </blockquote> 
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/clients/client-1.png" alt="Image">
                                                        </div> 

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula 
                                                            <div class="arrow"></div>                                                            
                                                        </blockquote> 
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/clients/client-1.png" alt="Image">
                                                        </div> 

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula 
                                                            <div class="arrow"></div>                                                            
                                                        </blockquote> 
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/clients/client-1.png" alt="Image">
                                                        </div> 

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula 
                                                            <div class="arrow"></div>                                                            
                                                        </blockquote> 
                                                        <div class="thumb">
                                                            <img src="{{URL::to('/')}}/front/assets/img/clients/client-1.png" alt="Image">
                                                        </div> 

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->
                                        </div><!-- /.owl-carousel -->
                                    </div><!-- /.wprt-carousel-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.wprt-container -->
                    </div><!-- /.row-testimonials-1 -->

                    <!-- News 1 -->
                    <div class="row-news-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">Medical News</h2>
                                        <p class="sub-heading mw-630">All our consultants are highly experienced in their fields and produce excellent outcomes for patients</p>
                                    </div><!-- /.wprt-headings -->

                                    <div class="wprt-spacer clearfix" data-desktop="40" data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-carousel-box has-bullets bullet40 bullet-circle" data-auto="true" data-loop="true" data-gap="30" data-column="3" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/1-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">April 6, 2015</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/2-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">How mindfulness can ease your stress</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">25 March, 2018</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/3-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">Physiotherapy Q&A: Is Pilates really helpful for back pain?</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">25 March, 2018</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/1-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">April 6, 2015</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/2-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">How mindfulness can ease your stress</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">25 March, 2018</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/3-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">Physiotherapy Q&A: Is Pilates really helpful for back pain?</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">25 March, 2018</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/1-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">April 6, 2015</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/2-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">How mindfulness can ease your stress</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">25 March, 2018</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->

                                            <div class="wprt-news has-shadow style-1">
                                                <div class="news-item">
                                                    <div class="inner">
                                                        <img src="{{URL::to('/')}}/front/assets/img/news/3-370x250.jpg" alt="image">
                                                        
                                                        <div class="text-wrap">
                                                            <h3 class="title"><a href="#">Physiotherapy Q&A: Is Pilates really helpful for back pain?</a></h3>

                                                            <div class="meta">                    
                                                                <span class="post-date">25 March, 2018</span>
                                                            </div>

                                                            <p class="excerpt-text-text">
                                                                Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices
                                                            </p>

                                                            <div class="post-btn">
                                                                <a href="#" class="wprt-button small">READ MORE</a>
                                                            </div>
                                                        </div><!-- /.text-wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-news -->
                                        </div><!-- /.owl-carousel -->
                                    </div><!-- /.wprt-carousel-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->                        
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.row-news-1 -->

                    <!-- Request 1 -->
                    <div class="row-request-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">                                    
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 --> 

                                <div class="col-md-6">   
                                    <div class="wprt-toggles style-1">
                                        <div class="toggle-item active">
                                            <h3 class="toggle-heading">
                                                <span class="inner">Why should I choose Medical Health?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                        <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">What are the Centre’s visiting hours?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                        <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">How many visitors are allowed?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                        <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">Where is The Medical Health Centre?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                        <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">What services do you provide?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->                                        
                                    </div><!-- /.wprt-toggles -->
                                </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                    <div class="wprt-content-box request-form-1 bg-white">
                                        <div class="inner">
                                            <div class="wprt-headings clearfix text-left">
                                                <h2 class="heading font-size-28">Contact US</h2>
                                            </div><!-- /.wprt-headings -->

                                            <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                            <table class="table table-striped">
                                                    <tr>
                                                        <th><h4>GPO Box:-</h4></th>
                                                        <td><h4> Tansen-11,Pravas,Palpa</h4></td>
                                                    </tr>
                                                   <tr>
                                                    <th><h4>Tel :-</h4></th>
                                                    <td><h4> +977-75-411201, 411202 </h4></td>
                                                </tr>
                                                   <tr>
                                                    <th><h4>Fax:-</h4></th><td><h4>+977-75-411205</h4></td>
                                                </tr>
                                                    <tr>
                                                        <th><h4>E-Mail:-</h4></th><td><h4> info@lmc.edu.np       lmcpalpa@gmail.com</h4></td>
                                                    </tr>
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

