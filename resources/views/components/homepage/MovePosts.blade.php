  <section class="comon_section bg-white">
            <div class="container">
                <div class="row justify-around">
                    <div class="col-lg-4 col-md-6">
                        <h2 class="sec_titles"><i></i>Move</h2>
                        @foreach($categories->where('slug','move')->first()->articles()->latest()->take(3) as $article)
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb" style="width:155px;">
                                <img loading="lazy" src="{{$article->getAvatar(155,90)}}" alt="">
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
                       @foreach($categories->where('slug','gaming')->first()->articles()->latest()->take(3) as $article)
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb" style="width:155px;">
                                <img loading="lazy" src="{{$article->getAvatar(155,90)}}"  alt="">
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