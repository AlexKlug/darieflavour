<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('elements.head')

</head>
<body>

@include('elements.menu')

<!-- Top Quote -->
<div class="container-fluid quote">
    <div class="makeupInspirationQuote">
        <p><span>Til din daglige makeup inspiration</span></p>
    </div>
    <div class="makeupInspirationQuoteMain">
        <p>BE YOUR OWN KIND OF BEAUTIFUL</p>
    </div>
</div>





<!-- Container to first 3 articles -->
<div class="container-fluid top">
    <!-- Container to first article -->
    <div class="col-md-7 col-sm-12 col-xs-12 leftContainerTop">
        @foreach ($firstArticle as $fA)

                <a href="{{ $fA->id }}">
                    <div class="leadingArticle">
                        <div class="insideLeadingArticle">
                            <img src="img/{{ $fA->image }}" alt="{{ $fA->imageALT }}">
                            <div class="infoLeadingArticle" style="border-top: solid 2px">
                                <h1>{{ $fA->overskrift }}</h1>
                                <p><span><img src="{{ $fA->authorIMG }}">{{ $fA->author }}</span> - <i>{{ $fA->dato }} | {{ $fA->kategori }}</i></p>
                                <p class="textToArticleThumbs">{{ $fA->kortArtikelTekst }}</p>
                            </div>
                        </div>
                    </div>
                </a>

        @endforeach
    </div>
    <!-- Container to second and third article -->

    </div>
</div>

























</body>
</html>
