<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in TODO List</title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <script src="assets/js/utils.js" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
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
                <form id="form" method="post" action="?controller=Login&action=login" class="form form-login">
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

            <!-- Sing in -->
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup"action="index.php?controller=signup&action=<?php echo isset($this->data['id']) ? "updateUser" : "createUser" ?>" method="post">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="name">Name</label>
                            <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['name'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                        </div>
                        <div class="input-block">
                            <label for="lastname">Last name</label>
                            <input required type="text" value="<?php echo isset($this->data['last_name']) ? $this->data['last_name'] : null ?>" class="form-control" id="last_name" name="last_name" aria-describedby="last_nameHelp" placeholder="Enter lastname">
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input required type="email" value="<?php echo isset($this->data['email']) ? $this->data['email'] : null ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input type="password" value="<?php echo isset($this->data['password']) ? $this->data['password'] : null ?>" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter password">
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup" onclick="myFunc()">Continue</button>
                </form>
            </div>
    </section>


    <ul>
        <li><a href="https://www.facebook.com/assemblerinstitute/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://www.youtube.com/c/AssemblerInstituteofTechnology"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        <li><a href="https://www.linkedin.com/school/assembler-institute-technology/?originalSubdomain=es"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/assemblerinstitute/?hl=ha-nlink"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>

</body>

</html>














	<!--JS -->
	<script src="assets/js/utils.js"></script>
</body>
</html>