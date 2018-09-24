@section('menu')

<div class="menu">

    <div class="searchFieldMobile">
        <form method="GET">
            <div class="searchButtonBoxMobile">
                <img id="searchButtonMobile" src="img/searchIcon.png">
                <input type="submit" name="submitButton" value="" class="imgClass" />
            </div>
            <input id="searchInputMobile" type="text" name="searchTerm" placeholder="Søg...">
        </form>
    </div>

    <div class="logo">
        <a href="index.php">
            <img src="../img/logoIcon.png">
        </a>
    </div>


    <button class="c-hamburger c-hamburger--htx">
        <span>toggle menu</span>
    </button>
    <div class="mainMenu">
        <ul>
            <a href="index.php"><li>FORSIDE</li></a>
            <a href="unboxing.php"><li>UNBOXING</li></a>
            <a href="anmeldelser.php"><li>ANMELDELSER</li></a>
            <a href="hygge.php"><li>HYGGE</li></a>
            <a href="konkurrencer.php"><li>KONKURRENCER</li></a>
            <a href="shop.php"><li>SHOP</li></a>
        </ul>
    </div>

    <div class="searchField">
        <form method="GET">
            <input id="searchInput" type="text" name="searchTerm" placeholder="Søg...">
            <div class="searchButtonBox">
                <img id="searchButton" src="img/searchIcon.png">
                <input type="submit" name="submitButton" value="" class="imgClass" />
            </div>
        </form>
    </div>
</div>

<style type="text/css">
    .menu .mainMenu ul .dropdown a li {background-position: 0% 0%;}
</style>


<script type="text/javascript">
    $( document ).ready(function() {
        $( "#searchButton" ).click(function() {
            $("#searchInput").animate({width:'toggle'},350);
            $("#searchInputMobile").animate({width:'toggle'},350);
            $( "#searchButton" ).hide();
            $( ".imgClass" ).show();
        });
        $( "#searchButtonMobile" ).click(function() {
            $("#searchInputMobile").animate({height:'toggle'},350);
        });
    });
</script>


<?php


$searchTerm = (isset($_GET['searchTerm']) ? $_GET['searchTerm'] : null);
$submitButton = (isset($_GET['submitButton']) ? $_GET['submitButton'] : null);



if (isset($submitButton)) {


    echo "<div class='fixedSearch'>";
    echo "<div class='getBackSearch'>";
    echo "<div class='container-fluid medOverskrift2'>";
    echo "<h3>Søgeresultater<h3>";

    $sql = "SELECT * FROM articles WHERE overskrift LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '
				        			<div class="col-sm-4 thirdPart">
				        				<a href="' . $row["kategoriSmall"]. '?id=' . $row["id"]. '/' . $row["overskrift"]. '">
											<div class="normalArticle" style="background-image: url(img/' . $row["image"]. '), url(img/shadow.png)">
												<div class="tag" style="background-color: ' . $row["kategoriColor"]. '">
													<p>' . $row["kategori"]. '</p>
												</div>
												<div class="contentContainer">
													<h2>' . $row["overskrift"]. '</h2>
													<p>' . $row["kortArtikelTekst"]. '</p>
													<p>' . $row["dato"]. '</p>
												</div>
											</div>
										</a>
									</div>';
        }
    } else {
        echo "Der er desværre ingen artikler der matcher søgeordet";
    }





    echo "</div>";
    echo "</div>";
    echo "</div>";


    echo "	<script type='text/javascript'>
						    	$('.fixedSearch').fadeIn();
							</script>";


}



?>



<script type="text/javascript">
    $( document ).ready(function() {
        $( ".getBackSearch" ).click(function() {
            $(".fixedSearch").fadeOut();
        });
    });
</script>



<script type="text/javascript">

    (function() {

        "use strict";

        var toggles = document.querySelectorAll(".c-hamburger");

        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };

        function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
                e.preventDefault();
                (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            });
        }

    })();

</script>


<script type="text/javascript">





    $( document ).ready(function() {

        $( ".c-hamburger" ).click(function() {
            $( ".mainMenu" ).slideToggle( "slow", function() {
                // Animation complete.
            });
        });

    });


</script>

    @endsection