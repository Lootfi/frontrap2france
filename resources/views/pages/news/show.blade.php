@extends('layouts.site')

@section('main-section')
	@include('components.news.postHeader')
        <section class="sp_1_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sb_bg">
                            <div class="row">
                                <div class="col-lg-8 col-md-7">
                                    <div class="single_blog">
                                        {!! html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8') !!} 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection