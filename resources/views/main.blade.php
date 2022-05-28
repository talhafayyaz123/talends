<!doctype html>

<html class="no-js"  lang="" dir="{{Helper::getTextDirection()}}">



<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>



	@if (trim($__env->yieldContent('title')))

		<title>@yield('title')</title>

	@else 

		<title>{{ config('app.name') }}</title>

	@endif

	<meta name="description" content="@yield('description')">

	<meta name="keywords" content="@yield('keywords')">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">





    <meta property="og:title" content="Talends" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:site" content="@Talends" />

    <meta name="twitter:title" content="Talends" />

    <meta property="og:description" content="Talends" />

    <meta name="twitter:description" content="Talends" />

    <meta property="og:image"  />

    <meta name="twitter:image"  />



	<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">

    <link rel="shortcut icon" href="{{ asset('talends/assets/img/fav/favicon.png')}}">

    <link rel="apple-touch-icon" href="{{ asset('talends/assets/img/fav/apple-touch-icon-57x57.png')}}">

    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('talends/assets/img/fav/apple-touch-icon-72x72.png')}}">

    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('talends/assets/img/fav/apple-touch-icon-114x114.png')}}">



	<link rel="icon" href="{{{ asset(Helper::getSiteFavicon()) }}}" type="image/x-icon">



	@stack('PackageStyle')



    <link rel="preload" href="{{ asset('talends/assets/css/animate.css')}}" as="style">

    <link rel="stylesheet" href="{{ asset('talends/assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('talends/bootstrap/4.4.1/css/bootstrap.min.css')}}" >

 





    @stack('sliderStyle')





	<link rel="preload" href="{{ asset('talends/assets/css/style.css')}}" as="style">

    <link rel="stylesheet" href="{{ asset('talends/assets/css/style.css')}}">

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


    <script src="{{ asset('talends/jquery-3.4.1.slim.min.js') }}" >

    </script>

    <script defer src="{{ asset('talends/bbcc34f546.js') }}" ></script>

	<link href="{{ asset('talends/assets/css/main_customization.css') }}" rel="stylesheet">

<!-- 	<link href="{{ asset('talends/assets/css/register.css') }}" rel="stylesheet">
 -->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



	<link rel="stylesheet" href="{{ asset('bootstrap-multiselect.css') }}" type="text/css">
	<script type="text/javascript" src="{{ asset('bootstrap-multiselect.js') }}"></script>


	@if(Helper::getTextDirection() == 'rtl')

		<link href="{{ asset('css/rtl.css') }}" rel="stylesheet">

	@endif



    @php echo \App\Typo::setSiteStyling(); @endphp

    

	@stack('stylesheets')

	

	@if (Auth::user())

		<script type="text/javascript">

			var USERID = {!! json_encode(Auth::user()->id) !!}

			window.Laravel = {!! json_encode([

			'csrfToken'=> csrf_token(),

			'user'=> [

				'authenticated' => auth()->check(),

				'id' => auth()->check() ? auth()->user()->id : null,

				'name' => auth()->check() ? auth()->user()->first_name : null,

				'image' => !empty(auth()->user()->profile->avater) ? asset('uploads/users/'.auth()->user()->id .'/'.auth()->user()->profile->avater) : asset('images/user-login.png'),

				'image_name' => !empty(auth()->user()->profile->avater) ? auth()->user()->profile->avater : '',

				]

				])

			!!};

		</script>

	@endif

	<script>

		window.trans = <?php

		$lang_files = File::files(resource_path() . '/lang/' . App::getLocale());

		$trans = [];

		foreach ($lang_files as $f) {

			$filename = pathinfo($f)['filename'];

			$trans[$filename] = trans($filename);

		}

		echo json_encode($trans);

		?>;

	</script>

</head>



<body class="{{Helper::getBodyLangClass()}} {{Helper::getTextDirection()}} {{empty(Request::segment(1)) ? 'home' : '' }}">

	{{ \App::setLocale(env('APP_LANG')) }}

	<!--[if lt IE 8]>

		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

	<![endif]-->

	@php

		$general_settings = !empty(App\SiteManagement::getMetaValue('settings')) ? App\SiteManagement::getMetaValue('settings') : array();

		$enable_loader = !empty($general_settings) && !empty($general_settings[0]['enable_loader']) ? $general_settings[0]['enable_loader'] : true;

	@endphp

	@if (!empty($enable_loader) && ($enable_loader === true || $enable_loader === 'true'))

		<div class="preloader-outer">

			<div class="preloader-holder">

				<div class="loader"></div>

			</div>

		</div>

	@endif

	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">

		<div class="wt-contentwrapper">

			@yield('header')

			@yield('slider')

			@yield('main')

			@yield('footer')

		</div>

	</div>



	<script src="{{ asset('talends/npm/popper_js_1.16.0/dist/umd/popper.min.js') }}" ></script>
	<script src="{{ asset('talends/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('talends/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('talends/assets/js/main.js') }}"></script>

    <script src="{{ asset('talends/assets/js/register.js') }}"></script>


	

	@yield('bootstrap_script')
    @stack('scripts')

</body>

</html>

