<?php

    session_start();
    include('include/include_db_oo.php');

    
    if(!isset($_SESSION['users_id'])){
        $users_id = 0;
    }else{
        $users_id = $_SESSION['users_id'];
    }


?>


<?php if(!$users_id){ ?>
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Sign in</a></li>
    </ul>
<?php }else{ ?>
    <?php
        $sql = "SELECT * FROM users WHERE users_id = '$users_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        }
    ?>
    <ul class="nav">
        <div class="profile-container">
                <img src="assets/images/person.png" alt="Logo" class="profile-image">
                <a href="#"><?php echo $row["users_name"]; ?></a>
        </div>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php } ?>