<html>
<!---------------------
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
--------------------->
        <head>
                <title><?= $title ?></title>
                <link href="../../../assets/css/main.css" rel="stylesheet">
                <meta content="width=device-width, initial-scale=1" name="viewport"/>
                <link rel="icon" type="image/x-icon" href="../../../assets/favicon/favicon.ico">
        </head>
        <body>
                <nav class="nav-section">
                        <div id="mobnav">
                                <input class="checkbox" type="checkbox"/>
                                        <div class="hamburger-lines">
                                                <span class="line line1"></span>
                                                <span class="line line2"></span>
                                                <span class="line line3"></span>
                                        </div>  
                                <div class="menu-items">
                                        <a href="/index.php">Home</a>
                                        <a href="/about">About</a>
                                        <a href="/news">News</a>
                                </div>
                        </div>
                        <div id="normnav">
                                <a href="/index.php">Home</a>
                                <a href="/about">About</a>
                                <a href="/news">News</a>
                        </div>
                </nav>
                <div id="content-wrap">
                        <h1 class="page-header"><?= $title ?></h1>