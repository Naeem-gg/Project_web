<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .gradient-custom-3 {
      /* fallback for old browsers */
      background: #84fab0;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }

    .gradient-custom-4 {
      /* fallback for old browsers */
      background: #84fab0;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }

    span[name='sta'] {
      color: white;
    }
  </style>

  <title>New Register</title>
</head>

<body>
  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100% gradient-custom-3">
      <div class="container h-100%">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Register Now</h2>



                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name:</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" required />
                    <small>First name + Last name</small>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg"> Username:</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="user" required />
                    <small>Choose a username</small>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg"> Phone Number:</label>
                    <input type="number" required id="form3Example1cg" class="form-control form-control-lg" name="phone" />
                    <small>Enter 10 digit number without country code</small>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" required />
                    <small>example@gmail.com</small>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="pass" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Confirm password</label>
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="pass2" required />
                  </div>
                  <div>
                    <span name="sta">*</span>
                  </div>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="options" value="Male" id="option1" autocomplete="off" required> Male
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" value="Female" id="option2" autocomplete="off"> Female
                    </label>

                  </div><br><br>
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="terms_accepted" required id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="terms.html" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>
                  <p>
                    <?php
if (isset($_POST['sub'])) {
    // print_r($_POST);
    $_SESSION['user'] = $user = $_POST['user'];
    $_SESSION['pass'] = $pass = $_POST['pass'];
    $_SESSION['pass2'] = $pass2=$_POST['pass2'];
    $_SESSION['email'] = $name = $_POST['name'];
    $_SESSION['name'] = $email = $_POST['email'];
    $_SESSION['phone'] = $phone = $_POST['phone'];
    $_SESSION['gender'] = $gender = $_POST['options'];
    
    $file = fopen("user.csv", "r");
    while (($row = fgetcsv($file)) !== false) {
        if ($row[0] === $user) {
            die("<div class='d-flex justify-content-center'><input type='submit' class='btn btn-success btn-block btn-lg gradient-custom-4 text-body' value='Try Again'> </div><div class='alert alert-danger' role='alert'>
                          Username '$user' is already exists.
                          </div>");
        }
    }
    if ($pass !== $pass2) {

        print_r($_POST);
        // echo "$pass<br>$pass2";
        echo ("<div class='d-flex justify-content-center'><input type='submit' class='btn btn-success btn-block btn-lg gradient-custom-4 text-body' value='Try Again'> </div><div class='alert alert-danger' role='alert'>
                        Password doesn't match.
                        </div> ");

    } else {

        echo "<div class='alert alert-success' role='alert'>
                    $user registration successfull!
                    </div><a align='center' href=login.php> click here to login</a>";
        $fileappend = fopen("user.csv", "a") or die("ERROR! can't open file user.csv");
        $data = array($_POST['user'], $_POST['pass']);
        fputcsv($fileappend, $data) or die("ERROR! can't write on file user.csv");
        //  sleep(0.5);
        $mainfile = fopen("registration.csv", "a");
        $whole_data = array($name, $user, $email, $pass, $gender, $phone);
        fputcsv($mainfile, $whole_data) or die("ERROR! unable to write data in $mainfile");
        fclose($file);
        fclose($fileappend);
        fclose($mainfile);
        //  header("Location:homepage.html");

    }
}
?>
                  </p>

                  <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Register" name="sub">
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                </form>
                <script>

                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>