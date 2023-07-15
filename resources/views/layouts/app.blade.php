<!DOCTYPE html>
<html lang="en">

<head>
	<title>PKK RW Graha Bumi Pertiwi</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

</head>

<body class="app">
	<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
									role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div><!--//col-->
						<div class="search-mobile-trigger d-sm-none col">
							<i class="search-mobile-trigger-icon fas fa-search"></i>
						</div><!--//col-->
						<div class="app-search-box col">
							<form class="app-search-form">
								<input type="text" placeholder="Search..." name="search"
									class="form-control search-input">
								<button type="submit" class="btn search-btn btn-primary" value="Search"><i
										class="fas fa-search"></i></button>
							</form>
						</div><!--//app-search-box-->

						<div class="app-utilities col-auto">


							<div class="app-utility-item app-user-dropdown dropdown">
								
								<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
									role="button" aria-expanded="false"><img src="assets/images/account.png"
										alt="user profile"> <span> Admin </span></a>
                                        <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                            <li><a class="dropdown-item" href="account.html">Account</a></li>
                                            <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">Log Out</a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form></li>
                                        </ul>
							</div><!--//app-user-dropdown-->
						</div><!--//app-utilities-->
					</div><!--//row-->
				</div><!--//app-header-content-->
			</div><!--//container-fluid-->
            @yield('content')

		    <footer class="app-footer">
				<div class="container text-center py-3">
					<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
					<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
							style="color: #fb866a;"></i> by <a class="app-link" href="https://github.com/fachry-15"
							target="_blank">Fachry Rizky Prasetya</a> for developers</small>
		
				</div>
			</footer><!--//app-footer-->
		
		</div><!--//app-wrapper-->
            <!-- Javascript -->
	<script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Charts JS -->
	<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
	<script src="{{ asset('assets/js/index-charts.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Page Specific JS -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script>
		$(document).ready(function() {
    $('.toast').toast('show');
});
	</script>
        </body>

        </html>