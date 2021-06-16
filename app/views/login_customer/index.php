<div class="bg-nav">
  <div class="container">
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold">Batik Nation</a>
        <div class="">
          <a href="<?= BASEURL; ?>/login_admin" class="btn btn-light text-coklat fw-bold mx-2">Admin Login</a>
          <a class="btn btn-light text-coklat fw-bold" href="<?= BASEURL; ?>/register">Register</a>
      </div>
      </div>
    </nav>
  </div>
</div>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3 text-coklat">Pesan batik sesuai dengan keinginanmu</h1>
        <p class="col-lg-10 fs-4">Platform pemesanan batik online dengan spesifikasi yang anda tentukan sendiri hanya di batik nation.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-white" action="<?= BASEURL; ?>/Login_Customer/doLogin" method="post">
          <!-- <div class="alert alert-danger" role="alert">'.$_SESSION['message']['pesan'].'</div> -->
          <?php Message::showMessage();?>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
            <label for="emailInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="passwd" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" name="remember" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign in, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
