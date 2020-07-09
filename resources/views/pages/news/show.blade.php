@extends('layouts.site')

@section('main-section')
<div id="wrapper">
    <div id="posts_wrapper">
    <div class="post-section" tag="{{$article->tag}}">
	@include('components.news.postHeader')
    <div class="content-container">
 <section class="sp_1_section " >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sb_bg py-1">
                            <div class="row pt-4">
                                <div class="col-lg-8 col-md-7">
                                    <div class="single_blog ">
                                        {!! html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8') !!} 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5">
                                    <div class="sidebar_1">
                                        <aside class="widget mag_social_widget">
                                            <h3 class="widget_title"><span>Restez Connecté!</span></h3>
                                            <div class="social_area">
                                                <div class="single_social twi">
                                                    <a href="#"><i class="twi-twitter"></i></a>
                                                    <div class="social_meta">
                                                        <span>36.798</span> Fans
                                                        <a href="#">Like</a>
                                                    </div>
                                                </div>
                                                <div class="single_social fac">
                                                    <a href="#"><i class="twi-facebook-f"></i></a>
                                                    <div class="social_meta">
                                                        <span>145.519</span> Followers
                                                        <a href="#">Follow</a>
                                                    </div>
                                                </div>
                                                <div class="single_social you">
                                                    <a href="#"><i class="magro-play-button"></i></a>
                                                    <div class="social_meta">
                                                        <span>980</span> Subscribers
                                                        <a href="#">Subscribe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                        <aside class="widget">
                                            <div class="ads_widget">
                                                <h6>advertisement</h6>
                                                <a href="#"><img src="{{asset('assets/template/images/home1/ad2.jpg')}}" alt=""></a>
                                            </div>
                                        </aside>
                                    </div>
                     </div>
                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
</div>
</div>
</div>
<div class="loading text-center"><img class="inline-block mx-auto " style="animation: rotation 2s infinite linear" src="{{asset('assets/template/images/loading_hover.png')}}"/></div>
</div>
       

@endsection

@section('page-script')
    <script>    
        const wrapper = document.querySelector('#wrapper');
        const posts_wrapper = document.querySelector('#posts_wrapper');
        const primaryTag = document.querySelector('.title').getAttribute('tag');
        var section = document.querySelectorAll('.post-section');
        var loading = document.querySelector('.loading')

        var data  = {

                    tags: [ primaryTag ]
        };
        var counter = 1;

        const loadPost = () =>  {
          fetch('/api/news/getMoreNews',{
            method: 'POST',
            headers :{
            
             'Content-Type': 'application/json',

            },
            body:JSON.stringify(data)},
            )
            .then(response => response.json())
            .then(data => {
            var article = data
            const template = 
            
            `
            <section class="banner_01" style="background:url('${article.Avatar}') no-repeat center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banner_1_content">
                            <a href="/categories/${article.Category.slug}" class="cats blues2">${article.Category.nom}</a>
                            <h2 class="title" tag="${article.tag}">${article.titre}</h2>
                            <div class="post_banner_meta clearfix">
                                <img src="${article.Creator.Avatar}" alt=""/>
                                <span class="fi1cm_author">By <a href="#">${article.Creator.Full_Name}</a></span>
                                <span class="fi1cm_date">-<a href="#"><i class="twi-clock2"></i>${article.DateActu}</a></span>
                                <a class="view" href="#"><i class="magro-fire"></i>120</a>
                                <a class="like" href="#"><i class="magro-view"></i>1.1k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="content-container">
        <section class="sp_1_section " >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sb_bg py-0">
                            <div class="row pt-4">
                                <div class="col-lg-8 col-md-7">
                                    <div class="single_blog">
                                        ${article.contenu}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
`

        var container = document.createElement('div');
        container.classList.add('post-section')
        container.setAttribute("tag",article.tag)
        container.innerHTML = template;
        posts_wrapper.append(container);
        var lastTag = this.data.tags[this.data.tags.length - 1];
        this.data.tags = [...this.data.tags , article.tag]
        window.history.pushState( null, article.titre, `/news/${article.tag}` );
        section = document.querySelectorAll('.post-section');
        section.forEach(sectionEl => {

                sectionObserver.observe(sectionEl)
          })

}).catch(error => {

            loading.remove()
})
        }

        var LoadingObserver = new IntersectionObserver(function(entries){

            if (entries[0].isIntersecting === true) {
                loadPost();            
                wrapper.appendChild(loading);
            }
        },{threshold: [1] });

          LoadingObserver.observe(loading);

          var sectionObserver = new IntersectionObserver(function(entries){

                entries.forEach(entry => {

                    window.history.pushState( null, "", `/news/${entry.target.getAttribute('tag')}` );
                    
                })

             },{threshold : [0.5]});

        

        
    </script>

@endsection