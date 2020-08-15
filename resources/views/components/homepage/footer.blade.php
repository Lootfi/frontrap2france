 <footer class="footer_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <aside class="widget">
                            <h2 class="widget_title"><i></i>Top Articles</h2>
                            @foreach($articles->take(3) as $article)
                            <div class="sf_s1_post">
                                <img loading="lazy"  src="{{$article->getAvatar(155,90)}}" alt=""/>
                                <h5><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h5>
                                <a class="sf_date" href="#">{{$article->DateActu}}</a>
                            </div>
                                @endforeach
                        </aside>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <aside class="widget">
                            <h2 class="widget_title"><i></i>Derniers dossiers</h2>
                            @foreach($categories->where('slug','dossier')->first()->articles()->take(3) as $article)
                            <div class="sf_s1_post">
                                <img loading="lazy"  src="{{$article->getAvatar(155,90)}}" alt=""/>
                                <h5><a href="/news/{{$article->tag}}">{{$article->titre}}</a></h5>
                                <a class="sf_date" href="#">{{$article->DateActu}}</a>
                            </div>
                                @endforeach
                        </aside>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <aside class="widget widget_categories">
                            <h2 class="widget_title"><i></i>Top Hashtags</h2>
                            <ul>
                                @foreach($popular_hashtags->take(5) as $hashtag)
                                <li><a href="#">{{$hashtag->nom}}</a>{{$hashtag->repetition}}</li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            
            </div>
        </footer>