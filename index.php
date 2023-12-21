<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are an independent games developer, with a love of charming pixel art and a drive to create amazing games.">
    <link rel="icon" href="/img/favicon.ico">

    <title>Dangerous Duck Games</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom styles -->
    <link async href="/css/main.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include "./components/navbar.html"; ?>

    <!-- Our Latest Game -->
    <div class="container div-our-games text-center">
        <p style="font-size: xx-large; text-decoration: underline;">Our games<p>
        <div class="mt-5">
            <a href="./mortalghost/">
                <img class="rounded" src="./img/mortalghost_preview.png" width="50%" alt="Mortal Ghost">
            </a>
        </div>
    </div>

    <!-- About -->
    <div class="container div-about text-center">
        <p style="font-size: xx-large; text-decoration: underline;">About us<p>
        <p>Dangerous Duck Games was founded in 2020 during the global pandemic with the aim of making games that we would like to play.
            We do not put limits on what the next game will be, we just know that we will do something we are proud of and that we will do our best.
            <br><br>People having a good time playing our games is what encourages us to continue.
            <br><br>Thank you for your visit! </p>
    </div>

    <!-- Footer -->
    <?php include "./components/footer.html"; ?>

    <!-- Bootstrap & Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->
    <script src="/js/main.js"></script>
</body>
</html>