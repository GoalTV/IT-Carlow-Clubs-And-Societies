<!-- 
    Header Page.
    Project for Institute of Technology Carlow
    @Janusz Czeropski C00176885@itcarlow.ie
--> 
<!DOCTYPE html>

<html lang="en">


    <head>

        <title>Home Page - IT Carlow Clubs And Societies</title>
        
        <meta name="description" content="Home Page Of IT Carlow Clubs And Societies"/>
        
        <meta charset="utf-8"/>

        <meta name="keywords" content="Home Page, Janusz Czeropski, C00176885, Project, Y3"/>

        <meta name="author" content="Janusz Czeropski (C001768885)" />
        <meta name="copyright" content="For any query contact C00176885@itcarlow.ie" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Disabled Search Engines Bots This Site Not Meant To Be Public -->
        <meta name="robots" content="noindex,nofollow" />

        <!-- links to CSS and JS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="js/bootstrap.js"></script>

        <!-- Fontawesome Icons -->
        <script src="https://kit.fontawesome.com/637e7e9f05.js" crossorigin="anonymous"></script>
        </head>

        <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="img/branding/Logo.svg" alt="Instititue of Technology Carlow"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard">Dashboard</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
if ( $_SESSION["loggedin"] === true ) {
   echo 'User Settings';
} else {
    echo 'Register';
}
?>
    </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <?php
if ( $_SESSION["loggedin"] === true ) {
   echo '<a class="dropdown-item dropdown" href="dashboard"> Dashboard </a>';
   echo '<a class="dropdown-item dropdown" href="logout"> Log Out </a>';

} else {
    echo '<a class="dropdown-item dropdown" href="login"> Log In </a>';
    echo '<a class="dropdown-item dropdown" href="register"> Register </a>';
}
?>
        </div>
      </li>
    </ul>
    </div>
  </div>
</nav>

  </header>