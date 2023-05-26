<?php
    session_start();
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM Messages WHERE (SENT_FROM_USER = {$row['USER_ID']}
                OR SENT_TO_USER = {$row['USER_ID']}) AND (SENT_TO_USER = {$outgoing_id} 
                OR SENT_FROM_USER = {$outgoing_id}) ORDER BY MSG_ID DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['CONTENT'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['SENT_TO_USER'])){
            ($outgoing_id == $row2['SENT_TO_USER']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }

        $output .= '<a href="exchange.php?user_id='. $row['USER_ID'] .'">
                    <div class="content">
                    <div class="details">
                        <span>'. $row['NAME'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                </a>';
    }
?>