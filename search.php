<?php
    require_once('config.php');
    require_once('header.php');

    $query  = $_GET[ "search" ];
        
        $mysqli = new mysqli($host, $user, $pass, $db);
            $result = $mysqli->query ("SELECT * FROM stickers
            WHERE (`name` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%')") or die($mysqli->error); 

        while ($post = $result->fetch_assoc()): ?>

        <div class = "product">
                <div class = "product-window">
                <a href="product.php?id=<?php echo $post['id'];?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( stripslashes($post['photo']) ).'" width = "200px" height = "200px" />'; ?></a>
                </div>
                <div class = "product-name">
                    <?= $post['name'] ? $post['name'] : '' ?>
                </div>
                <div class = "product-price">
                    <?= $post['price'] ? $post['price'] : '' ?> &euro;
                </div>
            </div>
        
       <?php endwhile; ?>

       </div>
</div>