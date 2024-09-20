<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title roboto-slab-header color-custom-green" id="loginModalLabel">Login ERP UNIBI</h5>
      </div>

      <div class="modal-body">
        <div class="d-inline py-5">
          <div class="pb-4">
            <img src="<?= base_url('assets/img/logo.png'); ?>" class="h-75 d-block mx-auto" alt="UNIBI">
          </div>

          <div class="roboto-medium color-custom-black pb-5 text-center">
            <span>Login to Your Account</span> <br>
            <span>Welcome back! Please enter your details.</span>
          </div>
        </div>

        <form id="loginForm">
          <div id="error-message" class="alert alert-danger roboto-medium" style="display: none;"></div>
          <div id="success-message" class="alert alert-success roboto-medium" style="display: none;"></div>

          <div class="form-group pb-4">
            <label for="username" class="form-label roboto-medium color-custom-black">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username.." required>
          </div>

          <div class="form-group pb-2">
            <label for="password" class="form-label roboto-medium color-custom-black">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
              <span class="input-group-text" id="togglePassword"><i class="fas fa-eye"></i></span>
              <div class="input-group-append"></div>
            </div>
          </div>

          <div class="mb-3 d-flex justify-content-between">
            <div hidden>
              <a class="roboto-medium color-custom-tosca" role="button" href="/register">
                <span class="text-hover">
                  Register here
                </span>
              </a>
            </div>

            <div>
              <a class="roboto-medium color-custom-tosca" role="button" data-bs-toggle="modal"
                data-bs-target="#modalForgotPassword">
                <span class="text-hover">
                  Forgot password?
                </span>
              </a>
            </div>
          </div>

          <div class="d-flex flex-column align-items-center justify-content-center pb-4">
            <div class="g-recaptcha" data-sitekey="6Lfwk_gpAAAAAPktqrLcdQH7qJQhkbjGROhyMvc-"></div>
          </div>

          <div class="text-end">
            <button type="button" class="btn btn-secondary roboto-medium color-custom-black" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" value="Login" class="btn bg-custom-tosca roboto-medium color-custom-black btn-hover"
              id="btn-login">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>