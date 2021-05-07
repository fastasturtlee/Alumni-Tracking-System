<?php echo validation_errors();?>
<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/sidebar');
  $this->load->view('admin/header');  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/sidebar');
  $this->load->view('superadmin/header');
}
?>
<?php echo form_open('careers/update') ?>
<h3>update Job Details</h3><br>
<div>
  <input type="hidden" name="career_id" value="<?= $career['career_id'];?>">
  <input type="hidden" name="currentuser" value="<?= $this->session->userdata('user_type');?>">
  </div>
<div class="row">
<div class="col-sm-12">
			<div class="form-group">
				<label for="title"><span style="color:red;">* </span>Job Title</label>
				<input type="text" class="form-control title" value="<?= $career['title'] ?>" name="title" id="title" placeholder="Job Title">
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="description"><span style="color:red;">* </span>Job Description</label>
				<textarea class="form-control description"  id="description" name="description" rows="10" placeholder="Add Description"><?= $career['description'] ?></textarea>
				<div class="invalid-feedback description"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="venue"><span style="color:red;">* </span>Job location</label>
				<input type="text" class="form-control venue" value="<?= $career['location'] ?>" name="location" id="venue" placeholder="Job location">
				<div class="invalid-feedback venue"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="state"><span style="color:red;">* </span>Duration</label>
				<input type="text" class="form-control state" value="<?= $career['duration'] ?>" name="duration" id="duration" placeholder="Duration">
				<div class="invalid-feedback state"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="city"><span style="color:red;">* </span>link</label>
				<input type="text" class="form-control city" value="<?= $career['link'] ?>" name="link" id="city" placeholder="Put apply link(if any)">
				<div class="invalid-feedback city"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="city"><span style="color:red;">* </span>work type</label>
			<?php 
            $options = array(
                '' => 'select work type',
                'full time' => ' full time',
                'internship' => 'Internship',
                'part-time' =>  'Part-time',
                'Trainee' => 'Trainee'
            );

            $attribute = 'class = "form-control work"';
            echo form_dropdown('work_type',$options,$career['work_type'],$attribute);

            ?>
				<div class="invalid-feedback day"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="month"><span style="color:red;">* </span>Month</label>
				<?php 
            $options = array(
                '' => 'select salary',
                '<=2,50,000' => '<2,50,000',
                '<=3,50,000' => '<=3,50,000',
                '<=5,00,000' =>  '<=5,00,000',
                '<=7,00,000' => '<=7,00,000',
                '<=8,00,000' => '<=8,00,000',
                '<=10,00,000' => '<=10,00,000',
                '<=15,00,000' => '<=15,00,000',
                '<=20,00,000' => '<=20,00,000',
                '<=30,00,000' => '<=30,00,000',
                '=>30,00,000' => '=>30,00,000'
            );

            $attribute = 'class = "form-control salary"';
            echo form_dropdown('salary',$options,$career['salary'],$attribute);

            ?>
				<div class="invalid-feedback city"></div>
			</div>
		
	<br><input type="submit" class="btn btn-primary"><br><br>

    <?php echo form_close(); ?>

	<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/footer'); 
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/footer');
}
?>