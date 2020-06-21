<section class="banner_01" style="background:url('http://rapvue.test{{$article->Avatar}}') no-repeat center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banner_1_content">
                            <a href="#" class="cats blues2">{{$article->Category->nom}}</a>
                            <h2>{{$article->titre}}</h2>
                            <div class="post_banner_meta clearfix">
                                <img src="http://rapvue.test{{$article->Creator->Avatar}}" alt=""/>
                                <span class="fi1cm_author">By <a href="#">{{$article->Creator->Full_Name}}</a></span>
                                <span class="fi1cm_date">-<a href="#"><i class="twi-clock2"></i>{{$article->DateActu}}</a></span>
                                <a class="view" href="#"><i class="magro-fire"></i>120</a>
                                <a class="like" href="#"><i class="magro-view"></i>1.1k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb"><a href="index-2.html">Home</a>><a href="index-2.html">Fashion</a>><span>Secretart for Economic…</span></div>
        </section>