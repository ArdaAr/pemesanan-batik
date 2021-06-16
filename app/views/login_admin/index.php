<div class="bg-nav">
  <div class="container">
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold text-light">Batik Nation</a>
        <div class="">
          <a href="<?= BASEURL; ?>/login_customer" class="btn btn-light text-coklat fw-bold">Customer Login</a>
      </div>
      </div>
    </nav>
  </div>
</div>
<div class="container col-xl-10 col-xxl-8 px-2 py-5">
  <div class="row align-items-center justify-content-around g-lg-2 py-5">
    <div class="col-lg-5 text-center text-lg-start">
      <form class="p-4 p-md-5 border rounded-3 bg-white" action="<?= BASEURL; ?>/Login_Admin/doLogin" method="post">
        <!-- <div class="alert alert-danger" role="alert">'.$_SESSION['message']['pesan'].'</div> -->
        <div class="text-center text-kuning my-3">
          <h3>Hello Admin, Please Login !</h3>
        </div>
        <?php Message::showMessage();?>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="username" id="emailInput" placeholder="Username">
          <label for="emailInput">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="passwd" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
        <hr class="my-4">
        <small class="text-muted">By clicking Sign in, you agree to the terms of use.</small>
      </form>
    </div>
    <div class="col-md-10 mx-1 my-2 col-lg-5">
      <img src="<?= BASEURL; ?>/img/admin.png" width="500" alt="">
    </div>
  </div>
</div>
