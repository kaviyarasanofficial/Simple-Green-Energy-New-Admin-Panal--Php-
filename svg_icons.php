<?php
// Start the session to access session variables
session_start();

// Check if the user is not logged in (no session variable is set)
if (!isset($_SESSION['email'])) {
    // Redirect to the login page
    header("Location: signin.php");
    exit();
}

$userEmail = $_SESSION['email'];
// If the user is logged in, you can display the content of index.php
?>


<!DOCTYPE html>
<html lang="en">
    
    
<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/svg_icons by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Title -->
	<title>Simple Green Energy</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Vertical Media">
	<meta name="robots" content="">

	<meta name="keywords" content="admin, admin dashboard, admin template, bootstrap, bootstrap 5, bootstrap 5 admin template, fitness, fitness admin, modern, responsive admin dashboard, codeigniter dashboard, sass, ui kit, web app">
	<meta name="description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit Vertical Media for more information.">

	<meta property="og:title" content="Gymove  - CodeIgniter Fitness Admin Dashboard Template">
	<meta property="og:description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit Vertical Media for more information.">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Favicon icon -->
	
	<link rel="icon" type="image/png" sizes="16x16" href="https://www.simplegreenenergy.org/wp-content/uploads/2021/03/cropped-Simple-Green-Energy_2_FavIcon-180x180.jpg">		
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	
		
		 <link href="public/assets/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="public/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="public/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="../../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css"/>	
			
		 <link href="public/assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>		
		
		 <link href="public/assets/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>		
		
		 <link href="public/assets/css/style.css" rel="stylesheet" type="text/css"/>		
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
	
	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

		<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="index.php" class="brand-logo" aria-label="Gymove">
        <img class="logo-abbr" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/03/cropped-Simple-Green-Energy_2_FavIcon-180x180.jpg" alt="">
        <img class="logo-compact" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" alt="">
        <img class="brand-title" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->		<!--**********************************
	Chat box start
***********************************-->
<div class="chatbox">
	<div class="chatbox-close"></div>
	<div class="custom-tab-1">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade active show" id="chat" role="tabpanel">
				<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
					<div class="card-header chat-list-header text-center">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
						<div>
							<h6 class="mb-1">Chat List</h6>
							<p class="mb-0">Show All</p>
						</div>
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
					</div>
					<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
						<ul class="contacts">
							<li class="name-first-letter">A</li>
							<li class="active dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Archie Parker</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Alfie Mason</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>AharlieKane</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Athan Jacoby</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">B</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Bashid Samim</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Breddie Ronan</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Ceorge Carson</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">D</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Darry Parker</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Denry Hunter</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">J</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Jack Ronan</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Jacob Tucker</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>James Logan</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Joshua Weston</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">O</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Oliver Acker</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dz-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Oscar Weston</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="card chat dz-chat-history-box d-none">
					<div class="card-header chat-list-header text-center">
						<a href="#" class="dz-chat-history-back">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
						</a>
						<div>
							<h6 class="mb-1">Chat with Khelesh</h6>
							<p class="mb-0 text-success">Online</p>
						</div>							
						<div class="dropdown">
							<a href="#" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
								<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
								<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
								<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
							</ul>
						</div>
					</div>
					<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								Hi, how are you samim?
								<span class="msg_time">8:40 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Hi Khalid i am good tnx how about you?
								<span class="msg_time_send">8:55 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								I am good too, thank you for your chat template
								<span class="msg_time">9:00 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								You are welcome
								<span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								I am looking for your next templates
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Ok, thank you have a good day
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								Bye, see you
								<span class="msg_time">9:12 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								Hi, how are you samim?
								<span class="msg_time">8:40 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Hi Khalid i am good tnx how about you?
								<span class="msg_time_send">8:55 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								I am good too, thank you for your chat template
								<span class="msg_time">9:00 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								You are welcome
								<span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								I am looking for your next templates
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Ok, thank you have a good day
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
							</div>
							<div class="msg_cotainer">
								Bye, see you
								<span class="msg_time">9:12 AM, Today</span>
							</div>
						</div>
					</div>
					<div class="card-footer type_msg">
						<div class="input-group">
							<textarea class="form-control" placeholder="Type your message..."></textarea>
							<div class="input-group-append">
								<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="alerts" role="tabpanel">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header chat-list-header text-center">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
						<div>
							<h6 class="mb-1">Notications</h6>
							<p class="mb-0">Show All</p>
						</div>
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
					</div>
					<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
						<ul class="contacts">
							<li class="name-first-letter">SEVER STATUS</li>
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="img_cont primary">KK</div>
									<div class="user_info">
										<span>David Nester Birthday</span>
										<p class="text-primary">Today</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">SOCIAL</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
									<div class="user_info">
										<span>Perfection Simplified</span>
										<p>Jame Smith commented on your status</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">SEVER STATUS</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
									<div class="user_info">
										<span>AharlieKane</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
									<div class="user_info">
										<span>Athan Jacoby</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="tab-pane fade" id="notes">
				<div class="card mb-sm-3 mb-md-0 note_card">
					<div class="card-header chat-list-header text-center">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
						<div>
							<h6 class="mb-1">Notes</h6>
							<p class="mb-0">Add New Nots</p>
						</div>
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
					</div>
					<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
						<ul class="contacts">
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>New order placed..</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>Youtube, a video-sharing website..</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>john just buy your product..</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>Athan Jacoby</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Chat box End
***********************************-->        <!--**********************************
	Header start
***********************************-->
<header class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
					Svg Icons					</div>
				</div>
				<ul class="navbar-nav header-right">
					<!-- <li class="nav-item">
						<form>
							<div class="input-group search-area d-lg-inline-flex d-none me-3">
								<span class="input-group-text" id="header-search">
									<button class="bg-transparent border-0" type="button" aria-label="header-search">
										<i class="flaticon-381-search-2"></i>
									</button>
								</span>
								<input type="text" class="form-control" placeholder="Search here" aria-label="Username" aria-describedby="header-search">
							</div>
						</form>
					</li> -->
					<li class="nav-item dropdown notification_dropdown">
						<a class="nav-link bell dz-theme-mode" href="javascript:void(0);" aria-label="theme-mode">
							<i id="icon-light" class="fas fa-sun"></i>
							<i id="icon-dark" class="fas fa-moon"></i>
							
						</a>
					</li>
					<!-- <li class="nav-item dropdown notification_dropdown">
						<a class="nav-link  ai-icon" href="javascript:void(0)" aria-label="bell" role="button" data-bs-toggle="dropdown">
							<svg width="22" height="22" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#0B2A97"/>
							</svg>
							<div class="pulse-css"></div>
						</a>
						<div class="dropdown-menu rounded dropdown-menu-end">
							<div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
								<ul class="timeline">
									<li>
										<div class="timeline-panel">
											<div class="media me-2">
												<img alt="image" width="50" src="public/assets/images/avatar/1.jpg">
											</div>
											<div class="media-body">
												<h6 class="mb-1">Dr sultads Send you Photo</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-info">
												KG
											</div>
											<div class="media-body">
												<h6 class="mb-1">Resport created successfully</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-success">
												<i class="fa fa-home"></i>
											</div>
											<div class="media-body">
												<h6 class="mb-1">Reminder : Treatment Time!</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
										<li>
										<div class="timeline-panel">
											<div class="media me-2">
												<img alt="image" width="50" src="public/assets/images/avatar/1.jpg">
											</div>
											<div class="media-body">
												<h6 class="mb-1">Dr sultads Send you Photo</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-danger">
												KG
											</div>
											<div class="media-body">
												<h6 class="mb-1">Resport created successfully</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-primary">
												<i class="fa fa-home"></i>
											</div>
											<div class="media-body">
												<h6 class="mb-1">Reminder : Treatment Time!</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
						</div>
					</li> -->
					<!-- <li class="nav-item dropdown notification_dropdown">
						<a class="nav-link bell bell-link" href="javascript:void(0)" aria-label="Chat">
							<svg width="22" height="22" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.4605 3.84888H5.31688C4.64748 3.84961 4.00571 4.11586 3.53237 4.58919C3.05903 5.06253 2.79279 5.7043 2.79205 6.3737V18.1562C2.79279 18.8256 3.05903 19.4674 3.53237 19.9407C4.00571 20.4141 4.64748 20.6803 5.31688 20.6811C5.54005 20.6812 5.75404 20.7699 5.91184 20.9277C6.06964 21.0855 6.15836 21.2995 6.15849 21.5227V23.3168C6.15849 23.6215 6.24118 23.9204 6.39774 24.1818C6.5543 24.4431 6.77886 24.6571 7.04747 24.8009C7.31608 24.9446 7.61867 25.0128 7.92298 24.9981C8.22729 24.9834 8.52189 24.8863 8.77539 24.7173L14.6173 20.8224C14.7554 20.7299 14.918 20.6807 15.0842 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.4721 19.3664 21.6222 18.8359L24.8966 7.05011C24.9999 6.67481 25.0152 6.28074 24.9414 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.931 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4605 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0842C14.5856 18.9972 14.0981 19.1448 13.6837 19.4219L7.84171 23.3168V21.5227C7.84097 20.8533 7.57473 20.2115 7.10139 19.7382C6.62805 19.2648 5.98628 18.9986 5.31688 18.9978C5.09371 18.9977 4.87972 18.909 4.72192 18.7512C4.56412 18.5934 4.4754 18.3794 4.47527 18.1562V6.3737C4.4754 6.15054 4.56412 5.93655 4.72192 5.77874C4.87972 5.62094 5.09371 5.53223 5.31688 5.5321H22.4605C22.5905 5.53243 22.7188 5.56277 22.8353 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2642 6.09045 23.2887 6.21821C23.3132 6.34597 23.308 6.47766 23.2733 6.60304Z" fill="#0B2A97"/>
								<path d="M7.84173 11.4233H12.0498C12.273 11.4233 12.4871 11.3347 12.6449 11.1768C12.8027 11.019 12.8914 10.8049 12.8914 10.5817C12.8914 10.3585 12.8027 10.1444 12.6449 9.98661C12.4871 9.82878 12.273 9.74011 12.0498 9.74011H7.84173C7.61852 9.74011 7.40446 9.82878 7.24662 9.98661C7.08879 10.1444 7.00012 10.3585 7.00012 10.5817C7.00012 10.8049 7.08879 11.019 7.24662 11.1768C7.40446 11.3347 7.61852 11.4233 7.84173 11.4233Z" fill="#0B2A97"/>
								<path d="M15.4162 13.1066H7.84173C7.61852 13.1066 7.40446 13.1952 7.24662 13.3531C7.08879 13.5109 7.00012 13.725 7.00012 13.9482C7.00012 14.1714 7.08879 14.3855 7.24662 14.5433C7.40446 14.7011 7.61852 14.7898 7.84173 14.7898H15.4162C15.6394 14.7898 15.8535 14.7011 16.0113 14.5433C16.1692 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1692 13.5109 16.0113 13.3531C15.8535 13.1952 15.6394 13.1066 15.4162 13.1066Z" fill="#0B2A97"/>
							</svg>
							<div class="pulse-css"></div>
						</a>
					</li>
					<li class="nav-item dropdown notification_dropdown">
						<a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-label="notifiaction">
							<svg width="22" height="22" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.625 6.12506H22.75V2.62506C22.75 2.47268 22.7102 2.32295 22.6345 2.19068C22.5589 2.05841 22.45 1.94819 22.3186 1.87093C22.1873 1.79367 22.0381 1.75205 21.8857 1.75019C21.7333 1.74832 21.5831 1.78629 21.4499 1.86031L14 5.99915L6.55007 1.86031C6.41688 1.78629 6.26667 1.74832 6.11431 1.75019C5.96194 1.75205 5.8127 1.79367 5.68136 1.87093C5.55002 1.94819 5.44113 2.05841 5.36547 2.19068C5.28981 2.32295 5.25001 2.47268 5.25 2.62506V6.12506H4.375C3.67904 6.12582 3.01181 6.40263 2.51969 6.89475C2.02757 7.38687 1.75076 8.0541 1.75 8.75006V11.3751C1.75076 12.071 2.02757 12.7383 2.51969 13.2304C3.01181 13.7225 3.67904 13.9993 4.375 14.0001H5.25V23.6251C5.25076 24.321 5.52757 24.9882 6.01969 25.4804C6.51181 25.9725 7.17904 26.2493 7.875 26.2501H20.125C20.821 26.2493 21.4882 25.9725 21.9803 25.4804C22.4724 24.9882 22.7492 24.321 22.75 23.6251V14.0001H23.625C24.321 13.9993 24.9882 13.7225 25.4803 13.2304C25.9724 12.7383 26.2492 12.071 26.25 11.3751V8.75006C26.2492 8.0541 25.9724 7.38687 25.4803 6.89475C24.9882 6.40263 24.321 6.12582 23.625 6.12506ZM21 6.12506H17.3769L21 4.11256V6.12506ZM7 4.11256L10.6231 6.12506H7V4.11256ZM7 23.6251V14.0001H13.125V24.5001H7.875C7.64303 24.4998 7.42064 24.4075 7.25661 24.2434C7.09258 24.0794 7.0003 23.857 7 23.6251ZM21 23.6251C20.9997 23.857 20.9074 24.0794 20.7434 24.2434C20.5794 24.4075 20.357 24.4998 20.125 24.5001H14.875V14.0001H21V23.6251ZM24.5 11.3751C24.4997 11.607 24.4074 11.8294 24.2434 11.9934C24.0794 12.1575 23.857 12.2498 23.625 12.2501H4.375C4.14303 12.2498 3.92064 12.1575 3.75661 11.9934C3.59258 11.8294 3.5003 11.607 3.5 11.3751V8.75006C3.5003 8.51809 3.59258 8.2957 3.75661 8.13167C3.92064 7.96764 4.14303 7.87536 4.375 7.87506H23.625C23.857 7.87536 24.0794 7.96764 24.2434 8.13167C24.4074 8.2957 24.4997 8.51809 24.5 8.75006V11.3751Z" fill="#0B2A97"/>
							</svg>
							<div class="pulse-css"></div>
						</a>
						<div class="dropdown-menu dropdown-menu-end rounded">
							<div id="DZ_W_TimeLine11Home" class="widget-timeline dz-scroll style-1 p-3 height370">
								<ul class="timeline">
									<li>
										<div class="timeline-badge primary"></div>
										<a class="timeline-panel text-muted" href="#">
											<span>10 minutes ago</span>
											<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
										</a>
									</li>
									<li>
										<div class="timeline-badge info">
										</div>
										<a class="timeline-panel text-muted" href="#">
											<span>20 minutes ago</span>
											<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
											<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
										</a>
									</li>
									<li>
										<div class="timeline-badge danger">
										</div>
										<a class="timeline-panel text-muted" href="#">
											<span>30 minutes ago</span>
											<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
										</a>
									</li>
									<li>
										<div class="timeline-badge success">
										</div>
										<a class="timeline-panel text-muted" href="#">
											<span>15 minutes ago</span>
											<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
										</a>
									</li>
									<li>
										<div class="timeline-badge warning">
										</div>
										<a class="timeline-panel text-muted" href="#">
											<span>20 minutes ago</span>
											<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
										</a>
									</li>
									<li>
										<div class="timeline-badge dark">
										</div>
										<a class="timeline-panel text-muted" href="#">
											<span>20 minutes ago</span>
											<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li> -->
					<li class="nav-item dropdown header-profile">
						<a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
							<img src="public/assets/images/profile/17.png" width="20" alt="">
							<div class="header-info">
								<span class="text-black"><strong><?php echo $userEmail; ?></strong></span>
								<p class="fs-12 mb-0">Admin</p>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="app_profile.php" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2">Profile </span>
							</a>
							<a href="email_inbox.php" class="dropdown-item ai-icon">
								<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
								<span class="ms-2">Inbox </span>
							</a>
							<a href="logout.php" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--**********************************
	Header end 
