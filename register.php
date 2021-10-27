<!DOCTYPE html>
<html>
<head>
    <?php include "components/head.php" ?>
    <title>Register</title>
</head>
<body>
    <main>
        <section id="register-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="register-article">
                            <p class="text-logo text-red">Doplas</p>
                            <h1 class="header-1">Register</h1>
                            <p class="paragraph text-secondary">See your growth and get consulting support!</p>
                            <form class="mt-5">
                                <div class="form-group mt-3">
                                    <label class="paragraph" for="username">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-pill mt-2" id="username" aria-describedby="username" name="username" placeholder="Username"
                                           required>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="paragraph" for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-pill mt-2" id="password" aria-describedby="password" name="password" placeholder="****"
                                           required>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="paragraph" for="repassword">Repeat Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-pill mt-2" id="repassword" aria-describedby="repassword" name="repassword" placeholder="****"
                                           required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="submit" class="form-control form-control-lg rounded-pill mt-2 bg-red text-light" value="Register">
                                </div>
                            </form>
                            <p class="mt-2">Not registered ? <a href="#">Create an Account</a></p>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <aside class="bg-blue" style="min-height: 620px;">
                            <div class="row">
                                <div class="col-12">
                                    <center>
                                        <img class="img-fluid mb-5" src="assets/images/phone.png" alt="phone" width="400px">
                                    </center>
                                </div>
                                <div class="col-12">
                                    <h4 class="text-center text-bold text-light mt-5 mb-5">Get easier to find a blood</h4>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>