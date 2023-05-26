<?php
//signup
include 'connection.php';
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$dob = date('Y-m-d', strtotime($_POST['dob']));
$gender = $_POST['gender'];
$type = $_POST['type'];
$uppercase = preg_match('@[A-Z]@', $pwd);
$lowercase = preg_match('@[a-z]@', $pwd);
$number    = preg_match('@[0-9]@', $pwd);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
        <title>Signup-Page</title>
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
            <section class="form signup">
            <header style="text-align: center;"><img src="TrebbleLogo" style="height: 25px; width: 25px;">Trebble</header>  
                <form method = "post">
                    <div class="'field input">
                        <label>Name</label>
                        <input type="text" placeholder="Enter your name" name = "name" required>
                    </div>
                    <br>
                    <div class="'field input">
                        <label>DOB</label>
                        <input type="date" name = "dob"   required>
                    </div>
                    <br>
                    <div class="dropdown">
                        <label>Gender</label>
                        <select name="gender" id="gender">
                        <button class="dropbtn">Choose One</button>
                        <div class="dropdown-content">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="Other">Other</option>
                        </div>
                        </select>
                    </div>
                    <br>
                    <div class="'field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your email address" name = "email" required>
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
                    <br>
                    <?php
                    if (isset($type)){
    if ($type != "org"){
        $sql = "SELECT * FROM User WHERE EMAIL = $email";
        $result = mysqli_query($conn,$sql);
        $resultnum = mysqli_num_rows($result);
        if($resultnum > 0) {?>
        <div class="error-txt">Email Already Exists</div><?php
        }
        else{
        if (!$lowercase || !$number || !$uppercase || strlen($pwd) < 8) {?>
        <div class="error-txt">Password should be at least 8 characters in length and should include at least capital letter and one number.</div>
        <?php
        }
        else{
            
                $sql = "INSERT INTO User (PASSWORD, EMAIL, NAME, DOB, GENDER) VALUES ('$pwd', '$email', '$name', '$dob', '$gender')";
                if($conn->query($sql)){
                    header("Location: loginPage.php");
                }
        }
    }
    }
    if ($type != "user"){
           $sql = "SELECT * FROM Organization WHERE EMAIL = $email";
        $result = mysqli_query($conn,$sql);
        $resultnum = mysqli_num_rows($result);
        if($resultnum > 0) {?>
        <div class="error-txt">Email Already Exists</div><?php
        }
        else{
        if (!$lowercase || !$number || !$uppercase || strlen($pwd) < 8) {?>
        <div class="error-txt">Password should be at least 8 characters in length and should include at least capital letter and one number.</div>
        <?php
        }
        else{
            
            
                $sql = "INSERT INTO Organization (PASSWORD, EMAIL, ORGANIZATION) VALUES ('$pwd', '$email', '$name')";
                if($conn->query($sql)){
                    header("Location: loginPage.php");
                }
            
        }
    }
    }
}?>
                     <div class="dropdown">
                        <label>Account Type</label>
                        <select name="type" id="type">
                        <button class="dropbtn">Choose One</button>
                        <div class="dropdown-content">
                        <option value="user">User</option>
                        <option value="org">Organization</option>
                        </div>
                        </select>
                    </div>
                    <!-- <div class="form-check">
                        <input type="radio" class="form-check-input1" id="user" name="type" value="user">
                        <label class="form-check-label" for="radio1">User</label>
                        <input type="radio" class="form-check-input2" id="org" name="type" value="org"'>
                        <label class="form-check-label" for="radio2">Organization</label>
                    </div> -->
                    <br>
                    <div class="field button">
                        <input type="submit" value="Continue to Trebble" name = "submit">
                    </div>
                </form>
                <div class="link">Already have an account? <a href="loginPage.php">Login Now</a></div>
                <div class="link">Admin? <a href="admin.php">Login Now</a></div>
            </section>
        </div>
    </body>

    <script>
    //not used, previous attempt for date validation
        function validateDate() {
            var dateInput = document.getElementById("dob");
            var dateValue = dateInput.value;
  
            // Check if all inputs are not empty
            if (dateValue.split("-").some(input => input.trim() === "")) {
                alert("Please enter a valid date.");
                return false;
            }
  
            // Date is valid, submit the form
            alert("Date is valid!");
            document.querySelector("form").submit();
        }
    </script>
</html>