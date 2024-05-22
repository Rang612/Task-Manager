<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("profile.auth.head")
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div class="container sign-in-page-bg mt-5 p-0">
        <div class="row no-gutters">
            @include('profile.auth.sidebar')
            <div class="col-md-12 position-relative">
                @yield('content')

            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->
@include("profile.auth.bodyJS")
</body>
</html>
