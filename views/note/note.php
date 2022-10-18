<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container task_list_empty">
        <header>
            <div class="theme_toogle">
                <span class="heading">Note's page</span>
      
             <!--CODE PHP-->

<<<<<<< HEAD


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  example modal
</button>




<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit notes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>











=======
>>>>>>> jc
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
                        <label for="title">Title</label>
                        <input required type="text" value="<?php echo isset($this->data['title']) ? $this->data['title'] : null ?>" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
                    </div>
                </div>
            </div>

            <div class="form-row">
>>>>>>> jc
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
<<<<<<< HEAD
                        <small id="initial_dateHelp" class="form-text text-muted">We'll never share your initial date with anyone else.</small>
=======
>>>>>>> jc
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


            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=note&action=getAllNotes&action=getAllNotes"; ?>">Return</a>
        </form>
    </div>
</body>

</html>