<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/noteDashboard.css" />
</head>

<body>
    <div class="container">
        <h1>FavNote's page!</h1>
        </br>

        <?php
        if ($this->action == "getFavNote" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The FavNote does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="index.php?controller=FavNote&action=<?php echo isset($this->data['id']) ? "updateFavNote" : "createFavNote" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input required type="text" value="<?php echo isset($this->data['title']) ? $this->data['title'] : null ?>" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input required type="text" value="<?php echo isset($this->data['content']) ? $this->data['content'] : null ?>" class="form-control" id="content" name="content" aria-describedby="contentHelp" placeholder="Enter content">
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


            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=favNote&action=getAllFavNotes&action=getAllFavNotes"; ?>">Return</a>
        </form>
    </div>
</body>

</html>