<?php include ("security-headers.php") ?>
<?php $version = "4.2.1"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dependency-Track is an intelligent Component Analysis platform that allows organizations to identify and reduce risk in the software supply chain. Dependency-Track is open-source and distributed under the Apache 2.0 license."/>
        <meta name="keywords" content="sdlc, devops, devsecops, automation, software, bill of materials, owasp, appsec, security, sbom, bom, vulnerabilities, visibility, component analysis, nvd, nist, software security, software composition analysis, sca, supply chain risk management, scrm, c-scrm, cybersecurity, ossindex, vulndb"/>
        <meta name="dcterms.rightsHolder" content="Steve Springett">
        <meta name="dcterms.dateCopyrighted" content="<?php echo date("Y"); ?>">

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@DependencyTrack">
        <meta name="twitter:title" content="Dependency-Track | Software Bill of Materials (SBOM) Analysis">
        <meta name="twitter:image" content="https://dependencytrack.org/assets/images/twitter-card.png">
        <meta name="twitter:description" content="Dependency-Track is an intelligent Component Analysis platform that allows organizations to identify and reduce risk in the software supply chain. Dependency-Track is open-source and distributed under the Apache 2.0 license.">

        <meta property="og:title" content="Dependency-Track | Software Bill of Materials (SBOM) Analysis">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://dependencytrack.org/assets/images/twitter-card.png" />
        <meta property="og:description" content="Dependency-Track is an intelligent Component Analysis platform that allows organizations to identify and reduce risk in the software supply chain. Dependency-Track is open-source and distributed under the Apache 2.0 license.">

        <meta name="robots" content="index,follow"/>
        <title>Dependency-Track | Software Bill of Materials (SBOM) Analysis | OWASP</title>
        <link rel="author" href="https://springett.us/"/>
        <link rel="publisher" href="https://springett.us/"/>
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
        <!--
        <a class="github-fork-ribbon" href="https://github.com/DependencyTrack/dependency-track/fork" data-ribbon="Fork me on GitHub">Fork me on GitHub</a>
        -->
        <header id="home" class="header-section">
            <nav class="navbar navbar-inverse hidden-sm hidden-xs">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand page-scroll" href="#home"><img src="assets/images/dt-logo-white-text.svg" alt="Dependency-Track Logo" width="200px"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#home">Home</a></li>
                            <li><a class="page-scroll" href="#features">Platform</a></li>
                            <li><a class="page-scroll" href="#download">Download</a></li>
                            <li><a class="page-scroll" href="https://docs.dependencytrack.org/">Documentation</a></li>
                            <li><a class="page-scroll" href="https://owasp.org/www-project-dependency-track/"><img src="assets/images/logo-owasp-small.svg"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="navbar-header inline-block visible-sm visible-xs">
                <a class="navbar-brand" href="#home"><img src="assets/images/dt-logo-black-text.svg" alt="image"></a>
            </div>
        </header>

        <section class="top-section" id="subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-9">
                        <div class="wrapper-content">
                            <span class="small-text"><span class="color-text">Reduce </span> Supply Chain Risk</span>
                            <h3>Continuous Component Analysis Platform</h3>
                            <a class="page-scroll" href="#download">
                                <button class="btn btn-default">Download v<?php echo $version; ?> <i class="fas fa-download" aria-hidden="true"></i></button>
                            </a>
                            <span id="lightBox" class="hidden-xs hidden-sm hidden-md v-text">
                                <a href="http://youtu.be/cQuk6jKTrTs" data-poptrox="youtube,800x450,autoplay=1">
                                    <button class="btn btn-default">Watch Trailer <i class="fa fa-play" aria-hidden="true"></i></button>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-0 col-sm-8 col-sm-offset-0 hidden-xs">
                        <div class="caption wow fadeInRight monitor-container">
                            <img src="assets/images/screenshots/dashboard-small-monitor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="admin-section video-section hidden-sm hidden-xs">
            <div class="video-container">
                <div class="video-overlay">
                    <div id="process-header">Software Bill of Materials Integrated With DevSecOps</div>
                    <div class="process" id="process-cicd">
                        <p>SBOM Production<br/><i class="fas fa-sort-down"></i></p>
                        <p>CycloneDX Software Bill of Materials created during CI/CD or acquired from suppliers</p>
                    </div>
                    <div class="process" id="process-ingest">
                        <p><i class="fas fa-sort-up"></i><br>SBOM Ingestion</p>
                        <p>SBOMs published to Dependency-Track via REST, Jenkins plugin, or uploaded through web interface</p>
                    </div>
                    <div class="process" id="process-analyze">
                        <p>SBOM Analysis<br/><i class="fas fa-sort-down"></i></p>
                        <p>Analyzes components for security, operational, and license risk</p>
                    </div>
                    <div class="process" id="process-intelligence">
                        <p>Intelligence Streams<br/><i class="fas fa-sort-down"></i></p>
                        <p>Produces real-time analysis and security events delivering actionable findings to external systems</p>
                    </div>
                    <div class="process" id="process-portfolio">
                        <p><i class="fas fa-sort-up"></i><br>Continuous Monitoring</p>
                        <p>Continuously analyzes portfolio for risk and policy compliance</p>
                    </div>
                    <div class="process" id="process-aggregation">
                        <p><i class="fas fa-sort-up"></i><br>Intelligent Response</p>
                        <p>Events delivered via webhooks or chat-ops and findings published to risk management and vulnerability aggregation platforms</p>
                    </div>
                </div>
                <video autoplay="autoplay" loop="loop" muted="muted" style="max-width:90%;" poster="/assets/video/Process_Flow_2K_cropped.png" id="processFlowVideo">
                    <source src="/assets/video/Process_Flow_2K_cropped.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <section class="cta-section">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="cta-wrapper">
                            <img src="assets/images/icons/continuous-integration.svg" height="70" alt="">
                            <h3 class="feature-header">Continuous Integration</h3>
                            <p>Consume and analyze SBOMs at high-velocity. Ideal for use with modern build pipelines.</p>
                        </div> <!-- cta-wrapper -->
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="cta-wrapper">
                            <img src="assets/images/icons/continuous-visibility.svg" height="70" alt="">
                            <h3>Continuous Insight</h3>
                            <p>Identify risk across all assets and applications. Quickly answer what is affected and where.</p>
                        </div> <!-- cta-wrapper -->
                    </div>

                    <div class="col-md-4 col-md-offset-0  col-sm-6 col-sm-offset-3">
                        <div class="cta-wrapper">
                            <img src="assets/images/icons/continuous-transparency.svg" height="70" alt="">
                            <h3>Continuous Transparency</h3>
                            <p>Full-stack component inventory. Optionally republish SBOMs to others in the supply chain.</p>
                        </div> <!-- cta-wrapper -->
                    </div>
                </div>
            </div>
        </section>

        <section id="screenshots" class="working-section-two screenshot-lightbox">
            <div class="container">
                <div class="working-container">
                    <div class="working-wrapper">
                        <div class="row">
                            <div class="col-xs-12 visible-sm visible-xs">
                                <div class="caption">
                                    <img src="assets/images/screenshots/component-inventory.png" width="500" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="wrapper-content">
                                    <h3>Accurate and complete full-stack inventory</h3>
                                    <p>Track usage of libraries and frameworks, applications, containers, operating systems, firmware, hardware, and services across all projects in the Dependency-Track portfolio. Get full-stack traceability for the cloud, for the enterprise, for smart devices, and for IoT.</p>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="caption wow fadeInRight" data-wow-duration="1s">
                                    <a href="assets/images/screenshots/component-inventory.png"><img src="assets/images/screenshots/component-inventory.png" width="500" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- working-wrapper -->


                    <div class="working-wrapper">
                        <div class="row">
                            <div class="col-xs-12 visible-sm visible-xs">
                                <div class="caption">
                                    <img src="assets/images/screenshots/findings.png" width="500" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="wrapper-content">
                                    <h3>Identify and remediate vulnerable components</h3>
                                    <p>Bring vulnerable components to light with support for multiple sources of vulnerability intelligence including the National Vulnerability Database (NVD), Sonatype OSS Index, NPM Advisories, and VulnDB from Risk Based Security.</p>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="caption wow fadeInRight" data-wow-duration="1s">
                                    <a href="assets/images/screenshots/findings.png"><img src="assets/images/screenshots/findings.png" width="500" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- working-wrapper -->


                    <div class="working-wrapper">
                        <div class="row">
                            <div class="col-xs-12 visible-sm visible-xs">
                                <div class="caption">
                                    <img src="assets/images/screenshots/dashboard-small.png" width="500" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="wrapper-content">
                                    <h3>Measure and enforce policy compliance</h3>
                                    <p>Security, operational, and license policies ensure that associated risk is quickly identified across development teams, suppliers, and partners in the supply chain</p>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="caption wow fadeInRight" data-wow-duration="1s">
                                    <a href="assets/images/screenshots/policy-violations.png"><img src="assets/images/screenshots/policy-violations.png" width="500" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- working-wrapper -->
                </div> <!-- working-container -->
            </div>
        </section>

        <div id="features" class="section-header-correction"></div>
        <section class="cta-section-four section-padding">
            <div class="container">
                <div class="title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Platform Features</h2>
                        </div>
                        <div class="col-sm-6">
                            <p>Dependency-Track is an intelligent Component Analysis platform that allows organizations to identify and reduce risk in the software supply chain.</p>
                        </div>
                    </div>
                </div>
                <div class="cta-container">
                    <div class="row feature-row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-shield-alt" aria-hidden="true"></i> <span class="feature">Vulnerability Detection</span></h3>
                                <p>Identify known vulnerabilities in third-party and opensource components from multiple sources of vulnerability intelligence</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-tasks" aria-hidden="true"></i> <span class="feature">Policy Evaluation</span></h3>
                                <p>Measure and enforce security, operational, and license policy compliance for individual projects or the entire portfolio</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-crosshairs" aria-hidden="true"></i> <span class="feature">Impact Analysis</span></h3>
                                <p>Rapidly respond to identified vulnerabilities for projects which are affected from vulnerable components</p>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-chart-bar" aria-hidden="true"></i> <span class="feature">Time Series Metrics</span></h3>
                                <p>Provides trending details of the inherited risk and policy violations for all projects and components in the portfolio</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="far fa-comment-alt" aria-hidden="true"></i> <span class="feature">Auditing Workflow</span></h3>
                                <p>Quickly triage findings and policy violations, capture commentary and analysis decisions in an audit trail</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-bullseye" aria-hidden="true"></i> <span class="feature">Outdated Version Detection</span></h3>
                                <p>Identifies components that are not the most recent available which indirectly impact project health and risk</p>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-layer-group" aria-hidden="true"></i> <span class="feature">Full-Stack Inventory</span></h3>
                                <p>Tracks usage of libraries, frameworks, applications, containers, operating systems, firmware, hardware, and services.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-archive" aria-hidden="true"></i> <span class="feature">Bill of Materials (BOM)</span></h3>
                                <p>Consumes, analyzes, and produces industry standard Software Bill of Materials formats including CycloneDX and SPDX</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-fingerprint" aria-hidden="true"></i> <span class="feature">Vulnerability Aggregation</span></h3>
                                <p>Native integration with multiple application risk platforms providing organizations a consolidated view of prioritized findings</p>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-row">
                        <div class="col-sm-4">
                            <div class="cta-wrapper last-wrapper">
                                <h3><i class="fas fa-server" aria-hidden="true"></i> <span class="feature">Enterprise Ready</span></h3>
                                <p>Supports Single Sign On (SSO) via OpenID Connect (OIDC) and supports Active Directory and LDAP authentication</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-globe" aria-hidden="true"></i> <span class="feature">API and Integration</span></h3>
                                <p>Well documented API-first design integrates easily with other systems providing endless possibilities</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fas fa-bell" aria-hidden="true"></i> <span class="feature">Notifications</span></h3>
                                <p>Send notifications to Slack, Microsoft Teams, outbound webhooks, and email, enabling new levels of collaboration and automation</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="cta-wrapper">
                                <h3><i class="fab fa-osi" aria-hidden="true"></i> <span class="feature">Open Source</span></h3>
                                <p>Community-driven project distributed under the Apache 2.0 license <i class="icon-apache"></i>Large and active community of contributors and adopters.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
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
                    <div class="item"><a href="https://ossindex.sonatype.org/"><img src="assets/images/integrations/logo-sonatype-ossindex.svg" alt="image"></a></div>
                    <div class="item"><a href="https://slack.com/"><img src="assets/images/integrations/logo-slack.svg" alt="image"></a></div>
                    <div class="item"><a href="https://nvd.nist.gov/"><img src="assets/images/integrations/logo-nvd.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.npmjs.com/"><img src="assets/images/integrations/logo-npm.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.kennasecurity.com/"><img src="assets/images/integrations/logo-kenna.svg" alt="image"></a></div>
                    <div class="item"><a href="https://software.microfocus.com/en-us/solutions/application-security"><img src="assets/images/integrations/logo-fortify.svg" alt="image"></a></div>
                    <!-- <div class="item"><a href="https://www.atlassian.com/software/jira"><img src="assets/images/integrations/logo-jira.svg" alt="image"></a></div> -->
                    <div class="item"><a href="https://microsoft.com/teams"><img src="assets/images/integrations/logo-teams.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.defectdojo.org/"><img src="assets/images/integrations/logo-defect-dojo.svg" alt="image"></a></div>
                    <div class="item"><a href="https://www.securitycompass.com/"><img src="assets/images/integrations/logo-security-compass.svg" alt="image"></a></div>
                </div>
            </div>
        </section>


        <div id="download" class="section-header-correction"></div>
        <section class="download-section">
            <div class="container">
                <div class="col-md-12">
                    <div class="wrapper-content">
                        <h3>Installation</h3>


                        <div class="code-example-tab"><input id="inventory-example-tab1" class="inputtab1" type="radio" name="inventory-example-pct" checked="">
                            <input id="inventory-example-tab2" class="inputtab2" type="radio" name="inventory-example-pct">
                            <nav>
                                <ul class="navtab">
                                    <li class="tab1"><label for="inventory-example-tab1">Docker Compose</label></li>
                                    <li class="tab2"><label for="inventory-example-tab2">Docker Swarm</label></li>
                                </ul>
                            </nav>
                            <section>
                                <div class="tab1">
                                    <div class="example example-xml"></div>
