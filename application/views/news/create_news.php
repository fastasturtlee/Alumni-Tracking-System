<br><?php echo validation_errors();?>
<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/sidebar');
  $this->load->view('admin/header');  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/sidebar');
  $this->load->view('superadmin/header');
}
?>
<h3> Add News </h3><hr>
<?php echo form_open('news/add');?>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control title" id="title" name="title" placeholder="Enter News Title" />
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="title">Body</label>
				<textarea class="form-control body" id="body" name="body" rows="10" placeholder="Enter News Body"></textarea>
				<div class="invalid-feedback body"></div>
			</div>
		</div>
	</div>
	<center>
	<input type="submit" id="news_button" class="btn btn-primary" value="submit"></center>
<?php echo form_close();?>
<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/footer');  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/footer');
}
?>