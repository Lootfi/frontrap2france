@extends('layouts.amp')
@section('page-title')
<title>{{$article->titre}}</title>
<script async custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>
<script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
<style amp-costum>
	


</style>
@endsection
@section('main-section')
<div class="px-4">
@if($article->contenuFormat['type'] == "raw")
{!! html_entity_decode($article->contenuFormat['contenu'], ENT_QUOTES, 'UTF-8') !!} 
@else
	
@foreach(json_decode($article->contenuFormat['contenu'],true)['blocks'] as $block)

		@if($block['type'] == "paragraph")

			<p class="my-2">{{strip_tags($block['data']['text'])}}</p>

		@endif

		@if($block['type'] == "header")
					<h{{$block['data']['level']}} class="my-2">{{strip_tags($block['data']['text'])}}</h{{$block['data']['level']}}>

		@endif
		@if($block['type'] == "quote")

		<div class="my-4">
                <blockquote class="relative p-4 text-xl italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote">
                       <div style="font-size: 5rem; right: 100%;" class="mr-2 font-dank-mono text-neutral-500 absolute top-0 leading-none;" aria-hidden="true">
                         &ldquo;
                      </div>
                              <p class="mb-4 text-3xl italic">{{strip_tags($block['data']['text'])}}</p>
                              <cite class="flex items-center">
                              <div class="flex flex-col items-start">
                                <adresse class="mb-1 text-sm italic font-bold">
                                Said By {{strip_tags($block['data']['caption'])}}
                                </adresse>
                              </div>
                              </cite>
                      </blockquote>
        </div>

		@endif
		@if($block['type'] == "list")

			@if($block['data']['style'] == "ordered")
			<ol style="list-style-type:decimal;">
				@foreach($block['data']['items'] as $item)
					<li>{{strip_tags($item)}}</li>
				@endforeach
			</ol>
				
			@else
			<ul style="list-style-type:disc;">
				@foreach($block['data']['items'] as $item)
					<li>{{strip_tags($item)}}</li>
				@endforeach
			</ul>
			@endif

		@endif
		@if($block['type'] == "image")
		
		@if($block['data']['file']) 
		<figure class="my-4 ">
		      <amp-img src="{{$block['data']['file']['url']}}" layout="fill"></amp-img>
		      <figcaption>{{strip_tags($block['data']['caption'])}}</figcaption>
   		 </figure>
           
		@else
          <figure class="my-4 ">
		      <amp-img src="{{$block['data']['url']}}" layout="fill"></amp-img>
		      <figcaption>{{strip_tags($block['data']['caption'])}}</figcaption>
   		 </figure>
		@endif
		@endif
		@if($block['type'] == "embed")
		@if($block['data']['service'] == "instagram")
		<?php preg_match('/^(?:.*\/p\/)([\d\w\-_]+)/',$block['data']['embed'], $matches) ?>
	
	<amp-instagram
  data-shortcode="{{$matches[1]}}"
  data-captioned
  width="400"
  height="400"
  class="my-4 "
  layout="responsive"
>
</amp-instagram>
<small class="text-center my-2">{{$block['data']['caption'] ? $block['data']['caption'] : "" }}</small>

		@endif

		@if($block['data']['service'] == "twitter")
		<?php preg_match('/\/(\d+)\/?$/is',$block['data']['embed'], $matches) ?>
	
	<amp-twitter
  width="375"
  height="472"
  layout="responsive"
  class="my-4 "
  data-tweetid="{{$matches[1]}}"
> 
</amp-twitter>
<small class="text-center my-2">{{$block['data']['caption'] ? $block['data']['caption'] : "" }}</small>

@endif

@if($block['data']['service'] == "youtube")
		<?php preg_match("/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/",$block['data']['embed'], $matches ); ?>
	
<amp-youtube
  data-videoid="{{$matches[7]}}"
  layout="responsive"
  width="480"
  height="270"
  class="my-4 "
></amp-youtube>
<small class="text-center my-2">{{$block['data']['caption'] ? $block['data']['caption'] : "" }}</small>


@endif
@endif
@endforeach


@endif
</div>
@endsection