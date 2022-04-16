<?php
ob_start();
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
        body {
            background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
            color: #333333;

        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        /* #left
        {
            color:black;
            background-size:cover;
            background-repeat:no-repeat;
            background-image: url("/images/logpage2.jpg");
            overflow:hidden;
        } */

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }

        #create {
            text-decoration: none;
        }

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

        #star {
            color: white;
        }
    </style>
    <script>

    </script>
    <title>Login Page</title>
</head>

<body>


    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 gradient-custom-3" id="left">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">

                                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                          style="width: 185px;" alt="logo"> -->
                                        <h4 class="mt-1 mb-5 pb-1">TY BSc (CS)</h4>
                                    </div>

                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                        <p>Please login to your account</p>
                                        <p id=star>*</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username:</label>
                                            <input type="text" id="form2Example11" class="form-control" name="user" placeholder="Username Phone email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password:</label>
                                            <input type="password" id="form2Example22" class="form-control" name="pass" placeholder="***************" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input class="btn btn-primary btn-block fa-lg gradient-custom-3 text-black mb-3" type="submit" name="sub" value="Login">

                                        </div>
                                        
                                           
                                        

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="submit" class="btn btn-outline-success gradient-custom-3" formaction="register.php"> Create new</button>
                                        </div>

                                    </form>

                                </div>
                            </div>


                            <div class="col-lg-6 d-flex align-items-center gradient-custom-4">
                                <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We're more than just a Web app </h4>
                                    <p class="small mb-0">A web-based application is any application that uses a website
                                        as the interface or front-end. Clients can without much of a stretch access the
                                        application from any PC associated with the Internet utilizing a standard
                                        program. It merits calling attention to that practically any work area
                                        programming can be created as a web-based application. Web applications go
                                        through web programs like Google Chrome. The program runs on a web server, as
                                        opposed to on the PC, or nearby server for customary applications.</p>
                                </div>
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
    <?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (isset($_POST['sub'])) {
        $file = fopen("users.csv", "r") or die("FILE NOT FOUND");
        $flag = 1;
        while (!feof($file)) {
            $row = fgetcsv($file);
            // print_r($row);

            if ($user === $row[0] && $pass === $row[1]) {
                $flag = 2;
                header("Location: homepage.html");
            }
        }
        if ($flag == 1) {
            echo "<script>alert('dekhke type kr');</script>";
        }

        fclose($file);
    }



    ?>
</body>

</html>