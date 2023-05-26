<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['user_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM Messages LEFT JOIN User ON User.USER_ID = Messages.SENT_TO_USER
                WHERE (Messages.SENT_TO_USER = {$outgoing_id} AND Messages.SENT_FROM_USER = {$incoming_id})
                OR (Messages.SENT_TO_USER = {$incoming_id} AND Messages.SENT_FROM_USER = {$outgoing_id}) ORDER BY MSG_ID";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['SENT_TO_USER'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['CONTENT'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <div class="details">
                                    <p>'. $row['CONTENT'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }

?>