***********************************-->        <!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.php">Dashboard</a></li>
                    <!-- <li><a href="index_2.php">Dashboard Dark<span class="badge badge-xs badge-danger ms-1">New</span></a></li>
                    <li><a href="workout_statistic.php">Workout Statistic</a></li>
                    <li><a href="workout_plan.php">Workout Plan</a></li>
                    <li><a href="distance_map.php">Distance Map</a></li>
                    <li><a href="food_menu.php">Diet Food Menu</a></li>
                    <li><a href="personal_record.php">Personal Record</a></li> -->
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Leads Manage</span>
                </a>
                <ul aria-expanded="false">
                <!-- <li><a href="app_profile.php">Customers</a></li>
                    <li><a href="post_details.php">Post Details</a></li> -->
                    <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email_compose.php">Compose</a></li>
                            <li><a href="email_inbox.php">Inbox</a></li>
                            <li><a href="email_read.php">Read</a></li>
                        </ul>
                    </li> -->
                    <li><a href="app_calender.php">Qualify Leads</a></li>
					<li><a href="ecom_product_grid.php">Boiler Leads</a></li>
					<li><a href="ecom_product_details.php">Documents History</a></li>
                     <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom_product_grid.php">Product Grid</a></li>
							<li><a href="ecom_product_list.php">Product List</a></li>
							<li><a href="ecom_product_details.php">Product Details</a></li>
							<li><a href="ecom_product_order.php">Order</a></li>
							<li><a href="ecom_checkout.php">Checkout</a></li>
							<li><a href="ecom_invoice.php">Invoice</a></li>
							<li><a href="ecom_customers.php">Customers</a></li>
                        </ul>
                    </li> -->
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-compact-disc-1"></i>
                    <span class="nav-text">Customers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="flat_icons.php">Users Manage</a></li>
                    <!-- <li><a href="svg_icons.php">SVG Icons</a></li> 
                    <li><a href="feather_icons.php">Feather Icons</a></li> -->
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-briefcase"></i>
                    <span class="nav-text">Surveyors</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="content.php">Surveyor Register</a></li>
                    <li><a href="add_content.php">Surveyor Works</a></li>
                    <li><a href="menu.php">Surveyors list</a></li>
                    <li><a href="email_template.php">Documents Upload</a></li>
                    <!-- <li><a href="add_email.php">Add Email</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="add_blog.php">Add Blog</a></li>
                    <li><a href="blog_category.php">Blog Category</a></li>	 -->
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Gas Engineers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="flot.php">Gas Engineers Register</a></li>
					<li><a href="morris.php">Gas Engineer Works</a></li> 
					<li><a href="chartjs.php">Gas Engineer list</a></li>
					<li><a href="chartist.php">Documents Upload</a></li>
					<!-- <!-- <li><a href="sparkline.php">Sparkline</a></li>
					<li><a href="peity.php">Peity</a></li> --> -->
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Installation Team
</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="accordion.php">Installation Team Register</a></li>
					<li><a href="alert.php">Installation Team Works</a></li>
					<li><a href="badge.php">Installation Team list</a></li>
					<li><a href="button.php">Documents Upload</a></li>
					<!-- <li><a href="modal.php">Modal</a></li>
                    <li><a href="button_group.php">Button Group</a></li>
                    <li><a href="list_group.php">List Group</a></li>
                    <li><a href="media_object.php">Media Object</a></li>
                    <li><a href="card.php">Cards</a></li>
                    <li><a href="carousel.php">Carousel</a></li>
                    <li><a href="dropdown.php">Dropdown</a></li>
                    <li><a href="popover.php">Popover</a></li>
                    <li><a href="progressbar.php">Progressbar</a></li>
                    <li><a href="tab.php">Tab</a></li>
                    <li><a href="typography.php">Typography</a></li>
                    <li><a href="pagination.php">Pagination</a></li>
                    <li><a href="grid.php">Grid</a></li> -->

                </ul> 
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text"> Insulation Team
</span>
                </a>
               <ul aria-expanded="false">
                    <li><a href="select2.php">Insulation Team Register</a></li> 
					<li><a href="nestable.php">Insulation Team Works</a></li>
					<li><a href="noui_slider.php">Insulation Team list</a></li>
					<li><a href="sweetalert.php">Documents Upload</a></li>
					<!-- <li><a href="toastr.php">Toastr</a></li>
					<li><a href="map_jqvmap.php">Jqv Map</a></li>
					<li><a href="lightgallery.php">Light Gallery</a></li> -->
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Sub Admins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form_element.php">Sub Admins Register</a></li>
                    <li><a href="form_wizard.php">Sub Admins Manage</a></li>   
                    <!-- <li><a href="form_editor.php">Editor</a></li>
					<li><a href="form_pickers.php">Pickers</a></li>
					<li><a href="form_validation_jquery.php">Form Validate</a></li> -->
                </ul> 
            </li>
			<li><a href="widget_basic.php" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Feedback</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <!-- <ul aria-expanded="false">
                    <li><a href="table_bootstrap.php">Bootstrap</a></li>
					<li><a href="table_datatable.php">Datatable</a></li>
                </ul> --> 
            </li>
           <!-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
               <ul aria-expanded="false">
                    <li><a href="page_register.php">Register</a></li>
                    <li><a href="page_login.php">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page_error_400.php">Error 400</a></li>
                            <li><a href="page_error_403.php">Error 403</a></li>
                            <li><a href="page_error_404.php">Error 404</a></li>
                            <li><a href="page_error_500.php">Error 500</a></li>
                            <li><a href="page_error_503.php">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page_lock_screen.php">Lock Screen</a></li>
                    <li><a href="page_empty.php">Empty Page</a></li>
                </ul> 
            </li> -->
        </ul>
       <!-- <div class="add-menu-sidebar">
            <img src="public/assets/images/calendar.png" alt="" class="me-3">
            <a href="workout_plan.php" class="font-w500 mb-0">Create Workout Plan Now</a>
        </div> -->
        <div class="copyright">
            <p><strong>Simple Green Energy Admin Dashboard</strong> © 2023 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Vertical Media</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->        <!--**********************************
	Content body start
