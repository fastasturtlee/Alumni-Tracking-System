
<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/sidebar');
  $this->load->view('admin/header');  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/sidebar');
  $this->load->view('superadmin/header');
}
?>
<?php echo form_open('events/update') ?>
<h3>Update Event Details</h3><br>
<div>
  <input type="hidden" name="event_id" value="<?= $event['event_id'];?>">
  <input type="hidden" name="currentuser" value="<?= $this->session->userdata('user_type');?>">
  </div>
<div class="row">
<div class="col-sm-12">
			<div class="form-group">
				<label for="title"><span style="color:red;">* </span>Event Title</label>
				<input type="text" class="form-control title" value="<?=$event['title']?>" name="title" id="title" placeholder="Event Title">
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="description"><span style="color:red;">* </span>Event Description</label>
				<textarea class="form-control description" id="description" name="description" rows="10" placeholder="Add Description"><?php echo $event['description']?></textarea>
				<div class="invalid-feedback description"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="venue"><span style="color:red;">* </span>Event Venue</label>
				<input type="text" class="form-control venue" value="<?=$event['venue']?>" name="venue" id="venue" placeholder="Main Seminar Hall , Block D">
				<div class="invalid-feedback venue"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="state"><span style="color:red;">* </span>State</label>
				<input type="text" class="form-control state" value="<?=$event['state']?>" name="state" id="state" placeholder="Event State">
				<div class="invalid-feedback state"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="city"><span style="color:red;">* </span>City</label>
				<input type="text" class="form-control city" value="<?=$event['city']?>" name="city" id="city" placeholder="Event City">
				<div class="invalid-feedback city"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="city"><span style="color:red;">* </span>Day</label>
                <?php 
$options = array(
  '' => 'Select day',
  '1' => '1',
  '2' => '2',
  '3' => '3',
  '4' => '4',
  '5' => '5',
  '6' => '6',
  '7' => '7',
  '8' =>  '8',
  '9' => '9',
  '10' => '10',
  '11' => '11',
  '12' => '12',
  '13' => '13',
  '14' => '14',
  '15' => '15',
  '16' => '16',
  '17' => '17',
  '18' => '18',
  '19' => '19',
  '20' => '20',
  '21'=>  '21',
  '22' => '22',
  '23' => '23',
  '24' => '24',
  '25' => '25',
  '26' => '26',
  '27' => '27',
  '28' => '28',
  '29' => '29',
  '30' => '30',
  '31' => '31',
  
  
);
$attribute = 'class="form-control day "';
echo form_dropdown('day',$options,$event['day'],$attribute);
?>
				<div class="invalid-feedback day"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="month"><span style="color:red;">* </span>Month</label>
				<select class="form-control month" name="month" id="month">
					<option>Select Month</option>
					<option value="january">January</option>
					<option value="february">February</option>
					<option value="march">March</option>
					<option value="april">April</option>
					<option value="may">May</option>
					<option value="june">June</option>
					<option value="july">July</option>
					<option value="august">August</option>
					<option value="september">September</option>
					<option value="october">October</option>
					<option value="november">November</option>
					<option value="december">December</option>
				</select>
				<div class="invalid-feedback city"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="year"><span style="color:red;">* </span>Year</label>
				<select class="form-control year" name="year" id="year">
					<option>Select Year</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
				</select>
				<div class="invalid-feedback year"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="name"><span style="color:red;">* </span>Event Organizer Name</label>
				<input type="text" class="form-control name" name="organizer_name" id="name" value="<?=$event['organizer_name']?>" placeholder="Organizer Name">
				<div class="invalid-feedback name"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="mobile"><span style="color:red;">* </span>Event Organizer Contact Number</label>
				<input type="number" class="form-control mobile" name="organizer_contact" id="mobile" value="<?=$event['organizer_contact']?>" placeholder="Organizer Contact Number">
				<div class="invalid-feedback mobile"></div>
			</div>
		</div>
	</div>
	
	<br><center><input type="submit" class="btn btn-primary"></center><br><br>

    <?php echo form_close(); ?>
	<?php
if($this->session->userdata('user_type') =='admin'){
  $this->load->view('admin/footer');
  
}elseif($this->session->userdata('user_type') == 'superadmin'){
  $this->load->view('superadmin/footer');

}
?>