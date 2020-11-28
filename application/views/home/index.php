<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Nifty Theme | Osama Bakri" />
	<meta name="description" content="Here is a precise description of my awesome webpage." />
	<meta name="theme-color" content="#0635c9" />
	<meta name="msapplication-tap-highlight" content="no" />
	<!-- Bootstrap CSS File -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/lib/bootstrap.css" />
	<!-- Font Awesome CSS File -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/lib/font-awesome.min.css" />
	<!-- Page CSS File -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom/index.css" />
	<!-- Style CSS File -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom/style.css" />
	<!-- Site Title -->
	<title>SimplifieT - Simplify Things</title>

	<style>
		.font-title{
			font-size:62px;
			line-height:1.1em;
			color:#fff;
			font-weight:bold;
		}
	</style>
</head>
<!-- :: Body -->

<body id="index-page">

	<!-- :: Preloader -->
	<div id="loading" class="loading">
		<div class="main">
			<div class="lds-ring">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>

	<!-- :: Navbar -->
	<nav class="navbar navbar-expand-lg">
		<!-- top bar -->
		<div class="top-bar d-lg-block d-none">
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- col -->
					<div class="col-6">
						<!-- news -->
						<div class="news">
							<span class="stat text-uppercase">new</span>
							<a href="#">Let’s discuss your needs with us&nbsp;&nbsp;&nbsp;</a>
						</div>
					</div>

					<!-- col -->
					<div class="col-6">
						<!-- links -->
						<ul class="links list-unstyled mb-0 d-flex align-items-center justify-content-end">
							<li>
								<a href="#">Sitemap</a>
							</li>
							<li>
								<a href="#">Login</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!-- navbar content -->
		<div class="container">
			<!-- brand -->
			<a class="navbar-brand" href="#">
				<img src="./assets/images/logosimplefiet.jpg" class="img-fluid d-lg-block d-none" alt="VRocket">
				<img src="./assets/images/logosimplefiet.jpg" class="img-fluid d-lg-none d-block" alt="VRocket">
			</a>
			<!-- toggler -->
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<!-- collapse menu -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Support</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Account</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- :: Header -->
	<header>
		<!-- Background Img -->
		<img src="<?php echo base_url();?>assets/images/pages/home/header/05.png" class="img-fluid bg" alt="bg">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row align-items-center">
				<!-- Col -->
				<div class="col-lg-6 mb-lg-0 mb-5">
					<!-- Text Contain -->
					<div class="t-c">
						<h1 class="mb-4">Simplify and give the power to adapt business models and processes quickly</h1>
						<p class="mb-0">Reduce costs, sharpen forecasts, and innovate more.</p>
					</div>
				</div>
				<!-- col -->
				<div class="col-lg-5 ml-auto">
					<!-- Sign-up Form -->
					<div class="sign-up-form">
						<form action="#">
							<!-- Form Head -->
							<div class="form-head">
								<h1 class="mb-0">Cloud Base ERP Software.</h1>
								<p class="mt-5">Trust SimplifieT to run your mission-critical business functions.</p>
								<p class="mt-5">Let’s discuss your needs with us.</p>
							</div>
							<div class="input-group">
								<button type="button">Contact Us</button>
							</div>
							<!-- Form Body -->
							<!-- <div class="form-body">
								<div class="input-group">
									<input type="email" class="th-input w-100" id="email-input" required autocomplete="off"
										placeholder="Email Adress">
								</div>
								<div class="input-group">
									<input type="password" class="th-input w-100" id="password-input" required placeholder="Password">
								</div>
								<div class="input-group">
									<button type="submit">Create your account</button>
								</div>
								<div class="input-group">
									<a href="#" class="th-btn">
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
											aria-hidden="true" class="mr-sm-3 mr-2">
											<title>Google</title>
											<g fill="none" fill-rule="evenodd">
												<path fill="#4285F4"
													d="M17.64 9.2045c0-.6381-.0573-1.2518-.1636-1.8409H9v3.4814h4.8436c-.2086 1.125-.8427 2.0782-1.7959 2.7164v2.2581h2.9087c1.7018-1.5668 2.6836-3.874 2.6836-6.615z">
												</path>
												<path fill="#34A853"
													d="M9 18c2.43 0 4.4673-.806 5.9564-2.1805l-2.9087-2.2581c-.8059.54-1.8368.859-3.0477.859-2.344 0-4.3282-1.5831-5.036-3.7104H.9574v2.3318C2.4382 15.9832 5.4818 18 9 18z">
												</path>
												<path fill="#FBBC05"
													d="M3.964 10.71c-.18-.54-.2822-1.1168-.2822-1.71s.1023-1.17.2823-1.71V4.9582H.9573A8.9965 8.9965 0 0 0 0 9c0 1.4523.3477 2.8268.9573 4.0418L3.964 10.71z">
												</path>
												<path fill="#EA4335"
													d="M9 3.5795c1.3214 0 2.5077.4541 3.4405 1.346l2.5813-2.5814C13.4632.8918 11.426 0 9 0 5.4818 0 2.4382 2.0168.9573 4.9582L3.964 7.29C4.6718 5.1627 6.6559 3.5795 9 3.5795z">
												</path>
											</g>
										</svg>
										<span>Sign up with Google</span>
									</a>
								</div>
							</div> -->
							<!-- Form Footer -->
							<!-- <div class="form-footer">
								<p class="mb-0">By signing up you agree to the <a href="#">Terms of Services</a></p>
							</div> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	

	





	
	
	

	<!-- :: Footer -->
	<footer>
		<div class="container">
			<!-- Links -->
			<div class="links">
				<!-- row -->
				<div class="row">
					<!-- col -->
					<div class="col-lg-4 col-md-3 col-sm-4 col-6 mb-lg-0 mb-3">
						<!-- Content -->
						<div class="content">
							<p class="head mb-md-3 mb-1">Quick Links</p>
							<p class="mb-1">
								<a href="#">Why SimplifieT</a>
							</p>
							<p class="mb-1">
								<a href="#">Enterprise Resource Planning</a>
							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-3 col-sm-4 col-6 mb-lg-0 mb-3">
						<!-- Content -->
						<div class="content">
							<p class="head mb-md-3 mb-1">About SimplifieT</p>
							<p class="mb-1">
								<a href="#">Company Information</a>
							</p>
							<p class="mb-1">
								<a href="#">Customer Stories</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<!-- row -->
				<div class="row justify-content-between">
					<!-- col -->
					<div class="col-lg-9 text-md-left text-center">
						<p class="mb-0">&copy; 2020 SimplifieT</p>
					</div>
					<!-- col -->
					<div class="col-lg-3">
						<!-- Content -->
						<div class="content d-flex align-items-center justify-content-md-end justify-content-center">
							<!-- Social Links -->
							<ul class="pl-0 mb-0">
								<!-- Linked In -->
								<li class="mr-2">
									<a href="#">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<!-- Facebook -->
								<li class="mr-2">
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<!-- Twitter -->
								<li class="mr-2">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							</ul>
							<!-- Language Menu -->
							<div class="language-menu ml-2">
								<button id="lang-btn">
									EN <i class="fa fa-angle-down ml-2 angle"></i>
								</button>
								<div class="menu text-center">
									<div class="head">change language</div>
									<a href="#">
										<i class="fa fa-check"></i> Arabic
									</a>
									<a href="#" class="selected">
										<i class="fa fa-check"></i> English
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- :: Scripts -->
	<!-- Jquery -->
	<script src="<?php echo base_url();?>assets/js/lib/jquery-3.3.1.min.js"></script>
	<!-- Popper -->
	<script src="<?php echo base_url();?>assets/js/lib/popper.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url();?>assets/js/lib/bootstrap.min.js"></script>
	<!-- Custom Script File -->
	<script src="<?php echo base_url();?>assets/js/custom/javaScript.js"></script>
</body>

</html>