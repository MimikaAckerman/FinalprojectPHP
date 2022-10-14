<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODO-list</title>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/noteDashboard.css" />

<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="/assets/js/utils.js"></script>


</head>

<body>
    <div class="container task_list_empty">
        <header>
            <div class="theme_toogle">
                <button class="theme_toogle_btn"></button>
            </div>
            <span class="heading">My Day</span>
           


            <!--ESTO ES EL CODIGO PHP-->
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
                    foreach ($this->data as $index => $notes) {
                        echo "<tr>";
                    /*     echo "<td class='tg-0lax'>" . $note["id"] . "</td>"; */
                        echo "<td class='tg-0lax'>" . $notes["title"] . "</td>";
                        echo "<td class='tg-0lax'>" . $notes["content"] . "</td>";
                        echo "<td class='tg-0lax'>" . $notes["initial_date"] . "</td>";
                        echo "<td class='tg-0lax'>" . $notes["final_date"] . "</td>";
                        echo "<td colspan='2' class='tg-0lax'>
                        
                        <a class='btn btn-secondary' href='?controller=Note&action=getNote&id=" . $notes["id"] . "'>Edit</a>
                        <a class='btn btn-danger' href='?controller=Note&action=deleteNote&id=" . $notes["id"] . "'>Delete</a>
                    
                    
                        </td>";
                        
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>


        </header>
        <section class="tasks">
            <ul id="tasksList"></ul>
        </section>
        <footer>
           

            <a id="home" class="btn btn-light"   href="?controller=Note&action=createNote">Create</a>
            <a id="home" class="btn btn-light" href="./">Back</a>

   

           
        </footer>
    </div>

<!--MODAL DE CREATE NOTE-->





</body>

</html>