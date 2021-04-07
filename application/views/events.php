
<div>
<?php foreach($events as $event): ?>
<br>
<center>
<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 50rem;">
<small style="text-align : right;"><?=$event->date_posted?> </small>
  <div class="card-body">
  <label for="title"><b>Title</b></label>
    <h5 class="card-title"><?=$event->title?></h5><hr>
    <label for="Description"><b>Description</b></label>
    <p class="card-text"><?=$event->description?></p><hr>
    <p class="card-text" ><?php echo '<b>Location</b>: '.$event->venue.','.$event->city.','.$event->state ?> </p><hr>
    <p class="card-text"><?='<b>Organizer Name : </b>'.$event->organizer_name.'<b> Organizer Number :</b> '.$event->organizer_contact?></p><hr>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
</center>
<?php endforeach ?>

</div>