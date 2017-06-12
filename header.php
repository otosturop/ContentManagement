<?php 
include 'adPanel/neting/baglan.php';
include 'fonksiyon.php';

$ayarsor =$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek =$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title> <?php echo $ayarcek['ayar_title']; ?> </title>	

		<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>" />
		<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
		<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-law-firm.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-law-firm.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">

	<style>
.color.white {
	background: #fff;
	color: #414141;
}

.color.white i {
	color: #414141;
}

.color.white h2 {
	color: #414141 !important;
}

.color.white h2 span {
	background: #fff !important;
	color: #414141 !important;
}

.color.white #page-title h2:before{
	background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.65) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=1 ); /* IE6-9 */
}

.color.white #page-title h2:after {
    background: -moz-linear-gradient(left,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
}

.wrapper {
	padding: 20px 20px;
	margin: 0px auto !important;
	float: none;
}

#page-title {
	margin: 30px 0px 20px 0px;
}

#page-title-inner {
	padding: 15px 40px;
}

#page-title h2 {
	display: inline-block;
	font-family: "Droid Sans" !important;
	color: #fff;
	font-size: 36px;
	text-align: center;
	text-transform: uppercase;
	width: 100%;
	position: relative;
}

#page-title h2:before,
#page-title h2:after {
    display: block;
    height: 1px;
    content: " ";
    width: 40%;
    position: absolute;
    top: 0.53em;
	z-index: 1;
}

#page-title h2:before {
	background: -moz-linear-gradient(left,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 */
    left: 0;
}

#page-title h2:after {
	background: -moz-linear-gradient(left,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 */	
   	right: 0;  
   	left: auto; 
}

#page-title h2 span {
	padding: 0px 10px;
	position: relative;
	z-index: 2;
}

#team .avatar {
	padding: 20px;
}

.team-name {
	padding: 15px 0px 5px 0px;
	font-family: "Droid Sans";
	font-size: 18px;
	text-align: center;

}

.position {
	font-size: 12px;
	font-weight: normal;
	text-align: center;
	color: #888;
	margin-bottom: 10px;
}

.team-about p {
	padding: 0 0 15px 0;
	border-bottom: 1px solid #e9e9e9;
	margin-bottom: 15px;
}

</style>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.php">
										<img alt="logo" width="164" height="85" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo $ayarcek['ayar_logo']; ?>">
									</a>
								</div>
							</div>
							<div class="header-column">
								<ul class="header-extra-info">
									<li>
										<div class="feature-box feature-box-call feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-call-end icons"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none"><?php echo $ayarcek['ayar_tel']; ?></h4>
											</div>
										</div>
									</li>
									<li class="hidden-xs">
										<div class="feature-box feature-box-mail feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-envelope icons"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none"><a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><?php echo $ayarcek['ayar_mail']; ?></a></h4>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
								<div class="header-column">
									<div class="feature-box-info pull-right">
										<a href="giris.php"><button style="height: 60px; width: 150px; background-color: #5f9ea0;" type="button" class="btn btn-warning">Giriş Yap</button></a>
									</div>
								</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								Menu <i class="fa fa-bars"></i>
							</button>
							<div class="header-search visible-lg">
								<form id="searchForm" action="page-search-results.html" method="get">
									<div class="input-group">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="icon-magnifier icons"></i></button>
										</span>
									</div>
								</form>
							</div>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="active">
											<a href="index.php">
												Anasayfa
											</a>
										</li>
										<li>
											<a href="about.php">
												Hakkımızda
											</a>
										</li>
										<li>
											<a href="news.php">
												Duyurular
											</a>
										</li>
										<li>
											<a href="e-hizmet.php">
												E-Hizmetler
											</a>
										</li>
										<li>
											<a href="healty-news.php">
												Sağlık Bültenİ
											</a>
										</li>										
										<li>
											<a href="contact.php">
												İletİşİm
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>