@extends('master')
@section('title', 'Portfolio')
@section('main')

    <!---------------------------------------------------------------------------------------->
    <!--Présentation-->
    <div id="background">
    <section id="presentation">
        <div class="container pt-5">

            <div class="row pt-5">
                <h1>Ahmed Daoud</h1>
                <p class="desc-1">Etudiant en 2eme année de DUT informatique</p>
                <div class="row">
                    <p class="desc-2">Je m'appelle Ahmed Daoud je suis en Deuxième année de DUT informatique.
                        Je suis actuellement à la recherche d'un stage.</p>
                    <div class="row pb-5">
                        <div class="col pb-5">
                            <button type="button" class="btn btn-dark"><a href="#apropos">A propos</a></button>
                        </div>
                        <div class="col pb-5">
                            <button type="button" class="btn btn-dark"><a href="#competence">Compétences</a></button>
                        </div>
                        <div class="col pb-5">
                            <button type="button" class="btn btn-dark"><a href="#formation">Formation</a></button>
                        </div>
                        <div class="col pb-5">
                            <button type="button" class="btn btn-dark"><a href="#projects">Projets</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!---------------------------------------------------------------------------------------->
    <!--Présentation-->
        <section id="apropos">
                <div class="container">
                    <h2 class="section-heading" data-outline="A propos">A propos</h2>
                    <div class="wrapper">
                        <div class="left">
                            <div class="card">
                                <ul>
                                    <li>
                                        <span>Numéro de téléphone</span><br>
                                        <p>07 82 65 66 91</p>
                                    </li>
                                    <li>
                                        <span>Adresse mail</span><br>
                                        <p>ahmed__daoud@outlook.fr</p>
                                    </li>
                                    <li>
                                        <span>Localisation</span><br>
                                        <p> 62640, Montigny-en-Gohelle</p>
                                    </li>
                                    <li>
                                        <span>Mobilité</span><br>
                                        <p> Permis B - Vehicule Personnel</p>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-outline-dark"><a href="pdf/CV.pdf">Mon Cv</a></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            <img class="img" src="img/IMG_3297.jpg"/>
                            </div>
                    <div><p class="pt-5 para">Je suis étudiant de deuxième année de Diplôme Universitaire de Téchnologie en Informatique à l'IUT de Lens,
                        Ce portfolio a pour but de me présenter ainsi que de vous montrer les différents projets scolaires et personnels.
                            je suis actuellement à la recherche d'un stage de 10 semaines pour le 10 avril jusqu'au 11 juin.</p></div>

                        </div>
            </section>
    <!---------------------------------------------------------------------------------------->
    <!--Compétences-->
    <section id="competence">
        <div class="container">
            <h2 class="section-heading" data-outline="Compétences">Compétences</h2>
            <div class="all-items">
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/color/68/000000/java-coffee-cup-logo--v1.png"/>
                    </div>
                    <h3 class="item-heading">Java</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/dusk/64/000000/php-logo.png"/>
                    </div>
                    <h3 class="item-heading">PHP</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/color/68/000000/python--v2.png"/>
                    </div>
                    <h3 class="item-heading">Python</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                            <img class="img-fluid" src="https://img.icons8.com/color/68/000000/postgreesql.png"/>
                    </div>
                    <h3 class="item-heading">PSQL</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>

                </div>
            </div>
            <div class="all-items">
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/fluency/68/000000/laravel.png"/>
                    </div>
                    <h3 class="item-heading">Laravel</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                            <img class="img-fluid" src="https://img.icons8.com/color/68/000000/bootstrap.png"/>
                    </div>
                    <h3 class="item-heading">Bootstrap</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/color/68/000000/git.png"/>
                    </div>
                    <h3 class="item-heading">GIT</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="https://img.icons8.com/color/35/000000/linux--v2.png"/>
                    </div>
                    <h3 class="item-heading">Linux</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>

                </div>
            </div>

            <div class="all-items">
                <div class="item">
                    <div class="icon">
                        <img src="https://img.icons8.com/stickers/35/000000/thin-client.png"/>
                    </div>
                    <h3 class="item-heading">Réseaux</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>

                </div>
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/color/68/000000/source-code.png"/>
                    </div>
                    <h3 class="item-heading">HTML/CSS</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>

                </div>
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="img/jetbrains.png"/>
                    </div>
                    <h3 class="item-heading">Jetbrains</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img class="img-fluid" src="https://img.icons8.com/color/68/000000/kali-linux.png"/>
                    </div>
                    <h3 class="item-heading">Kali Linux</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>
                </div>
            </div>
            </div>
    </section>

    <!---------------------------------------------------------------------------------------->
    <!--Formation-->

