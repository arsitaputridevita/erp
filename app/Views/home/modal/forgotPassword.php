<div class="modal fade" id="modalForgotPassword" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title roboto-slab-header color-custom-green" id="loginModalLabel">
          Forgot Password ERP UNIBI
        </h5>
      </div>

      <div class="modal-body">
        <div class="d-inline py-5">
          <div class="pb-4">
            <img src="<?= base_url('assets/img/logo.png'); ?>" class="h-75 d-block mx-auto" alt="UNIBI">
          </div>

          <div class="roboto-medium color-custom-black pb-5 text-center">
            <span>Forgot Your Account</span> <br>
            <span>Please enter your details.</span>
          </div>
        </div>

        <form id="forgotPasswordForm">
          <div id="error-message-fp" class="alert alert-danger roboto-medium" style="display: none;"></div>
          <div id="success-message-fp" class="alert alert-success roboto-medium" style="display: none;"></div>

          <div class="form-group pb-4">
            <label for="nik-fp" class="form-label roboto-medium color-custom-black">NIK</label>
            <input type="text" class="form-control" id="nik-fp" name="nik-fp" placeholder="04202406001 .." required>
          </div>

          <div class="form-group pb-4">
            <label for="username-fp" class="form-label roboto-medium color-custom-black">Username</label>
            <input type="text" class="form-control" id="username-fp" name="username-fp" placeholder="John Doe .."
              required>
          </div>

          <div class="form-group pb-4">
            <label for="email-fp" class="form-label roboto-medium color-custom-black">Email</label>
            <input type="text" class="form-control" id="email-fp" name="email-fp" placeholder="staff@unibi.ac.id .."
              required>
          </div>

          <div class="text-end">
            <button type="button" class="btn btn-secondary roboto-medium color-custom-black" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn bg-custom-tosca roboto-medium color-custom-black btn-hover" id="btn-fp">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>