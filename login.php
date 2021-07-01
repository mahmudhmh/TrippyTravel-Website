
<?php
include("LoginProc.php");

if(isset($_GET['msg']) && $_GET['msg']=='Failed'){
	?>
	<script>
	alert("Email Or Password Are Invalid");
	</script>
	<?php
}


if(isset($_GET['msg']) && $_GET['msg']=='Signedup'){
	?>
	<script>
	alert("Account Created Successfully");
	</script>
	<?php
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="shortcut icon" type="image/icon" href="assets/images/headicon.png"/>
  <script src="login.js"></script>
</head>
<body>
 <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="Logo_Trippy.png" alt="" /></div>
        <div class="formBx">
          <form action="LoginProc.php" method="POST">
            <h2>Sign In</h2>
            <input type="text" name="Email" placeholder="Email" required />
            <input type="password" name="Password" placeholder="Password" required />
            <input type="submit" name="Log" value="Login"/>
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="connect.php" method="POST">
            <h2>Create an account</h2>
            <input type="text" name="Fullname" placeholder="Full Name" required />
            <input type="text" name="Username" placeholder="Username" required />
            <input type="email" name="Email" placeholder="Email Address" required />
            <input type="password" name="Password" placeholder="Create Password" required />
            <input type="text" name="Country" placeholder="Country" required/>
            <input type="text" name="Address" placeholder="Address" required/>
            <input type="text" name="Number" placeholder="Number" required/>
            <p class="gender">
              <input type="radio" name="gender" value="m" required>&nbsp;Male
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="gender" value="f" required>&nbsp;Female<br>
            </p>
            <input type="submit" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="Logo_Trippy.png" alt="" /></div>
      </div>
    </div>
  </section>
</body>
</html>