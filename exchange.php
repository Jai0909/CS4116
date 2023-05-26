<?php 
  session_start();
  include_once "php/config.php";
?>
<?php include "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
        include_once "php/config.php";
          $user_id = $_GET['user_id'];
          $sql = mysqli_query($conn, "SELECT * FROM User WHERE USER_ID = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="details">
          <span><?php echo $row['NAME']?></span>
        </div>
        <style>
        
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: linear-gradient(to right top, rgb(10, 10, 10), rgb(60, 60, 60));
}

.wrapper {
    background: linear-gradient(
        to right bottom,
        rgba(255, 255, 255, 0.7),
        rgba(255, 255, 255, 0.3)
      );
      width: 450px;
      box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                  0 32px 64px -48px rgba(0, 0, 0, 0.5);
    border-radius: 1rem;
}
/* Chat Area CSS code */

.chat-area header{
    display: flex;
    align-items: center;
    padding: 18px 30px;
}

.chat-area header img{
    height: 45px;
    width: 45px;
    margin: 0 15px;
}

.chat-area header{
    font-size: 17px;
    font-weight: 500;
    background: #ffd04f;
    border-top-right-radius: 1rem;
    border-top-left-radius: 1rem;
}

.chat-box{
    height: 500px;
    overflow-y: auto;
    padding: 10px 30px 20px 30px;
    box-shadow: inset 0 32px 32px -32px rgba(0 0 0 / 5%),
                inset 0 -32px 32px -32px rgba(0 0 0 5%);
    background: linear-gradient(
        to right bottom,
        rgba(255, 255, 255, 0.7),
        rgba(255, 255, 255, 0.3)
      );
}

.chat-box .chat{
    margin: 15px 0;
}

.chat-box .chat p{
word-break: break-word;
    padding: 8px 16px; 
    box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                0 16px 16px -16px rgb(0 0 0 / 10%); 
}

.chat-box .outgoing{
    display: flex;
}

.outgoing .details{
    margin-left: auto;
    max-width: calc(100%-130px);
}

.outgoing .details p{
    background: #333;
    color: #fff;
    border-radius: 18px 18px 0 18px;
}

.chat-box .incoming{
    display: flex;
    align-items: flex-end;
}

.chat-box .incoming img{
    height: 35px;
    width: 35px;

}

.incoming .details{
    margin-left: 10px;
    margin-right: auto;
    max-width: calc(100%-130px);
}

.incoming .details p{
    color: #333;
    background: #fff;
    border-radius: 18px 18px 18px 0;
}

.chat-area .typing-area{
    padding: 18px 30px;
    display: flex;
    justify-content: space-between;
}

.typing-area input{
    height: 45px;
    width: calc(100% - 58px);
    font-size: 17px;
    border: 1px solid #ccc;
    padding: 0 13px;
    border-radius: 5px 0 0 5px;
    outline: none;
}

.typing-area button{
    width: 55px;
    border: none;
    outline: none;
    background: #ffd04f;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}
  </style>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area" autocomplete ="off">
        <input type="text" class="outgoing_id" name="outgoing_id" value="<?php echo $_SESSION['user_id']; ?>" hidden>
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here...">
        <button><i class="fab fa-telegram-plane" style="font-size: x-large;"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/exchange.js"></script>

</body>
</html>
