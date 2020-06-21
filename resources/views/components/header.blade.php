<header class="header_01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_01_inner">
                            <div class="row items-center">
                                <div class="col-lg-3">
                                    <div class="logo_01">
                                        <a href="index-2.html"><img src="{{@asset('assets/logos/logo.png')}}" alt="Rap2France"/></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 noPaddingLeft">
                                    <nav class="main_menu mobile_menu">
                                        <div class="mobileMenuBar">
                                            <a href="javascript: void(0);"><span>Menu</span><i class="twi-bars"></i></a>
                                        </div>
                                        <ul class="clearfix">
                                            <li class="current-menu-item  mg_menu">
                                                <a href="{{Route('home')}}">Home</a>
                                            </li>
                                            <li class="menu-item-has-children mg_menu">
                                                <a href="#">News</a>
                                                <div class="megamenu_2">
                                                    <div class="magro_tab_1">
                                                        <ul class="mtab_1 menu_tab nav nav-tabs" id="menu_post_tab">

                    @foreach($categories->take(5) as $category)
                            @if ($category == reset($categories ))
                                        <li><a class="active" href="{{$category->slug}}" data-toggle="tab">{{$category->nom}}</a></li>
                             @endif
                                        <li><a  href="{{$category->slug}}" data-toggle="tab">{{$category->nom}}</a></li>

                                                            @endforeach
                                                            
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show in active" id="twt_1" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/2.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats reds">Tech</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/6.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/3.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats live reds">Live</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/4.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="twt_2" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/3.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats live reds">Live</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/4.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/2.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats reds">Tech</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/6.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="twt_3" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/2.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats reds">Tech</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/6.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/3.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats live reds">Live</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/4.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="twt_4" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/3.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats live reds">Live</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/4.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/2.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats reds">Tech</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw1_list clearfix">
                                                                            <div class="tw1l_thumb">
                                                                                <img src="images/home1/top_week/6.jpg" alt="">
                                                                                <div class="tw1l_cats">
                                                                                    <a href="#" class="cats blues">Sports</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw1_l_content">
                                                                                <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                                <div class="comon_meta clearfix">
                                                                                    <span class="cm_author"><i class="twi-user"></i>By<a href="#">Jawn Staff</a></span>
                                                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                            <a href="#"><i class="twi-facebook-f"></i></a>
                                            <a href="#"><i class="twi-twitter"></i></a>
                                            <a href="#"><i class="twi-linkedin-in"></i></a>
                                            <a href="#"><i class="twi-youtube"></i></a>
                                        </div>
                                        <div class="search_btn">
                                            <a href="javascript:void(0);"><i class="twi-search"></i></a>
                                            <form role="search" method="get" class="searchForms" action="#">
                                                <input type="search" class="search-field" placeholder="Type and Hit Enter..." name="s">
                                                <button type="submit" class="search-submit"><i class="twi-search2"></i></button>
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
        <!-- Main Header -->