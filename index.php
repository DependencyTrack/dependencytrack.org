<?php include ("security-headers.php") ?>
<?php $version = "3.4.0"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dependency-Track is an intelligent Software Composition Analysis (SCA) platform that allows organizations to identify and reduce risk from the use of third-party and open source components. Dependency-Track is open-source and distributed under the Apache 2.0 license."/>
        <meta name="keywords" content="sdlc, devops, devsecops, automation, software, bill of materials, owasp, appsec, security, bom, vulnerabilities, visibility, component analysis, nvd, nist, software security, dependency check, software composition analysis, sca, supply chain risk management, scrm, c-scrm, cybersecurity, node security platform, nsp, vulndb"/>
        <meta name="dcterms.rightsHolder" content="Steve Springett">
        <meta name="dcterms.dateCopyrighted" content="<?php echo date("Y"); ?>">
        <meta name="robots" content="index,follow"/>
        <title>Dependency-Track | Software Composition Analysis | OWASP</title>
        <link rel="author" href="https://www.google.com/+SteveSpringett"/>
        <link rel="publisher" href="https://www.google.com/+SteveSpringett"/>
        <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-mfizz.css">
        <link rel="stylesheet" type="text/css" href="assets/owl-carrosel/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="assets/slick-slider/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/slick-slider/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/offcanvas-menu.css">
        <link rel="stylesheet" type="text/css" href="assets/css/gh-fork-ribbon.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body class="singlePage" id="page-top" data-spy="scroll" data-target=".navbar">

        <a class="github-fork-ribbon" href="https://github.com/DependencyTrack/dependency-track/fork" data-ribbon="Fork me on GitHub">Fork me on GitHub</a>

        <header id="home" class="header-section">
            <nav class="navbar navbar-inverse hidden-sm hidden-xs">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand page-scroll" href="#home"><img src="assets/images/logo-greyscale.svg" alt="Dependency-Track Logo"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#home">Home</a></li>
                            <li><a class="page-scroll" href="#overview">Overview</a></li>
                            <li><a class="page-scroll" href="#features">Features</a></li>
                            <li><a class="page-scroll" href="#download">Download</a></li>
                            <li><a class="page-scroll" href="https://docs.dependencytrack.org/">Documentation</a></li>
                            <li><a class="page-scroll" href="https://www.owasp.org/index.php/OWASP_Dependency_Track_Project"><img src="assets/images/logo-owasp-small.svg"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="navbar-header inline-block visible-sm visible-xs">
                <a class="navbar-brand" href="#home"><img src="assets/images/logo-m.svg" alt="image"></a>
            </div>
        </header>

        <section class="top-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-9">
                        <div class="wrapper-content">
                            <span class="small-text"><span class="color-text">Reduce </span> Open Source Risk</span>
                            <h3>Continuous Component Analysis Platform</h3>
                            <a class="page-scroll" href="#download">
                                <button class="btn btn-default">Download v<?php echo $version; ?> <i class="fas fa-download" aria-hidden="true"></i></button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-0 col-sm-8 col-sm-offset-0 hidden-xs">
                        <div class="caption wow fadeInRight">
                            <img src="assets/images/screenshots/dashboard-small.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sponsor-section hidden-sm hidden-xs">
            <div class="container">
                <h4 class="text-center">Connectors & Integrations</h4>
                <div class="sponsor-carousel owl-carousel owl-theme">
                    <div class="item"><a href="https://www.owasp.org/"><img src="assets/images/integrations/logo-owasp.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.threadfix.it/"><img src="assets/images/integrations/logo-threadfix.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.riskbasedsecurity.com/"><img src="assets/images/integrations/logo-rbs.svg" alt="image"></a></div>
                    <div class="item"><a href="https://jenkins.io/"><img src="assets/images/integrations/logo-jenkins.svg" alt="image"></a></div>
                    <!-- <div class="item"><a href="https://www.jetbrains.com/teamcity/"><img src="assets/images/integrations/logo-teamcity.svg" alt="image"></a></div> -->
                    <div class="item"><a href="https://ossindex.net/"><img src="assets/images/integrations/logo-sonatype-ossindex.svg" alt="image"></a></div>
                    <div class="item"><a href="https://slack.com/"><img src="assets/images/integrations/logo-slack.svg" alt="image"></a></div>
                    <div class="item"><a href="https://nvd.nist.gov/"><img src="assets/images/integrations/logo-nvd.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.npmjs.com/"><img src="assets/images/integrations/logo-npm.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.kennasecurity.com/"><img src="assets/images/integrations/logo-kenna.svg" alt="image"></a></div>
                    <div class="item"><a href="https://software.microfocus.com/en-us/solutions/application-security"><img src="assets/images/integrations/logo-fortify.svg" alt="image"></a></div>
                    <!-- <div class="item"><a href="https://www.atlassian.com/software/jira"><img src="assets/images/integrations/logo-jira.svg" alt="image"></a></div> -->
                    <div class="item"><a href="https://microsoft.com/teams"><img src="assets/images/integrations/logo-teams.svg" alt="image"></a></div>
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
                        <div class="screenshot-lightbox caption wow fadeInLeft" data-wow-duration="1s"><a href="assets/images/screenshots/dashboard.png"><img src="assets/images/screenshots/dashboard-small.png" alt=""></a></div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-5">
                        <div  class="right-bar">
                            <h3>Discover how third-party components introduce risk</h3>
                            <div id="lightBox" class="v-text">
                                <a href="http://youtu.be/zlruKS4VsWQ" data-poptrox="youtube,800x480"><i class="fa fa-play" aria-hidden="true"></i> Watch how it works</a>
                            </div>
                            <p>Continuous analysis of third-party and open source components provides greater visibility on inherited risk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="screenshots" class="screen-section section-padding">
            <div class="title text-center">
                <h2>Screenshots</h2>
            </div>
            <div class="screenshot-lightbox screen-carousel text-center">
                <div><a href="assets/images/screenshots/components.png"><img src="assets/images/screenshots/components-small.png" alt=""></a></div>
                <div><a href="assets/images/screenshots/projects.png"><img src="assets/images/screenshots/projects-small.png" alt=""></a></div>
                <div><a href="assets/images/screenshots/vulnerabilities.png"><img src="assets/images/screenshots/vulnerabilities-small.png" alt=""></a></div>
                <div><a href="assets/images/screenshots/vulnerability.png"><img src="assets/images/screenshots/vulnerability-small.png" alt=""></a></div>
                <div><a href="assets/images/screenshots/vulnerable-component.png"><img src="assets/images/screenshots/vulnerable-component-small.png" alt=""></a></div>
                <div><a href="assets/images/screenshots/license.png"><img src="assets/images/screenshots/license-small.png" alt=""></a></div>
            </div>
        </section>

        <section id="features" class="cta-section-four section-padding">
            <div class="container">
                <div class="title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Continuous Component Analysis</h2>
                        </div>
                        <div class="col-sm-6">
                            <p>Dependency-Track is an intelligent Software Composition Analysis (SCA) platform that allows organizations to identify and reduce risk from the use of third-party and open source components.</p>
                        </div>
                    </div>
                </div>
                <div class="cta-container">
                    <div class="row first-row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-chart-bar" aria-hidden="true"></i> <span class="feature">Dashboard</span></h3>
                                <p>Provides high-level metrics and trends on the inherited risk for all projects and components in the portfolio</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-cogs" aria-hidden="true"></i> <span class="feature">Continuous Delivery</span></h3>
                                <p>Excels in rapidly changing CI/CD environments by encouraging ingestion and analysis of continuously updated components</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-crosshairs" aria-hidden="true"></i> <span class="feature">Impact Analysis</span></h3>
                                <p>Rapidly respond to identified vulnerabilities for projects which are affected from vulnerable components</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="far fa-comment-alt" aria-hidden="true"></i> <span class="feature">Auditing Workflow</span></h3>
                                <p>Quickly review findings for accuracy and make analysis decisions and comments on a per-project basis, or globally</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-eye" aria-hidden="true"></i> <span class="feature">Out-of-Date Detection</span></h3>
                                <p>Identifies components that are not the most recent available which indirectly impact project health and risk</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-bell" aria-hidden="true"></i> <span class="feature">Notifications</span></h3>
                                <p>Supports notifications to Slack, Microsoft Teams, outbound webhooks, and email, enabling new levels of collaboration and automation</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-th" aria-hidden="true"></i> <span class="feature">Supply Chain Risk</span></h3>
                                <p>Expands traditional Software Composition Analysis (SCA) by recognizing hardware/IoT as components with potential vulnerabilities</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-globe" aria-hidden="true"></i> <span class="feature">API and Integration</span></h3>
                                <p>Well documented API-first design integrates easily with other systems providing endless possibilities</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper last-wrapper">
                                <h3><i class="fas fa-database" aria-hidden="true"></i> <span class="feature">Vulnerability Datasources</span></h3>
                                <p>Mirrors data from multiple sources of vulnerability intelligence providing more coverage on a wider range of components</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-fingerprint" aria-hidden="true"></i> <span class="feature">Vulnerability Aggregation</span></h3>
                                <p>Native integration with multiple application risk platforms providing organizations a consolidated view of prioritized findings</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-archive" aria-hidden="true"></i> <span class="feature">Bill of Materials (BOM)</span></h3>
                                <p>Promotes Software Transparency with support for the automatic ingestion of CycloneDX and SPDX BOM formats</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper last-wrapper">
                                <h3><i class="fas fa-server" aria-hidden="true"></i> <span class="feature">Enterprise Integrations</span></h3>
                                <p>Supports Active Directory/LDAP authentication and multiple commercial and open source database engines</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fab fa-osi" aria-hidden="true"></i> <span class="feature">Open Source</span></h3>
                                <p>Community-driven project which encourages continuous improvement and is distributed under the Apache 2.0 license <i class="icon-apache"></i></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="download" class="download-section">
            <div class="container">
                <div class="col-md-12">
                    <div class="wrapper-content">
                        <div>
                            <span class="caption vertically-centered"><i class="icon-docker download-icon" aria-hidden="true" title="Docker"></i></span>
                            <span class="docker-command vertically-centered">docker pull owasp/dependency-track</span>
                        </div>
                        <br/>
                        <div>
                            <span class="caption vertically-centered"><i class="icon-jetty download-icon"></i></span>
                            <span class="download-option vertically-centered"><a href="https://github.com/DependencyTrack/dependency-track/releases/download/<?php echo $version; ?>/dependency-track-embedded.war">Download v<?php echo $version; ?> <i class="fas fa-download"></i> self-contained application (Requires Java 8 u162+)</a></span>
                        </div>
                        <br/>
                        <div>
                            <span class="caption vertically-centered"><i class="icon-tomcat download-icon"></i></span>
                            <span class="download-option vertically-centered"><a href="https://github.com/DependencyTrack/dependency-track/releases/download/<?php echo $version; ?>/dependency-track.war">Download v<?php echo $version; ?> <i class="fas fa-download"></i> Java webapp (Requires Java 8 u162+ and Tomcat 8.5+ or Jetty 9.0+)</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social">
                <div class="title text-center">
                    <a href="https://github.com/DependencyTrack"><i class="fab fa-github social-icon" aria-hidden="true" title="GitHub"></i></a>
                    <a href="https://twitter.com/dependencytrack"><i class="fab fa-twitter social-icon" aria-hidden="true" title="Twitter"></i></a>
                    <a href="https://plus.google.com/102280289147113238499"><i class="fab fa-google-plus social-icon" aria-hidden="true" title="Google+"></i></a>
                    <a href="https://www.youtube.com/channel/UC8xdttysl3gNAQYvk1J9Efg"><i class="fab fa-youtube social-icon" aria-hidden="true" title="YouTube"></i></a>
                    <a href="https://owasp.slack.com/messages/proj-dependency-track"><i class="fab fa-slack-hash social-icon" aria-hidden="true" title="Slack"></i></a>
                    <a href="https://gitter.im/dependency-track/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge"><i class="fab fa-gitter social-icon" aria-hidden="true" title="Gitter"></i></a>
                    <a href="https://docs.dependencytrack.org"><i class="fas fa-book social-icon" aria-hidden="true" title="Documentation"></i></a>
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
                <li><a class="page-scroll" href="https://docs.dependencytrack.org/">Documentation</a></li>
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
