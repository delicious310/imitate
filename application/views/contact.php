<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div id="header">
    <div id="nav">
        <span class="nav-icon"></span>
        <div class="nav-menu-box">
            <div class="nav-menu-bg"></div>
            <ul class="nav-menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">PORTFLIO</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <span class="nav-close-icon"></span>
        </div>
    </div>
</div>
<div id="contact">
    <div class="contact-container clearfix">
        <div class="container-form">
            <form action="welcome/message" method="post">
                <p>your name:</p>
                <input name="username" type="text" >
                <p>email</p>
                <input name="email" type="text" >
                <p>message</p>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
                <input type="button" name="submit" id="submit" value="submit">
            </form>
            \
        </div>
        <div class="container-link">
            <h1>ADDRESS</h1>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                doming id quod mazim placerat facer possim assum. Typi non</p>
            <p>1-25-2568-897</p>
            <p>mail@portfolio.com</p>
        </div>
    </div>
</div>
<script src="js/require.js" data-main="js/index.js"></script>
<script src="js/jquery.js"></script>
<script src="js/contact.js"></script>
</body>
</html>