  <section class="comon_section bg-white">
            <div class="container">
                <div class="row justify-around">
                    <div class="col-lg-4 col-md-6">
                        <h2 class="sec_titles"><i></i>Move</h2>
                        @foreach($articles->take(3) as $article)
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb">
                                <img src="http://rapvue.test{{$article->Avatar}}" alt="">
                            </div>
                            <div class="tw_3_content">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats reds">Move</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h2 class="sec_titles"><i></i>Gaming</h2>
                       @foreach($articles->take(3) as $article)
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb">
                                <img src="http://rapvue.test{{$article->Avatar}}" alt="">
                            </div>
                            <div class="tw_3_content">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats reds">Gaming</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>