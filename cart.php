<?php
    require_once('config.php');
    require_once('header.php');?>
    <table class = "cart2">

    <?php
    if (isset ($_SESSION['user']['id'])) {
         $id = $_SESSION['user']['id'];
    
    $mysqli = new mysqli($host, $user, $pass, $db);
    $result = $mysqli->query ("SELECT * FROM cart WHERE user_id = $id")
    or die($mysqli->error);
    $sum = 0;

    while ($post = $result->fetch_assoc()): 
    $pid = $post['product_id'] ? $post['product_id'] : ''; 
    $results = $mysqli->query ("SELECT * FROM stickers WHERE id = $pid")
    or die($mysqli->error);

    $cart = $results->fetch_assoc();
        ?>
        <!-- <div class = "cart"> -->
            <!-- <div class = "cart-photo"> -->
                    <tr>
                <th><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( stripslashes($cart['photo']) ).'" width = "50px" height = "50px" />'; ?></a></th>
            <!-- </div>
            <div class = "cart-name"> -->
                <th><?= $cart['name'] ? $cart['name'] : '' ?></th>
            <!-- </div>
            <div class = "cart-quantity"> -->
                <th> 1 pcs </th>
            <!-- </div>
            <div class = "cart-price"> -->
                <th>  EUR <?= $cart['price'] ? $cart['price'] : '' ?></th>
                        <?php $sum += $cart['price']; ?>
            <!-- </div> -->
            <!-- <div class = "cart-delete"> -->
               <th> <a href="delete_cart.php?id=<?php echo $post['id'];?>">Delete</a> </th>
                </tr>
                
            <!-- </div> -->
            
        <!-- </div><br> -->

<?php endwhile; ?>
<th></th><th></th><th></th><th></th><th>
<div class = 'cart-total'>
    Total : <?php echo $sum ?> EUR
</div></th>
</table> <?php } ?>

</div>

</div>

