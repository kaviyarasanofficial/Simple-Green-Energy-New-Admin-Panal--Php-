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
    
    
<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/food_menu by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:35 GMT -->
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
					Food Menu					</div>
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
                <!-- <ul aria-expanded="false">
                    <li><a href="form_element.php">Form Elements</a></li>
                    <li><a href="form_wizard.php">Wizard</a></li>   
                    <li><a href="form_editor.php">Editor</a></li>
					<li><a href="form_pickers.php">Pickers</a></li>
					<li><a href="form_validation_jquery.php">Form Validate</a></li>
                </ul> -->
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
***********************************-->        <!-- Modal -->
<div class="modal fade" id="aAddDietMenus">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Diet Menus</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Running</label>
						<input type="text" class="form-control" placeholder="Km">
					</div>
					<div class="form-group">
						<label>Cycling</label>
						<input type="text" class="form-control" placeholder="Km">
					</div>
					<div class="form-group">
						<label>Yoga</label>
						<input type="text" class="form-control" placeholder="hr">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
				</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body start
***********************************-->
	<div class="content-body default-height">
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-xxl-8">
				<div class="row">	
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header d-block pb-0 border-0">
								<div class="d-sm-flex flex-wrap align-items-center d-block mb-md-3 mb-0">
									<div class="me-auto pe-3 mb-3">
										<h4 class="text-black fs-20">Diet Menus</h4>
										<p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
									</div>
									<form>
										<div class="input-group mb-3 diet-search me-4">
											<input type="text" class="form-control" placeholder="Search Menus here">
											<span class="input-group-text bg-primary">
												<button class=" border-0 bg-transparent" type="button"><i class=" text-white fa fa-search" aria-hidden="true"></i></button>
											</span>
										</div>
									</form>
									<a href="javascript:void(0);" class="btn rounded  btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<svg class="me-2" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.31615 6H14.4744C14.4744 6.53043 14.6882 7.03914 15.0686 7.41421C15.4491 7.78929 15.9651 8 16.5032 8H18.532C19.07 8 19.5861 7.78929 19.9665 7.41421C20.347 7.03914 20.5607 6.53043 20.5607 6H21.5751C21.8442 6 22.1022 5.89464 22.2924 5.70711C22.4827 5.51957 22.5895 5.26522 22.5895 5C22.5895 4.73478 22.4827 4.48043 22.2924 4.29289C22.1022 4.10536 21.8442 4 21.5751 4H20.5607C20.5607 3.46957 20.347 2.96086 19.9665 2.58579C19.5861 2.21071 19.07 2 18.532 2H16.5032C15.9651 2 15.4491 2.21071 15.0686 2.58579C14.6882 2.96086 14.4744 3.46957 14.4744 4H3.31615C3.04711 4 2.7891 4.10536 2.59887 4.29289C2.40863 4.48043 2.30176 4.73478 2.30176 5C2.30176 5.26522 2.40863 5.51957 2.59887 5.70711C2.7891 5.89464 3.04711 6 3.31615 6ZM16.5032 4H18.532V5V6H16.5032V4ZM21.5751 11H12.4456C12.4456 10.4696 12.2319 9.96086 11.8514 9.58579C11.471 9.21071 10.9549 9 10.4169 9H8.38809C7.85002 9 7.334 9.21071 6.95353 9.58579C6.57306 9.96086 6.35931 10.4696 6.35931 11H3.31615C3.04711 11 2.7891 11.1054 2.59887 11.2929C2.40863 11.4804 2.30176 11.7348 2.30176 12C2.30176 12.2652 2.40863 12.5196 2.59887 12.7071C2.7891 12.8946 3.04711 13 3.31615 13H6.35931C6.35931 13.5304 6.57306 14.0391 6.95353 14.4142C7.334 14.7893 7.85002 15 8.38809 15H10.4169C10.9549 15 11.471 14.7893 11.8514 14.4142C12.2319 14.0391 12.4456 13.5304 12.4456 13H21.5751C21.8442 13 22.1022 12.8946 22.2924 12.7071C22.4827 12.5196 22.5895 12.2652 22.5895 12C22.5895 11.7348 22.4827 11.4804 22.2924 11.2929C22.1022 11.1054 21.8442 11 21.5751 11ZM8.38809 13V11H10.4169V12V13H8.38809ZM21.5751 18H18.532C18.532 17.4696 18.3182 16.9609 17.9378 16.5858C17.5573 16.2107 17.0413 16 16.5032 16H14.4744C13.9364 16 13.4203 16.2107 13.0399 16.5858C12.6594 16.9609 12.4456 17.4696 12.4456 18H3.31615C3.04711 18 2.7891 18.1054 2.59887 18.2929C2.40863 18.4804 2.30176 18.7348 2.30176 19C2.30176 19.2652 2.40863 19.5196 2.59887 19.7071C2.7891 19.8946 3.04711 20 3.31615 20H12.4456C12.4456 20.5304 12.6594 21.0391 13.0399 21.4142C13.4203 21.7893 13.9364 22 14.4744 22H16.5032C17.0413 22 17.5573 21.7893 17.9378 21.4142C18.3182 21.0391 18.532 20.5304 18.532 20H21.5751C21.8442 20 22.1022 19.8946 22.2924 19.7071C22.4827 19.5196 22.5895 19.2652 22.5895 19C22.5895 18.7348 22.4827 18.4804 22.2924 18.2929C22.1022 18.1054 21.8442 18 21.5751 18ZM14.4744 20V18H16.5032V19V20H14.4744Z" fill="#fff"></path>
										</svg>Filter
									</a>
								</div>
								<nav>
									<div class="nav nav-tabs diet-tabs" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Recomended for you</button>
									<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Salad</button>
									<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Breakfast</button>
									<button class="nav-link" id="nav-lunch-tab" data-bs-toggle="tab" data-bs-target="#nav-lunch" type="button" role="tab" aria-controls="nav-lunch" aria-selected="false">Lunch</button>
									
									</div>
								</nav>
								<div class="tab-content diet-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
										<div class="card-body loadmore-content dz-scroll height750"  id="DietMenusContent">
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/5.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Papaya Fruit for Vitamin C</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/34.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Andrew Sceenshaver</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/6.png" alt="" width="120"></a>
												<div class=" food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Vitamin C Vegetables</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/31.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Tiffany Lawrenc</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/4.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh Blueberry & Strawberry Dice </a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/33.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Louis Montana</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
										</div>
										<div class="card-footer style-1 text-center border-0 pt-0 pb-4">
											<a class="text-primary dz-load-more fa fa-chevron-down" id="DietMenus" href="javascript:void(0);" rel="public/assets/ajax/food-menu-list.php">
											</a>
										</div>
									</div>
									
									<!-- salad -->
									<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
										<div class="card-body loadmore-content dz-scroll height750"  id="DietMenus1Content">
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/5.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Papaya Fruit for Vitamin C</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/34.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Andrew Sceenshaver</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/6.png" alt="" width="120"></a>
												<div class=" food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Vitamin C Vegetables</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/31.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Tiffany Lawrenc</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/4.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh Blueberry & Strawberry Dice </a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/33.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Louis Montana</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
										</div>
										<div class="card-footer style-1 text-center border-0 pt-0 pb-4">
											<a class="text-primary dz-load-more fa fa-chevron-down" id="DietMenus1" href="javascript:void(0);" rel="public/assets/ajax/food-menu-list-1.php">
											</a>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
									<div class="card-body loadmore-content dz-scroll height750"  id="DietMenus2Content">
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/5.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Papaya Fruit for Vitamin C</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/34.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Andrew Sceenshaver</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/6.png" alt="" width="120"></a>
												<div class=" food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Vitamin C Vegetables</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/31.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Tiffany Lawrenc</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/4.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh Blueberry & Strawberry Dice </a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/33.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Louis Montana</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
										</div>
										<div class="card-footer style-1 text-center border-0 pt-0 pb-4">
											<a class="text-primary dz-load-more fa fa-chevron-down" id="DietMenus2" href="javascript:void(0);" rel="public/assets/ajax/food-menu-list-2.php">
											</a>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-lunch" role="tabpanel" aria-labelledby="nav-lunch-tab" tabindex="0">
									<div class="card-body loadmore-content dz-scroll height750"  id="DietMenus3Content">
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/5.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Papaya Fruit for Vitamin C</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/34.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Andrew Sceenshaver</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/6.png" alt="" width="120"></a>
												<div class=" food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Vitamin C Vegetables</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/31.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Tiffany Lawrenc</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/4.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh Blueberry & Strawberry Dice </a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/33.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Louis Montana</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
											<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
												<a href="ecom_product_details.php"><img class="rounded me-3 mb-md-0 mb-3" src="public/assets/images/menus/7.png" alt="" width="120"></a>
												<div class="food-default-flex col-lg-8 ps-0">
													<h6 class="fs-16 font-w600"><a href="ecom_product_details.php" class="text-black">Fresh or Frozen (No Sugar Added) Fruits</a></h6>
													<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
													<div class="d-flex flex-wrap align-items-center">
														<div class="d-flex mb-sm-2 mb-3 pe-3 me-auto align-items-center">
															<img src="public/assets/images/avatar/32.png" alt="" width="30" class="rounded-circle me-2">
															<span class="fs-14 text-black font-w500">Budy Khan</span>
														</div>
														<ul class="d-flex flex-wrap mb-sm-0 mb-2">
															<li class="mb-2 me-4 text-nowrap"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
															<li class="mb-2 me-4 text-nowrap"><i class="las la-prescription-bottle scale5 me-2"></i><span class="text-nowrap fs-14 text-black font-w500">5 Ingridients</span></li>
															<li class="text-nowrap mb-2"><i class="fa-regular fa-star me-2 scale3 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500">568 Reviews</span></li>
														</ul>
													</div>
												</div>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="btn btn-primary light btn-md ms-auto"><i class="fa fa-plus scale5 me-3"></i>Add Menu</a>
											</div>
										</div>
										<div class="card-footer style-1 text-center border-0 pt-0 pb-4">
											<a class="text-primary dz-load-more fa fa-chevron-down" id="DietMenus3" href="javascript:void(0);" rel="public/assets/ajax/food-menu-list-3.php">
											</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-4">
				<div class="row">
					<div class="col-xl-12 col-md-6">
						<div class="card">
							<div class="card-header border-0">
								<div class="me-auto pe-3">
									<h4 class="text-black fs-20">Current Diet Menu</h4>
									<p class="fs-13 mb-0">Lorem ipsum dolor sit ame</p>
								</div>
								<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#aAddDietMenus" class="plus-icon"><i class="las la-plus"></i></a>
							</div>
							<div class="card-body pb-3">
								<div class="media mb-3">
									<a href="ecom_product_details.php"><img src="public/assets/images/menus/8.png" alt="" class="rounded me-3" width="86"></a>
									<div class="media-body">
										<h6 class="fs-16 font-w500"><a href="ecom_product_details.php" class="text-black">Hearty Italian-Style White Bean Soup</a></h6>
										<span class="fs-14">by Andrew</span>
									</div>
								</div>
								<ul class="m-md-auto mt-2 pe-4">
									<li class="mb-2 text-nowrap"><i class="las la-clock scale5 me-3"></i><span class="fs-14 text-black text-nowrap font-w500">4-6 mins </span></li>
									<li class="mb-2 text-nowrap"><i class="las la-calendar-alt scale5 me-3"></i><span class="fs-14 text-black  font-w500">Breakfast (Monday, Tuesday)</span></li>
									<li class="mb-2 text-nowrap"><i class="las la-prescription-bottle scale5 me-3"></i><span class="text-nowrap fs-14 text-primary font-w500">8 Ingridients</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-md-6">
						<div class="card">
							<div class="card-header d-sm-flex d-block border-0 pb-4">
								<div class="me-auto pe-3">
									<h4 class="text-black fs-20">Trending Ingridients</h4>
									<p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
								</div>
							</div>
							<div class="card-body loadmore-content dz-scroll pb-0 pt-0 height320" id="TrendingIngridientsContent">
								<div class="media border-bottom py-3">
									<a href="ecom_product_details.php"><img src="public/assets/images/menus/9.png" alt="" class="rounded me-3" width="50"></a>
									<div class="pe-3 me-auto media-body">
										<h6 class="fs-16 font-w600 mb-0"><a href="ecom_product_details.php" class="text-black">Strawberry Fruit</a></h6>
										<span class="fs-12">Vitamin A, B, C</span>
									</div>
									<div class="text-center">
										<span class="d-block">
											<svg width="19" height="9" viewBox="0 0 18 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9 0L0 9H18L9 0Z" fill="#0B2A97"></path>
											</svg>
										</span>
										<span class="d-block fs-16 text-black font-w600">#1</span>
									</div>
								</div>
								<div class="media border-bottom py-3">
									<a href="ecom_product_details.php"><img src="public/assets/images/menus/10.png" alt="" class="rounded me-3" width="50"></a>
									<div class="pe-3 me-auto media-body">
										<h6 class="fs-16 font-w600 mb-0"><a href="ecom_product_details.php" class="text-black">Bananas Fruit</a></h6>
										<span class="fs-12">Vitamin A, B, C</span>
									</div>
									<div class="text-center">
										<span class="d-block">
											<svg width="19" height="9" viewBox="0 0 18 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9 0L0 9H18L9 0Z" fill="#0B2A97"></path>
											</svg>
										</span>
										<span class="d-block fs-16 text-black font-w600">#2</span>
									</div>
								</div>
								<div class="media border-bottom py-3">
									<a href="ecom_product_details.php"><img src="public/assets/images/menus/11.png" alt="" class="rounded me-3" width="50"></a>
									<div class="pe-3 me-auto media-body">
										<h6 class="fs-16 font-w600 mb-0"><a href="ecom_product_details.php" class="text-black">Orange Fruit</a></h6>
										<span class="fs-12">Vitamin A, B, C</span>
									</div>
									<div class="text-center">
										<span class="d-block">
											<svg width="19" height="9" viewBox="0 0 18 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9 9.00006L18 6.10352e-05H9L0 6.10352e-05L9 9.00006Z" fill="#C51E1E"></path>
											</svg>
										</span>
										<span class="d-block fs-16 text-black font-w600">#3</span>
									</div>
								</div>
								<div class="media border-bottom py-3">
									<a href="ecom_product_details.php"><img src="public/assets/images/menus/12.png" alt="" class="rounded me-3" width="50"></a>
									<div class="pe-3 me-auto media-body">
										<h6 class="fs-16 font-w600 mb-0"><a href="ecom_product_details.php" class="text-black">Grapes Fruit</a></h6>
										<span class="fs-12">Vitamin A, B, C</span>
									</div>
									<div class="text-center">
										<span class="d-block">
											<svg width="19" height="9" viewBox="0 0 18 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9 0L0 9H18L9 0Z" fill="#0B2A97"></path>
											</svg>
										</span>
										<span class="d-block fs-16 text-black font-w600">#4</span>
									</div>
								</div>
							</div>
							<div class="card-footer text-center border-0 pt-3 pb-4">
								<a class="text-primary dz-load-more" id="TrendingIngridients" rel="public/assets/ajax/trending-ingridients.php" href="javascript:void(0);">View more</a>
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

<!-- Modal Box Strat -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
		<div class="modal-header">
		<h1 class="modal-title fs-5" id="exampleModalLabel">Filter Details</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<div class="row">
			<form>
				<div class="col-xl-12">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Diet Menus</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Papaya Fruit for Vitamin C">
					</div>
					<div class="mb-3">
						<label class="form-label">Diet Categories</label>
						<select class="form-control default-select">
							<option selected="">Salad</option>
							<option>Breakfast</option>
							<option>Lunch</option>
							<option>Salad</option>
						</select>
					</div>
				</div>
			</form>
		</div>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
		</div>
	</div>
	</div>
</div>
<!-- Modal Box End -->
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
		

	        <script src="public/assets/vendor/chart-js/chart.bundle.min.js"></script>
    	
			<script src="public/assets/js/custom.min.js"></script>
			<script src="public/assets/js/deznav-init.js"></script>
		

    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/food_menu by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:42 GMT -->
</html>