<?php echo View::make('includes/front/header'); ?>

<div class="clearfix"></div>
<div id="featured-title" class="text-center">
    <div id="featured-title-inner" class="wprt-container">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading ">Gallery</h1>
            </div>

            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="#" title="Contruction2" rel="home" class="trail-begin"></a>
                        <span class="sep">/</span>
                        <span class="trail-end"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /#featured-title -->
<!-- Main Content -->
<main id="main-content">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
 

                    <!-- News 1 -->
                    <div class="row-news-1" style="margin-top:90px;">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                  <!--   <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">Gallery</h2>
                                        
                                    </div><!-- /.wprt-headings --> -->


<style>
.modal-dialog {}
.thumbnail {margin-bottom:6px;}

.carousel-control.left,.carousel-control.right{
  background-image:none;
}

body .modal-backdrop.in{
    z-index: 0 !important;
}
.item.active a img{
 width:100% !important;   
}
</style>
   <div class="container-fluid">
    
    <div class="row">
   
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="{{URL::to('/')}}/front/assets/img/doctors/3-360x300.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="{{URL::to('/')}}/front/assets/img/doctors/2-360x300.jpg"></a></div>
   
</div>
<div class="modal" id="myModal" role="dialog" >
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">×</button>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body">
        <div id="modalCarousel" class="carousel">
          <div class="carousel-inner"></div>
          <!-- <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="fas fa-arrow-left"><=</i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="fas fa-arrow-right">=></i></a> -->
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </div>
</div>


                                 

<!-- <div class="row">
<div class="container">

<div class="m-p-g">
    <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
        <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" data-full="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" class="m-p-g__thumbs-img" />
        <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" data-full="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" class="m-p-g__thumbs-img" />
        <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" data-full="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" class="m-p-g__thumbs-img" />
        <img src="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" data-full="{{URL::to('/')}}/front/assets/img/doctors/1-360x300.jpg" class="m-p-g__thumbs-img" />
        
    </div>

    <div class="m-p-g__fullscreen"></div>
</div>

<script>
    var elem = document.querySelector('.m-p-g');

    document.addEventListener('DOMContentLoaded', function() {
        var gallery = new MaterialPhotoGallery(elem);
    });
</script>
 <script src="{{URL::to('/')}}/front/assets/js/material-photo-gallery.min.js"></script>
</div>
</div> -->
                                    

                                    <!-- /.wprt-carousel-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->                        
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.row-news-1 -->

                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</main> <!-- /#main-content -->

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
<script type="text/javascript">
    /* copy loaded thumbnails into carousel */
$('.row .thumbnail').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
    var item = $('<div class="item"></div>');
    var itemDiv = $(this).parents('div');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
    $(itemDiv.html()).appendTo(item);
    item.appendTo('.carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.row .thumbnail').click(function(){
    var idx = $(this).parents('div').index();
    var id = parseInt(idx);
    $('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
    
});

</script>
</body>

<!-- Mirrored from themesparagon.com/demo/medical/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 06:41:02 GMT -->
</html>