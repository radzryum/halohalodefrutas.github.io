<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/d5327027d1.js" crossorigin="anonymous"></script>
</head>
<body>
<nav>
			<div class="logo">
			<bgcolor=#909721>
				<img src="img/logo.png">
			</div>
			<ul class="head">
				
				<li><a href="../index.html"><i class="fas fa-home"></i>&nbsp HOME </a></li>
				<li><a href="../html/about.html"><i class= "fas fa-question-circle"></i>&nbsp ABOUT</a></li>				
				<li><a href="../html3/contact.html"><i class="fas fa-id-card"></i>&nbsp CONTACT  </a></li>
				<li><a href="../html4/FAQS.html"><i class="fas fa-comment-dots"></i>&nbsp FAQS </a></li></bgcolor>
				<li  class="active"><a href="../reg_system/index.php"><i class="fas fa-user-plus"></i>&nbsp Log In </a></li></bgcolor>
			</ul>
		</nav>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>			
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>