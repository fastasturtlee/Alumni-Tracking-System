
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=base_url('assets\images\aakash.png')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets\images\rishika.png')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets\images\amit.png')?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br> <br>
<h1>News</h1>
<hr style="height:1px;border-width:0px;color:#d9230f;background-color:#d9230f">
<div>
  <div class='row'>
<?php 
$news_row = $this->news_model->getNumRow();
for($i =0;$news_row>=4?$i<4:$i<$news_row;$i++): ?>
<?php if($event->ispublish == TRUE): ?>
<br>
<div class="card shadow col-lg-5 mb-4 mr-5 ml-4" style="width: 25rem;">
<small style="text-align : right;"><?=$news[$i]->date?> </small>
  <div class="card-body">
    <h5 class="card-title"><?=$news[$i]->title?></h5>
    <p class="card-text"><?=$news[$i]->body?></p>
    <a href="<?=base_url()?>news" class="btn btn-primary">View More</a>
  </div>
</div>
<?php endif;?>
<?php endfor ?>
  </div>

</div>

<hr style="height:1px;border-width:0px;color:#d9230f;background-color:#d9230f">
<h1>Events </h1>
<hr style="height:1px;border-width:0px;color:#d9230f;background-color:#d9230f">
<div class='row'>
<?php 
$events_row = $this->event_model->getNumRow();

for($i=0;$events_row>=4?$i<4:$i<$events_row;$i++): ?>
<?php if($event->ispublish == TRUE): ?>
<br>
<div class="card shadow col-lg-5 mb-4 mr-5 ml-4" style="width: 100rem;">
<small style="text-align : right;"><?=$events[$i]->date_posted?> </small>
  <div class="card-body">
  <label for="title"><b>Title</b></label>
    <h5 class="card-title"><?=$events[$i]->title?></h5><hr>
    <label for="Description"><b>Description</b></label>
    <p class="card-text"><?=$events[$i]->description?></p><hr>
    <p class="card-text" ><?php echo '<b>Location</b>: '.$events[$i]->venue.','.$events[$i]->city.','.$events[$i]->state ?> </p><hr>
    <p class="card-text"><?='<b>Organizer Name : </b>'.$events[$i]->organizer_name.'<b> Organizer Number :</b> '.$events[$i]->organizer_contact?></p><hr>
    <a href="<?php base_url()?>events" class="btn btn-primary">View More</a>
  </div>
</div>
<?php endif;?>
<?php endfor ?>

</div>
<hr style="height:1px;border-width:0px;color:#d9230f;background-color:#d9230f">
<h1>Careers </h1>
<hr style="height:1px;border-width:0px;color:#d9230f;background-color:#d9230f">

<br>
<div class='container'>
<div class='row'>
<?php
$job_row = $this->career_model->getNumRow();
 for($i = 0 ;$job_row>=4?$i<4:$i<$job_row;$i++): ?>
  <?php if($career->ispublish == TRUE): ?>
<br>
<div class="card shadow col-lg-5 mb-4 mr-5 ml-4" style="width: 50rem;">
<small style="text-align : right;"><?=$careers[$i]->date?> </small>
  <div class="card-body">
  <label for="title"><b>Title</b></label>
    <h5 class="card-title"><?=$careers[$i]->title?></h5><hr>
    <label for="Description"><b>Description</b></label>
    <p class="card-text"><?=$careers[$i]->description?></p><hr>
    <div class = 'row'>
    <div class = 'col-4'>
    <p class="card-text" ><?php echo '<b>Job Location</b>: '.$careers[$i]->location ?> </p></div>
    <div class = 'col-4'>
    <p class="card-text" ><?php echo '<b>Duration of Job</b>: '.$careers[$i]->duration ?> </p>
    </div>
    <div class='col-4'
    <p class="card-text" ><?php echo '<b>Job Type</b>: '.$careers[$i]->work_type ?> </p></div>
    <br>
    </div>
    <div class = 'row'>
    <div class = 'col-4'>
    <p class="card-text" ><?php echo '<b>Salary</b>: '.$careers[$i]->salary ?> </p></div>
    <div class = 'col-8'>
    <a class="card-text" style="color:black;" href="<?=$careers[$i]->link ?>"><?php echo '<b>link</b>: '.$careers[$i]->link ?> </a>
    </div>
    <br>
    </div>
    <br>
    <a href="<?=base_url()?>careers" class="btn btn-primary">View More</a>
  </div>
</div>
<?php endif; ?>
<?php endfor; ?>
</div>
</div>