***********************************-->
<div class="content-body default-height">
	<!-- row -->
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Icons</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">SVG icons</a></li>
			</ol>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card p-0">
					<div class="card-header"><h4 class="text-black mb-0">SVG Icons</h4></div>
					<div class="card-body svg-area px-3">
						<div class="row">
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
											<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3E4954"/>
									</svg>
									</div>
									<div class="svg-classname">bell.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
										
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg">bell.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/bell.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg">bell.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3E4954"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
											<svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z" fill="#3E4954"/>
										<path d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z" fill="#3E4954"/>
										<path d="M13.4161 10.1065H5.84161C5.6184 10.1065 5.40433 10.1952 5.2465 10.353C5.08867 10.5109 5 10.7249 5 10.9481C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9481C14.2577 10.7249 14.169 10.5109 14.0112 10.353C13.8534 10.1952 13.6393 10.1065 13.4161 10.1065Z" fill="#3E4954"/>
									</svg>
									</div>
									<div class="svg-classname">message.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
											<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
										
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-1">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-1">message.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/message.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-1">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-1">message.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre> &lt;svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z" fill="#3E4954"/&gt;
&lt;path d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z" fill="#3E4954"/&gt;
&lt;path d="M13.4161 10.1065H5.84161C5.6184 10.1065 5.40433 10.1952 5.2465 10.353C5.08867 10.5109 5 10.7249 5 10.9481C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9481C14.2577 10.7249 14.169 10.5109 14.0112 10.353C13.8534 10.1952 13.6393 10.1065 13.4161 10.1065Z" fill="#3E4954"/&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
											<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.625 5.125H21.75V1.625C21.75 1.47262 21.7102 1.32289 21.6345 1.19062C21.5589 1.05835 21.45 0.948128 21.3186 0.870868C21.1873 0.793609 21.0381 0.751989 20.8857 0.750126C20.7333 0.748264 20.5831 0.786224 20.4499 0.86025L13 4.99909L5.55007 0.86025C5.41688 0.786224 5.26667 0.748264 5.11431 0.750126C4.96194 0.751989 4.8127 0.793609 4.68136 0.870868C4.55002 0.948128 4.44113 1.05835 4.36547 1.19062C4.28981 1.32289 4.25001 1.47262 4.25 1.625V5.125H3.375C2.67904 5.12576 2.01181 5.40257 1.51969 5.89469C1.02757 6.3868 0.750764 7.05404 0.75 7.75V10.375C0.750764 11.071 1.02757 11.7382 1.51969 12.2303C2.01181 12.7224 2.67904 12.9992 3.375 13H4.25V22.625C4.25076 23.321 4.52757 23.9882 5.01969 24.4803C5.51181 24.9724 6.17904 25.2492 6.875 25.25H19.125C19.821 25.2492 20.4882 24.9724 20.9803 24.4803C21.4724 23.9882 21.7492 23.321 21.75 22.625V13H22.625C23.321 12.9992 23.9882 12.7224 24.4803 12.2303C24.9724 11.7382 25.2492 11.071 25.25 10.375V7.75C25.2492 7.05404 24.9724 6.3868 24.4803 5.89469C23.9882 5.40257 23.321 5.12576 22.625 5.125ZM20 5.125H16.3769L20 3.1125V5.125ZM6 3.1125L9.62311 5.125H6V3.1125ZM6 22.625V13H12.125V23.5H6.875C6.64303 23.4997 6.42064 23.4074 6.25661 23.2434C6.09258 23.0793 6.0003 22.857 6 22.625ZM20 22.625C19.9997 22.857 19.9074 23.0793 19.7434 23.2434C19.5794 23.4074 19.357 23.4997 19.125 23.5H13.875V13H20V22.625ZM23.5 10.375C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1574 22.857 11.2497 22.625 11.25H3.375C3.14303 11.2497 2.92064 11.1574 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.375V7.75C2.5003 7.51803 2.59258 7.29564 2.75661 7.13161C2.92064 6.96758 3.14303 6.8753 3.375 6.875H22.625C22.857 6.8753 23.0794 6.96758 23.2434 7.13161C23.4074 7.29564 23.4997 7.51803 23.5 7.75V10.375Z" fill="#3E4954"/>
									</svg>
									</div>
									<div class="svg-classname">gift.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-2" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-2" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-2" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-2">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-2">flaticon-bar-chart-1</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/gift.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-2" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-2">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-2">gift.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre> &lt;svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M22.625 5.125H21.75V1.625C21.75 1.47262 21.7102 1.32289 21.6345 1.19062C21.5589 1.05835 21.45 0.948128 21.3186 0.870868C21.1873 0.793609 21.0381 0.751989 20.8857 0.750126C20.7333 0.748264 20.5831 0.786224 20.4499 0.86025L13 4.99909L5.55007 0.86025C5.41688 0.786224 5.26667 0.748264 5.11431 0.750126C4.96194 0.751989 4.8127 0.793609 4.68136 0.870868C4.55002 0.948128 4.44113 1.05835 4.36547 1.19062C4.28981 1.32289 4.25001 1.47262 4.25 1.625V5.125H3.375C2.67904 5.12576 2.01181 5.40257 1.51969 5.89469C1.02757 6.3868 0.750764 7.05404 0.75 7.75V10.375C0.750764 11.071 1.02757 11.7382 1.51969 12.2303C2.01181 12.7224 2.67904 12.9992 3.375 13H4.25V22.625C4.25076 23.321 4.52757 23.9882 5.01969 24.4803C5.51181 24.9724 6.17904 25.2492 6.875 25.25H19.125C19.821 25.2492 20.4882 24.9724 20.9803 24.4803C21.4724 23.9882 21.7492 23.321 21.75 22.625V13H22.625C23.321 12.9992 23.9882 12.7224 24.4803 12.2303C24.9724 11.7382 25.2492 11.071 25.25 10.375V7.75C25.2492 7.05404 24.9724 6.3868 24.4803 5.89469C23.9882 5.40257 23.321 5.12576 22.625 5.125ZM20 5.125H16.3769L20 3.1125V5.125ZM6 3.1125L9.62311 5.125H6V3.1125ZM6 22.625V13H12.125V23.5H6.875C6.64303 23.4997 6.42064 23.4074 6.25661 23.2434C6.09258 23.0793 6.0003 22.857 6 22.625ZM20 22.625C19.9997 22.857 19.9074 23.0793 19.7434 23.2434C19.5794 23.4074 19.357 23.4997 19.125 23.5H13.875V13H20V22.625ZM23.5 10.375C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1574 22.857 11.2497 22.625 11.25H3.375C3.14303 11.2497 2.92064 11.1574 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.375V7.75C2.5003 7.51803 2.59258 7.29564 2.75661 7.13161C2.92064 6.96758 3.14303 6.8753 3.375 6.875H22.625C22.857 6.8753 23.0794 6.96758 23.2434 7.13161C23.4074 7.29564 23.4997 7.51803 23.5 7.75V10.375Z" fill="#3E4954"/&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="36" height="28" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M31.75 6.75H30.0064L30.2189 4.62238C30.2709 4.10111 30.2131 3.57473 30.0493 3.07716C29.8854 2.57959 29.6192 2.12186 29.2676 1.73348C28.9161 1.3451 28.4871 1.03468 28.0082 0.822231C27.5294 0.609781 27.0114 0.500013 26.4875 0.5H7.0125C6.48854 0.500041 5.9704 0.609864 5.49148 0.822391C5.01256 1.03492 4.58348 1.34543 4.23189 1.73392C3.88031 2.12241 3.61403 2.58026 3.45021 3.07795C3.28639 3.57564 3.22866 4.10214 3.28075 4.6235L5.2815 24.6224C5.31508 24.9222 5.38467 25.2168 5.48875 25.5H1.75C1.41848 25.5 1.10054 25.6317 0.866116 25.8661C0.631696 26.1005 0.5 26.4185 0.5 26.75C0.5 27.0815 0.631696 27.3995 0.866116 27.6339C1.10054 27.8683 1.41848 28 1.75 28H31.75C32.0815 28 32.3995 27.8683 32.6339 27.6339C32.8683 27.3995 33 27.0815 33 26.75C33 26.4185 32.8683 26.1005 32.6339 25.8661C32.3995 25.6317 32.0815 25.5 31.75 25.5H28.0115C28.1154 25.2172 28.1849 24.9229 28.2185 24.6235L28.881 18H31.75C32.7442 17.9989 33.6974 17.6035 34.4004 16.9004C35.1035 16.1974 35.4989 15.2442 35.5 14.25V10.5C35.4989 9.50577 35.1035 8.55258 34.4004 7.84956C33.6974 7.14653 32.7442 6.75109 31.75 6.75ZM9.0125 25.5C8.70243 25.501 8.40314 25.3862 8.17327 25.1782C7.9434 24.9701 7.79949 24.6836 7.76975 24.375L5.7685 4.37575C5.75109 4.20188 5.7703 4.0263 5.82488 3.86031C5.87946 3.69432 5.96821 3.5416 6.0854 3.412C6.2026 3.28239 6.34564 3.17877 6.50532 3.10781C6.665 3.03685 6.83777 3.00013 7.0125 3H26.4875C26.6622 3.00012 26.8349 3.03681 26.9945 3.10772C27.1541 3.17863 27.2972 3.28218 27.4143 3.4117C27.5315 3.54123 27.6203 3.69386 27.6749 3.85977C27.7295 4.02568 27.7488 4.20119 27.7315 4.375L25.7308 24.3762C25.7007 24.6848 25.5566 24.971 25.3267 25.1788C25.0967 25.3867 24.7975 25.5012 24.4875 25.5H9.0125ZM33 14.25C32.9998 14.5815 32.868 14.8993 32.6337 15.1337C32.3993 15.368 32.0815 15.4998 31.75 15.5H29.1311L29.7561 9.25H31.75C32.0815 9.2502 32.3993 9.38196 32.6337 9.61634C32.868 9.85071 32.9998 10.1685 33 10.5V14.25Z" fill="#EA4989"/>
									</svg>
									</div>
									<div class="svg-classname">cup.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-23">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-23">cup.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/cup.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-23">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-23">cup.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="36" height="28" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
	&lt;path d="M31.75 6.75H30.0064L30.2189 4.62238C30.2709 4.10111 30.2131 3.57473 30.0493 3.07716C29.8854 2.57959 29.6192 2.12186 29.2676 1.73348C28.9161 1.3451 28.4871 1.03468 28.0082 0.822231C27.5294 0.609781 27.0114 0.500013 26.4875 0.5H7.0125C6.48854 0.500041 5.9704 0.609864 5.49148 0.822391C5.01256 1.03492 4.58348 1.34543 4.23189 1.73392C3.88031 2.12241 3.61403 2.58026 3.45021 3.07795C3.28639 3.57564 3.22866 4.10214 3.28075 4.6235L5.2815 24.6224C5.31508 24.9222 5.38467 25.2168 5.48875 25.5H1.75C1.41848 25.5 1.10054 25.6317 0.866116 25.8661C0.631696 26.1005 0.5 26.4185 0.5 26.75C0.5 27.0815 0.631696 27.3995 0.866116 27.6339C1.10054 27.8683 1.41848 28 1.75 28H31.75C32.0815 28 32.3995 27.8683 32.6339 27.6339C32.8683 27.3995 33 27.0815 33 26.75C33 26.4185 32.8683 26.1005 32.6339 25.8661C32.3995 25.6317 32.0815 25.5 31.75 25.5H28.0115C28.1154 25.2172 28.1849 24.9229 28.2185 24.6235L28.881 18H31.75C32.7442 17.9989 33.6974 17.6035 34.4004 16.9004C35.1035 16.1974 35.4989 15.2442 35.5 14.25V10.5C35.4989 9.50577 35.1035 8.55258 34.4004 7.84956C33.6974 7.14653 32.7442 6.75109 31.75 6.75ZM9.0125 25.5C8.70243 25.501 8.40314 25.3862 8.17327 25.1782C7.9434 24.9701 7.79949 24.6836 7.76975 24.375L5.7685 4.37575C5.75109 4.20188 5.7703 4.0263 5.82488 3.86031C5.87946 3.69432 5.96821 3.5416 6.0854 3.412C6.2026 3.28239 6.34564 3.17877 6.50532 3.10781C6.665 3.03685 6.83777 3.00013 7.0125 3H26.4875C26.6622 3.00012 26.8349 3.03681 26.9945 3.10772C27.1541 3.17863 27.2972 3.28218 27.4143 3.4117C27.5315 3.54123 27.6203 3.69386 27.6749 3.85977C27.7295 4.02568 27.7488 4.20119 27.7315 4.375L25.7308 24.3762C25.7007 24.6848 25.5566 24.971 25.3267 25.1788C25.0967 25.3867 24.7975 25.5012 24.4875 25.5H9.0125ZM33 14.25C32.9998 14.5815 32.868 14.8993 32.6337 15.1337C32.3993 15.368 32.0815 15.4998 31.75 15.5H29.1311L29.7561 9.25H31.75C32.0815 9.2502 32.3993 9.38196 32.6337 9.61634C32.868 9.85071 32.9998 10.1685 33 10.5V14.25Z" fill="#EA4989"/&gt;
