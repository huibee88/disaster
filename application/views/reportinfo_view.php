
<section class="report-view">
	<form id="formApplication" method="post" style="border: 1px solid #ccc">
	<div class="container">
		<h3>Report Details</h3>
		<hr>

		<label for="location"><b>Location</b></label>
		<input type="text" name="aProg" value="Kota Kinabalu">

		<label for="disaster"><b>Disaster</b></label><br>
		<input type="text" name="aDate" value="Floods" readonly><br>	

		<label for="description"><b>Description</b></label>
		<input type="textarea" name="aName" value="Hujan yang tidak kuat" readonly>

		<label for="date"><b>Date of Report</b></label>
		<input type="text" name="aICPass" value="30 July 2022" readonly>

		<label for="image"><b>Proof of Image</b></label><br>
		<img src="<?=base_url()?>public/img/1.jpeg">

		<div class="clearfix r-btn">
			<a href="#"><button type="button" class="cancelbtn">Not Approve</button></a>

			<a href="#"><button type="button" class="signupbtn">Approve</button></a>
		</div>
	</div>
</form>
</section>

<style>

*{box-sizing: border-box}

.report-view .container{
	margin-top: 100px;
}

/* Full-width input fields */
input[type=text], input[type=textarea] select{
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, select:focus{
	background-color: #ddd;
	outline: none;
}

hr{
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}

/* Set a style for all buttons */
.r-btn button{
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 20%;
	opacity: 0.9;
}

.r-btn button:hover{
	opacity: 1;
}

/* Extra styles for the cancel button */
.r-btn .cancelbtn{
	padding: 14px 20px;
	background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.r-btn .cancelbtn, .signupbtn{
	float: left;
	width: 20%;
}

/* Add padding to container elements */
.container {
	padding: 16px;
	width: 80%;
}

/* Clear floats */
.r-btn .clearfix::after{
	content: "";
	clear: both;
	display: table;
}

.alert{
	padding: 20px;
	background-color: #f44336;
	color: white;
}

.alert_green{
	padding: 20px;
	background-color: #00cc66;
	color: white;
}

input[type=text], input[type=date]{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px){
	.cancelbtn, .signupbtn{
		width: 20%;
	}
}
</style>