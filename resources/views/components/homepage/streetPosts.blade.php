<section class="comon_section life_style_sec bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec_titles"><i></i>C'est la Street</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($articles->take(4) as $article)
                    <div class="col-lg-6">
                        <div class="tw2_list clearfix">
                            <div class="tw2l_thumb">
                                <img src="http://rapvue.test/{{$article->Avatar}}" alt="">
                            </div>
                            <div class="tw2_l_content">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats reds">Street</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                                <div class="comon_meta clearfix">
                                    <span class="cm_author"><i class="twi-user"></i>By <a href="{{Route('editors.show',$article->Creator->slug)}}"> {{$article->Creator->Full_Name}}</a></span>
                                    <span class="cm_date"><a href="#">{{$article->DateActu}}</a></span>
                                </div>
                                <p>
                            {!! html_entity_decode($article->contenutext, ENT_QUOTES, 'UTF-8') !!}                </p>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="tw2_list_slide owl-carousel">
                            @foreach($articles->take(4) as $article)
                            <div class="single_tw2_list">
                                <img src="http://rapvue.test{{$article->Avatar}}" alt=""/>
                                <div class="tw2_list_content">
                                    <a href="#" class="cats reds">Dossiers</a>
                                    <div class="list_meta_con">
                                        <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                                        <div class="comon_meta clearfix">
                                            <span class="cm_author"><i class="twi-user"></i>By<a href="{{Route('editors.show',$article->Creator->slug)}}">{{$article->Creator->Full_Name}}</a></span>
                                            <span class="cm_date"><a href="#">{{$article->DateActu}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
        <!-- Lifestyle Section -->