&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.25 19.25C12.2389 19.25 13.2056 18.9568 14.0279 18.4074C14.8501 17.8579 15.491 17.0771 15.8694 16.1634C16.2478 15.2498 16.3469 14.2445 16.1539 13.2746C15.961 12.3046 15.4848 11.4137 14.7855 10.7145C14.0863 10.0152 13.1954 9.539 12.2255 9.34608C11.2555 9.15315 10.2502 9.25217 9.33658 9.6306C8.42295 10.009 7.64206 10.6499 7.09265 11.4722C6.54325 12.2944 6.25 13.2611 6.25 14.25C6.25129 15.5757 6.77849 16.8467 7.71589 17.7841C8.65329 18.7215 9.92431 19.2487 11.25 19.25ZM11.25 11.75C11.7445 11.75 12.2278 11.8966 12.6389 12.1713C13.05 12.446 13.3705 12.8365 13.5597 13.2933C13.7489 13.7501 13.7984 14.2528 13.702 14.7377C13.6055 15.2227 13.3674 15.6681 13.0178 16.0178C12.6681 16.3674 12.2227 16.6055 11.7377 16.702C11.2528 16.7984 10.7501 16.7489 10.2933 16.5597C9.83648 16.3705 9.44603 16.0501 9.17133 15.6389C8.89662 15.2278 8.75 14.7445 8.75 14.25C8.75089 13.5872 9.01457 12.9519 9.48322 12.4832C9.95187 12.0146 10.5872 11.7509 11.25 11.75Z" fill="#EA4989"/>
											<path d="M30.78 22.4625C31.1926 21.9098 31.4683 21.2672 31.5844 20.5873C31.7005 19.9074 31.6537 19.2097 31.4477 18.5514L30.6542 15.9696C30.2817 14.7451 29.5243 13.6733 28.4946 12.9132C27.4648 12.1531 26.2174 11.7452 24.9375 11.75H19.3286C18.9971 11.75 18.6792 11.8817 18.4447 12.1161C18.2103 12.3505 18.0786 12.6685 18.0786 13C18.0786 13.3315 18.2103 13.6495 18.4447 13.8839C18.6792 14.1183 18.9971 14.25 19.3286 14.25H24.9375C25.6823 14.2474 26.4081 14.485 27.0072 14.9274C27.6064 15.3698 28.0471 15.9935 28.2639 16.706L29.0574 19.2866C29.1449 19.5713 29.1645 19.8725 29.1145 20.1661C29.0645 20.4597 28.9463 20.7374 28.7694 20.977C28.5925 21.2166 28.3619 21.4114 28.096 21.5456C27.8302 21.6799 27.5366 21.7499 27.2387 21.75H15.7776C15.7422 21.75 15.7126 21.7671 15.6776 21.7701C15.5936 21.7669 15.5125 21.75 15.4272 21.75H7.58975C6.20068 21.7449 4.84702 22.1879 3.72969 23.0132C2.61236 23.8385 1.79094 25.0021 1.38737 26.3312L0.454122 29.3625C0.236133 30.0719 0.187609 30.8225 0.312449 31.554C0.437289 32.2856 0.732013 32.9776 1.17293 33.5746C1.61385 34.1715 2.18866 34.6567 2.85116 34.9911C3.51366 35.3255 4.24538 35.4998 4.9875 35.5H18.0286C18.7708 35.4999 19.5026 35.3256 20.1651 34.9912C20.8277 34.6569 21.4026 34.1717 21.8435 33.5748C22.2845 32.9778 22.5793 32.2857 22.7041 31.5542C22.829 30.8226 22.7805 30.0719 22.5625 29.3625L21.6299 26.3315C21.3936 25.5767 21.0217 24.8713 20.5322 24.25H27.2387C27.9283 24.2532 28.6088 24.0928 29.2243 23.7821C29.8399 23.4714 30.373 23.0192 30.78 22.4625ZM19.8327 32.089C19.6254 32.3726 19.3538 32.6031 19.0402 32.7614C18.7266 32.9198 18.3799 33.0015 18.0286 33H4.9875C4.63649 32.9999 4.2904 32.9175 3.97705 32.7594C3.6637 32.6012 3.39184 32.3717 3.18334 32.0894C2.97484 31.807 2.83552 31.4796 2.77658 31.1336C2.71764 30.7876 2.74073 30.4326 2.844 30.0971L3.77662 27.0661C4.02439 26.2489 4.52922 25.5335 5.21609 25.0261C5.90296 24.5188 6.7352 24.2466 7.58912 24.25H15.4266C16.2805 24.2466 17.1128 24.5188 17.7996 25.0261C18.4865 25.5335 18.9913 26.2489 19.2391 27.0661L20.1717 30.0971C20.2769 30.4323 20.301 30.7877 20.2421 31.134C20.1831 31.4804 20.0429 31.8078 19.8327 32.0894V32.089Z" fill="#EA4989"/>
											<path d="M21.875 9.24999C22.7403 9.24999 23.5861 8.9934 24.3056 8.51267C25.0251 8.03194 25.5858 7.34866 25.917 6.54923C26.2481 5.74981 26.3347 4.87014 26.1659 4.02148C25.9971 3.17281 25.5804 2.39326 24.9686 1.78141C24.3567 1.16955 23.5772 0.752876 22.7285 0.584066C21.8798 0.415256 21.0002 0.501896 20.2008 0.833029C19.4013 1.16416 18.7181 1.72492 18.2373 2.44438C17.7566 3.16384 17.5 4.0097 17.5 4.875C17.5014 6.03489 17.9628 7.14688 18.7829 7.96705C19.6031 8.78722 20.7151 9.2486 21.875 9.24999ZM21.875 3C22.2458 3 22.6083 3.10997 22.9167 3.31599C23.225 3.52202 23.4654 3.81485 23.6073 4.15747C23.7492 4.50008 23.7863 4.87708 23.714 5.24079C23.6416 5.6045 23.463 5.9386 23.2008 6.20082C22.9386 6.46304 22.6045 6.64162 22.2408 6.71397C21.8771 6.78631 21.5001 6.74918 21.1575 6.60727C20.8149 6.46535 20.522 6.22503 20.316 5.91669C20.11 5.60835 20 5.24584 20 4.875C20.0006 4.37789 20.1983 3.9013 20.5498 3.54979C20.9013 3.19829 21.3779 3.00056 21.875 3Z" fill="#EA4989"/>
										</svg>
									</div>
									<div class="svg-classname">user.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-24">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-24">user.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/user.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-24">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-24">user.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
	&lt;path d="M11.25 19.25C12.2389 19.25 13.2056 18.9568 14.0279 18.4074C14.8501 17.8579 15.491 17.0771 15.8694 16.1634C16.2478 15.2498 16.3469 14.2445 16.1539 13.2746C15.961 12.3046 15.4848 11.4137 14.7855 10.7145C14.0863 10.0152 13.1954 9.539 12.2255 9.34608C11.2555 9.15315 10.2502 9.25217 9.33658 9.6306C8.42295 10.009 7.64206 10.6499 7.09265 11.4722C6.54325 12.2944 6.25 13.2611 6.25 14.25C6.25129 15.5757 6.77849 16.8467 7.71589 17.7841C8.65329 18.7215 9.92431 19.2487 11.25 19.25ZM11.25 11.75C11.7445 11.75 12.2278 11.8966 12.6389 12.1713C13.05 12.446 13.3705 12.8365 13.5597 13.2933C13.7489 13.7501 13.7984 14.2528 13.702 14.7377C13.6055 15.2227 13.3674 15.6681 13.0178 16.0178C12.6681 16.3674 12.2227 16.6055 11.7377 16.702C11.2528 16.7984 10.7501 16.7489 10.2933 16.5597C9.83648 16.3705 9.44603 16.0501 9.17133 15.6389C8.89662 15.2278 8.75 14.7445 8.75 14.25C8.75089 13.5872 9.01457 12.9519 9.48322 12.4832C9.95187 12.0146 10.5872 11.7509 11.25 11.75Z" fill="#EA4989"/&gt;
	&lt;path d="M30.78 22.4625C31.1926 21.9098 31.4683 21.2672 31.5844 20.5873C31.7005 19.9074 31.6537 19.2097 31.4477 18.5514L30.6542 15.9696C30.2817 14.7451 29.5243 13.6733 28.4946 12.9132C27.4648 12.1531 26.2174 11.7452 24.9375 11.75H19.3286C18.9971 11.75 18.6792 11.8817 18.4447 12.1161C18.2103 12.3505 18.0786 12.6685 18.0786 13C18.0786 13.3315 18.2103 13.6495 18.4447 13.8839C18.6792 14.1183 18.9971 14.25 19.3286 14.25H24.9375C25.6823 14.2474 26.4081 14.485 27.0072 14.9274C27.6064 15.3698 28.0471 15.9935 28.2639 16.706L29.0574 19.2866C29.1449 19.5713 29.1645 19.8725 29.1145 20.1661C29.0645 20.4597 28.9463 20.7374 28.7694 20.977C28.5925 21.2166 28.3619 21.4114 28.096 21.5456C27.8302 21.6799 27.5366 21.7499 27.2387 21.75H15.7776C15.7422 21.75 15.7126 21.7671 15.6776 21.7701C15.5936 21.7669 15.5125 21.75 15.4272 21.75H7.58975C6.20068 21.7449 4.84702 22.1879 3.72969 23.0132C2.61236 23.8385 1.79094 25.0021 1.38737 26.3312L0.454122 29.3625C0.236133 30.0719 0.187609 30.8225 0.312449 31.554C0.437289 32.2856 0.732013 32.9776 1.17293 33.5746C1.61385 34.1715 2.18866 34.6567 2.85116 34.9911C3.51366 35.3255 4.24538 35.4998 4.9875 35.5H18.0286C18.7708 35.4999 19.5026 35.3256 20.1651 34.9912C20.8277 34.6569 21.4026 34.1717 21.8435 33.5748C22.2845 32.9778 22.5793 32.2857 22.7041 31.5542C22.829 30.8226 22.7805 30.0719 22.5625 29.3625L21.6299 26.3315C21.3936 25.5767 21.0217 24.8713 20.5322 24.25H27.2387C27.9283 24.2532 28.6088 24.0928 29.2243 23.7821C29.8399 23.4714 30.373 23.0192 30.78 22.4625ZM19.8327 32.089C19.6254 32.3726 19.3538 32.6031 19.0402 32.7614C18.7266 32.9198 18.3799 33.0015 18.0286 33H4.9875C4.63649 32.9999 4.2904 32.9175 3.97705 32.7594C3.6637 32.6012 3.39184 32.3717 3.18334 32.0894C2.97484 31.807 2.83552 31.4796 2.77658 31.1336C2.71764 30.7876 2.74073 30.4326 2.844 30.0971L3.77662 27.0661C4.02439 26.2489 4.52922 25.5335 5.21609 25.0261C5.90296 24.5188 6.7352 24.2466 7.58912 24.25H15.4266C16.2805 24.2466 17.1128 24.5188 17.7996 25.0261C18.4865 25.5335 18.9913 26.2489 19.2391 27.0661L20.1717 30.0971C20.2769 30.4323 20.301 30.7877 20.2421 31.134C20.1831 31.4804 20.0429 31.8078 19.8327 32.0894V32.089Z" fill="#EA4989"/&gt;
	&lt;path d="M21.875 9.24999C22.7403 9.24999 23.5861 8.9934 24.3056 8.51267C25.0251 8.03194 25.5858 7.34866 25.917 6.54923C26.2481 5.74981 26.3347 4.87014 26.1659 4.02148C25.9971 3.17281 25.5804 2.39326 24.9686 1.78141C24.3567 1.16955 23.5772 0.752876 22.7285 0.584066C21.8798 0.415256 21.0002 0.501896 20.2008 0.833029C19.4013 1.16416 18.7181 1.72492 18.2373 2.44438C17.7566 3.16384 17.5 4.0097 17.5 4.875C17.5014 6.03489 17.9628 7.14688 18.7829 7.96705C19.6031 8.78722 20.7151 9.2486 21.875 9.24999ZM21.875 3C22.2458 3 22.6083 3.10997 22.9167 3.31599C23.225 3.52202 23.4654 3.81485 23.6073 4.15747C23.7492 4.50008 23.7863 4.87708 23.714 5.24079C23.6416 5.6045 23.463 5.9386 23.2008 6.20082C22.9386 6.46304 22.6045 6.64162 22.2408 6.71397C21.8771 6.78631 21.5001 6.74918 21.1575 6.60727C20.8149 6.46535 20.522 6.22503 20.316 5.91669C20.11 5.60835 20 5.24584 20 4.875C20.0006 4.37789 20.1983 3.9013 20.5498 3.54979C20.9013 3.19829 21.3779 3.00056 21.875 3Z" fill="#EA4989"/&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
									<svg width="20" height="36" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z" fill="#EA4989"/>
									</svg>
									</div>
									<div class="svg-classname">doller.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-25">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-25">doller.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
														<pre>&lt;img src="images/iconly/bulk/doller.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-25">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-25">doller.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="20" height="36" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
	&lt;path d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z" fill="#EA4989"/&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"></path>
										</svg>
									</div>
									<div class="svg-classname">heart.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-26">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-26">heart.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/heart.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-26">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-26">heart.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"&gt;&lt;/path&gt;
&lt;/svg&gt;

		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="16" height="16" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M16.0007 1.33334C13.0999 1.33334 10.2642 2.19353 7.85229 3.80512C5.44037 5.41672 3.56051 7.70734 2.45042 10.3873C1.34034 13.0673 1.04989 16.0163 1.61581 18.8613C2.18172 21.7064 3.57859 24.3198 5.62976 26.3709C7.68093 28.4221 10.2943 29.819 13.1393 30.3849C15.9844 30.9508 18.9334 30.6603 21.6133 29.5503C24.2933 28.4402 26.584 26.5603 28.1955 24.1484C29.8071 21.7365 30.6673 18.9008 30.6673 16C30.6627 12.1116 29.116 8.38372 26.3665 5.63418C23.617 2.88464 19.8891 1.33793 16.0007 1.33334ZM16.0007 28C13.6273 28 11.3072 27.2962 9.33381 25.9777C7.36042 24.6591 5.82235 22.7849 4.9141 20.5922C4.00585 18.3995 3.76821 15.9867 4.23123 13.6589C4.69426 11.3312 5.83715 9.19296 7.51538 7.51473C9.19361 5.8365 11.3318 4.69361 13.6596 4.23059C15.9873 3.76757 18.4001 4.00521 20.5929 4.91346C22.7856 5.82171 24.6597 7.35978 25.9783 9.33317C27.2969 11.3066 28.0007 13.6266 28.0007 16C27.9971 19.1815 26.7317 22.2317 24.482 24.4814C22.2324 26.7311 19.1822 27.9965 16.0007 28Z" fill="white"></path>
											<path d="M20.3901 11.724L14.6661 17.448L11.6088 14.3907C11.4858 14.2633 11.3387 14.1617 11.176 14.0919C11.0133 14.022 10.8384 13.9852 10.6613 13.9837C10.4843 13.9821 10.3087 14.0159 10.1449 14.0829C9.98099 14.1499 9.83212 14.2489 9.70693 14.3741C9.58174 14.4993 9.48274 14.6482 9.41569 14.8121C9.34865 14.9759 9.31492 15.1515 9.31646 15.3285C9.318 15.5056 9.35478 15.6805 9.42466 15.8432C9.49453 16.0059 9.59611 16.153 9.72346 16.276L13.7235 20.276C13.9735 20.5259 14.3126 20.6664 14.6661 20.6664C15.0197 20.6664 15.3587 20.5259 15.6088 20.276L22.2754 13.6093C22.5183 13.3579 22.6527 13.0211 22.6497 12.6715C22.6466 12.3219 22.5064 11.9875 22.2592 11.7402C22.012 11.493 21.6776 11.3528 21.328 11.3498C20.9784 11.3467 20.6416 11.4811 20.3901 11.724Z" fill="white"></path>
										</svg>
									</div>
									<div class="svg-classname">check-circle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
										
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-27">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-27">check-circle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/check-circle.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-27">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-27">check-circle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="16" height="16" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
	&lt;path d="M16.0007 1.33334C13.0999 1.33334 10.2642 2.19353 7.85229 3.80512C5.44037 5.41672 3.56051 7.70734 2.45042 10.3873C1.34034 13.0673 1.04989 16.0163 1.61581 18.8613C2.18172 21.7064 3.57859 24.3198 5.62976 26.3709C7.68093 28.4221 10.2943 29.819 13.1393 30.3849C15.9844 30.9508 18.9334 30.6603 21.6133 29.5503C24.2933 28.4402 26.584 26.5603 28.1955 24.1484C29.8071 21.7365 30.6673 18.9008 30.6673 16C30.6627 12.1116 29.116 8.38372 26.3665 5.63418C23.617 2.88464 19.8891 1.33793 16.0007 1.33334ZM16.0007 28C13.6273 28 11.3072 27.2962 9.33381 25.9777C7.36042 24.6591 5.82235 22.7849 4.9141 20.5922C4.00585 18.3995 3.76821 15.9867 4.23123 13.6589C4.69426 11.3312 5.83715 9.19296 7.51538 7.51473C9.19361 5.8365 11.3318 4.69361 13.6596 4.23059C15.9873 3.76757 18.4001 4.00521 20.5929 4.91346C22.7856 5.82171 24.6597 7.35978 25.9783 9.33317C27.2969 11.3066 28.0007 13.6266 28.0007 16C27.9971 19.1815 26.7317 22.2317 24.482 24.4814C22.2324 26.7311 19.1822 27.9965 16.0007 28Z" fill="white"&gt;&lt;/path&gt;
	&lt;path d="M20.3901 11.724L14.6661 17.448L11.6088 14.3907C11.4858 14.2633 11.3387 14.1617 11.176 14.0919C11.0133 14.022 10.8384 13.9852 10.6613 13.9837C10.4843 13.9821 10.3087 14.0159 10.1449 14.0829C9.98099 14.1499 9.83212 14.2489 9.70693 14.3741C9.58174 14.4993 9.48274 14.6482 9.41569 14.8121C9.34865 14.9759 9.31492 15.1515 9.31646 15.3285C9.318 15.5056 9.35478 15.6805 9.42466 15.8432C9.49453 16.0059 9.59611 16.153 9.72346 16.276L13.7235 20.276C13.9735 20.5259 14.3126 20.6664 14.6661 20.6664C15.0197 20.6664 15.3587 20.5259 15.6088 20.276L22.2754 13.6093C22.5183 13.3579 22.6527 13.0211 22.6497 12.6715C22.6466 12.3219 22.5064 11.9875 22.2592 11.7402C22.012 11.493 21.6776 11.3528 21.328 11.3498C20.9784 11.3467 20.6416 11.4811 20.3901 11.724Z" fill="white"&gt;&lt;/path&gt;
