<?php 
    $showiderr=false;
    $showmsg=false;
    $showpasserr=false;
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
          include "../database/_dbconnect.php";
            $username  = $_POST["username"];
            $email  = $_POST["email"];


            // Sanitize and filter user input for email
            $sanitizedEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            // Validate the sanitized email
            if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
                // Assign the sanitized and validated email to the $email variable
                $email = $sanitizedEmail;
            } else {
                $showiderr = true;
            }




            $mypass  = $_POST["mypass"];
            $confirmMypass  = $_POST["confirmMypass"];
            $password= password_hash($mypass , PASSWORD_BCRYPT);

            $sql = "select * from usersid where username ='$username'";
            $result=mysqli_query($conn,$sql);
            $numrow=mysqli_num_rows($result);
            if ($numrow >0) {
                $showiderr = true;
            }else {
              
              if ($mypass == $confirmMypass) {
              // Properly format string values and use prepared statements
              // $sql = "INSERT INTO `usersid` (`username`, `email`, `password`, `salt`) VALUES (?, ?, ?, ?)";
              $sql = "INSERT INTO `usersid` (`username`, `email`, `password`) VALUES (?, ?, ?)";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("sss", $username, $email, $password);
              if ($stmt->execute()) {
                $showmsg = true;
              } else {
                $showiderr = true;
              }
              // $stmt->close();
              } else {
                       $showpasserr=true;
               }
              }
    }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="../assest/style2.css">
  <link rel="stylesheet" href="../assest/style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!-- FavIcon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assest/FavIcon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assest/FavIcon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assest/FavIcon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- FavIcon End -->


<body>

  <?php require '../navbar/_nav.php' ?>


<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  </svg>
  <?php
if ($showmsg) {
  # code...
echo'<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" style="height: 20px; width:20px " role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    You registered successfully!!!
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}else if ($showiderr) {
  # code...
echo'<div class="alert alert-warning d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" style="height: 20px; width:20px " role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
<div>
    Username already taken! choose another username...
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}else if ($showpasserr) {
echo'<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" style="height: 20px; width:20px " role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
    Password not matched! Please enter password again
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>




  <!-- <div class="container"> -->
  <!-- <section class="vh-100"> -->
  <div class="mask  vh-100 gradient-custom-3">
    <div class="container">
      <div class="row d-flex justify-content-center h-100 ">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6  ">
          <div class=" mt-1 shd" style=" border-radius: 15px;">
            <div class=" custom-form p-5 pb-0 custom-border">
              <h2 class="text-uppercase  text-center sbordertext mb-3">Create an account</h2>
              <form action="/project/Web/registration/registration.php" method="post">
                <div class="mb-3 ">
                  <label for="name" class="form-label">Username</label>
                  <input type="text" class="form-control bg-transparent  border border-success" name="username"  placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control bg-transparent  border border-success" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control bg-transparent  border border-success" name="mypass" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                  <label for="confirmPassword" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control bg-transparent  border border-success" name="confirmMypass"
                    placeholder="Confirm your password" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input   border border-success" id="check" required>
                  <label class="form-check-label" for="check">I agree to the terms and conditions</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success btn-block mb-2">Register</button>
                </div>

                <p class="text-center text-muted mt-4">Already have an account? <a href="../Login/login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    </section>
  </div>



  <?php require '../Footer/_footer.php'?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>































<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>