<?php 

$logdone = false;
// session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $logdone = true;
}
echo '<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg sticky-top" id="navbar" >
    <div class="container ">
      <a class="navbar-brand" href="web1.html" id="logo">
        <img src="../assest/images/Logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" style="    margin-top: -9px; ">
        <span>T</span>ravelling <span>T</span>our
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse end-0 position-fixed" id="mynavbar" style="    margin-right: 31px; ">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="../main/myproject.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../main/myproject.php#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../main/myproject.php#services">Places</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Packages/Pack.php">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Gallery/Gallery.php">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../main/myproject.php#about">Contact Us</a>
          </li>

        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="text" placeholder="Search"> -->';

          if (!$logdone) {
            # code...
          echo '<button class="btn btn-primary" type="button" onclick="window.location.href = \'../registration/registration.php\';"
            target="_blank">Register</button>

          <button class="btn btn-primary ms-2" type="button" onclick="window.location.href = \'../Login/login.php\';" target="_blank">Login</button>';
          }

          if($logdone){
            echo'<button class="btn btn-primary ms-2" type="button" onclick="window.location.href = \'../Login/logout.php\';" target="_blank">Logout</button>';
          }
          
        echo'</form>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->';
?>
  