
<form id="registerVolunteer" action="<?=base_url()?>Volunteer/register" method="post" style="border: 1px solid #ccc"  class = "vform"  enctype="multipart/form-data">
	<div class="container volunteer-view">
		<img src="<?=base_url()?>public/img/vo.jpeg" style="height: 350px; display: block; margin-left: auto; margin-right: auto;">
		<h3>Register as a Hero</h3>
		<p><?php echo $this->session->flashdata('status'); ?></p>
		<?php $string = validation_errors(); if(!empty($string)): ?>
		<?php echo '<div class="alert" style="width:60%">' .validation_errors(). '</div>'; ?>
		<?php endif; ?>
		<hr>

		<label for="name"><b>Full Name</b></label>
		<input type="text" placeholder="Enter Full Name" name="vName" required>

		<label for="age"><b>Age</b></label>
		<input type="text" placeholder="Enter Your Age" name="vAge" required>

		<label for="gender"><b>Gender</b></label>
		<select name="vGender" id="gender">
			<option value="" disabled="disabled" selected="selected">Please Select</option>
			<option value="female">Female</option>
			<option value="male">Male</option>
		</select>

		<label for="email"><b>Email</b></label>
		<input type="email" placeholder="Enter Your Email" name="vEmail" required>

		<label for="phone"><b>Phone Number</b></label>
		<input type="text" placeholder="xxx-xxxxxxx" name="vPhone" required>

		<label for="image"><b>Image</b></label>
		<input type="file" name="vImage" required>

		<div class="clearfix">
			<button type="button" class="cancelbtn" onClick="document.location.href='http://localhost/disaster/Welcome/';">Cancel</button>
			<button type="submit" class="signupbtn">Register</button>
		</div>
	</div>

	<!-- Donate section --->
	<hr>
	<section class="donate-section">
	    <div class="container">
	    	<h3>Donate to Us</h3>
	        <img src="<?=base_url()?>public/img/donate.svg" style="width: 80%; height: auto; display: block; margin-top: 30px; margin-bottom: 50px; margin-left: auto;
	            margin-right: auto;" >
	    </div>
	</section>
	</form>

<style>
*{box-sizing: border-box}

.volunteer-view{
	margin-top: 100px;
	margin-bottom: 50px;
}

/* Full-width input fields */
input[type=text], input[type=email], select{
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}

input[type=text]:focus, input[type=email]:focus, select:focus{
	background-color: #ddd;
	outline: none;
}

hr{
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}

/* Set a style for all buttons */
.vform button{
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 20%;
	opacity: 0.9;
}

.vform button:hover{
	opacity: 1;
}

/* Extra styles for the cancel button */
.vform .cancelbtn{
	padding: 14px 20px;
	background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.vform .cancelbtn, .signupbtn{
	float: left;
	width: 20%;
}

/* Add padding to container elements */
.vform .container {
	padding: 16px;
	width: 80%;
}

/* Clear floats */
.vform .clearfix::after{
	content: "";
	clear: both;
	display: table;
}

.vform .alert{
	padding: 20px;
	background-color: #f44336;
	color: white;
}

.vform .alert_green{
	padding: 20px;
	background-color: #00cc66;
	color: white;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px){
	.vform .cancelbtn, .signupbtn{
		width: 20%;
	}
}
</style>