<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Sarah Cosyns</title>

        <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">

        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="./images/3flechesColor.ico">
    </head>

    <body>

        <!-----------------------------BOUTON SCROLL TOP------------------------------->
        <button onclick="topFunction()" id="myBtn"><i class="fa fa-angle-up" aria-hidden="true"></i></button>

        <script>
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!----------------------------------- HOME --------------------------------->

        <div id="wrapper" >
            <section>
                <header class="animated pulse">
                    <div class="line"><img class="avatar" src="./images/PPSarah..png" alt="Photo Profil Sarah Cosyns"></div>

                    <h1>SARAH COSYNS</h1>

                    <p>&lt; Web developer junior / &gt;</p>

                    <div class="icones">
                        <a href="#apropos"><img src="./images/moi.png" alt="A propos" class="hvr-grow-rotate"></a>

                        <a href="#parcours"><img src="./images/parcoursPetit.png" alt="Parcours" class="hvr-grow-rotate"></a>

                        <a href="#webdevelopeur"><img src="./images/WebDev.png" alt="Web dev" class="hvr-grow-rotate"></a>

                        <a href="#contactezmoi"><img src="./images/2018-10-12_1055.png" alt="Contactez-moi" class="hvr-grow-rotate"></a>
                    </div>
                </header>
            </section>
        </div>

        <!----------------------------------- MAIN ---------------------------------> 
        <main>
            <!--------------------------------- A PROPOS ------------------------------->

            <h2 id="apropos" ><img src="./images/3flechesColor.ico" alt="Arrow Pink Left">&Agrave; PROPOS<img src="./images/3flechesColorRight.png" alt="Arrow Pink Left"></h2>

            <p class="underline" /p>

            <p id="propos">Actuellement en formation en Web Application Developer (Back-end) à Interface3 et certifiée en juin 2019, je suis curieuse, logique, ambitieuse et responsable. Je serai en stage du 6 mai au 28 juin 2019 à l'agence <a href="http://www.mcarnolds.be/">Mc Arnolds</a>.</p>

            <!----------------------------------- PARCOURS --------------------------------->

            <h2 id="parcours"><img src="./images/3flechesColor.ico" alt="Arrow Pink Left">PARCOURS<img src="./images/3flechesColorRight.png" alt="Arrow Pink Left"></h2><p class="underline" /p>

            <div id="container">
                <ul id="liste">
                    <li class="element"><ul><img src="./images/work.png" alt=""><li class="jaartal">2019 (2 mois)</li><li class="ondertitel">Stage - McArnolds</li><li class="description">Interface3 - Réalisation du projet "Inspirations" en Symfony4</li></ul></li>

                    <li class="element"><ul><img src="./images/work.png" alt=""><li class="jaartal">2018 (3 jours)</li><li class="ondertitel">Hackathon</li><li class="description">Interface3 -  Développement d'un quizz pour apprendre à coder. Langages: Javascript</li></ul></li>

                    <li class="element"><ul><img src="./images/study.png" alt=""><li class="jaartal">2018-2019</li><li class="ondertitel">Web Application Developer</li><li class="description">Interface3 - Certification: Europass - C#</li></ul></li>

                    <li class="element"><ul><img src="./images/work.png" alt=""><li class="jaartal">2014-2019</li><li class="ondertitel">Responsable VIP</li><li class="description">Bloody Louis</li></ul></li>

                    <li class="element"><ul><img src="./images/work.png" alt=""><li class="jaartal">2017 (2 mois)</li><li class="ondertitel">Exposition #HARCELEMENTDERUE</li><li class="description">E.P.F.C (Relation Publiques) - Création d'un événement</li></ul></li>

                    <li class="element"><ul><img src="./images/work.png" alt=""><li class="jaartal">2016 (3 mois)</li><li class="ondertitel">Edition Ventures Stage</li><li class="description">E.P.F.C (Relations Publiques) - Organisation d'événement pour le magazine Gentleman et ELLE Belgique</li></ul></li>

                    <li class="element"><ul><img src="./images/study.png" alt=""><li class="jaartal">2014-2017</li><li class="ondertitel">Relations Publiques</li><li class="description">Enseignement de Promotion et de Formation Continue</li></ul></li>

                    <li class="element"><ul><img src="./images/work.png" alt=""><li class="jaartal">2010-2014</li><li class="ondertitel">Barmaid</li><li class="description">Parc Savoy, Club Clandestin, Mezza</li></ul></li>

                    <li class="element"><ul><img src="./images/study.png" alt=""><li class="jaartal">2010-2013</li><li class="ondertitel">Psychologie</li><li class="description">Université Libre de Bruxelles</li></ul></li>
                </ul>


            </div>  

            <button id="later" class="btnParcours"><img src="./images/whiteArrow.png" alt=""></button>
            <button id="vroeger" class="btnParcours"><img src="./images/RightArrowWhite.png" alt=""></button>

            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script  src="./assets/js/parcours.js"></script>


            <!----------------------------------- WEB DEV --------------------------------->
            <div>
                <h2 id="webdevelopeur"><img src="./images/3flechesColor.ico" alt="Arrow Pink Left">COMPéTENCES<img src="./images/3flechesColorRight.png" alt="Arrow Pink Left"></h2><p class="underline" /p>

                <div id="competences">
                    <ul id="accordion" class="accordion">
                        <li>
                            <div class="link"><i class="fa fa-code" aria-hidden="true"></i>Langages<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">C#</a></li>
                                <li><a href="#">SQL</a></li>
                                <li><a href="#">Javascript</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-desktop" aria-hidden="true"></i>Web<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">HTML 5</a></li>
                                <li><a href="#">CSS 3</a></li>
                                <li><a href="#">XML</a></li>
                                <li><a href="#">Ajax</a></li>
                                <li><a href="#">Json</a></li>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">Responsive web design</a></li>
                                <li><a href="#">Normes W3C</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-cogs" aria-hidden="true"></i>Analyse<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Analyse de DB</a></li>
                                <li><a href="#">Modélisation UML</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gestion de projet<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Cahier des charges</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Mockup</a></li>
                                <li><a href="#">Mapping</a></li>
                                <li><a href="#">Ergonomie</a></li>
                                <li><a href="#">Hébergement</a></li>
                                <li><a href="#">Référencement SEO</a></li>
                                <li><a href="#">Méthode SCRUM</a></li>
                                <li><a href="#">Rédaction pour le web</a></li>
                                <li><a href="#">Droit internet</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-database" aria-hidden="true"></i>Base de données<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Microsoft SQL Server</a></li>
                                <li><a href="#">MySQL</a></li>
                                <li><a href="#">PhpMyAdmin</a></li>
                                <li><a href="#">MariaDB</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-wrench" aria-hidden="true"></i>Outils / IDE<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">PhpStorm</a></li>
                                <li><a href="#">NetBeans</a></li>
                                <li><a href="#">Visual Studio 2015</a></li>
                                <li><a href="#">Brackets</a></li>
                                <li><a href="#">Visual Paradigm</a></li>
                                <li><a href="#">Git / GitHub</a></li>
                                <li><a href="#">FileZilla</a></li>
                                <li><a href="#">XAMPP</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul id="accordions" class="accordion">
                        <li>
                            <div class="link"><i class="fa fa-code-fork" aria-hidden="true"></i>Framework<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Symfony4</a></li>
                                <li><a href="#">ASP.net</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-wifi" aria-hidden="true"></i>Serveur Web<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Apache</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-laptop" aria-hidden="true"></i>CMS<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Wordpress</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-mobile" aria-hidden="true"></i>Mobile<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Ionic</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-cog" aria-hidden="true"></i>Système d'Exploitation<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">OSX</a></li>
                                <li><a href="#">Windows 10</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="link"><i class="fa fa-paint-brush" aria-hidden="true"></i>Graphisme<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li><a href="#">Indesign</a></li>
                                <li><a href="#">The Gimp</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                <script  src="./assets/js/competences.js"></script>



                <!-------------------------------------PORTFOLIO----------------------------------->
                <h2 id="webdevelopeur"><img src="./images/3flechesColor.ico" alt="Arrow Pink Left">PORTFOLIO<img src="./images/3flechesColorRight.png" alt="Arrow Pink Left"></h2><p class="underline" /p>

                <div class="container">
                    <div class="main">
                        <div class="projet" id="cv">
                            <div class="filtre">
                                <h2>Site Curriculum Vitae</h2>
                                <p>C'est durant ma formation à Interface3 que j'ai pu réaliser mon site. Les langages utilisés: HTML5 - CSS3 - Javascript</p>
                                <a href="#" class="bouton">Voir le projet</a>
                            </div>
                        </div>

                        <div class="projet" id="hackathon">
                            <div class="filtre">
                                <h2>Hackathon 2018</h2>
                                <p>Le thème du Hackathon par Interface3: Code &amp; Décode. Les langages utilisés: HTML5 - CSS3 - Javascript - Ajax - jQuery</p>
                                <a href="https://github.com/sabrinagrenon/hackathon2018/tree/master/Hackaton" class="bouton">Voir le projet</a>
                            </div>
                        </div>

                        <div class="projet" id="sousmarin">
                            <div class="filtre">
                                <h2>Sous-marin</h2>
                                <p>Durant le cours de la  "Culture de la programmation" à Interface 3, nous avons du réaliser une forme avec le logiciel OPENSCAD.</p>
                                <a href="./sous-marin.html" class="bouton">Voir le projet</a>
                            </div>
                        </div>            
                    </div>

                    <div class="main">
                        <div class="projet view-first">
                            <div class="filtre">
                                <h2>Alexia Nakhai</h2>
                                <p>Coming Soon</p>
                                <a href="#" class="bouton">Voir le projet</a>
                            </div>
                        </div>

                        <div class="projet" id="videsneakers">
                            <div class="filtre">
                                <h2>Vide-Sneakers</h2>
                                <p>Pour le cours de PHP/Symfony nous avons du créer un projet en Symfony 4.</p>
                                <a href="https://github.com/sarahcosyns/vide-sneakers" class="bouton">Voir le projet</a>
                            </div>
                        </div> 

                        <div class="projet" id="inspirations">
                            <div class="filtre">
                                <h2>Inspirations</h2>
                                <p>Durant mon stage chez McArnolds j'ai réalisé un projet en Symfony 4 avec jQuery, Less et Ajax.</p>
                                <a href="#" class="bouton">Privée</a>
                            </div>
                        </div> 
                    </div>

                    <div class="main">
                        <div class="projet" id="bicko">
                            <div class="filtre">
                                <h2>Bicko</h2>
                                <p>Réalisation d'un mini projet avec l'API Villo-Bruxelles et le moyn de payement Stripe</p>
                                <a href="https://github.com/sarahcosyns/bicko" class="bouton">Voir le projet</a>
                            </div>
                        </div>           
                    </div>
                </div>  
            </div>

            <!----------------------------------- CONTACTEZ-MOI --------------------------------->
            <h2 id="contactezmoi"><img src="./images/3flechesColor.ico" alt="Arrow Pink Left">CONTACTEZ-MOI<img src="./images/3flechesColorRight.png" alt="Arrow Pink Left"></h2><p class="underline" /p>


            <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="alert alert-danger">
                <? implode('<br>', $_SESSION['errors']); ?>
            </div>
            <?php endif; ?>

            <form action="post_contact.php"  method="POST" class="main-container page__container">
                <div class="page__section">
                    <label class="field field_type2">
                        <input required class="field__input" placeholder="ex. Sarah Cosyns" name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                        <span class="field__label">Nom</span>
                        <span class="field__line"></span>
                    </label>
                </div>

                <div class="page__section">
                    <label class="field field_type2">
                        <input required type="email" class="field__input" placeholder="ex. sarahexemple@gmail.com" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                        <span class="field__label">Email</span>
                        <span class="field__line"></span>
                    </label>
                </div>

                <div class="page__section">
                    <label class="field field_type1">
                        <input required class="field__input" placeholder="ex. Bonjour Sarah, ..." name="message" value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?>">
                        <span class="field__label">Votre message</span>
                        <span class="field__line"></span>
                    </label>
                </div>
                <button type="submit" id="bouton_formulaire">Envoyer</button>
            </form>


            <div id="download">
                <p>Télécharger le CV.pdf</p>
                <a href="./CV-papier.pdf" download='' type="btn"><i class="far fa-arrow-alt-circle-down fa-3x" title="Télécharger CV.pdf"></i></a>
            </div>



        </main>


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <!----------------------------------- FOOTER --------------------------------->
        <footer>
            <div class="footer">
                <p>&copy; SARAH COSYNS | WEB APPLICATION DEVELOPER</p>
                <a href="https://www.linkedin.com/in/sarah-cosyns"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </div>
        </footer>
    </body>
</html>


<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']); 
?>