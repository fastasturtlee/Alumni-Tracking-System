<?php echo validation_errors() ?>
<?Php
if($this->session->userdata('logged_in')){
  show_404();
}
?>
<?php echo form_open('users/login') ?>
  <fieldset>
  <legend>Login Yourself</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  </fieldset>
  <center>
  <button type="submit" class="btn btn-primary ">Submit</button>
  </center>
<?php echo form_close(); ?>