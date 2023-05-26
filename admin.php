<?php
$id = $_POST['id'];
$pwd = $_POST['pwd'];
if($id == "Admin789" and $pwd == "Password$1234"){
    header("Location: admindisplay.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
        <link rel="icon" type="image/x-icon" href="TrebbleLogo">
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.15.2/css/all-min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script type="text/javascript">
      window.history.forward();
  </script>
    </head>
    <body>
        <div class = "wrapper">
            <section class="form login">
                <header style="text-align: center;"><img src="TrebbleLogo" style="height: 25px; width: 25px;">Trebble</header>
                <form method="POST">
                    <div class="'field input">
                        <label>ID</label>
                        <input type="text" placeholder="Admin ID" name="id">
                    </div>
                    <br>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" id="pwd" name="pwd" placeholder="Enter your password">
                        <i class="bi bi-eye-fill" id="show-password"></i>
                        <style>
                        .form form .field i {
                            position: absolute;
                            margin-left: 365px;
                            margin-top: 30px;
                            color: #808080;
                            cursor: pointer;
                        } 
                        .form form .field i.active::before{
                            content: "\F33F";
                            color: #333;
                        }
                        </style>
                        <script>
                        const pswrdField = document.querySelector(".form .field input[type='password']"),
                        toggleBtn = document.querySelector(".form .field i");
                        
                        toggleBtn.onclick = ()=>{
                            if(pswrdField.type == "password"){
                                pswrdField.type = "text";
                                toggleBtn.classList.add("active");
                            }else{
                                pswrdField.type = "password";
                                toggleBtn.classList.remove("active");
                            }
                        }

                        </script>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Admin">
                    </div>
                </form>
                <div class="link">Not signed up yet? <a href="Signup.php">Signup Now</a></div>
                <div class="link">Already have an account? <a href="loginPage.php">Login Now</a></div>
            </section>
        </div>
    </body>
</html>