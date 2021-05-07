
<div>
<?php foreach($news as $new): ?>
  <?php if($new->ispublish == TRUE): ?>
<br>
<center>
<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 50rem;">
<small style="text-align : right;"><?=$new->date?> </small>
  <div class="card-body">
    <h5 class="card-title"><?=$new->title?></h5>
    <p class="card-text"><?=$new->body?></p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
</center>
<?php endif; ?>
<?php endforeach ?>

</div>