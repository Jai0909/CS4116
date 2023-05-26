<?php require 'sessionAuthenticator.php' ?>
    <?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['user_id'])){
  }
?>
<?php include "header.php"; ?>
<body style="background: linear-gradient(to right top, rgba(36, 36, 36), rgb(100, 100, 100));" >
  <div class="wrapper" style="background: #ffd04f";>
    <section class="users">
      <header>
          <?php
                    include_once "php/config.php";
                        $sql = mysqli_query($conn, "SELECT * FROM User WHERE USER_ID = {$_SESSION['user_id']}" );
                        if(mysqli_num_rows($sql) > 0){
                            $row = mysqli_fetch_assoc($sql);
                        }
                    ?>
        <div class="content">
          <div class="details">
            <span><?php echo $row['NAME']?></span>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
    <div class="users-list"></div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
</body>
</html>
