<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>public/css/style.css"/>

</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">Staff Login</div>
      <div class="card-body">
        <form action="<?php echo base_url('Login/checkStaff')?>" method="post">
          <?php if($this->session->flashdata('login_status')){?>
            <script>alert("Error! Please enter a valid user email and login");</script>
          <?php }?>
          <div class="row">
            <div class="col-md-6">
              <label>Staff Email</label>
              <input type="email" class="form-control" name="staffEmail" placeholder="Enter your staff email" required>
            </div>
            <div class="col-md-6">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>
          </div>
          <br>
          <div class="clearfix" style="float: right;">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
            <input type="button" name="back" value="Back" class="btn btn-secondary" onclick="history.back()">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="<?=base_url()?>public/js/main.js"></script>
</body>
<style>
  body{font-family: Arial,Helvetica, sans-serif;}
  *{box-sizing: border-box;}

  /*Full-width input fields*/
  input[type=text], input[type=password],input[type=email],select{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus,input[type=email]:focus,select:focus{
    background-color: #ddd;
    outline: none;
  }

  hr{
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /*Set a style for all buttons*/
  button{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
  }

  button:hover{
    opacity: 1;
  }

  /*Extra styles for the cancel button*/
  .cancelbtn{
    padding: 14px 20px;
    background-color: #f44336;
  }

  /*Float cancel and signup buttons and add an equal width*/
  .cancelbtn, .signupbtn{
    float: left;
    width: 20%;
  }

  /*Add padding to container elements*/
  .container{
    padding: 16px;
    width: 80%;
  }

  /*Clear floats*/
  .clearfix::after{
    content: "";
    clear: both;
    display: table;
  }


  /*Change styles for cancel button and signup button on extra small screens*/
  @media screen and (max-width: 300px){
    .cancelbtn, .signupbtn{
      width: 20%;
    }
  }
</style>
</html>