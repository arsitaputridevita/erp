<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="/dashboard" class="logo d-flex align-items-center">
      <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>

  <nav class="header-nav ms-auto me-4 pe-2">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown roboto-medium color-custom-black">
        <a class="nav-link" href="#" data-bs-toggle="dropdown">
          <span class="d-none d-md-block dropdown-toggle color-custom-black roboto-medium text-hover-tosca">
            <i class="bi bi-person-fill text-hover-tosca color-custom-black pe-1"></i>
            <?= session()->get('nama'); ?>
          </span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <a class="color-custom-black roboto-medium" href="/password">
            <li class="dropdown-item d-flex align-items-center">
              <i class="bi bi-key-fill"></i>
              <span class="text-hover roboto-bold color-custom-black">Ganti Password</span>
            </li>
          </a>
          <li>
            <hr class="dropdown-divider">
          </li>

          <a class="color-custom-black roboto-medium w-100" href="/logout">
            <li class="dropdown-item d-flex align-items-center">
              <i class="bi bi-box-arrow-right color-custom-black"></i>
              <span class="text-hover roboto-bold color-custom-black">Logout</span>
            </li>
          </a>

        </ul>
      </li>

    </ul>
  </nav>

</header>