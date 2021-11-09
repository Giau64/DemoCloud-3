<?php
  if(isset($_POST['btnSubmit']))
  {
    
    $us = $_POST['txtUsername'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];
    $fullname = $_POST['txtFullname'];
    $email = $_POST['txtEmail'];
    $address = $_POST['txtAddress'];
    $tel=$_POST['txtTel'];
    
    
    if($us=="")
    {
      echo "<script>alert('Enter username please')</script>";
    }
    elseif($pass1=="")
    {
      echo "<script>alert('Enter password please')</script>";
    }
    elseif($pass2=="")
    {
      echo "<script>alert('Enter confirm password please')</script>";
    }
    elseif($fullname=="")
    {
      echo "<script>alert('Enter fullname please')</script>";
    }
    elseif($address=="")
    {
      echo "<script>alert('Enter address please')</script>";
    }
    elseif($tel=="")
    {
      echo "<script>alert('Enter phone number please')</script>";
    }
    elseif($email=="")
    {
      echo "<script>alert('Enter email please')</script>";
    }    
   

    elseif(strlen($pass1)<6)
    {
      echo "<script>alert('Password must be greater than 6 characters')</script>";
    }
    elseif($pass1!=$pass2)
    {
      echo "<script>alert('Password don't match')</script>";
    }
    elseif(!is_numeric($tel))
    {
      echo "<script>alert('Invalid phone number')</script>";
    }
    elseif(strlen($tel)<10 || strlen($tel)>11)
    {
      echo "<script>alert('Invalid phone number')</script>";
    }
    
    else
    {
      include_once("connection.php");
      $pass = md5($pass1);
      $sq = "SELECT * FROM public.customer WHERE username='$us' OR phone='$tel'";
      $res = pg_query($conn,$sq);
      if(pg_num_rows($res)==0)
      {
        pg_query($conn, "INSERT INTO customer (username, password, custname, address, phone,
        email, state)
        VALUES ('$us', '$pass', '$fullname', '$address', '$tel', '$email', 0)") or die(pg_errno($conn));
        echo '<meta http-equiv="refresh" content="0;URL=?page=login"/>'; 
      }
      else
      {
        echo "<script>alert('Username or Email or Phone number have already existed!')</script>";
      }
    }
  }
?>


<div class="container">
  <h2 align ="center"><b>Register</b></h2>
  <form name="form1" method="post" action="" class="form-horizontal" role="form">
    <div class="form-group">
      <label>Username (*):</label>
      <input type="text" name="txtUsername" class="form-control" id="txtUsername" placeholder="Enter username" value="">
    </div>
    <div class="form-group">
      <label>Password (*):</label>
      <input type="password" name="txtPass1" class="form-control" id="" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label>Confirm password (*):</label>
      <input type="password" name="txtPass2" class="form-control" id="" placeholder="Confirm password">
    </div>
    <div class="form-group">
      <label>Fullname (*):</label>
      <input type="text" name="txtFullname" id="txtFullname" value="" class="form-control" id="" placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label>Address (*):</label>
      <input type="text" name="txtAddress" id="txtAddress" value="" class="form-control" id="" placeholder="Enter address">
    </div>
    <div class="form-group">
      <label>Phone number (*):</label>
      <input type="tel" name="txtTel" value="" class="form-control" id="" placeholder="Enter phone number">
    </div>
    <div class="form-group">
      <label>Email (*):</label>
      <input type="email" name="txtEmail" value="" class="form-control" id="" placeholder="Enter email">
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="btnSubmit" value="Register">Submit</button>
    <button type="button" class="btn btn-danger" name="btnCancel" onclick="window.location='index.php'">Cancel</button>
    <div class="container signin">
    <br><p>Already have an account? <a href="?page=login">Sign in</a>.</p>
    </div>
    </br>
  </form>
</div>