<section id="formation">
    <div class="container pt-5">
        <h2 class="section-heading" data-outline="Formation">Formation</h2>
            <div class="timeline">
                <ul>
                    <li>
                        <div class="timeline-content">
                            <h3 class="date">2020-2022</h3>
                            <h1>DUT Informatique | Lens</h1>
                            <p>J'étudie à l'IUT de Lens pour mon DUT informatique.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3 class="date">2019-2020</h3>
                            <h1>INSA | Centre Val de Loire</h1>
                            <p>J'ai effectué une année à l'INSA Centre Val de Loire.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3 class="date">2016-2019</h3>
                            <h1>Lycée Louis Pasteur | Hénin Beaumont</h1>
                            <p>J'ai obtenu mon Baccalauréat Scientifique options Mathématique Mention Assez Bien Européenne.</p>
                        </div>
                    </li>
                </ul>
            </div>
    </div></section>
    <!---------------------------------------------------------------------------------------->
    <!--Projets-->
    <section id="projects">
        <div class="container">
            <h2 class="section-heading" data-outline="Projects">Projects</h2>
            <div class="all-items">
                <div class="item">
                    <div class="left">
                        <div class="img">
                            <img src="./image/project-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <h2 class="project-title">Projet APA | 2021 </h2>
                        <p class="project-desc pt-3">Pour ce projet en Java, nous devions en équipe de deux
                        utiliser Scanner et compter le nombre de mots dans un fichier, en utilisant différent méthodes
                        telles que les tableaux, les liste chainées, les arbres binaires et les tables de hashages. </p>
                        <img src="https://img.icons8.com/ios-glyphs/50/000000/github.png"/>

                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img">
                            <video controls>
                                <source src="/img/Apex1.mp4" type=video/mp4>
                            </video>
                        </div>
                    </div>
                    <div class="right">
                        <h2 class="project-title">Technologie RFID | 2021</h2>
                        <p class="project-desc pt-3">Pour cette recherche personnelle,
                            j'ai utilisé une carte Arduino et un scanner RFID,
                            pour voir les failles de cette technologie en scannant des cartes d'accès et badges d'immeubles.</p>
                                <img src="https://img.icons8.com/ios-glyphs/50/000000/github.png"/>

                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img">
                            <video controls>
                                <source src="/img/Apex4.mp4" type=video/mp4>
                            </video>
                        </div>
                    </div>
                    <div class="right">
                        <h2 class="project-title">Projet S2 | 2021 </h2>
                        <p class="project-desc pt-3">Elaboration d'un jeu de plateau, le labyrinthe en Java, en groupe de 4.</p>
                        <img src="https://img.icons8.com/ios-glyphs/50/000000/github.png"/>

                    </div>
                    </div>
                <div class="item">
                    <div class="left">
                        <div class="img">
                            <video controls>
                                <source src="/img/Apex2.mp4" type=video/mp4>
                            </video>
                        </div>
                    </div>
                    <div class="right">
                    <h2 class="project-title">Projet Sokoban | 2021 </h2>
                    <p class="project-desc pt-3">Conception d'un jeu en Python, le Sokoban en modèle Model View Controller,
                        en équipe de 4.</p>
                    <img src="https://img.icons8.com/ios-glyphs/50/000000/github.png"/>

                </div>
                </div>
        <div class="item">
            <div class="left">
                <div class="img">
                    <video controls>
                        <source src="/img/Apex3.mp4" type=video/mp4>
                    </video>
                </div>
            </div>
           <div class="right">
            <h2 class="project-title">Refont du site de l'IUT | 2020 </h2>
            <p class="project-desc pt-3">Modification du site de
                l'IUT en équipe de 3, dans les langages HTML et CSS avec l'utilisation du framework Bootstrap.</p>
            <img src="https://img.icons8.com/ios-glyphs/50/000000/github.png"/>
        </div>
        </div>
                </div>
        </div>
    </section>
        <section id="loisir">
            <div class="container">
                <h2 class="section-heading" data-outline="loisirs">loisirs</h2>
                <div class="all-items">
                    <div class="item">
                        <h3 class="stats-sub-heading">Musculation</h3>
                        <img src="https://img.icons8.com/ios/100/000000/strength.png"/>
                    </div>
                    <div class="item">
                        <h3 class="stats-sub-heading">Auditeur <br>de Rap & Rnb</h3>
                        <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/100/000000/external-headset-advertising-kiranshastry-solid-kiranshastry.png"/>
                    </div>
                    <div class="item">
                        <h3 class="stats-sub-heading">Lecteur <br>de comics et romans</h3>
                        <img src="https://img.icons8.com/ios-filled/100/000000/book.png"/>
                    </div>
                    <div class="item">
                        <h3 class="stats-sub-heading">Veille <br> sécurité informatique</h3>
                        <img src="https://img.icons8.com/ios/100/000000/cyber-security.png"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection



