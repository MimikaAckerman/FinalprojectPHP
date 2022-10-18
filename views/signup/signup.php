<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>User's page!</h1>
        </br>

       

        <form class="mb-5 needs-validation" action="index.php?controller=signup&action=<?php echo isset($this->data['id']) ? "updateUser" : "createUser" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['name'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input required type="text" value="<?php echo isset($this->data['last_name']) ? $this->data['last_name'] : null ?>" class="form-control" id="last_name" name="last_name" aria-describedby="last_nameHelp" placeholder="Enter lastname">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input required type="email" value="<?php echo isset($this->data['email']) ? $this->data['email'] : null ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" value="<?php echo isset($this->data['password']) ? $this->data['password'] : null ?>" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter password">
                        <small id="password" class="form-text text-muted">We'll never share your password with anyone else.</small>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=user&action=getAllUsers&action=getAllUsers"; ?>">Return</a>
        </form>
    </div>




</body>

</html>