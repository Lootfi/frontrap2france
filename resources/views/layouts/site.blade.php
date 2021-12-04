<!DOCTYPE html>
<html lang="en">

<head>

    <script type="text/javascript">
        ! function () {
            var i, r, o;
            i = "tcfapiLocator", r = [], (o = window.frames[i]) || (function e() {
                var t = window.document,
                    a = !!o;
                if (!a)
                    if (t.body) {
                        var n = t.createElement("iframe");
                        n.style.cssText = "display:none", n.name = i, t.body.appendChild(n)
                    } else setTimeout(e, 5);
                return !a
            }(), window.tcfapi = function () {
                for (var e, t = [], a = 0; a < arguments.length; a++) t[a] = arguments[a];
                if (!t.length) return r;
                if ("setGdprApplies" === t[0]) 3 < t.length && 2 === parseInt(t[1], 10) && "boolean" ==
                    typeof t[3] && (e = t[3], "function" == typeof t[2] && t2);
                else if ("ping" === t[0]) {
                    var n = {
                        gdprApplies: e,
                        cmpLoaded: !1,
                        cmpStatus: "stubCMP",
                        apiVersion: 2
                    };
                    "function" == typeof t[2] && t2
                } else r.push(t)
            }, window.addEventListener("message", function (n) {
                var i = "string" == typeof n.data,
                    e = {};
                try {
                    e = i ? JSON.parse(n.data) : n.data
                } catch (e) {}
                var r = e.tcfapiCall;
                r && window.tcfapi(r.command, r.version, function (e, t) {
                    var a = {
                        tcfapiReturn: {
                            returnValue: e,
                            success: t,
                            callId: r.callId
                        }
                    };
                    i && (a = JSON.stringify(a)), n.source.postMessage(a, "*")
                }, r.parameter)
            }, !1))
        }();
        ! function () {
            var i, n, s;
            i = "uspapiLocator", n = [], (s = window.frames[i]) || (function a() {
                var e = window.document,
                    n = !!s;
                if (!s)
                    if (e.body) {
                        var t = e.createElement("iframe");
                        t.style.cssText = "display:none", t.name = i, e.body.appendChild(t)
                    } else setTimeout(a, 5);
                return !n
            }(), window.uspapi = function () {
                for (var a = [], e = 0; e < arguments.length; e++) a[e] = arguments[e];
                if (!a.length) return n;
                "ping" === a[0] ? "function" == typeof a[2] && a2 : n.push(a)
            }, window.addEventListener("message", function (t) {
                var i = "string" == typeof t.data,
                    a = {};
                try {
                    a = i ? JSON.parse(t.data) : t.data
                } catch (a) {}
                var s = a.uspapiCall;
                s && window.uspapi(s.command, s.version, function (a, e) {
                    var n = {
                        uspapiReturn: {
                            returnValue: a,
                            success: e,
                            callId: s.callId
                        }
                    };
                    i && (n = JSON.stringify(n)), t.source.postMessage(n, "*")
                }, s.parameter)
            }, !1))
        }();

    </script>
    <script async src='https://cmp.uniconsent.com/v2/8d3a056537/cmp.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://rapfront.test/amp/news/this-is-a-new-article-from-editor/">


    @yield('meta-section')
    <meta name="description"
        content="Rap2France est le site le plus complet sur le Rap Français. On y retrouve toute l'actualité du rap français, des paroles rap, écoutez des clips rap français, des biographies, des photos des rappeurs, des interviews rap.">

    <meta name="keywords"
        content="paroles clips rap français mp3 son biographies rappeur vidéos album tracklist pochette photos booba rohff medine sinik diam's 113 kery james mafia K1 fry ntm assassin la rumeur mc solaar lacrim booba rohff gradur maitre gims black m">
    <!-- Include All CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/bootstrap.css"/> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cd1.rap2france.com/public/templates/template/css/magro-icons.css" />
    <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/iconfont.css">


    {{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/preset.css"/> --}}

    <link rel="stylesheet" type="text/css" href="{{asset('assets/template/css/theme.css')}}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/template/css/responsive.css')}}"/> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cd1.rap2france.com/public/templates/template/css/skeleton.css"/> --}}
    <meta property="fb:pages" content="42863617656" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">



    <!-- Favicon Icon -->
    <link rel="icon" type="image/png"
        href="https://cd1.rap2france.com/public/templates/default/assets/images/icone/57.jpg">
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
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    {{-- <script src="https://cd1.rap2france.com/public/templates/template/js/theme.js"></script>  --}}
    <script src="{{asset('assets/template/js/theme.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8897495-1"></script>

    @yield('page-script-include')

    {{-- <script>
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

         </script> --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-8897495-1');

    </script>
    <script src="{{asset('js/main.js')}}"></script>
    @yield('page-script')
    <noscript>Votre navigateur ne supporte pas Javascript</noscript>


</body>

</html>
