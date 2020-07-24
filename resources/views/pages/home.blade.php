@extends('layouts.site')
@section('meta-section')
        
        <title>Toute l'actualité du Rap Français - Rap2France</title>

@endsection
@section('main-section')
	
	@if($featuredArticles->count() > 0)
	@include('components.homepage.featuredPosts')
	@endif
	@include('components.ad')
	@include('components.homepage.topWeek')
	@include('components.homepage.streetPosts')
	@include('components.homepage.FeaturedSlider')
	@include('components.homepage.CinePosts')
	@include('components.homepage.MovePosts')
	@include('components.homepage.instagramPictures')
	@include('components.homepage.footer')
@endsection