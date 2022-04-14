<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
  </style>
  <title>New Register</title>
</head>

<body>
  <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                
                

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name:</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                    <small>First name + Last name</small>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg"> Username:</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="user" />
                    <small>Choose a username</small>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                    <small>example@gmail.com</small>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg"  name="pass" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="terms.html" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>
                  <p>
                  <?php
                  if(isset($_POST['sub']))
                  {

                      $user=$_POST['user'];
                      $pass=$_POST['pass'];
                      $file=fopen("userdetails.csv","r");
                      while(($row=fgetcsv($file))!==false)
                      {
                      if($row[0]===$user)
                      {
                          die("<div class='alert alert-danger' role='alert'>
                          Username '$user' is already exists. 
                          </div>");
                      }
                      
                      }
                      
                          // echo "<div class='alert alert-success' role='alert'>
                          // Login details saved successfully!
                          // </div>";
                          $fileappend=fopen("users.csv","a");
                          $data=array($_POST['user'],$_POST['pass']);
                          fputcsv($fileappend,$data) or die("ERROR");
                          //  sleep(0.5);
                          fclose($file);
                          fclose($fileappend);
                          //  header("Location:homepage.html");
                  }
                  ?>
              </p> 
                  <div class="d-flex justify-content-center">
                    <input type="submit"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Register" name="sub">
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                      class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>