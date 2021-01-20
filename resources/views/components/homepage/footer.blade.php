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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="f_bar"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <aside class="widget widget_about">
                            <div class="about_magro">
                                <a href="https://rap2france.com"><img src="{{asset('assets/logos/logo-footer.png')}}" alt="rap2france"></a>
                                <p>
                                    Rap2France est le site le plus complet sur le Rap Français. On y retrouve toute l'actualité du rap français, des paroles rap, écoutez des clips rap français, des biographies, des photos des rappeurs, des interviews rap.
                                </p>
                                <h4 style="line-height:1.5"> <a href="{{Route('contact')}}">Contactez nous ici</a> ou sur notre boite mail:  <span>rap2france@gmail.com</span></h4>
                            </div>
                        </aside>
                    </div>
                
                </div>
            
            </div>
        </footer>