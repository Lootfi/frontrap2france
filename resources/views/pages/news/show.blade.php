@extends('layouts.site')
@section('meta-section')

<title>{{$article->titre}}</title>
<meta property="og:title" content="{{$article->title}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{Route('news.show',$article->tag)}}" />
<meta property="og:image" content="{{$article->Avatar}}" />


<link rel="canonical" href="{{Route('news.show',$article->tag)}}" />
<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="article" />
{{-- <meta property="og:description" content="Vous l’attendiez ! Gambi brise enfin le mystère et revient avec le tubesque Khedma. Il revient en force avec un véritable hit dont il détient le secret : du rap assaisonné de son grain de folie à découvrir dès maintenant. Après une longue période de silence et d&rsquo;absence sur les réseaux sociaux, Gambi a totalement [&hellip;]" /> --}}
<meta property="og:site_name" content="RAP2FRANCE" />
{{-- <meta property="article:publisher" content="" /> --}}
<meta property="article:author" content="{{route('editors.show',$article->Creator->slug)}}" />
<meta property="article:published_time" content="{{$article->created_at}}" />
<meta property="article:modified_time" content="{{$article->updated_at}}" />
<meta property="og:image" content="{{$article->Avatar}}" />
{{-- <meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" /> --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:creator" content="{{$article->Creator->Details->twitter}}" />
<meta name="twitter:site" content="{{$article->Creator->Details->twitter}}" />
<meta name="twitter:label1" content="Écrit par" />
<meta name="twitter:data1" content="{{$article->Creator->Full_Name}}" />
<meta name="twitter:label2" content="Durée de lecture est." />
<meta name="twitter:data2" content="2 minutes" />


<link rel="stylesheet" href="{{asset('css/news.css')}}">

<script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "Article",
    "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.13or-du-hiphop.fr/2021/11/13/gambi-ramene-un-tank-dans-la-ville-avec-khedma/"
    },
    "headline": "Gambi ramène un tank dans la ville avec Khedma",
    "datePublished": "2021-11-13T00:41:15+0100",
    "dateModified": "2021-11-13T00:41:42+0100",
    "author": {
    "@type": "Person",
    "name": "Squat"
    },
    "description": "Vous l’attendiez ! Gambi brise enfin le mystère et revient avec le tubesque Khedma. Il revient en force avec u",
    "image": {
    "@type": "ImageObject",
    "url": "https://www.13or-du-hiphop.fr/wp-content/uploads/2021/11/maxresdefault-43.jpg",
    "width": 1280,
    "height": 720
    },
    "publisher": {
    "@type": "Organization",
    "name": "13OR-du-HipHop",
    "logo": {
    "@type": "ImageObject",
    "url": "https://www.13or-du-hiphop.fr/wp-content/uploads/2020/01/708189logo13or26-1.png",
    "width": 0,
    "height": 0
    }
    }
    }</script> 

<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@type": "WebSite",
          "@id": "{{ env('APP_URL') }}",
          "name": "Accueil"
        }
      }, {
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@type": "WebPage",
          "@id": "https://www.13or-du-hiphop.fr/rap_francais/",
          "name": "Rap Fr"
        }
      }, {
        "@type": "ListItem",
        "position": 3,
        "item": {
          "@type": "WebPage",
          "@id": "https://www.13or-du-hiphop.fr/rap_francais/news/",
          "name": "News Rap Francais"
        }
      }, {
        "@type": "ListItem",
        "position": 4,
        "item": {
          "@type": "WebPage",
          "@id": "https://www.13or-du-hiphop.fr/2021/11/13/gambi-ramene-un-tank-dans-la-ville-avec-khedma/",
          "name": "Gambi ramène un tank dans la ville avec Khedma"
        }
      }]
    }
  </script>

