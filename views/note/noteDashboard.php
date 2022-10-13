<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Note Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Title</th>
                <th class="tg-0lax">Content</th>
                <th class="tg-0lax">Initial date</th>
                <th class="tg-0lax">Final date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $note) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $note["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $note["title"] . "</td>";
                echo "<td class='tg-0lax'>" . $note["content"] . "</td>";
                echo "<td class='tg-0lax'>" . $note["fecha_inicio"] . "</td>";
                echo "<td class='tg-0lax'>" . $note["fecha_final"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Note&action=getNote&id=" . $note["id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Note&action=deleteNote&id=" . $note["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=Note&action=createNote">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>