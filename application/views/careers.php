<div>
<?php foreach($careers as $career): ?>
<br>
<center>
<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 50rem;">
<small style="text-align : right;"><?=$career->date?> </small>
  <div class="card-body">
  <label for="title"><b>Title</b></label>
    <h5 class="card-title"><?=$career->title?></h5><hr>
    <label for="Description"><b>Description</b></label>
    <p class="card-text"><?=$career->description?></p><hr>
    <div class = 'row'>
    <div class = 'col-4'>
    <p class="card-text" ><?php echo '<b>JOb Location</b>: '.$career->location ?> </p></div>
    <div class = 'col-4'>
    <p class="card-text" ><?php echo '<b>Duration of Job</b>: '.$career->duration ?> </p>
    </div>
    <div class='col-4'
    <p class="card-text" ><?php echo '<b>Job Type</b>: '.$career->work_type ?> </p></div>
    <br>
    </div>
    <div class = 'row'>
    <div class = 'col-4'>
    <p class="card-text" ><?php echo '<b>Salary</b>: '.$career->salary ?> </p></div>
    <div class = 'col-6'>
    <a class="card-text" style="color:black;" href="<?=$career->link ?>"><?php echo '<b>link</b>: '.$career->link ?> </a>
    </div>
    <br>
    </div>
    <br>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
</center>
<?php endforeach ?>

</div>