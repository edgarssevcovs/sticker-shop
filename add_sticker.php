<?php
    require_once('config.php');
    require_once('db.php');
?>


<?php
        $db = new DB($host, $user, $pass, $db);
    ?>
    <form action="new_sticker.php" method="POST" enctype="multipart/form-data">
        Name : <input type = "text" name = "name">
        Price : <input type = "number" name = "price" step = "0.01">
        Category : <input type = "text" name = "category">
        <input type = "file" name="photo" accept=".png, .jpg">
        <button type="submit">SUBMIT</button>
    </form>

