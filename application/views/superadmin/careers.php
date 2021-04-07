<?php 
if((!$this->session->userdata('logged_in'))){
    show_404();
}
?>
<?php
if($this->session->userdata('user_type') === 'alumni' || $this->session->userdata('user_type') === 'admin')
    show_404();
?>

<button onclick="location.href ='<?=base_url('careers/create')?>';" type="button" class="btn btn-primary btn-lg">Add Jobs</button>
<hr>

<h3>Recent Jobs Posting</h3>
<hr>
<div class="text-center">
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">Career id</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">location</th>
      <th scope="col">Work type</th>
      <th scope="col">salary</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <?php foreach($careers as $career): ?>
  <tr class="table-secondary">
      <th scope="row"><?=$career->career_id?></th>
      <td><?=$career->title?></td>
      <td><?=$career->description?></td>
      <td><?=$career->location?></td>
      <td><?=$career->work_type?></td>
      <td><?=$career->salary?></td>
      <td>
      <button type="button" onclick="location.href='<?=base_url('careers/edit/'.$career->career_id);?>'"class="btn btn-outline-primary">edit</button>
      <?php if($career->ispublish == 1):?>
      <button type="button" onclick="location.href='<?=base_url('careers/unpublish/'.$career->career_id);?>'" class="btn btn-outline-primary">unpublish</button>
      <?php elseif($career->ispublish == 0): ?>
        <button type="button" onclick="location.href='<?=base_url('careers/publish/'.$career->career_id);?>'" class="btn btn-outline-primary">publish</button>
        <?php endif;?>
      <button type="button" onclick="location.href='<?=base_url('careers/delete/'.$career->career_id);?>'" class="btn btn-outline-primary">delete</button>
      </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>