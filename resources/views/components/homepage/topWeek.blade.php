  <section class="comon_section bg_white clearfix">
            <div class="container">
                <div class="row cus_top_week_column clearfix">
                    <div class="col-lg-8 clearfix">
                        <h2 class="sec_titles"><i></i>C'est Chaud</h2>
                        <div class="magro_tab_1">
                            <ul class="mtab_1 right_top nav nav-tabs" id="top_of_the_week_tab">
                                <li><a class="active" href="#t_tab_1" data-toggle="tab">Top d'aujourd'hui</a></li>
                                <li><a href="#t_tab_2" data-toggle="tab">Top d'hier</a></li>
                                <li><a href="#t_tab_3" data-toggle="tab">Top de semaine</a></li>
                                <li><a href="#t_tab_4" data-toggle="tab">Top du mois</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show in active" id="t_tab_1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="top_week_1">
                                                <div class="tw1_thumb">
                                                    <img loading="lazy" src="{{$topToday->first()->article->getAvatar(320,320)}}" alt="">
                                                    <div class="tw1_cats">
                                                        <a href="{{Route('categories.show',$topToday->first()->article->Category->slug)}}" class="cats blues2">{{$topToday->first()->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_details">
                                                    <h2><a href="{{Route('news.show',$topToday->first()->article->tag)}}">{{$topToday->first()->article->titre}}</a></h2>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>Par<a href="{{Route('editors.show',$topToday->first()->article->Creator->slug)}}">{{$topToday->first()->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$topToday->first()->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 noPaddingRight">
                                            @foreach($topToday->slice(1)->take(3) as $article)
                                            <div class="tw1_list clearfix">
                                                <div class="tw1l_thumb">
                                                    <img loading="lazy" src="{{$article->article->getAvatar(155,90)}}" alt="">
                                                    <div class="tw1l_cats">
                                                        <a href="{{Route('categories.show',$article->article->Category->slug)}}" class="cats reds">{{$article->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_l_content">
                                                    <h3><a href="{{Route('news.show',$article->article->tag)}}">{{$article->article->titre}}</a></h3>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$article->article->Creator->slug)}}">{{$article->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$article->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t_tab_2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="top_week_1">
                                                <div class="tw1_thumb">
                                                    <img loading="lazy" src="{{$topYesterday->first()->article->getAvatar(320,320)}}" alt="">
                                                    <div class="tw1_cats">
                                                        <a href="{{Route('categories.show',$topYesterday->first()->article->Category->slug)}}" class="cats blues2">{{$topYesterday->first()->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_details">
                                                    <h2><a href="{{Route('news.show',$topYesterday->first()->article->tag)}}">{{$topYesterday->first()->article->titre}}</a></h2>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>Par<a href="{{Route('editors.show',$topYesterday->first()->article->Creator->slug)}}">{{$topYesterday->first()->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$topYesterday->first()->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 noPaddingRight">
                                            @foreach($topYesterday->slice(1)->take(3) as $article)
                                            <div class="tw1_list clearfix">
                                                <div class="tw1l_thumb">
                                                    <img loading="lazy" src="{{$article->article->getAvatar(155,90)}}" alt="">
                                                    <div class="tw1l_cats">
                                                        <a href="{{Route('categories.show',$article->article->Category->slug)}}" class="cats reds">{{$article->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_l_content">
                                                    <h3><a href="{{Route('news.show',$article->article->tag)}}">{{$article->article->titre}}</a></h3>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$article->article->Creator->slug)}}">{{$article->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$article->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t_tab_3" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="top_week_1">
                                                <div class="tw1_thumb">
                                                    <img loading="lazy" src="{{$topWeek->first()->article->getAvatar(320,320)}}" alt="">
                                                    <div class="tw1_cats">
                                                        <a href="{{Route('categories.show',$topWeek->first()->article->Category->slug)}}" class="cats blues2">{{$topWeek->first()->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_details">
                                                    <h2><a href="{{Route('news.show',$topWeek->first()->article->tag)}}">{{$topWeek->first()->article->titre}}</a></h2>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>Par<a href="{{Route('editors.show',$topWeek->first()->article->Creator->slug)}}">{{$topWeek->first()->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$topWeek->first()->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 noPaddingRight">
                                            @foreach($topWeek->slice(1)->take(3) as $article)
                                            <div class="tw1_list clearfix">
                                                <div class="tw1l_thumb">
                                                    <img loading="lazy" src="{{$article->article->getAvatar(155,90)}}" alt="">
                                                    <div class="tw1l_cats">
                                                        <a href="{{Route('categories.show',$article->article->Category->slug)}}" class="cats reds">{{$article->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_l_content">
                                                    <h3><a href="{{Route('news.show',$article->article->tag)}}">{{$article->article->titre}}</a></h3>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$article->article->Creator->slug)}}">{{$article->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$article->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t_tab_4" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="top_week_1">
                                                <div class="tw1_thumb">
                                                    <img loading="lazy" src="{{$topMonth->first()->article->getAvatar(320,320)}}" alt="">
                                                    <div class="tw1_cats">
                                                        <a href="{{Route('categories.show',$topMonth->first()->article->Category->slug)}}" class="cats blues2">{{$topMonth->first()->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_details">
                                                    <h2><a href="{{Route('news.show',$topMonth->first()->article->tag)}}">{{$topMonth->first()->article->titre}}</a></h2>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>Par<a href="{{Route('editors.show',$topMonth->first()->article->Creator->slug)}}">{{$topMonth->first()->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$topMonth->first()->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 noPaddingRight">
                                            @foreach($topMonth->slice(1)->take(3) as $article)
                                            <div class="tw1_list clearfix">
                                                <div class="tw1l_thumb">
                                                    <img loading="lazy" src="{{$article->article->getAvatar(155,90)}}" alt="">
                                                    <div class="tw1l_cats">
                                                        <a href="{{Route('categories.show',$article->article->Category->slug)}}" class="cats reds">{{$article->article->Category->nom}}</a>
                                                    </div>
                                                </div>
                                                <div class="tw1_l_content">
                                                    <h3><a href="{{Route('news.show',$article->article->tag)}}">{{$article->article->titre}}</a></h3>
                                                    <div class="comon_meta clearfix">
                                                        <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$article->article->Creator->slug)}}">{{$article->article->Creator->Full_Name}}</a></span>
                                                        <span class="cm_date"><a href="#">{{$article->article->DateActu}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="widget mag_cat_widget">
                            <h3 class="widget_title"><span>Top Hashtags</span></h3>

                            @foreach($popular_hashtags->take(5) as $hashtag)
                            <div class="mcw_content">   
                                <div class="mcwc_items">
                                    <a href="#">
                                        <img loading="lazy" src="{{asset('assets/template/images/widget/cat/1.jpg')}}" alt="">
                                        <span class="mcwc_name">{{$hashtag->nom}}</span>
                                        <span class="mcwc_count">{{$hashtag->repetition}}</span>
                                    </a>
                                </div>
                                
                            </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Post Section -->