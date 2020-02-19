<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bict-Blog</title>
</head>
<body>
<nav class="nav-bar sticky-top">
        <div class="nav-bar-header">
           <img src="images/logo.png" alt=""><a class = "navbar-brand" href="#"></a>
        </div>
        <div class="nav-options">
             <ul class="nav navbar-nav" >
                <li class="item"><a href="index.php" class="nav-link"> Inicio </a></li>
                <li class="item"><a href="#noticias" class="nav-link"> Noticias </a></li>
                <li class="item"><a href="#" class="nav-link"> Tecnologia </a> </li>
                <li class="item"><a href="#" class="nav-link"> Foro </a></li>
                <li class="item"><span><a href="search.php"><img src="images/icons/search-24px.svg" alt=""></a></span></li>
            </ul>
        </div>
        <ul>
            <h1>Hola <?= $_SESSION['user'] ?></h1>
        </ul>
        </div>
    </div>
</nav>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>