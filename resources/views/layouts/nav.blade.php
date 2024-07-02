<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="{{url('https://preview.keenthemes.com/metronic8')}}" />
		<link rel="shortcut icon" href="{{url('media/logos/favicon.ico')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700')}}" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{url('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{url('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
						<!--begin::Sidebar toggle-->
						<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
							<!--begin::Logo image-->
							<a href="{{url('../../demo38/dist/index.html')}}">
								<img alt="Logo Jay" src="{{url('media/logos/demo38-small.svg')}}" class="h-30px" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Sidebar toggle-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
							<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-200px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
									<!--begin::Tablet and mobile search toggle-->
									<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
										<div class="d-flex">
											<i class="ki-outline ki-magnifier fs-1"></i>
										</div>
									</div>
									<!--end::Tablet and mobile search toggle-->
									<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
									<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
										<!--begin::Hidden input(Added to disable form autocomplete)-->
										<input type="hidden" />
										<!--end::Hidden input-->
										<!--begin::Icon-->
										<i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
										<!--end::Icon-->
										<!--begin::Input-->
										<input type="text" class="search-input form-control form-control rounded-1 ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
										<!--end::Input-->
										<!--begin::Spinner-->
										<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
											<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
										<!--end::Spinner-->
										<!--begin::Reset-->
										<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
											<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
										</span>
										<!--end::Reset-->
									</form>
									<!--end::Form-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Recently viewed-->
											<div data-kt-search-element="results" class="d-none">
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-350px">
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="{{url('media/avatars/300-6.jpg')}}" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Karina Clark</span>
															<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="{{url('media/avatars/300-2.jpg')}}" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Olivia Bold</span>
															<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="{{url('media/avatars/300-9.jpg')}}" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Ana Clark</span>
															<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="{{url('media/avatars/300-14.jpg')}}" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Nick Pitola</span>
															<span class="fs-7 fw-semibold text-muted">Art Director</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="{{url('media/avatars/300-11.jpg')}}" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Edward Kulnic</span>
															<span class="fs-7 fw-semibold text-muted">System Administrator</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{url('media/svg/brand-logos/volicity-9.svg')}}" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Rbranding</span>
															<span class="fs-7 fw-semibold text-muted">UI Design</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{url('media/svg/brand-logos/tvit.svg')}}" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Re-branding</span>
															<span class="fs-7 fw-semibold text-muted">Web Development</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{url('media/svg/misc/infography.svg')}}" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Business Analytics App</span>
															<span class="fs-7 fw-semibold text-muted">Administration</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{url('media/svg/brand-logos/leaf.svg')}}" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
															<span class="fs-7 fw-semibold text-muted">Marketing</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{url('media/svg/brand-logos/tower.svg')}}" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Tower Group Website</span>
															<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-notepad fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
															<span class="fs-7 fw-semibold text-muted">#45670</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-frame fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
															<span class="fs-7 fw-semibold text-muted">#45690</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
															<span class="fs-7 fw-semibold text-muted">#21090</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-profile-circle fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
															<span class="fs-7 fw-semibold text-muted">#34560</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Recently viewed-->
											<div class="" data-kt-search-element="main">
												<!--begin::Heading-->
												<div class="d-flex flex-stack fw-semibold mb-4">
													<!--begin::Label-->
													<span class="text-muted fs-6 me-2">Recently Searched:</span>
													<!--end::Label-->
													<!--begin::Toolbar-->
													<div class="d-flex" data-kt-search-element="toolbar">
														<!--begin::Preferences toggle-->
														<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
															<i class="ki-outline ki-setting-2 fs-2"></i>
														</div>
														<!--end::Preferences toggle-->
														<!--begin::Advanced search toggle-->
														<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
															<i class="ki-outline ki-down fs-2"></i>
														</div>
														<!--end::Advanced search toggle-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-325px">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-laptop fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
															<span class="fs-7 text-muted fw-semibold">#45789</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-simple fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
															<span class="fs-7 text-muted fw-semibold">#84050</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
															<span class="fs-7 text-muted fw-semibold">#67945</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-sms fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-bank fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
															<span class="fs-7 text-muted fw-semibold">#45690</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
															<span class="fs-7 text-muted fw-semibold">#24005</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Empty-->
											<div data-kt-search-element="empty" class="text-center d-none">
												<!--begin::Icon-->
												<div class="pt-10 pb-10">
													<i class="ki-outline ki-search-list fs-4x opacity-50"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Message-->
												<div class="pb-15 fw-semibold">
													<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
													<div class="text-muted fs-7">Please try again with a different query</div>
												</div>
												<!--end::Message-->
											</div>
											<!--end::Empty-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Preferences-->
										<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="users" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="orders" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="projects" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="any" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
													<option value="next">Within the next</option>
													<option value="last">Within the last</option>
													<option value="between">Between</option>
													<option value="on">On</option>
												</select>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-6">
													<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
														<option value="days">Days</option>
														<option value="weeks">Weeks</option>
														<option value="months">Months</option>
														<option value="years">Years</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
												<a href="../../demo38/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
										<!--begin::Preferences-->
										<form data-kt-search-element="preferences" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="pb-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end pt-7">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
												<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
							</div>
							<!--begin::Notifications-->
							<div class="app-navbar-item ms-1 ms-md-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-calendar fs-1"></i>
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
									<!--begin::Heading-->
									<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('media/misc/menu-header-bg.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
										<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
										<!--end::Title-->
										<!--begin::Tabs-->
										<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
											</li>
										</ul>
										<!--end::Tabs-->
									</div>
									<!--end::Heading-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
															<div class="text-gray-400 fs-7">Phase 1 development</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 hr</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-danger">
																<i class="ki-outline ki-information fs-2 text-danger"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
															<div class="text-gray-400 fs-7">Confidential staff documents</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<i class="ki-outline ki-briefcase fs-2 text-warning"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
															<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-success">
																<i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
															<div class="text-gray-400 fs-7">New frontend admin theme</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<i class="ki-outline ki-colors-square fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
															<div class="text-gray-400 fs-7">Product launch status update</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-info">
																<i class="ki-outline ki-picture fs-2 text-info"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
															<div class="text-gray-400 fs-7">Collection of banner images</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<i class="ki-outline ki-color-swatch fs-2 text-warning"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
															<div class="text-gray-400 fs-7">Collection of SVG icons</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">20 March</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="../../demo38/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<i class="ki-outline ki-arrow-right fs-5"></i></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column px-9">
												<!--begin::Section-->
												<div class="pt-10 pb-0">
													<!--begin::Title-->
													<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
													<!--end::Title-->
													<!--begin::Text-->
													<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
													<!--end::Text-->
													<!--begin::Action-->
													<div class="text-center mt-5 mb-9">
														<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Section-->
												<!--begin::Illustration-->
												<div class="text-center px-4">
													<img class="mw-100 mh-200px" alt="image" src="{{url('media/illustrations/sketchy-1/1.png')}}" />
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Just now</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 week</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Mar 5</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">May 15</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Apr 3</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Jun 30</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Jul 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Sep 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Dec 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="../../demo38/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<i class="ki-outline ki-arrow-right fs-5"></i></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::Notifications-->
							<!--begin::Quick links-->
							<div class="app-navbar-item ms-1 ms-md-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-abstract-26 fs-1"></i>
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('media/misc/menu-header-bg.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-semibold mb-3">Quick Links</h3>
										<!--end::Title-->
										<!--begin::Status-->
										<span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
										<!--end::Status-->
									</div>
									<!--end::Heading-->
									<!--begin:Nav-->
									<div class="row g-0">
										<!--begin:Item-->
										<div class="col-6">
											<a href="../../demo38/dist/apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
												<i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
												<span class="fs-7 text-gray-400">eCommerce</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="../../demo38/dist/apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
												<i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
												<span class="fs-7 text-gray-400">Console</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="../../demo38/dist/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
												<i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
												<span class="fs-7 text-gray-400">Pending Tasks</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="../../demo38/dist/apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
												<i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
												<span class="fs-7 text-gray-400">Latest cases</span>
											</a>
										</div>
										<!--end:Item-->
									</div>
									<!--end:Nav-->
									<!--begin::View more-->
									<div class="py-2 text-center border-top">
										<a href="../../demo38/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
										<i class="ki-outline ki-arrow-right fs-5"></i></a>
									</div>
									<!--end::View more-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::Quick links-->
							<!--begin::Chat-->
							<div class="app-navbar-item ms-1 ms-md-3">
								<!--begin::Menu wrapper-->
								<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
									<i class="ki-outline ki-notification-on fs-1"></i>
									<span class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-danger w-15px h-15px ms-n4 mt-3">5</span>
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Chat-->
							<!--begin::User menu-->
							<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<img src="{{url('media/avatars/300-2.jpg')}}" alt="user" />
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="{{url('media/avatars/300-2.jpg')}}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">Max Smith
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo38/dist/account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo38/dist/apps/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title">My Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/billing.html" class="menu-link px-5">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/statements.html" class="menu-link px-5">Payments</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
												<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
													<i class="ki-outline ki-information-5 fs-5"></i>
												</span></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<span class="form-check-label text-muted fs-7">Notifications</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo38/dist/account/statements.html" class="menu-link px-5">My Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Mode
											<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
												<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
												<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
											</span></span>
										</a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-outline ki-night-day fs-2"></i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-outline ki-moon fs-2"></i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-outline ki-screen fs-2"></i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
											<img class="w-15px h-15px rounded-1 ms-2" src="{{url('media/flags/united-states.svg')}}" alt="" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{url('media/flags/united-states.svg')}}" alt="" />
												</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{url('media/flags/spain.svg')}}" alt="" />
												</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{url('media/flags/germany.svg')}}" alt="" />
												</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{url('media/flags/japan.svg')}}" alt="" />
												</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo38/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{url('media/flags/france.svg')}}" alt="" />
												</span>French</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="../../demo38/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo38/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User menu-->
						</div>
						<!--end::Navbar-->
						<!--begin::Separator-->
						<div class="app-navbar-separator separator d-none d-lg-flex"></div>
						<!--end::Separator-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
							<!--begin::Logo-->
							<a href="../../demo38/dist/index.html" class="app-sidebar-logo">
								<img alt="Logo" src="{{url('media/logos/demo38.svg')}}" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
								<img alt="Logo" src="{{url('media/logos/demo38-dark.svg')}}" class="h-20px h-lg-25px theme-dark-show" />
							</a>
							<!--end::Logo-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-outline ki-text-align-right rotate-180 fs-1"></i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--begin::Navs-->
						<div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
							<div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
								<!--begin::Teams-->
								<div class="app-sidebar-menu-secondary menu menu-rounded menu-column mb-6">
									<!--begin::Heading-->
									<div class="menu-item mb-2">
										<div class="menu-heading text-uppercase fs-7 fw-bold">Teams</div>
										<!--begin::Separator-->
										<div class="app-sidebar-separator separator"></div>
										<!--end::Separator-->
									</div>
									<!--end::Heading-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link active" href="../../demo38/dist/apps/projects/project.html">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<span class="bullet bullet-dot bg-success"></span>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title">AudioEngine</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="../../demo38/dist/apps/projects/activity.html">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<span class="bullet bullet-dot bg-danger"></span>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title">Schipol Extranet</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="../../demo38/dist/apps/projects/files.html">
											<!--begin::Icon-->
											<span class="menu-icon">
												<i class="ki-outline ki-lock-2 fs-2"></i>
											</span>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="menu-title">ABN AMBRO</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="../../demo38/dist/apps/projects/settings.html">
											<!--begin::Icon-->
											<span class="menu-icon">
												<i class="ki-outline ki-lock-2 fs-2"></i>
											</span>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="menu-title">NS Mobile App</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
								</div>
								<!--end::Teams-->
								<!--begin::Sidebar menu-->
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
									<!--begin::Heading-->
									<div class="menu-item mb-2">
										<div class="menu-heading text-uppercase fs-7 fw-bold">Menu</div>
										<!--begin::Separator-->
										<div class="app-sidebar-separator separator"></div>
										<!--end::Separator-->
									</div>
									<!--end::Heading-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-home-2 fs-2"></i>
											</span>
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link active" href="../../demo38/dist/index.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Default</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('adduser') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add User</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('dataFetch') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">User Data</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo38/dist/dashboards/online-courses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Online Courses</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo38/dist/dashboards/marketing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Marketing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/bidding.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Bidding</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/pos.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">POS System</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/call-center.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Call Center</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/logistics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Logistics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/website-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Website Analytics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/finance-performance.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Finance Performance</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/store-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Store Analytics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/social.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Social</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/delivery.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Delivery</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/crypto.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Crypto</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/school.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">School</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/dashboards/podcast.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Podcast</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo38/dist/landing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Landing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<div class="menu-item">
												<div class="menu-content">
													<a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
														<span data-kt-toggle-text-target="true">Show 12 More</span>
														<i class="ki-outline ki-minus-square toggle-on fs-2 me-0"></i>
														<i class="ki-outline ki-plus-square toggle-off fs-2 me-0"></i>
													</a>
												</div>
											</div>
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-gift fs-2"></i>
											</span>
											<span class="menu-title">Pages</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">User Profile</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/user-profile/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overview</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/user-profile/projects.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Projects</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/user-profile/campaigns.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Campaigns</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/user-profile/documents.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Documents</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/user-profile/followers.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Followers</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/user-profile/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activity</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Account</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overview</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/security.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Security</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activity</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/billing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Billing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/statements.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Statements</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/referrals.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Referrals</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/api-keys.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">API Keys</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/account/logs.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Logs</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Authentication</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Corporate Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/corporate/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/corporate/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/corporate/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/corporate/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/corporate/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overlay Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/overlay/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/overlay/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/overlay/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/overlay/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/overlay/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Creative Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/creative/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/creative/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/creative/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/creative/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/creative/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Fancy Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/fancy/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/fancy/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/fancy/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/fancy/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/layouts/fancy/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Email Templates</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/welcome-message.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Welcome Message</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/subscription-confirmed.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Subscription Confirmed</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/card-declined.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Credit Card Declined</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/promo-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Promo 1</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/promo-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Promo 2</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/authentication/email/promo-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Promo 3</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/extended/multi-steps-sign-up.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Multi-steps Sign-up</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/welcome.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Welcome Message</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/verify-email.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Verify Email</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/coming-soon.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Coming Soon</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/password-confirmation.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Password Confirmation</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/account-deactivated.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Account Deactivation</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/error-404.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Error 404</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/authentication/general/error-500.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Error 500</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Corporate</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/about.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">About</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/team.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Our Team</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Contact Us</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Licenses</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/sitemap.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sitemap</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Social</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/social/feeds.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Feeds</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/social/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activty</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/social/followers.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Followers</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/social/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blog</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/blog/home.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Blog Home</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/blog/post.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Blog Post</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/faq/classic.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">FAQ Classic</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/faq/extended.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">FAQ Extended</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Pricing</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/pricing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Column Pricing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/pricing/table.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Table Pricing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Careers</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/careers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Careers List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/pages/careers/apply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Careers Apply</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Widgets</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/widgets/lists.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Lists</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/widgets/statistics.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Statistics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/widgets/charts.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Charts</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/widgets/mixed.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Mixed</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/widgets/tables.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tables</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/widgets/feeds.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Feeds</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-26 fs-2"></i>
											</span>
											<span class="menu-title">Apps</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Projects</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">My Projects</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Project</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/targets.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Targets</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/budget.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Budget</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Files</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activity</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/projects/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">eCommerce</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Catalog</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Products</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/catalog/categories.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Categories</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/catalog/add-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Product</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/catalog/edit-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Product</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/catalog/add-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Category</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/catalog/edit-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Category</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/sales/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Orders Listing</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/sales/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Order Details</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/sales/add-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Order</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/sales/edit-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Order</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customers</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Listing</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/customers/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Details</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reports</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/reports/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Products Viewed</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/reports/sales.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sales</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/reports/returns.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Returns</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/reports/customer-orders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Orders</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/ecommerce/reports/shipping.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Shipping</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/ecommerce/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contacts</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/contacts/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Getting Started</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/contacts/add-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Contact</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/contacts/edit-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Contact</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/contacts/view-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Contact</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Support Center</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/support-center/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overview</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tickets</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/support-center/tickets/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tickets List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/support-center/tickets/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Ticket</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorials</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/support-center/tutorials/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tutorials List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/support-center/tutorials/post.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tutorial Post</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/support-center/faq.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">FAQ</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/support-center/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Licenses</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/support-center/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Contact Us</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/user-management/users/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/user-management/users/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View User</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/user-management/roles/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Roles List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/user-management/roles/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Role</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/user-management/permissions.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Permissions</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customers</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/customers/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Getting Started</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/customers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Listing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/customers/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Details</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/subscriptions/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Getting Started</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/subscriptions/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Subscription List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/subscriptions/add.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Subscription</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/subscriptions/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Subscription</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Invoice Manager</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Invoices</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/invoices/view/invoice-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invoice 1</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/invoices/view/invoice-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invoice 2</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/apps/invoices/view/invoice-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invoice 3</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/invoices/create.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Invoice</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">File Manager</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/file-manager/folders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Folders</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/file-manager/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Files</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/file-manager/blank.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Blank Directory</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/file-manager/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Inbox</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/inbox/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Messages</span>
															<span class="menu-badge">
																<span class="badge badge-success">3</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/inbox/compose.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Compose</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/inbox/reply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View & Reply</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Chat</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/chat/private.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Private Chat</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/chat/group.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Group Chat</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/apps/chat/drawer.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Drawer Chat</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo38/dist/apps/calendar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Calendar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-35 fs-2"></i>
											</span>
											<span class="menu-title">Utilities</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Modals</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">General</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/general/invite-friends.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invite Friends</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/general/view-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/general/select-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/general/upgrade-plan.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Upgrade Plan</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/general/share-earn.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Share & Earn</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Forms</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/forms/new-target.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Target</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/forms/new-card.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Card</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/forms/new-address.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Address</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/forms/create-api-key.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create API Key</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/forms/bidding.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Bidding</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Wizards</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/create-app.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create App</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/create-campaign.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Campaign</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/create-account.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Business Acc</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/create-project.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Project</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/top-up-wallet.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Top Up Wallet</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/offer-a-deal.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Offer a Deal</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/two-factor-authentication.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two Factor Auth</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Search</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/search/users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo38/dist/utilities/modals/search/select-location.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Location</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Wizards</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/two-factor-authentication.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two Factor Auth</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/create-app.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create App</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/create-campaign.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Campaign</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/create-account.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Account</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/create-project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Project</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/modals/wizards/top-up-wallet.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Top Up Wallet</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/wizards/offer-a-deal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Offer a Deal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Search</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/search/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/search/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/search/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo38/dist/utilities/search/select-location.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Location</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-briefcase fs-2"></i>
											</span>
											<span class="menu-title">Help</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Components</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Documentation</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo38/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Layout Builder</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Changelog v8.2.0</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Sidebar menu-->
							</div>
						</div>
						<!--end::Navs-->
					</div>
					<!--end::Sidebar-->
