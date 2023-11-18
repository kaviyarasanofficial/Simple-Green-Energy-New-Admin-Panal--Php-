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
    
    
<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/feather_icons by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:58 GMT -->
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
					Feather Icons					</div>
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
                    <li><a href="content.php">Content</a></li>
                    <li><a href="add_content.php">Add Content</a></li>
                    <li><a href="menu.php">Menus</a></li>
                    <li><a href="email_template.php">Email Template</a></li>
                    <li><a href="add_email.php">Add Email</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="add_blog.php">Add Blog</a></li>
                    <li><a href="blog_category.php">Blog Category</a></li>	
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Gas Engineers</span>
                </a>
                <!-- <ul aria-expanded="false">
                    <li><a href="flot.php">Flot</a></li>
					<li><a href="morris.php">Morris</a></li> 
					<li><a href="chartjs.php">Chartjs</a></li>
					<li><a href="chartist.php">Chartist</a></li>
					<li><a href="sparkline.php">Sparkline</a></li>
					<li><a href="peity.php">Peity</a></li>
                </ul> -->
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Installation Team
</span>
                </a>
                <!-- <ul aria-expanded="false">
                    <li><a href="accordion.php">Accordion</a></li>
					<li><a href="alert.php">Alert</a></li>
					<li><a href="badge.php">Badge</a></li>
					<li><a href="button.php">Button</a></li>
					<li><a href="modal.php">Modal</a></li>
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
                    <li><a href="grid.php">Grid</a></li>

                </ul> -->
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text"> Insulation Team
</span>
                </a>
                <!-- <ul aria-expanded="false">
                    <li><a href="select2.php">Select 2</a></li> 
					<li><a href="nestable.php">Nestable</a></li>
					<li><a href="noui_slider.php">Noui Slider</a></li>
					<li><a href="sweetalert.php">Sweet Alert</a></li>
					<li><a href="toastr.php">Toastr</a></li>
					<li><a href="map_jqvmap.php">Jqv Map</a></li>
					<li><a href="lightgallery.php">Light Gallery</a></li>
                </ul> -->
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Sub Admins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form_element.php">Form Elements</a></li>
                    <li><a href="form_wizard.php">Wizard</a></li>   
                    <li><a href="form_editor.php">Editor</a></li>
					<li><a href="form_pickers.php">Pickers</a></li>
					<li><a href="form_validation_jquery.php">Form Validate</a></li>
                </ul>
            </li>
			<li><a href="widget_basic.php" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Feedback</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table_bootstrap.php">Bootstrap</a></li>
					<li><a href="table_datatable.php">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
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
            </li>
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
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Feather icons</a></li>
			</ol>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card p-0">
					<div class="card-header"><h4 class="text-black mb-0">Feather Icons</h4></div>
					<div class="card-body svg-area px-3">
						<div class="row">
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
									</div>
									<div class="svg-classname">activity.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
										
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg">activity.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/activity.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg">activity.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre> &lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"/&gt;&lt;polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/&gt;&lt;/polyline/&gt;&lt;/svg/&gt;</pre>
</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- start -->
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
									</div>
									<div class="svg-classname">airplay.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
											<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
										
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-1">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-1">airplay.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/airplay.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-1">airplay.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"&gt;&lt;path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"&gt;&lt;/path&gt;&lt;polygon points="12 15 17 21 7 21 12 15"&gt;&lt;/polygon&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
									</div>
									<div class="svg-classname">alert-circle.svg</div>
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
													<pre>&lt;img src="icons/feather/alert-circle.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-2">alert-circle.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">&lt;circle cx="12" cy="12" r="10">&lt;/circle>&lt;line x1="12" y1="8" x2="12" y2="12">&lt;/line>&lt;line x1="12" y1="16" x2="12.01" y2="16">&lt;/line>&lt;/svg>
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
									</div>
									<div class="svg-classname">alert-octagon.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-23">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-23">alert-octagon.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/alert-octagon.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-23">alert-octagon.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="12" y1="8" x2="12" y2="12"&gt;&lt;/line&gt;&lt;line x1="12" y1="16" x2="12.01" y2="16"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
									</div>
									<div class="svg-classname">alert-triangle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-24">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-24">alert-triangle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/alert-triangle.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-24">alert-triangle.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"&gt;&lt;path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"&gt;&lt;/path&gt;&lt;line x1="12" y1="9" x2="12" y2="13"&gt;&lt;/line&gt;&lt;line x1="12" y1="17" x2="12.01" y2="17"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-center"><line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line></svg>
									</div>
									<div class="svg-classname">align-center.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-25">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-25">align-center.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
														<pre>&lt;img src="icons/feather/align-center.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-25">align-center.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-center"&gt;&lt;line x1="18" y1="10" x2="6" y2="10"&gt;&lt;/line&gt;&lt;line x1="21" y1="6" x2="3" y2="6"&gt;&lt;/line&gt;&lt;line x1="21" y1="14" x2="3" y2="14"&gt;&lt;/line&gt;&lt;line x1="18" y1="18" x2="6" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg>
									</div>
									<div class="svg-classname">align-justify.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-26">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-26">align-justify.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/align-justify.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-26">align-justify.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"&gt;&lt;line x1="21" y1="10" x2="3" y2="10"&gt;&lt;/line&gt;&lt;line x1="21" y1="6" x2="3" y2="6"&gt;&lt;/line&gt;&lt;line x1="21" y1="14" x2="3" y2="14"&gt;&lt;/line&gt;&lt;line x1="21" y1="18" x2="3" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg>
									</div>
									<div class="svg-classname">align-left.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
										
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-27">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-27">align-left.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/align-left.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-27">align-left.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"&gt;&lt;line x1="17" y1="10" x2="3" y2="10"&gt;&lt;/line&gt;&lt;line x1="21" y1="6" x2="3" y2="6"&gt;&lt;/line&gt;&lt;line x1="21" y1="14" x2="3" y2="14"&gt;&lt;/line&gt;&lt;line x1="17" y1="18" x2="3" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-right"><line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line></svg>
									</div>
									<div class="svg-classname">align-right.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-28">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-28">align-right.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/align-right.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-28">align-right.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-right"&gt;&lt;line x1="21" y1="10" x2="7" y2="10"&gt;&lt;/line&gt;&lt;line x1="21" y1="6" x2="3" y2="6"&gt;&lt;/line&gt;&lt;line x1="21" y1="14" x2="3" y2="14"&gt;&lt;/line&gt;&lt;line x1="21" y1="18" x2="7" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-anchor"><circle cx="12" cy="5" r="3"></circle><line x1="12" y1="22" x2="12" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg>
									</div>
									<div class="svg-classname">anchor.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-29">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-29">anchor.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/anchor.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-29">anchor.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-anchor"&gt;&lt;circle cx="12" cy="5" r="3"&gt;&lt;/circle&gt;&lt;line x1="12" y1="22" x2="12" y2="8"&gt;&lt;/line&gt;&lt;path d="M5 12H2a10 10 0 0 0 20 0h-3"&gt;&lt;/path&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-aperture"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
									</div>
									<div class="svg-classname">aperture.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-30">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-30">aperture.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/aperture.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-30">aperture.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-aperture"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;line x1="14.31" y1="8" x2="20.05" y2="17.94"&gt;&lt;/line&gt;&lt;line x1="9.69" y1="8" x2="21.17" y2="8"&gt;&lt;/line&gt;&lt;line x1="7.38" y1="12" x2="13.12" y2="2.06"&gt;&lt;/line&gt;&lt;line x1="9.69" y1="16" x2="3.95" y2="6.06"&gt;&lt;/line&gt;&lt;line x1="14.31" y1="16" x2="2.83" y2="16"&gt;&lt;/line&gt;&lt;line x1="16.62" y1="12" x2="10.88" y2="21.94"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
									</div>
									<div class="svg-classname">archive.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-31">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-31">archive.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/archive.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-31">archive.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"&gt;&lt;polyline points="21 8 21 21 3 21 3 8"&gt;&lt;/polyline&gt;&lt;rect x="1" y="3" width="22" height="5"&gt;&lt;/rect&gt;&lt;line x1="10" y1="12" x2="14" y2="12"&gt;&lt;/line&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
									</div>
									<div class="svg-classname">arrow-down.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-32">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-32">arrow-down.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/arrow-down.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-32">arrow-down.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"&gt;&lt;line x1="12" y1="5" x2="12" y2="19"&gt;&lt;/line&gt;&lt;polyline points="19 12 12 19 5 12"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line></svg>
									</div>
									<div class="svg-classname">arrow-down-circle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-33">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-33">arrow-down-circle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/arrow-down-circle.svg"/&gt;</pre>
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
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-33">arrow-down-circle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;polyline points="8 12 12 16 16 12"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="8" x2="12" y2="16"&gt;&lt;/line&gt;&lt;/svg&gt;
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-left"><line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline></svg>
								</div>
								<div class="svg-classname">arrow-down-left.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-34" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-34" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-34" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-34">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-34">arrow-down-left.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-down-left.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-34">arrow-down-left.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-left"&gt;&lt;line x1="17" y1="7" x2="7" y2="17"&gt;&lt;/line&gt;&lt;polyline points="17 17 7 17 7 7"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg>
								</div>
								<div class="svg-classname">arrow-down-right.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-35" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-35" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-35" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-35">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-35">arrow-down-right.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-down-right.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-35">arrow-down-right.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"&gt;&lt;line x1="7" y1="7" x2="17" y2="17"&gt;&lt;/line&gt;&lt;polyline points="17 7 17 17 7 17"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
								</div>
								<div class="svg-classname">arrow-left.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-36" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-36" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-36" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-36">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-36">arrow-left.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-left.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-36">arrow-left.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"&gt;&lt;line x1="19" y1="12" x2="5" y2="12"&gt;&lt;/line&gt;&lt;polyline points="12 19 5 12 12 5"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line></svg>
								</div>
								<div class="svg-classname">arrow-left-circle.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-37" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-37" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-37" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-37">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-37">arrow-left-circle.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-left-circle.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-37">arrow-left-circle.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;polyline points="12 8 8 12 12 16"&gt;&lt;/polyline&gt;&lt;line x1="16" y1="12" x2="8" y2="12"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>

								</div>
								<div class="svg-classname">arrow-right.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-38" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-38" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-38" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-38">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-38">arrow-right.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-right.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-38">arrow-right.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-right"&gt;&lt;line x1="21" y1="10" x2="7" y2="10"&gt;&lt;/line&gt;&lt;line x1="21" y1="6" x2="3" y2="6"&gt;&lt;/line&gt;&lt;line x1="21" y1="14" x2="3" y2="14"&gt;&lt;/line&gt;&lt;line x1="21" y1="18" x2="7" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;

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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
								</div>
								<div class="svg-classname">arrow-right-circle.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-39" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-39" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-39" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-39">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-39">arrow-right-circle.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-right-circle.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-39">arrow-right-circle.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;polyline points="12 16 16 12 12 8"&gt;&lt;/polyline&gt;&lt;line x1="8" y1="12" x2="16" y2="12"&gt;&lt;/line&gt;&lt;/svg&gt;

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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
								</div>
								<div class="svg-classname">arrow-up.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-40" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-40" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-40" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-40">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-40">arrow-up.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/arrow-up.svg"/&gt;</pre>
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
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-40">arrow-up.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"&gt;&lt;line x1="12" y1="19" x2="12" y2="5"&gt;&lt;/line&gt;&lt;polyline points="5 12 12 5 19 12"&gt;&lt;/polyline&gt;&lt;/svg&gt;

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
							<!-- starts -->
							<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.3149 3.74988L15.3149 9.74988" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15.3149 3.74988L21.3149 9.74988" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0315 12.4724C15.0205 16.4604 15.9254 11.8467 18.4653 14.3848C20.9138 16.8328 22.3222 17.3232 19.2188 20.4247C18.8302 20.737 16.3613 24.4943 7.68447 15.8197C-0.993406 7.144 2.76157 4.67244 3.07394 4.28395C6.18377 1.17385 6.66682 2.58938 9.11539 5.03733C11.6541 7.5765 7.04254 8.48441 11.0315 12.4724Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									</div>
									<div class="svg-classname">arrow-up-circle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-41" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-41" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-41" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-41">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-41">arrow-up-circle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/arrow-up-circle.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-41" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-41">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-41">arrow-up-circle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;polyline points="16 12 12 8 8 12"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="16" x2="12" y2="8"&gt;&lt;/line&gt;&lt;/svg&gt;
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
											<path d="M6.58532 14.2053C0.153838 6.91814 3.36958 4.73951 3.65413 4.38535C6.72284 1.27303 7.19885 2.68967 9.6096 5.1366C11.6406 7.20791 9.00771 8.19527 10.0867 10.6529" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M12.4904 13.3824C15.7706 16.0762 16.6957 12.2233 19.0192 14.5844C21.4162 17.0313 22.7945 17.525 19.7551 20.6266C19.3977 20.9378 17.0952 24.4687 9.19971 16.7415" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M4.49988 21.5L19.4999 5.49996" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>

									</div>
									<div class="svg-classname">arrow-up-left.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-42" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-42" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-42" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-42">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-42">arrow-up-left.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/arrow-up-left"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-42" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-42">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-42">arrow-up-left.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-left"&gt;&lt;line x1="17" y1="17" x2="7" y2="7"&gt;&lt;/line&gt;&lt;polyline points="7 17 7 7 17 7"&gt;&lt;/polyline&gt;&lt;/svg&gt;

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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>

									</div>
									<div class="svg-classname">arrow-up-right.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-43" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-43" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-43" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-43">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-43">arrow-up-right.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/arrow-up-right.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-43" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-43">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-43">arrow-up-right.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"&gt;&lt;line x1="7" y1="17" x2="17" y2="7"&gt;&lt;/line&gt;&lt;polyline points="7 7 17 7 17 17"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>

									</div>
									<div class="svg-classname">at-sign.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-44" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-44" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-44" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-44">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-44">at-sign.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/at-sign.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-44" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-44">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-44">at-sign.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"&gt;&lt;circle cx="12" cy="12" r="4"&gt;&lt;/circle&gt;&lt;path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"&gt;&lt;/path&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>

									</div>
									<div class="svg-classname">award.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-45" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-45" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-45" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-45">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-45">award.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/award.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-45" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-45">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-45">award.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"&gt;&lt;circle cx="12" cy="8" r="7"&gt;&lt;/circle&gt;&lt;polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>


									</div>
									<div class="svg-classname">bar-chart.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-46" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-46" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-46" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-46">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-46">bar-chart.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bar-chart.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-46" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-46">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-46">bar-chart.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart"&gt;&lt;line x1="12" y1="20" x2="12" y2="10"&gt;&lt;/line&gt;&lt;line x1="18" y1="20" x2="18" y2="4"&gt;&lt;/line&gt;&lt;line x1="6" y1="20" x2="6" y2="16"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>

									</div>
									<div class="svg-classname">bar-chart-2.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-47" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-47" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-47" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-47">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-47">bar-chart-2.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bar-chart-2.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-47" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-47">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-47">bar-chart-2.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"&gt;&lt;line x1="18" y1="20" x2="18" y2="10"&gt;&lt;/line&gt;&lt;line x1="12" y1="20" x2="12" y2="4"&gt;&lt;/line&gt;&lt;line x1="6" y1="20" x2="6" y2="14"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-battery"><rect x="1" y="6" width="18" height="12" rx="2" ry="2"></rect><line x1="23" y1="13" x2="23" y2="11"></line></svg>

									</div>
									<div class="svg-classname">battery.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-48" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-48" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-48" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-48">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-48">battery.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/battery.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-48" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-48">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-48">battery.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-battery"&gt;&lt;rect x="1" y="6" width="18" height="12" rx="2" ry="2"&gt;&lt;/rect&gt;&lt;line x1="23" y1="13" x2="23" y2="11"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-battery-charging"><path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3.19"></path><line x1="23" y1="13" x2="23" y2="11"></line><polyline points="11 6 7 12 13 12 9 18"></polyline></svg>
									</div>
									<div class="svg-classname">battery-charging.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-49" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-49" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-49" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-49">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-49">battery-charging.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/battery-charging.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-49" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-49">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-49">battery-charging.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-battery-charging"&gt;&lt;path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3.19"&gt;&lt;/path&gt;&lt;line x1="23" y1="13" x2="23" y2="11"&gt;&lt;/line&gt;&lt;polyline points="11 6 7 12 13 12 9 18"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>

									</div>
									<div class="svg-classname">bell.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-50" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-50" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-50" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-50">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-50">bell.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bell.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-50" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-50">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-50">bell.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"&gt;&lt;path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"&gt;&lt;/path&gt;&lt;path d="M13.73 21a2 2 0 0 1-3.46 0"&gt;&lt;/path&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell-off"><path d="M13.73 21a2 2 0 0 1-3.46 0"></path><path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path><path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path><path d="M18 8a6 6 0 0 0-9.33-5"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>

									</div>
									<div class="svg-classname">bell-off.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-51" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-51" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-51" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-51">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-51">bell-off.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bell-off.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-51" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-51">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-51">bell-off.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell-off"&gt;&lt;path d="M13.73 21a2 2 0 0 1-3.46 0"&gt;&lt;/path&gt;&lt;path d="M18.63 13A17.89 17.89 0 0 1 18 8"&gt;&lt;/path&gt;&lt;path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"&gt;&lt;/path&gt;&lt;path d="M18 8a6 6 0 0 0-9.33-5"&gt;&lt;/path&gt;&lt;line x1="1" y1="1" x2="23" y2="23"&gt;&lt;/line&gt;&lt;/svg&gt;                                                                                                                                                 
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bluetooth"><polyline points="6.5 6.5 17.5 17.5 12 23 12 1 17.5 6.5 6.5 17.5"></polyline></svg>
									</div>
									<div class="svg-classname">bluetooth.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-52" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-52" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-52" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-52">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-52">bluetooth.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bluetooth.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-52" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-52">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-52">bluetooth.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bluetooth"&gt;&lt;polyline points="6.5 6.5 17.5 17.5 12 23 12 1 17.5 6.5 6.5 17.5"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bold"><path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path><path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path></svg>
									</div>
									<div class="svg-classname">bold.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-53" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-53" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-53" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-53">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-53">bold.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bold.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-53" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-53">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-53">bold.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bold"&gt;&lt;path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"&gt;&lt;/path&gt;&lt;path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"&gt;&lt;/path&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
									</div>
									<div class="svg-classname">book.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-54" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-54" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-54" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-54">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-54">book.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/book.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-54" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-54">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-54">book.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"&gt;&lt;path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"&gt;&lt;/path&gt;&lt;path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"&gt;&lt;/path&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
									</div>
									<div class="svg-classname">bookmark.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-55" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-55" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-55" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-55">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-55">bookmark.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/bookmark.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-55" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-55">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-55">bookmark.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"&gt;&lt;path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"&gt;&lt;/path&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>

									</div>
									<div class="svg-classname">book-open.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-56" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-56" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-56" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-56">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-56">book-open.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/book-open.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-56" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-56">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-56">book-open.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"&gt;&lt;path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"&gt;&lt;/path&gt;&lt;path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"&gt;&lt;/path&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>

									</div>
									<div class="svg-classname">box.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-57" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-57" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-57" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-57">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-57">box.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/box.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-57" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-57">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-57">box.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"&gt;&lt;path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"&gt;&lt;/path&gt;&lt;polyline points="3.27 6.96 12 12.01 20.73 6.96"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="22.08" x2="12" y2="12"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
									</div>
									<div class="svg-classname">briefcase.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-58" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-58" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-58" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-58">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-58">briefcase.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/briefcase.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-58" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-58">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-58">briefcase.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"&gt;&lt;rect x="2" y="7" width="20" height="14" rx="2" ry="2"&gt;&lt;/rect&gt;&lt;path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"&gt;&lt;/path&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
									</div>
									<div class="svg-classname">calendar.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-60" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-60" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-60" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-60">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-60">calendar.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/calendar.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-60" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-60">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-60">calendar.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"&gt;&lt;rect x="3" y="4" width="18" height="18" rx="2" ry="2"&gt;&lt;/rect&gt;&lt;line x1="16" y1="2" x2="16" y2="6"&gt;&lt;/line&gt;&lt;line x1="8" y1="2" x2="8" y2="6"&gt;&lt;/line&gt;&lt;line x1="3" y1="10" x2="21" y2="10"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>

									</div>
									<div class="svg-classname">camera.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-61" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-61" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-61" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-61">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-61">camera.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/camera.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-61" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-61">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-61">camera.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"&gt;&lt;path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"&gt;&lt;/path&gt;&lt;circle cx="12" cy="13" r="4"&gt;&lt;/circle&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera-off"><line x1="1" y1="1" x2="23" y2="23"></line><path d="M21 21H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3m3-3h6l2 3h4a2 2 0 0 1 2 2v9.34m-7.72-2.06a4 4 0 1 1-5.56-5.56"></path></svg>
									</div>
									<div class="svg-classname">camera-off.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-62" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-62" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-62" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-62">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-62">camera-off.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/camera-off.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-62" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-62">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-62">camera-off.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera-off"&gt;&lt;line x1="1" y1="1" x2="23" y2="23"&gt;&lt;/line&gt;&lt;path d="M21 21H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3m3-3h6l2 3h4a2 2 0 0 1 2 2v9.34m-7.72-2.06a4 4 0 1 1-5.56-5.56"&gt;&lt;/path&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>

									</div>
									<div class="svg-classname">cast.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-63" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-63" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-63" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-63">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-63">cast.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cast.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-63" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-63">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-63">cast.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast"&gt;&lt;path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"&gt;&lt;/path&gt;&lt;line x1="2" y1="20" x2="2.01" y2="20"&gt;&lt;/line&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>

									</div>
									<div class="svg-classname">check.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-64" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-64" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-64" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-64">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-64">check.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/check.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-64" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-64">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-64">check.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"&gt;&lt;polyline points="20 6 9 17 4 12"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
									</div>
									<div class="svg-classname">check-circle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-65" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-65" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-65" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-65">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-65">check-circle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/check-circle.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-65" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-65">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-65">check-circle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"&gt;&lt;path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"&gt;&lt;/path&gt;&lt;polyline points="22 4 12 14.01 9 11.01"&gt;&lt;/polyline&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>

									</div>
									<div class="svg-classname">check-square.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-66" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-66" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-66" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-66">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-66">check-square.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/check-square.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-66" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-66">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-66">check-square.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"&gt;&lt;polyline points="9 11 12 14 22 4"&gt;&lt;/polyline&gt;&lt;path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"&gt;&lt;/path&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>

									</div>
									<div class="svg-classname">chevron-down.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-67" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-67" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-67" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-67">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-67">chevron-down.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevron-down.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-67" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-67">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-67">chevron-down.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"&gt;&lt;polyline points="6 9 12 15 18 9"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
									</div>
									<div class="svg-classname">chevron-right.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-69" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-69" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-69" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-69">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-69">chevron-right.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevron-right.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-69" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-69">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-69">chevron-right.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"&gt;&lt;polyline points="9 18 15 12 9 6"&gt;&lt;/polyline&gt;&lt;/svg&gt;
		</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
								<div class="svg-icons-ov">
									<div class="svg-icons-prev">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

									</div>
									<div class="svg-classname">chevrons-down.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-70" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-70" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-70" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-70">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-70">chevrons-down.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevrons-down.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-70" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-70">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-70">chevrons-down.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down"&gt;&lt;polyline points="7 13 12 18 17 13"&gt;&lt;/polyline&gt;&lt;polyline points="7 6 12 11 17 6"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
									<div class="svg-classname">chevrons-left.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-71" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-71" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-71" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-71">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-71">chevrons-left.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevrons-left.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-71" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-71">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-71">chevrons-left.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"&gt;&lt;polyline points="11 17 6 12 11 7"&gt;&lt;/polyline&gt;&lt;polyline points="18 17 13 12 18 7"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>

									</div>
									<div class="svg-classname">chevrons-right.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-72" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-72" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-72" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-72">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-72">chevrons-right.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevrons-right.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-72" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-72">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-72">chevrons-right.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"&gt;&lt;polyline points="13 17 18 12 13 7"&gt;&lt;/polyline&gt;&lt;polyline points="6 17 11 12 6 7"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
									</div>
									<div class="svg-classname">chevrons-up.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-73" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-73" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-73" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-73">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-73">chevrons-up.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevrons-up.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-73" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-73">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-73">chevrons-up.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up"&gt;&lt;polyline points="17 11 12 6 7 11"&gt;&lt;/polyline&gt;&lt;polyline points="17 18 12 13 7 18"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>

									</div>
									<div class="svg-classname">chevron-up.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-74" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-74" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-74" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-74">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-74">chevron-up.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chevron-up.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-74" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-74">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-74">chevron-up.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"&gt;&lt;polyline points="18 15 12 9 6 15"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
									</div>
									<div class="svg-classname">chrome.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-75" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-75" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-75" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-75">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-75">chrome.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/chrome.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-75" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-75">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-75">chrome.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;circle cx="12" cy="12" r="4"&gt;&lt;/circle&gt;&lt;line x1="21.17" y1="8" x2="12" y2="8"&gt;&lt;/line&gt;&lt;line x1="3.95" y1="6.06" x2="8.54" y2="14"&gt;&lt;/line&gt;&lt;line x1="10.88" y1="21.94" x2="15.46" y2="14"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
									</div>
									<div class="svg-classname">circle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-76" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-76" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-76" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-76">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-76">circle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/circle.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-76" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-76">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-76">circle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
									</div>
									<div class="svg-classname">clipboard.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-77" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-77" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-77" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-77">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-77">clipboard.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/clipboard.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-77" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-77">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-77">clipboard.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"&gt;&lt;path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"&gt;&lt;/path&gt;&lt;rect x="8" y="2" width="8" height="4" rx="1" ry="1"&gt;&lt;/rect&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
									</div>
									<div class="svg-classname">clock.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-78" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-78" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-78" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-78">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-78">clock.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/clock.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-78" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-78">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-78">clock.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;polyline points="12 6 12 12 16 14"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path></svg>
									</div>
									<div class="svg-classname">cloud.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-79" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-79" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-79" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-79">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-79">cloud.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cloud.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-79" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-79">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-79">cloud.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud"&gt;&lt;path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"&gt;&lt;/path&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-drizzle"><line x1="8" y1="19" x2="8" y2="21"></line><line x1="8" y1="13" x2="8" y2="15"></line><line x1="16" y1="19" x2="16" y2="21"></line><line x1="16" y1="13" x2="16" y2="15"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="12" y1="15" x2="12" y2="17"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path></svg>
									</div>
									<div class="svg-classname">cloud-drizzle.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-80" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-80" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-80" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-80">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-80">cloud-drizzle.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cloud-drizzle.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-80" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-80">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-80">cloud-drizzle.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-drizzle"&gt;&lt;line x1="8" y1="19" x2="8" y2="21"&gt;&lt;/line&gt;&lt;line x1="8" y1="13" x2="8" y2="15"&gt;&lt;/line&gt;&lt;line x1="16" y1="19" x2="16" y2="21"&gt;&lt;/line&gt;&lt;line x1="16" y1="13" x2="16" y2="15"&gt;&lt;/line&gt;&lt;line x1="12" y1="21" x2="12" y2="23"&gt;&lt;/line&gt;&lt;line x1="12" y1="15" x2="12" y2="17"&gt;&lt;/line&gt;&lt;path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"&gt;&lt;/path&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-lightning"><path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"></path><polyline points="13 11 9 17 15 17 11 23"></polyline></svg>
									</div>
									<div class="svg-classname">cloud-lightning.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-81" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-81" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-81" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-81">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-81">cloud-lightning.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cloud-lightning.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-81" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-81">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-81">cloud-lightning.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-lightning"&gt;&lt;path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"&gt;&lt;/path&gt;&lt;polyline points="13 11 9 17 15 17 11 23"&gt;&lt;/polyline&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-off"><path d="M22.61 16.95A5 5 0 0 0 18 10h-1.26a8 8 0 0 0-7.05-6M5 5a8 8 0 0 0 4 15h9a5 5 0 0 0 1.7-.3"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>

									</div>
									<div class="svg-classname">cloud-off.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-82" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-82" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-82" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-82">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-82">cloud-off.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cloud-off.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-82" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-82">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-82">cloud-off.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-off"&gt;&lt;path d="M22.61 16.95A5 5 0 0 0 18 10h-1.26a8 8 0 0 0-7.05-6M5 5a8 8 0 0 0 4 15h9a5 5 0 0 0 1.7-.3"&gt;&lt;/path&gt;&lt;line x1="1" y1="1" x2="23" y2="23"&gt;&lt;/line&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-rain"><line x1="16" y1="13" x2="16" y2="21"></line><line x1="8" y1="13" x2="8" y2="21"></line><line x1="12" y1="15" x2="12" y2="23"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path></svg>
									</div>
									<div class="svg-classname">cloud-rain.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-83" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-83" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-83" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-83">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-83">cloud-rain.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cloud-rain.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-83" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-83">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-83">cloud-rain.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-rain"&gt;&lt;line x1="16" y1="13" x2="16" y2="21"&gt;&lt;/line&gt;&lt;line x1="8" y1="13" x2="8" y2="21"&gt;&lt;/line&gt;&lt;line x1="12" y1="15" x2="12" y2="23"&gt;&lt;/line&gt;&lt;path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"&gt;&lt;/path&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-snow"><path d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 16.25"></path><line x1="8" y1="16" x2="8.01" y2="16"></line><line x1="8" y1="20" x2="8.01" y2="20"></line><line x1="12" y1="18" x2="12.01" y2="18"></line><line x1="12" y1="22" x2="12.01" y2="22"></line><line x1="16" y1="16" x2="16.01" y2="16"></line><line x1="16" y1="20" x2="16.01" y2="20"></line></svg>
									</div>
									<div class="svg-classname">cloud-snow.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-84" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-84" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-84" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-84">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-84">cloud-snow.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/cloud-snow.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-84" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-84">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-84">cloud-snow.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-snow"&gt;&lt;path d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 16.25"&gt;&lt;/path&gt;&lt;line x1="8" y1="16" x2="8.01" y2="16"&gt;&lt;/line&gt;&lt;line x1="8" y1="20" x2="8.01" y2="20"&gt;&lt;/line&gt;&lt;line x1="12" y1="18" x2="12.01" y2="18"&gt;&lt;/line&gt;&lt;line x1="12" y1="22" x2="12.01" y2="22"&gt;&lt;/line&gt;&lt;line x1="16" y1="16" x2="16.01" y2="16"&gt;&lt;/line&gt;&lt;line x1="16" y1="20" x2="16.01" y2="20"&gt;&lt;/line&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>

									</div>
									<div class="svg-classname">code.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-85" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-85" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-85" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-85">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-85">code.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/code.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-85" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-85">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-85">code.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"&gt;&lt;polyline points="16 18 22 12 16 6"&gt;&lt;/polyline&gt;&lt;polyline points="8 6 2 12 8 18"&gt;&lt;/polyline&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line></svg>

									</div>
									<div class="svg-classname">codepen.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-86" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-86" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-86" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-86">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-86">codepen.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/codepen.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-86" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-86">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-86">codepen.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen"&gt;&lt;polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"&gt;&lt;/polygon&gt;&lt;line x1="12" y1="22" x2="12" y2="15.5"&gt;&lt;/line&gt;&lt;polyline points="22 8.5 12 15.5 2 8.5"&gt;&lt;/polyline&gt;&lt;polyline points="2 15.5 12 8.5 22 15.5"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="2" x2="12" y2="8.5"&gt;&lt;/line&gt;&lt;/svg&gt;

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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>

									</div>
									<div class="svg-classname">codesandbox.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-87" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-87" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-87" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-87">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-87">codesandbox.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/codesandbox.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-87" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-87">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-87">codesandbox.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"&gt;&lt;path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"&gt;&lt;/path&gt;&lt;polyline points="7.5 4.21 12 6.81 16.5 4.21"&gt;&lt;/polyline&gt;&lt;polyline points="7.5 19.79 7.5 14.6 3 12"&gt;&lt;/polyline&gt;&lt;polyline points="21 12 16.5 14.6 16.5 19.79"&gt;&lt;/polyline&gt;&lt;polyline points="3.27 6.96 12 12.01 20.73 6.96"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="22.08" x2="12" y2="12"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
									</div>
									<div class="svg-classname">coffee.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-88" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-88" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-88" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-88">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-88">coffee.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/coffee.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-88" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-88">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-88">coffee.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"&gt;&lt;path d="M18 8h1a4 4 0 0 1 0 8h-1"&gt;&lt;/path&gt;&lt;path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"&gt;&lt;/path&gt;&lt;line x1="6" y1="1" x2="6" y2="4"&gt;&lt;/line&gt;&lt;line x1="10" y1="1" x2="10" y2="4"&gt;&lt;/line&gt;&lt;line x1="14" y1="1" x2="14" y2="4"&gt;&lt;/line&gt;&lt;/svg&gt;
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
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
									</div>
									<div class="svg-classname">columns.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-89" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-89" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-89" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-89">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-89">columns.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/columns.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-89" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-89">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-89">columns.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"&gt;&lt;path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"&gt;&lt;/path&gt;&lt;/svg&gt;

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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>

									</div>
									<div class="svg-classname">command.svg</div>
									<div class="svg-icon-popup">
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-90" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-90" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									</div>
									<div class="modal fade" id="svg_img_Brassieresvg-90" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-90">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_img_label_Brassieresvg-90">command.svg</h5>
													<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<pre>&lt;img src="icons/feather/command.svg"/&gt;</pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="svg_inline_Brassieresvg-90" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-90">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="svg_inline_label_Brassieresvg-90">command.svg</h5>
													<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"&gt;&lt;path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>

						</div>
						<div class="svg-classname">compass.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-91" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-91" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-91" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-91">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-91">compass.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/compass.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-91" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-91">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-91">compass.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"&gt;&lt;/polygon&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>

						</div>
						<div class="svg-classname">copy.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-92" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-92" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-92" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-92">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-92">copy.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/copy.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-92" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-92">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-92">copy.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"&gt;&lt;rect x="9" y="9" width="13" height="13" rx="2" ry="2"&gt;&lt;/rect&gt;&lt;path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg>

						</div>
						<div class="svg-classname">corner-down-left.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-93" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-93" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-93" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-93">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-93">corner-down-left.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-down-left.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-93" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-93">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-93">corner-down-left.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"&gt;&lt;polyline points="9 10 4 15 9 20"&gt;&lt;/polyline&gt;&lt;path d="M20 4v7a4 4 0 0 1-4 4H4"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right"><polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path></svg>

						</div>
						<div class="svg-classname">corner-down-right.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-94" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-94" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-94" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-94">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-94">corner-down-right.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-down-right.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-94" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-94">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-94">corner-down-right.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right"&gt;&lt;polyline points="15 10 20 15 15 20"&gt;&lt;/polyline&gt;&lt;path d="M4 4v7a4 4 0 0 0 4 4h12"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-left-down"><polyline points="14 15 9 20 4 15"></polyline><path d="M20 4h-7a4 4 0 0 0-4 4v12"></path></svg>

						</div>
						<div class="svg-classname">corner-left-down.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-95" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-95" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-95" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-95">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-95">corner-left-down.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-left-down.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-95" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-95">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-95">corner-left-down.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-left-down"&gt;&lt;polyline points="14 15 9 20 4 15"&gt;&lt;/polyline&gt;&lt;path d="M20 4h-7a4 4 0 0 0-4 4v12"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-left-up"><polyline points="14 9 9 4 4 9"></polyline><path d="M20 20h-7a4 4 0 0 1-4-4V4"></path></svg>
						</div>
						<div class="svg-classname">corner-left-up.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-96" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-96" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-96" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-96">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-96">corner-left-up.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-left-up.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-96" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-96">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-96">corner-left-up.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-left-up"&gt;&lt;polyline points="14 9 9 4 4 9"&gt;&lt;/polyline&gt;&lt;path d="M20 20h-7a4 4 0 0 1-4-4V4"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-down"><polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path></svg>
						</div>
						<div class="svg-classname">corner-right-down.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-97" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-97" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-97" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-97">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-97">corner-right-down.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-right-down.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-97" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-97">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-97">corner-right-down.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-down"&gt;&lt;polyline points="10 15 15 20 20 15"&gt;&lt;/polyline&gt;&lt;path d="M4 4h7a4 4 0 0 1 4 4v12"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up"><polyline points="10 9 15 4 20 9"></polyline><path d="M4 20h7a4 4 0 0 0 4-4V4"></path></svg>
						</div>
						<div class="svg-classname">corner-right-up.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-98" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-98" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-98" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-98">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-98">corner-right-up.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-right-up.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-98" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-98">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-98">corner-right-up.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up"&gt;&lt;polyline points="10 9 15 4 20 9"&gt;&lt;/polyline&gt;&lt;path d="M4 20h7a4 4 0 0 0 4-4V4"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>

						</div>
						<div class="svg-classname">corner-up-left.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-99" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-99" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-99" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-99">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-99">corner-up-left.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-up-left.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-99" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-99">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-99">corner-up-left.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"&gt;&lt;polyline points="9 14 4 9 9 4"&gt;&lt;/polyline&gt;&lt;path d="M20 20v-7a4 4 0 0 0-4-4H4"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>

						</div>
						<div class="svg-classname">corner-up-right.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-100" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-100" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-100" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-100">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-100">corner-up-right.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/corner-up-right.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-100" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-100">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-100">corner-up-right.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right"&gt;&lt;polyline points="15 14 20 9 15 4"&gt;&lt;/polyline&gt;&lt;path d="M4 20v-7a4 4 0 0 1 4-4h12"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>

						</div>
						<div class="svg-classname">cpu.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-101" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-101" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-101" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-101">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-101">cpu.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/cpu.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-101" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-101">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-101">cpu.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"&gt;&lt;rect x="4" y="4" width="16" height="16" rx="2" ry="2"&gt;&lt;/rect&gt;&lt;rect x="9" y="9" width="6" height="6"&gt;&lt;/rect&gt;&lt;line x1="9" y1="1" x2="9" y2="4"&gt;&lt;/line&gt;&lt;line x1="15" y1="1" x2="15" y2="4"&gt;&lt;/line&gt;&lt;line x1="9" y1="20" x2="9" y2="23"&gt;&lt;/line&gt;&lt;line x1="15" y1="20" x2="15" y2="23"&gt;&lt;/line&gt;&lt;line x1="20" y1="9" x2="23" y2="9"&gt;&lt;/line&gt;&lt;line x1="20" y1="14" x2="23" y2="14"&gt;&lt;/line&gt;&lt;line x1="1" y1="9" x2="4" y2="9"&gt;&lt;/line&gt;&lt;line x1="1" y1="14" x2="4" y2="14"&gt;&lt;/line&gt;&lt;/svg&gt;
