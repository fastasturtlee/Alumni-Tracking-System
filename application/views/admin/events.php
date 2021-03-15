

<?php if($this->session->userdata('user_type')=== 'alumni'){
  show_404();
} ?>
<button onclick="location.href ='<?=base_url('events/create')?>';" type="button" class="btn btn-primary btn-lg">Add events</button>
<hr>
<h3>Recent Events</h3>
<hr>

<div class='text-center'>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">event id</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">venue</th>
      <th scope="col">state</th>
      <th scope="col">city</th>
      <th scope="col">day</th>
      <th scope="col">month</th>
      <th scope="col">year</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <?php foreach($events as $event): ?>
  <tr class="table-secondary">
      <th scope="row"><?=$event->event_id?></th>
      <td><?=$event->title?></td>
      <td><?=$event->description?></td>
      <td><?=$event->venue?></td>
      <td><?=$event->state?></td>
      <td><?=$event->city?></td>
      <td><?=$event->day?></td>
      <td><?=$event->month?></td>
      <td><?=$event->year?></td>
      <td>
      <button type="button" onclick="location.href='<?=base_url('events/edit/'.$event->event_id);?>'"class="btn btn-outline-primary">edit</button>
      <?php if($event->ispublish == 1):?>
      <button type="button" onclick="location.href='<?=base_url('events/unpublish/'.$event->event_id);?>'" class="btn btn-outline-primary">unpublish</button>
      <?php elseif($event->ispublish == 0): ?>
        <button type="button" onclick="location.href='<?=base_url('events/publish/'.$event->event_id);?>'" class="btn btn-outline-primary">publish</button>
        <?php endif;?>
      <button type="button" onclick="location.href='<?=base_url('events/delete/'.$event->event_id);?>'" class="btn btn-outline-primary">delete</button>
      </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>