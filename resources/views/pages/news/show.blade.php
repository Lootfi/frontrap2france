@extends('layouts.site')

@section('main-section')
<div id="wrapper">
    <div class="post-section" tag="{{$article->tag}}">
	@include('components.news.postHeader')
    <div class="content-container">
 <section class="sp_1_section " >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sb_bg py-1">
                            <div class="row">
                                <div class="col-lg-8 col-md-7">
                                    <div class="single_blog">
                                        {!! html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8') !!} 
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
<div class="loading text-center"><img class="inline-block mx-auto " style="animation: rotation 2s infinite linear" src="{{asset('assets/template/images/loading_hover.png')}}"/></div>
</div>
       

@endsection

@section('page-script')
    <script>    
        const wrapper = document.querySelector('#wrapper');
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
            <section class="banner_01" style="background:url('http://rapvue.test${article.Avatar}') no-repeat center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banner_1_content">
                            <a href="http://rapfront.test/categories/${article.Category.slug}" class="cats blues2">${article.Category.nom}</a>
                            <h2 class="title" tag="${article.tag}">${article.titre}</h2>
                            <div class="post_banner_meta clearfix">
                                <img src="http://rapvue.test${article.Creator.Avatar}" alt=""/>
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
                            <div class="row">
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
        wrapper.append(container);
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

          


       /* window.addEventListener('scroll', function(e){
         bottomOfWindow = document.documentElement.scrollTop + window.innerHeight === document.documentElement.offsetHeight;
        
        if(bottomOfWindow){

            fetch('/api/news/getMoreNews',{
            method: 'POST',
            headers :{
            
             'Content-Type': 'application/json',

            },
            body:JSON.stringify(data)},
            )
            .then(response => response.json())
            .then(data => {
            var article = Object.values(data)[0]
            const template = 
            
            `<div class="post-section" tag="${article.tag}">
            <section class="banner_01" style="background:url('http://rapvue.test${article.Avatar}') no-repeat center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banner_1_content">
                            <a href="http://rapfront.test/categories/${article.Category.slug}" class="cats blues2">${article.Category.nom}</a>
                            <h2 class="title" tag="${article.tag}">${article.titre}</h2>
                            <div class="post_banner_meta clearfix">
                                <img src="http://rapvue.test${article.Creator.Avatar}" alt=""/>
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
                        <div class="sb_bg">
                            <div class="row">
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
</div>`

        var container = document.createElement('div');
        container.innerHTML = template;
        wrapper.append(container);
        var lastTag = this.data.tags[this.data.tags.length - 1];
        this.data.tags = [...this.data.tags , article.tag]
        window.history.pushState( null, article.titre, `/news/${article.tag}` );
         section = document.querySelectorAll('.post-section');

            
            })

        }else{

        
        section.forEach(sectionEl => {
            var elementWatcher = scrollMonitor.create(sectionEl);
            elementWatcher.enterViewport(function() {
            window.history.pushState( null, "", `/news/${elementWatcher.watchItem.getAttribute('tag')}` );
        })
        
        })
        }
        });
    */

        
    </script>

@endsection