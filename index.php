<?php get_header(); ?>

<body>
    <div class="overflow-wrap">

        <!-- HOME -->
        <div class="modal-wrap flex">
            <div class="mask"></div>
            <div class="modal" id="modal">
                <div class="carousel-wrap">
                    <div class="window">
                        <div id="carousel">
                            <div class="slide"></div>
                            <div class="slide"></div>
                            <div class="slide"></div>
                        </div>
                        <i class="mdi mdi-chevron-left" id="prev"></i>
                        <i class="mdi mdi-chevron-right" id="next"></i>
                    </div>

                </div>
                <div class="info-box">
                    <div class="title"></div>
                    <div class="tag"></div>
                    <div class="detail"></div>
                    <a href="#" target="_blank">
                        <div class="button"><i class="mdi mdi-open-in-new"></i>VIEW SITE</div>
                    </a>
                </div>
                <i class="close mdi mdi-close"></i>
            </div>
        </div>

        <section id="home" class="flex height-fix">
            <div id="pt" class="canvas"></div>
            <div class="flex">

                <div class="text">
                    Hello, I'm <span class="highlight">Jonathan Sequeira</span>.
                    <br>
                    I'm a full-stack web developer.
                </div>

                <div class="button page-link" dest="about">View my work <i class="mdi mdi-arrow-right"></i></div>

                <nav class="flex">
                    <div class="link-wrap">
                        <div class="active page-link" dest="home">home</div>
                        <div class="page-link" dest="about">about</div>
                        <div class="page-link" dest="portfolio">portfolio</div>
                        <div class="page-link" dest="contact">contact</div>
                    </div>
                    <i class="mdi mdi-menu"></i>
                </nav>
            </div>

        </section>
        
        
        <!-- ABOUT -->
        <section id="about">
            <div class="container flex">

                <div class="header waypoint" data-animation="slide-in-left">ABOUT</div>
                <div class="header-bar waypoint" data-animation="slide-in-left" data-delay=".5s"></div>

                <div class="flex row label-wrap">
                    <div class="flex row-gt-sm">
                        <div class="flex bullet-wrap ">
                            <div class="hex-wrap waypoint" data-animation="flip-in-x">
                                <div class="hexagon">
                                    <i class="mdi mdi-speedometer"></i>
                                </div>
                            </div>
                            <div class="waypoint" data-animation="fade-in">
                                <div class="label bold">Fast</div>
                                <div>Fast load times and lag free interaction, my highest priority.</div>
                            </div>
                        </div>

                        <div class="flex bullet-wrap ">
                            <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".2s">
                                <div class="hexagon">
                                    <i class="mdi mdi-cellphone-link"></i>
                                </div>
                            </div>
                            <div class="waypoint" data-animation="fade-in" data-delay=".2s">
                                <div class="label bold">Responsive</div>
                                <div>My layouts will work on any device, big or small.</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex row-gt-sm">
                        <div class="flex bullet-wrap ">
                            <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".4s">
                                <div class="hexagon">
                                    <i class="mdi mdi-lightbulb-outline"></i>
                                </div>
                            </div>
                            <div class="waypoint" data-animation="fade-in" data-delay=".4s">
                                <div class="label bold">Intuitive</div>
                                <div>Strong preference for easy to use, intuitive UX/UI.</div>
                            </div>
                        </div>

                        <div class="flex bullet-wrap ">
                            <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".6s">
                                <div class="hexagon">
                                    <i class="mdi mdi-rocket"></i>
                                </div>
                            </div>
                            <div class="waypoint" data-animation="fade-in" data-delay=".6s">
                                <div class="label bold">Dynamic</div>
                                <div>Websites don't have to be static, I love making pages come to life.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills-wrapper flex row-gt-sm">
                    <div class="flex flex-50-gt-sm waypoint" data-animation="slide-in-left">
                        <img src="http://www.main.vet2dev.com/img/profile.png" class="me">
                        <!-- <div><img class="up-arrow" src="img/up-arrow.png"></div> -->
                        <div class="label bold">I love Programming</div>
                        <div>
                            <p>I am a recent veteran after six years of service I have decided to pursue a career in
                                Computer Science. My
                                careers in the Navy as a petroleum technician has been quite a journey, but I decided
                                to continue where I left
                                off before my service and transitioned to civilian life to achieve my goals. I
                                graduated from Broward College
                                with an Associate of Arts in Computer Science, and I am currently enrolled at Florida
                                Vocational Institute
                                furthering my education and learning new technologies. I currently work at Ryze Agency
                                as a Full-Stack Web
                                Developer I have serious passion for UI effects, animations and creating intuitive,
                                dynamic user experiences.</p>
                            <span class="page-link highlight" dest="contact">Let's make something special.</span>
                        </div>
                    </div>

                    <div class="flex flex-50-gt-sm waypoint bars-wrap" data-animation="slide-in-right">
                        <div class="bar flex">
                            <div class="bar fill" style="width:85%">
                                <div class="tag bold flex">HTML</div>
                            </div>
                            <span>90%</span>
                        </div>
                        <div class="bar flex">
                            <div class="bar fill" style="width:75%">
                                <div class="tag bold flex">CSS</div>
                            </div>
                            <span>80%</span>
                        </div>

                        <div class="bar flex">
                            <div class="bar fill" style="width:75%">
                                <div class="tag bold flex">JavaScript</div>
                            </div>
                            <span>80%</span>
                        </div>

                        <div class="bar flex">
                            <div class="bar fill" style="width:35%">
                                <div class="tag bold flex">PHP</div>
                            </div>
                            <span>40%</span>
                        </div>
                        <div class="bar flex">
                            <div class="bar fill" style="width:45%">
                                <div class="tag bold flex">Node.js</div>
                            </div>
                            <span>50%</span>
                        </div>

                        <div class="bar flex">
                            <div class="bar fill" style="width:55%">
                                <div class="tag bold flex">React</div>
                            </div>
                            <span>60%</span>
                        </div>

                        <div class="bar flex">
                            <div class="bar fill" style="width:45%">
                                <div class="tag bold flex">UI Design</div>
                            </div>
                            <span>50%</span>
                        </div>

                        <div class="bar flex">
                            <div class="bar fill" style="width:80%">
                                <div class="tag bold flex">Git</div>
                            </div>
                            <span>80%</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="flex" id="portfolio">

            <div class="header waypoint" data-animation="slide-in-right">PROJECTS</div>
            <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".3s"></div>

            <div class="filter-wrap waypoint" data-animation="fade-in">
                <div class="flex row">
                    <div class="filter" data-filter="all">ALL</div>
                    <div class="filter" data-filter=".react">REACT</div>
                    <div class="filter" data-filter=".node">NODE.JS</div>
                    <div class="filter" data-filter=".php">PHP</div>
                    <div class="filter" data-filter=".js">JAVASCRIPT</div>
                </div>
                <div class="float-bar">
                    <div class="flex row">
                        <div class="filter" data-filter="all">ALL</div>
                        <div class="filter" data-filter=".react">REACT</div>
                        <div class="filter" data-filter=".node">NODE.JS</div>
                        <div class="filter" data-filter=".php">PHP</div>
                        <div class="filter" data-filter=".js">JAVASCRIPT</div>
                    </div>
                </div>
            </div>

            <div id="gallery" class="container flex row wrap waypoint">
                <div class="mix js" data-my-order="1">
                    <div>
                        <a href="https://www.zona.com/" target="_blank">
                            <div class="card"></div>
                            <div class="text">
                                <div class="bold">Zona Health</div>
                                <span class="highlight">HTML/CSS/JavaScript/.Liquid</span>
                            </div>
                            <a href="https://www.zona.com/" target="_blank">
                                <div class="button" id="roambi">GO TO SITE</div>
                            </a>
                        </a>
                    </div>
                </div>

                <div class="mix rails" data-my-order="1">
                    <div>
                        <a href="https://bodyaline.com/" target="_blank">
                            <div class="card"></div>
                            <div class="text">
                                <div class="bold">Body-Aline</div>
                                <span class="highlight">HTML/CSS/JavaScript/.Liquid</span>
                            </div>
                            <a href="https://bodyaline.com/" target="_blank">
                                <div class="button" id="walker">GO TO SITE</div>
                            </a>
                        </a>
                    </div>
                </div>

                <div class="mix node" data-my-order="1">
                    <div>
                        <a href="http://efs.ryzeagencydev.com/" target="_blank">
                            <div class="card"></div>
                            <div class="text">
                                <div class="bold">Elite Financial</div>
                                <span class="highlight">HTML/CSS/JavaScript/Bootstrap</span>
                            </div>
                            <a href="http://efs.ryzeagencydev.com/" target="_blank">
                                <div class="button" id="mystand">GO TO SITE</div>
                            </a>
                        </a>
                    </div>
                </div>

                <div class="mix js" data-my-order="1">
                    <div>
                        <a href="https://lovaskin.us/" target="_blank">
                            <div class="card"></div>
                            <div class="text">
                                <div class="bold">Lova Skin</div>
                                <span class="highlight">HTML/CSS/JavaScript/.Liquid</span>
                            </div>
                            <a href="https://lovaskin.us/" target="_blank">
                                <div class="button" id="never">GO TO SITE</div>
                            </a>
                        </a>
                    </div>
                </div>

                <div class="mix rails" data-my-order="1">
                    <div>
                        <a href="https://www.adesseny.com" target="_blank">
                            <div class="card"></div>
                            <div class="text">
                                <div class="bold">Adessy New York</div>
                                <span class="highlight">HTML/CSS/JavaScript/PHP/WordPress</span>
                            </div>
                            <a href="https://www.adesseny.com" target="_blank">
                                <div class="button" id="powur">GO TO SITE</div>
                            </a>
                        </a>
                    </div>
                </div>


                <div class="mix node" data-my-order="1">
                    <a href="https://github.com/sequeirajonathan/Knack_Form" target="_blank">
                        <div>
                            <div class="card"></div>
                            <div class="text">
                                <div class="bold">Upsell 24 Contact Center Workflow App</div>
                                <span class="highlight">JavaScript/CSS/MySQL</span>
                            </div>
                            <a href="https://github.com/sequeirajonathan/Knack_Form" target="_blank">
                                <div class="button" id="themall">GITHUB</div>
                            </a>
                    </a>
                </div>
            </div>
    </div>
    </section>

    <!-- BLOG -->
    <section id="blog">

    </section>

    <!-- CONTACT -->
    <section id="contact">
        <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"
            class="svgcolor-light">
            <path d="M0 0 L50 100 L100 0 Z" fill="#f5f5f5" stroke="#f5f5f5"></path>
        </svg>
        <div class="container flex">
            <div class="header waypoint" data-animation="slide-in-left">CONTACT</div>
            <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".25s"></div>
            <div class="highlight waypoint" data-animation="slide-in-right" data-delay=".5s">Have a question or
                want to work together?</div>
            <form class="waypoint" data-animation="pop-in" data-delay=".5s" id="contact-form">
                <input placeholder="Name" type="text" name="name" required>
                <input placeholder="Enter email" type="email" name="email" required>
                <textarea placeholder="Your Message" type="text" name="message"></textarea>
                <div id="success">
                    <div>Your message was sent successfully. Thanks!<span id="close" class="mdi mdi-close"></span></div>
                </div>
                <input class="button" type="submit" id="submit" value=SUBMIT>
            </form>
        </div>
    </section>

    <?php get_footer(); ?>