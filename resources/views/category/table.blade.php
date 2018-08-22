<?php echo View::make('includes/header'); ?>
<?php echo View::make('includes/sidebar'); ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url::to('/')}}/category/create">Add new Category</a></li>
              
            </ol>
          </div>
        </div>
        <!-- page start-->
      

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Category Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <thead>

                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php 
                   $sn=0;
                   ?>
                  @foreach($category_list as $category)
                    <tr>
                      <td>{{++$sn}}</td>
                      <td>{{$category->title}}</td>
                      <td>{!!$category->description!!}</td>
                     <td>
                      
                        <a href="{{URL::to('/').'/category/'.$category->id.'/edit'}}"><button class="btn btn-primary pull-left" >Edit</button></a> &nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <form action="{{URL::to('/').'/category/'.$category->id}}" method="POST" style="width: 65px;float: left;" >
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="_token" type="hidden" value="{{csrf_token()}}">
    <button class="btn btn-danger" type="submit" onclick="return confirm('are you sure want to delete?');">Delete</button>
</form>
                     </td>
                      @endforeach
                    
                  </tr>
                
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

<!-- javascripts -->
  <script src="{{URL::to('/')}}/backend/js/jquery.js"></script>
 
  <!-- bootstrap -->
  <script src="{{URL::to('/')}}/backend/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="{{URL::to('/')}}/backend/js/jquery.scrollTo.min.js"></script>
  <script src="{{URL::to('/')}}/backend/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  
    <!--custome script for all page-->
    <script src="{{URL::to('/')}}/backend/js/scripts.js"></script>
    

</body>

</html>

