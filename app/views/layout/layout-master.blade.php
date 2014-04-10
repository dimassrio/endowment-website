@include('layout.layout-header')
<div class="main-wrapper">
	@include('include.navigation')
	@yield('body')
</div>
@include('include.footer')
@include('layout.layout-footer')