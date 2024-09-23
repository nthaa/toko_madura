<html lang="en">
    <head>
    <base href="../../../" />
		<title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/keen" />
		<meta property="og:site_name" content="Keen by Keenthemes" />
		<link rel="canonical" href="http://preview.keenthemes.comauthentication/layouts/corporate/sign-in.html" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>

    <body id="kt_body" class="app-blank app-blank">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
                <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
            <!--end::Theme mode setup on page load-->
            <!--begin::Root-->
            <div class="d-flex flex-column flex-root" id="kt_app_root">
                <!--begin::Authentication - Sign-in -->
                <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                    <!--begin::Aside-->
                    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center" style="background-image: url(assets/media/misc/auth-bg.png)">
                        <!--begin::Content-->
                        <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
                            <!--begin::Logo-->
                            <a href="index.html" class="mb-0 mb-lg-20">
                                <img alt="Logo" src="assets/media/logos/default-white.svg" class="h-40px h-lg-50px" />
                            </a>
                            <!--end::Logo-->
                            <!--begin::Image-->
                            <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="assets/media/misc/auth-screens.png" alt="" />
                            <!--end::Image-->
                            <!--begin::Title-->
                            <h1 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post, 
                            <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the blogger</a>introduces a person they’ve interviewed 
                            <br />and provides some background information about 
                            <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the interviewee</a>and their 
                            <br />work following this is a transcript of the interview.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--begin::Aside-->
                    <!--begin::Body-->
                    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                        <!--begin::Form-->
                        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                            <!--begin::Wrapper-->
                            <div class="w-lg-500px p-10">
                                <!--begin::Form-->
                                
                
                                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                                        <div class="text-center mb-11">
                                            <!--begin::Title-->
                                            <h1 class="text-gray-900 fw-bolder mb-3">Login</h1>
                                            <!--end::Title-->
                                            <!--begin::Subtitle-->
                                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                                            <!--end::Subtitle=-->
                                        </div>
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="fv-row mb-8">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  class="form-control bg-transparent" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="fv-row mb-3">
                                            <x-input-label for="password" :value="__('Password')" />

                                            <x-text-input placeholder="Password" class="form-control bg-transparent"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                            
                                        <!-- Remember Me -->
                                        

                                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                            @if (Route::has('password.request'))
                                                <a class="link-primary" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="d-grid mb-10">
                                            <x-primary-button id="kt_sign_in_submit" class="btn btn-primary">
                                                <span class="indicator-label">{{ __('Log in') }}</span>
                                                <span class="indicator-progress">Please wait... 
										        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </x-primary-button>
                                        </div>
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
                                        
                                    </form>
                                
                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Form-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-center flex-wrap px-5">
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold text-primary fs-base">
                                <a href="https://keenthemes.com" class="px-5" target="_blank">Terms</a>
                                <a href="https://devs.keenthemes.com" class="px-5" target="_blank">Plans</a>
                                <a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" class="px-5" target="_blank">Contact Us</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Authentication - Sign-in-->
            </div>
    </body>
</html>