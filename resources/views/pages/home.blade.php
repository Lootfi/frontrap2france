@extends('layouts.site')
@section('meta-section')
        
        <title>Toute l'actualité du Rap Français - Rap2France</title>
 <meta property="og:title" content="RAP 2 FRANCE" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{env('APP_URL')}}" />
{{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/animate.css"/> 
<link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/owl.theme.default.min.css"/>
 <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/slick.css">
 <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/ignore_for_wp.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> --}}
 <link rel="stylesheet" href="{{asset('css/home.css')}}">
	<title>Rap2France Home</title>

@endsection
@section('main-section') 
	{{-- @if($featuredArticles->count() > 0)
	@include('components.homepage.featuredPosts')
	@endif 
	@include('components.ad')
	@include('components.homepage.topWeek')
	@include('components.homepage.streetPosts')
	@include('components.homepage.lifeStylePosts')
	@include('components.homepage.FeaturedSlider')
	@include('components.homepage.CinePosts')
	@include('components.homepage.MovePosts') 
	@include('components.homepage.footer')--}}
	
	@include('components.home.one')
	@include('components.home.two')
	@include('components.home.three')
	@include('components.home.four')
	@include('components.home.five')
	@include('components.home.six')
	@include('components.home.seven')
@endsection

@section('page-script-include')
<script>
	            $(".search_btn a").on("click", function(e) {
        e.preventDefault();
        $(".search_btn").toggleClass("active");
    });
</script>

        {{-- <script src="https://cd1.rap2france.com/public/templates/template/js/lightcase.js"></script>
<script src="https://cd1.rap2france.com/public/templates/template/js/stickyfill.min.js"></script>
	        <script src="https://cd1.rap2france.com/public/templates/template/js/slick.js"></script>
<script src="https://cd1.rap2france.com/public/templates/template/js/stickyfill.min.js"></script>
	 <script src="https://cd1.rap2france.com/public/templates/template/js/owl.carousel.min.js"></script> --}}
	 
@endsection