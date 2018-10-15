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
            <p><span>Makeup inspiration</span></p>
        </div>
        <div class="makeupInspirationQuoteMain">
            <p>BE YOUR OWN KIND OF BEAUTIFUL</p>
        </div>
    </div>


    <!-- Container to first 3 articles -->
    <div class="container top">
        <div class="row">
            <!-- Container to first article -->
            <div class="col-md-8 col-sm-12 col-xs-12 leftContainerTop">
                @foreach ($firstArticle as $fA)
                  <a href="/{{ $fA->kategoriSmall }}/{{ $fA->product }}/{{ $fA->id }}/{{ $fA->overskrift }}">
                    <div class="leadingArticle">
                        <div class="insideLeadingArticle">
                            <img src="img/{{ $fA->image }}" alt="{{ $fA->imageALT }}">
                            <div class="infoLeadingArticle" style="border-top: solid 2px">
                                <h1>{{ $fA->overskrift }}</h1>
                                <p><i>{{ $fA->dato }} | {{ $fA->kategori }}</i></p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <!-- Container to second and third article -->
            <div class="col-md-4 col-sm-12 col-xs-12 rightContainerTop">
            @foreach ($secondArticle as $fA)
                <a href="/{{ $fA->kategoriSmall }}/{{ $fA->product }}/{{ $fA->id }}/{{ $fA->overskrift }}">
                    <div class="leadingArticle">
                        <div class="insideLeadingArticle">
                            <img src="img/{{ $fA->image }}" alt="{{ $fA->imageALT }}">
                            <div class="infoLeadingArticle" style="border-top: solid 2px">
                                <h1>{{ $fA->overskrift }}</h1>
                                <p><i>{{ $fA->dato }} | {{ $fA->kategori }}</i></p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            @foreach ($thirdArticle as $fA)
                <a href="/{{ $fA->kategoriSmall }}/{{ $fA->product }}/{{ $fA->id }}/{{ $fA->overskrift }}">
                    <div class="leadingArticle">
                        <div class="insideLeadingArticle">
                            <img src="img/{{ $fA->image }}" alt="{{ $fA->imageALT }}">
                            <div class="infoLeadingArticle" style="border-top: solid 2px">
                                <h1>{{ $fA->overskrift }}</h1>
                                <p><i>{{ $fA->dato }} | {{ $fA->kategori }}</i></p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </div>


    <!-- 4th to 6th article container -->
    <div class="newestArticles jumbotron">
        <div class="container">
            <div class="row">
            @foreach ($fourthToSixthArticle as $fA)
                <div class="col-md-4 col-sm-12 col-xs-12 thirdPart">
                    <a href="/{{ $fA->kategoriSmall }}/{{ $fA->product }}/{{ $fA->id }}/{{ $fA->overskrift }}">
                        <div class="leadingArticle">
                            <div class="insideLeadingArticle">
                                <img src="img/{{ $fA->image }}" alt="{{ $fA->imageALT }}">
                                <div class="infoLeadingArticle" style="border-top: solid 2px">
                                    <h1>{{ $fA->overskrift }}</h1>
                                    <p><i>{{ $fA->dato }} | {{ $fA->kategori }}</i></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- AflangReklameVertical -->
    <div class="centerAd">
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-6539542239444581"
             data-ad-slot="1552282956"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>


    <div class="container-fluid competitionSection">
        <div class="competitionBox">
            <h2>Vind</h2>
            <p>Deltag i konkurrencer her på min blog. Altid lækre præmier.</p>
            <p><a href="#">Læs mere om konkurrencerne her</a></p>
        </div>
    </div>

    <div class="centerAd">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- AflangReklameVertical -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:728px;height:90px"
         data-ad-client="ca-pub-6539542239444581"
         data-ad-slot="1552282956"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    @include('elements.footer')

    </body>
</html>
