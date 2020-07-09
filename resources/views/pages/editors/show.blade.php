	@extends('layouts.site')

@section('main-section')

<div class="bg-white py-4 px-2 m-4">
	

	<div class="flex items-center justify-around ">

		<div class="col-lg-3">
			<img class="inline-block rounded-full object-cover " style="width:200px; height:200px;" src="{{$editor->Avatar}}"></div>
		<div class="col-lg-8">
		<p><span class="font-bold" style="color:#F5A815">Nom :</span> 	{{$editor->Full_Name}}</p>
		<p><span class="font-bold" style="color:#F5A815">E-mail professionnel :</span> {{$editor->email}} </p>
		<p><span class="font-bold" style="color:#F5A815">Description :</span> This is a description</p>
</div>
		
	</div>
	<div class="m-4">

		<hr class="w-3/4 mx-auto  bg-black text-black" />

		<h2 class="text-2xl my-2" >Les Articles</h2>

		<div class="row my-2">
			@foreach($editor->articles()->latest()->take(12)->get() as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb">
                                <img src="{{$article->Avatar}}" alt="">
                            </div>
                            <div class="tw_3_content">
                                <a href="{{Route('categories.show',$article->Category->slug)}}" class="cats reds">Move</a>
                                <h3><a href="{{Route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
		</div>

</div>
</div>


@endsection

