<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<header>
        <a href="?controller=Login&action=logout">Log out</a>
</header>

<body>
    <h1>User Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">Last name</th>
                <th class="tg-0lax">Email</th>
                <th class="tg-0lax">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $user) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $user["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["last_name"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["email"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["password"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=User&action=getUser&id=" . $user["id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=User&action=deleteUser&id=" . $user["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=User&action=createUser">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>