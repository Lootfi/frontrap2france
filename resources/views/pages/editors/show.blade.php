@extends('layouts.site')
<title>{{$editor->Full_Name}}</title>
<style>
    .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
    background-size: cover;
    background-repeat: no-repeat
}
</style>
@section('main-section')
 
<div class="bg-white">
	

	{{-- <div class="row " style="align-items:center"> 

		<div class="col-lg-5" style="text-align:center">
			<img class="inline-block rounded-full object-cover " style="width:500px; height:auto;" src="{{$editor->Avatar}}" loading="lazy" ></div>
		<div class="col-lg-5">
		<p><span class="font-bold" style="color:#F5A815">Nom :</span> 	{{$editor->Full_Name}}</p>
		<p><span class="font-bold" style="color:#F5A815">E-mail professionnel :</span> {{$editor->email}} </p>
		<p><span class="font-bold" style="color:#F5A815">Description :</span> This is a description</p>
    </div>
		
	</div> --}}

    <div class="row">
        <div class="">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="d-flex align-items-end profile-head">
                        <div class="flex-shrink-0 profile me-3">
                            <img src="{{$editor->Avatar}}" alt="{{$editor->Full_Name}}" width="130" class="rounded mb-2 img-thumbnail">
                        </div>
                        <div class="flex-grow-1 ms-3 mb-5 text-white">
                            <h4 class="mt-0 mb-0">{{$editor->Full_Name}}</h4>
                            <p class="small mb-4"><i class="fas fa-user me-2"></i>{{$editor->role}}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="m-0 p-0 d-flex list-unstyled">
                        <li class="me-3">
                            <a class="d-flex align-items-center justify-content-center" href="{{$editor->Details->facebook}}"><i class="fab fa-facebook-f fa-lg" style="color:#1c1c1c;"></i></a>
                        </li>
                        <li class="me-3">
                            <a class="d-flex align-items-center justify-content-center" href="{{$editor->Details->twitter}}"><i class="fab fa-twitter fa-lg" style="color:#1c1c1c;"></i></a>
                        </li>
                        <li class="me-3">
                            <a class="d-flex align-items-center justify-content-center" href="{{$editor->Details->instagram}}"><i class="fab fa-instagram fa-lg" style="color:#1c1c1c;"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0">About</h5>
                    <div class="p-4 rounded shadow-sm bg-light">
                        <p class="font-italic mb-0">{{$editor->Details->biography}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




	<div class="m-4">

		<h2 class="text-2xl my-5" id="articles">Les Articles</h2>
		<div id="container wrapper">
		<div id="data-wrapper" class="row my-2">
            {{-- {{dd($articles)}} --}}
			{{-- @foreach($articles as $article)
            @if ($article->tag)
                
                    <div class="col-lg-4 col-md-6">
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb">
                                <img src="{{$article->Avatar}}" alt="" loading="lazy" >
                            </div>
                            <div class="tw_3_content">
                                <a href="{{route('categories.show',$article->Category->slug)}}" class="cats reds">{{$article->Category->nom}}</a>
                                <h3><a href="{{route('news.show',$article->tag)}}">{{$article->titre}}</a></h3>
                            </div>
                        </div>
                        
                    </div>
            @endif

                    @endforeach --}}
                    {{-- <div id="data-wrapper">
                        <!-- Results -->
                    </div> --}}
                    
		</div>
	</div>
		<div class="row">
            <div class="auto-load col-lg-12 text-center">
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                    <path fill="#000"
                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                    </path>
                </svg>
            </div>
            <div class="chargez col-lg-12 text-center">
                <button class="magro_btn flex items-center justify-center  w-1/4 mx-auto" id="loadMore" editor="{{$editor->slug}}" dataTotal="{{$editor->articles()->take(12)->get()->count()}}">
                    <span id="loadText" style="top:0px;" class="top-0">Chargez</span>
                </button>
            </div>
       </div>

</div>
</div>


@endsection

@section('page-script')

<script>
    var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    infinteLoadMore(page);

    $('#loadMore').click(function () {
            page++;
            infinteLoadMore(page);
    });

    function infinteLoadMore(page) {
        $.ajax({
                url: "/editors/{!!$editor->slug!!}" + "?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                    $('.chargez').hide();
                }
            })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-load').html("We don't have more data to display :(");
                    return;
                }
                $('.chargez').show();
                $('.auto-load').hide();
                $("#data-wrapper").append(response);
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                $('.chargez').show();
                $('.auto-load').hide();
                console.log('Server error occured');
            });
    }

</script>

{{-- <script>
        const loadMore = document.querySelector('#loadMore')
        const wrapper = document.querySelector('#wrapper')
        var dataTotal = loadMore.getAttribute('dataTotal')
        var editor = loadMore.getAttribute('editor')
        const loadText = document.querySelector("#loadText");
        const loading = `<img src="/assets/template/images/loading.png" alt=""><img src="/assets/template/images/loading_hover.png" alt="">`
        const loadingSpan = document.createElement('span');
        loadingSpan.style.top = "0px";
        loadingSpan.innerHTML = loading;

        loadMore.addEventListener('click',() => {
            dataTotal = loadMore.getAttribute('dataTotal');
            loadMore.disabled = true;
            loadMore.append(loadingSpan)
            loadMore.removeChild(loadText)
            loadMorePosts(dataTotal,editor)
        })

        const loadMorePosts = (dataTotal,editor) => {

            fetch('/api/editors/getMoreNews',{
            method: 'POST',
            headers :{
            
             'Content-Type': 'application/json',

            },
            body:JSON.stringify({dataTotal,editor})},
            )
            .then(response => response.json())
            .then(data => {
                var row = "";
                Object.values(data).map(article => {

                    const template = `
                    <div class="col-lg-4 col-md-6">
                        <div class="tw3_list clearfix">
                            <div class="tw3_thumb">
                                <img src="${article.Avatar}" alt="" loading="lazy">
                            </div>
                            <div class="tw_3_content">
                                <a href="/categories/${article.Category.slug}" class="cats reds">
                                ${article.Category.nom}</a>
                                <h3><a href="/news/${article.tag}">${article.titre}</a></h3>
                            </div>
                        </div>
                        
                    </div>`

                    row = `${template}${row}`
                }) 

                var wrap = document.createElement('div');
                wrap.classList.add('row')
                wrap.innerHTML = row;
                wrapper.append(wrap)
                loadMore.setAttribute("dataTotal",parseInt(dataTotal) + 12);
                loadMore.disabled = false
                loadMore.append(loadText)
                loadMore.removeChild(loadingSpan)

            })
            .catch(function(error){


                console.error(error);
            })
        }


    </script> --}}

@endsection