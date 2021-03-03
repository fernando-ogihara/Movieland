<?php include "header.php" ?>

<body>
  <nav class="nav-extended light-blue lighten-4">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="gallery.php">Gallery</a></li>
        <li class="active"><a href="addmovies.php">Add Movies</a></li>
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
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Add Movie</span>
          <!--Input Title-->
          <div class="row">
            <div class="input-field col s12">
              <input id="title" type="text" class="validate" require>
              <label for="title">Movie Title</label>
            </div>
          </div>

          <!--Input Review-->
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="review" class="materialize-textarea"></textarea>
                  <label for="review">Review</label>
                </div>
              </div>
            </form>
          </div>

          <!--Input rating-->
          <div class="row">
            <div class="input-field col s4">
              <input id="rating" type="number" step=".1" min=0 max=10 class="validate" require>
              <label for="rating">Rating</label>
            </div>
          </div>

          <!-- Input Poster -->
          <div class="file-field input-field">
            <div class="btn light-blue">
              <span>Poster</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </div>
        <div class="card-action">
          <a class="waves-effect waves-light btn grey" href="galeria.php">Cancel</a>
          <a class="waves-effect waves-light btn blue" href="galeria.php">Add New Movie</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>