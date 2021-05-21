<?php 
if((!$this->session->userdata('logged_in'))){
    show_404();
}
?>
<?php
if($this->session->userdata('user_type') === 'alumni' || $this->session->userdata('user_type') ==='superadmin'){
    show_404();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Alumni Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="<?= base_url('assets\css\bootstrap.css')?>" />
<script src="<?= base_url("assets\js\jquery-3.5.1.min.js")?>"></script>
<script src="<?= base_url('assets\js\bootstrap.min.js')?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="<?=base_url('assets\js\main.js')?>" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=base_url('assets\css\syle.css');?>" />

<script>

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

<?php 
$years = array('2014','2015','2016','2017','2018','2019','2020','2021','2022','2023');
foreach($years as $year){
$data[$year] = $this->user_model->noRegistered($year);
}
?>

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['2014', <?=$data['2014'] ?>],
        ['2015', <?=$data['2015'] ?>],
        ['2016', <?=$data['2016'] ?>],
        ['2017', <?=$data['2017'] ?>],
        ['2018', <?=$data['2018'] ?>],
        ['2019', <?=$data['2019'] ?>],
        ['2020', <?=$data['2020'] ?>],
        ['2021', <?=$data['2021'] ?>],
        ['2022', <?=$data['2022'] ?>],
        ['2023',<?=$data['2023']?>]
    ]);

    var options = {
        title: 'Students registered from different batches',
        is3D : true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart'));

    chart.draw(data, options);
}
</script>
</head>
<body>

<!-- Sidebar -->
<!-- Side navigation -->

<div class="sidenav">

<br>
<!--
<hr style="height:1px;border-width:2px;color:#d9230f;background-color:white">-->
<a class="ml-1 font-weight-bold" style="font-size: 40px;">MENU</a>
<!--
<hr style="height:1px;border-width:2px;color:#d9230f;background-color:white">
<hr style="height:1px;border-width:2px;color:#d9230f;background-color:white">-->
<div >
<br><br><br>
<br>

  <a href="<?=base_url('admin/index')?>"class="ml-4" style="font-variant-caps: small-caps;"> <h6>Index</a><br>
  <a href="<?=base_url('admin/student')?>"class="ml-4" style="font-variant-caps: small-caps;"> <h6>Alumni</a><br>
  <a href="<?=base_url('admin/events')?>" class="ml-4" style="font-variant-caps: small-caps;">Events</a><br>
  <a href="<?= base_url('admin/news')?>" class="ml-4" style="font-variant-caps: small-caps;">News</a><br>
  <a href="<?= base_url('admin/search')?>" class="ml-4" style="font-variant-caps: small-caps;">Search</a><br>
  <a href="<?= base_url('admin/careers') ?>" class="ml-4" style="font-variant-caps: small-caps;">Careers</a><br>
</div>
</div>

<!-- Page content -->
<div class="main">

