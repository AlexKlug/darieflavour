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
        <p><span>UNBOXING</span></p>
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

<div class="showHidesearchNamesProducts">
    <img src="img/brush-icon.png">
</div>





<div class="container-fluid searchNamesProducts">
    <ul>
        <?php

        $sql2 = "SELECT DISTINCT  product FROM articles WHERE kategori='Unboxing'";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
                echo '<a href="http://darieflavour.dk/unboxing.php?product=' . $row["product"]. '"><li>' . $row["product"]. '</li></a>';
            }
        } else {
            echo "0 results";
        }


        ?>
    </ul>
</div>


<div class="container-fluid searchNamesProducts">
    <ul>
        @foreach($UnboxingArticles as $UA)

        <a href="/{{ $UA->product }}"><li>{{ $UA->product }}</li> </a>
        @endforeach
    </ul>
</div>





<div class="container-fluid medOverskrift2">



    <?php
    if (isset($_GET["product"])) {

        $product = $_GET["product"];
        $sql4 = "SELECT * FROM articles WHERE product='$product' ORDER BY id DESC";
        $result4 = $conn->query($sql4);

        if ($result4->num_rows > 0) {
            // output data of each row
            while($row = $result4->fetch_assoc()) {
                echo '
							<div class="col-md-4 col-sm-12 col-xs-12 thirdPart">
		        				<a href="' . $row["kategoriSmall"]. '?id=' . $row["id"]. '&name=' . $row["overskrift"]. '">
									<div class="leadingArticle">
										<div class="insideLeadingArticle">
											<img src="img/' . $row["image"]. '" alt="' . $row["imageALT"]. '">
											<div class="infoLeadingArticle" style="border-top: solid 2px ';

                $theCategory = $row["kategori"];

                if ($theCategory == "Anmeldelse") {
                    echo "#FF889A";
                } elseif ($theCategory == "Unboxing") {
                    echo "black";
                } elseif ($theCategory == "Hygge") {
                    echo "#E8C9B4";
                }

                echo ';">
												<h1>' . $row["overskrift"]. '</h1>
												<p>' . $row["dato"]. ' | ' . $row["kategori"]. '</p>
												<p class="textToArticleThumbs">' . $row["kortArtikelTekst"]. '</p>
											</div>
										</div>
									</div>
								</a>

								</div>';
            }
        } else {
            echo "0 results";
        }

    }


    ?>












    <?php
    if (!isset($_GET["product"])) {
        $sql = "SELECT * FROM articles WHERE kategori='Unboxing' ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4 col-sm-12 col-xs-12 thirdPart">
			        				<a href="' . $row["kategoriSmall"]. '?id=' . $row["id"]. '&name=' . $row["overskrift"]. '">
										<div class="leadingArticle">
											<div class="insideLeadingArticle">
												<img src="img/' . $row["image"]. '" alt="' . $row["imageALT"]. '">
												<div class="infoLeadingArticle" style="border-top: solid 2px ';

                $theCategory = $row["kategori"];

                if ($theCategory == "Anmeldelse") {
                    echo "#FF889A";
                } elseif ($theCategory == "Unboxing") {
                    echo "black";
                } elseif ($theCategory == "Hygge") {
                    echo "#E8C9B4";
                }

                echo ';">
													<h1>' . $row["overskrift"]. '</h1>
													<p>' . $row["dato"]. ' | ' . $row["kategori"]. '</p>
													<p class="textToArticleThumbs">' . $row["kortArtikelTekst"]. '</p>
												</div>
											</div>
										</div>
									</a>
								</div>';
            }
        } else {
            echo "0 results";
        }
    }

    ?>

</div>




<?php include "newsletterSection.php"; ?>
<?php include "footer.php"; ?>

<script type='text/javascript'>
    $( document ).ready(function() {
        $( ".showHidesearchNamesProducts" ).click(function() {
            $( ".searchNamesProducts" ).slideToggle( "slow", function() {
                // Animation complete.
            });
        });

    });

</script>





























</body>
</html>