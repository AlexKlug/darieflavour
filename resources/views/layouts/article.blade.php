<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('elements.head')
</head>
<body>

@include('elements.menu')











@foreach($Article as $item)

<div class='container-fluid article' style='
                            background-image: url(/img/{{ $item->image }});
							background-position: center center;background-repeat: no-repeat;
							-webkit-background-size: cover;-moz-background-size: cover;
							-o-background-size: cover; background-size: cover;'>
    <div class='blackColorOpacity'>
        <div class='makeupInspirationQuote'>
            <p><span>{{ $item->dato }}</span></p>
        </div>
        <div class='makeupInspirationQuoteMain'>
            <p>{{ $item->overskrift }}</p>
        </div>
    </div>
</div>

















<div class='container-fluid'>
    <div class='articleContent' style='border-top: 3px solid {{ $item->kategoriColor }}'>
        <div class="row">
        <div class='col-sm-2'>
            <div></div style="width: 100%; height:10px; background-color: white;">
        </div>

    <div class='col-sm-7'>
        {!! $item->langArtikelTekst !!}
    </div>

    @foreach($SocialMedia as $sm)
    <div class='col-sm-3'>
        <img class="profilImage" src='/img/profil.png'>
        <h2>@darieflavour</h2>
        <div class='socialeMedierMedTal'>
            <a href='https://www.facebook.com/darieflavour/'><img src='/img/fb.png'></a>
            <p><span class='count'>{{ $sm->facebook }}</span></p>
        </div>
        <div class='socialeMedierMedTal'>
            <a href='https://www.instagram.com/darieflavour/'><img src='/img/instagram.png'></a>
            <p><span class='count'>{{ $sm->instagram }}</span></p>
        </div>
        <div class='socialeMedierMedTal'>
            <a href='https://www.youtube.com/channel/UCp1L_tZCrxehLolw1NQS2Rg'><img src='/img/youtube.png'></a>
            <p><span class='count'>{{ $sm->youtube }}</span></p>
        </div><hr>
    </div>@endforeach

        </div>
    </div>
</div>



































@endforeach

































@include('elements.footer')

</body>
</html>
