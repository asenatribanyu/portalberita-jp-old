<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="css/categories-design.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
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

                <div class="menu-cat">
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
        <div class="wrapper">
            <h3>sort by :</h3>
            <div class="dropdown">
                <div class="select">
                    <span class="selected"> Categories </span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Categories 1</li>
                    <li>Categories 2</li>
                    <li>Categories 3</li>
                    <li>Categories 4</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected"> Type </span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Photo</li>
                    <li>Video</li>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected"> Date </span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>
        </div>

        <script src="js/categories-script.js"></script>
    </body>
</html>
