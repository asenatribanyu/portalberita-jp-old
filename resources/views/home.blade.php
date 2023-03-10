<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="css/home-design.css" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
            rel="stylesheet"
        />

        <!-- Box Icons -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <title>Heiwa</title>
    </head>
    <body>
        <nav>
            <div class="navbar">
                <i class="bx bx-menu side-open"></i>
                <span class="logo navLogo">
                    <a href="/">Logo.</a>
                </span>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo">
                            <a href="/">Logo.</a>
                        </span>
                        <i class="bx bx-x side-close"></i>
                    </div>

                    <ul class="navlink">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/categories">Categories</a></li>
                        <li><a href="/">Language</a></li>
                        <li><a href="/login">Sign in</a></li>
                    </ul>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class="bx bx-x cancel"></i>
                        <i class="bx bx-search search"></i>
                    </div>

                    <div class="searchField">
                        <input type="text" placeholder="Search..." />
                        <i class="bx bx-search search"></i>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main-container">
            <div class="carousel">
                <div class="carousel-slides">
                    <img src="img/img-slider-1.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <h2>Lorem ipsum dolor sit amet. 1</h2>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
                <div class="carousel-slides">
                    <img src="img/img-slider-2.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <h2>Lorem ipsum dolor sit amet. 2</h2>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
                <div class="carousel-slides">
                    <img src="img/img-slider-3.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <h2>Lorem ipsum dolor sit amet. 3</h2>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
            </div>

            <div class="card-wrapper">
                <div class="card">
                    <div class="card-image">
                        <img src="img/2.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod.</a
                            >
                        </div>
                        <div class="card-footer">
                            <a href="/">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="img/1.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod.</a
                            >
                        </div>
                        <div class="card-footer">
                            <a href="">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="img/4.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod.</a
                            >
                        </div>
                        <div class="card-footer">
                            <a href="">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="break-point">
                <hr />
            </div>
            <div class="latest-articles">
                <h1>LATEST ARTICLES</h1>
            </div>
        </div>

        <script src="js/home-script.js"></script>
    </body>
</html>
