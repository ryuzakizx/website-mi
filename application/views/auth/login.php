<!-- .auth -->
<main class="auth">
  <header id="auth-header" class="auth-header" style="background-image: url(<?= base_url('assets/') ?>images/illustration/img-1.png);">
    <h1>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64" viewbox="0 0 351 100">
        <h1>LOGIN</h1>
        <use class="fill-warning" xlink:href="#a"></use>
      </g>
    </svg> <span class="sr-only">LOGIN</span>
  </h1>
  <p> Program Studi <a href="#">Manajemen Informatika</a>
  </p>
</header><!-- form -->
<form class="auth-form" action="<?= base_url('auth'); ?>" method="POST">
  <?= $this->session->flashdata('message'); ?>
  <!-- .form-group -->
  <div class="form-group">
    <div class="form-label-group">
      <input type="text" id="username" class="form-control" placeholder="Username" autofocus="" name="username"> <label for="username">Username</label>
      <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div><!-- /.form-group -->
  <!-- .form-group -->
  <div class="form-group">
    <div class="form-label-group">
      <input type="password" id="password" class="form-control" placeholder="Password" name="password"> <label for="password">Password</label>
      <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div><!-- /.form-group -->
  <!-- .form-group -->
  <div class="form-group">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  </div><!-- /.form-group -->
  <!-- .form-group -->
</form><!-- /.auth-form -->
