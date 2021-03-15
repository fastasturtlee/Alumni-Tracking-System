<?php echo validation_errors() ?>

<?php echo form_open('users/register') ?>
  <fieldset>
  <legend>Register Yourself</legend>
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Username</label>
  <input type="text" name="username" class="form-control" placeholder="Username" id="inputDefault">
</div>
    <div class="form-group">
  <label class="col-form-label" for="inputDefault">Full Name</label>
  <input type="text" name="fullname" class="form-control" placeholder="Full Name" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Mobile Number</label>
  <input type="text" class="form-control" placeholder="Mobile Number" name="mobileno" id="inputDefault">
</div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword" placeholder="Password">
    </div>
    <h3>Degree Information</h3>
    <div class="form-group">
  <label class="col-form-label" for="inputDefault">ERN No</label>
  <input type="text" name="ernno" class="form-control" placeholder="ERN NO" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Degree</label>
  <input type="text" name="degree" class="form-control" placeholder="Degree" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Branch</label>
  <input type="text" name="branch" class="form-control" placeholder="Branch" id="inputDefault">
</div>
<div class="form-group">
<label class="col-form-label" for="inputDefault">Year of Passout</label>
    <select class="custom-select" name="passyear">
      <option selected="">Open this select menu</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
    </select>
  </div>
  <div class='row'>
    <div class='col-3'>
<input type="file" name="img_profile" size="20" />
    </div>
  </fieldset>
  <center>
  <button type="submit" class="btn btn-primary ">Submit</button>
  </center>
<?php echo form_close(); ?>