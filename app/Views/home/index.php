<?= $this->extend('layout/home/homeLayout'); ?>
<?= $this->section('content'); ?>

<!-- CAROUSEL -->
<div id="carouselExampleIndicators" class="carousel carousel-custom slide mb-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <?php foreach ($carousel as $data): ?>
      <div class="carousel-item active">
        <img src="https://unibi.ac.id/upload/<?= $data['gambar'] ?>" class="d-block w-100" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>

<!-- ACHIEVEMENT -->
<div class="mx-5">
  <div class="py-4">
    <span class="roboto-slab-header fs-1 color-custom-green">Prestasi Hari Ini</span>
  </div>

  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://unibi.ac.id/upload/<?= $achievement['gambar'] ?>" alt="" class="w-100">
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h5 class="roboto-slab-header color-custom-tosca text-truncate-3 pt-3">
            <?= strip_tags($achievement['kejuaraan']) ?>
          </h5>
          <p class="card-text roboto-medium color-custom-black text-truncate-3">
            <?= strip_tags($achievement['deskripsi']) ?>
          </p>
          <a href="https://kemahasiswaan.unibi.ac.id/prestasi/view/<?= $achievement['idprestasi'] ?>" target="_blank"
            rel="noopener noreferrer" class="btn bg-custom-tosca color-custom-black roboto-medium btn-hover">
            Selengkapnya
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- NEWS -->
<div class="mx-5">
  <div class="py-4">
    <span class="roboto-slab-header fs-1 color-custom-green">Berita Hari Ini</span>
  </div>

  <div class="row g-4">
    <?php foreach ($news as $data): ?>
      <div class="col-12 col-md-6 col-lg-4 col-xl-3 col-xxl-3">
        <div class="card">
          <img src="https://unibi.ac.id/upload/<?= $data['gambar'] ?>" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="roboto-slab-header color-custom-tosca text-capitalize text-truncate-2 pt-3">
              <?= strip_tags($data['JudulBerita']) ?>
            </h5>
            <p class="card-text roboto-medium color-custom-black text-start text-truncate-7">
              <?= strip_tags($data['IsiBerita']) ?>
            </p>
            <a class="btn btn-hover bg-custom-tosca roboto-medium color-custom-black"
              href="https://unibi.ac.id/berita/view/<?= $data['SeoBerita'] ?>" target="_blank" rel="noopener noreferrer"
              type="button">
              Selengkapnya
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- SCHEDULE -->
<div class="mx-5">
  <div class="py-4">
    <span class="roboto-slab-header fs-1 color-custom-green">Agenda</span>
  </div>

  <div class="row pb-4 g-4">
    <?php foreach ($schedule as $data): ?>
      <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 col-xxl-4 mb-3">
        <div class="card w-100 min">
          <div class="pt-4 ps-4 w-75">
            <h5 class="roboto-slab-header color-custom-tosca text-truncate-2">
              <?= $data['JudulAgenda'] ?>
            </h5>
          </div>

          <div class="card-body">
            <div class="d-flex">
              <div class="bg-custom-tosca rounded-2 text-center p-5 w-100 h-100">
                <span class="roboto-slab-header fs-4 color-custom-black">
                  <?= $data['Tanggal'] ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<!-- MODAL -->
