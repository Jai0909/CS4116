<?php
session_start();
if (!isset($_SESSION["user_id"])) {
   header('Location: loginPage.php');
  // The USER_ID variable is not set in the session
}
