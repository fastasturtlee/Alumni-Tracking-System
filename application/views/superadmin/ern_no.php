

<br><br>
<?php echo form_open_multipart('ern_no/create');?>
<div class='row'>
    <div class='col-3'>
<input type="file" name="csv_file" size="20" />
    </div>
    <div class='col-8'>
<button type="submit" class="btn btn-primary">Upload</button></div>
</div>
<?php echo form_close();?>
<hr>
<h3>Registered ERN No</h3>
<hr>

<div class="text-center">
  
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ERN No</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
  $i =0;
  foreach($ern_nos as $ern_no): ?>
  <tr class="table-secondary">
      <th scope="row"><?=++$i?></th>
      <td><?=$ern_no->ern_no?></td>
      <td>
      <button type="button" onclick="location.href='<?=base_url('ern_no/delete/'.$ern_no->id);?>'" class="btn btn-outline-primary">delete</button>
      </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>