<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/chart.js/chart.umd.js') ?>"></script>
<script src="<?= base_url('assets/vendor/echarts/echarts.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/quill/quill.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
<script src="<?= base_url('assets/vendor/tinymce/tinymce.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

<!-- JavaScript Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<!-- reCaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- crypto-js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>

<!-- check access menu -->
<script>
  $(document).ready(function () {
    var nik = '<?= session()->get('nik') ?>';
    var jwt = '<?= session()->get('jwtToken') ?>';
    var dataCrudCheck = {};

    // Function to build menu HTML
    function buildMenuHtml(menuTree) {
      let html = '';
      $.each(menuTree, function (index, menu) {
        let menuNameNoSpaces = menu.m_menu_nama.replace(/\s+/g, '');
        let isActive = window.location.pathname === menu.m_menu_link || window.location.pathname.startsWith(menu.m_menu_link);

        html += '<li class="nav-item ' + (isActive ? 'active' : '') + '">';

        if (menu.children && menu.children.length > 0) {
          let hasActiveChild = menu.children.some(child => window.location.pathname === child.m_menu_link || window.location.pathname.startsWith(child.m_menu_link));

          html += '<a class="nav-link collapsed" data-bs-toggle="collapse" href="#' + menuNameNoSpaces + '-nav" aria-expanded="false">';
          html += '<span>' + menu.m_menu_nama + '</span><i class="bi bi-chevron-down ms-auto"></i></a>';
          html += '<ul id="' + menuNameNoSpaces + '-nav" class="nav-content collapse ' + (hasActiveChild ? 'show' : '') + '">';
          html += buildMenuHtml(menu.children);
          html += '</ul>';
        } else {
          html += '<a class="nav-link ' + (isActive ? 'active' : '') + '" href="' + menu.m_menu_link + '">' + menu.m_menu_nama + '</a>';
        }

        html += '</li>';
      });
      return html;
    }

    function buildMenuTree(menus, parentId = '0') {
      let branch = [];
      $.each(menus, function (index, menu) {
        if (menu.m_menu_parents === parentId) {
          let children = buildMenuTree(menus, menu.t_role_menu_menu_id);
          if (children.length > 0) {
            menu.children = children;
          }
          branch.push(menu);
        }
      });
      return branch;
    }

    $.ajax({
      url: 'http://erpapi.local/public/akses-menu',
      type: 'POST',
      data: JSON.stringify({
        t_user_nik: nik
      }),
      contentType: 'application/json',
      dataType: 'json',
      headers: {
        'Authorization': 'Bearer ' + jwt
      },
      success: function (response) {
        if (response.status === 1) {
          let menuTree = buildMenuTree(response.message);
          let menuHtml = buildMenuHtml(menuTree);
          $('#sidebar-nav').html(menuHtml);

          dataCrudCheck = response;
          crudCheck();
        } else {
          console.log('Error: ' + response.message);
        }
      },
      error: function (xhr, status, error) {
        console.log('Error: ' + error);
      }
    });

    function crudCheck() {
      dataCrudCheck.message.forEach(element => {
        if (window.location.pathname === element.m_menu_link) {

          var canRead = element.t_role_menu_read;
          var canCreate = element.t_role_menu_create;
          var canUpdate = element.t_role_menu_update;
          var canDelete = element.t_role_menu_delete;

          if (canCreate == 0) {
            $('.btn-add').hide();
          }

          if (canUpdate == 0) {
            $('.btn-edit').hide();
          }

          if (canDelete == 0) {
            $('.btn-delete').hide();
          }
        }
      });
    }

    var dataTable = new simpleDatatables.DataTable('#tableData');
    dataTable.on('datatable.page', function (page) {
      crudCheck();
      addData();
      editData();
      deleteData();
    });

    dataTable.on('datatable.perpage', function (perpage) {
      crudCheck();
      addData();
      editData();
      deleteData();
    });
  });
</script>

<script>
  //Berhasil
  <?php if (session()->getFlashdata('success')): ?>
    Swal.fire({
      position: "top",
      icon: "success",
      title: "Berhasil",
      showConfirmButton: false,
      timer: 1500
    });
  <?php endif; ?>
  <?php if (session()->getFlashdata('gagal')): ?>
    Swal.fire({
      position: "top",
      icon: "error",
      title: "Gagal",
      showConfirmButton: false,
      timer: 1500
    });
  <?php endif; ?>

  document.getElementById('confirmBtn').addEventListener('click', function () {
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: "Anda tidak akan bisa mengembalikan ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '<?= site_url('home/deleteData') ?>';
      }
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.itemDropdown').select2({
      tags: false,
      placeholder: "Select or type an item",
      allowClear: true

    });
  });
  $(document).ready(function () {
    $('#itemDropdown2').select2({
      tags: false,
      placeholder: "Select or type an item",
      allowClear: true
    });
  });
  $(document).ready(function () {
    $('#itemDropdown3').select2({
      tags: false,
      placeholder: "Select or type an item",
      allowClear: true
    });
  });
  $(document).ready(function () {
    $('#itemDropdown4').select2({
      tags: false,
      placeholder: "Select or type an item",
      allowClear: true
    });
  });
  $(document).ready(function () {
    $('#itemDropdown5').select2({
      tags: false,
      placeholder: "Select or type an item",
      allowClear: true
    });
  });
</script>

<!-- script render section -->
<?= $this->renderSection('script'); ?>