<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
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
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>