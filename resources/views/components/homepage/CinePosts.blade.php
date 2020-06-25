<!-- Top Content Section -->
        <section class="comon_section top_content_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec_titles white"><i></i>Ciné, Art & Cultures</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($articles->take(3) as $article)
                        <div class="col-lg-4 col-md-6">
                        <div class="single_tc_post">
                            <img src="http://rapvue.test{{$article->Avatar}}" alt=""/>
                            <div class="tc_content">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats blues">Ciné</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}"><span>{{$article->titre}}</span></a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>