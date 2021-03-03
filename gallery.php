<?php include "header.php" ?>

<?php

$movie1 = [
  "title" => "Avengers - Endgame",
  "rate" => "8.6",
  "review" => "After the devastating events of Avengers: Infinity War,
  the universe is in ruins due to the efforts of the Mad Titan,
  Thanos.",
  "poster" => "https://www.themoviedb.org/t/p/w300/1rttz9azUFLYaTX8fnL2t9qQLFK.jpg"
];

?>

<body>
  <nav class="nav-extended light-blue lighten-4">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="gallery.php">Gallery</a></li>
        <li><a href="addmovies.php">Add Movies</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>Movieland</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent light-blue accent-4">
        <li class="tab"><a class="active" href="#test1">All</a></li>
        <li class="tab"><a href="#test2">Watched</a></li>
        <li class="tab"><a href="#test3">Favorites</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $movie1["poster"] ?>">
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i><?= $movie1["rate"] ?>
          </p>
          <span class="card-title"><?= $movie1["title"] ?></span>
          <p><?= $movie1["review"] ?> </p>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.themoviedb.org/t/p/w300/ggTTUXZg7trvAhsVj3eyd65bAnh.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>8,1
          </p>
          <span class="card-title">Ip Man</span>
          <p>A semi-biographical account of Yip Man, the first martial
            arts master to teach the Chinese martial art of Wing Chun.
          </p>
        </div>
      </div>
    </div>


  </div>

</body>

</html>