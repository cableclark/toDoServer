<?php 

require "../bootstrap.php";

?>

    <h1> Add your new task</h1>
    <form action="POST" method="../controller/taskcontroller.php" class="in">

        <input type="text" name= "task" > 

        <button type="submit" name = "submit" > Add </button> 

    </form>
    
</body>
</html>