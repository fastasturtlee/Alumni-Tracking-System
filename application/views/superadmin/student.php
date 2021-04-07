
<?php 
if((!$this->session->userdata('logged_in'))){
    show_404();
}
?>
<?php
if($this->session->userdata('user_type') === 'alumni'|| 'super admin')
    show_404();
?>
<br>
<center>
<button onclick="location.href ='<?=base_url('ern_no/create')?>';" type="button" class="btn btn-primary btn-lg">Add ERN No</button></center>
<br>
<h1 class="ml-2"> Registered Alumni</h1>
<hr>
<div class="text-center">
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Ern no</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
  $i=0;
  foreach($users as $user): ?>
  <?php if($user->user_type =='alumni'):?>
  <tr class="table-secondary">
      <th scope="row"><?=++$i;?></th>
      <td><?=$user->full_name?></td>
      <td><?=$user->emailid?></td>
      <td><?=$user->mobileno?></td>
      <td><?=$user->ern_no?></td>
      <td>
      <button type="button" onclick="location.href='<?=base_url('users/edit/'.$user->userid);?>'" class="btn btn-outline-primary">edit</button>
      <?php if($user->verify == 0):?>
      <button type="button" onclick="location.href='<?=base_url('users/verify/'.$user->userid);?>'" class="btn btn-outline-primary">verify</button>
      <?php elseif($user->verify == 1) : ?>
        <button type="button" onclick="location.href='<?=base_url('users/unverify/'.$user->userid);?>'" class="btn btn-outline-primary">unverify</button>
        <?php endif ?>
      <button type="button" onclick="location.href='<?=base_url('users/delete/'.$user->userid);?>'" class="btn btn-outline-primary">delete</button>
      </td>
    </tr>
<?php endif;?>
    <?php endforeach; ?>

</table>
</div>