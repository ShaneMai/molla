<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')

<body>
<div class="page-wrapper">
@include('frontend.includes.header')
    <main class="main">
@yield('content')
    </main><!--End .main-->
@include('frontend.includes.footer')
</body>
</html>
