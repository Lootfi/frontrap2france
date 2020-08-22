<!-- Featured Carousel Section -->
        <section class="feature_section_1" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured_slider_2 owl-carousel">
                            @foreach($articles->take(5) as $article)
                            <div class="featured_slider_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="featured_slider_content">
                                            <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats pinks">{{$article->Category->nom}}</a>
                        <h2><a href="#">{{$article->titre}}</a></h2>
                                            <p>
                           {!! substr(html_entity_decode($article->contenutext, ENT_QUOTES, 'UTF-8'),0,100) !!} ...                  </p>
                                            <a href="/news/{{$article->tag}}" class="read_more">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 noPaddingRight">
                                        <div class="feature_img">
                                            <img loading="lazy"  src="{{$article->getAvatar(290,380)}}" alt="">
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
