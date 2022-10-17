<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
</head>

<body>
    <!-- <form action="?controller=Login&action=login" method="post">
        <label for="user">Email</label>
        <input type="email" name="user" id="user" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Log In">
    </form> -->

    		 <a id="home" class="btn btn-primary" href="?controller=signup&action=createUser">Sign Up</a>

    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h1><i class="fa-sharp fa-solid fa-globe"></i></h1>
                </span>
                <h4 class="company_title">Goo Travel</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row py-2">
                        <h2>Log In</h2>
                    </div>
                    <!--PAGE PHP -->
                    <div class="row">
                        <form id="form" method="post" action="?controller=Login&action=login">
                            <div class="row">
                                <label for="user">Email</label>
                                <input type="text" name="user" id="user" class="form__input" placeholder="Enter your email...">
                            </div>
                            <div class="row">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form__input" placeholder="Enter your password...">
                            </div>
                            <!-- <div class="row">
                                <input type="checkbox" name="remember_me" id="remember_me" class="">
                                <label for="remember_me">Remember Me!</label>
                            </div> -->
                            <div class="row d-flex justify-content-center">
                                <input type="submit" value="Log In" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>