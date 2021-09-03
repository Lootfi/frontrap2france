<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="http://rapfront.test/amp/news/this-is-a-new-article-from-editor/"> 


        @yield('meta-section') 
        <meta name="description" content="Rap2France est le site le plus complet sur le Rap Français. On y retrouve toute l'actualité du rap français, des paroles rap, écoutez des clips rap français, des biographies, des photos des rappeurs, des interviews rap."> 
        
        <meta name="keywords" content="paroles clips rap français mp3 son biographies rappeur vidéos album tracklist pochette photos booba rohff medine sinik diam's 113 kery james mafia K1 fry ntm assassin la rumeur mc solaar lacrim booba rohff gradur maitre gims black m">
        <!-- Include All CSS -->
        {{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/bootstrap.css"/> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/magro-icons.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/iconfont.css">
       
        
        {{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/preset.css"/> --}}
        
        <link rel="stylesheet" type="text/css" href="{{asset('assets/template/css/theme.css')}}"/>
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/template/css/responsive.css')}}"/> --}}
        {{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/skeleton.css"/> --}}
        <meta property="fb:pages" content="42863617656" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        


        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="https://cd1.rap2france.com/public/templates/default/assets/images/icone/57.jpg">
        <!-- Favicon Icon -->
    </head>
    <body>
        {{-- <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading --> --}}
        @include('components.header')
        @yield('main-section')
        @include('components.footer')

        <div class="overlay"></div>
        {{-- <!-- Bact To Top -->

        <a href="#" id="backtotop"><i class="feather icon-chevrons-up "></i></a>
        <!-- Bact To Top --> --}}

        <!-- Include All JS -->
        
        {{-- <script src="https://cd1.rap2france.com/public/templates/template/js/bootstrap.js"></script> --}}
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    {{-- <script src="https://cd1.rap2france.com/public/templates/template/js/theme.js"></script>  --}}
    <script src="{{asset('assets/template/js/theme.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8897495-1"></script>
	
        @yield('page-script-include')



       


        <script>
          const loadTabs = (slug) => {

           return fetch(`/api/categories/${slug}/get`,{
            method: 'GET',
            headers :{
            
             'Content-Type': 'application/json',
            },
        },)
            .then(response => response.json())
            .then(data => {
                
                return data


          })
        }

        const FillTabWithContent = async (pan) => {

            var articles = await loadTabs(pan.id)
            var template = "";
            articles.forEach(article => {

               var articleTemplate =  `
                    <div class="col-lg-6 col-md-6">
                    <div class="tw1_list clearfix">
                            <div class="tw1l_thumb" style="width:155px; height:90px;">
                                   <img loading="lazy" src="${article.image}" alt="">
                                        <div class="tw1l_cats">
                                        <a href="/categories/${article.CategorySlug}" class="cats reds">${article.Category}</a>
                                         </div>
                                   </div>
                                <div class="tw1_l_content">
                                    
                                        <h3><a href="/news/${article.tag}">${article.titre}</a></h3>
                                   
                                    <div class="comon_meta clearfix">
                                <span class="cm_author"><i class="feather icon-user"></i>By<a href="/editors/${article.CreatorSlug}">${article.CreatorFullName}</a></span>
                            <span class="cm_date"><a href="#">${article.created_at}</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                 </div>`
                template = `${template}${articleTemplate}`

            })

            pan.innerHTML = ""
            const row = document.createElement('div');
            row.classList.add('row')
            row.innerHTML = template;
            pan.append(row);
            pan.setAttribute("hasContent","true")
        }


        FillTabWithContent(document.getElementById("actu-rap"))

        const tabs = document.querySelectorAll('.tabLink')

        const tabContent = document.querySelectorAll("tab-pane");

        tabs.forEach(tab => {

            tab.addEventListener('focus',() => {

                const pan = document.querySelector(tab.getAttribute("href"));
                if(pan.getAttribute('hasContent') == "false"){

                    FillTabWithContent(pan)
                    pan.setAttribute('hasContent',"true");
                }
                


            })
        })

         </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-8897495-1');
        </script>
        <script src="{{asset('js/main.js')}}"></script>
        @yield('page-script')
         <noscript>Votre navigateur ne supporte pas Javascript</noscript>

         
    </body>
</html>
