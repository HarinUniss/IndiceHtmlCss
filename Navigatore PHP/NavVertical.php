<?php session_start();//accedo alla variabile globale $_SESSION ?>
<!-- Fare in modo che una volta fatto il loghin la sessione resti aperta nelle altre pagine del sito -->

<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <title>Navigazione Verticale PHP</title>
    <link rel="stylesheet" href="style/main.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<nav>
    <div class="sidebar ">  <!--Retro della barra di navigazione-->

        <div class="logo-details"> <!--Sezione del logo e del titolo-->
            <i class='bx bxl-c-plus-plus'></i>  <!-- classe per il logo presa da Boxicons.com -->
            <span class="logo_name">Appunti</span> <!--Nome Sito-->
        </div>

        <ul class="nav-links>"> <!--sezine di navigazione con tutti i link-->

            <li> <!--Link diretto senza menu a tendina-->
                <a href="#">
                    <i class='bx bx-grid-alt' ></i> <!-- classe per il logo presa da Boxicons.com -->
                    <span class="link_name">Dashboard</span> <!-- Nome del link -->
                </a>
                <ul class="sub-menu blank"> <!--Sottomenu vuoto-->
                    <li><a class="link_name" href="#">Dashboard</a></li> <!--Nome sezione che sarà visibile solo se il menu è stretto-->
                </ul>
            </li>

            <li><!--Bottone con menu a tendina contenente dei link-->
                <div class="iocn-link"><!-- classe che uso per creare un sottomenu -->
                    <a href="#">
                        <i class='bx bxl-html5' ></i> <!-- classe per il logo presa da Boxicons.com -->
                        <span class="link_name">Html</span><!--Nome sezione-->
                    </a>
                    <i class='bx bx-chevron-down arrow' ></i> <!--Freccettinache dovrà andare su o giu al clik-->
                </div>
                <ul class="sub-menu"> <!--Sotto menu a tendina-->
                    <li> <a class="link_name" href="#">Html </a> </li><!--Nome sezione che sarà visibile solo se il menu è stretto-->
                    <li> <a href="#"> capitolo 1 </a> </li>
                    <li> <a href="#"> capitolo 2 </a> </li>
                    <li> <a href="#"> capitolo 3 </a> </li>
                    <li> <a href="#"> capitolo 4 </a> </li>
                    <li> <a href="#"> capitolo 5 </a> </li>
                    <li> <a href="#"> capitolo 7 </a> </li>
                </ul>
            </li>

            <li>    <!--Sezione profilo-->
                <div class="profile-details"> <!--Sfondo-->
                    <div class="profile-content"> <!--Sfondo immagine profilo-->
                        <img src="image/profile.png" alt="profile"> <!--Immagine profilo-->
                    </div>

                    <div class="name-job"> <!--Blocco info-->
                        <div class="profile_name">Harin Uzra</div> <!--Nome profilo-->
                        <div class="job">UtenteAmminiatratore</div> <!--Ruolo-->
                    </div>

                    <a href="#">
                        <i class='bx bx-log-out' ></i> <!--Immagine per il log out presa da Boxicons.com -->
                    </a>
                </div>
            </li>


        </ul>





    </div>
</nav>





</html>

