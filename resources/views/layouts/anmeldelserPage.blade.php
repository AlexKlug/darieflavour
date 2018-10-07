<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('elements.head')

</head>
<body>

@include('elements.menu')

<!-- Top Quote -->
<div class="container-fluid quote3">
    <div class="makeupInspirationQuote">
        <p><span>ANMELDELSER</span></p>
    </div>
    <div class="makeupInspirationQuoteMain">
        <p>IT'S LIKE CHRISTMAS, EXCEPT IT'S WARMER</p>
    </div>
</div>

<div class="container-fluid smalltextSection">
    <div class="smallText">
        <p>Der er ikke noget mere exciting end at åbne noget, uden man ved hvad der er inden i eller om ikke andet, få følelsen af at se et produkt man har ventet længe på at få mellem hænderne, for første gang! I disse unboxing-videoer, vil I se mig åbne pakker for første gang, foran jer. Derfor vil I også dele min first-expression sammen med mig! </p>
    </div>
</div>

<div class="container-fluid searchNamesProductsOuter">
    <div class="container searchNamesProducts">
        <ul>
            @foreach($ProductKategori as $UA)
                <a href="/anmeldelser/{{ $UA->product }}"><li>{{ $UA->product }}</li> </a>
            @endforeach
        </ul>
    </div>
</div>

<div class="newestArticles jumbotron">
    <div class="container">
        <div class="row">
            @foreach ($UnboxingArticles as $fA)
                <div class="col-md-4 col-sm-12 col-xs-12 thirdPart">
                    <a href="/{{ $fA->kategoriSmall }}/{{ $fA->product }}/{{ $fA->id }}/{{ $fA->overskrift }}">
                        <div class="leadingArticle">
                            <div class="insideLeadingArticle">
                                <img src="/img/{{ $fA->image }}" alt="{{ $fA->imageALT }}">
                                <div class="infoLeadingArticle" style="border-top: solid 2px">
                                    <h1>{{ $fA->overskrift }}</h1>
                                    <p><span>{{ $fA->author }}</span> - <i>{{ $fA->dato }} | {{ $fA->kategori }}</i></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('elements.footer')


</body>
</html>