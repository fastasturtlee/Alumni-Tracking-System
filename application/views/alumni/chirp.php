<?php echo form_open('chirp/post');?>
<div class='container-fluid'>
<legend class="">Chirp here</legend>
<textarea class='form-control shadow' name="description" rows="4" placeholder="write something here...">
</textarea>
<br>
<center>
<button type="submit" class="btn btn-primary">submit</button>
</center>
<br>
</div>
<?php echo form_close();?>

<div>
<?php foreach($chirps as $chirp): ?>
<br>
<center>
<div class="card shadow p-3 bg-white rounded" style="width: 50rem;">
<small style="text-align : right;"><?=$chirp->created_at?> </small>
  <div class="card-body">
  <b><?=$chirp->username?></b>
  <hr>
  <p class="card-text"><?=$chirp->description?></p>
  </div>
</div>
</center>
<?php endforeach ?>

</div>