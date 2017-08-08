<?php $webroot = "http://localhost/PNVsocial_network/src/Webroot"; ?>
<!-- Style for login -->
<link rel="stylesheet" href="<?php echo $webroot;?>/css/animate.css">
<!-- Custom Stylesheet -->
<link rel="stylesheet" href="<?php echo $webroot;?>/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

<!-- Body of login form -->
<div class="container">
	<div class="top">
		<h1 id="title" class="hidden"><span id="logo">Welcome to <span>PNV</span></span></h1>
	</div>
	<div class="login-box animated fadeInUp">
		<div class="box-header">
			<h2>Log In</h2>
		</div>
		<label for="username">Username</label>
		<br/>
		<input type="text" id="username">
		<br/>
		<label for="password">Password</label>
		<br/>
		<input type="password" id="password">
		<br/>
		<button type="submit">Log in</button>
		<br/>
		<a href="#"><p class="small">Forgot your password?</p></a>
	</div>
</div>