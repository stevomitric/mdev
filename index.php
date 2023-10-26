<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
   $_SERVER['HTTPS'] == 1) ||  
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="theme-color" content="#3d5a80">
        <meta name="Description" CONTENT="Stevo Mitric is a Software Developer currently studying at School of Electrical Engineering, University of Belgrade. This Personal Portfolio represents collection of my projects and achievements.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="main-phone.css">
        <link rel="stylesheet" href="default.css">
        <script src="jq.js"></script>
        <script src="analytics.js"></script>
        <script src="main.js"></script>
        <script src="typewriter.js"></script>
        <script src="svgdraw.js"></script>

        <title>MitricDEV - Personal Portfolio</title>

        <link rel="icon" type="image/x-icon" href="images/logo-primary1-mc.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="bg-primary1 m-0">
        <div class="overlay mobile-zoom" id ='over-div'>
            <img id = 'im_logo' src="images/logo-primary1-m.png" class="center-image hidden">

            <svg id="loadbar-front" class="center" height="10" width="0" style=" display: none; margin-top: 80px; margin-left: -200px;" >
                <path d="M0 0 L400 0" stroke-width="10" stroke="var(--secondary1)"/>
            </svg>

            <p id="motto-front1" class="hidden h3-text center" style="display: none; margin-top: 90px; margin-left: -190px;">Efficient.</p>
            <p id="motto-front2" class="hidden h3-text center" style="display: none;margin-top: 90px; margin-left: -60px;">Elegant.</p>
            <p id="motto-front3" class="hidden h3-text center" style="display: none;margin-top: 90px; margin-left: 70px;">Human.</p>

            <svg class="center-abs" height="400" width="400" style="margin-top: -120px; margin-left: -90px;">
                <path class="hidden" id="f-line1"  stroke-width="6" stroke="var(--secondary1)" d="M40,40 h100 a20,20 0 0 1 20,20" />
                <path class="hidden" id="f-line2"  stroke-width="6" stroke="var(--secondary1)" d="M160,60 v100 a20,20 0 0 1 -20,20" />
                <path class="hidden" id="f-line3"  stroke-width="6" stroke="var(--secondary1)" d="M140,180 h-100 a20,20 0 0 1 -20,-20" />
                <path class="hidden" id="f-line4"  stroke-width="6" stroke="var(--secondary1)" d="M20,160 v-100 a20,20 0 0 1 20,-20" />
                <!--<path  id="f-line4"  stroke-width="6" stroke="var(--secondary1)" d="M40,40 h100 a20,20 0 0 1 20,20 v100 a20,20 0 0 1 -20,20 h-100 a20,20 0 0 1 -20,-20 v-100 a20,20 0 0 1 20,-20" /> -->
            </svg>
            <svg class="center-abs" width="120" height="100" viewBox="-10 -10 100 120" style="margin-top: 70px; margin-left: -60px;">
                <path class="hidden" id="f-text1"  stroke-width="3" stroke="var(--secondary1)" d="M  51.855 17.92 L 32.715 17.92 L 32.715 35.547 L 54.346 35.547 L 54.346 35.547 L 32.715 35.547 L 32.715 0 L 54.346 0"/>
                <path class="hidden" id="f-text2"  stroke-width="3" stroke="var(--secondary1)" d="M 58.594 0 L 70.532 32.081 L 71.24 34.229 L 71.948 32.081 L 83.887 0"/>
                <path class="hidden" id="f-text3"  stroke-width="3" stroke="var(--secondary1)" d="M 9.961 35.547 L 0 35.547 L 0 0 L 9.839 0 A 14.997 14.997 0 0 1 15.199 0.945 A 14.067 14.067 0 0 1 17.31 1.954 Q 20.654 3.907 22.559 7.435"/>
                <path class="hidden" id="f-text4"  stroke-width="3" stroke="var(--secondary1)" d="M 20.654 3.907 22.559 7.435 A 16.38 16.38 0 0 1 24.451 13.987 A 19.635 19.635 0 0 1 24.512 15.333 L 24.512 19.947 A 18.177 18.177 0 0 1 23.853 24.913 A 15.793 15.793 0 0 1 22.644 27.955 A 13.816 13.816 0 0 1 17.432 33.521 A 14.384 14.384 0 0 1 10.218 35.544 A 17.03 17.03 0 0 1 9.961 35.547"/>
                <!--- <path id="f-text1"  stroke-width="3" stroke="var(--secondary1)" d="M  51.855 17.92 L 32.715 17.92 L 32.715 35.547 L 54.346 35.547 L 54.346 35.547 L 32.715 35.547 L 32.715 0 L 54.346 0  M 58.594 0 L 70.532 32.081 L 71.24 34.229 L 71.948 32.081 L 83.887 0 M 9.961 35.547 L 0 35.547 L 0 0 L 9.839 0 A 14.997 14.997 0 0 1 15.199 0.945 A 14.067 14.067 0 0 1 17.31 1.954 Q 20.654 3.907 22.559 7.435 A 16.38 16.38 0 0 1 24.451 13.987 A 19.635 19.635 0 0 1 24.512 15.333 L 24.512 19.947 A 18.177 18.177 0 0 1 23.853 24.913 A 15.793 15.793 0 0 1 22.644 27.955 A 13.816 13.816 0 0 1 17.432 33.521 A 14.384 14.384 0 0 1 10.218 35.544 A 17.03 17.03 0 0 1 9.961 35.547"/> -->
            </svg>
        </div>
        <div id="main" hidden>
            <div class="menu-right" id="right-menu">
                <div>
                    <ul class="nav-right">
                        <li class=""><a class="nav-right-item" onClick='hideRightMenu();document.getElementById("div-about").scrollIntoView({behavior: "smooth"});' href="#about"><span>01.</span> About</a></li>
                        <li class=""><a class="nav-right-item" onClick='hideRightMenu(); document.getElementById("div-proj").scrollIntoView({behavior: "smooth"});' href="#projects"><span>02.</span> Projects</a></li>
                        <li class=""><a class="nav-right-item" onClick='hideRightMenu(); document.getElementById("div-contact").scrollIntoView({behavior: "smooth"});' href="#contact"><span>03.</span> Contact</a></li>
                        <!-- <li><a href="#home">Home</a></li> -->
                        <li class=""><a onclick="sa('RESUME_CLICK')" class="nav-top-item active" target="_blank" href="CV.pdf">Resume</a></li>
                    </ul>
                </div>
            </div>
            <div style="display: none; " class="menu-left" id="left-blur" onclick="hideRightMenu()"></div>

            <nav style="z-index: 5; position: relative;">
                <ul class="nav-top hidden appear" id="mainmenu">
                    <!-- <li><a href="#home">Home</a></li> -->
                    <li> <img onclick="location.reload();" id="nav-img" class="hidden img-logo hover-push-up hover-pointer" src="images/logo-primary1-mc.png"> </li>
                    <li id="nav-a1" class="m-exp right hidden"><a onclick="sa('RESUME_CLICK')" class="nav-top-item active" target="_blank" href="CV.pdf">Resume</a></li>
                    <li id="nav-a2" class="m-exp right hidden"><a class="nav-top-item" onClick='document.getElementById("div-contact").scrollIntoView({behavior: "smooth"});' href="#contact"><span>03.</span> Contact</a></li>
                    <li id="nav-a3" class="m-exp right hidden"><a class="nav-top-item" onClick='document.getElementById("div-proj").scrollIntoView({behavior: "smooth"});' href="#projects"><span>02.</span> Projects</a></li>
                    <li id="nav-a4" class="m-exp right hidden"><a class="nav-top-item" onClick='document.getElementById("div-about").scrollIntoView({behavior: "smooth"});' href="#about"><span>01.</span> About</a></li>
                    <li id="bars-menu" class="right right-menu hover-pointer"><a onclick="showRightMenu()" ><i class="fa-solid text-primary3 fa-bars"></i></a></li>

                </ul>
            </nav>
            
            <!-- Left icons -->
            <div class="left-fixed">
                <a target="_blank" href="https://www.linkedin.com/in/stevo-mitric/" > <i id="icon-intro5" class="fa-brands fa-linkedin left-icon hidden"></i> </a>
                <br>
                <a target="_blank" href="https://github.com/stevomitric" > <i id="icon-intro4" class="fa-brands fa-github left-icon hidden"></i> </a>
                <br>
                <a target="_blank" href="https://stackoverflow.com/users/6320395/stevo-mitric"> <i id="icon-intro3" class="fa-brands fa-stack-overflow left-icon hidden"></i> </a>
                <br>
                <a target="_blank" class="td-n" href="https://www.upwork.com/freelancers/~01d463a9c8515c637c?viewMode=1"> <div id="icon-intro2" class="hidden left-icon" style="height: 20px; width: 36px;font-family: 'Lobster', cursive; " >Up </div> </a>
                <br>
                <a target="_blank" href="https://www.instagram.com/stevo._.m/"> <i id="icon-intro1" class="fa-brands fa-instagram left-icon hidden"></i> </a>
                <div class="hidden appear" style="border: 1px solid var(--secondary1); height: 100px; width: 0px; position: relative; left: 50px;"></div>
            </div>

            <!-- Right email -->
            <div class="right-fixed hidden appear">
                <p class="right-text">stevo@mitricdev.com</p>
                <div style="border: 1px solid var(--secondary1); height: 100px; width: 0px; position: relative; left: 50px;"></div>
            </div>

            <div class="center">
                <div class="container-content" >
                    <div style="width: 100%;">
                        <p id="text-intro1" class="text-1 pl-2 hidden">Hi, my name is</p>
                        <h1 id="text-intro2" class="hidden">Stevo Mitrić.</h1>
                        <h2 id="text-intro3" class="hidden">I'm a software engineer.</h2>
                        <p id="text-intro4" class="text-2 hidden">Currently studying at School of Electrical Engineering, University of Belgrade, I like challenging myself with all kinds of different projects using latest, cutting-edge technologies.</p>
                        <br>
                        <a id="text-intro5" onClick='document.getElementById("div-proj").scrollIntoView({behavior: "smooth"});' class="active hidden">Check out my projects!</a>
                    </div>
                </div>


                <div  id="div-about" class="hidden anim" style="overflow: hidden; padding-top: 100px; padding-bottom: 100px;">
                    <div class="left-about" >
                        <h3> <span> <span class="text-1 fs-num">01.</span> About me </span></h3>
                        <br>
                        <div style="padding-left: 20px;">
                            <br>
                            <p class="text-2">
                                Hello! My name is Stevo and I enjoy creating all kinds of stuff. My interest in programming started back in 2012 when i was only <span class="text-1"> 12 years old</span>, building mods for at the time, triple-A games, and as it turns out, if a 12 year-old can create a <span class="text-1">3D model of himself</span> and integrate it in a game, anyone can!
                            </p>
                            <p class="text-2">
                                Starting at that age, i had no problem adapting to vast number of different programming languages. Fast-forward to today, I’ve had the experience working on many general-purpose scripts, automation apps, UI design and lots of web-scraping tools. My main focus these days is building & maintaing a Video <span class="text-1">CMS</span> for a VOD company based in US.
                            </p>
                            <p class="text-2">
                                In my free time, I compete in a variety of programming contests (such as those on CodeForces), so everything i do, i do with efficiency as a top priority.
                            </p>
                        </div>
                    </div><div class="right-about">
                        <div class="image-border">
                            <div class="image-container">
                                <div class="image-overlay"></div>
                            </div>
                        </div>

                    </div>
                    
                </div>

                <div class="padding-title-15"></div>

                <div id="div-proj" class="hidden anim" style=" padding-bottom: 100px;">
                    <div style=" padding-top: 100px;">
                        <div id="manage-width" style="margin: auto; text-align: center;"><h3 style="text-align: center;" > <span> <span class="text-1 fs-num">02.</span> Things i've built </span></h3></div>
                    </div>

                    <div class="padding-title-15"></div>

                    <div class="project-container hidden anim">
                        <div class="project-img bg-mat-judge">
                        </div>
                        <div class="project-div-right">
                            <div class="w-100">
                                <p class="center-right text-1 m-0 pb-2 fs-80"> Featured Project</p>
                                <h4 class="center-right m-0 pb-3 fs-mobile-x">MatJudge API</h4>
                                <div class="project-div-text-right" > <p class="project-div-text-inner-right" >Mat-judge is an open source online <span class="t-sc1 mono">judging system</span>. It executes, evaluates and judges code in an isolated, secure environment, all by simple API calls. With easy installation, you can integrate it into your application in no time. <i class="fa-solid fa-rocket t-sc1 mono"></i></p> </div>
                                <p class="project-tags center-right">API - Python - flask - SQLite - Resource Distribution</p>
                                <div class="center-right"> <a onclick="sa('MATJUDGE_GITHUB')" class="td-n" href="https://github.com/stevomitric/mat-judge"> <i class="fa-brands fa-github project-icons pr-3"></i> </a> <a onclick="sa('MATJUDGE_DOCS')" class="td-n"  href="https://htmlpreview.github.io/?https://github.com/stevomitric/mat-judge/blob/master/docs/mat-judge.html"> <i class="fa-solid fa-arrow-up-right-from-square  project-icons pr-3"></i> </a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-container hidden anim">
                        <div class="project-div-right">
                            <div class="w-100" style="z-index: 1;">
                                <p class="center-left text-1 m-0 pb-2 fs-80"> Featured Project</p>
                                <h4 class="center-left m-0 pb-3 fs-mobile-x">CircuitS</h4>
                                <div class="project-div-text-left" style="z-index: 1;">
                                    <p class="project-div-text-inner-left" > CircuitS is a library written in <span class="t-sc1 mono">Julia programming language</span> for solving linear, time-invariant electric circuits. Using JuliaSymbolics library as a computer algebra system and for solving linear equations, CircuitS successfully simulates and solves simple <span class="t-sc1 mono">electric circuits</span>. <i class="fa-solid fa-car-battery t-sc1 mono"></i></p>
                                </div>
                                <p class="project-tags center-left">Julia - Symbolics - CAS - MNA - Circuit - GUI</p>
                                <div class="center-left"> <a onclick="sa('CIRCUITS_GITHUB')" class="td-n" href="https://github.com/stevomitric/CircuitS"> <i class="fa-brands fa-github project-icons pr-3"></i> </a> <a onclick="sa('CIRCUITS_DOCS')" class="td-n" href="https://stevomitric.github.io/CircuitS/"> <i class="fa-solid fa-arrow-up-right-from-square  project-icons pr-3"></i> </a> <a class="td-n" href="https://www.youtube.com/watch?v=_FDBpXHv5K4&list=PLsdlVaS2tAjwrjH75B9gKyHN_5_nphFlJ"><i class="fab fa-youtube project-icons pr-3"></i></a> </div>
                            </div>
                        </div>
                        <div class="project-img bg-circuits" style='z-index: 0; '>
                        </div>
                    </div>

                    <div class="project-container hidden anim">
                        <div class="project-img" >
                            <div>
                                <video class="video-container" width="100%" height="auto" autoplay muted loop>
                                    <source src="video/output.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="project-div-right">
                            <div class="w-100" style="z-index: 1;">
                                <p class="center-right text-1 m-0 pb-2 fs-80"> Featured Project</p>
                                <h4 class="center-right m-0 pb-3 fs-mobile-x">Microcomputer</h4>
                                <div class="project-div-text-right"> <p class="project-div-text-inner-right" >A small simulated RISC computer with basic minimal components and an assembly unit. <br> Composed of a CPU, 128KB of RAM, and suppport for interrupts, this microcomputer can execute a total of 19 different instructions. <i class="fa-solid fa-microchip t-sc1 mono"></i></p> </div>
                                <p class="project-tags center-right">Logisim - Electronics - CPU - RISC - Assembler</p>
                                <div class="center-right"> <a onclick="sa('MICROCOMPUTER_GITHUB')" href="https://github.com/stevomitric/Microcomputer"> <i class="fa-brands fa-github project-icons pr-3"></i> </a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3"> <div class="p-3"></div> </div>

                    <div class="hidden anim">
                        <h4 class="center-text m-0">Other Noteworthy Projects</h4>
                        <a class="td-n" href="https://github.com/stevomitric"> <p class="center-text text-1  h-w">View the archive  <i class="fa-brands fa-github fs-80 pl-1 text-primary3"></i></p> </a> 
                    </div>

                    <div class="project-row hidden anim">

                        <div class="p-3 d-r" >
                            <i class="fa fa-folder text-1 fs-42"></i>
                            <a target="_blank" href="https://github.com/stevomitric/Logisim-Snake" class="float-right td-n"> <i class="fa-solid fa-arrow-up-right-from-square text-2"></i> </a>
                            <span class="hidden">-</span>
                            <h4 class="fs-m">Logisim Snake <i class="fa fa-gamepad text-2 pl-1"></i> </h4>
                            
                            <p class="text-2 fs-m">
                                Simulation of a Snake game using an educational tool for designing and simulating digital logic circuits - Logisim.
                            </p>
                            <p class="project-tags">Circuits - Electronics - Game</p>
                            <a onclick="sa('SNAKE_GITHUB')" target="_blank" href="https://github.com/stevomitric/Logisim-Snake">
                                <div class="video-overlay">
                                    <video class="vid-play-enter" width="320" height="310" muted>
                                        <source src="video/snake-proj-reduced.mp4"  type="video/mp4">
                                    </video>
                                </div>
                            </a>

                        </div>

                        <div class="p-3 d-r">
                            <i class="fa fa-folder text-1 fs-42" ></i>
                            <a target="_blank" class="float-right td-n"> <i class="fa-solid fa-arrow-up-right-from-square text-2"></i> </a>
                            <span class="hidden">-</span>
                            <h4 class="fs-m">Graph Design <i class="fa fa-diagram-project text-2 pl-1"></i> </h4>
                            <p class="text-2 fs-m">
                                GUI based tool for creating graphs and running a visual simulation for most popular graph traversals/algorithms.
                            </p>
                            <p class="project-tags">GUI - Algorithms - Graphs</p>
                            <a onclick="sa('GRAPH_GITHUB')" target="_blank" href="https://github.com/stevomitric/Graph-Design">
                                <div class="video-overlay">
                                    <video class="vid-play-enter" width="320" height="310" muted>
                                        <source src="video/graph-proj-reduced.mp4"  type="video/mp4">
                                    </video>
                                </div>
                            </a>

                        </div>
                        <div class="p-3 d-r">
                            <i class="fa fa-folder text-1  fs-42"></i>
                            <a target="_blank" href="https://github.com/stevomitric/CoD2-menu-builder" class="float-right td-n"> <i class="fa-solid fa-arrow-up-right-from-square text-2"></i> </a>
                            <span class="hidden">-</span>
                            <h4 class="fs-m">CoD2 Menu builder</h4>
                            <p class="text-2 fs-m">
                                A Graphical interface tool for designing and building <span class="text-1 fs-m">.menu</span> files for old AAA games - CoD1/2/4
                            </p>
                            <p class="project-tags">GUI - Python - modding - GameDev</p>
                            <a onclick="sa('COD2_GITHUB')" target="_blank" href="https://github.com/stevomitric/CoD2-menu-builder">
                                <div class="video-overlay">
                                    <video class="vid-play-enter" width="320" height="310" muted>
                                        <source src="video/cod2-proj-reduced.mp4"  type="video/mp4">
                                    </video>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="project-row hidden anim top-offset-50">
                        <div class="p-3 d-r">
                            <i class="fa fa-folder text-1 fs-42"></i>
                            <a target="_blank"  class="float-right td-n"> <i class="fa-solid fa-arrow-up-right-from-square text-2"></i> </a>
                            <span class="hidden">-</span>
                            <h4 class="fs-m">Analog oscilloscope <i class="fa fa-bolt text-2 pl-1"></i> </h4>
                            <p class="text-2 fs-m">
                                A visual simulation of a standard analog <span class="text-1 fs-m">tektronix</span> oscilloscope. Project created to help students get familiar with working in a lab during the pandemic.
                            </p>
                            <p class="project-tags"> GUI - Function Drawing - Simulation </p>
                            <a onclick="sa('OSCILLOSCOPE_GITHUB')" target="_blank" href="https://github.com/stevomitric/Analog-Oscilloscope">
                                <div class="video-overlay">
                                    <video class="vid-play-enter" width="320" height="310" muted>
                                        <source src="video/osc-proj-reduced.mp4"  type="video/mp4">
                                    </video>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 d-r">
                            <i class="fa fa-folder text-1  fs-42"></i>
                            <a target="_blank" class="float-right td-n"> <i class="fa-solid fa-arrow-up-right-from-square text-2"></i> </a>
                            <span class="hidden">-</span>
                            <h4 class="fs-m">Multithreading extension</h4>
                            <p class="text-2 fs-m">
                                Implemented thread support for x8086 CPU architecture in Borland C. Handels events and interrupts with embedded assembler code. Integrated semaphore support for thread synchronization.
                            </p>
                            <p class="project-tags">C - Threads - Semaphores</p>
                            <a onclick="sa('THREAD_GITHUB')" target="_blank" href="https://github.com/stevomitric/Thread-Extension">
                                <div class="video-overlay">
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="p-3">
                    <span class="hidden">a</span>
                </div>
                <div class="padding-title-15"></div>

                <div id="div-contact" class="hidden anim">
                    <div class="contact-div">
                        <p class="text-1 pl-2">03. What's next?</p>
                        <h2 class="text-intro3">Get in Touch  </h2>
                        <p class="text-2">I'm always looking for new opportunities, and my inbox is always open. Whether you have a question or just want to say hi, I’ll do my best to get back to you! <span class="waving-hand">👋</span> </p>
                        <div class="p-5">
                            <a onclick="sa('CONTACT_CLICK')" href="mailto: stevo@mitricdev.com" class="active td-n ">Say hello!  </a>
                        </div>
                    </div>
                </div>

                <div class="p-5">
                    <span class="hidden">a</span>
                </div>
                <div class="padding-title-15"></div>

                <div style="text-align: center">
                    <p class="text-2 text-credits">Designed & Built by <span style="color: var(--secondary1);">Stevo Mitric</span></p>
                </div>

            </div>
        </div>
    </body>
</html>