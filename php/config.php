<?php
$conn = new mysqli("sql109.epizy.com", "epiz_33810149", "qMAcAHdhxcF", "epiz_33810149_trebble");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}?>