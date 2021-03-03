[1mdiff --git a/resources/views/fontend/alert.html b/resources/views/fontend/alert.html[m
[1mdeleted file mode 100644[m
[1mindex 0734251..0000000[m
[1m--- a/resources/views/fontend/alert.html[m
[1m+++ /dev/null[m
[36m@@ -1,674 +0,0 @@[m
[31m-<!DOCTYPE html>[m
[31m-<html lang="en">[m
[31m-[m
[31m-<head>[m
[31m-	<!-- Required meta tags-->[m
[31m-	<meta charset="UTF-8">[m
[31m-	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">[m
[31m-	<meta name="description" content="au theme template">[m
[31m-	<meta name="author" content="Hau Nguyen">[m
[31m-	<meta name="keywords" content="au theme template">[m
[31m-[m
[31m-	<!-- Title Page-->[m
[31m-	<title>Alert</title>[m
[31m-[m
[31m-	<!-- Fontfaces CSS-->[m
[31m-	<link href="css/font-face.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">[m
[31m-[m
[31m-	<!-- Bootstrap CSS-->[m
[31m-	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">[m
[31m-[m
[31m-	<!-- Vendor CSS-->[m
[31m-	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">[m
[31m-	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">[m
[31m-[m
[31m-	<!-- Main CSS-->[m
[31m-	<link href="css/theme.css" rel="stylesheet" media="all">[m
[31m-[m
[31m-</head>[m
[31m-[m
[31m-<body class="animsition">[m
[31m-	<div class="page-wrapper">[m
[31m-		<!-- HEADER MOBILE-->[m
[31m-		<header class="header-mobile d-block d-lg-none">[m
[31m-			<div class="header-mobile__bar">[m
[31m-				<div class="container-fluid">[m
[31m-					<div class="header-mobile-inner">[m
[31m-						<a class="logo" href="index.html">[m
[31m-							<img src="images/icon/logo.png" alt="CoolAdmin" />[m
[31m-						</a>[m
[31m-						<button class="hamburger hamburger--slider" type="button">[m
[31m-							<span class="hamburger-box">[m
[31m-								<span class="hamburger-inner"></span>[m
[31m-							</span>[m
[31m-						</button>[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</div>[m
[31m-			<nav class="navbar-mobile">[m
[31m-				<div class="container-fluid">[m
[31m-					<ul class="navbar-mobile__list list-unstyled">[m
[31m-						<li class="has-sub">[m
[31m-							<a class="js-arrow" href="#">[m
[31m-								<i class="fas fa-tachometer-alt"></i>Dashboard</a>[m
[31m-							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">[m
[31m-								<li>[m
[31m-									<a href="index.html">Dashboard 1</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="index2.html">Dashboard 2</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="index3.html">Dashboard 3</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="index4.html">Dashboard 4</a>[m
[31m-								</li>[m
[31m-							</ul>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="chart.html">[m
[31m-								<i class="fas fa-chart-bar"></i>Charts</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="table.html">[m
[31m-								<i class="fas fa-table"></i>Tables</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="form.html">[m
[31m-								<i class="far fa-check-square"></i>Forms</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="calendar.html">[m
[31m-								<i class="fas fa-calendar-alt"></i>Calendar</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="map.html">[m
[31m-								<i class="fas fa-map-marker-alt"></i>Maps</a>[m
[31m-						</li>[m
[31m-						<li class="has-sub">[m
[31m-							<a class="js-arrow" href="#">[m
[31m-								<i class="fas fa-copy"></i>Pages</a>[m
[31m-							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">[m
[31m-								<li>[m
[31m-									<a href="login.html">Login</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="register.html">Register</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="forget-pass.html">Forget Password</a>[m
[31m-								</li>[m
[31m-							</ul>[m
[31m-						</li>[m
[31m-						<li class="has-sub">[m
[31m-							<a class="js-arrow" href="#">[m
[31m-								<i class="fas fa-desktop"></i>UI Elements</a>[m
[31m-							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">[m
[31m-								<li>[m
[31m-									<a href="button.html">Button</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="badge.html">Badges</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="tab.html">Tabs</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="card.html">Cards</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="alert.html">Alerts</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="progress-bar.html">Progress Bars</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="modal.html">Modals</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="switch.html">Switchs</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="grid.html">Grids</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="fontawesome.html">Fontawesome Icon</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="typo.html">Typography</a>[m
[31m-								</li>[m
[31m-							</ul>[m
[31m-						</li>[m
[31m-					</ul>[m
[31m-				</div>[m
[31m-			</nav>[m
[31m-		</header>[m
[31m-		<!-- END HEADER MOBILE-->[m
[31m-[m
[31m-		<!-- MENU SIDEBAR-->[m
[31m-		<aside class="menu-sidebar d-none d-lg-block">[m
[31m-			<div class="logo">[m
[31m-				<a href="#">[m
[31m-					<img src="images/icon/logo.png" alt="Cool Admin" />[m
[31m-				</a>[m
[31m-			</div>[m
[31m-			<div class="menu-sidebar__content js-scrollbar1">[m
[31m-				<nav class="navbar-sidebar">[m
[31m-					<ul class="list-unstyled navbar__list">[m
[31m-						<li class="has-sub">[m
[31m-							<a class="js-arrow" href="#">[m
[31m-								<i class="fas fa-tachometer-alt"></i>Dashboard</a>[m
[31m-							<ul class="list-unstyled navbar__sub-list js-sub-list">[m
[31m-								<li>[m
[31m-									<a href="index.html">Dashboard 1</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="index2.html">Dashboard 2</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="index3.html">Dashboard 3</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="index4.html">Dashboard 4</a>[m
[31m-								</li>[m
[31m-							</ul>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="chart.html">[m
[31m-								<i class="fas fa-chart-bar"></i>Charts</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="table.html">[m
[31m-								<i class="fas fa-table"></i>Tables</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="form.html">[m
[31m-								<i class="far fa-check-square"></i>Forms</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="calendar.html">[m
[31m-								<i class="fas fa-calendar-alt"></i>Calendar</a>[m
[31m-						</li>[m
[31m-						<li>[m
[31m-							<a href="map.html">[m
[31m-								<i class="fas fa-map-marker-alt"></i>Maps</a>[m
[31m-						</li>[m
[31m-						<li class="has-sub">[m
[31m-							<a class="js-arrow" href="#">[m
[31m-								<i class="fas fa-copy"></i>Pages</a>[m
[31m-							<ul class="list-unstyled navbar__sub-list js-sub-list">[m
[31m-								<li>[m
[31m-									<a href="login.html">Login</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="register.html">Register</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="forget-pass.html">Forget Password</a>[m
[31m-								</li>[m
[31m-							</ul>[m
[31m-						</li>[m
[31m-						<li class="active has-sub">[m
[31m-							<a class="js-arrow" href="#">[m
[31m-								<i class="fas fa-desktop"></i>UI Elements</a>[m
[31m-							<ul class="list-unstyled navbar__sub-list js-sub-list">[m
[31m-								<li>[m
[31m-									<a href="button.html">Button</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="badge.html">Badges</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="tab.html">Tabs</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="card.html">Cards</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="alert.html">Alerts</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="progress-bar.html">Progress Bars</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="modal.html">Modals</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="switch.html">Switchs</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="grid.html">Grids</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="fontawesome.html">Fontawesome Icon</a>[m
[31m-								</li>[m
[31m-								<li>[m
[31m-									<a href="typo.html">Typography</a>[m
[31m-								</li>[m
[31m-							</ul>[m
[31m-						</li>[m
[31m-					</ul>[m
[31m-				</nav>[m
[31m-			</div>[m
[31m-		</aside>[m
[31m-		<!-- END MENU SIDEBAR-->[m
[31m-[m
[31m-		<!-- PAGE CONTAINER-->[m
[31m-		<div class="page-container">[m
[31m-			<!-- HEADER DESKTOP-->[m
[31m-			<header class="header-desktop">[m
[31m-				<div class="section__content section__content--p30">[m
[31m-					<div class="container-fluid">[m
[31m-						<div class="header-wrap">[m
[31m-							<form class="form-header" action="" method="POST">[m
[31m-								<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />[m
[31m-								<button class="au-btn--submit" type="submit">[m
[31m-									<i class="zmdi zmdi-search"></i>[m
[31m-								</button>[m
[31m-							</form>[m
[31m-							<div class="header-button">[m
[31m-								<div class="noti-wrap">[m
[31m-									<div class="noti__item js-item-menu">[m
[31m-										<i class="zmdi zmdi-comment-more"></i>[m
[31m-										<span class="quantity">1</span>[m
[31m-										<div class="mess-dropdown js-dropdown">[m
[31m-											<div class="mess__title">[m
[31m-												<p>You have 2 news message</p>[m
[31m-											</div>[m
[31m-											<div class="mess__item">[m
[31m-												<div class="image img-cir img-40">[m
[31m-													<img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<h6>Michelle Moreno</h6>[m
[31m-													<p>Have sent a photo</p>[m
[31m-													<span class="time">3 min ago</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="mess__item">[m
[31m-												<div class="image img-cir img-40">[m
[31m-													<img src="images/icon/avatar-04.jpg" alt="Diane Myers" />[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<h6>Diane Myers</h6>[m
[31m-													<p>You are now connected on message</p>[m
[31m-													<span class="time">Yesterday</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="mess__footer">[m
[31m-												<a href="#">View all messages</a>[m
[31m-											</div>[m
[31m-										</div>[m
[31m-									</div>[m
[31m-									<div class="noti__item js-item-menu">[m
[31m-										<i class="zmdi zmdi-email"></i>[m
[31m-										<span class="quantity">1</span>[m
[31m-										<div class="email-dropdown js-dropdown">[m
[31m-											<div class="email__title">[m
[31m-												<p>You have 3 New Emails</p>[m
[31m-											</div>[m
[31m-											<div class="email__item">[m
[31m-												<div class="image img-cir img-40">[m
[31m-													<img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<p>Meeting about new dashboard...</p>[m
[31m-													<span>Cynthia Harvey, 3 min ago</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="email__item">[m
[31m-												<div class="image img-cir img-40">[m
[31m-													<img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<p>Meeting about new dashboard...</p>[m
[31m-													<span>Cynthia Harvey, Yesterday</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="email__item">[m
[31m-												<div class="image img-cir img-40">[m
[31m-													<img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<p>Meeting about new dashboard...</p>[m
[31m-													<span>Cynthia Harvey, April 12,,2018</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="email__footer">[m
[31m-												<a href="#">See all emails</a>[m
[31m-											</div>[m
[31m-										</div>[m
[31m-									</div>[m
[31m-									<div class="noti__item js-item-menu">[m
[31m-										<i class="zmdi zmdi-notifications"></i>[m
[31m-										<span class="quantity">3</span>[m
[31m-										<div class="notifi-dropdown js-dropdown">[m
[31m-											<div class="notifi__title">[m
[31m-												<p>You have 3 Notifications</p>[m
[31m-											</div>[m
[31m-											<div class="notifi__item">[m
[31m-												<div class="bg-c1 img-cir img-40">[m
[31m-													<i class="zmdi zmdi-email-open"></i>[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<p>You got a email notification</p>[m
[31m-													<span class="date">April 12, 2018 06:50</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="notifi__item">[m
[31m-												<div class="bg-c2 img-cir img-40">[m
[31m-													<i class="zmdi zmdi-account-box"></i>[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<p>Your account has been blocked</p>[m
[31m-													<span class="date">April 12, 2018 06:50</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="notifi__item">[m
[31m-												<div class="bg-c3 img-cir img-40">[m
[31m-													<i class="zmdi zmdi-file-text"></i>[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<p>You got a new file</p>[m
[31m-													<span class="date">April 12, 2018 06:50</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="notifi__footer">[m
[31m-												<a href="#">All notifications</a>[m
[31m-											</div>[m
[31m-										</div>[m
[31m-									</div>[m
[31m-								</div>[m
[31m-								<div class="account-wrap">[m
[31m-									<div class="account-item clearfix js-item-menu">[m
[31m-										<div class="image">[m
[31m-											<img src="images/icon/avatar-01.jpg" alt="John Doe" />[m
[31m-										</div>[m
[31m-										<div class="content">[m
[31m-											<a class="js-acc-btn" href="#">john doe</a>[m
[31m-										</div>[m
[31m-										<div class="account-dropdown js-dropdown">[m
[31m-											<div class="info clearfix">[m
[31m-												<div class="image">[m
[31m-													<a href="#">[m
[31m-														<img src="images/icon/avatar-01.jpg" alt="John Doe" />[m
[31m-													</a>[m
[31m-												</div>[m
[31m-												<div class="content">[m
[31m-													<h5 class="name">[m
[31m-														<a href="#">john doe</a>[m
[31m-													</h5>[m
[31m-													<span class="email">johndoe@example.com</span>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="account-dropdown__body">[m
[31m-												<div class="account-dropdown__item">[m
[31m-													<a href="#">[m
[31m-														<i class="zmdi zmdi-account"></i>Account</a>[m
[31m-												</div>[m
[31m-												<div class="account-dropdown__item">[m
[31m-													<a href="#">[m
[31m-														<i class="zmdi zmdi-settings"></i>Setting</a>[m
[31m-												</div>[m
[31m-												<div class="account-dropdown__item">[m
[31m-													<a href="#">[m
[31m-														<i class="zmdi zmdi-money-box"></i>Billing</a>[m
[31m-												</div>[m
[31m-											</div>[m
[31m-											<div class="account-dropdown__footer">[m
[31m-												<a href="#">[m
[31m-													<i class="zmdi zmdi-power"></i>Logout</a>[m
[31m-											</div>[m
[31m-										</div>[m
[31m-									</div>[m
[31m-								</div>[m
[31m-							</div>[m
[31m-						</div>[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</header>[m
[31m-			<!-- HEADER DESKTOP-->[m
[31m-			<!-- MAIN CONTENT-->[m
[31m-			<div class="main-content">[m
[31m-				<div class="section__content section__content--p30">[m
[31m-					<div class="container-fluid">[m
[31m-						<div class="row">[m
[31m-							<div class="col-md-6">[m
[31m-[m
[31m-								<div class="card">[m
[31m-									<div class="card-header">[m
[31m-										<strong class="card-title">Alerts</strong>[m
[31m-									</div>[m
[31m-									<div class="card-body">[m
[31m-										<div class="alert alert-primary" role="alert">[m
[31m-											This is a primary alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-secondary" role="alert">[m
[31m-											This is a secondary alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-success" role="alert">[m
[31m-											This is a success alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-danger" role="alert">[m
[31m-											This is a danger alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-warning" role="alert">[m
[31m-											This is a warning alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-info" role="alert">[m
[31m-											This is a info alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-light" role="alert">[m
[31m-											This is a light alert—check it out![m
[31m-										</div>[m
[31m-										<div class="alert alert-dark" role="alert">[m
[31m-											This is a dark alert—check it out![m
[31m-										</div>[m
[31m-									</div>[m
[31m-								</div>[m
[31m-[m
[31m-								<div class="card">[m
[31m-									<div class="card-header">[m
[31m-										<strong class="card-title">Link Color Alerts</strong>[m
[31m-									</div>[m
[31m-									<div class="card-body">[m
[31m-										<div class="alert alert-primary" role="alert">[m
[31m-											This is a primary alert with[m
[31m-											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.[m
[31m-										</div>[m
[31m-										<div class="alert alert-secondary" role="alert">[m
[31m-											This is a secondary alert with[m
[31m-											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.[m
[31m-