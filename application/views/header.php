
<!DOCTYPE html>
<html lang="en">
<head>
	<title>NADIM</title>
	<meta charset="utf-8">
	<meta name="description" content="natural disaster management">
	<meta name="keywords" content="natural, sabah, disaster">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon (ico generator)--->
	<link rel="shortcut icon" href="<?=base_url()?>public/img/logo.png">


	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@200;400&display=swap" rel="stylesheet">

	<!-- W3school fa fa icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- stylesheet -->
	<link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/flaticon.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/animate.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/style.css">


<script>
	function mySubmit() {
	  	alert("Successfully added!");
	}
		
</script>
</head>

<!-- report form -->
<div id="id01" class="modal">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Class Modal"> &times; </span>
	<form id="reportform" action= "<?=base_url()?>Report/addreport" method="post" class="modal-content" enctype="multipart/form-data">
		<div class="contact-title">
			<h2>Report</h2>
		</div>

		<div class="container report-form">
			<label for="location"><b>Location</b></label><br>
			<select name="plocation" id="location">
				<option value="" disabled="disabled" selected="selected">Please Select</option>
				<option value="Kota Kinabalu"> Kota Kinabalu</option>
				<option value="Putatan"> Putatan</option>
				<option value="Tuaran"> Tuaran</option>
				<option value="Papar"> Papar</option>
				<option value="Tamparuli"> Tamparuli</option>
				<option value="Ranau"> Ranau</option>
			</select><br>
			<label for="disaster"><b>Disaster</b></label><br>
			<select name="pdisaster" id="disaster">
				<option value="" disabled="disabled" selected="selected">Please Select</option>
				<option value="Floods"> Floods</option>
				<option value="Earthquakes"> Earthquakes</option>
				<option value="Landslides"> Landslides</option>
				<option value="Typhoon"> Typhoon</option>
			</select><br>
			<label for="description"><b>Description</b></label>
			<input type="textarea" placeholder="Description" name="pdesc">

			<label for="image"><b>Image</b></label>
			<input type="file" name="pImage" required>

			<div>
				<button type="submit" onclick="mySubmit()"> Submit </button>
			<span><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"> Cancel </button></span>
			</div>
		</div>
	</form>
</div>


<body>
<!-- Navigation Section ---> 
	<header class="header-section">
		<nav>
			<a href="<?=base_url()?>Welcome" class="site-logo"><img src="<?=base_url()?>public/img/site-logo.png" alt="logo"></a>
			<div>				
				<ul class="main-menu">
					<li><a href="<?=base_url()?>Welcome">Home</a></li>
					<li><a href="#" onclick="document.getElementById('id01').style.display='block'">Report</a></li>
					<li><a href="<?=base_url()?>Information">Information</a></li>
					<li><a href="<?=base_url()?>Volunteer">Volunteer</a></li>
					<li><a href="<?=base_url()?>Welcome_Admin">Login</a></li>
				</ul>
			</div>	
		</nav>
	</header>

