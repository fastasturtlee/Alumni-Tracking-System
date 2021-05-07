<?php 
if($this->session->userdata("user_type") == 'alumni'||!$this->session->userdata("logged_in")){
  show_404();
}
?>
<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/sidebar');
  $this->load->view('admin/header');  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/sidebar');
  $this->load->view('superadmin/header');
}
?>

<?php echo form_open_multipart('users/update'); ?>
<fieldset>
  <legend>Update User Profile</legend>
  <div>
  <input type="hidden" name="userid" value="<?= $user['userid'];?>">
  <input type="hidden" name="currentuser" value="<?= $this->session->userdata('user_type');?>">
  </div>
  <center>
  <div>
  <?php if(empty($user['profile_pic'])):?>
  <img src="<?=base_url('assets\images\noprofile.jpg')?>" alt="profile pic" class="shadow profile_pic" width="150px"></div>
  <?php else: ?>
    <img src="<?=base_url('uploads/'.$user['profile_pic']);?>" alt="profile pic" class="shadow profile_pic" width="150px"></div>
  <?php endif; ?>
    <input type="file" class="pt-1" class="pt-1" name="img_profile" size="20">
  </center>
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Username</label>
  <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $user['username']; ?>" id="inputDefault">
</div>
    <div class="form-group">
  <label class="col-form-label" for="inputDefault">Full Name</label>
  <input type="text" name="fullname" class="form-control" placeholder="Full Name" value="<?= $user['full_name']; ?>" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Mobile Number</label>
  <input type="text" class="form-control" value="<?= $user['mobileno']; ?>" name="mobileno" id="inputDefault">
</div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['emailid']; ?>">    </div>
    <h3>Degree Information</h3>
    <div class="form-group">
  <label class="col-form-label" for="inputDefault">ERN No</label>
  <input type="text" name="ern_no" class="form-control" value="<?= $user['ern_no']; ?>" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Degree</label>
  <input type="text" name="degree" class="form-control" value="<?= $user['degree']; ?>" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Branch</label>
  <input type="text" name="branch" class="form-control" value="<?= $user['branch']; ?>" id="inputDefault">
</div>
<div class="form-group">
<label class="col-form-label" for="inputDefault">Year of Passout</label>
<?php 
$options = array(
  '2014' => '2014',
  '2015' => '2015',
  '2016' => '2016',
  '2017' => '2017',
  '2018' => '2018',
  '2019' => '2019',
  '2020' => '2020',
  '2021' => '2021',
  '2022' => '2022',
);
$attribute = 'class="col-form-label custom-select"';
echo form_dropdown('passyear',$options,$user['passout_year'],$attribute);
?>
<div class="form-group">
<label class="col-form-label" for="inputDefault" style="font-size: 15px;">View Achievements during College</label>
<button type="button" class="btn btn-primary btn-sm" style="margin-left: 20px;" onclick="location.href='<?php echo base_url().'certificate/index/'.$user['userid']?>'">View</button>
</div>
</div>
<h3>Professional details </h3>
<label class="col-form-label" for="inputDefault">Proffession</label>
<?php
$options = array(
  '' => 'choose options',
  'bussiness' => 'Bussiness',
  'corporate job' => 'corporate job',
  'civil service' => 'civil service',
  'defence service' => 'defence service',
  'hospitality' => 'Hospitality',
  'engineering division' => 'Engineering Division',
  'Others' =>'Others'
);
$attribute = 'class="col-form-label custom-select"';
echo form_dropdown('proffession',$options,$user['proffession'],$attribute);
 ?>

<div class="form-group">
  <label class="col-form-label" for="inputDefault">WorkPlace Name</label>
  <input type="text" name="company_name" class="form-control" value="<?= $user['company_name']; ?>" placeholder="Enter company name" id="inputDefault">
</div>
<label class="col-form-label" for="inputDefault">Income Bracket</label>
<?php
$options = array(
  '' => 'choose options',
  '<2,50,000' => '<2,50,000',
  '<=5,00,000' => '<=5,00,000',
  '<=10,00,000' => '<=10,00,000',
  '<=15,00,000' => '<=15,00,000',
  '<=20,00,000' => '<=20,00,000',
  '<=30,00,000' => '<=30,00,000',
  '<=50,00,000' => '<=50,00,000',
  'Others' =>'Others'
);
$attribute = 'class="col-form-label custom-select"';
echo form_dropdown('income',$options,$user['proffession'],$attribute);
 ?>
<?php 
if($this->session->userdata('user_type') === 'superadmin'){
  echo '<br><label class="col-form-label" for="inputDefault">Change User Type</label>';
  $options = array(
    '' => 'choose options',
    'alumni' => 'Alumni',
    'admin' => 'Admin',
    'superadmin' => 'Super Admin'
  );
  $attribute = 'class="col-form-label custom-select"';
  echo form_dropdown('usertype',$options,$user['user_type'],$attribute);

}else{
  echo '<input type="hidden" name="usertype" value="'.$user['user_type'].'">';
}
?>
  </fieldset>
  <center>
  <button type="submit" class="btn btn-primary ">Update</button>
  </center>

  <?php echo form_close();?>

  <?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/footer'); 
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/footer');
}
?>