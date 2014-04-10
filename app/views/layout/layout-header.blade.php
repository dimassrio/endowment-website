<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{$pagetitle}} | Telkom University Endowment Program</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

		@section('header')
			{{HTML::style(asset('assets/style.min.css'))}}
			{{HTML::style(asset('assets/css/olightbox.jquery.css'))}}
			@yield('css')
		@show
	</head>
<body>

@include('include/header')