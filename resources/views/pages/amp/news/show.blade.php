@extends('layouts.amp')
@section('page-title')
{{$article->titre}}
@endsection
@section('main-section')

{!! html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8') !!} 

@endsection