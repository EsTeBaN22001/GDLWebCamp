  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="info">
          <p><?php echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de administración</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Eventos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list-events.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver todos</a></li>
            <li><a href="create-event.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Categoria eventos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver todos</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Invitados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver todos</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card"></i>
            <span>Registrados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver todos</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <?php if($_SESSION['level'] == 1): ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Administradores</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="list-admin.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver todos</a></li>
              <li><a href="create-admin.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
            </ul>
          </li>
        <?php endif; ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments"></i>
            <span>Testimoniales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver todos</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>