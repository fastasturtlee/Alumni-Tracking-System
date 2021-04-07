<?php 
if((!$this->session->userdata('logged_in'))){
    show_404();
}
?>
<?php
if($this->session->userdata('user_type') === 'alumni' || $this->session->userdata('superadmin'))
    show_404();
?>
<h3 class="text-center display-4 pt-2">Search</h3><hr>
<?= form_open('search/result'); ?>
<div class="row mt-4">
	<div  class="col-sm-12">
		<div class="form-group">
			<input type="text" id="search_bar" name="search_bar" class="form-control search_bar" placeholder="Searh by username / full name / Batch / ERN No / stream" >
		</div>
	</div>
	<input class="btn btn-primary ml-3" type="submit" value="Search" id="search_btn">
</div>
<?=  form_close(); ?>
