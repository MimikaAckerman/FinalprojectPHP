<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<link rel="stylesheet" href="assets/css/note.css" />


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>





</head>

<body>
    <div class="container task_list_empty">
        <header>
            <div class="theme_toogle">
                <span class="heading">Note's page</span>
      
             <!--CODE PHP-->

        <?php
        if ($this->action == "getNote" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The note does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>




        <form class="mb-5 needs-validation" action="index.php?controller=Note&action=<?php echo isset($this->data['id']) ? "updateNote" : "createNote" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['title'] : null ?>" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea required type="text" value="<?php echo isset($this->data['content']) ? $this->data['content'] : null ?>" class="form-control" id="content" name="content" aria-describedby="contentHelp" placeholder="Enter content"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputInitialDate1">Initial date</label>
                        <input required type="text" value="<?php echo isset($this->data['initial_date']) ? $this->data['initial_date'] : null ?>" class="form-control" id="initial_date" name="initial_date" aria-describedby="initial_dateHelp" placeholder="Enter initial date">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="final_date">Final date</label>
                        <input type="text" value="<?php echo isset($this->data['final_date']) ? $this->data['final_date'] : null ?>" class="form-control" id="final_date" name="final_date" aria-describedby="final_dateHelp" placeholder="Enter final date">
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-success">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=note&action=getAllNotes&action=getAllNotes"; ?>">Return</a>
        </form>
    </div>
</body>

</html>