&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
									<svg width="16" height="16" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.0007 1.33334C13.0999 1.33334 10.2642 2.19353 7.85229 3.80512C5.44037 5.41672 3.56051 7.70734 2.45042 10.3873C1.34034 13.0673 1.04989 16.0163 1.61581 18.8613C2.18172 21.7064 3.57859 24.3198 5.62976 26.3709C7.68093 28.4221 10.2943 29.819 13.1393 30.3849C15.9844 30.9508 18.9334 30.6603 21.6133 29.5503C24.2933 28.4402 26.584 26.5603 28.1955 24.1484C29.8071 21.7365 30.6673 18.9008 30.6673 16C30.6627 12.1116 29.116 8.38372 26.3665 5.63418C23.617 2.88464 19.8891 1.33793 16.0007 1.33334ZM16.0007 28C13.6273 28 11.3072 27.2962 9.33381 25.9777C7.36042 24.6591 5.82235 22.7849 4.9141 20.5922C4.00585 18.3995 3.76821 15.9867 4.23123 13.6589C4.69426 11.3312 5.83715 9.19296 7.51538 7.51473C9.19361 5.8365 11.3318 4.69361 13.6596 4.23059C15.9873 3.76757 18.4001 4.00521 20.5929 4.91346C22.7856 5.82171 24.6597 7.35978 25.9783 9.33317C27.2969 11.3066 28.0007 13.6266 28.0007 16C27.9971 19.1815 26.7317 22.2317 24.482 24.4814C22.2324 26.7311 19.1822 27.9965 16.0007 28Z" fill="white"></path>
										<path d="M21.6556 10.3427C21.4055 10.0927 21.0665 9.95228 20.7129 9.95228C20.3594 9.95228 20.0203 10.0927 19.7702 10.3427L15.9996 14.1147L12.2289 10.3427C12.1059 10.2153 11.9588 10.1137 11.7961 10.0439C11.6334 9.97398 11.4585 9.9372 11.2814 9.93566C11.1044 9.93412 10.9288 9.96786 10.765 10.0349C10.6011 10.1019 10.4522 10.2009 10.327 10.3261C10.2019 10.4513 10.1029 10.6002 10.0358 10.7641C9.96877 10.9279 9.93504 11.1035 9.93657 11.2805C9.93811 11.4576 9.97489 11.6325 10.0448 11.7952C10.1147 11.9579 10.2162 12.105 10.3436 12.228L14.1142 16L10.3436 19.772C10.2162 19.895 10.1147 20.0421 10.0448 20.2048C9.97489 20.3675 9.93811 20.5424 9.93657 20.7195C9.93504 20.8965 9.96877 21.0721 10.0358 21.2359C10.1029 21.3998 10.2019 21.5487 10.327 21.6739C10.4522 21.799 10.6011 21.898 10.765 21.9651C10.9288 22.0321 11.1044 22.0659 11.2814 22.0643C11.4585 22.0628 11.6334 22.026 11.7961 21.9561C11.9588 21.8863 12.1059 21.7847 12.2289 21.6573L15.9996 17.8853L19.7702 21.6573C19.8932 21.7847 20.0404 21.8863 20.203 21.9561C20.3657 22.026 20.5407 22.0628 20.7177 22.0643C20.8947 22.0659 21.0703 22.0321 21.2342 21.9651C21.398 21.898 21.5469 21.799 21.6721 21.6739C21.7973 21.5487 21.8963 21.3998 21.9633 21.2359C22.0304 21.0721 22.0641 20.8965 22.0626 20.7195C22.061 20.5424 22.0243 20.3675 21.9544 20.2048C21.8845 20.0421 21.7829 19.895 21.6556 19.772L17.8849 16L21.6556 12.228C21.9055 11.978 22.046 11.6389 22.046 11.2853C22.046 10.9318 21.9055 10.5927 21.6556 10.3427Z" fill="white"></path>
									</svg>
									</div>
									<div class="svg-classname">delete-circle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-28">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-28">delete-circle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/delete-circle.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-28">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-28">delete-circle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="16" height="16" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M16.0007 1.33334C13.0999 1.33334 10.2642 2.19353 7.85229 3.80512C5.44037 5.41672 3.56051 7.70734 2.45042 10.3873C1.34034 13.0673 1.04989 16.0163 1.61581 18.8613C2.18172 21.7064 3.57859 24.3198 5.62976 26.3709C7.68093 28.4221 10.2943 29.819 13.1393 30.3849C15.9844 30.9508 18.9334 30.6603 21.6133 29.5503C24.2933 28.4402 26.584 26.5603 28.1955 24.1484C29.8071 21.7365 30.6673 18.9008 30.6673 16C30.6627 12.1116 29.116 8.38372 26.3665 5.63418C23.617 2.88464 19.8891 1.33793 16.0007 1.33334ZM16.0007 28C13.6273 28 11.3072 27.2962 9.33381 25.9777C7.36042 24.6591 5.82235 22.7849 4.9141 20.5922C4.00585 18.3995 3.76821 15.9867 4.23123 13.6589C4.69426 11.3312 5.83715 9.19296 7.51538 7.51473C9.19361 5.8365 11.3318 4.69361 13.6596 4.23059C15.9873 3.76757 18.4001 4.00521 20.5929 4.91346C22.7856 5.82171 24.6597 7.35978 25.9783 9.33317C27.2969 11.3066 28.0007 13.6266 28.0007 16C27.9971 19.1815 26.7317 22.2317 24.482 24.4814C22.2324 26.7311 19.1822 27.9965 16.0007 28Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M21.6556 10.3427C21.4055 10.0927 21.0665 9.95228 20.7129 9.95228C20.3594 9.95228 20.0203 10.0927 19.7702 10.3427L15.9996 14.1147L12.2289 10.3427C12.1059 10.2153 11.9588 10.1137 11.7961 10.0439C11.6334 9.97398 11.4585 9.9372 11.2814 9.93566C11.1044 9.93412 10.9288 9.96786 10.765 10.0349C10.6011 10.1019 10.4522 10.2009 10.327 10.3261C10.2019 10.4513 10.1029 10.6002 10.0358 10.7641C9.96877 10.9279 9.93504 11.1035 9.93657 11.2805C9.93811 11.4576 9.97489 11.6325 10.0448 11.7952C10.1147 11.9579 10.2162 12.105 10.3436 12.228L14.1142 16L10.3436 19.772C10.2162 19.895 10.1147 20.0421 10.0448 20.2048C9.97489 20.3675 9.93811 20.5424 9.93657 20.7195C9.93504 20.8965 9.96877 21.0721 10.0358 21.2359C10.1029 21.3998 10.2019 21.5487 10.327 21.6739C10.4522 21.799 10.6011 21.898 10.765 21.9651C10.9288 22.0321 11.1044 22.0659 11.2814 22.0643C11.4585 22.0628 11.6334 22.026 11.7961 21.9561C11.9588 21.8863 12.1059 21.7847 12.2289 21.6573L15.9996 17.8853L19.7702 21.6573C19.8932 21.7847 20.0404 21.8863 20.203 21.9561C20.3657 22.026 20.5407 22.0628 20.7177 22.0643C20.8947 22.0659 21.0703 22.0321 21.2342 21.9651C21.398 21.898 21.5469 21.799 21.6721 21.6739C21.7973 21.5487 21.8963 21.3998 21.9633 21.2359C22.0304 21.0721 22.0641 20.8965 22.0626 20.7195C22.061 20.5424 22.0243 20.3675 21.9544 20.2048C21.8845 20.0421 21.7829 19.895 21.6556 19.772L17.8849 16L21.6556 12.228C21.9055 11.978 22.046 11.6389 22.046 11.2853C22.046 10.9318 21.9055 10.5927 21.6556 10.3427Z" fill="white"&gt;&lt;/path&gt;
&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
									<svg width="14" height="14" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M22.4276 2.856H21.8676V1.428C21.8676 0.56 21.2796 0 20.4396 0C19.5996 0 19.0116 0.56 19.0116 1.428V2.856H9.71557V1.428C9.71557 0.56 9.15557 0 8.28757 0C7.41957 0 6.85957 0.56 6.85957 1.428V2.856H5.57157C2.85557 2.856 0.55957 5.152 0.55957 7.868V23.016C0.55957 25.732 2.85557 28.028 5.57157 28.028H22.4276C25.1436 28.028 27.4396 25.732 27.4396 23.016V7.868C27.4396 5.152 25.1436 2.856 22.4276 2.856ZM5.57157 5.712H22.4276C23.5756 5.712 24.5836 6.72 24.5836 7.868V9.856H3.41557V7.868C3.41557 6.72 4.42357 5.712 5.57157 5.712ZM22.4276 25.144H5.57157C4.42357 25.144 3.41557 24.136 3.41557 22.988V12.712H24.5556V22.988C24.5836 24.136 23.5756 25.144 22.4276 25.144Z" fill="#EA4989"></path>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="28" height="28" fill="white"></rect>
										</clipPath>
										</defs>
									</svg>
									</div>
									<div class="svg-classname">Calendar.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-29">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-29">Calendar.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/Calendar.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-29">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-29">Calendar.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="14" height="14" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;g clip-path="url(#clip0)"&gt;
&lt;path d="M22.4276 2.856H21.8676V1.428C21.8676 0.56 21.2796 0 20.4396 0C19.5996 0 19.0116 0.56 19.0116 1.428V2.856H9.71557V1.428C9.71557 0.56 9.15557 0 8.28757 0C7.41957 0 6.85957 0.56 6.85957 1.428V2.856H5.57157C2.85557 2.856 0.55957 5.152 0.55957 7.868V23.016C0.55957 25.732 2.85557 28.028 5.57157 28.028H22.4276C25.1436 28.028 27.4396 25.732 27.4396 23.016V7.868C27.4396 5.152 25.1436 2.856 22.4276 2.856ZM5.57157 5.712H22.4276C23.5756 5.712 24.5836 6.72 24.5836 7.868V9.856H3.41557V7.868C3.41557 6.72 4.42357 5.712 5.57157 5.712ZM22.4276 25.144H5.57157C4.42357 25.144 3.41557 24.136 3.41557 22.988V12.712H24.5556V22.988C24.5836 24.136 23.5756 25.144 22.4276 25.144Z" fill="#EA4989"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;defs&gt;
&lt;clipPath id="clip0"&gt;
&lt;rect width="28" height="28" fill="white"&gt;&lt;/rect&gt;
&lt;/clipPath&gt;
&lt;/defs&gt;
&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg  width="14" height="14" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.12885 22H6.87549C6.11615 22 5.50049 22.615 5.50049 23.375C5.50049 24.135 6.11615 24.75 6.87549 24.75H7.12894C7.69836 26.3471 9.21032 27.5 11.0005 27.5C12.7907 27.5 14.3027 26.3471 14.8721 24.75H18.1289C18.6984 26.3471 20.2103 27.5 22.0005 27.5C23.7985 27.5 25.3154 26.3366 25.8788 24.7285C27.5195 24.6187 28.8881 23.4711 29.2494 21.8443L30.9608 14.1408C31.2065 13.037 30.9413 11.897 30.233 11.0148C29.5247 10.1312 28.47 9.62501 27.338 9.62501H25.5407C25.4027 9.11082 25.1547 8.62591 24.8035 8.2057C24.0966 7.35976 23.0586 6.87502 21.9562 6.87502H8.25049C7.49115 6.87502 6.87549 7.49001 6.87549 8.25002C6.87549 9.01002 7.49115 9.62501 8.25049 9.62501H21.9562C22.3469 9.62501 22.5859 9.8412 22.694 9.97011C22.8014 10.099 22.9713 10.3716 22.9028 10.7543L21.3436 19.3164C19.8457 19.5586 18.6267 20.6036 18.1289 22H14.8721C14.3027 20.403 12.7907 19.25 11.0005 19.25C9.21032 19.25 7.69827 20.403 7.12885 22ZM28.0879 12.7349C28.196 12.8692 28.3632 13.1525 28.2766 13.5446L26.5652 21.2481C26.4852 21.6074 26.2128 21.8686 25.8719 21.9582C25.5383 21.0569 24.8921 20.2959 24.0492 19.8082L25.403 12.375H27.338C27.7395 12.375 27.9799 12.6006 28.0879 12.7349ZM22.0005 22C22.0878 22 22.1757 22.0067 22.2348 22.0161C22.8954 22.145 23.3755 22.7157 23.3755 23.375C23.3755 24.1337 22.7585 24.75 22.0005 24.75C21.2425 24.75 20.6255 24.1337 20.6255 23.375C20.6255 22.6163 21.2425 22 22.0005 22ZM11.0005 22C11.7585 22 12.3755 22.6163 12.3755 23.375C12.3755 24.1337 11.7585 24.75 11.0005 24.75C10.2425 24.75 9.62549 24.1337 9.62549 23.375C9.62549 22.6163 10.2425 22 11.0005 22Z" fill="white"></path>
											<path d="M5.5 15.125H11C11.7593 15.125 12.375 14.51 12.375 13.75C12.375 12.99 11.7593 12.375 11 12.375H5.5C4.74066 12.375 4.125 12.99 4.125 13.75C4.125 14.51 4.74066 15.125 5.5 15.125Z" fill="white"></path>
											<path d="M2.75049 19.25H6.87549C7.63483 19.25 8.25049 18.635 8.25049 17.875C8.25049 17.115 7.63483 16.5 6.87549 16.5H2.75049C1.99115 16.5 1.37549 17.115 1.37549 17.875C1.37549 18.635 1.99115 19.25 2.75049 19.25Z" fill="white"></path>
											<path d="M4.12451 9.62501C4.8839 9.62501 5.49951 9.0094 5.49951 8.25001C5.49951 7.49062 4.8839 6.87502 4.12451 6.87502C3.36512 6.87502 2.74951 7.49062 2.74951 8.25001C2.74951 9.0094 3.36512 9.62501 4.12451 9.62501Z" fill="white"></path>
											<path d="M2.75049 24.75C3.50988 24.75 4.12549 24.1344 4.12549 23.375C4.12549 22.6156 3.50988 22 2.75049 22C1.9911 22 1.37549 22.6156 1.37549 23.375C1.37549 24.1344 1.9911 24.75 2.75049 24.75Z" fill="white"></path>
										</svg>
									</div>
									<div class="svg-classname">delivery.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-30">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-30">delivery.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/delivery.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-30">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-30">delivery.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="14" height="14" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
	&lt;path d="M7.12885 22H6.87549C6.11615 22 5.50049 22.615 5.50049 23.375C5.50049 24.135 6.11615 24.75 6.87549 24.75H7.12894C7.69836 26.3471 9.21032 27.5 11.0005 27.5C12.7907 27.5 14.3027 26.3471 14.8721 24.75H18.1289C18.6984 26.3471 20.2103 27.5 22.0005 27.5C23.7985 27.5 25.3154 26.3366 25.8788 24.7285C27.5195 24.6187 28.8881 23.4711 29.2494 21.8443L30.9608 14.1408C31.2065 13.037 30.9413 11.897 30.233 11.0148C29.5247 10.1312 28.47 9.62501 27.338 9.62501H25.5407C25.4027 9.11082 25.1547 8.62591 24.8035 8.2057C24.0966 7.35976 23.0586 6.87502 21.9562 6.87502H8.25049C7.49115 6.87502 6.87549 7.49001 6.87549 8.25002C6.87549 9.01002 7.49115 9.62501 8.25049 9.62501H21.9562C22.3469 9.62501 22.5859 9.8412 22.694 9.97011C22.8014 10.099 22.9713 10.3716 22.9028 10.7543L21.3436 19.3164C19.8457 19.5586 18.6267 20.6036 18.1289 22H14.8721C14.3027 20.403 12.7907 19.25 11.0005 19.25C9.21032 19.25 7.69827 20.403 7.12885 22ZM28.0879 12.7349C28.196 12.8692 28.3632 13.1525 28.2766 13.5446L26.5652 21.2481C26.4852 21.6074 26.2128 21.8686 25.8719 21.9582C25.5383 21.0569 24.8921 20.2959 24.0492 19.8082L25.403 12.375H27.338C27.7395 12.375 27.9799 12.6006 28.0879 12.7349ZM22.0005 22C22.0878 22 22.1757 22.0067 22.2348 22.0161C22.8954 22.145 23.3755 22.7157 23.3755 23.375C23.3755 24.1337 22.7585 24.75 22.0005 24.75C21.2425 24.75 20.6255 24.1337 20.6255 23.375C20.6255 22.6163 21.2425 22 22.0005 22ZM11.0005 22C11.7585 22 12.3755 22.6163 12.3755 23.375C12.3755 24.1337 11.7585 24.75 11.0005 24.75C10.2425 24.75 9.62549 24.1337 9.62549 23.375C9.62549 22.6163 10.2425 22 11.0005 22Z" fill="white"&gt;&lt;/path&gt;
	&lt;path d="M5.5 15.125H11C11.7593 15.125 12.375 14.51 12.375 13.75C12.375 12.99 11.7593 12.375 11 12.375H5.5C4.74066 12.375 4.125 12.99 4.125 13.75C4.125 14.51 4.74066 15.125 5.5 15.125Z" fill="white"&gt;&lt;/path&gt;
	&lt;path d="M2.75049 19.25H6.87549C7.63483 19.25 8.25049 18.635 8.25049 17.875C8.25049 17.115 7.63483 16.5 6.87549 16.5H2.75049C1.99115 16.5 1.37549 17.115 1.37549 17.875C1.37549 18.635 1.99115 19.25 2.75049 19.25Z" fill="white"&gt;&lt;/path&gt;
	&lt;path d="M4.12451 9.62501C4.8839 9.62501 5.49951 9.0094 5.49951 8.25001C5.49951 7.49062 4.8839 6.87502 4.12451 6.87502C3.36512 6.87502 2.74951 7.49062 2.74951 8.25001C2.74951 9.0094 3.36512 9.62501 4.12451 9.62501Z" fill="white"&gt;&lt;/path&gt;
	&lt;path d="M2.75049 24.75C3.50988 24.75 4.12549 24.1344 4.12549 23.375C4.12549 22.6156 3.50988 22 2.75049 22C1.9911 22 1.37549 22.6156 1.37549 23.375C1.37549 24.1344 1.9911 24.75 2.75049 24.75Z" fill="white"&gt;&lt;/path&gt;
