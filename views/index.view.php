<div class="container-fluid">
  
<div>
    <h2> Add your new task</h2>
    <div class="form-group">
        <form action="../database/control.php" method="POST">

            <input class="form-control form-control-lg" type="text" name="new"> 
            <br>
            <button class="btn btn-outline-primary" type="submit" name="submit" > Add </button> 

        </form>
    </div>
    <ul>
        <?php
            foreach ($tasks as $row) {
                $task = htmlentities($row->task);
                echo "<li>". $task ; ?>
                <a href='index.php?id=<?php echo htmlspecialchars($row->id)?>'>Delete </a> </li><br>
                <?php
                }
                ?>
        </ul>
    </div>
</div>
</body>
</html>