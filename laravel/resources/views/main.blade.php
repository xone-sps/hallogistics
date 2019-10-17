<!DOCTYPE html>
<html>
@include('layouts.header')
<body class="sidebar-mini layout-fixed sidebar-open">
<div class="wrapper">
	@include('layouts.navbar')
@include('layouts.sidebar')
{{-- @include('_include._message') --}}
@yield('content')
</div>
@include('layouts.footer')
</body>
</html>