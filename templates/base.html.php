<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
    <link rel="website icon" type="png" href="img/controller">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<!---->

<!--  navBar  -->
<header class="container">
    <nav class="nav d-flex justify-content-between align-items-center">
        <span class="logo" href="index.php">LOGO</span>
        <div class="d-flex justify-content-between align-items-center">
            <ul class="d-flex">
                <li><a class="lien" href="index.php">Tendances</a></li>
                <li><a class="lien" href="#"><span class="material-symbols-outlined me-1">computer</span>PC</a></li>
                <li><a class="lien" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-playstation me-1" viewBox="0 0 16 16"><path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z"/></svg>Playstation</a></li>
                <li><a class="lien" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-xbox me-1" viewBox="0 0 16 16"><path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/></svg>Xbox</a></li>
            </ul>
        </div>
        <div>
            <ul class="d-flex">
                <li><a class="lien dataClient" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg></a></li>
                <li><a class="lien dataClient" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg></a></li>
            </ul>
        </div>
    </nav>
</header>


<div class="container-fluid">
    <?= $pageContent ?>
</div>


<!--  Footer  -->
<section class="footer">
    <div class="container d-flex flex-column">
        <div class="row mb-5">
            <span class="logo" href="index.php">LOGO</span>
        </div>
        <div class="row d-flex justify-content-between mb-4">
            <div class="col-4">
                <h2 class="text-secondary">Produits</h2>
                <ul>
                    <li class="d-flex align-items-center"><a href="#" class="lienFooter">Tendances</a></li>
                    <li class="d-flex align-items-center"><a href="#" class="lienFooter">PC</a></li>
                    <li class="d-flex align-items-center"><a href="#" class="lienFooter">Xbox</a></li>
                    <li class="d-flex align-items-center"><a href="#" class="lienFooter">Playstation</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h2 class="text-secondary">Conditions</h2>
                <ul>
                    <li><a href="#" class="lienFooter">Condition de vente</a></li>
                    <li><a href="#" class="lienFooter">Politique de confidentalité</a></li>
                    <li><a href="#" class="lienFooter">Nous contacter</a></li>
                    <li><a href="#" class="lienFooter">FAQ</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h2 class="text-secondary">Contact</h2>
                <ul>
                    <li class="d-flex align-items-center"><a href="https://www.instagram.com/" class="lienFooter"><i class="bi bi-instagram me-1"></i>Instagram</a></li>
                    <li class="d-flex align-items-center"><a href="https://www.youtube.com/" class="lienFooter"><i class="bi bi-youtube me-1"></i>Youtube</a></li>
                    <li class="d-flex align-items-center"><a href="https://twitter.com/" class="lienFooter"><i class="bi bi-twitter me-1"></i>Twitter</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-between align-items-center">
            <p class="text-light fw-bolder">Copyright © 2023 - All rights reserved</p>
            <p class="text-light fw-bolder">Français | EUR</p>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="JS/main.js"></script>
</body>
</html>