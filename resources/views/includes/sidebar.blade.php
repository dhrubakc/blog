<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
         <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>category</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{URL::to('/category/create')}}">Add New Category</a></li>
              <li><a class="" href="{{URL::to('/category')}}">Category List</a></li>
            </ul>
          </li>    
      </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>