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
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/magro-icons.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/iconfont.css">
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/slick.css">
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/owl.carousel.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/owl.theme.default.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/ignore_for_wp.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/skeleton.css"/>
        <meta property="fb:pages" content="42863617656" />
        


        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="https://cd1.rap2france.com/public/templates/default/assets/images/icone/57.jpg">
        <!-- Favicon Icon -->
    </head>
    <body style="background:black" >
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->
        @include('components.header')
        @yield('main-section')
        @include('components.footer')

        <!-- Bact To Top -->
        <a href="#" id="backtotop"><i class="feather icon-chevrons-up "></i></a>
        <!-- Bact To Top -->

        <!-- Include All JS -->
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery-ui.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/bootstrap.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/lightcase.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery.plugin.min.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery.countdown.min.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery.appear.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/slick.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/jquery.shuffle.min.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/stickyfill.min.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/owl.carousel.min.js"></script>
        <script src="https://cd1.rap2france.com/public/templates/template/js/theme.js"></script>
        <script src="{{@asset('js/app.js')}}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8897495-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-8897495-1');
        </script>

         @yield('page-script')
         <noscript>Votre navigateur ne supporte pas Javascript</noscript>

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
                                        <a href="#" class="cats reds">${article.Category}</a>
                                         </div>
                                   </div>
                                <div class="tw1_l_content">
                                    
                                        <h3><a href="#">${article.titre}</a></h3>
                                   
                                    <div class="comon_meta clearfix">
                                <span class="cm_author">< class="feather icon-user"></i>By<a href="#">${article.CrieatorFullName}</a></span>
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
    </body>
</html>
