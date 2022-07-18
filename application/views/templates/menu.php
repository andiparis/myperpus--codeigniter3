  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=site_url('dashboard')?>" class="brand-link">
      <img src="<?=base_url()?>assets/dist/img/logo.png" alt="MyPerpus Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">MyPerpus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=site_url('dashboard')?>" class="nav-link <?=$this->uri->segment(1) == 'dashboard' ? 'active' : null?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item <?=$this->uri->segment(1) == 'kategori' || $this->uri->segment(1) == 'koleksi' || $this->uri->segment(1) == 'buku' ? 'menu-open' : null?>">
            <a href="#" class="nav-link <?=$this->uri->segment(1) == 'kategori' || $this->uri->segment(1) == 'koleksi' ? 'active' : null?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('kategori')?>" class="nav-link <?=$this->uri->segment(1) == 'kategori' ? 'active' : null?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('koleksi')?>" class="nav-link <?=$this->uri->segment(1) == 'koleksi' ? 'active' : null?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('buku')?>" class="nav-link <?=$this->uri->segment(1) == 'buku' ? 'active' : null?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('anggota')?>" class="nav-link <?=$this->uri->segment(1) == 'anggota' ? 'active' : null?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Anggota
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('peminjaman')?>" class="nav-link <?=$this->uri->segment(1) == 'peminjaman' ? 'active' : null?>">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
