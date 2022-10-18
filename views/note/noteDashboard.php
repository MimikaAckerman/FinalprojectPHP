<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODO-list</title>

    <link rel="stylesheet" href="assets/css/noteDashboard.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="assets/js/utils.js" defer></script>


</head>

<body>

<!-- Pomodoro Container -->
<div class="pomodoro-container">

    <!-- Session -->
    <div class="pomodoro-item">
        <div id="labelSessionBreak" class="label">Session</div>
        <div class="row-pomodoro">
            <div id="timeLeft">25:00</div>
        </div>
    </div>

    <!-- Session Length -->
    <div class="pomodoro-item">
        <div class="label">Session Length</div>
        <div class="row-pomodoro">
            <button id="sessionDecrement" class="btn-updown">-</button>
            <div id="sessionLength" class="row-pomodoro lengthTime">25</div>
            <button id="sessionIncrement" class="btn-updown">+</button>
        </div>
    </div>

    <!-- Break Length -->
    <div class="pomodoro-item">
        <div class="label">Break Length</div>
        <div class="row-pomodoro">
            <button id="breakDecrement" class="btn-updown">-</button>
            <div id="breakLength" class="row-pomodoro lengthTime">5</div>
            <button id="breakIncrement" class="btn-updown">+</button>
        </div>
    </div>
    
    <!-- Play/Pause/Reset -->
    <div class="pomodoro-item playerButton">
        <div class="row-pomodoro buttonRow">
            <button id="buttonPlay" class="btn-controller">
                <i id="playIcon" class="fas fa-play" aria-hidden="true">play</i>
            </button>
            <button id="buttonReset" class="btn-controller"> 
                <i class="fas fa-sync" aria-hidden="true">reset</i>
            </button>
        </div>
    </div>
  
</div>

















    <div class="container task_list_empty">
    
        <header>
            <!-- <div class="theme_toogle">
                <button class="theme_toogle_btn"></button>
            </div> -->
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
                    foreach ($this->data as $index => $note) {
                        echo "<tr>";
                        /*     echo "<td class='tg-0lax'>" . $note["id"] . "</td>"; */
                        echo "<td class='tg-0lax'>" . $note["title"] . "</td>";
                        echo "<td class='tg-0lax'>" . $note["content"] . "</td>";
                        echo "<td class='tg-0lax'>" . $note["initial_date"] . "</td>";
                        echo "<td class='tg-0lax'>" . $note["final_date"] . "</td>";
                        echo "<td colspan='2' class='tg-0lax'>
                        <a class='btn btn-secondary' href='?controller=Note&action=getNote&id=" . $note["id"] . "'>Edit</a>
                        <a class='btn btn-danger' href='?controller=Note&action=deleteNote&id=" . $note["id"] . "'>Delete</a>
                        <a class='btn btn-secondary' href='?controller=Note&action=addFavNote&id=" . $note["id"] . "'>Add Fav.</a>
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


            <a id="home" class="btn btn-light" href="?controller=Note&action=createNote">Create</a>
            <a id="home" class="btn btn-light" href="./">Back</a>





            <a type="button" href="?controller=favNote&action=getAllFavNotes" class="btn btn-primary" style="margin-left: 137vh;">Favorite notes</a>
            <a id="home" class="btn btn-danger" href="?controller=Login&action=logout">Log out</a>



        </footer>
    </div>
</body>

</html>