@endsection
@section('main-section')
{{-- <div id="wrapper" style="background: black;">
    <div id="posts_wrapper"> 
    <div class="post-section" title="{{$article->titre}}" tag="{{$article->tag}}">
@include('components.news.postHeader')
<div class="content-container">
    <section class="sp_1_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sb_bg py-1">
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-7">
                                <div class="single_blog ">
                                    @if($article->type == 1)
                                    {!! html_entity_decode($article->ContenuFormat['contenu'], ENT_QUOTES, 'UTF-8') !!}
                                    @else
                                    {!! html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8') !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="sidebar_1">
                                    <aside class="widget mag_social_widget">
                                        <h3 class="widget_title"><span>Restez Connecté!</span></h3>
                                        <div class="social_area">
                                            <div class="single_social fac">
                                                <a href="#"><i class="feather icon-facebook"></i></a>
                                                <div class="social_meta">
                                                    <span>{{$socialstatistics->facebook}}</span> Abonnés
                                                    <a href="#">S'abonner</a>
                                                </div>
                                            </div>
                                            <div class="single_social insta">
                                                <a href="#"><i class="feather icon-instagram"></i></a>
                                                <div class="social_meta">
                                                    <span>{{$socialstatistics->instagram}}</span> Abonnés
                                                    <a href="#">S'Abonner</a>
                                                </div>
                                            </div>
                                            <div class="single_social you">
                                                <a href="#"><i class="feather icon-youtube"></i></a>
                                                <div class="social_meta">
                                                    <span>{{$socialstatistics->youtube}}</span> Abonnés
                                                    <a href="#">S'Abonner</a>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                    <aside class="widget">
                                        <div class="ads_widget">
                                            <h6>advertisement</h6>
                                            <a href="#"><img loading="lazy"
                                                    src="{{asset('assets/template/images/home1/ad2.jpg')}}" alt=""></a>
                                        </div>
                                    </aside>
                                    <aside class="widget popular_post_2">
                                        <h3 class="widget_title"><span>Plus Populaire</span></h3>
                                        <div class="magrotab_popular">
                                            <ul class="nav nav-tabs" id="widget_tab">
                                                <li><a class="active" href="#pp_post_1" data-toggle="tab">Semaine</a>
                                                </li>
                                                <li><a href="#pp_post_2" data-toggle="tab">Mois</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show in active" id="pp_post_1"
                                                    role="tabpanel">
                                                    <div class="mp_post_feature clearfix">
                                                        <div class="mp_post_thumb">
                                                            <div
                                                                style="position: absolute; width: 100%; height: 100%; top: 0;left: 0;right: 0;bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                            </div>
                                                            <img src="{{$topWeek->first()->article->getAvatar(300,180)}}"
                                                                alt="">
                                                            <span>1</span>
                                                        </div>
                                                        <div class="mp_post_content">
                                                            <a href="#"
                                                                class="cats blues2">{{$topWeek->first()->article->Category->nom}}</a>
                                                            <h4><a href="#">{{$topWeek->first()->article->titre}}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    @foreach($topWeek->slice(1)->take(3) as $article)
                                                    <div class="mp_post clearfix">
                                                        <div class="mp_post_thumb">
                                                            <img src="{{$article->article->getAvatar(240,145)}}" alt="">
                                                            <span>2</span>
                                                            <a href="#" class="cats reds">Tech</a>
                                                        </div>
                                                        <div class="mp_post_content" style="padding-top: 0px;">
                                                            <h4><a href="#">Ceases New York City Fresh Grocery
                                                                    Business</a></h4>
                                                            <span class="cm_author"><i class="twi-user"></i>By <a
                                                                    href="#">Admin Staff</a></span>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="pp_post_2" role="tabpanel">
                                                    <div class="mp_post_feature clearfix">
                                                        <div class="mp_post_thumb">
                                                            <div
                                                                style="position: absolute; width: 100%; height: 100%; top: 0;left: 0;right: 0;bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                            </div>
                                                            <img src="{{$topMonth->first()->article->getAvatar(300,180)}}"
                                                                alt="">
                                                            <span>1</span>
                                                        </div>
                                                        <div class="mp_post_content">
                                                            <a href="#"
                                                                class="cats blues2">{{$topMonth->first()->article->Category->nom}}</a>
                                                            <h4><a href="#">{{$topMonth->first()->article->titre}}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    @foreach($topMonth->slice(1)->take(3) as $article)
                                                    <div class="mp_post clearfix">
                                                        <div class="mp_post_thumb">
                                                            <img src="{{$article->article->getAvatar(240,145)}}" alt="">
                                                            <span>2</span>
                                                            <a href="#" class="cats reds">Tech</a>
                                                        </div>
                                                        <div class="mp_post_content" style="padding-top: 0px;">
                                                            <h4><a href="#">Ceases New York City Fresh Grocery
                                                                    Business</a></h4>
                                                            <span class="cm_author"><i class="twi-user"></i>By <a
                                                                    href="#">Admin Staff</a></span>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </aside>
                                <aside class="widget mag_cat_widget">
                                    <h3 class="widget_title"><span>Top Hashtags</span></h3>

                                    @foreach($popular_hashtags->take(5) as $hashtag)
                                    <div class="mcw_content">
                                        <div class="mcwc_items">
                                            <a href="#">
                                                <img loading="lazy"
                                                    src="{{asset('assets/template/images/widget/cat/1.jpg')}}" alt="">
                                                <span class="mcwc_name">{{$hashtag->nom}}</span>
                                                <span class="mcwc_count">{{$hashtag->repetition}}</span>
                                            </a>
                                        </div>

                                    </div>
                                    @endforeach
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
<div class="loader"></div>
<div class="loading text-center"><img class="inline-block mx-auto " style="animation: rotation 2s infinite linear"
        src="https://cd1.rap2france.com/public/templates/template/images/loading_hover.png" /></div>
</div> --}}

<main class="pb-5 content">
    <div class="container">
        <div class="r2f-post-content">
            <div class="row" id="wrapper">
                <h1 class="fw-bold mt-3 mb-3 titlenews titleactu title" tag="{{$article->tag}}">{{$article->titre}}</h1>
                <div class="r2f-author align-items-center pb-2">
                    <img src="{{$article->Creator->Avatar}}" class="img-fluid rounded-circle me-3">
                    <p class="text-muted m-0 metainfos">
                        <span>Par</span>
                        <a href="{{Route('editors.show',$article->Creator->slug)}}"
                            class="text-dark">{{$article->Creator->Full_Name}}</a>
                        <span> - {{$article->DateActu}}</span>
                        <span class="r2f-post-meta p-0"><a href="{{Route('categories.show',$article->Category->slug)}}"
                                class="r2f-post-meta-design ms-2">{{$article->Category->nom}}</a></span>
                    </p>
                </div>
                <div class="col-lg-8 border-end" id="posts_wrapper">
                    <div class="post-section" title="{{$article->titre}}" tag="{{$article->tag}}">
                        <!-- Post Headline -->
                        <!-- Post Author -->

                        <div class="r2f-post-content-wrap">
                            <!-- Post Content Start -->
                            <div class="img-principal pb-4">
                                <img src="{{$article->Avatar}}" class="img-fluid w-100">
                            </div>

                            <div class="single_blog">
                                @if($article->type == 1)
                                {!! html_entity_decode($article->ContenuFormat['contenu'], ENT_QUOTES, 'UTF-8') !!}
                                @else
                                {!! html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8') !!}
                                @endif
                            </div>
                            <!-- END Post Content -->
                            <div class="border-top border-bottom py-3 mb-2"></div>
                        </div>
                    </div>


                </div>

                <div class="col-md-4 ps-lg-4 d-none d-lg-block d-xl-block">
                    <div class="r2r-news-right">
                        <!--<div class="pb-5 justify-content-center">
                        <div class="adactive">
                            <a href="#">
                                <img src="https://via.placeholder.com/300x600?text=Ad+Image" class="img-fluid">
                            </a>
                        </div>
                    </div>-->
                        <div class="pb-2">
                            <!--<h2 class="h6 text-uppercase bg-dark text-white mb-4 px-3 py-2">Don't miss</h2>-->
                            @foreach($topWeek->slice(1)->take(3) as $article)
                            <div class="r2f-post-wrap">
                                <div class="position-relative">
                                    <img src="{{$article->article->Avatar}}" class="img-fluid">
                                    <p class="r2f-post-meta position-absolute m-0 p-0 text-uppercase "><a href="#"
                                            class="r2f-post-meta-fashion">{{$article->article->Category->nom}}</a></p>
                                </div>
                                <div class="pt-3 mb-4 titlenews">
                                    <h3 class="h4"><a href="#">{{$article->article->titre}}</a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="r2f-form-wrap p-2">
                            <form class="p-5 border bg-white" action="" method="">
                                <p class="h4 fw-bold text-uppercase pb-4 text-dark text-center">Get the best
                                    viral stories straight into your inbox</p>
                                <div class="pb-3">
                                    <input type="email" class="w-100 p-2 text-center border text-dark" id=""
                                        placeholder="Your email address">
                                </div>
                                <div class="pb-3">
                                    <input type="submit" class="r2f-btn-global rounded w-100 py-2 fw-bold" name=""
                                        value="Subscribe">
                                </div>
                                <div class="form-check text-center">
                                    <input type="checkbox" class="form-check-input" id="">
                                    <label class="form-check-label text-muted" for="">Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit.</label>
                                </div>
                            </form>
                        </div>
                        <div class="pt-4 justify-content-center" id="adstick">
                            <div class="adactive">
                                <a href="#">
                                    <img src="https://via.placeholder.com/300x600?text=Ad+Image" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="loader"></div>
                <div class="loading text-center"><img class="inline-block mx-auto "
                        style="animation: rotation 2s infinite linear"
                        src="https://cd1.rap2france.com/public/templates/template/images/loading_hover.png" /></div>

            </div>
        </div>
    </div>

</main>

@endsection

@section('page-script')


<script>
    const wrapper = document.querySelector('#wrapper');
    const posts_wrapper = document.querySelector('#posts_wrapper');
    const primaryTag = document.querySelector('.title').getAttribute('tag');
    var section = document.querySelectorAll('.post-section');
    var loading = document.querySelector('.loading')
    var loader = document.querySelector('.loader');
    var data = {
        tags: [primaryTag]
    };
    var counter = 1;
    const loadPost = () => {
        fetch('/api/news/getMoreNews', {
                method: 'POST',
                headers: {

                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            }, )
            .then(response => response.json())
            .then(data => {
                const article = data[0]
                //             const template = `
                //             <section class="banner_01" style="position:relative; background:url('${article.Avatar}') no-repeat fixed center center / cover;">
                //             <div style="position: absolute; width: 100%; height: 100%; top: 0;left: 0;right: 0;bottom: 0;background-color: rgba(0,0,0,0.5);"></div>
                //             <div class="container">
                //                 <div class="row">
                //                     <div class="col-lg-12 text-center">
                //                         <div class="banner_1_content">
                //                             <a href="/categories/${article.CategorySlug}" class="cats blues2">${article.Category}</a>
                //                             <h1 class="title" style="color:white;" tag="${article.tag}">${article.titre}</h1>
                //                             <div class="post_banner_meta clearfix">
                //                                 <span class="fi1cm_author">By <a href="/editors/${article.CreatorSlug}">${article.CreatorFullName}</a></span>
                //                                 <span class="fi1cm_date">-<a href="#"><i class="feather icon-clock"></i>${article.created_at}</a></span>


                //                             </div>
                //                         </div>
                //                     </div>
                //                 </div>
                //             </div>
                //         </section>
                //         <div class="content-container">
                //         <section class="sp_1_section " >
                //             <div class="container">
                //                 <div class="row">
                //                     <div class="col-lg-12">
                //                         <div class="sb_bg py-0">
                //                             <div class="row pt-5">
                //                                 <div class="col-lg-12 col-md-12">
                //                                     <div class="single_blog">
                //                                         ${article.contenu}
                //                                     </div>
                //                                 </div>
                //                             </div>
                //                         </div>
                //                     </div>
                //                 </div>
                //             </div>
                //         </section>
                // </div>
                // `
                const template = `
        <h1 class="fw-bold mt-3 titlenews titleactu title" tag="${article.tag}">${article.titre}</h1>
        <div class="r2f-author align-items-center pb-2">
    <img src="${article.CreatorAvatar}" class="img-fluid rounded-circle me-3">
    <p class="text-muted m-0 metainfos">
        <span>Par</span>
        <a href="/editors/${article.CreatorSlug}" class="text-dark">${article.CreatorFullName}</a>
        <span> - ${article.created_at}</span>
        <span class="r2f-post-meta p-0"><a href="/categories/${article.CategorySlug}" class="r2f-post-meta-design ms-2">${article.Category}</a></span>
    </p>
</div>
<div>
    <div class="border-end pe-4">
        <div class="r2f-post-content-wrap">
            <!-- Post Content Start -->
            <div class="img-principal pb-4">
                <img src="${article.Avatar}" class="img-fluid w-100">
            </div>
    
            <div class="single_blog">
                ${article.contenu}
            </div>
            <!-- END Post Content -->
            <div class="border-top border-bottom py-3 mb-2"></div>
        </div>
    </div>
</div>
        `

                var container = document.createElement('div');
                container.classList.add('post-section')
                container.setAttribute("tag", article.tag)
                container.setAttribute("title", article.titre)
                container.innerHTML = template;
                posts_wrapper.append(container);
                var lastTag = this.data.tags[this.data.tags.length - 1];
                this.data.tags = [...this.data.tags, article.tag]
                wrapper.append(loader);
                section = document.querySelectorAll('.post-section');
                section.forEach(sectionEl => {
                    sectionObserver.observe(sectionEl)
                })
            }).catch(error => {
                loading.remove()
            })
    }
    var LoadingObserver = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting === true) {
            wrapper.removeChild(loader)
            loadPost();
            wrapper.append(loading)
        }
    }, {
        threshold: [1]
    });
    LoadingObserver.observe(loader);
    var sectionObserver = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            window.history.pushState(null, "", `/news/${entry.target.getAttribute('tag')}`);
            document.title = entry.target.getAttribute("title")

        })
    }, {
        threshold: [0.3]
    });

</script>
<script type="text/javascript">
    var sidebar = new StickySidebar('.bloc-sticky', {
        topSpacing: 20
    });

</script>
@endsection
