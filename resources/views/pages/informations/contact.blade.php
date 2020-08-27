@extends('layouts.site')
@section('meta-section')
        
        <title>Confidentialité - RAP2FRANCE </title>
 <meta property="og:title" content="termes et conditions" />
<meta property="og:type" content="page" />
<meta property="og:url" content="{{env('APP_URL')}}" /> 

@endsection
@section('main-section')
<div class="mt-4 bg-white">
<div data-aidaform-widget="form-2019-12" data-url="https://rap2france.aidaform.com/formulaire-contact" data-width="100%" data-height="550px" data-do-resize></div>
</div>


@endsection
@section('page-script')

<script>
(function(){var r,d=document,gt=d.getElementById,cr=d.createElement,tg=d.getElementsByTagName,id="aidaform-embed";if(!gt.call(d,id)){r=cr.call(d,"script");r.id=id;r.src="https://embed.aidaform.com/embed.js";(d.head || tg.call(d,"head")[0]).appendChild(r);}})()</script>

@endsection