<pre>
<span>curl</span> <span style="color:#e6db74">-LO</span> <span style="color:#a6e22e">https://dependencytrack.org/docker-compose.yml</span>
<span>docker-compose</span> <span style="color:#a6e22e">up</span> <span style="color:#e6db74">-d</span>
</pre>
                                </div>
                                <div class="tab2">
                                    <div class="example example-json"></div>
<pre>
<span>curl</span> <span style="color:#e6db74">-LO</span> <span style="color:#a6e22e">https://dependencytrack.org/docker-compose.yml</span>
<span>docker</span> <span style="color:#a6e22e">swarm</span> <span style="color:#78D2E7">init</span>
<span>docker</span> <span style="color:#a6e22e">stack</span> <span style="color:#78D2E7">deploy</span> <span style="color:#e6db74">-c</span> <span style="color:#78D2E7">docker-compose.yml dtrack</span>
</pre>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social">
                <div class="title text-center">
                    <a href="https://github.com/DependencyTrack"><i class="fab fa-github social-icon" aria-hidden="true" title="GitHub"></i></a>
                    <a href="https://twitter.com/dependencytrack"><i class="fab fa-twitter social-icon" aria-hidden="true" title="Twitter"></i></a>
                    <a href="https://www.youtube.com/c/OWASPDependencyTrack"><i class="fab fa-youtube social-icon" aria-hidden="true" title="YouTube"></i></a>
                    <a href="https://groups.io/g/dependency-track"><i class="icon icon--groupsio social-icon" style="font-size:24px" aria-hidden="true" title="Groups.io"></i></a>
                    <a href="https://owasp.slack.com/messages/proj-dependency-track"><i class="fab fa-slack-hash social-icon" aria-hidden="true" title="Slack"></i></a>
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
                <li><a class="page-scroll" href="#features">Platform</a></li>
                <li><a class="page-scroll" href="#download">Download</a></li>
                <li><a class="page-scroll" href="https://docs.dependencytrack.org/">Documentation</a></li>
                <li><a class="page-scroll" href="https://owasp.org/www-project-dependency-track/"><img src="assets/images/logo-owasp-small.svg"></a></li>
            </ul>
        </div>
        <!-- Off-Canvas View Only -->

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div>

        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
        <script src="assets/slick-slider/slick.min.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/script.js"></script>

    </body>
</html>
