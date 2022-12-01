<?php require "vista/admin/layouts/header.php"; ?>
<div class="row justify-content-center">
  <div class="col-sm-4 mb-5 mb-5">
    <form action="<?php echo urlsite ?>index.php?page=loginauth" method="post">
      <div class="form-group">
        <input type="email" class="form-control" name="txtemail" placeholder="correo">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="txtpassword" placeholder="contraseña">
      </div>
      <input type="submit" value="login" class="btn btn-primary btn-block" name=btnlogin>
    </form>
    <p class="text-danger"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : "" ?></p>
  </div>
</div>
<?php require "vista/admin/layouts/footer.php"; ?>