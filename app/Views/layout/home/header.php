<header class="fixed-top bg-white">
  <nav class="mx-5">
    <ul class="navbar-nav">
      <div class="d-flex justify-content-between">
        <div class="">
          <li class="nav-brand">
            <a href="/">
              <img class="w-50 my-3" src="<?= base_url('assets/img/logo.png'); ?>" alt="">
            </a>
          </li>
        </div>

        <div class="d-flex align-items-center gap-3">
          <?php if (session('isLoggedIn')) { ?>
            <li class="nav-item text-hover-tosca">
              <a class="nav-link active color-custom-black roboto-medium" href="/dashboard" aria-current="page">
                <span>Home</span>
              </a>
            </li>
          <?php } else { ?>
            <li class="nav-item text-hover-tosca">
              <a class="nav-link active color-custom-black roboto-medium" href="/" aria-current="page">
                <span>Home</span>
              </a>
            </li>
          <?php } ?>

          <li class="nav-item dropdown roboto-medium color-custom-black">
            <a class="nav-link" href="#" data-bs-toggle="dropdown">
              <span
                class="d-none d-md-block dropdown-toggle color-custom-black roboto-medium text-hover-tosca">Fakultas</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-item">
                <span class="color-custom-green roboto-medium">Daftar Fakultas</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://ftiunibi.ac.id/ftiunibi" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-medium">Fakultas Teknologi dan Informatika</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://fkd.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-medium">Fakultas Komunikasi dan Desain</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://feb.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-medium">Fakultas Ekonomi dan Bisnis</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://fpsi.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-medium">Fakultas Psikologi</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

            </ul>
          </li>

          <li class="nav-item dropdown roboto-medium color-custom-black text-hover">
            <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
              <span class="d-none d-md-block dropdown-toggle color-custom-black roboto-medium text-hover-tosca">
                Program Studi
              </span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-item">
                <span class="color-custom-green roboto-medium">Fakultas Teknologi dan Informatika</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://if.ftiunibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Informatika</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://si.ftiunibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Sistem Informasi</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-item">
                <span class="color-custom-green roboto-medium">Fakultas Komunikasi dan Desain</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://ilkom.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Ilmu Komunikasi</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://dkv.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Desain Komunikasi Visual</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-item">
                <span class="color-custom-green roboto-medium">Fakultas Ekonomi dan Bisnis</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://manajemen.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Manajemen</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://akuntansi.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Akuntansi</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-item">
                <span class="color-custom-green roboto-medium">Fakultas Psikologi</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-header">
                <a class="d-flex align-items-center" href="https://psikologi.unibi.ac.id/" target="_blank"
                  rel="noopener noreferrer">
                  <span class="color-custom-black roboto-reguler">Psikologi</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

            </ul>
          </li>

          <?php if (session('isLoggedIn')) { ?>
            <li class="nav-item dropdown roboto-medium color-custom-black">
              <a class="nav-link" href="#" data-bs-toggle="dropdown">
                <span class="d-none d-md-block dropdown-toggle ps-2 color-custom-black roboto-medium text-hover-tosca">
                  <i class="bi bi-person-fill text-hover-tosca color-custom-black"></i>
                  Profile
                </span>
              </a>

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropitem">
                  <h6 class="color-custom-black roboto-medium text-center"><?= $nama; ?></h6>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <a class="color-custom-black roboto-medium" href="/tambahakses">
                  <li class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-border-all"></i>
                    <span class="text-hover roboto-bold color-custom-black">Tambah Akses Aplikasi</span>
                  </li>
                </a>
                <li>
                  <hr class="dropdown-divider">
                </li>

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

          <?php } else { ?>

            <li class="nav-item">
              <a class="btn bg-custom-tosca color-custom-black roboto-medium py-2 px-4 btn-hover" role="button"
                id="loginButton">
                Login
              </a>
            </li>
          <?php } ?>
        </div>
      </div>
    </ul>
  </nav>
</header>