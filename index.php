<?php include ("security-headers.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dependency-Track is an intelligent Software Composition Analysis (SCA) platform that allows organizations to automatically ingest and identify third-party components and any inherited vulnerabilities from their use."/>
        <meta name="keywords" content="sdlc, devops, automation, software, bill of materials, owasp, appsec, security, bom, vulnerabilities, visibility, component analysis, nvd, nist, software security, dependency check, software composition analysis, sca, supply chain risk management, scrm, c-scrm, cybersecurity, node security platform, nsp, vulndb"/>
        <meta name="dcterms.rightsHolder" content="Steve Springett">
        <meta name="dcterms.dateCopyrighted" content="<?php echo date("Y"); ?>">
        <meta name="robots" content="index,follow"/>
        <title>Dependency-Track | Software Composition Analysis | OWASP</title>
        <link rel="author" href="https://www.google.com/+SteveSpringett"/>
        <link rel="publisher" href="https://www.google.com/+SteveSpringett"/>
        <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fontcustom.css">
        <link rel="stylesheet" type="text/css" href="assets/owl-carrosel/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="assets/slick-slider/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/slick-slider/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/offcanvas-menu.css">
        <link rel="stylesheet" type="text/css" href="assets/css/gh-fork-ribbon.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body class="singlePage" id="page-top" data-spy="scroll" data-target=".navbar">

        <a class="github-fork-ribbon" href="https://github.com/stevespringett/dependency-track/fork" data-ribbon="Fork me on GitHub">Fork me on GitHub</a>

        <header id="home" class="header-section">
            <nav class="navbar navbar-inverse hidden-sm hidden-xs">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php"><img src="assets/images/logo-greyscale.svg" alt="Dependency-Track Logo"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#home">Home</a></li>
                            <li><a class="page-scroll" href="#overview">Overview</a></li>
                            <li><a class="page-scroll" href="#screenshots">Screenshots</a></li>
                            <li><a class="page-scroll" href="#features">Features</a></li>
                            <li><a class="page-scroll" href="#download">Download</a></li>
                            <li><a class="page-scroll" href="https://www.owasp.org/index.php/OWASP_Dependency_Track_Project"><img src="assets/images/logo-owasp-small.svg"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="navbar-header inline-block visible-sm visible-xs">
                <a class="navbar-brand" href="index.php"><img src="assets/images/logo-m.png" alt="image"></a>
            </div>
        </header>

        <section class="top-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-9">
                        <div class="wrapper-content">
                            <span class="small-text"><span class="color-text">Identify </span> Open Source Risk</span>
                            <!--
                            <span class="small-text"><span class="color-text">Accelerated </span> Risk Intelligence</span>
                            -->
                            <h3>DevOps-Enabled Component Analysis</h3>
                            <a href="#download">
                            <button class="btn btn-default">Download <i class="fa fa-download" aria-hidden="true"></i></button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-0 col-sm-8 col-sm-offset-0 hidden-xs">
                        <div class="caption wow fadeInRight">
                            <img src="assets/images/screenshots/dashboard.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sponsor-section">
            <div class="container">
                <h2 class="hidden">client-title</h2>
                <div class="sponsor-carousel owl-carousel owl-theme">
                    <div class="item"><img src="assets/images/sponsor/rbs.png" alt="image"></div>
                    <div class="item"><img src="assets/images/sponsor/owasp.png" alt="image"></div>
                </div>
            </div>
        </section>

        <div class="border">
            <div class="container">
                <hr>
            </div>
        </div>

        <section id="overview" class="admin-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <div class="caption wow fadeInLeft" data-wow-duration="1s"><a href="#"><img src="assets/images/screenshots/dashboard.png" alt=""></a></div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-5">
                        <div  class="right-bar">
                            <h3>We developed different versions of dashboard</h3>
                            <div id="lightBox" class="v-text">
                                <a href="http://youtu.be/qP68aVNg6RE" data-poptrox="youtube,800x480"><i class="fa fa-play" aria-hidden="true"></i> Watch how it works</a>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="screenshots" class="screen-section section-padding">
            <div class="title text-center">
                <h2>Screenshots</h2>
            </div>
            <div class="screen-carousel text-center">
                <div><img src="assets/images/screenshots/components.png" alt=""></div>
                <div><img src="assets/images/screenshots/projects.png" alt=""></div>
                <div><img src="assets/images/screenshots/vulnerabilities.png" alt=""></div>
                <div><img src="assets/images/screenshots/vulnerability.png" alt=""></div>
                <div><img src="assets/images/screenshots/vulnerable-component.png" alt=""></div>
                <div><img src="assets/images/screenshots/license.png" alt=""></div>
            </div>
        </section>

        <section id="features" class="cta-section-four section-padding">
            <div class="container">
                <div class="title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Promotes Secure Continuous Delivery Pipelines</h2>
                        </div>
                        <div class="col-sm-6">
                            <p>Dependency-Track is an intelligent Software Composition Analysis (SCA) platform that allows organizations to quickly identify third-party and open source components that are placing your applications at risk.</p>
                        </div>
                    </div>
                </div>
                <div class="cta-container">
                    <div class="row first-row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                <h3><a href="#">Apps and Notifications</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <h3><a href="#">Customizable watch Faces</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <i class="fa fa-compass" aria-hidden="true"></i>
                                <h3><a href="#">Built-in GPS</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                                <h3><a href="#">Third-Party Health Apps</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <i class="fa fa-repeat" aria-hidden="true"></i>
                                <h3><a href="#">Activity Rings</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper last-wrapper">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <h3><a href="#">Heart Rate Sensor</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="download" class="download-section">
            <div class="container">
                <div class="col-md-6">
                    <div class="wrapper-content">
                        <span class="small">Dependency-Track is free and Apache 2.0 licensed</span><br/><br/>
                        <div>
                            <span class="caption vertically-centered"><i class="fa fa-docker download-icon" aria-hidden="true" title="Docker"></i></span>
                            <span class="docker-command vertically-centered">docker pull owasp/dependency-track</span>
                        </div>
                        <div>
                            <span class="caption vertically-centered"><i class="fa fa-download download-icon" aria-hidden="true" title="Download"></i></span>
                            <span class="download-option vertically-centered">Java WARs available on  <a href="https://github.com/stevespringett/dependency-track/releases">GitHub</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper-content text-right">
                        <span class="small">Connect with the developers &amp; community:</span><br/><br/>
                        <a href="https://github.com/stevespringett/dependency-track"><i class="fa fa-github social-icon" aria-hidden="true" title="GitHub"></i></a>
                        <a href="https://twitter.com/dependencytrack"><i class="fa fa-twitter social-icon" aria-hidden="true" title="Twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UC8xdttysl3gNAQYvk1J9Efg"><i class="fa fa-youtube-play social-icon" aria-hidden="true" title="YouTube"></i></a>
                        <a href="https://owasp.slack.com/messages/proj-dependency-track"><i class="fa fa-slack social-icon" aria-hidden="true" title="Slack"></i></a>
                        <a href="https://gitter.im/dependency-track/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge"><i class="fa fa-comments social-icon" aria-hidden="true" title="Gitter"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">&copy; Copyright 2013-<?php echo date("Y"); ?> Steve Springett</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Off-Canvas View Only -->
        <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>
        <div id="offcanvas-menu" class="visible-xs visible-sm">
            <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>
            <ul class="menu-wrapper">
                <li><a class="page-scroll" href="#home">Home</a></li>
                <li><a class="page-scroll" href="#overview">Overview</a></li>
                <li><a class="page-scroll" href="#screenshots">Screenshots</a></li>
                <li><a class="page-scroll" href="#features">Features</a></li>
                <li><a class="page-scroll" href="#download">Download</a></li>
                <li><a class="page-scroll" href="https://www.owasp.org/index.php/OWASP_Dependency_Track_Project"><img src="assets/images/logo-owasp-small.svg"></a></li>
            </ul>
        </div>
        <!-- Off-Canvas View Only -->

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
        <script src="assets/slick-slider/slick.min.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/script.js"></script>

    </body>
</html>