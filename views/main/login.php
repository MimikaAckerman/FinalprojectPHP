<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in TODO List</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <script src="assets/js/utils.js" defer></script>
</head>

<body>

    <section class="forms-section">
        <h1 class="section-title">WELCOME USER</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form id="form" method="post" action="?controller=Note&action=getAllNotes" class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="user">E-mail</label>
                            <input id="user" name="user" type="email" placeholder="Enter your email..." required>
                        </div>
                        <div class="input-block">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" placeholder="Enter your password..." required>
                        </div>
                    </fieldset>
                    <input type="submit" value="Log In" class="btn-login">
                </form>
            </div>
        </div>
    </section>



                        <!-- <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row py-2">
                                    <h2>Log In</h2>
                                </div>
                                PAGE PHP
                                <div class="row">
                                    <form id="form" method="post" action="?controller=Login&action=login">
                                        <div class="row">
                                            <label for="user">Email</label>
                                            <input type="email" name="user" id="user" class="form__input" placeholder="Enter your email...">
                                        </div>
                                        <div class="row">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form__input" placeholder="Enter your password...">
                                        </div>
                                        <div class="row">
                                <input type="checkbox" name="remember_me" id="remember_me" class="">
                                <label for="remember_me">Remember Me!</label>
                            </div>
                                        <div class="row d-flex justify-content-center">
                                            <input type="submit" value="Log In" class="btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
    </section> -->
</body>

</html>