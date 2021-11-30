@extends('layouts.site')
@section('meta-section')

<title>Contact - RAP2FRANCE</title>
<meta property="og:title" content="Nous Contacter - RAP2FRANCE" />
<meta property="og:type" content="page" />
<meta property="og:description"
    content="Vous souhaitez nous soumettre un projet / un clip, inonder le web avec vos belles idées, collaborer avec l'équipe R2F ? Ou simplement passer prendre un café ? On serait ravis d’en savoir un peu plus. Dites-nous tout !" />
<meta property="og:url" content="{{env('APP_URL')}}/contact" />

@endsection
@section('main-section')
<div class="container pb-5 pt-5">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Nous Contacter</h2>
    <p class="text-center w-responsive mx-auto mb-5">Vous souhaitez nous soumettre un projet / un clip, inonder le web
        avec vos belles idées, collaborer avec l'équipe R2F ? Ou simplement passer prendre un café ? On serait ravis
        d’en savoir un peu plus. Dites-nous tout !</p>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card border-0">
                <div class="card-body text-center">
                    {{-- <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i> --}}
                    <i class="fa fa-user fa-5x mb-3"></i>
                    <h5 class="text-uppercase mb-5">Responsable digital</h5>
                    <p>Myriam MADANI</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h5 class="text-uppercase mb-5">Appelez Nous</h5>
                    <p>+33 1 89 16 86 53</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h5 class="text-uppercase mb-5">Adresse</h5>
                    <address>95 Rue Laennec, 69008 Lyon, France</address>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h5 class="text-uppercase mb-5">Email</h5>
                    <p>myriam@rap2france.com</p>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-4 bg-white">
        <div data-aidaform-widget="form-2019-12" data-url="https://rap2france.aidaform.com/formulaire-contact"
            data-width="100%" data-height="500px" data-do-resize></div>

    </div>
</div>
@endsection
@section('page-script')
<script>
    (function () {
        var r, d = document,
            gt = d.getElementById,
            cr = d.createElement,
            tg = d.getElementsByTagName,
            id = "aidaform-embed";
        if (!gt.call(d, id)) {
            r = cr.call(d, "script");
            r.id = id;
            r.src = "https://embed.aidaform.com/embed.js";
            (d.head || tg.call(d, "head")[0]).appendChild(r);
        }
    })()

</script>
@endsection
