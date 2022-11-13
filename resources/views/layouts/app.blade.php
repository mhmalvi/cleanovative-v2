<!DOCTYPE html>
<html lang="en">
<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title>@yield('title')</title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    @include('layouts.styles')
</head>

<body>
	<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
    <div id="app">
        <!--====== PRELOADER ======-->
        @include('layouts.header')

        <main>
            @yield('content')
        </main>

        <!--====== GO TO TOP PART START ======-->
        <div class="go-top-area">
            <div class="go-top-wrap">
                <div class="go-top-btn-wrap">
                    <div class="go-top go-top-btn">
                        <i class="bi bi-chevron-double-up"></i>
                        <i class="bi bi-chevron-double-up"></i>
                    </div>
                </div>
            </div>
        </div>

        <!--====== GO TO TOP PART ENDS ======-->
        @include('layouts.footer')
    </div>
    @if (!in_array(Route::currentRouteName(), ['book_now', 'gift_cards', 'signin', 'signup']))
        <script src="{{asset('js/app.js')}}" type="text/javascript" defer></script>
    @endif

    @include('layouts.scripts')

    @stack('js')
</body>

</html>
