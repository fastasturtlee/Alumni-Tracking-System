<?php 
if((!$this->session->userdata('logged_in'))){
    show_404();
}
?>
<?php
if($this->session->userdata('user_type') === 'alumni' || $this->session->userdata('superadmin')){
    show_404();
}
?>
<center>
<div id="chart" class="shadow" style="width: 1000px; height: 500px;">

</div>
</center>