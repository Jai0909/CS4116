<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    //$_session here
    $_SESSION['user_mail']=$_POST['email'];
    $_SESSION['acc_type']=$_POST['type'];

    include 'connection.php';
   
    $login_query = sprintf("SELECT * FROM User
                    WHERE EMAIL = '%s'",
                   $conn->real_escape_string($_POST["email"]));
    
    $login_result = $conn->query($login_query);
    $user = $login_result->fetch_assoc();
    $login_query_org = sprintf("SELECT * FROM Organization
                    WHERE EMAIL = '%s'",
                   $conn->real_escape_string($_POST["email"]));
    
    $login_result_org = $conn->query($login_query_org);
    
    $org = $login_result_org->fetch_assoc();


    $type = $_POST['type'];

    if($_POST['email'] != $user['EMAIL'] and $org['EMAIL'] == null){
                header("Location: repeatLogin.php"); exit;
    }

    if($_POST['email'] != $org['EMAIL'] and $user['EMAIL'] == null){
                header("Location: repeatLogin.php"); exit;
    }
    


if (isset($type)){
    if ($type == "user") {
        if($login_result_org){
                header("Location: repeatLogin.php");
            }
        if ($user) {
            if($user['FLAG_1'] == 1 and $user['FLAG_2'] == 1 and $user['FLAG_3'] == 1){
                header("Location: error.html");
            } else if ($_POST["pwd"] == $user["PASSWORD"]) {
                        
            //session_regenerate_id();
            
            $_SESSION["user_id"] = $user["USER_ID"];
            unset($_SESSION['user_mail']);
            header("Location: home.php");
            exit;
        } else { 
           header("Location: repeatLogin.php"); exit;} 
        }
    } else {
        if ($login_result){
                header("Location: repeatLogin.php");
            }
        if ($org) {
            if($org['FLAG_1'] == 1 and $org['FLAG_2'] == 1 and $org['FLAG_3'] == 1){
                header("Location: error.html");
            }
        
            else if ($_POST["pwd"] == $org["PASSWORD"]) {
                        
            session_regenerate_id();
            
            $_SESSION["user_id"] = $org["ORG_ID"];
            unset($_SESSION['user_mail']);
            header("Location: orgHome.php");
            exit;
        } else {header("Location: repeatLogin.php"); exit;}
    }

    }
}

}


?>
