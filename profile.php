<?php 
    include('config.php');
    include('header.php');
    include('functions.php');


    if (isset($_SESSION['user']) && !empty($_SESSION['user'])){
        echo $_SESSION['user']['username']; ?></strong>
        <strong><?php echo $_SESSION['user']['email']; ?></strong><br>
        <?php echo ucfirst($_SESSION['user']['user_type']); ?></i> <br>

        <a href="logout.php">Logout</a>
       <?php if ($_SESSION['user']['user_type'] == 'admin') {
         echo '<a href = "add_sticker.php">Add sticker</a>' ?>
       <?php } ?>
       

    <?php } else { ?>
        <div class = "login-window">
            <form method="post" action="profile.php">
                <div class="input-group">
                    <label>Username : </label>
                    <input type="text" name="username" required>
                </div>
                <div class="input-group">
                    <label>Password : </label>
                    <input type="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="login_btn">Login</button>
                </div>
                <p>
                    Not a member? <a href="register.php">Sign up</a>
                </p>
            </form>
        </div>


    <?php } ?>