&lt;/svg&gt;

		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip2)">
											<path d="M14.6406 24.384C14.4639 24.1871 14.421 23.904 14.5305 23.6633C15.9635 20.513 14.4092 18.7501 14.564 11.6323C14.5713 11.2944 14.8346 10.9721 15.2564 10.9801C15.6201 10.987 15.905 11.2962 15.8971 11.6598C15.8902 11.9762 15.8871 12.2939 15.8875 12.6123C15.888 12.9813 16.1893 13.2826 16.5583 13.2776C17.6426 13.2628 19.752 12.9057 20.5684 10.4567L20.9744 9.23876C21.7257 6.9847 20.4421 4.55115 18.1335 3.91572L13.9816 2.77294C12.3274 2.31768 10.5363 2.94145 9.52387 4.32498C4.66826 10.9599 1.44452 18.5903 0.0754914 26.6727C-0.300767 28.8937 0.754757 31.1346 2.70222 32.2488C13.6368 38.5051 26.6023 39.1113 38.35 33.6379C39.3524 33.1709 40.0002 32.1534 40.0002 31.0457V19.1321C40.0002 18.182 39.5322 17.2976 38.7484 16.7664C34.5339 13.91 29.1672 14.2521 25.5723 18.0448C25.2519 18.3828 25.3733 18.937 25.8031 19.1166C27.4271 19.7957 28.9625 20.7823 30.2439 21.9475C30.5225 22.2008 30.542 22.6396 30.2654 22.9155C30.0143 23.1658 29.6117 23.1752 29.3485 22.9376C25.9907 19.9053 21.4511 18.5257 16.935 19.9686C16.658 20.0571 16.4725 20.3193 16.477 20.61C16.496 21.8194 16.294 22.9905 15.7421 24.2172C15.5453 24.6544 14.9607 24.7409 14.6406 24.384Z" fill="#27BC48"></path>
											</g>
											<defs>
											<clipPath id="clip2">
											<rect width="40" height="40" fill="white"></rect>
											</clipPath>
											</defs>
										</svg>
									</div>
									<div class="svg-classname">progess.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-31">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-31">progess.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/progess.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-31">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-31">progess.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;g clip-path="url(#clip2)"&gt;
&lt;path d="M14.6406 24.384C14.4639 24.1871 14.421 23.904 14.5305 23.6633C15.9635 20.513 14.4092 18.7501 14.564 11.6323C14.5713 11.2944 14.8346 10.9721 15.2564 10.9801C15.6201 10.987 15.905 11.2962 15.8971 11.6598C15.8902 11.9762 15.8871 12.2939 15.8875 12.6123C15.888 12.9813 16.1893 13.2826 16.5583 13.2776C17.6426 13.2628 19.752 12.9057 20.5684 10.4567L20.9744 9.23876C21.7257 6.9847 20.4421 4.55115 18.1335 3.91572L13.9816 2.77294C12.3274 2.31768 10.5363 2.94145 9.52387 4.32498C4.66826 10.9599 1.44452 18.5903 0.0754914 26.6727C-0.300767 28.8937 0.754757 31.1346 2.70222 32.2488C13.6368 38.5051 26.6023 39.1113 38.35 33.6379C39.3524 33.1709 40.0002 32.1534 40.0002 31.0457V19.1321C40.0002 18.182 39.5322 17.2976 38.7484 16.7664C34.5339 13.91 29.1672 14.2521 25.5723 18.0448C25.2519 18.3828 25.3733 18.937 25.8031 19.1166C27.4271 19.7957 28.9625 20.7823 30.2439 21.9475C30.5225 22.2008 30.542 22.6396 30.2654 22.9155C30.0143 23.1658 29.6117 23.1752 29.3485 22.9376C25.9907 19.9053 21.4511 18.5257 16.935 19.9686C16.658 20.0571 16.4725 20.3193 16.477 20.61C16.496 21.8194 16.294 22.9905 15.7421 24.2172C15.5453 24.6544 14.9607 24.7409 14.6406 24.384Z" fill="#27BC48"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;defs&gt;
&lt;clipPath id="clip2"&gt;
&lt;rect width="40" height="40" fill="white"&gt;&lt;/rect&gt;
&lt;/clipPath&gt;
&lt;/defs&gt;
&lt;/svg&gt;

		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.64826 26.5285C0.547125 26.7394 -0.174308 27.8026 0.0366371 28.9038C0.222269 29.8741 1.07449 30.5491 2.02796 30.5491C2.15453 30.5491 2.28531 30.5364 2.41188 30.5112L10.7653 28.908C11.242 28.8152 11.6682 28.5578 11.9719 28.1781L15.558 23.6554L14.3599 23.0437C13.4739 22.5965 12.8579 21.7865 12.6469 20.8035L9.26338 25.0688L1.64826 26.5285Z" fill="#A02CFA"></path>
											<path d="M31.3999 8.89345C33.8558 8.89345 35.8467 6.90258 35.8467 4.44673C35.8467 1.99087 33.8558 0 31.3999 0C28.9441 0 26.9532 1.99087 26.9532 4.44673C26.9532 6.90258 28.9441 8.89345 31.3999 8.89345Z" fill="#A02CFA"></path>
											<path d="M21.6965 3.33297C21.2282 2.85202 20.7937 2.66217 20.3169 2.66217C20.1439 2.66217 19.971 2.68748 19.7853 2.72967L12.1534 4.53958C11.0986 4.78849 10.4489 5.84744 10.6979 6.89795C10.913 7.80079 11.7146 8.40831 12.6048 8.40831C12.7567 8.40831 12.9086 8.39144 13.0605 8.35347L19.5618 6.81357C19.9837 7.28187 22.0974 9.57273 22.4813 9.97775C19.7938 12.855 17.1064 15.7281 14.4189 18.6054C14.3767 18.6519 14.3388 18.6982 14.3008 18.7446C13.5161 19.7445 13.7566 21.3139 14.9379 21.9088L23.1774 26.1151L18.8994 33.0467C18.313 34.0002 18.6083 35.249 19.5618 35.8396C19.8951 36.0464 20.2621 36.1434 20.6249 36.1434C21.3042 36.1434 21.9707 35.8017 22.3547 35.1815L27.7886 26.3766C28.0882 25.8915 28.1683 25.305 28.0122 24.7608C27.8561 24.2123 27.4806 23.7567 26.9702 23.4993L21.3885 20.66L27.2571 14.3823L31.6869 18.1371C32.0539 18.4493 32.5054 18.6012 32.9526 18.6012C33.4335 18.6012 33.9145 18.424 34.2899 18.078L39.3737 13.3402C40.1669 12.6019 40.2133 11.3615 39.475 10.5684C39.0868 10.1549 38.5637 9.944 38.0406 9.944C37.5638 9.944 37.0829 10.117 36.7074 10.4671L32.9019 14.0068C32.8977 14.011 23.363 5.04163 21.6965 3.33297Z" fill="#A02CFA"></path>
										</svg>
									</div>
									<div class="svg-classname">running.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-32">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-32">running.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/running.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-32">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-32">running.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M1.64826 26.5285C0.547125 26.7394 -0.174308 27.8026 0.0366371 28.9038C0.222269 29.8741 1.07449 30.5491 2.02796 30.5491C2.15453 30.5491 2.28531 30.5364 2.41188 30.5112L10.7653 28.908C11.242 28.8152 11.6682 28.5578 11.9719 28.1781L15.558 23.6554L14.3599 23.0437C13.4739 22.5965 12.8579 21.7865 12.6469 20.8035L9.26338 25.0688L1.64826 26.5285Z" fill="#A02CFA"&gt;&lt;/path&gt;
