<?php
    if (@$_SESSION["verif"] != "oui"){
        echo '<header class="entete">
            <h1 id="logo"><a href="index.php"> FitProt </a></h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li class="deroulant"><a href="nutrition.php">Nutrition</a></li>

                        <li class="deroulant"><a href="vetements.php">Vêtements</a></li>

                        <li><a href="accessoires.php">Accessoires</a></li>
                        <li><a href="contact.php">Contactez nous</a></li>
                    </ul>

                </nav>
                <div class="compte"><a href="connexion.php"><i class="far fa-user"></i> Se connecter </a></div>
                <div class="compte"><a href="panier.php"><i class="fas fa-shopping-basket"></i>Panier</a></div>
                </header>
        ';

    }
    else{
        echo '<header class="entete">
            <h1 id="logo"><a href="index.php"> FitProt </a></h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li class="deroulant"><a href="nutrition.php">Nutrition</a></li>

                        <li class="deroulant"><a href="vetements.php">Vêtements</a></li>

                        <li><a href="accessoires.php">Accessoires</a></li>
                        <li><a href="contact.php">Contactez nous</a></li>
                    </ul>
                </nav>
                <div class="compte"><a href="deconnexion.php"><i class="fa-solid fa-right-from-bracket"></i> Deconnexion </a></div>
                <div class="compte"><a href="panier.php"><i class="fas fa-shopping-basket"></i>Panier</a></div>
                </header>
        ';
    }
?>