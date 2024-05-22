<!doctype html>
<html lang="en">
@include("profile.manager.head")
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="page">
    <!-- Sidebar  -->
    @include('profile.manager.sidebar')
    <!-- loader END -->
    <!-- Nav Bar  -->
    @include("profile.manager.header")
    <!-- Nav Bar END -->
    <div class="page-wrapper">
        <!-- Page header -->
        @include('profile.manager.pageheader')
        <!-- Page header END -->
        <div class="container-fluid">
            @yield("content")
        </div>
        <!-- Footer -->
        @include('profile.manager.footer')
        <!-- Footer END -->
    </div>

</div>

<!-- Wrapper END -->
@include('profile.manager.bodyJS')
@include('profile.manager.format')

</body>
</html>
