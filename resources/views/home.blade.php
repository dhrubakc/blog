<?php echo View::make('includes/header'); ?>

    <?php echo View::make('includes/sidebar'); ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count"></div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"></div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"></div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"></div>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


       

        <!-- project team & activity start -->
     

        <div class="row">
          

          <div class="col-md-12 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                
                
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">
                    
                 </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-center">
        <div class="credits">
      Designed by <a href="">Lumbini Medical College And Teaching Hospital</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{URL::to('/')}}/backend/js/jquery.js"></script>
  <script src="{{URL::to('/')}}/backend/js/jquery-ui-1.10.4.min.js"></script>
  <script src="{{URL::to('/')}}/backend/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="{{URL::to('/')}}/backend/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="{{URL::to('/')}}/backend/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="{{URL::to('/')}}/backend/js/jquery.scrollTo.min.js"></script>
  <script src="{{URL::to('/')}}/backend/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{URL::to('/')}}/backend/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="{{URL::to('/')}}/backend/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="{{URL::to('/')}}/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="{{URL::to('/')}}/backend/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="{{URL::to('/')}}/backend/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{URL::to('/')}}/backend/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="{{URL::to('/')}}/backend/js/calendar-custom.js"></script>
    <script src="{{URL::to('/')}}/backend/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="{{URL::to('/')}}/backend/js/jquery.customSelect.min.js"></script>
    <script src="{{URL::to('/')}}/backend/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="{{URL::to('/')}}/backend/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="{{URL::to('/')}}/backend/js/sparkline-chart.js"></script>
    <script src="{{URL::to('/')}}/backend/js/easy-pie-chart.js"></script>
    <script src="{{URL::to('/')}}/backend/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{URL::to('/')}}/backend/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{URL::to('/')}}/backend/js/xcharts.min.js"></script>
    <script src="{{URL::to('/')}}/backend/js/jquery.autosize.min.js"></script>
    <script src="{{URL::to('/')}}/backend/js/jquery.placeholder.min.js"></script>
    <script src="{{URL::to('/')}}/backend/js/gdp-data.js"></script>
    <script src="{{URL::to('/')}}/backend/js/morris.min.js"></script>
    <script src="{{URL::to('/')}}/backend/js/sparklines.js"></script>
    <script src="{{URL::to('/')}}/backend/js/charts.js"></script>
    <script src="{{URL::to('/')}}/backend/js/jquery.slimscroll.min.js"></script>
     <script type="text/javascript">  
     CKEDITOR.replace( 'editor1' );  
  </script>  
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

