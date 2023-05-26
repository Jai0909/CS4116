<?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['FLAG_1']== 0){
            $query = "UPDATE User SET FLAG_1=1 WHERE USER_ID = $user_id";
            $conn->query($query);
            header("Location: orgHome.php");
        }
        else {
            if($row['FLAG_2']== 0){
                $query = "UPDATE User SET FLAG_2=1 WHERE USER_ID = $user_id";
                $conn->query($query);
                header("Location: orgHome.php");
            }
            else{
                if($row['FLAG_3']== 0){
                    $query = "UPDATE User SET FLAG_3=1 WHERE USER_ID = $user_id";
                    $conn->query($query);
                    header("Location: orgHome.php");
            }
        }
	}
}
}
$conn->close();
?>