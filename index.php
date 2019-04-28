<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>5 A Side Football League</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">5 A Side</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-          label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controller/index.php">Play Manager</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controller/register.php">Register</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controller/login.php">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controller/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-4">Welcome to the Irish 5 A side league</h1>
      <p>Welcome to the site below are a few useful links for navigating around the site</p>
    <h3>Useful Site Links</h3>
    <ul>
        <li>
            <a href="controller">Player Manager</a>
        </li>
        <li>
            <a href="controller/index.php?action=league_table">League Table</a>
        </li>
        <li>
            <a href="controller/?action=list_teams">Team List</a>
        </li>
    </ul>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/DundalkCrest.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Dundalk</h4>
            <p class="card-text">Dundalk FC 5 A side team</p>
          </div>
          <div class="card-footer">
            <a href="controller/index.php?team_id=7" class="btn btn-success">Check out the team!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/Rovers.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Shamrock Rovers</h4>
            <p class="card-text">Shamrock Rovers 5 A side team</p>
          </div>
          <div class="card-footer">
            <a href="controller/index.php?team_id=13" class="btn btn-success">Check out the team!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/Cork-City-Football-Crest-2011.png"  alt="">
          <div class="card-body">
            <h4 class="card-title">Cork City</h4>
            <p class="card-text">Cork City 5 A side team</p>
          </div>
          <div class="card-footer">
            <a href="controller/index.php?team_id=14" class="btn btn-success">Check out the team!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/BohsCrest.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Bohemians</h4>
            <p class="card-text">Bohemians 5 A side team</p>
          </div>
          <div class="card-footer">
            <a href="controller/index.php?team_id=15" class="btn btn-success">Check out the team!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Aidan Vaughan & Tiarnan McShane-Mulrey</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
