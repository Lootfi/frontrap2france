<header class="header_01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_01_inner">
                            <div class="row items-center">
                                <div class="col-lg-3">
                                    <div class="logo_01">
                                        <a href="index-2.html"><img src="{{@asset('assets/logos/logo.png')}}" loading="lazy" alt="Rap2France"/></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 noPaddingLeft">
                                    <nav class="main_menu mobile_menu">
                                        <div class="mobileMenuBar">
                                            <a href="javascript: void(0);"><span>Menu</span><i class="feather icon-menu"></i></a>
                                        </div>
                                        <ul class="clearfix">
                                            <li class="current-menu-item  mg_menu">
                                                <a href="{{Route('home')}}">Accueil</a>
                                            </li>
                                            <li class="menu-item-has-children mg_menu">
                                                <a href="#" id="tabOpener">Actualité</a>
                                                <div class="megamenu_2">
                                                    <div class="magro_tab_1">
                         <ul class="mtab_1 menu_tab nav nav-tabs" id="menu_post_tab">
                        <li><a class="active tabLink" href="#actu-rap" data-toggle="tab" >Actu Rap</a></li>
                        <li><a class="tabLink" href="#sortie-rap" data-toggle="tab">Sortie Rap</a></li>
                        <li><a class="tabLink" href="#clash" data-toggle="tab">Clash</a></li>
                        <li><a  class="tabLink" href="#nouveau-talent" data-toggle="tab">Nouveau Talent</a></li>
                        <li><a  class="tabLink" href="#gossips" data-toggle="tab">Gossips</a></li>  

                                                            
               </ul>
            <div class="tab-content">
              
                <div class="tab-pane show in active fade" hasContent= "false" id="actu-rap" role="tabpanel">
            
                
                </div>
                <div class="tab-pane fade" id="sortie-rap" hasContent= "false" role="tabpanel">
            
                
                </div>
                <div class="tab-pane fade" id="clash" hasContent= "false" role="tabpanel">
            
               
                </div>
                <div class="tab-pane fade" id="nouveau-talent" hasContent= "false" role="tabpanel">
            
                
                </div>
                <div class="tab-pane fade" id="gossips" hasContent= "false" role="tabpanel">
            
                </div>


             </div>
        </div>
        </div>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Gallery</a>
                                                <ul class="sub-menu">
                                                    <li><a href="gallery_1.html">Clips</a></li>
                                                    <li><a href="gallery_2.html">Sons</a></li>
                                                    <li><a href="gallery_2.html">Videos</a></li>

                                                </ul>
                                            </li>
                                          
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-3">
                                    <div class="header_01_settings">
                                        <div class="social_01 clearfix">
                                            <a href="#"><i class="feather icon-facebook"></i></a>
                                            <a href="#"><i class="feather icon-twitter"></i></a>
                                            <a href="#"><i class="feather icon-youtube"></i></a>
                                        </div>
                                        <div class="search_btn relative">
                                             <a href="javascript:void(0);"><i class="feather icon-search"></i></a>
                                            <form id="cse-search-box" class="searchForms" action="/search" role="search">
                                            <label style="display:none;" for="search-input"></label>
                                            <input type="search" value="{{request()->get('q')}}" id="search-input" class="search-field" name="q" placeholder="Recherche" autocomplete="off" data-bind="textInput:keyword"> <input type="hidden" name="cx" value="partner-pub-2176698891774775:9098524048" />
                                            <input type="hidden" name="cof" value="FORID:10" />
                                            <input type="hidden" name="ie" value="UTF-8" />
                                            <input type="submit" style="display:none;" class="hidden" />
                                            </form>
                                    </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>