<?= $this->include('home/modal/login'); ?>
<?= $this->include('home/modal/forgotPassword'); ?>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
  $('document').ready(function () {
    var myCarousel = document.querySelector('#carouselExampleIndicators');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 3000,
      ride: 'carousel'
    });

    document.getElementById('togglePassword').addEventListener('click', function () {
      var passwordField = document.getElementById('password');
      var icon = this.querySelector('i');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  });

  $('document').ready(function () {
    $('#loginButton').on('click', function () {
      $('#loginModal').modal('show');
    });

    $('#loginForm').submit(function (e) {
      e.preventDefault();

      var username = $('#username').val();
      var password = $('#password').val();
      var hashedPassword = CryptoJS.MD5(password).toString();

      var formData = {
        t_user_username: username,
        t_user_password: hashedPassword,
        'g-recaptcha-response': grecaptcha.getResponse()
      };

      var token = '<?= $JWToken; ?>';
      if (!token) {
        $('#error-message').text('Token is missing!').show();
        return;
      }

      if (!grecaptcha.getResponse()) {
        $('#error-message').text('reCaptcha verification failed!').show();
        return;
      }

      $.ajax({
        url: 'http://erpapi.local/public/login',
        type: 'POST',
        headers: {
          'Authorization': 'Bearer ' + token,
          'Content-Type': 'application/json'
        },
        dataType: 'json',
        data: JSON.stringify(formData),
        success: function (response) {

          if (response.status == 0) {
            $('#error-message').text(response.message).show();
            $('#success-message').hide();
            return 0;
          }

          $.ajax({
            url: '/login',
            type: 'POST',
            contentType: 'application/json',
            dataType: 'json',
            data: JSON.stringify(response.message),
            success: function (response) {

              if (response.success == 0) {
                $('#error-message').text(response.message).show();
                $('#success-message').hide();
                return 0;
              }

              $('#success-message').text('Login Berhasil').show();
              $('#error-message').hide();
              $('#btn-login').text('');
              $('#btn-login').text('Success');
              setTimeout(function () {
                window.location.href = response.redirect;
              }, 1000);
            },
            error: function (xhr, status, error) {
              $('#error-message').text('An error occurred: ' + xhr.responseText).show();
              $('#success-message').hide();
            }
          });
        },
        error: function (xhr, status, error) {
          $('#error-message').text('Username / Password tidak boleh kosong!').show();
          $('#success-message').hide();
        }
      });
    });
  });

  $('document').ready(function () {
    $('#forgotPasswordForm').submit(function (e) {
      e.preventDefault();

      var nik = $('#nik-fp').val();
      var username = $('#username-fp').val();
      var email = $('#email-fp').val();

      var formData = {
        Nik: nik,
        Username: username,
        Email: email,
      };

      var token = '<?= $JWToken; ?>';
      if (!token) {
        $('#error-message-fp').text('Token is missing!').show();
        return;
      }

      $.ajax({
        url: 'https://itsupport.unibi.ac.id/api/reset-password',
        type: 'POST',
        headers: {
          'Authorization': 'Bearer ' + token,
          'Content-Type': 'application/json'
        },
        dataType: 'json',
        data: JSON.stringify(formData),
        success: function (response) {

          if (response.status == 1) {
            $('#btn-fp').text('');
            $('#btn-fp').text('Loading..');

            $.ajax({
              url: '/forgotPassword',
              type: 'POST',
              contentType: 'application/json',
              dataType: 'json',
              data: JSON.stringify(response.message),
              success: function (response) {

                if (response.success) {
                  $('#success-message-fp').text('Reset Password Berhasil Silahkan Cek Email Anda').show();
                  $('#error-message-fp').hide();

                  $('#btn-fp').text('');
                  $('#btn-fp').text('Success');

                  setTimeout(function () {
                    window.location.href = response.redirect;
                  }, 3000);
                } else {
                  $('#error-message-fp').text(response.message).show();
                  $('#success-message-fp').hide();
                }
              },

              error: function (xhr, status, error) {
                $('#error-message-fp').text('An error occurred: ' + xhr.responseText).show();
                $('#success-message-fp').hide();
              }
            });
          } else {
            $('#error-message-fp').text(response.message).show();
            $('#success-message-fp').hide();
          }
        },
        error: function (xhr, status, error) {
          $('#error-message-fp').text('An error occurred: ' + xhr.responseText).show();
          $('#success-message-fp').hide();
        }
      });
    });
  });
</script>

<?= $this->endSection(); ?>