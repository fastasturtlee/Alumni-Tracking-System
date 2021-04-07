<?php 
if((!$this->session->userdata('logged_in'))){
    show_404();
}
?>
<?php
if($this->session->userdata('user_type') === 'alumni'|| 'super admin')
    show_404();
?>

<button onclick="location.href ='<?=base_url('news/create')?>';" type="button" class="btn btn-primary btn-lg">Add News</button>
<hr>
<h3>Recent News</h3>
<div class="text-center">
  
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">news id</th>
      <th scope="col">title</th>
      <th scope="col">body</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <?php foreach($news as $new): ?>
  <tr class="table-secondary">
      <th scope="row"><?=$new->news_id?></th>
      <td><?=$new->title?></td>
      <td><?=$new->body?></td>
      <td>
      <button type="button" onclick="location.href='<?=base_url('news/edit/'.$new->news_id);?>'"class="btn btn-outline-primary">edit</button>
      <?php if($new->ispublish == 1):?>
      <button type="button" onclick="location.href='<?=base_url('news/unpublish/'.$new->news_id);?>'" class="btn btn-outline-primary">unpublish</button>
      <?php elseif($new->ispublish == 0): ?>
        <button type="button" onclick="location.href='<?=base_url('news/publish/'.$new->news_id);?>'" class="btn btn-outline-primary">publish</button>
        <?php endif;?>
      <button type="button" onclick="location.href='<?=base_url('news/delete/'.$new->news_id);?>'" class="btn btn-outline-primary">delete</button>
      </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>