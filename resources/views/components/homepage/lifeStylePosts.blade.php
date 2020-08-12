 <section class="comon_section bg-white">
            <div class="container">
                <div class="row top_post_cus_column">
                    <div class="col-lg-8">
                        <h2 class="sec_titles"><i></i>LifeStyle</h2>
                        <div class="row">
                            @foreach($articles->take(4) as $article)
                            <div class="col-lg-6">
                                <div class="top_week_1 mb_60">
                                    <div class="tw1_thumb">
                                        <img loading="lazy" src="{{$article->Avatar}}" alt="">
                                        <div class="tw1_cats">
                                            <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats pinks2">LifeStyle</a>
                                        </div>
                                    </div>
                                    <div class="tw1_details">
                                        <h2><a href="#">{{$article->titre}}</a></h2>
                                        <div class="comon_meta clearfix">
                                            <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$article->Creator->slug)}}">{{$article->Creator->Full_Name}}</a></span>
                                            <span class="cm_date"><a href="#">{{$article->DateActu}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-12 mt_10">
                                <div class="ads text-center">
                                    <h5>advertisement</h5>
                                    <a href="#"><img  loading="lazy"src="{{asset('assets/template/images/home1/ad2.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pad_left_25">
                        <aside class="widget mag_ads_widget">
                            <div class="ads_widget">
                                <h6>advertisement</h6>
                                <a href="#"><img loading="lazy" src="{{asset('assets/template/images/home1/ad3.jpg')}}" alt=""></a>
                            </div>
                        </aside>
                        <aside class="widget mag_modern_widget">
                            <h3 class="widget_title"><span>Live</span></h3>
                            <div class="modern_slide owl-carousel">
                                 @foreach($articles->take(4) as $article)
                                <div class="single_modern">

                                    <div class="single_md_item">
                                        <img src="{{$article->Avatar}}" alt=""/>
                                        <a href="#">{{$article->titre}}</a>
                                    </div>
                                   </div>

                                  @endforeach

                        
                                

                            </div>
                        </aside>
                        <aside class="widget mag_latest_review_widget">
                            <h3 class="widget_title"><span>Polémique</span></h3>
                            <div class="lr_post_area">
                                <div class="lr_feature_post">
                                    <img src="{{$articles->first()->Avatar}}" alt=""/>
                                    <h4><a href="{{Route('news.show',$articles->first()->tag)}}">{{$articles->first()->titre}}</a></h4>
                                    <div class="comon_meta clearfix">
                                        <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$articles->first()->Creator->slug)}}">{{$articles->first()->Creator->Full_Name}}</a></span>
                                        <span class="cm_date"><a href="#">{{$article->first()->DateActu}}</a></span>
                                        <a class="comments" href="#">23</a>
                                    </div>
                                    <p>
                                        {!! substr(html_entity_decode($articles->first()->contenutext, ENT_QUOTES, 'UTF-8'),0,100) !!} ...
                                    </p>
                                </div>
                                @foreach($articles->slice(1)->take(2) as $article)
                                <div class="lr_sp">
                                    <img src="{{$article->Avatar}}" alt=""/>
                                    <h5><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h5>
                                    <span><a href="#">{{$article->DateActu}}</a></span>
                                </div>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Post Section -->