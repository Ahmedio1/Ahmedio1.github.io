@extends('master')
@section('title', 'Portfolio')
@section('main')

    <!---------------------------------------------------------------------------------------->
    <!--Présentation-->
    <section id="presentation">
        <div class="container">

            <div class="row ">
                <div class="col-6 mb-5 pb-5 left">
                    <h1>Ahmed Daoud</h1>
                    <p class="desc">Etudiant en 2eme année de DUT informatique</p>
                    <div class="row pb-5">
                        <div class="col pb-5">
                            <button type="button" class="btn btn-outline-dark pr">Compétences</button>
                        </div>
                        <div class="col pb-5">
                            <button type="button" class="btn btn-outline-dark">Projets</button>
                        </div>
                    </div>
                    </div>
                    <div class="col-1"></div>
                        <div class="col-5 pt-4 right">
                            <p class="desc">Je m'appelle Ahmed Daoud je suis en Deuxième année de DUT informatique.
                                Je suis actuellement à la recherche d'un stage.</p>
                        </div>
            </div></div>

    </section>
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
                <div class="item">
                    <div class="icon">
                            <img class="img-fluid" src="https://img.icons8.com/color/68/000000/source-code.png"/>
                    </div>
                    <h3 class="item-heading">HTML/CSS</h3>
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
                <div class="item">
                    <div class="icon">
                        <img src="https://img.icons8.com/stickers/35/000000/thin-client.png"/>
                    </div>
                    <h3 class="item-heading">Réseaux</h3>
                    <div class="progress">
                        <div class="progress__bar"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Compétences-->
    <!---------------------------------------------------------------------------------------->
    <!--Projets-->


    <div class="container">
        <h2 class="section-heading" data-outline="Formation">Formation</h2>
    <ul class="timeline">

        <!-- Item 1 -->
        <li>
            <div class="direction-r">
                <div class="flag-wrapper">
                    <span class="flag">DUT Informatique</span>
                    <span class="time-wrapper"><span class="time">2020 - 2022</span></span>
                </div>
                <div class="desc">J'effectue ma deuxième année de DUT informatique à l'IUT de Lens.</div>
            </div>
        </li>

        <!-- Item 2 -->
        <li>
            <div class="direction-l">
                <div class="flag-wrapper">
                    <span class="flag">INSA Centre Val de loire</span>
                    <span class="time-wrapper"><span class="time">2019 - 2020</span></span>
                </div>
                <div class="desc">Prépa intégrée à l'INSA Centre Val de Loire.</div>
            </div>
        </li>

        <!-- Item 3 -->
        <li>
            <div class="direction-r">
                <div class="flag-wrapper">
                    <span class="flag">Lycée Louis Pasteur Henin Beaumont</span>
                    <span class="time-wrapper"><span class="time">2016 - 2019</span></span>
                </div>
                <div class="desc">J'ai obtenu mon baccalauréat scientifique option maths mention assez bien et européenne.</div>
            </div>
        </li>

    </ul>
    </div>

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
                        <h2 class="project-title">Real Chat</h2>
                        <h3 class="project-sub-title">Online real time chat app.</h3>
                        <p class="project-desc">I made this application for a USA customer. This application is truly Amazing. Here
                            you can chat with your friend
                            constantly inside a secure environment and there will be no information reserved after the end of the
                            session.</p>
                        <div class="buttons">
                            <a href="#" class="primary-btn">Know More</a>
                            <a href="#" class="primary-btn outline external-link"> <span>Preview</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img">
                            <img src="./image/project-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <h2 class="project-title">Hotel Zaman Website
                        </h2>
                        <h3 class="project-sub-title">A website for hotel zaman.
                        </h3>
                        <p class="project-desc">Hotel zaman is one of the famous hotel in Chittagong. We created their website. The
                            client wanted a clean and smooth
                            design which I was able to provide at the end of the project.</p>
                        <div class="buttons">
                            <a href="#" class="primary-btn">Know More</a>
                            <a href="#" class="primary-btn outline external-link"> <span>Preview</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img">
                            <img src="./image/project-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <h2 class="project-title">Prinazz Website</h2>
                        <h3 class="project-sub-title">A website for music studio</h3>
                        <p class="project-desc">Piranz is one of the famous music composer in UAE. The challenge was to keep the
                            music environment in the web. It was
                            hard but in the end
                            we provided a good quality website that satisfied the client.</p>
                        <div class="buttons">
                            <a href="#" class="primary-btn">Know More</a>
                            <a href="#" class="primary-btn outline external-link"> <span>Preview</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