</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
					<div class="svg-icons-ov">
						<div class="svg-icons-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
						</div>
						<div class="svg-classname">credit-card.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-102" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-102" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-102" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-102">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-102">credit-card.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/credit-card.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-102" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-102">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-102">credit-card.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"&gt;&lt;rect x="1" y="4" width="22" height="16" rx="2" ry="2"&gt;&lt;/rect&gt;&lt;line x1="1" y1="10" x2="23" y2="10"&gt;&lt;/line&gt;&lt;/svg&gt;
</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
					<div class="svg-icons-ov">
						<div class="svg-icons-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crop"><path d="M6.13 1L6 16a2 2 0 0 0 2 2h15"></path><path d="M1 6.13L16 6a2 2 0 0 1 2 2v15"></path></svg>
						</div>
						<div class="svg-classname">crop.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-103" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-103" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-103" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-103">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-103">crop.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/crop.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-103" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-103">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-103">crop.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crop"&gt;&lt;path d="M6.13 1L6 16a2 2 0 0 0 2 2h15"&gt;&lt;/path&gt;&lt;path d="M1 6.13L16 6a2 2 0 0 1 2 2v15"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg>
						</div>
						<div class="svg-classname">crosshair.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-104" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-104" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-104" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-104">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-104">crosshair.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/crosshair.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-104" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-104">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-104">crosshair.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;line x1="22" y1="12" x2="18" y2="12"&gt;&lt;/line&gt;&lt;line x1="6" y1="12" x2="2" y2="12"&gt;&lt;/line&gt;&lt;line x1="12" y1="6" x2="12" y2="2"&gt;&lt;/line&gt;&lt;line x1="12" y1="22" x2="12" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
						</div>
						<div class="svg-classname">database.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-105" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-105" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-105" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-105">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-105">database.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/database.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-105" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-105">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-105">database.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"&gt;&lt;ellipse cx="12" cy="5" rx="9" ry="3"&gt;&lt;/ellipse&gt;&lt;path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"&gt;&lt;/path&gt;&lt;path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"&gt;&lt;/path&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
						</div>
						<div class="svg-classname">delete.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-106" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-106" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-106" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-106">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-106">delete.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/delete.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-106" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-106">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-106">delete.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"&gt;&lt;path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"&gt;&lt;/path&gt;&lt;line x1="18" y1="9" x2="12" y2="15"&gt;&lt;/line&gt;&lt;line x1="12" y1="9" x2="18" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
						</div>
						<div class="svg-classname">disc.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-107" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-107" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-107" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-107">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-107">disc.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/disc.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-107" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-107">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-107">disc.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;circle cx="12" cy="12" r="3"&gt;&lt;/circle&gt;&lt;/svg&gt;
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
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>

						</div>
						<div class="svg-classname">dollar-sign.svg</div>
						<div class="svg-icon-popup">
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-108" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-108" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
						</div>
						<div class="modal fade" id="svg_img_Brassieresvg-108" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-108">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_img_label_Brassieresvg-108">dollar-sign.svg</h5>
										<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<pre>&lt;img src="icons/feather/dollar-sign.svg"/&gt;</pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="svg_inline_Brassieresvg-108" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-108">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="svg_inline_label_Brassieresvg-108">dollar-sign.svg</h5>
										<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"&gt;&lt;line x1="12" y1="1" x2="12" y2="23"&gt;&lt;/line&gt;&lt;path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"&gt;&lt;/path&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>

								</div>
								<div class="svg-classname">download.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-109" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-109" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-109" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-109">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-109">download.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/download.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-109" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-109">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-109">download.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"&gt;&lt;path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"&gt;&lt;/path&gt;&lt;polyline points="7 10 12 15 17 10"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="15" x2="12" y2="3"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg>
								</div>
								<div class="svg-classname">download-cloud.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-110" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-110" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-110" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-110">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-110">download-cloud.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/download-cloud.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-110" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-110">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-110">download-cloud.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"&gt;&lt;polyline points="8 17 12 21 16 17"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="12" x2="12" y2="21"&gt;&lt;/line&gt;&lt;path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"&gt;&lt;/path&gt;&lt;/svg&gt;
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
						<!-- wait -->
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
								</div>
								<div class="svg-classname">droplet.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-200" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-200" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-200" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-200">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-200">droplet.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/droplet.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-200" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-200">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-200">droplet.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"&gt;&lt;path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"&gt;&lt;/path&gt;&lt;polyline points="7 10 12 15 17 10"&gt;&lt;/polyline&gt;&lt;line x1="12" y1="15" x2="12" y2="3"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
								</div>
								<div class="svg-classname">edit.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-111" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-111" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-111" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-111">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-111">edit.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/edit.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-111" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-111">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-111">edit.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"&gt;&lt;path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"&gt;&lt;/path&gt;&lt;path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"&gt;&lt;/path&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
								</div>
								<div class="svg-classname">edit-2.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-112" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-112" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-112" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-112">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-112">edit-2.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/edit-2.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-112" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-112">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-112">edit-2.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"&gt;&lt;path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"&gt;&lt;/path&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
								</div>
								<div class="svg-classname">edit-3.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-113" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-113" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-113" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-113">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-113">edit-3.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/edit-3.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-113" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-113">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-113">edit-3.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"&gt;&lt;path d="M12 20h9"&gt;&lt;/path&gt;&lt;path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"&gt;&lt;/path&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
								</div>
								<div class="svg-classname">external-link.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-114" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-114" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-114" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-114">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-114">external-link.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/external-link.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-114" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-114">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-114">external-link.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"&gt;&lt;path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"&gt;&lt;/path&gt;&lt;polyline points="15 3 21 3 21 9"&gt;&lt;/polyline&gt;&lt;line x1="10" y1="14" x2="21" y2="3"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
								</div>
								<div class="svg-classname">eye.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-115" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-115" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-115" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-115">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-115">eye.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/eye.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-115" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-115">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-115">eye.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"&gt;&lt;path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"&gt;&lt;/path&gt;&lt;circle cx="12" cy="12" r="3"&gt;&lt;/circle&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
								</div>
								<div class="svg-classname">eye-off.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-116" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-116" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-116" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-116">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-116">eye-off.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/eye-off.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-116" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-116">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-116">eye-off.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"&gt;&lt;path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"&gt;&lt;/path&gt;&lt;line x1="1" y1="1" x2="23" y2="23"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
								</div>
								<div class="svg-classname">facebook.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-117" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-117" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-117" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-117">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-117">facebook.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/facebook.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-117" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-117">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-117">facebook.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"&gt;&lt;path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"&gt;&lt;/path&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
								</div>
								<div class="svg-classname">feather.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-119" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-119" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-119" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-119">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-119">feather.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/feather.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-119" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-119">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-119">feather.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather"&gt;&lt;path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"&gt;&lt;/path&gt;&lt;line x1="16" y1="8" x2="2" y2="22"&gt;&lt;/line&gt;&lt;line x1="17.5" y1="15" x2="9" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
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
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-fast-forward"><polygon points="13 19 22 12 13 5 13 19"></polygon><polygon points="2 19 11 12 2 5 2 19"></polygon></svg>
								</div>
								<div class="svg-classname">fast-forward.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-118" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-118" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-118" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-118">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-118">fast-forward.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="icons/feather/fast-forward.svg"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-118" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-118">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-118">fast-forward.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-fast-forward"&gt;&lt;polygon points="13 19 22 12 13 5 13 19"&gt;&lt;/polygon&gt;&lt;polygon points="2 19 11 12 2 5 2 19"&gt;&lt;/polygon&gt;&lt;/svg&gt;
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

<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/feather_icons by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:59 GMT -->
</html>