<html>
<head>
    @include('elements.head')
</head>
<body>
    @include('elements.menu')

<div class="container-fluid quote3">
    <div class="makeupInspirationQuote">
        <p><span>KONKURRENCER</span></p>
    </div>
    <div class="makeupInspirationQuoteMain">
        <p>AND THE WINNER IS...</p>
    </div>
</div>



<div class="container-fluid smalltextSection">
    <div class="smallText">
        <p>Man siger, at man aldrig vinder, hvis man aldrig prøver. Her vil der være konkurrencer, hvor der vil være lækre præmier! Klik dig ind på den aktive konkurrence og læs betingelserne for at deltage i konkurrencen! Nedenunder vil du kunne læse om de tidligere konkurrencer og vindere.
            Vinderne kontaktes på mail og bliver derefter offentliggjort her på siden – selvfølgelig kun hvis vinderen giver tilladelse til det :)
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="konkurrencerNU">
        <h2>Nuværende konkurrence</h2>

        <h3>Ingen aktive konkurrencer lige nu</h3>


        <div class"konkurrencerIKKENU">
        <h2>Tidligere konkurrencer</h2>

        @foreach($inActiveKonkurrencer as $inactive)
            <div class="konkurrence" style="background: url('/img/{{$inactive->thumbnailImage}}') no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;">
                <a href="konkurrencer/{{ $inactive->url }}">
                    <h3>Tillykke til {{$inactive->winner_name}}!</h3>
                    <h4>{{$inactive->title}}</h4>
                </a>
            </div>
        @endforeach
    </div>
</div>

</div>






<div class="container-fluid newsletterContainer">
    <h2>Stay Tuned</h2>
    <p>Få de seneste nyheder med unboxing og anmeldelser af nye spændende produkter</p>
    <div class="centerForm">
        <form>
            <input type="email"  placeholder="Din mail">
            <input type="submit" value="Tilmeld">
        </form>
    </div>
</div>


<div class="footer">
    <h4>DARIEFLAVOUR</h4>
    <div class="kortStreg"></div>
    <div class="mainMenu">
        <ul>
            <li><a href="#">UNBOXING</a></li>
            <li><a href="#">ANMELDELSER</a></li>
            <li><a href="#">HYGGE</a></li>
            <li><a href="#">OM MIG</a></li>
            <li><a href="#">SAMARBEJDE</a></li>
            <li><a href="#">KONTAKT</a></li>
        </ul>
    </div>
    <div class="langStreg"></div>
    <p>Copyright | DarieFlavour 2016</p>
</div>

</body>
</html>