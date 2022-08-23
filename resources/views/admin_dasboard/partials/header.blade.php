<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin BUMDes</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>John Doe</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-edit"></i> Pendataan BUMDes<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="/admin/mitra/create">Mitra</a></li>
                <li><a href="/admin/jenisusaha/create">Jenis Usaha</a></li>
                <li><a href="/admin/produkpertanian/create">Produk Pertanian</a></li>
                <li><a href="/admin/indikator/create">Indikator Angka</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Tabel Data <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="/admin/mitra">Mitra</a></li>
                <li><a href="/admin/jenisusaha">Jenis Usaha</a></li>
                <li><a href="/admin/produkpertanian">Produk Pertanian</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Team <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/admin/team/create">Formulir</a>
                    <li><a href="/admin/team">Data</a>
                </ul>
            </li>
            <li><a><i class="fa fa-clone"></i>Berita <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="/admin/berita/create">Isi Berita</a></li>
                  <li><a href="/admin/berita">Data</a></li>
                </ul>
              </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>

  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="images/img.jpg" alt="">John Doe
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="javascript:;"> Profile</a>
                <a class="dropdown-item"  href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
            <a class="dropdown-item"  href="javascript:;">Help</a>
              <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->
