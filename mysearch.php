<?php include "db.php";


if(isset($_POST['text'])){
    $msg=$_POST['text'];
    $query=mysqli_query($conn,"select * from question where question RLIKE '[[:<:]]".$msg."[[:>:]]'");
    $count=mysqli_num_rows($query);

    if($count=="0"){
        $bot="I am sorry but I am not exactly clear how help you";
        $query4=mysqli_query($conn,"insert to chats(user, chatbot, date)values('$msg', '$data', '$server_time')");
            }else{
                while($row=mysqli_fetch_array($query)){
                    $data=$row['answer'];

                        $query4=mysqli_query($conn, "insert to chats(user, chatbot, date)values('$msg', '$data', '$server_time')");
                }
            }

}
?>