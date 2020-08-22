<section class="mag_instagram_section">
            <div class="container-fluid">
                <div class="row bg-white" >
                    <div class="col-lg-12 text-center">
                        <h3 class="flex justify-center "><img loading="lazy" src="{{asset('assets/template/images/instagram.png')}}" alt=""/>@Magazine Images</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div class="my_instagram" > 
                            @foreach($instagram_images as $image)
                            <div class="instagram_img" style="height:270px;">
                                <a href="https://www.instagram.com/p/{{$image->shortcode}}/" target="_blank"><img style="height:100%;" loading="lazy"  src="{{$image->image_src}}" alt=""/></a>
                            </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>