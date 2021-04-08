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
<?php echo form_open('events/add') ?>
<h3>Add Event Details</h3><br>
<div class="row">
<div class="col-sm-12">
			<div class="form-group">
				<label for="title"><span style="color:red;">* </span>Event Title</label>
				<input type="text" class="form-control title" name="title" id="title" placeholder="Event Title">
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="description"><span style="color:red;">* </span>Event Description</label>
				<textarea class="form-control description" id="description" name="description" rows="10" placeholder="Add Description"></textarea>
				<div class="invalid-feedback description"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="venue"><span style="color:red;">* </span>Event Venue</label>
				<input type="text" class="form-control venue" name="venue" id="venue" placeholder="Main Seminar Hall , Block D">
				<div class="invalid-feedback venue"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="state"><span style="color:red;">* </span>State</label>
				<input type="text" class="form-control state" name="state" id="state" placeholder="Event State">
				<div class="invalid-feedback state"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="city"><span style="color:red;">* </span>City</label>
				<input type="text" class="form-control city" name="city" id="city" placeholder="Event City">
				<div class="invalid-feedback city"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="city"><span style="color:red;">* </span>Day</label>
				<select class="form-control day" name="day" id="day">
					<option>Select Day</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
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
				<input type="text" class="form-control name" name="organizer_name" id="name" placeholder="Organizer Name">
				<div class="invalid-feedback name"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="mobile"><span style="color:red;">* </span>Event Organizer Contact Number</label>
				<input type="number" class="form-control mobile" name="organizer_contact" id="mobile" placeholder="Organizer Contact Number">
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