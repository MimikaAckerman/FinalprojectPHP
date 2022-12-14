<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODO-list</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/noteDashboard.css"/>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container task_list_empty">
        <header>
            <span class="heading">Favorites</span>
        </header>

        <main>
            <table class="table">

                <thead>
                    <tr>
                        <!--    <th class="tg-0pky">ID</th> -->
                        <th class="tg-0pky">Title</th>
                        <th class="tg-0lax">Content</th>
                        <th class="tg-0lax">Initial date</th>
                        <th class="tg-0lax">Final date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->data as $index => $favNote) {
                        echo "<tr>";
                        echo "<td class='tg-0lax'>" . $favNote["id"] . "</td>";
                        echo "<td class='tg-0lax'>" . $favNote["title"] . "</td>";
                        echo "<td class='tg-0lax'>" . $favNote["content"] . "</td>";
                        echo "<td class='tg-0lax'>" . $favNote["initial_date"] . "</td>";
                        echo "<td class='tg-0lax'>" . $favNote["final_date"] . "</td>";
                        echo "<td colspan='2' class='tg-0lax'>

                        <a class='btn btn-secondary' href='?controller=favNote&action=getFavNote&id=" . $favNote["id"] . "'>Edit</a>
                        <a class='btn btn-danger' href='?controller=FavNote&action=deleteFavNote&id=" . $favNote["id"] . "'>Delete</a>


                        </td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <section class="tasks">
                <ul id="tasksList"></ul>
            </section>

        </main>
        <footer>
            <a id="home" class="btn btn-light" href="?controller=Note&action=getAllNotes">Back</a>
            <a id="home" class="btn btn-danger btn-logout" href="?controller=Login&action=logout">Log out</a>
        </footer>
    </div>
</body>

</html>