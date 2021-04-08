<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/sidebar');
  $this->load->view('admin/header');  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/sidebar');
  $this->load->view('superadmin/header');
}
?>
    <table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">username</th>
          <th scope="col">Full Name</th>
          <th scope="col">Batch</th>
          <th scope="col">branch</th>
          <th scope="col">Ern no</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php foreach($infos as $info): ?>
      <?php if($info->user_type =='alumni'):?>
      <tr class="table-secondary">
          <th scope="row"><?=$info->userid?></th>
          <td><?=$info->username?></td>
          <td><?=$info->full_name?></td>
          <td><?=$info->passout_year?></td>
          <td><?=$info->branch?></td>
          <td><?=$info->ern_no?></td>
          <td>
          <button type="button" onclick="location.href='<?=base_url('users/edit/'.$info->userid);?>'" class="btn btn-outline-primary">Edit</button>
          <?php if($info->verify == 0):?>
          <button type="button" onclick="location.href='<?=base_url('users/verify/'.$info->userid);?>'" class="btn btn-outline-primary">verify</button>
          <?php elseif($info->verify == 1) : ?>
            <button type="button" onclick="location.href='<?=base_url('users/unverify/'.$info->userid);?>'" class="btn btn-outline-primary">unverify</button>
            <?php endif ?>
          <button type="button" onclick="location.href='<?=base_url('users/delete/'.$info->userid);?>'" class="btn btn-outline-primary">Delete</button>
          </td>
        </tr>
    <?php endif;?>
        <?php endforeach; ?>
    
    </table>
    <?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/footer'); 
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/footer');
}
?>