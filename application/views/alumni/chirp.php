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
<div class="card shadow p-3 bg-white rounded" style="width: 50rem; height:200px;">
<small style="text-align : right;"><?=$chirp->created_at?> </small>
  <div class="card-body">
  <div class='row'>
    <div class="col-2">
    <?php if(empty($chirp->profile_pic)):?>
  <img src="<?=base_url('assets\images\noprofile.jpg')?>" alt="profile pic" class="shadow profile_pic" width="35px"></div>
  <?php else: ?>
    <img src="<?=base_url('uploads/'.$chirp->profile_pic);?>" alt="profile pic" width="35px" class="shadow profile_pic"></div>
  <?php endif; ?>
  <div class="col-8">
  <b class=""><?=$chirp->username?></b>
  </div>
  </div>
  <hr>
  <p class="card-text"><?=$chirp->description?></p>
  </div>
</div>
</center>
<?php endforeach ?>

</div>