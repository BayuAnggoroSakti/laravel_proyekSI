<!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <i class="fa fa-user fa-5x"></i>
            </div>
            <div class="pull-left info">
              <p> {{ Auth::user()->name }}</p>
            
            </div>
          </div>
          <!-- search form -->

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Update</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <!--product menu-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Wisata</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!!URL::to('/admin/wisata')!!}"><i class="fa fa-circle-o"></i>Semua Wisata</a></li>
                <li><a href="{!!URL::to('/admin/tambah_wisata')!!}"><i class="fa fa-circle-o"></i>Tambahkan Wisata</a></li>
                <li><a href="{!!URL::to('/admin/categories/')!!}"><i class="fa fa-circle-o"></i>Categpries</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Tags</a></li>
              </ul>
            </li>
            <!--Article Menu-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Articles</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>All Article</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Add New</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Categpries</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Tags</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar --> 