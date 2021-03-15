<?php
$this->load->view('admin/sidebar');
$this->load->view('admin/header');
 ?>
<h3> Update News </h3><hr>
<?php echo form_open('news/update');?>
	<div class="row">
		<div class="col-sm-12">
		<div>
  			<input type="hidden" name="news_id" value="<?= $new['news_id'];?>">
 	 	</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control title" value="<?= $new['title'] ;?>" id="title" name="title" placeholder="Enter News Title" />
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="title">Body</label>
				<textarea class="form-control body" id="body" name="body" rows="10" placeholder="Enter News Body"><?= $new['body'];?></textarea>
				<div class="invalid-feedback body"></div>
			</div>
		</div>
	</div>
	<center>
	<input type="submit" id="news_button" class="btn btn-primary" value="submit"></center>
<?php echo form_close();?>