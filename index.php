<?php 
    $title="Home";
    $currentPage="index";
    include("res/php/header.php");
    include("res/php/navbar.php");
?>

<!-- Main Page Content -->

<div class="container">

    <!-- Everything above the fold -->
    <section id="index" class="min-vh-100 pad-correction">
        <div class="row h-100">
            <h1 class="text-light text-center">Skylar (Vixendev)</h1>
        </div>
    </section>

    <!-- About me -->
    <section id="about" class="min-vh-100 pad-correction">
        <div class="row">
            <h1 class="text-light text-center">About Me</h1>
        </div>
        <div class="row h-100">
            <div class="align-middle col-md-6 h-100">
                <p class="text-light">
                    Hello! My name is Skylar and I am a web and software developer. I have a passion for creating
                    small projects with literally no purpose. I am currently a student at the University of
                    the West of England studying Applied Computing as a batchelors degree.
                </p>
            </div>
            <div class="col-md-6 align-middle text-center h-100">
                <img src="res/img/skylar.png" class="selfieimage" alt="A photo of moi">
        </div>
    </section>

    <!-- Place to show off my projects -->
    <section id="projects" class="min-vh-100 pad-correction">
        <div class="row">
            <h1 class="text-light text-center">Projects</h1>
            <div class="row mt-5 row-cols-1 row-cols-md-3 g-4">

                <!-- Bastepin Card -->
                <div class="col mb-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-9">
                                        <h5>Bastepin</h5>
                                    </div>
                                    <div class="col-3">
                                        <h5 class="d-flex flex-row-reverse"><a class="link-dark text-right ps-1" title="Live Project" href="https://bastepin.vixendev.com"><i class="fas fa-globe"></i></a><a class="link-dark ps-1" href="https://github.com/skyethevixen/bastepin" title="Github Repo"><i class="fab fa-github"></i></a></h5> 
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">Bastepin was a small project I was set as part of my degree. The goal was to make a text saving web application similar to that of Pastebin, which I put my own personal spin and flare onto.</p>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-dark d-flex flex-row-reverse"><i class="fas fa-database ps-1" title="MySQL"></i><i class="fab fa-js-square ps-1" title="JavaScript"></i><i class="fab fa-html5 ps-1" title="HTML"></i><i class="fab fa-php ps-1" title="PHP"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Autodelete discord bot Card -->
                <div class="col mb-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-9">
                                        <h5>Auto-delete Bot</h5>
                                    </div>
                                    <div class="col-3 text-right">
                                        <h5 class="d-flex flex-row-reverse"><a class="link-dark" title="Github Repo" href="https://github.com/skyethevixen/https://github.com/SkyeTheVixen/Auto-Delete-Bot"><i class="fab fa-github"></i></a></h5> 
                                    
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">I decided to make a utility discord bot that automatically deletes any messages sent. It allowed me to experiment with the discord API a little bit whilst making an arguably useless project</p>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-dark d-flex flex-row-reverse"><i class="fab fa-discord ps-1" title="Discord API"></i><i class="fab fa-node-js ps-1" title="NodeJS"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Card -->
                <!-- <div class="col mb-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-9">
                                        <h5>Auto-delete Bot</h5>
                                    </div>
                                    <div class="col-3 text-right">
                                        <h5 class="d-flex flex-row-reverse"><a class="link-dark" href="https://github.com/skyethevixen/https://github.com/SkyeTheVixen/Auto-Delete-Bot"><i class="fab fa-github"></i></a></h5> 
                                    
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">I decided to make a utility discord bot that automatically deletes any messages sent. It allowed me to experiment with the discord API a little bit whilst making an arguably useless project</p>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-dark d-flex flex-row-reverse"><i class="fab fa-node-js ps-1"></i><i class="fab fa-discord"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Project Card -->
                <!-- <div class="col mb-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-9">
                                        <h5>Project Title</h5>
                                    </div>
                                    <div class="col-3 text-right">
                                        <h5 class="d-flex flex-row-reverse"><a class="link-dark" href="https://github.com/skyethevixen/https://github.com/SkyeTheVixen/Auto-Delete-Bot"><i class="fab fa-github"></i></a></h5> 
                                    
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">I decided to make a utility discord bot that automatically deletes any messages sent. It allowed me to experiment with the discord API a little bit whilst making an arguably useless project</p>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-dark d-flex flex-row-reverse"><i class="fab fa-node-js ps-1"></i><i class="fab fa-discord"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact form -->
    <section id="contact" class="min-vh-100 pad-correction">
        <div class="row">
            <h1 class="text-light text-center">Contact</h1>
        </div>
    </section>


</div>

<!-- End Main Page Content -->


<?php include("res/php/footer.php"); ?>