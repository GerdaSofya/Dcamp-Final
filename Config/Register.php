<?php

require_once("Connection.php");

if(isset($_POST['signup'])){


    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);



    $sql = "INSERT INTO register ( username, password, email) 
            VALUES ( :username, :password, :email)";
    $stmt = $db->prepare($sql);


    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    $saved = $stmt->execute($params);


    if($saved) echo "<script>
    alert('Register Berhasil !');
    document.location.href = 'Register.php';
    </script>";;
}

?>