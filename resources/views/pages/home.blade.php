@extends('layouts.site')
@section('meta-section')
        
        <title>Toute l'actualité du Rap Français - Rap2France</title>
 <meta property="og:title" content="RAP 2 FRANCE" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{env('APP_URL')}}" />
<link rel="stylesheet" type="text/css" href="https://img.rap2france.com/public/templates/template/css/animate.css"/> 
<link rel="stylesheet" type="text/css" href="https://img.rap2france.com/public/templates/template/css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="https://img.rap2france.com/public/templates/template/css/owl.theme.default.min.css"/>
 <link rel="stylesheet" type="text/css" href="https://img.rap2france.com/public/templates/template/css/slick.css">
 <link rel="stylesheet" type="text/css" href="https://img.rap2france.com/public/templates/template/css/ignore_for_wp.css"/>

@endsection
@section('main-section') 
	 
	@if($featuredArticles->count() > 0)
	@include('components.homepage.featuredPosts')
	@endif 
	@include('components.ad')
	@include('components.homepage.topWeek')
	@include('components.homepage.streetPosts')
	@include('components.homepage.lifeStylePosts')
	@include('components.homepage.FeaturedSlider')
	@include('components.homepage.CinePosts')
	@include('components.homepage.MovePosts')
	@include('components.homepage.instagramPictures')
	@include('components.homepage.footer')
@endsection

@section('page-script-include')

        <script src="https://img.rap2france.com/public/templates/template/js/lightcase.js"></script>
<script src="https://img.rap2france.com/public/templates/template/js/stickyfill.min.js"></script>
	        <script src="https://img.rap2france.com/public/templates/template/js/slick.js"></script>
<script src="https://img.rap2france.com/public/templates/template/js/stickyfill.min.js"></script>
	 <script src="https://img.rap2france.com/public/templates/template/js/owl.carousel.min.js"></script>

@endsection