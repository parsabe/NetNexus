<?php


include_once "/opt/lampp/htdocs/src/php/connection.php";

if(isset($_POST['emails'])){
    $email_news = mysqli_real_escape_string($connection, $_POST['emails']);
    $date = date("Y-m-d H:i:s");

    if(filter_var($email_news, FILTER_VALIDATE_EMAIL)){
        $checker = $connection->prepare("SELECT * FROM emails WHERE email = ?");
        $checker->bind_param("s", $email_news);
        $checker->execute();
        $res = $checker->get_result();
        if($res->num_rows>0){
            echo "Email already exists";
        } else {
            $insert = $connection->prepare("INSERT INTO emails (email, date) VALUES (?,?)");
            $insert->bind_param("ss", $email_news, $date);
            $exe = $insert->execute();
            if ($exe) {
                echo "success";
            } else {
                echo "Something went wrong";
            }
        }

    } else {
        echo 'valid mail';
    }


} else {
    echo 'Something went wrong';
}
    
    ?>
