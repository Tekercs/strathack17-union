<!DOCTYPE HTML>
<!-- -->
<html>
<head>
    <title>UNION index</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="homepage">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
        <header id="header" class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="index.html"> <img src="/images/logo.png"> </a></h1>
                <span>University of Strathclyde Students' Association</span>
            </div>
        </header>

        <!-- Navigation -->
        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="#">Browse category</a>
                    <ul>
                        <li><a href="#">For Sale</a></li>
                        <li>
                            <a href="#">Jobs</a>
                            <ul>
                                <li><a href="#">Hospitality</a></li>
                                <li><a href="#">Catering</a></li>
                                <li><a href="#">etc</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Accommodation</a>
                            <ul>
                                <li><a href="#">Looking for rent</a></li>
                                <li><a href="#">Looking for a roommate</a></li>
                            </ul>
                        </li>
                    </ul>

                <li><a href="post_ad.html">Post an ad</a></li>
                <li>
                    <a href="#">Profile</a>
                    <ul>
                        <li><a href="#">Manage settings</a></li>
                        <li><a href="#">Log out</a></li>
                    </ul>
                </li>
                <li><a href="log_in.html">Log in</a></li>


                <li id="search">
                    <form action="" method="get">
                        <input type="text" name="search_text" id="search_text" placeholder="Search"/>
                    </form>
                </li>
                </li>
            </ul>
        </nav>

        <!-- Features -->
        <div id="features-wrapper">
                <div class="row">
                    <div class="4u 12u(medium)">

                        <!-- Box -->
                        <section class="box feature">
                            <a href="ad_view" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            <div class="inner">
                                <header>
                                    <h2>Title</h2>
                                    <p>Category</p>
                                </header>
                                <p>And here goes the description of the ad.</p>
                            </div>
                        </section>

                    </div>
                    <div class="4u 12u(medium)">

                        <!-- Box -->
                        <section class="box feature">
                            <a href="ad_view" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                            <div class="inner">
                                <header>
                                    <header>
                                        <h2>Title</h2>
                                        <p>Category</p>
                                    </header>
                                    <p>And here goes the description of the ad.</p>
                            </div>
                        </section>

                    </div>
                    <div class="4u 12u(medium)">

                        <!-- Box -->
                        <section class="box feature">
                            <a href="ad_view" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            <div class="inner">
                                <header>
                                    <header>
                                        <h2>Title</h2>
                                        <p>Category</p>
                                    </header>
                                    <p>And here goes the description of the ad.</p>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>


        <!-- Main -->
        <div id="main-wrapper">
            <div class="container">
                <div class="row 200%">

                    <div class="8u 12u(medium) important(medium)">

                        <!-- Content -->
                        <div id="content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="3u 6u(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                            </ul>
                        </section>

                        <section class="widget contact last">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                            </ul>
                        </section>

                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <div id="copyright">
                            <ul class="menu">
                                <li> Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>