<section class="comon_section life_style_sec bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec_titles"><i></i>C'est la Street</h2>
                    </div>
                </div>
                {{-- <div class="row">
                    @foreach($categories->where('slug','street')->first()->articles()->latest()->take(2) as $article)
                    <div class="col-lg-6">
                        <div class="tw2_list clearfix">
                            <div class="tw2l_thumb" style="width:300px" >
                                 <img loading="lazy" src="{{$article->getAvatar(300,180)}}" alt="">
                            </div>
                            <div class="tw2_l_content" style="padding-top:0px;">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats reds">Street</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                            <p>
                            {!! substr(html_entity_decode($article->contenutext, ENT_QUOTES, 'UTF-8'),0,100) !!} ...      </p>
                        </div>
                    </div>
                    
                    @endforeach
                </div> --}}
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="tw2_list_slide owl-carousel">
                            @foreach($articles->random(4) as $article)
                            <div class="single_tw2_list">
                                <img loading="lazy" src="{{$article->Avatar}}" alt=""/>
                                <div class="tw2_list_content">
                                    <a href="/categories/{{$article->Category->slug}}" class="cats reds">{{$article->Category->nom}}</a>
                                    <div class="list_meta_con">
                                        <h3><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    @foreach($categories->where('slug','street')->first()->articles()->latest()->get()->slice(2)->take(2) as $article)
                    <div class="col-lg-6">
                        <div class="tw2_list clearfix">
                            <div class="tw2l_thumb" style="width:300px" >
                                 <img loading="lazy" src="{{$article->getAvatar(300,180)}}" alt="">
                            </div>
                            <div class="tw2_l_content" style="padding-top:0px;">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats reds">Street</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                            <p>
                            {!! substr(html_entity_decode($article->contenutext, ENT_QUOTES, 'UTF-8'),0,100) !!} ...      </p>
                        </div>
                    </div>
                    
                    @endforeach
                </div> --}}
    
            </div>
        </section>
        <!-- Lifestyle Section -->