&lt;path d="M31.3999 8.89345C33.8558 8.89345 35.8467 6.90258 35.8467 4.44673C35.8467 1.99087 33.8558 0 31.3999 0C28.9441 0 26.9532 1.99087 26.9532 4.44673C26.9532 6.90258 28.9441 8.89345 31.3999 8.89345Z" fill="#A02CFA"&gt;&lt;/path&gt;
&lt;path d="M21.6965 3.33297C21.2282 2.85202 20.7937 2.66217 20.3169 2.66217C20.1439 2.66217 19.971 2.68748 19.7853 2.72967L12.1534 4.53958C11.0986 4.78849 10.4489 5.84744 10.6979 6.89795C10.913 7.80079 11.7146 8.40831 12.6048 8.40831C12.7567 8.40831 12.9086 8.39144 13.0605 8.35347L19.5618 6.81357C19.9837 7.28187 22.0974 9.57273 22.4813 9.97775C19.7938 12.855 17.1064 15.7281 14.4189 18.6054C14.3767 18.6519 14.3388 18.6982 14.3008 18.7446C13.5161 19.7445 13.7566 21.3139 14.9379 21.9088L23.1774 26.1151L18.8994 33.0467C18.313 34.0002 18.6083 35.249 19.5618 35.8396C19.8951 36.0464 20.2621 36.1434 20.6249 36.1434C21.3042 36.1434 21.9707 35.8017 22.3547 35.1815L27.7886 26.3766C28.0882 25.8915 28.1683 25.305 28.0122 24.7608C27.8561 24.2123 27.4806 23.7567 26.9702 23.4993L21.3885 20.66L27.2571 14.3823L31.6869 18.1371C32.0539 18.4493 32.5054 18.6012 32.9526 18.6012C33.4335 18.6012 33.9145 18.424 34.2899 18.078L39.3737 13.3402C40.1669 12.6019 40.2133 11.3615 39.475 10.5684C39.0868 10.1549 38.5637 9.944 38.0406 9.944C37.5638 9.944 37.0829 10.117 36.7074 10.4671L32.9019 14.0068C32.8977 14.011 23.363 5.04163 21.6965 3.33297Z" fill="#A02CFA"&gt;&lt;/path&gt;
&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4 30.5H22.75C23.7442 30.4989 24.6974 30.1035 25.4004 29.4004C26.1035 28.6974 26.4989 27.7442 26.5 26.75V16.75C26.5 16.4185 26.3683 16.1005 26.1339 15.8661C25.8995 15.6317 25.5815 15.5 25.25 15.5C24.9185 15.5 24.6005 15.6317 24.3661 15.8661C24.1317 16.1005 24 16.4185 24 16.75V26.75C23.9997 27.0814 23.8679 27.3992 23.6336 27.6336C23.3992 27.8679 23.0814 27.9997 22.75 28H4C3.66857 27.9997 3.3508 27.8679 3.11645 27.6336C2.88209 27.3992 2.7503 27.0814 2.75 26.75V9.25C2.7503 8.91857 2.88209 8.6008 3.11645 8.36645C3.3508 8.13209 3.66857 8.0003 4 8H15.25C15.5815 8 15.8995 7.8683 16.1339 7.63388C16.3683 7.39946 16.5 7.08152 16.5 6.75C16.5 6.41848 16.3683 6.10054 16.1339 5.86612C15.8995 5.6317 15.5815 5.5 15.25 5.5H4C3.00577 5.50109 2.05258 5.89653 1.34956 6.59956C0.646531 7.30258 0.251092 8.25577 0.25 9.25V26.75C0.251092 27.7442 0.646531 28.6974 1.34956 29.4004C2.05258 30.1035 3.00577 30.4989 4 30.5Z" fill="#EA4989"></path>
											<path d="M25.25 0.5C24.0138 0.5 22.8055 0.866556 21.7777 1.55331C20.7498 2.24007 19.9488 3.21619 19.4757 4.35823C19.0027 5.50027 18.8789 6.75693 19.1201 7.96931C19.3612 9.1817 19.9565 10.2953 20.8306 11.1694C21.7046 12.0435 22.8183 12.6388 24.0307 12.8799C25.243 13.1211 26.4997 12.9973 27.6417 12.5242C28.7838 12.0512 29.7599 11.2501 30.4466 10.2223C31.1334 9.19451 31.5 7.98613 31.5 6.75C31.498 5.093 30.8389 3.50442 29.6672 2.33274C28.4955 1.16106 26.907 0.501952 25.25 0.5ZM25.25 10.5C24.5083 10.5 23.7833 10.2801 23.1666 9.86801C22.5499 9.45596 22.0692 8.87029 21.7854 8.18506C21.5016 7.49984 21.4273 6.74584 21.572 6.01841C21.7167 5.29098 22.0739 4.6228 22.5983 4.09835C23.1228 3.5739 23.7909 3.21675 24.5184 3.07206C25.2458 2.92736 25.9998 3.00162 26.685 3.28545C27.3702 3.56928 27.9559 4.04993 28.368 4.66661C28.78 5.2833 29 6.00832 29 6.75C28.9989 7.74423 28.6034 8.69742 27.9004 9.40044C27.1974 10.1035 26.2442 10.4989 25.25 10.5Z" fill="#EA4989"></path>
											<path d="M6.5 13H12.75C13.0815 13 13.3995 12.8683 13.6339 12.6339C13.8683 12.3995 14 12.0815 14 11.75C14 11.4185 13.8683 11.1005 13.6339 10.8661C13.3995 10.6317 13.0815 10.5 12.75 10.5H6.5C6.16848 10.5 5.85054 10.6317 5.61612 10.8661C5.3817 11.1005 5.25 11.4185 5.25 11.75C5.25 12.0815 5.3817 12.3995 5.61612 12.6339C5.85054 12.8683 6.16848 13 6.5 13Z" fill="#EA4989"></path>
											<path d="M5.25 16.75C5.25 17.0815 5.3817 17.3995 5.61612 17.6339C5.85054 17.8683 6.16848 18 6.5 18H17.75C18.0815 18 18.3995 17.8683 18.6339 17.6339C18.8683 17.3995 19 17.0815 19 16.75C19 16.4185 18.8683 16.1005 18.6339 15.8661C18.3995 15.6317 18.0815 15.5 17.75 15.5H6.5C6.16848 15.5 5.85054 15.6317 5.61612 15.8661C5.3817 16.1005 5.25 16.4185 5.25 16.75Z" fill="#EA4989"></path>
										</svg>
									</div>
									<div class="svg-classname">order.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-33">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-33">order.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="images/iconly/bulk/order.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-33">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-33">order.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M4 30.5H22.75C23.7442 30.4989 24.6974 30.1035 25.4004 29.4004C26.1035 28.6974 26.4989 27.7442 26.5 26.75V16.75C26.5 16.4185 26.3683 16.1005 26.1339 15.8661C25.8995 15.6317 25.5815 15.5 25.25 15.5C24.9185 15.5 24.6005 15.6317 24.3661 15.8661C24.1317 16.1005 24 16.4185 24 16.75V26.75C23.9997 27.0814 23.8679 27.3992 23.6336 27.6336C23.3992 27.8679 23.0814 27.9997 22.75 28H4C3.66857 27.9997 3.3508 27.8679 3.11645 27.6336C2.88209 27.3992 2.7503 27.0814 2.75 26.75V9.25C2.7503 8.91857 2.88209 8.6008 3.11645 8.36645C3.3508 8.13209 3.66857 8.0003 4 8H15.25C15.5815 8 15.8995 7.8683 16.1339 7.63388C16.3683 7.39946 16.5 7.08152 16.5 6.75C16.5 6.41848 16.3683 6.10054 16.1339 5.86612C15.8995 5.6317 15.5815 5.5 15.25 5.5H4C3.00577 5.50109 2.05258 5.89653 1.34956 6.59956C0.646531 7.30258 0.251092 8.25577 0.25 9.25V26.75C0.251092 27.7442 0.646531 28.6974 1.34956 29.4004C2.05258 30.1035 3.00577 30.4989 4 30.5Z" fill="#EA4989"&gt;&lt;/path&gt;
&lt;path d="M25.25 0.5C24.0138 0.5 22.8055 0.866556 21.7777 1.55331C20.7498 2.24007 19.9488 3.21619 19.4757 4.35823C19.0027 5.50027 18.8789 6.75693 19.1201 7.96931C19.3612 9.1817 19.9565 10.2953 20.8306 11.1694C21.7046 12.0435 22.8183 12.6388 24.0307 12.8799C25.243 13.1211 26.4997 12.9973 27.6417 12.5242C28.7838 12.0512 29.7599 11.2501 30.4466 10.2223C31.1334 9.19451 31.5 7.98613 31.5 6.75C31.498 5.093 30.8389 3.50442 29.6672 2.33274C28.4955 1.16106 26.907 0.501952 25.25 0.5ZM25.25 10.5C24.5083 10.5 23.7833 10.2801 23.1666 9.86801C22.5499 9.45596 22.0692 8.87029 21.7854 8.18506C21.5016 7.49984 21.4273 6.74584 21.572 6.01841C21.7167 5.29098 22.0739 4.6228 22.5983 4.09835C23.1228 3.5739 23.7909 3.21675 24.5184 3.07206C25.2458 2.92736 25.9998 3.00162 26.685 3.28545C27.3702 3.56928 27.9559 4.04993 28.368 4.66661C28.78 5.2833 29 6.00832 29 6.75C28.9989 7.74423 28.6034 8.69742 27.9004 9.40044C27.1974 10.1035 26.2442 10.4989 25.25 10.5Z" fill="#EA4989"&gt;&lt;/path&gt;
&lt;path d="M6.5 13H12.75C13.0815 13 13.3995 12.8683 13.6339 12.6339C13.8683 12.3995 14 12.0815 14 11.75C14 11.4185 13.8683 11.1005 13.6339 10.8661C13.3995 10.6317 13.0815 10.5 12.75 10.5H6.5C6.16848 10.5 5.85054 10.6317 5.61612 10.8661C5.3817 11.1005 5.25 11.4185 5.25 11.75C5.25 12.0815 5.3817 12.3995 5.61612 12.6339C5.85054 12.8683 6.16848 13 6.5 13Z" fill="#EA4989"&gt;&lt;/path&gt;
&lt;path d="M5.25 16.75C5.25 17.0815 5.3817 17.3995 5.61612 17.6339C5.85054 17.8683 6.16848 18 6.5 18H17.75C18.0815 18 18.3995 17.8683 18.6339 17.6339C18.8683 17.3995 19 17.0815 19 16.75C19 16.4185 18.8683 16.1005 18.6339 15.8661C18.3995 15.6317 18.0815 15.5 17.75 15.5H6.5C6.16848 15.5 5.85054 15.6317 5.61612 15.8661C5.3817 16.1005 5.25 16.4185 5.25 16.75Z" fill="#EA4989"&gt;&lt;/path&gt;
&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- yogo -->
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18.0977 7.90402L9.78535 16.7845C9.17929 17.6683 9.40656 18.872 10.2862 19.4738L18.6574 25.2104V30.787C18.6574 31.8476 19.4992 32.7357 20.5598 32.7568C21.6456 32.7735 22.5295 31.9023 22.5295 30.8207V24.1961C22.5295 23.5564 22.2138 22.9588 21.6877 22.601L16.3174 18.9184L20.8376 14.1246L23.1524 19.3982C23.4596 20.101 24.1582 20.5556 24.9243 20.5556H31.974C33.0346 20.5556 33.9226 19.7139 33.9437 18.6532C33.9605 17.5674 33.0893 16.6835 32.0076 16.6835H26.1953C25.4293 14.9411 24.6128 13.2155 23.9015 11.4478C23.5395 10.5556 23.3376 10.1684 22.6726 9.55389C22.5379 9.42763 21.5993 8.56904 20.7618 7.80305C19.9916 7.10435 18.8047 7.15065 18.0977 7.90402Z" fill="#FF3282"></path>
										<path d="M26.0269 8.87206C28.4769 8.87206 30.463 6.88598 30.463 4.43603C30.463 1.98608 28.4769 0 26.0269 0C23.577 0 21.5909 1.98608 21.5909 4.43603C21.5909 6.88598 23.577 8.87206 26.0269 8.87206Z" fill="#FF3282"></path>
										<path d="M8.16498 38.388C12.6744 38.388 16.33 34.7325 16.33 30.2231C16.33 25.7137 12.6744 22.0581 8.16498 22.0581C3.65559 22.0581 0 25.7137 0 30.2231C0 34.7325 3.65559 38.388 8.16498 38.388Z" fill="#FF3282"></path>
										<path d="M31.835 38.388C36.3444 38.388 40 34.7325 40 30.2231C40 25.7137 36.3444 22.0581 31.835 22.0581C27.3256 22.0581 23.67 25.7137 23.67 30.2231C23.67 34.7325 27.3256 38.388 31.835 38.388Z" fill="#FF3282"></path>
									</svg>
								</div>
								<div class="svg-classname">cycling.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-34" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-34" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-34" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-34">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-34">cycling.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/cycling.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-34" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-34">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-34">cycling.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M18.0977 7.90402L9.78535 16.7845C9.17929 17.6683 9.40656 18.872 10.2862 19.4738L18.6574 25.2104V30.787C18.6574 31.8476 19.4992 32.7357 20.5598 32.7568C21.6456 32.7735 22.5295 31.9023 22.5295 30.8207V24.1961C22.5295 23.5564 22.2138 22.9588 21.6877 22.601L16.3174 18.9184L20.8376 14.1246L23.1524 19.3982C23.4596 20.101 24.1582 20.5556 24.9243 20.5556H31.974C33.0346 20.5556 33.9226 19.7139 33.9437 18.6532C33.9605 17.5674 33.0893 16.6835 32.0076 16.6835H26.1953C25.4293 14.9411 24.6128 13.2155 23.9015 11.4478C23.5395 10.5556 23.3376 10.1684 22.6726 9.55389C22.5379 9.42763 21.5993 8.56904 20.7618 7.80305C19.9916 7.10435 18.8047 7.15065 18.0977 7.90402Z" fill="#FF3282"&gt;&lt;/path&gt;
&lt;path d="M26.0269 8.87206C28.4769 8.87206 30.463 6.88598 30.463 4.43603C30.463 1.98608 28.4769 0 26.0269 0C23.577 0 21.5909 1.98608 21.5909 4.43603C21.5909 6.88598 23.577 8.87206 26.0269 8.87206Z" fill="#FF3282"&gt;&lt;/path&gt;
&lt;path d="M8.16498 38.388C12.6744 38.388 16.33 34.7325 16.33 30.2231C16.33 25.7137 12.6744 22.0581 8.16498 22.0581C3.65559 22.0581 0 25.7137 0 30.2231C0 34.7325 3.65559 38.388 8.16498 38.388Z" fill="#FF3282"&gt;&lt;/path&gt;
&lt;path d="M31.835 38.388C36.3444 38.388 40 34.7325 40 30.2231C40 25.7137 36.3444 22.0581 31.835 22.0581C27.3256 22.0581 23.67 25.7137 23.67 30.2231C23.67 34.7325 27.3256 38.388 31.835 38.388Z" fill="#FF3282"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"></path>
										<path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"></path>
										<path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"></path>
										<path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"></path>
										<path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"></path>
									</svg>
								</div>
								<div class="svg-classname">yoga.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-35" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-35" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-35" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-35">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-35">yoga.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/yoga.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-35" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-35">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-35">yoga.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"&gt;&lt;/path&gt;
