<?php
	define("MAX_INDEX", 23);
	define("PICS_PER_PAGE", 3);

	// Racunamo broj stranica
	$pages_count = ceil((MAX_INDEX + 1) / PICS_PER_PAGE);
	
	// Stavljamo da je trenutni page po defoltu 1.
	$page = 1;
	
	// Proveravamo da li u query stringu postoji definisan page.
	// Ukoliko postoji, page se uzima iz query stringa.
	if (isset($_GET["page"])) {
		$page = (int) $_GET["page"];
		// Ukoliko page nije u odgovarajucem opsegu, postaviti ga na defolt, tj. na 1.
		if (!($page >= 1 && $page <= $pages_count)) {
			$page = 1;
		}
	}
	
	// Indeks prve slike koju treba prikazati
	$img_from = ($page - 1) * PICS_PER_PAGE;
	$img_to = min($img_from + PICS_PER_PAGE, MAX_INDEX+1);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/image/ikonica.ico">
    <title>RUDANOVA PUTOVANJA</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="srilanka.css">
    <link rel="stylesheet" type="text/css" href="sections.css">
</head>
<body>
    <div class="container">
    <div class="navigation">
            <ul>
                <div class="first">
                    <a href="index.html">
                        <img class="current" src="image/ikonica.png">
                    </a>
                    <span class="title hed"><b>RUDANOVA PUTOVANJA <br>(globalno)</b></span> 
                </div>
                <li>
                    <a href="uae.html">
                        <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                        <span class="title">(2014.) Ujedinjeni Arapski Emirati</span>
                    </a>
                </li>
                <li>
                    <a href="czech.html">
                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                        <span class="title">(2015.) 	&Ccaron;e&scaron;ka</span>
                    </a>
                </li>
                <li>
                    <a href="thailand.html">
                        <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                        <span class="title">(2015.) Tajland</span>
                    </a>
                </li>
                <li>
                    <a href="srilanka.php">
                        <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                        <span class="title">(2017.) &Scaron;ri Lanka</span>
                    </a>
                </li>
                <li>
                    <a href="china.html">
                        <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                        <span class="title">(2018.) Kina, Japan</span>
                    </a>
                </li>
                <li>
                    <div class="iocn-link">
                        <span class="icon"><ion-icon class="arrow" name="chevron-down-outline"></ion-icon></span>
                        <span class="title">(2019.) APSOLVENTSKA EKSKURZIJA</span>
                    </div>
                    <ul class="sub-menu">
                        <li>
                            <a href="france.html">
                                <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                <span class="title">Francuska</span>
                            </a>
                        </li>
                        <li>
                            <a href="spain.html">
                                <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                <span class="title">Španija</span>
                            </a>
                        </li>
                        <li>
                            <a href="italia.html">
                                <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                <span class="title">Italija</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="last">
                    <a href="greece.html">
                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                        <span class="title">(2019.) Gr&ccaron;ka</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            
            <div class="naslov">
                <h1>Šri Lanka</h1>
            </div> 


            <div class="cardhover">
                <div class="card">
                    <div class="imgBx">
                        <img src="image/srilanka/cardhover/DSCN8526a.jpg"> 
                    </div>
                    <div class="content">
                        <h2 class="h1">Colombo</h2>
                        <p>
                            We started this trip in the capital of Thailand - Bangkok. 
                            We spent the night in the old center (photo above). 
                            We also saw a new part of the city.
                        </p>
                        <a href="#" class="a1">Read More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="image/srilanka/cardhover/DSCN8743a.jpg">
                    </div>
                    <div class="content">
                        <h2 class="h2">Kandy</h2>
                        <p>
                            We spent the trip on the island of Phuket, in the south of Thailand. 
                            My first time vacationing on a smaller island. 
                            On this island we mostly saw white people.
                        </p>
                        <a href="#" class="a2">Read More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="image/srilanka/cardhover/DSCN8959a.jpg"> 
                    </div>
                    <div class="content">
                        <h2 class="h1">Negombo</h2>
                        <p>
                            The tourist place where we stayed is located on Patong Beach. 
                            This place is famous for the videos when a huge tsunami happened in 2004.
                        </p>
                        <a href="#" class="a1">Read More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="image/srilanka/cardhover/DSCN9030a.jpg">
                    </div>
                    <div class="content">
                        <h2 class="h2">Wilpattu</h2>
                        <p>
                            At the persuasion of our older sisters, we went to this beach one day. 
                            The color of the sand on this beach is golden. We rested, 
                            enjoyed and took photos
                        </p>
                        <a href="#" class="a2">Read More</a>
                    </div>
                </div>
            </div>


            <section class="cases flex-grid">
                <div class="row">
                    <div class="column">
                        <img src="image/srilanka/cases/DSCN8405a.jpg">
                        <img src="image/srilanka/cases/DSCN8513a.jpg">
                    </div>
                    <div class="column">
                        <img src="image/srilanka/cases/DSCN8519a.jpg">
                        <img src="image/srilanka/cases/DSCN8704a.jpg">
                    </div>
                    <div class="column">
                        <img src="image/srilanka/cases/DSCN9024a.jpg">
                        <img src="image/srilanka/cases/DSCN9312a.jpg">
                    </div>
                </div>
            </section>

            <div class="banner">
                <video autoplay muted loop>
                    <source src="image/srilanka/DSCN9143.MOV">
                </video>
                <h2>WILPATTU</h2>
            </div>

            <div id="fotografije" class="fotke">
                <?php
                    // Ispis svih slika na tekucoj strani.
                    for ($i = $img_from; $i < $img_to; $i++) {
                        echo "<img src='image/srilanka/willpatu/$i.jpg'/>";
                    }
                    echo "<br>";
                    // Ispis linkova na sve stranice.
                    for ($i = 1; $i <= $pages_count; $i++) {
                        echo "<a href='?page=$i'>$i</a> ";
                    }
                ?>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //menu toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        //add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover', activeLink));
    </script>
    
</body>
</html>