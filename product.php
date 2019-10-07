<?php
include('config.php');
include('header.php');

if ( isset( $_GET[ "id" ] ) )
$id  = $_GET[ "id" ];

$mysqli = new mysqli($host, $user, $pass, $db);
    $result = $mysqli->query ("SELECT * FROM stickers WHERE id = $id")
    or die($mysqli->error);

    $post = $result->fetch_assoc();
    ?>
    <div class = "sticker">
        <div class = "sticker-image">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( stripslashes($post['photo']) ).'" width = "400px" height = "400px" />'; ?></a>
        </div>
        <div class = "sticker-info">
            <div class = "sticker-name">
                <?= $post['name'] ? $post['name'] : '' ?><br>
            </div>
            EUR <?= $post['price'] ? $post['price'] : '' ?><br>
            <a href="add_to_cart.php?id=<?php echo $post['id'];?>" method="GET">Add To Cart</a>

        </div>
    </div>

</div>
</div>