&lt;path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"&gt;&lt;/path&gt;
&lt;path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"&gt;&lt;/path&gt;
&lt;path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"&gt;&lt;/path&gt;
&lt;path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"&gt;&lt;/path&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
								</svg>
								</div>
								<div class="svg-classname">star.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-36" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-36" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-36" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-36">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-36">star.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/star.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-36" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-36">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-36">star.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="39" height="74" viewBox="0 0 39 74" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M30.5325 18.9448C27.7921 15.402 23.5761 13.6 18.0001 13.6C12.4241 13.6 8.2081 15.402 5.4677 18.9448C0.082099 25.908 2.8701 36.9376 2.9925 37.4C3.34508 38.8603 4.81456 39.7583 6.27486 39.4057C7.71986 39.0568 8.61712 37.6123 8.2897 36.1624C8.2897 36.0808 6.6985 27.8596 10.3297 23.3988L10.5269 23.1676V36.6588L9.1669 65.1508C9.0921 66.6164 10.1934 67.8771 11.6557 68H11.8801C13.2659 68.0095 14.4372 66.9758 14.6001 65.5996L17.5309 40.8H18.4625L21.4001 65.5996C21.563 66.9758 22.7343 68.0095 24.1201 68H24.3513C25.8136 67.8771 26.9149 66.6164 26.8401 65.1508L25.4801 36.6588V23.1744L25.6637 23.392C29.3357 27.88 27.7037 36.074 27.7037 36.176C27.3657 37.6407 28.279 39.1021 29.7437 39.44C31.2084 39.778 32.6697 38.8647 33.0077 37.4C33.1301 36.9376 35.9181 25.908 30.5325 18.9448Z" fill="#D8D8D8"></path>
										<path d="M18.0001 12.24C21.3801 12.24 24.1201 9.49998 24.1201 6.12C24.1201 2.74002 21.3801 0 18.0001 0C14.6201 0 11.8801 2.74002 11.8801 6.12C11.8801 9.49998 14.6201 12.24 18.0001 12.24Z" fill="#D8D8D8"></path>
										<mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="19" width="39" height="55">
										<path d="M0 26.0017C0 24.1758 1.37483 22.6428 3.18995 22.4448L3.26935 22.4361C4.23614 22.3306 5.1115 21.8163 5.67413 21.023L6.13877 20.3679C7.48483 18.4701 10.3941 18.7986 11.2832 20.9487L11.4217 21.2836C12.2534 23.2951 14.9783 23.5955 16.2283 21.8136C17.323 20.253 19.6329 20.247 20.7357 21.8019L21.5961 23.0149C22.4113 24.1642 23.7948 24.7693 25.1921 24.5877L28.4801 24.1603C34.0567 23.4354 39 27.7777 39 33.4012V54.5C39 65.2695 30.2696 74 19.5 74C8.73045 74 0 65.2696 0 54.5V26.0017Z" fill="#C4C4C4"></path>
										</mask>
										<g mask="url(#mask0)">
										<path d="M30.5324 18.9448C27.792 15.402 23.576 13.6 18 13.6C12.424 13.6 8.20798 15.402 5.46758 18.9448C0.0819769 25.908 2.86998 36.9376 2.99238 37.4C3.34496 38.8603 4.81444 39.7583 6.27474 39.4057C7.71974 39.0568 8.617 37.6123 8.28958 36.1624C8.28958 36.0808 6.69838 27.8596 10.3296 23.3988L10.5268 23.1676V36.6588L9.16678 65.1508C9.09198 66.6164 10.1932 67.8771 11.6556 68H11.88C13.2658 68.0095 14.4371 66.9758 14.6 65.5996L17.5308 40.8H18.4624L21.4 65.5996C21.5628 66.9758 22.7341 68.0095 24.12 68H24.3512C25.8135 67.8771 26.9148 66.6164 26.84 65.1508L25.48 36.6588V23.1744L25.6636 23.392C29.3356 27.88 27.7036 36.074 27.7036 36.176C27.3656 37.6407 28.2789 39.1021 29.7436 39.44C31.2083 39.778 32.6696 38.8647 33.0076 37.4C33.13 36.9376 35.918 25.908 30.5324 18.9448Z" fill="#0B2A97"></path>
										<path d="M17.9999 12.24C21.3799 12.24 24.12 9.49998 24.12 6.12C24.12 2.74002 21.3799 0 17.9999 0C14.62 0 11.8799 2.74002 11.8799 6.12C11.8799 9.49998 14.62 12.24 17.9999 12.24Z" fill="#0B2A97"></path>
										</g>
									</svg>
								</div>
								<div class="svg-classname">body.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-37" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-37" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-37" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-37">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-37">body.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/body.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-37" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-37">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-37">body.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="39" height="74" viewBox="0 0 39 74" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M30.5325 18.9448C27.7921 15.402 23.5761 13.6 18.0001 13.6C12.4241 13.6 8.2081 15.402 5.4677 18.9448C0.082099 25.908 2.8701 36.9376 2.9925 37.4C3.34508 38.8603 4.81456 39.7583 6.27486 39.4057C7.71986 39.0568 8.61712 37.6123 8.2897 36.1624C8.2897 36.0808 6.6985 27.8596 10.3297 23.3988L10.5269 23.1676V36.6588L9.1669 65.1508C9.0921 66.6164 10.1934 67.8771 11.6557 68H11.8801C13.2659 68.0095 14.4372 66.9758 14.6001 65.5996L17.5309 40.8H18.4625L21.4001 65.5996C21.563 66.9758 22.7343 68.0095 24.1201 68H24.3513C25.8136 67.8771 26.9149 66.6164 26.8401 65.1508L25.4801 36.6588V23.1744L25.6637 23.392C29.3357 27.88 27.7037 36.074 27.7037 36.176C27.3657 37.6407 28.279 39.1021 29.7437 39.44C31.2084 39.778 32.6697 38.8647 33.0077 37.4C33.1301 36.9376 35.9181 25.908 30.5325 18.9448Z" fill="#D8D8D8"&gt;&lt;/path&gt;
&lt;path d="M18.0001 12.24C21.3801 12.24 24.1201 9.49998 24.1201 6.12C24.1201 2.74002 21.3801 0 18.0001 0C14.6201 0 11.8801 2.74002 11.8801 6.12C11.8801 9.49998 14.6201 12.24 18.0001 12.24Z" fill="#D8D8D8"&gt;&lt;/path&gt;
&lt;mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="19" width="39" height="55"&gt;
&lt;path d="M0 26.0017C0 24.1758 1.37483 22.6428 3.18995 22.4448L3.26935 22.4361C4.23614 22.3306 5.1115 21.8163 5.67413 21.023L6.13877 20.3679C7.48483 18.4701 10.3941 18.7986 11.2832 20.9487L11.4217 21.2836C12.2534 23.2951 14.9783 23.5955 16.2283 21.8136C17.323 20.253 19.6329 20.247 20.7357 21.8019L21.5961 23.0149C22.4113 24.1642 23.7948 24.7693 25.1921 24.5877L28.4801 24.1603C34.0567 23.4354 39 27.7777 39 33.4012V54.5C39 65.2695 30.2696 74 19.5 74C8.73045 74 0 65.2696 0 54.5V26.0017Z" fill="#C4C4C4"&gt;&lt;/path&gt;
&lt;/mask&gt;
&lt;g mask="url(#mask0)"&gt;
&lt;path d="M30.5324 18.9448C27.792 15.402 23.576 13.6 18 13.6C12.424 13.6 8.20798 15.402 5.46758 18.9448C0.0819769 25.908 2.86998 36.9376 2.99238 37.4C3.34496 38.8603 4.81444 39.7583 6.27474 39.4057C7.71974 39.0568 8.617 37.6123 8.28958 36.1624C8.28958 36.0808 6.69838 27.8596 10.3296 23.3988L10.5268 23.1676V36.6588L9.16678 65.1508C9.09198 66.6164 10.1932 67.8771 11.6556 68H11.88C13.2658 68.0095 14.4371 66.9758 14.6 65.5996L17.5308 40.8H18.4624L21.4 65.5996C21.5628 66.9758 22.7341 68.0095 24.12 68H24.3512C25.8135 67.8771 26.9148 66.6164 26.84 65.1508L25.48 36.6588V23.1744L25.6636 23.392C29.3356 27.88 27.7036 36.074 27.7036 36.176C27.3656 37.6407 28.2789 39.1021 29.7436 39.44C31.2083 39.778 32.6696 38.8647 33.0076 37.4C33.13 36.9376 35.918 25.908 30.5324 18.9448Z" fill="#0B2A97"&gt;&lt;/path&gt;
&lt;path d="M17.9999 12.24C21.3799 12.24 24.12 9.49998 24.12 6.12C24.12 2.74002 21.3799 0 17.9999 0C14.62 0 11.8799 2.74002 11.8799 6.12C11.8799 9.49998 14.62 12.24 17.9999 12.24Z" fill="#0B2A97"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip8)">
										<path d="M22.2363 3.06982C22.0806 2.91507 21.8978 2.83724 21.6855 2.83724C21.58 2.83724 21.3576 2.92382 21.0205 3.09469C20.682 3.26601 20.3218 3.45668 19.9442 3.66945C19.5651 3.88084 19.1166 4.07243 18.5985 4.24375C18.0813 4.41461 17.6028 4.5012 17.162 4.5012C16.7544 4.5012 16.3961 4.42382 16.0862 4.26862C15.0596 3.78781 14.1662 3.42904 13.4086 3.19232C12.6505 2.95606 11.8353 2.83724 10.9626 2.83724C9.45569 2.83724 7.73923 3.32726 5.81506 4.30546C5.41807 4.5035 5.13346 4.65686 4.94924 4.76923L4.7664 3.42858C5.17951 3.06982 5.44617 2.5471 5.44617 1.95714C5.44617 0.876234 4.57021 0.000274694 3.48931 0.000274681C2.4084 0.000274669 1.53198 0.876234 1.53198 1.95714C1.53198 2.66223 1.90871 3.27522 2.46781 3.61971L5.11135 23.0041C5.1901 23.5812 5.68381 23.9998 6.25074 23.9998C6.30232 23.9998 6.35482 23.9957 6.40779 23.9901C7.03782 23.9036 7.47902 23.3237 7.3929 22.6937L6.33042 14.9031C8.25826 13.9465 9.9259 13.4644 11.3287 13.4644C11.9242 13.4644 12.505 13.5523 13.071 13.7329C13.6374 13.9129 14.109 14.1073 14.4835 14.3187C14.8574 14.531 15.3 14.7272 15.8098 14.9054C16.3197 15.085 16.823 15.1748 17.32 15.1748C18.5754 15.1748 20.0782 14.7018 21.8315 13.7563C22.0516 13.6421 22.2124 13.5297 22.3146 13.4201C22.4168 13.3101 22.4675 13.153 22.4675 12.9499L22.4675 3.62017C22.4675 3.40878 22.3906 3.22502 22.2363 3.06982Z" fill="#67BE65"></path>
										</g>
										<defs>
										<clipPath id="clip8">
										<rect width="24" height="24" fill="white"></rect>
										</clipPath>
										</defs>
									</svg>

								</div>
								<div class="svg-classname">flag.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-38" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-38" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-38" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-38">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-38">flag.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/flag.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-38" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-38">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-38">flag.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;g clip-path="url(#clip8)"&gt;
&lt;path d="M22.2363 3.06982C22.0806 2.91507 21.8978 2.83724 21.6855 2.83724C21.58 2.83724 21.3576 2.92382 21.0205 3.09469C20.682 3.26601 20.3218 3.45668 19.9442 3.66945C19.5651 3.88084 19.1166 4.07243 18.5985 4.24375C18.0813 4.41461 17.6028 4.5012 17.162 4.5012C16.7544 4.5012 16.3961 4.42382 16.0862 4.26862C15.0596 3.78781 14.1662 3.42904 13.4086 3.19232C12.6505 2.95606 11.8353 2.83724 10.9626 2.83724C9.45569 2.83724 7.73923 3.32726 5.81506 4.30546C5.41807 4.5035 5.13346 4.65686 4.94924 4.76923L4.7664 3.42858C5.17951 3.06982 5.44617 2.5471 5.44617 1.95714C5.44617 0.876234 4.57021 0.000274694 3.48931 0.000274681C2.4084 0.000274669 1.53198 0.876234 1.53198 1.95714C1.53198 2.66223 1.90871 3.27522 2.46781 3.61971L5.11135 23.0041C5.1901 23.5812 5.68381 23.9998 6.25074 23.9998C6.30232 23.9998 6.35482 23.9957 6.40779 23.9901C7.03782 23.9036 7.47902 23.3237 7.3929 22.6937L6.33042 14.9031C8.25826 13.9465 9.9259 13.4644 11.3287 13.4644C11.9242 13.4644 12.505 13.5523 13.071 13.7329C13.6374 13.9129 14.109 14.1073 14.4835 14.3187C14.8574 14.531 15.3 14.7272 15.8098 14.9054C16.3197 15.085 16.823 15.1748 17.32 15.1748C18.5754 15.1748 20.0782 14.7018 21.8315 13.7563C22.0516 13.6421 22.2124 13.5297 22.3146 13.4201C22.4168 13.3101 22.4675 13.153 22.4675 12.9499L22.4675 3.62017C22.4675 3.40878 22.3906 3.22502 22.2363 3.06982Z" fill="#67BE65"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;defs&gt;
&lt;clipPath id="clip8"&gt;
&lt;rect width="24" height="24" fill="white"&gt;&lt;/rect&gt;
&lt;/clipPath&gt;
&lt;/defs&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
								<div class="svg-classname">Call.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-39" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-39" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-39" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-39">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-39">Call.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/Call.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-39" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-39">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-39">Call.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.353 2.5C18.054 2.911 20.978 5.831 21.393 9.532" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M14.353 6.04303C16.124 6.38703 17.508 7.77203 17.853 9.54303" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>

								</div>
								<div class="svg-classname">Calling.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-40" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-40" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-40" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-40">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-40">Calling.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="images/iconly/bulk/Calling.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-40" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-40">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-40">Calling.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M14.353 2.5C18.054 2.911 20.978 5.831 21.393 9.532" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M14.353 6.04303C16.124 6.38703 17.508 7.77203 17.853 9.54303" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#0b2a97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
        <!--**********************************
    Footer start
***********************************-->
<footer class="footer">
    <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">Vertical Media</a> 2023</p>
    </div>
</footer>
<!--**********************************
    Footer end
***********************************-->        
		
	</div>
			<script src="public/assets/vendor/global/global.min.js"></script>
			<script src="public/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
		

		
			<script src="public/assets/js/custom.min.js"></script>
			<script src="public/assets/js/deznav-init.js"></script>
		

    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/svg_icons by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:58 GMT -->
</html>