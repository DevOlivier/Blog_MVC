<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/blog.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">clercq olivier.fr</a>
      </li>
    </ul>
  </div>
</nav>


  <header>
    <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
      <h1>L'espace où on prend un café</h1>
      <p>Par Clercq Olivier | Agitateur de curiosité</p>
      <p class="IntroBlog">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus laudantium repellat enim eum quia cupiditate doloribus quis incidunt nisi accusamus vero veniam mollitia ullam excepturi, dolore at soluta? Sit, dignissimos!</p>
      </div>
    </div>
  </div>
  </header>
  <div class="container">
    <div class="containerContent">
      <div class="row text-center">
        <div class="col-md-12">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php
          $space = ' - ';
            foreach($articles as $article) : ?>
             <h1 class="titleArticle"> <?= $article->getTitle()  ?> </h1>
             <p class="dataAjoutArticle"> <?= $article->getDateAjout() ?> <?= $article->getCategory() ?> </p>
             <p class="debutArticle"> <?= $article->getDebutArticle() ?> </p>
             <a class="linkArticle" href="#">Lire la suite</a>
             <hr>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
