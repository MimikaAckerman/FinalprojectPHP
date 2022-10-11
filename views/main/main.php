<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Welcome to MVC Pattern Basics!</h1>
    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="?controller=Subscriber&action=getAllSubscribers">Subscriber Controller</a>
        <a class="list-group-item list-group-item-action" href="?controller=User&action=getAllUsers">User Controller</a>
    </div>

    <div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h1><i class="fa-sharp fa-solid fa-globe"></i></h1></span>
				<h4 class="company_title">Go Travel</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row py-2">
						<h2>Log In</h2>
					</div>

                    <!--PAGE PHP -->


					<div class="row">
						<form id="form" method="post">
							<div class="row">
								<input type="text" name="email" id="username" class="form__input" placeholder="Enter your email...">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="pass" id="password" class="form__input" placeholder="Enter your password...">
							</div>
							<div class="row">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Remember Me!</label>
							</div>
							<div class="row d-flex justify-content-center">
								<input type="submit" value="Submit" class="btn" name="login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>